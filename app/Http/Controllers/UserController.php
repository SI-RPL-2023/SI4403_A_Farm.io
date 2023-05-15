<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;


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
        $order = Order::where('user_id', auth()->user()->id)->get();
        return view('user/user-myclass', [
            'title' => 'Class User',
            'order'=>$order
        ]);
        
        
    }

    public function myorder(){
        $ord = Order::where('user_id', auth()->user()->id)->get(); 
        return view('user/user-myorder', [
            'title' => 'Order User',
            'order' => $ord
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
                    'name'=>$request->name
                ]
                );
        $request->session()->flash('success', 'data berhasil diubah gan');

        } else {
            $validated = $request->validate([
                'password' => 'required|min:6' // Add any validation rules for the password here
            ]);
    
            User::where('id', $user->id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($validated['password'])
            ]);
        $request->session()->flash('success', 'data berhasil diubah gan');
            
        }

        return redirect("/user/setting");
    }

    public function accessVideoTesting()
    {
        return view('user/user-video', [
            'title' => 'Course Checkout Successful'
        ]);
    }
}