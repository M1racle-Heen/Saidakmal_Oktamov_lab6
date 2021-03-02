<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
	public function show_name($name){
		return view('come?,compact('name')');
	}
}
