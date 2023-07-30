<?php

namespace App\Http\Controllers;

use App\Models\QuizResult;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function __construct() {
        // $this->middleware('isstudent');
    }

    // public function demo()
    // {
    //     //function_body
    //     return view('forntend.demo');
    // }
    public function index()
    {
        //function_body
        return view('forntend.home');
    }

    public function profile()
    {
        //function_body
       $result=QuizResult::where('quiz_results.user_id', '=', Auth::user()->id)->get();
        return view('forntend.profile',compact('result'));
    }


}
