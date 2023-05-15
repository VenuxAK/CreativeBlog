<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [BlogController::class, "index"]);
Route::get("/blogs/{blog:slug}", [BlogController::class, "show"]);

// Comment
Route::post("/blogs/{blog:slug}/comment/send", [CommentController::class, "store"])->middleware("auth");

// Subscription
Route::post("/blogs/{blog:slug}/subscription", [BlogController::class, "subscriptionHandler"])->middleware("auth");

// *** Auth *** //

// Register
Route::get("/register", [AuthController::class, "register"])->middleware("guest");
Route::post("/register", [AuthController::class, "store"])->middleware("guest");
Route::get("/login", [AuthController::class, "login"])->middleware("guest");
Route::post("/login", [AuthController::class, "post_login"])->middleware("guest");

Route::post("/logout", [AuthController::class, "logout"])->middleware("auth");
