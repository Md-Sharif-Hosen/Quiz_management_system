<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
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
}
