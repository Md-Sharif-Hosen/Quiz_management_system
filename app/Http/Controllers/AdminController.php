<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
//    public function __construct() {
//         if(Auth::check()&& (Auth::user()->role_id == "1"));
//           return redirect()->route('dashboard');
//     }
    public function index()
    {
        //function_body
        return view('admin.layouts.dashboard');
    }

    public function quizz()
    {
        //function_body
        return view('admin.quizzes');
    }
    public function classes()
    {
        //function_body
        return view('admin.classes');
    }
    public function questions()
    {
        //function_body
        return view('admin.questions');
    }
    public function profile()
    {
        //function_body
        return view('admin.profile');
    }
}
