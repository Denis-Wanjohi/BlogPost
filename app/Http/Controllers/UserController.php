<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use  Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function create(){
        return view('/user/register');
    }

    public function store(Request $request){
        // dd(request());
        
        $user = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => ['required'],
            'email' => ['required','email'],
            'password' => ['required','confirmed'],
        ]);
        
        $user['password'] = bcrypt($user['password']);
        // dd($user);
        $newUser = User::create($user);
        // dd($user);
        Auth::login($newUser);

        return redirect('/');

    }

    public function login(){
        return view('user/login');
    }

    public function authenticate(Request $request){
        $user = $request->validate([
            // 'username' => 'required',
            'email'  => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($user)){
            return   redirect('/');
        }
        //flush message for errors
        return back()->with('error','inavlid credentials');
    }

    public function logout(){
        auth()->logout();
        
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
