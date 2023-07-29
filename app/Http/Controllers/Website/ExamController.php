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
        $exam = Quiz::with('class_name_relation')->get();
        return view('forntend.examlist', compact('exam'));
    }
    public function exam($id)
    {
        //function_body
        $quiz = Quiz::find($id);
        $question = Question::where('quiz_id', $id)->get();
        //dd($quiz);
        return view('forntend.exam', compact('quiz', 'question'));
    }

    public function exam_store(request $request)
    {
        // //function_body
        // $current_date=date('y-m-d H:me:s');
        // //dd($current_date);
        // $exam=DB::table('quiz_results')->where('created_at',$current_date)->where('user_id',Auth::user()->id)->get();
        // dd($exam);
        // //dd($request->Auth::user()->id);
        // if($exam){
        //     echo "already exam taken";
        // }else{
        foreach ($request->ques_id as $key => $ques_id) {
            QuizResult::create([
                'quiz_id' => $request->quiz_id,
                'user_id' => Auth::user()->id,
                'ques_id' => $ques_id,
                'submit_answer' => $request->submit_answer[$key]
            ]);
            // }
        }

        return redirect()->route('result');
    }

    public function result()
    {
        $result = DB::table('quiz_results')
            ->join('questions', 'quiz_results.submit_answer', '=', 'questions.answer')
            ->select('quiz_results.*', 'questions.question_title')
            ->where('quiz_results.user_id', '=', Auth::user()->id)
            ->count();

        $question = Question::count();
        dd($result, $question);
        return view('forntend.result');
    }
}
