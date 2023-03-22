<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Course;
use App\Models\Gurutani;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CourseController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     // video
    //     $video = explode('.', $request->file('video')->getClientOriginalName())[0];
    //     $video = $video . '-' . time() . '.' . $request->file('video')->extension();
    //     $request->file('video')->storeAs('public/videos/', $video);
    //     // image
    //     $thumbnail = explode('.', $request->file('thumbnail')->getClientOriginalName())[0];
    //     $thumbnail = $thumbnail . '-' . time() . '.' . $request->file('thumbnail')->extension();
    //     $request->file('thumbnail')->storeAs('public/thumbnails/products/', $thumbnail);
    //     if($request->price > 0 ){
    //         Course::create([
    //             'guruTani_id' => auth()->user()->id,
    //             'title'=> $request->title,
    //             'skillLevel'=> $request->skillLevel,
    //             'description'=> $request->description,
    //             'price'=> $request->price,
    //             'title' => $request->title,
    //             'video' => $video,
    //             'type' => "premium",
    //             'thumbnail' => $thumbnail
    //         ]);
    //     }else{
    //         Course::create([
    //             'guruTani_id' => auth()->user()->id,
    //             'title'=> $request->title,
    //             'skillLevel'=> $request->skillLevel,
    //             'description'=> $request->description,
    //             'price'=> $request->price,
    //             'title' => $request->title,
    //             'video' => $video,
    //             'type' => "free",
    //             'thumbnail' => $thumbnail
    //         ]);
    //     }
        
    //     return redirect('/gurutani/addclass');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    // public function show(Course $course)
    // {
    //     return view ('course-detail', [
    //         'course' => $course
    //     ]);
    // }
    public function show()
    {
        return view ('course-detail', [
            'course' => "test"
        ]);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Course $course)
    // {
    //     if($request->price > 0 ){
    //         Course::where('id', $course->id)
    //         ->update([
    //             'title'=> $request->title,
    //             'skillLevel'=> $request->skillLevel,
    //             'description'=> $request->description,
    //             'price'=> $request->price,
    //             'title' => $request->title,
    //             'type' => "premium",
    //         ]);
    //         if($request->file('video')){
    //             // video
    //             $video = explode('.', $request->file('video')->getClientOriginalName())[0];
    //             $video = $video . '-' . time() . '.' . $request->file('video')->extension();
    //             $request->file('video')->storeAs('public/videos/', $video);
    //             Course::where('id', $course->id)
    //             ->update([
    //                 'video' => $video
    //             ]);
    //         } if($request-> file('thumbnail')){
    //             // image
    //             $thumbnail = explode('.', $request->file('thumbnail')->getClientOriginalName())[0];
    //             $thumbnail = $thumbnail . '-' . time() . '.' . $request->file('thumbnail')->extension();
    //             $request->file('thumbnail')->storeAs('public/thumbnails/products/', $thumbnail);
    //             Course::where('id', $course->id)
    //             ->update([
    //                 'thumbnail' => $thumbnail
    //             ]);
    //         }
    //     }else{
    //         Course::where('id', $course->id)
    //         ->update([
    //             'title'=> $request->title,
    //             'skillLevel'=> $request->skillLevel,
    //             'description'=> $request->description,
    //             'price'=> $request->price,
    //             'title' => $request->title,
    //             'type' => "free",
    //         ]);
    //         if($request->file('video')){
    //             // video
    //             $video = explode('.', $request->file('video')->getClientOriginalName())[0];
    //             $video = $video . '-' . time() . '.' . $request->file('video')->extension();
    //             $request->file('video')->storeAs('public/videos/', $video);
    //             Course::where('id', $course->id)
    //             ->update([
    //                 'video' => $video
    //             ]);
    //         } if($request-> file('thumbnail')){
    //             // image
    //             $thumbnail = explode('.', $request->file('thumbnail')->getClientOriginalName())[0];
    //             $thumbnail = $thumbnail . '-' . time() . '.' . $request->file('thumbnail')->extension();
    //             $request->file('thumbnail')->storeAs('public/thumbnails/products/', $thumbnail);
    //             Course::where('id', $course->id)
    //             ->update([
    //                 'thumbnail' => $thumbnail
    //             ]);
    //         }
    //     }
    //     return redirect('/gurutani/editclass');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Course $course)
    // {
    //     Course::where('id', $course->id)->delete();

    //     return redirect('/gurutani/myclass');
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    // public function displayCourseCheckout(Course $course){
    //     return view('course-checkout', [
    //         'title' => 'Course Checkout',
    //         'course' => $course
    //     ]);
    // }
    public function displayCourseCheckout(){
        return view('course-checkout', [
            'title' => 'Course Checkout',
            'course' => "test"
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    // public function displayCoursePayment(Course $course){
    //     return view('course-payment', [
    //         'title' => 'Course Payment',
    //         'course' => $course
    //     ]);
    // }
    public function displayCoursePayment(){
        return view('course-payment', [
            'title' => 'Course Payment',
            'course' => "test"
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    // public function PaymentMethod(Request $request){
    //     // evidence
    //     $evidence = explode('.', $request->file('evidence')->getClientOriginalName())[0];
    //     $evidence = $evidence . '-' . time() . '.' . $request->file('evidence')->extension();
    //     $request->file('evidence')->storeAs('public/evidences/products/', $evidence);

    //     // ktp
    //     $ktp = explode('.', $request->file('ktp')->getClientOriginalName())[0];
    //     $ktp = $ktp . '-' . time() . '.' . $request->file('ktp')->extension();
    //     $request->file('ktp')->storeAs('public/ktps/products/', $ktp);


    //     if($request->ktp != null && $request->evidence != null) {
    //         Order::create([
    //             'guruTani_id' => $request->guruTani_id,
    //             'course_id'=> $request->course_id,
    //             'user_id'=> auth()->user()->id,
    //             'cover'=> $request->cover,
    //             'ktp'=> $ktp,
    //             'title'=> $request->title,
    //             'status'=> 'pending',
    //             'type'=> $request->type,
    //             'price'=> $request->price,
    //             'evidence' => $evidence,
    //         ]);
    //     }
    //     return redirect('/user/order');

    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function displayCourseSuccess(){
        return view('course-success', [
            'title' => 'Course Checkout Successful'
        ]);
    }

    public function displayclass(){
        // $course = Course::where('guruTani_id', auth()->user()->id)->get();
        return view('guru/guru-myclass-polosan', [
            'title' => 'Course',
            // 'course' => $course
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function editclass(){
        // $course = Course::where('guruTani_id', auth()->user()->id)->first();
        return view('guru/guru-editclass', [
            'title' => 'Edit a Class',
            // 'course' => $course
        ]);
    }

    public function accessvideo(){
        // $order = Order::where('user_id', auth()->user()->id)->first();
        return view('course-access', [
            'title' => 'Pentingnya Penggunaan Teknologi Pertanian',
            // 'order' => $order
        ]);
    }
}