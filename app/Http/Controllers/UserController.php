<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        return view('dashboard');
    }
    public function loginUser()
    {
        return view('login');
    }
    public function signupUser()
    {
        return view('signup');
    }
}
