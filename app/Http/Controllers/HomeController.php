<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $student = Student::all();
       dd($student);
        
    }

    public function showData(){
        return Student::with('getClasses')->get();
   
    }
}
