<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;

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

Route::get('/', function(){    
    return view('beranda.index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [QuestionController::class, 'getAll']);

Route::resource('profile', ProfileController::class);
Route::resource('category', CategoryController::class);
Route::resource('question', QuestionController::class);

Auth::routes();

Route::post('/answer/{question_id}', [AnswerController::class, 'store']);

Route::delete('/answer/{answer}', [AnswerController::class, 'delete'])->name('answer.delete');
Route::put('/answer/{answer_id}', [AnswerController::class, 'update'])->name('answer.update');