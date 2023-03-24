<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistController extends Controller
{
    public function index(){
        return view('register', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=> 'required|min:3|max:255',
            'email'=> 'required|max:255',
            'username'=> 'required|max:255',
            'password'=> 'required|min:5|max:255'
        ]);
        // dd('registrasi berhasil');
        $validated['password'] = Hash::make($validated['password']);
        $validated['role'] = 'pelajar';
        User::create($validated)->id;
        $request->session()->flash('success', 'Registrasi beres, Langsung gas dah login');

        return redirect('/login');
    }
}
