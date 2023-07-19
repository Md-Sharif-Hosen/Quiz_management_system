<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    public function quiz()
    {
        //function_body
        $class=Classes::get();
        $quizz=Quiz::with('class_name_relation')->get();
        return view('admin.quizzes',compact('class','quizz'));
    }
    public function quiz_store(request $request)
    {
        //function_body
        $quizstore=new Quiz();
        $quizstore->quizz_subject=request('quizz_subject');
        $quizstore->class_name=request('class_name');
        $quizstore->save();
        return redirect()->back()->with('done','Quizz create Successfully');
    }
}
