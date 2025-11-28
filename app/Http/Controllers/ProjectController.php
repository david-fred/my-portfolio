<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::published()
            ->ordered()
            ->paginate(12);

        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        if (!$project->is_published) {
            abort(404);
        }

        return view('projects.show', compact('project'));
    }
}
