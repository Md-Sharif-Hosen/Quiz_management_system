<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


route::get("/hello", function () {
    // $user=User::where("role_id",2)->get() ;
    // $user=User::find(3);
    // $user = User::all();
    // $user=DB::table('users')->get();
    // return $user;
    // return response()->json([
    //     'users' => $user
    // ]);
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/','WebsiteController@demo')->name('demo');
Route::group(['prefix' => ' ', 'middleware' => ['isstudent']], function () {
    Route::get('/', 'WebsiteController@index')->name("home");

    //teacher
    Route::get('/teacher', 'WebsiteController@teacher')->name('teacher');

    //cources
    Route::get('/courses', 'WebsiteController@courses')->name('courses');

    //contacts
    Route::get('/contacts', 'WebsiteController@contacts')->name('contacts');

    //about
    Route::get('/about', 'WebsiteController@about')->name('about');

    //exam
    Route::get('/examlist', 'Website\ExamController@examlist')->name('examlist');
    Route::post('/quiz_userid', 'Website\ExamController@quiz_userid_store')->name('quiz_userid');
    Route::get('/exam/{quizz}', 'Website\ExamController@exam')->name('exam');
    Route::post('/exam/store', 'Website\ExamController@exam_store')->name('exam.store');
    //exam_result
    Route::get('/result/{quiz_id}', 'Website\ExamController@result')->name('result');
    Route::get('/result_details/{id}', 'Website\ExamController@result_details')->name('result_details');

    Route::get('/profile', 'WebsiteController@profile')->name('profile.user');
});

Route::group(['prefix' => 'dashboard', 'middleware' => ['isadmin'], 'namespace' => 'Admin'], function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('/profile', 'AdminController@profile')->name('profile');
    //classes
    Route::get('/classes', 'ClassesController@classes')->name('classes');
    Route::post('/classes_store', 'ClassesController@classes_store')->name('classes.store');
    Route::get('/classes_delete/{id}', 'ClassesController@classes_delete')->name('classes_delete');
    Route::get('/classes_edit/{id}', 'ClassesController@classes_edit')->name('classes_edit');
    Route::put('/classes_update', 'ClassesController@classes_update')->name('classes_update');

    //Quizz
    Route::get('/quiz', 'QuizController@quiz')->name('quiz');
    Route::post('/quiz_store', 'QuizController@quiz_store')->name('quiz_store');
    Route::get('/quiz_edit/{id}', 'QuizController@quiz_edit')->name('quiz_edit');
    Route::put('quiz_update', 'QuizController@quiz_update')->name('quiz_update');
    Route::get('/quiz_delete/{id}', 'QuizController@delete')->name('quiz_delete');
    Route::get('/quiz_topic', 'QuizController@quiz_topic')->name('quiz_topic');
    Route::get('/quiz_topic_question/{id}', 'QuizController@quiz_question')->name('quiz_topic_question');
    Route::get('/quiz_examiner/{id}', 'QuizController@quiz_examiner')->name('quiz_examiner');

    //question
    Route::get('/questions', 'QuestionController@questions')->name('questions');
    Route::post('/questions_store', 'QuestionController@questions_store')->name('questions_store');
    Route::get('/question_edit/{id}', 'QuestionController@question_edit')->name('question_edit');
    Route::put('/question_update', 'QuestionController@question_update')->name('question_update');
    Route::get('/question_delete/{id}', 'QuestionController@question_delete')->name('question_delete');

    //Student Result
});
