<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminBlogController extends Controller
{
    public function index()
    {
        return view("admin.index", [
            "blogs" => Blog::latest()->paginate(5)->withQueryString()
        ]);
    }

    public function blogs()
    {
        return view("admin.blogs", [
            "blogs" => Blog::latest()->paginate(5)->withQueryString()
        ]);
    }
    public function create()
    {
        return view("admin.blogs.create", [
            "categories" => Category::all()
        ]);
    }
    public function store()
    {
        $validatedData = request()->validate([
            "title" => ["required", "min:5", "max:254", Rule::unique("blogs", "title")],
            "slug" => ["required", "min:5", "max:254", Rule::unique("blogs", "slug")],
            "body" => ["required", "min:50"],
            "thumbnail" => "max:254",
            "category_id" => ["required", Rule::exists("categories", "id")],
            "user_id" => [Rule::exists("users", "id")]
        ]);
        $validatedData["thumbnail"] = request()->file("thumbnail")->store("thumbnails");
        $validatedData["user_id"] = auth()->user()->id;
        Blog::create($validatedData);
        return redirect("/admin/blogs");
    }
    public function edit(Blog $blog)
    {
        return view("admin.blogs.edit", [
            "blog" => $blog,
            "categories" => Category::all()
        ]);
    }
    public function update(Blog $blog)
    {
        $validatedData = request()->validate([
            "title" => ["required", "min:5", "max:254", Rule::unique("blogs", "title")->ignore($blog->id)],
            "slug" => ["required", "min:5", "max:254", Rule::unique("blogs", "slug")->ignore($blog->id)],
            "body" => ["required", "min:50"],
            "thumbnail" => "max:254",
            "category_id" => ["required", Rule::exists("categories", "id")],
            "user_id" => [Rule::exists("users", "id")]
        ], [
            "title.required" => "You can't delete title, you can edit only",
            "slug.required" => "You can't delete slug, you can edit only",
            "body.required" => "You can't delete body, you can edit only",
            "thumbnail.required" => "You can't delete thumbnail, you can edit only",
        ]);
        $validatedData["thumbnail"] = request()->file("thumbnail") ? request()->file("thumbnail")->store("thumbnails") : $blog->thumbnail;
        $validatedData["user_id"] = auth()->id();
        $blog->update($validatedData);
        return redirect("/admin/blogs");
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect("/admin/blogs");
    }

    // Category
    public function categories()
    {
        return view("admin.categories", [
            "categories" => Category::latest()->get()
        ]);
    }
    public function create_category()
    {
        return view("admin.categories.create");
    }
    public function store_category()
    {
        $validatedData = request()->validate([
            "name" => ["required", "min:3", "max:254", Rule::unique("categories", "name")],
            "slug" => ["required", "min:3", "max:254", Rule::unique("categories", "slug")]
        ]);
        // $validatedData["user_id"] = auth()->id();
        Category::create($validatedData);
        return redirect("/admin/categories");
    }
    public function edit_category(Category $category)
    {
        return view("admin.categories.edit", [
            "category" => $category
        ]);
    }
    public function update_category(Category $category)
    {
        $validatedData = request()->validate([
            "name" => ["required", "min:3", "max:254", Rule::unique("categories", "name")->ignore($category->id)],
            "slug" => ["required", "min:3", "max:254", Rule::unique("categories", "slug")->ignore($category->id)],
        ], [
            "name.required" => "You can't delete name, you can only edit",
            "slug.required" => "You can't delete slug, you can only edit",
        ]);
        $category->update($validatedData);
        return redirect("/admin/categories");
    }
    public function destroy_category(Category $category)
    {
        $category->delete();
        return redirect("/admin/categories");
    }
}
