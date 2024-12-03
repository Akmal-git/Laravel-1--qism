<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Bu userlarni ro\'yhati';
    }


    public function create()
    {
        return view('users.create');
    }
    
    public function show($data)
    {
        return 'Bu show function' . $data;
    }

    public function edit($user_id)
    {
        return $user_id . ' o\'zgartirish';
    }

    public function test()
    {
        return view('');
    }
};
