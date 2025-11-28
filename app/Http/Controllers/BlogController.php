<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::published()
            ->with('user')
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        return view('blogs.index', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        if (!$blog->is_published || $blog->published_at > now()) {
            abort(404);
        }

        $blog->incrementViews();

        return view('blogs.show', compact('blog'));
    }
}
