<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuksesController extends Controller
{
    public function suksess(){
        return view('sukses', [
            'title' => 'sukses'
        ]);
    }
}
