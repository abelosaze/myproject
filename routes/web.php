<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('create', function () {
    return view('create');
});

Route::get('store', function () {
    return view('store');
});


Route::get('workers', function () {
    return view('workers');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('blog',[App\Http\Controllers\BlogController::class,'blog']);
// Route::post('#',[App\Http\Controllers\BlogController::class,'store']);

Route::get('workers',[App\Http\Controllers\WorkersController::class,'workers']);
Route::get('contact',[App\Http\Controllers\ContactController::class,'contact']);
Route::get('works',[App\Http\Controllers\WorkersController::class,'works']);
Route::get('/show2/{id}',[App\Http\Controllers\WorkersController::class,'show2']);




            //  everything about Post
Route::get('create',[App\Http\Controllers\PostController::class,'create']);
Route::post('/store',[App\Http\Controllers\PostController::class,'store']);
Route::get('post',[App\Http\Controllers\PostController::class,'post']);
Route::get('/show/{id}',[App\Http\Controllers\PostController::class,'show']);
Route::get('/edit/{id}',[App\Http\Controllers\PostController::class,'edit']);
Route::put('/update/{id}',[App\Http\Controllers\PostController::class,'update']);
Route::delete('/destroy/{id}',[App\Http\Controllers\PostController::class,'destroy']);
