<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function displayEvent(){
        return view('event', [
            'title' => 'Events'
        ]);
    }
}
