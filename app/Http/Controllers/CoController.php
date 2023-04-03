<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoController extends Controller
{
    public function checkout2(){
        return view('co', [
            'title' => 'Checkout'
        ]);
    }
}
