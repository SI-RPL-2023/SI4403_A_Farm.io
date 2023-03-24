<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login', [
            'title' => 'login'
        ]);
    }

    public function authenticate(Request $request){
        $credentials= $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            $user = Auth::getUser();
            $request->session()->regenerate();

            if($user->role === 'pelajar'){
                return redirect()->intended('/');
            } else {
                return redirect()->intended('/gurutani/inbox');
            }   
        }

        return back()->with('loginError', 'Login gagal, gan!'); 
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        // withOutCookie()
        return redirect('/');
    }
}   