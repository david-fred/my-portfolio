<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::published()
            ->ordered()
            ->paginate(12);

        return view('activities.index', compact('activities'));
    }

    public function show(Activity $activity)
    {
        if (!$activity->is_published) {
            abort(404);
        }

        return view('activities.show', compact('activity'));
    }
}
