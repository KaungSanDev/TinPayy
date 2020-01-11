<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class CourseController extends Controller
{


	//get list of courses
	public function getList(){
		$data = Course::all();
		return view('allcourses', compact('data'));
	}

    //get individuall course
	public function index($id){
		$data = Course::where('id', $id)->first();
		return view('course' , compact('data'));
	}

	public function create(){
		return view('coursewriter');
	}
	public function store(Request $request){

		$course = new Course;

		$course->name = $request->title;
		$course->course = $request->course;
		$course->teacher_name = $request->teacher_name;
		$course->school_name = $request->school_name;
		$course->save();

		return redirect()->route('home');
	}
}
