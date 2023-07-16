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


Route::get('/','WebsiteController@index');

Route::group( ['prefix'=>'dashboard','middleware'=>['auth'] ],function(){
Route::get('/','AdminController@index');
Route::get('/quizz','AdminController@quizz')->name('quizz');
Route::get('/classes','AdminController@classes')->name('classes');
Route::get('/questions','AdminController@questions')->name('questions');
});
