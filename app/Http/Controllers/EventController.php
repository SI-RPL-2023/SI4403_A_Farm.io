<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
{
    public function displayEvent(){
        $Event = Event::all();
        return view('event', [
            'title' => 'Events',
            'Event' => $Event
        ]);
    }
}
