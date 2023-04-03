<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonfirController extends Controller
{
    public function konfirmasi(){
        return view('konfir', [
            'title' => 'KONFIR'
        ]);
    }
}
