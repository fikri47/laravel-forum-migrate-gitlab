<?php

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

Route::get('/', function(){
    return view('home.index');
});

Route::get('/profile', function(){
    return view('profile.index');
});

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