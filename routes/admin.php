<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AuthAdminController;



Route::get("/admin/login", [AuthAdminController::class, "login"]);

Route::get("/admin", [AdminBlogController::class, "index"]);
Route::get("/admin/users", [AdminUsersController::class, "users"]);
Route::get("/admin/blogs", [AdminBlogController::class, "blogs"]);
Route::get("/admin/categories", [AdminBlogController::class, "categories"]);

// User Create
Route::get("/admin/users/create", [AdminUsersController::class, "create"]);
Route::post("/admin/users/create", [AdminUsersController::class, "store"]);
// User Edit
Route::get("/admin/users/{name:username}/edit", [AdminUsersController::class, "edit"]);
Route::post("/admin/users/{name:username}/edit", [AdminUsersController::class, "update"]);

// Blog Create
Route::get("/admin/blogs/create", [AdminBlogController::class, "create"]);
Route::post("/admin/blogs/create", [AdminBlogController::class, "store"]);
// Blog Edit
Route::get("/admin/blogs/{blog:slug}/edit", [AdminBlogController::class, "edit"]);
Route::post("/admin/blogs/{blog:slug}/edit", [AdminBlogController::class, "update"]);


// Category Create
Route::get("/admin/categories/create", [AdminBlogController::class, "create_category"]);
Route::post("/admin/categories/create", [AdminBlogController::class, "store_category"]);

Route::get("/admin/categories/{category:name}/edit", [AdminBlogController::class, "edit_category"]);
Route::post("/admin/categories/{category:name}/edit", [AdminBlogController::class, "update_category"]);
