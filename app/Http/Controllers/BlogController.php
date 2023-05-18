<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.index', [
            "blogs" => Blog::latest()->filter(request(['category', 'user', 'search']))->paginate(6)->withQueryString(),
            "latestBlog" => Blog::latest()->first(),
            "categories" => Category::latest()->get()
        ]);
    }
    public function show(Blog $blog)
    {
        return view('blogs.show', [
            "blog" => $blog
        ]);
    }

    public function subscriptionHandler(Blog $blog)
    {
        if (User::find(auth()->id())->isSubscribed($blog)) {
            $blog->unSubscribe();
        } else {
            $blog->subscribe();
        }
        return redirect("/blogs/$blog->slug");
    }
}
