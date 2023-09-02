<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuizResult;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        //function_body
        $all_student=User::where('role_id',2)->count();
        $attend_quiz=QuizResult::select('user_id')->pluck('user_id')->unique()->count('user_id');
        // dd($attend_quiz);
        return view('admin.dashboardhome',compact('all_student','attend_quiz'));
    }
    public function profile()
    {
        //function_body
        return view('admin.profile');
    }
}
