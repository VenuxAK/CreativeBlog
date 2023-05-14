<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function register()
    {
        return view("auth.register");
    }
    public function store()
    {
        $formData = request()->validate([
            "name" => ["required", "max:254", "min:3"],
            "username" => ["required", "max:254", "min:3", Rule::unique("users", "username")],
            "email" => ["required", "max:254", Rule::unique("users", "email")],
            "password" => ["required", "max:254", "min:6"],
        ]);
        $user = User::create($formData);
        auth()->login($user);
        return redirect("/")->with("success", "Welcome, " . $user->name);
    }

    public function login()
    {
        return view("auth.login");
    }
    public function post_login()
    {
        $formData = request()->validate([
            "email" => ["required", "max:254", Rule::exists("users", "email")],
            "password" => ["required", "max:254"]
        ], [
            "email.exists" => "An Email address not register yet"
        ]);
        if (!auth()->attempt($formData)) {
            return redirect()->back()->withErrors([
                "password" => "Wrong password"
            ]);
        }
        return redirect("/")->with("success", "Welcome back, " . auth()->user()->name);
    }

    public function logout()
    {
        auth()->logout();
        return redirect("/")->with("success", "Bye, see you again");
    }
}
