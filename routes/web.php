<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class,"index"])->name("todo");
Route::post('/', [TodoController::class,"addtodo"])->name("addtodo");
Route::delete('/', [TodoController::class,"remove"])->name("remove");
// Route::post('/', [TodoController::class,"update"])->name("update");

// Route::get('/', function () {
//     return view('todo');
// });