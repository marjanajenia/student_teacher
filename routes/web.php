<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function (){
    Route::get('/list',[StudentController::class, 'list'])->name('student.list');
    Route::get('/create',[StudentController::class, 'create'])->name('student.create');
    Route::post('/store',[StudentController::class, 'store'])->name('student.store');
    Route::get('/edit/{id}',[StudentController::class, 'edit'])->name('student.edit');
    Route::post('/update/{id}',[StudentController::class, 'update'])->name('student.update');
    Route::post('/destroy/{id}',[StudentController::class, 'destroy'])->name('student.destroy');
});

Route::get('/dash', function (){ return view('student.dashboard');});




require __DIR__.'/auth.php';
