<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function users()
    {
        if (!request("type") || (request("type") !== "admin" && request("type") !== "normal")) {
            return redirect("/admin");
        }
        return view("admin.users");
    }

    public function create()
    {
        return view("admin.auth.create");
    }
    public function store()
    {
    }

    public function edit()
    {
        return view("admin.auth.edit");
    }
    public function update()
    {
    }
}
