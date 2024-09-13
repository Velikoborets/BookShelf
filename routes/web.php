<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('authors')->group(function(){
    Route::get('/', [AuthorController::class, 'index'])->name('authors.index');
    Route::get('/create', [AuthorController::class, 'create'])->name('authors.create');
    Route::post('/', [AuthorController::class, 'store'])->name('authors.store');
    Route::get('/{author}', [AuthorController::class, 'show'])->name('authors.show');
    Route::get('/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
    Route::put('/{author}', [AuthorController::class, 'update'])->name('authors.update');
    Route::delete('/{author}/delete', [AuthorController::class, 'destroy'])->name('authors.destroy');
});

Route::prefix('books')->group(function(){
    Route::get('/', [BookController::class, 'index'])->name('books.index');
    Route::get('/create', [BookController::class, 'create'])->name('books.create');
});