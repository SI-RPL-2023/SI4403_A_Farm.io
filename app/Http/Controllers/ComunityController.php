<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComunityController extends Controller
{
    public function comun(){
        return view('comunity', [
            'title' => 'community'
        ]);
    }
}
