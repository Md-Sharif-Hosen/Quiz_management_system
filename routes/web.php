<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/','WebsiteController@demo')->name('demo');
Route::group(['prefix' => '', 'middleware' => ['isstudent']], function () {
});
Route::get('/', 'WebsiteController@index')->name("home");
Route::get('/exam','Website\ExamController@exam')->name('exam')->middleware('isstudent');

Route::get('/profile', 'WebsiteController@profile')->name('profile.user');

Route::group(['prefix' => 'dashboard', 'middleware' => ['isadmin'] , 'namespace'=>'Admin'], function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('/profile', 'AdminController@profile')->name('profile');
    //classes
    Route::get('/classes', 'ClassesController@classes')->name('classes');
    Route::post('/classes_store', 'ClassesController@classes_store')->name('classes.store');
    Route::get('/classes_delete/{id}','ClassesController@classes_delete')->name('classes_delete');
    Route::get('/classes_edit/{id}','ClassesController@classes_edit')->name('classes_edit');
    Route::put('/classes_update','ClassesController@classes_update')->name('classes_update');

    //Quizz
    Route::get('/quiz', 'QuizController@quiz')->name('quiz');
    Route::post('/quiz_store','QuizController@quiz_store')->name('quiz_store');
    Route::get('/quiz_edit/{id}', 'QuizController@quiz_edit')->name('quiz_edit');
    Route::put('quiz_update','QuizController@quiz_update')->name('quiz_update');
    Route::get('/quiz_delete/{id}', 'QuizController@delete')->name('quiz_delete');

    //question
    Route::get('/questions', 'QuestionController@questions')->name('questions');
    Route::post('/questions_store','QuestionController@questions_store')->name('questions_store');
    Route::get('/question_edit/{id}','QuestionController@question_edit')->name('question_edit');
    Route::put('/question_update','QuestionController@question_update')->name('question_update');
    Route::get('/question_delete/{id}','QuestionController@question_delete')->name('question_delete');

});
