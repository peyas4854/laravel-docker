<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;


Route::get('/test', function () {
    $student = \App\Models\Student::query()->first();
//    $user = \App\Models\User::query()->first();

    $student->comments()->create([
       'comment'=>'lorems lorem lorem lorem lorem lorem lorem sdkfsdfnn 10'
    ]);

    dd('done');

});
Route::get('/student/comment', [CommentController::class, 'studentComment']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Post
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/create-post', [PostController::class, 'create']);
    Route::post('/store-post', [PostController::class, 'store']);
    Route::get('/get-post/{id}', [PostController::class, 'show']);
    //Student
    Route::resource('/student', StudentController::class);
    Route::get('/students/list', [StudentController::class, 'getStudents']);
    //roles
    Route::resource('roles', RoleController::class);
    //users
    Route::resource('users', UserController::class);

});





