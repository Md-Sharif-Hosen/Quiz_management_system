<?php

namespace App\Http\Controllers;

use App\Models\QuizResult;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function __construct()
    {
        // $this->middleware('isstudent');
    }

    // public function demo()
    // {
    //     //function_body
    //     return view('forntend.demo');
    // }
    // public function index()
    // {
    //     //function_body
    //     $user_id = Auth::user()->id;

    //     $quiz_result = DB::table('quiz_results')
    //         ->join('quizzes', 'quiz_results.quiz_id', '=', 'quizzes.id')
    //         ->join('questions', 'quiz_results.ques_id', '=', 'questions.id')
    //         ->join('users', 'quiz_results.user_id', '=', 'users.id')
    //         ->select(
    //             'quizzes.*',
    //             'users.*',
    //             'quiz_results.user_id',
    //             DB::raw('SUM(CASE WHEN quiz_results.submit_answer = questions.answer THEN 1 ELSE 0 END) AS marks'),
    //             DB::raw('SUM(CASE WHEN quiz_results.ques_Id = questions.id THEN 1 ELSE 0 END) AS questions')
    //         )
    //         ->where('quiz_results.user_id', $user_id)
    //         ->groupBy('quizzes.id', 'quiz_results.user_id') // Group by both quiz ID and user ID to get marks per user for each quiz.
    //         ->get();
    //     return view('forntend.home',compact('quiz_result'));
    // }
    public function index()
    {
        $user_id = Auth::user()->id;
    
        $quiz_result = DB::table('quiz_results')
            ->join('quizzes', 'quiz_results.quiz_id', '=', 'quizzes.id')
            ->join('questions', 'quiz_results.ques_id', '=', 'questions.id')
            ->join('users', 'quiz_results.user_id', '=', 'users.id')
            ->select(
                'quizzes.id',
                'quizzes.quizz_subject',
                // Add all other columns from quizzes table
                'users.id AS user_id', // Alias to differentiate from quiz_results.user_id
                // Add all other columns from users table
                DB::raw('SUM(CASE WHEN quiz_results.submit_answer = questions.answer THEN 1 ELSE 0 END) AS marks'),
                DB::raw('SUM(CASE WHEN quiz_results.ques_id = questions.id THEN 1 ELSE 0 END) AS questions')
            )
            ->where('quiz_results.user_id', $user_id)
            ->groupBy('quizzes.id', 'quizzes.quizz_subject', 'users.id') // Group by all selected columns
            ->get();
    
        return view('frontend.home', compact('quiz_result'));
    }
    // public function teacher()
    // {
    //     //function_body
    //     return view('forntend.teacher');
    // }
    // public function courses()
    // {
    //     //function_body
    //     return view('forntend.courses');
    // }
    // public function contacts()
    // {
    //     //function_body
    //     return view('forntend.contact');
    // }
    // public function about()
    // {
    //     //function_body
    //     return view('forntend.about');
    // }

    public function profile()
    {
        //function_body
        $user_id = Auth::user()->id;

        $quiz_result = DB::table('quiz_results')
            ->join('quizzes', 'quiz_results.quiz_id', '=', 'quizzes.id')
            ->join('questions', 'quiz_results.ques_id', '=', 'questions.id')
            ->join('users', 'quiz_results.user_id', '=', 'users.id')
            ->select(
                'quizzes.*',
                'users.*',
                'quiz_results.user_id',
                DB::raw('SUM(CASE WHEN quiz_results.submit_answer = questions.answer THEN 1 ELSE 0 END) AS marks'),
                DB::raw('SUM(CASE WHEN quiz_results.ques_Id = questions.id THEN 1 ELSE 0 END) AS questions')
            )
            ->where('quiz_results.user_id', $user_id)
            ->groupBy('quizzes.id', 'quiz_results.user_id') // Group by both quiz ID and user ID to get marks per user for each quiz.
            ->get();
        //  dd($quiz_result);

        return view('frontend.profile', compact('quiz_result'));
    }
}
