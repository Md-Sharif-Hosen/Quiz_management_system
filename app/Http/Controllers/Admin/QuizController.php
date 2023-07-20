<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    public function quiz()
    {
    
        //function_body
        $class=Classes::get();
        $quizz=Quiz::with('class_name_relation')->get();
        return view('admin.quizzes',compact('class','quizz'));
    }
    public function quiz_store(request $request)
    {
        //function_body
        $quizstore=new Quiz();
        $quizstore->quizz_subject=request('quizz_subject');
        $quizstore->class_name=request('class_name');
        $quizstore->save();
        return redirect()->back()->with('create','Quizz create Successfully');
    }
    public function quiz_edit($id)
    {
        //function_body
        $quiz_edit_data=Quiz::find($id);
        return response()->json([
               'status'=>200,
               'quiz_edit_data'=>$quiz_edit_data
        ]);
    }
    public function quiz_update(request $request)
    {
        //function_body
        $quiz_id=request('id');
        $quiz_update=Quiz::find($quiz_id);
        $quiz_update->quizz_subject=request('quizz_subject');
        $quiz_update->class_name=request('class_name');
        $quiz_update->save();
        return redirect()->back()->with('Update','Quizz Update Successfully');
    }


    public function delete($id)
    {
        //function_body
        $quiz_delete=Quiz::where('id',$id)->first();
        $quiz_delete->delete();
        return redirect()->back()->with('Delete','Delete Quiz Successfully');
    }
}
