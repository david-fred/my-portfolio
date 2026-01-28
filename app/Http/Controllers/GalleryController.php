<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(): View
    {
        $images = GalleryImage::query()
            ->ordered()
            ->get();

        return view('gallery.index', compact('images'));
    }
}
