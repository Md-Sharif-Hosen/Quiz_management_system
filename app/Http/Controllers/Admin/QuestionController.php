<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function questions()
    {
        //function_body
        $quiz = Quiz::get();
        $question = Question::with('quizz_relation')->paginate(3);
        return view('admin.questions', compact('quiz', 'question'));
    }

    public function questions_store(request $request)
    {
        //function_body
        $validate = $request->validate([
            'quiz_id' => 'required',
            'question_title' => 'required',
            'optionA' => 'required',
            'optionB' => 'required',
            'optionC' => 'required',
            'optionD' => 'required',
            'answer' => 'required',
        ]);
        $question_store = new Question();
        // dd(request()->all());
        $question_store->quiz_id=request('quiz_id');
        $question_store->question_title=request('question_title');
        $question_store->optionA=request('optionA');
        $question_store->optionB=request('optionB');
        $question_store->optionC=request('optionC');
        $question_store->optionD=request('optionD');
        $question_store->answer=request('answer');
        $question_store->save();
        return redirect()->back()->with('create', 'Question create Successfully');
    }

    public function question_delete($id)
    {
        //function_body
        $question_delete = Question::where('id', $id)->first();
        $question_delete->delete();
        return redirect()->back()->with('delete', 'Question Deleted Successfully');
    }
    public function question_edit($id)
    {
        //function_body
        $question_edit_data = Question::find($id);
        return response()->json([
            'status' => 200,
            'question_edit_data' => $question_edit_data
        ]);
    }

    public function question_update(request $request)
    {
        //function_body
        $question_id = request('id');
        $question_update_data = Question::find($question_id);
        $question_update_data->quiz_id = request('quiz_id');
        $question_update_data->question_title = request('question_title');
        $question_update_data->optionA = request('optionA');
        $question_update_data->optionB = request('optionB');
        $question_update_data->optionC = request('optionC');
        $question_update_data->optionD = request('optionD');
        $question_update_data->answer = request('answer');
        $question_update_data->Update();
        return redirect()->back()->with('Update', 'Question Update Successfully');
    }
}
