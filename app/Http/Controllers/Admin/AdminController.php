<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\QuizResult;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index()
    {
        //function_body
        $all_student=User::where('role_id',2)->count();
        $attend_quiz=QuizResult::select('user_id')->pluck('user_id')->unique()->count('user_id');
        $userfind=Auth::user()->name;
        $total_quiz=Quiz::where('teacher',$userfind)->count();
        // dd($tota_quiz);
        // $high_score=
        // dd($attend_quiz);
        return view('admin.dashboardhome',compact('all_student','attend_quiz','total_quiz'));
    }
    public function profile()
    {
        //function_body
        return view('admin.profile');
    }
}
