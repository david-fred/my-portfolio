<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Activity;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::published()
            ->featured()
            ->ordered()
            ->take(3)
            ->get();

        $recentActivities = Activity::published()
            ->ordered()
            ->take(3)
            ->get();

        return view('home', compact('featuredProjects', 'recentActivities'));
    }
}
