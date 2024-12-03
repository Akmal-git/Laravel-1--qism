<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Bu userlarni ro\'yhati';
    }

    public function show($data)
    {
        return 'Bu show function';
    }

    public function create()
    {
        return 'Create page';
    }

    public function viewss()
    {
        return view('users.create');
    }

    public function edit($user_id){
        return $user_id . 'o\'zgartirish';
    }
};
