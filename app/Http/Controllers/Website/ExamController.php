<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\QuizResult;
use App\Models\UserQuiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    //
    public function examlist()
    {
        //function_body
        // $exam = Quiz::
        // join('user_quizzes','quizzes.id','=','user_quizzes.quiz_id')
        // ->select('quizzes.*','user_quizzes.*')
        // ->where('user_quizzes.user_id',Auth::user()->id)
        // ->where('user_quizzes.quiz_id','quizzes.id')
        // ->get();
        $users=Auth::user();
        $quizes =Quiz::whereNotExists(
            function($query) use($users) {
              $query->from('user_quizzes')
                    ->where('user_id', $users->id)
                    ->whereColumn('quizzes.id','user_quizzes.quiz_id');
            })->get();
        // dd($quizes->toArray());
        return view('frontend.examlist', compact('quizes'));
    }
    public function quiz_userid_store(request $request)
    {
        //function_body

        // $quizz=Quiz::first();
        $quiz_userid_save=new UserQuiz();
        $quiz_userid_save->user_id=Auth::user()->id;
        $quiz_userid_save->quiz_id=request('quiz_id');
        $quiz_userid_save->save();
        $quizz=request('quiz_id');
        return redirect()->route('exam',$quizz);
    }
    public function exam($quizz)
    {
        //function_body
        $quiz = Quiz::where('id', $quizz)->find($quizz);
        // $quiz->status=0;
        // $quiz->update();

        $question = Question::where('quiz_id', $quizz)->get();
        // dd($quiz);
        return view('frontend.exam', compact('quiz', 'question'));
    }

    public function exam_store(request $request)
    {
        // dd($request->all());
        foreach ($request->ques_id as $key =>$ques_id) {
            $submitAnswer = implode(',',$request->submit_answer[$key]);
            QuizResult::create([
                'quiz_id' => $request->quiz_id,
                'user_id' => Auth::user()->id,
                'ques_id' => $ques_id,
                'submit_answer' => $submitAnswer
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
        // $average=$question/$incorrect;
        $percentage = round((100/$question*$result),2);
        // dd($percentage);
       $quiz_subject=Quiz::where('id',$quiz_id)->first();
        return view('frontend.result', compact('result', 'question', 'incorrect','quiz_subject','percentage'));
    }

    public function result_details($id)
    {
        $result_details=QuizResult::join('questions', 'quiz_results.ques_id', '=', 'questions.id')
        ->select('quiz_results.*','questions.*')
        ->where('quiz_results.quiz_id','=',$id)
       ->get();
        $quiz=Quiz::where('id',$id)->first();
        // dd($result_details->toArray());
        // dd($quiz);
        //function_body
        return view('frontend.result_details',compact('result_details','quiz'));
    }
}
