<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class Home extends Controller
{
    public function registerUser(Request $req){
        // dd($request->all());
        
     
     $req->validate([
        'name' =>'required',
        'email'=>'required',
        'password'=>'required',
    ]);
    // dd($req->all());

    Article::create([
        'name'=> $req->name,
        'email'=> $req->email,
        'password'=> Hash::make($req->password),
    ]);
    return redirect('/login');
}
}