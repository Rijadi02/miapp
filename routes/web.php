<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['namespace' => 'Admin', 'middleware' => ['auth'], 'prefix' => 'admin'], function () {

    Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
    Route::post('categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::delete('categories/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy');
    Route::patch('categories/{category}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
    Route::get('categories/{category}/edit',  [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');

    Route::get('category/{category}/books', [App\Http\Controllers\BookController::class, 'index'])->name('category.books');
    Route::post('book/{category}/store', [App\Http\Controllers\BookController::class, 'store'])->name('category.books.store');
    Route::delete('books/{book}', [App\Http\Controllers\BookController::class, 'destroy'])->name('category.books.destroy');
    Route::patch('books/{book}/update', [App\Http\Controllers\BookController::class, 'update'])->name('category.books.update');
    Route::get('books/{book}/edit',  [App\Http\Controllers\BookController::class, 'edit'])->name('category.books.edit');
});
