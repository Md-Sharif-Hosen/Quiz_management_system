<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\QuizResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    foreach ($request->ques_id as $key => $ques_id) {
        QuizResult::create([
            'quiz_id' => $request->quiz_id,
            'User_id' => Auth::user()->id,
            'ques_id' => $ques_id,
            'submit_answer' => $request->submit_answer[$key]
        ]);
    }
    return redirect()->back();
}

}
