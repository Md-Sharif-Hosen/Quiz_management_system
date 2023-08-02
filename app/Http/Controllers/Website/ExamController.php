<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\QuizResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    //
    public function examlist()
    {
        //function_body
        $exam = Quiz::get();
        return view('forntend.examlist', compact('exam'));
    }
    public function exam($id)
    {
        //function_body
        $quiz = Quiz::where('id', $id)->find($id);
        // $quiz->status=0;
        // $quiz->update();

        $question = Question::where('quiz_id', $id)->get();
        //dd($quiz);
        return view('forntend.exam', compact('quiz', 'question'));
    }

    public function exam_store(request $request)
    {
        // //function_body

        foreach ($request->ques_id as $key => $ques_id) {
            QuizResult::create([
                'quiz_id' => $request->quiz_id,
                'user_id' => Auth::user()->id,
                'ques_id' => $ques_id,
                'submit_answer' => $request->submit_answer[$key]
            ]);
        }


        return redirect()->route('result',request('quiz_id'));
    }

    public function result($quiz_id)
    {
        $result = QuizResult::join('questions', 'quiz_results.submit_answer', '=', 'questions.answer')
        ->select('quiz_results.*', 'questions.question_title')
        ->where('quiz_results.user_id', '=', Auth::user()->id)
        ->where('quiz_results.quiz_id','=',$quiz_id)
        ->count();
        $question = Question::join('quiz_results', 'questions.id', '=', 'quiz_results.ques_id')
        ->select('questions.*', 'quiz_results.ques_id')
        ->where('quiz_results.quiz_id', '=',$quiz_id)
        ->Where('quiz_results.user_id', '=', Auth::user()->id)
        ->count();
        $incorrect = $question - $result;
       $quiz_subject=Quiz::where('id',$quiz_id)->first();
        return view('forntend.result', compact('result', 'question', 'incorrect','quiz_subject'));
    }

    public function result_details($id)
    {
        $result_details=QuizResult::join('questions', 'quiz_results.ques_id', '=', 'questions.id')
        ->select('quiz_results.*','questions.*')
        ->where('quiz_results.quiz_id','=',$id)
        ->get();
        dd($result_details);
        //function_body
        return view('forntend.result_details',compact('result_details',$id));
    }
}
