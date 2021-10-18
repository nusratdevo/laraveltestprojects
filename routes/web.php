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
Route::get('/student', [StudentController::class,'index'])->name('student');
Route::post('/student/create', [StudentController::class,'create'])->name('create.student');
Route::get('/student/edit/{id}', [StudentController::class,'edit']);
Route::put('/student/update', [StudentController::class,'update'])->name('update.student');
Route::delete('/student/delete/{id}', [StudentController::class,'delete']);
