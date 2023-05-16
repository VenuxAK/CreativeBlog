<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index()
    {
        return view("admin.index");
    }

    public function blogs()
    {
        return view("admin.blogs");
    }
    public function create()
    {
        return view("admin.blogs.create");
    }
    public function store()
    {
    }
    public function edit()
    {
        return view("admin.blogs.edit");
    }
    public function update()
    {
    }

    // Category
    public function categories()
    {
        return view("admin.categories");
    }
    public function create_category()
    {
        return view("admin.categories.create");
    }
    public function edit_category()
    {
        return view("admin.categories.edit");
    }
    public function update_category()
    {
    }
}
