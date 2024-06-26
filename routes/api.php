<?php

use App\Http\Controllers\TaskController;
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

// Tasks
Route::get('/tasks', [TaskController::class, 'getAllTasks']);
Route::post('/tasks', [TaskController::class, 'createTask']);
Route::get('/tasks/{id}', [TaskController::class, 'getTask']);
Route::put('/tasks/{id}', [TaskController::class, 'updateTask']);
Route::delete('/tasks/{id}', [TaskController::class, 'deleteTask']);