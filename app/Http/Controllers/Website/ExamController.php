<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    //
    public function examlist()
    {
        //function_body
        $exam=Quiz::with('class_name_relation')->get();
        return view('forntend.examlist',compact('exam'));
    }
public function exam($id)
{
    //function_body
    $quiz=Quiz::find($id);
    $question=Question::where('quiz_id',$id);
    return view('forntend.exam');
}

}
