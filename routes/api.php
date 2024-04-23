<?php

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

Route::get('/tasks', function () {
    return "get all tasks";
});

Route::post('/tasks', function () {
    return "create a task";
});

Route::get('/tasks/{id}', function ($id) {
    return "get task with id $id";
});

Route::put('/tasks/{id}', function ($id) {
    return "update task with id $id";
});

Route::delete('/tasks/{id}', function ($id) {
    return "delete task with id $id";
});