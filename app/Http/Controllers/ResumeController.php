<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\View\View;

class ResumeController extends Controller
{
    public function index(): View
    {
        $settings = SiteSetting::instance();

        return view('resume', [
            'resume' => [
                'file' => $settings->resume_file,
                'summary' => $settings->resume_summary,
                'skills' => $settings->resume_skills ?? [],
                'experiences' => $settings->resume_experiences ?? [],
                'education' => $settings->resume_education ?? [],
                'certifications' => $settings->resume_certifications ?? [],
            ],
        ]);
    }
}
