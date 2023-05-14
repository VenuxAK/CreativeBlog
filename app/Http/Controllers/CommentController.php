<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Blog $blog)
    {
        $formData = request()->validate([
            "body" => ["required", "min:1"]
        ]);
        Comment::create([
            "body" => request("body"),
            "user_id" => auth()->user()->id,
            "blog_id" => $blog->id
        ]);
        return redirect()->back();
    }
}
