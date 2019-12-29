<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class CourseController extends Controller
{
    //
    public function index($id){
    	$data = Course::where('id', $id)->first();
    	return view('course' , compact('data'));
    }
}
