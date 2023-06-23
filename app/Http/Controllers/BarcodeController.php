<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function barco(){
        return view('barcode', [
            'title' => 'barcode'
        ]);
    }
}
