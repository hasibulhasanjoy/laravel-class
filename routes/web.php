<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('books/{id}/show', [BookController::class, 'show'])->name('books.show');
Route::get('book/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::get('book/create', [BookController::class, 'create'])->name('books.create');
Route::post('book/store', [BookController::class, 'store'])->name('books.store');
Route::put('book/update', [BookController::class, 'update'])->name('books.update');
Route::delete('book/', [BookController::class, 'destroy'])->name('books.delete');
