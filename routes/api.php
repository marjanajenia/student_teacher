<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/register', [UserController::class, 'createUser']);
Route::post('/login', [UserController::class, 'loginUser']);


Route::get('/list', [TeacherController::class, 'list']);
Route::post('/teacherRegistration', [TeacherController::class, 'teacherRegistration']);
Route::post('/teacherRegistrationUpdate', [TeacherController::class, 'teacherRegistrationUpdate']);
