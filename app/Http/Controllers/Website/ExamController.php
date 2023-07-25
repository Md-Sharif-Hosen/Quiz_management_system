<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    //
    public function exam()
    {
        //function_body
        $exam=Quiz::with('class_name_relation')->get();
        return view('forntend.exam',compact('exam'));
    }
}
