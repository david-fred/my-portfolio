<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->get('category', 'all');
        
        $projects = Project::published()
            ->byCategory($category)
            ->ordered()
            ->paginate(12)
            ->withQueryString();

        // Get unique categories for filter buttons
        $categories = Project::published()
            ->whereNotNull('category')
            ->distinct()
            ->pluck('category')
            ->filter()
            ->sort()
            ->values();

        return view('projects.index', compact('projects', 'categories', 'category'));
    }

    public function show(Project $project)
    {
        if (!$project->is_published) {
            abort(404);
        }

        return view('projects.show', compact('project'));
    }
}
