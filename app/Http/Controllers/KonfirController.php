<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;

class KonfirController extends Controller
{
    public function konfirmasi(string $id){
        $course = Course::where('id', $id)->firstOrFail();
        return view('konfir', [
            'title' => 'KONFIR',
            'course' => $course

            
        ]);
    }
}
