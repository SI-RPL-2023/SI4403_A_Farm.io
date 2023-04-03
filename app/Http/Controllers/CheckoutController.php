<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout1(){
        return view('checkout', [
            'title' => 'Checkout'
        ]);
    }
}
