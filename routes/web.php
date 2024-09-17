<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/student-form',[StudentController::class,'studentForm']);
Route::post('/student-form-post',[StudentController::class,'Store']);

Route::get('/student/delete/{id}', [StudentController::class, 'delete'])->name('studentList.delete');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('studentList.edit');
Route::put('/student/update/{id}', [StudentController::class, 'update'])->name('studentList.update');
