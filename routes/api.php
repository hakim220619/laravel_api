<?php

use App\Http\Controllers\api\StoriesController;
use App\Http\Controllers\api\StudentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/student', [StudentController::class, 'student']);

Route::get('/stories', [StoriesController::class, 'stories']);
Route::get('/stories/{id}', [StoriesController::class, 'storiesById']);
Route::get('/stories-by-plot/{id}', [StoriesController::class, 'storiesByPlot']);
Route::post('/stories-inserts', [StoriesController::class, 'store']);
Route::put('/stories-update/{id}', [StoriesController::class, 'update']);
Route::delete('/stories-destory/{id}', [StoriesController::class, 'destory']);
