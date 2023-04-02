<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\Guru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function myinbox(){
        return view('guru/guru-myinbox-polosan', [
            'title' => 'My Inbox Order',
            'order'=> "test"
        ]);
    }

    public function addclass(){
        return view('guru/guru-addclass', [
            'title' => 'Add a New Class'
        ]);
    }

    public function setting(){
        return view('guru/setting-guru', [
            'title' => 'Setting Profile'
        ]);
    }


    // login guru
    public function loginGuru(){
        return view('guru/login-guru', [
            'title' => 'Login Guru Ternak'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @param  \App\Models\Guru  $user
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, User $user)
    // {
    //     if($request->password==null){
    //         User::where('id', $user->id)->update(
    //             [   
    //                 'username'=>$request->username,
    //             ]
    //             );
    //         Gurutani::where('id', $user->id)->update(
    //             [   
    //                 'username'=>$request->username,
    //             ]
    //             );
    //     $request->session()->flash('success', 'data berhasil diubah gan');

    //     } else {
    //         User::where('id', $user->id)->update(
    //             [   
    //                 'username'=>$request->username,
    //                 'password'=>$request->password
    //             ]
    //             );
    //         Gurutani::where('id', $user->id)->update(
    //             [   
    //                 'username'=>$request->username,
    //                 'password'=>$request->password
    //             ]
    //             );
    //     $request->session()->flash('success', 'data berhasil diubah gan');
            
    //     }

    //     return redirect("/gurutani/setting");
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @param  \App\Models\Guru  $user
     * @return \Illuminate\Http\Response
     */

    // public function update_status(Request $request, Order $order){
    //     $order->update([
    //         'status' => 'Verified'
    //     ]);
    //     $request->session()->flash('success', 'data berhasil diubah gan');
    //     return redirect("/gurutani/inbox");
    // }

    // public function update_status2(Request $request, Order $order){
    //     $order->update([
    //         'status' => 'Rejected'
    //     ]);
    //     $request->session()->flash('success', 'data berhasil diubah gan');
    //     return redirect("/gurutani/inbox");
    // }


    // public function authenticate(Request $request){
    //     $credentials= $request->validate([
    //         'username'=>'required',
    //         'password'=>'required'
    //     ]);

    //     if(Auth::guard('gurutani')->attempt($credentials)){
    //         $request->session()->regenerate();
    //         return redirect()->intended('/');
    //     }

    //     return back()->with('loginError', 'Login gagal, gan!'); 
    // }

    // public function logout(){
    //     Auth::logout();

    //     request()->session()->invalidate();
    //     request()->session()->regenerateToken();
    //     // withOutCookie()
    //     return redirect('/');
    // }
    // login guru
}