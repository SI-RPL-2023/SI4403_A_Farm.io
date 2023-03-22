<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistController extends Controller
{
    public function index(){
        return view('register', [
            'title' => 'register'
        ]);
    }
}
