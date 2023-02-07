<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

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

Route::get('/student', [StudentController::class, 'index']);

Route::get('delete/{id}', [StudentController::class, 'delete']);

Route::view('student/add', 'students.add');

Route::post('/student/add', [StudentController::class, 'add']);

Route::get('update/{id}', [StudentController::class, 'show']);

Route::post('/student/update', [StudentController::class, 'update']);

Route::view('student/upload', 'students.upload');

Route::post('/student/upload', [StudentController::class, 'send']);
