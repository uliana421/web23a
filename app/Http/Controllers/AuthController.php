<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;



class AuthController extends Controller
{
    public function login(){
       return view('auth.login');
    }

    public function authenticating(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            Session::flash('status', 'Success' );
            Session::flash('message', 'Login Success!' );

            return redirect()->intended('/home');
        }

        Session::flash('status', 'Failed' );
        Session::flash('message', 'Incorrect Data Login!' );

        return redirect('/login');
     }


     public function register()
     {
         return view('auth.register');
     }
 
     public function registerPost(Request $request)
     {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        
        Session::flash('status', 'Success' );
        Session::flash('message', 'Create Account Success!' );
        return redirect()->route('login');
         
     }





     public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
     }
}
