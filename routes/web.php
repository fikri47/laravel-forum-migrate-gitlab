<?php

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

<<<<<<< HEAD
Route::get('/', function(){
    return view('halaman.home');
=======
Route::get('/dashboard', function(){
    return view('home.index');
>>>>>>> 40d14bd021f11368669135041019088d4fcad3f1
});

Route::get('/profile', function(){
    return view('profile.index');
});

<<<<<<< HEAD
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function(){
    return view('halaman.home');
    return view('home.index');
});

Route::get('/profile', function(){
    return view('profile.index');
});

=======
>>>>>>> 40d14bd021f11368669135041019088d4fcad3f1
Route::get('/category', function(){
    return view('category.index');
});

Route::get('/category/create', function(){
    return view('category.create');
});

Route::post('/category/create', function(){
    return view('category.store');
});

Route::get('/category/1/edit', function(){
    return view('category.update');
});