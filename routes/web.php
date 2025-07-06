<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

route::get('/list',[StudentController::class, 'list'])->name('student.list');
route::get('/create',[StudentController::class, 'create'])->name('student.create');
route::post('/store',[StudentController::class, 'store'])->name('student.store');
route::get('/edit/{id}',[StudentController::class, 'edit'])->name('student.edit');
route::post('/update/{id}',[StudentController::class, 'update'])->name('student.update');
route::post('/destroy/{id}',[StudentController::class, 'destroy'])->name('student.destroy');
