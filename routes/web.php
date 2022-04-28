<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Post
    Route::get('/posts', [PostController::class, 'create']);
    Route::get('/create-post', [PostController::class, 'create']);
    Route::post('/store-post', [PostController::class, 'store']);
    Route::get('/get-post/{id}', [PostController::class, 'show']);

    //Student
    Route::resource('/student', StudentController::class);
    Route::get('/students/list', [StudentController::class, 'getStudents']);
});



