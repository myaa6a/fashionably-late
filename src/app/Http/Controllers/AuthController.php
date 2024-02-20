<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function store(UserRequest $request)
    {
        $user = $request->only(['name', 'email', 'password']);
        User::create($user);
        return view('auth.login');
    }

    public function login(UserRequest $request)
    {
        $user = $request->only(['name', 'email', 'password']);
        return view('admin');
    }
}
