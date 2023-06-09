<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Course;
use App\Models\Guru;
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
        $course = Course::all();
        return view('course', [
            'title' => 'Course',
            'course' => $course
        ]);
    }

    public function searchCourse()
    {
        $course = Course::latest();
        if(request('search')) {
            $course->where('title', 'like', '%' . request('search') . '%');
        }

        return view('course', [
            'title' => 'Course',
            'course' => $course->get()
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
    public function store(Request $request)
    {
        // video
        // $video = explode('.', $request->file('video')->getClientOriginalName())[0];
        // $video = $video . '-' . time() . '.' . $request->file('video')->extension();
        // $request->file('video')->storeAs('public/videos/', $video);
        // $image_path = $request->file('image')->store('image', 'public');
        // $thumbnail = time().'.'.$request->image->extension();
        // $thumbnail_path = $request->file('thumbnail')->store('thumbnail', 'public');
        $thumbnail = explode('.', $request->file('thumbnail')->getClientOriginalName())[0];
        $thumbnail = $thumbnail . '-' . time() . '.' . $request->file('thumbnail')->extension();
        // $request->file('thumbnail')->storeAs('public/thumbnails/products/', $thumbnail);
        $request->thumbnail->move(public_path('asset/thumbnails'), $thumbnail);

        if($request->price > 0 ){
            Course::create([
                'guruTernak_id' => auth()->user()->id,
                'title'=> $request->title,
                'skillLevel'=> $request->skillLevel,
                'description'=> $request->description,
                'price'=> $request->price,
                'title' => $request->title,
                'video' => $request->video,
                'type' => "premium",
                'thumbnail' => $thumbnail
            ]);
        }else{
            Course::create([
                'guruTernak_id' => auth()->user()->id,
                'title'=> $request->title,
                'skillLevel'=> $request->skillLevel,
                'description'=> $request->description,
                'price'=> $request->price,
                'title' => $request->title,
                'video' => $request->video,
                'type' => "free",
                'thumbnail' => $thumbnail
            ]);
        }
        
        return redirect('/guruternak/myclass');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    
    public function show(string $id)
    {
        $course = Course::with('guruternak')->where('id', $id)->firstOrFail();
        $courseother = Course::where('id', '!=', $id)->first();
        $username = $course->guruternak->username;
        if ($courseother) {
        return view ('course-detail', [
            'title' => 'Course Detail',
            'course' => $course,
            'username' => $username,
            'courseother' => $courseother
        ]);
    }else{
        return view ('course-detail', [
            'title' => 'Course Detail',
            'course' => $course,
            'username' => $username

        ]);
    }
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Course $course)
    {
        if ($request->price > 0 ) {
            Course::where('id', $course->id)
            ->update([
                'title'=> $request->title,
                'skillLevel'=> $request->skillLevel,
                'description'=> $request->description,
                'price'=> $request->price,
                'title' => $request->title,
                'video' => $request->video,
                'type' => "premium",
            ]);
            if ($request-> file('thumbnail')) {
                // image
                $thumbnail = explode('.', $request->file('thumbnail')->getClientOriginalName())[0];
                $thumbnail = $thumbnail . '-' . time() . '.' . $request->file('thumbnail')->extension();
                $request->thumbnail->move(public_path('asset/thumbnails'), $thumbnail);
                Course::where('id', $course->id)
                ->update([
                    'thumbnail' => $thumbnail
                ]);
            }
        } else {
            Course::where('id', $course->id)
            ->update([
                'title'=> $request->title,
                'skillLevel'=> $request->skillLevel,
                'description'=> $request->description,
                'price'=> $request->price,
                'title' => $request->title,
                'video' => $request->video,
                'type' => "free",
            ]);
            if ($request-> file('thumbnail')) 
            {
                // image
                $thumbnail = explode('.', $request->file('thumbnail')->getClientOriginalName())[0];
                $thumbnail = $thumbnail . '-' . time() . '.' . $request->file('thumbnail')->extension();
                $request->thumbnail->move(public_path('asset/thumbnails'), $thumbnail);
                Course::where('id', $course->id)
                ->update([
                    'thumbnail' => $thumbnail
                ]);
            }
        }
        return redirect('/guruternak/myclass');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $id)
    {
        Course::where('id', $id->id)->delete();

        return redirect('/guruternak/myclass');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function displayCourseCheckout(Course $course)
    {
        return view('course-checkout', [
            'title' => 'Course Checkout',
            'course' => $course
        ]);
    }
    // public function displayCourseCheckout(){
    //     return view('course-checkout', [
    //         'title' => 'Course Checkout',
    //         'course' => "test"
    //     ]);
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function displayCoursePayment(Course $course)
    {
        return view('course-payment', [
            'title' => 'Course Payment',
            'course' => $course
        ]);
    }
    // public function displayCoursePayment(){
    //     return view('course-payment', [
    //         'title' => 'Course Payment',
    //         'course' => "test"
    //     ]);
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function Pembayaran(Request $request)
    {
        // evidence
        $evidence = explode('.', $request->file('evidence')->getClientOriginalName())[0];
        $evidence = $evidence . '-' . time() . '.' . $request->file('evidence')->extension();
        $request->evidence->move(public_path('asset/evidences'), $evidence);

        // ktp
        // $ktp = explode('.', $request->file('ktp')->getClientOriginalName())[0];
        // $ktp = $ktp . '-' . time() . '.' . $request->file('ktp')->extension();
        // $request->file('ktp')->storeAs('public/ktps/products/', $ktp);
        if($request->username != null && $request->evidence != null) {
            Order::create([
                'user_id'=> auth()->user()->id,
                'course_id'=> $request->course_id,
                'guruTernak_id' => $request->guruTernak_id,
                'username'=> $request->username,
                'cover'=> $request->cover,
                'title'=> $request->title,
                'status'=> $request->status,
                'type'=> $request->type,
                'price'=> $request->price,
                'evidence' => $evidence
            ]);
        }
        return redirect('/sukses');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */

    public function displayCourseSuccess()
    {
        return view('course-success', [
            'title' => 'Course Checkout Successful'
        ]);
    }

    public function displayclass()
    {
        $course = Course::where('guruTernak_id', auth()->user()->id)->get();
        return view('guru/guru-myclass', [
            'title' => 'Course',
            'course' => $course
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    // public function editclass()
    // {
    //     $course = Course::where('guruTernak_id', auth()->user()->id)->first();
    //     return view('guru/guru-editclass', [
    //         'title' => 'Edit a Class',
    //         'course' => $course
    //     ]);
    // }

    public function editclass(string $id)
    {
        // $course = Course::where('guruTernak_id', auth()->user()->id)->first();
        $course = Course::where('id', $id)->firstOrFail();
        return view('guru/guru-editclass', [
            'title' => 'Edit a Class',
            'course' => $course
        ]);
    }

    public function accessvideo()
    {
        $order = Order::where('user_id', auth()->user()->id)->first();
        return view('course-access', [
            'title' => 'Pentingnya Penggunaan Teknologi PerTernakan',
            'order' => $order
        ]);
    }
}