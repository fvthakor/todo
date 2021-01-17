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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/todo', [TodoController::class, 'index'])->name('todo');
Route::middleware(['auth:sanctum', 'verified'])->get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::middleware(['auth:sanctum', 'verified'])->post('/todo/create', [TodoController::class, 'store'])->name('todo.create');
Route::middleware(['auth:sanctum', 'verified'])->get('/todo/show/{todo}', [TodoController::class, 'show'])->name('todo.show');
Route::middleware(['auth:sanctum', 'verified'])->get('/todo/edit/{todo}', [TodoController::class, 'edit'])->name('todo.edit');
Route::middleware(['auth:sanctum', 'verified'])->post('/todo/update/{todo}', [TodoController::class, 'update'])->name('todo.update');
Route::middleware(['auth:sanctum', 'verified'])->get('/todo/delete/{todo}', [TodoController::class, 'destroy'])->name('todo.delete');
