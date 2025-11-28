<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        // Resume data can be stored in config or database
        // For simplicity, we'll pass static data from config
        return view('resume');
    }
}
