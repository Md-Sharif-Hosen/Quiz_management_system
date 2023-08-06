<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\QuizResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class QuizController extends Controller
{
    //
    public function quiz()
    {

        //function_body
        $class = Classes::get();

        $quizz = Quiz::with('quiz_submit_user')->with('question_relations')->get();
        // dd($quizz->toArray());
        return view('admin.quizzes', compact('class', 'quizz'));
    }
    public function quiz_store(request $request)
    {
        //function_body
        $quizstore = new Quiz();
        $quizstore->quizz_subject = request('quizz_subject');
        $quizstore->class_name = request('class_name');
        $quizstore->teacher = request('teacher');
        if (request()->hasFile('cover_image')) {
            $quizstore->cover_image = Storage::put('/quizz', request()->file('cover_image'));
        }
        $quizstore->status = 1;

        $quizstore->save();
        return redirect()->back()->with('create', 'Quizz create Successfully');
    }
    public function quiz_edit($id)
    {
        //function_body
        $quiz_edit_data = Quiz::find($id);
        return response()->json([
            'status' => 200,
            'quiz_edit_data' => $quiz_edit_data
        ]);
    }
    public function quiz_update(request $request)
    {
        //function_body
        $quiz_id = request('id');
        $quiz_update = Quiz::find($quiz_id);
        $quiz_update->quizz_subject = request('quizz_subject');
        $quiz_update->class_name = request('class_name');
        $quiz_update->teacher = request('teacher');
        if (request()->hasFile('cover_image')) {
            $quiz_update->cover_image = Storage::put('/quizz', request()->file('cover_image'));
        }
        $quiz_update->save();
        return redirect()->back()->with('Update', 'Quizz Update Successfully');
    }
    public function delete($id)
    {
        //function_body
        $quiz_delete = Quiz::where('id', $id)->first();
        $quiz_delete->delete();
        return redirect()->back()->with('Delete', 'Delete Quiz Successfully');
    }
    public function quiz_question($id)
    {
        //function_body
        $quiz=Quiz::find($id);
        $question=Question::where('quiz_id',$id)->get();
        return view('admin.quiz_topic_question',compact('quiz','question'));
    }
    // public function quiz_topic()
    // {
    //     $quiz_topic = Quiz::with('quiz_submit_user')->get();

    //     // dd($quiz_topic->toArray());
    //     return view('admin.quiz_topic', compact('quiz_topic'));
    // }

    public function quiz_examiner($id)
    {
        //function_body
        $quiz = quiz::find($id);
        // $quiz_result = QuizResult::where('quiz_id', $id)->get();

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
        ->where('quiz_results.quiz_id', $id)
        ->groupBy('quizzes.id', 'quiz_results.user_id') // Group by both quiz ID and user ID to get marks per user for each quiz.
        ->get();
            // dd($quiz_result);
        // $quiz_result=QuizResult::where('quiz_id',$id)->select(DB::raw('user_id,quiz_id'))
        // ->groupBy('user_id','quiz_id')
        // ->get();
        return view('admin.quiz_examiner', compact("quiz_result"));
    }
}
