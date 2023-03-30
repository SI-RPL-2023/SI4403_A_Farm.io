<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $course = Course::all();
        return view('course', [
            'title' => 'Course',
            // 'course' => $course
        ]);
    }
    public function myclass(){
        // $order = Order::where('user_id', auth()->user()->id)->get();
        return view('user/user-myclass', [
            'title' => 'Class User',
            // 'order'=>$order
        ]);
        
        
    }

    public function myorder(){
        // $order = Order::where('user_id', auth()->user()->id)->get(); 
        return view('user/user-myorder', [
            'title' => 'Order User',
            // 'order' => $order
        ]);
    }

    public function setting(){
        return view('user/setting-user', [
            'title' => 'Setting Profile'
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($request->password==null){
            User::where('id', $user->id)->update(
                [   
                    'username'=>$request->username,
                ]
                );
        $request->session()->flash('success', 'data berhasil diubah gan');

        } else {
            User::where('id', $user->id)->update(
                [   
                    'username'=>$request->username,
                    'password'=>$request->password
                ]
                );
        $request->session()->flash('success', 'data berhasil diubah gan');
            
        }

        return redirect("/gurutani/setting");
    }
}