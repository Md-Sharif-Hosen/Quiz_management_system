<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\QuizResult;
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
    $question=Question::where('quiz_id',$id)->get();
    return view('forntend.exam',compact('quiz','question'));
}

public function exam_store(request $request)
{
    //function_body
    $Data=new QuizResult();
    dd(request()->all());
    $Data->quiz_id=request('quiz_id');
    $Data->ques_id=request('ques_id');
    $Data->user_id=request('user_id');
    $Data->submit_answer=request('submit_answer');
    $Data->save();
    return redirect()->back();
}

}
