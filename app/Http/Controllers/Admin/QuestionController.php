<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function questions()
    {
        //function_body
        
        return view('admin.questions');
    }
}
