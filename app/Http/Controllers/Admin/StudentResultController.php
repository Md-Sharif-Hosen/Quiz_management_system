<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;

class StudentResultController extends Controller
{

    public function student_result()
    {
        //function_body
      
        return view('admin.student_result');
    }
}
