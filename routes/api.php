<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProgramController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/courses/get-courses', [CoursesController::class, 'index']);
Route::post('/courses/add-course', [CoursesController::class, 'store']);
Route::get('/courses/get-course/{id}', [CoursesController::class, 'show']);
Route::put('/courses/update-course/{id}', [CoursesController::class, 'update']);
Route::delete('/courses/delete-course/{id}', [CoursesController::class, 'destroy']);
Route::get('/courses/search-course/{name}', [CoursesController::class, 'search']);


//Programs Routes
Route::get('/programs/get-programs', [ProgramController::class, 'index']);
Route::post('/programs/add-program', [ProgramController::class, 'store']);

// Route::resource('courses', CoursesController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
