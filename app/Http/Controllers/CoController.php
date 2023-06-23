<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;

class CoController extends Controller
{
    public function checkout(string $id){
        $course = Course::where('id', $id)->firstOrFail();
        return view('co', [
            'title' => 'Checkout',
            'course' => $course


        ]);
    }
}
