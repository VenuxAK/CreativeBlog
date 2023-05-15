<?php

namespace App\View\Components;

use App\Models\Blog;
use Illuminate\View\Component;

class RecommendedBlogs extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $recommendedBlogs = Blog::inRandomOrder()->take(4)->get();
        $recommendedBlog = $recommendedBlogs->first();
        return view('components.recommended-blogs', [
            "randomBlogs" => $recommendedBlogs->slice(1),
            "randomBlog" => $recommendedBlog,
        ]);
    }
}
