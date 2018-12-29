<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseRoomController extends Controller
{    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       // serve info via ajax ?
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function edit(Course $course)
   {
       $rooms = \App\Models\Room::all();
       return view('courses/create3', compact('course', 'rooms'));
       // after refactor with VueSJS, no need for additionnal views
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request)
   {
       $course_id = $request->input('course_id');
       $course = \App\Models\Course::findOrFail($course_id);
       $course->room_id = $request->input('room');
       $course->save();
       return redirect('/courses');
   }


   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       // remove the teacher from the course
   }
}

