<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Teacher;

class Anil extends Controller
{
    public function index()
    {
    	$student = new Teacher([
    		'name'=>'Anil',
    	'email'=>'abc@gmail.com',
    	'pass'=>'abc.com'
    	]);
    	/*$student->name='Anil';
    	$student->email='abc@gmail.com';
    	$student->pass='abc.com';*/
    	$student->save();
    	return view(route('home'));
    }
}
