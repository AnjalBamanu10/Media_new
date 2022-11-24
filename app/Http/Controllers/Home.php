<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


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

    public function loginUser(Request $req)
    {
        $req->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if(Auth::attempt($req->only('email','password'))){
            return redirect()->route('dashboard');
        }
        else{
            // dd('user not found');
            return back()->with('fail',' User Not Found!');
        }
    }

    public function logout(){
        auth()->logout();

        return redirect()->route('login');
    }
}