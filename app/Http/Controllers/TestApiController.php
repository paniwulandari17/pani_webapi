<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
//use App\Teacher;


class TestApiController extends Controller
{
    //
    public function test(){

    		
    	 return Student::paginate(2);
    	//return Teacher::all();
    }
}
