<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PustawanController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//menampilkan data pustkawan
Route::get('/pustakawan',[PustawanController::class, 'index']);

//Get all resources
Route::get('/books', [BookController::class, 'index']);

//Post add resource
Route::post('/books', [BookController::class, 'store']);

//Get detail resource
Route::get('/books/{id}', [BookController::class, 'show']);

//edit rosources
Route::put('books/{id}', [BookController::class, 'update']);