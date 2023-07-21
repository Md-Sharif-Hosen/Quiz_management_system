<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    //
    public function options()
    {
        //function_body
        $quizz=Quiz::get();
        $question=Question::get();
        return view('admin.options',compact('quizz','question'));
    }
}
