<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

class AuthController extends Controller
{
    //
    public function login()
    {
        if(Auth::check()){
            return redirect()->route('home');
        }

        return view('login');
    }

    public function login_action(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if( Auth::attempt($validator)){
            return redirect()->route('home');
        }
    }

    public function register(Request $request)
    {

        $isLoggedIn = Auth::check();
        if($isLoggedIn) {
            return redirect()->route('home');
        }

        return view('register');
    }

    public function register_action(Request $request){

        // $data = $request->only('name', 'email', 'password');
        // $userCreated = User::create($data);

        // dd($userCreated);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);


        $data = $request->only('name', 'email', 'password');

        $data['password'] = Hash::make($data['password']);

        $userCreate = User::create($data);

        return redirect(route('login'));


    }



}

