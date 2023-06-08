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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route list for book operation

Route::get('/', [App\Http\Controllers\BookstoreController::class, 'index'])->name('booklist');
Route::get('/add-book', [App\Http\Controllers\BookstoreController::class, 'addBook'])->name('addBook');
Route::post('/save-book', [App\Http\Controllers\BookstoreController::class, 'saveBook'])->name('saveBook');
Route::get('/book-author', [App\Http\Controllers\BookstoreController::class, 'bookAuthor'])->name('bookAuthor');
Route::post('/save-book-author', [App\Http\Controllers\BookstoreController::class, 'savebookAuthor'])->name('savebookAuthor');

//Route list for Category operation
Route::get('/category', [App\Http\Controllers\CategoriestoreController::class, 'index'])->name('categorylist');
Route::get('/add-category', [App\Http\Controllers\CategoriestoreController::class, 'addCategory'])->name('addCategory');
Route::post('/save-category', [App\Http\Controllers\CategoriestoreController::class, 'saveCategory'])->name('saveCategory');

//Route list for  Author operation
Route::get('/author', [App\Http\Controllers\AuthorController::class, 'index'])->name('authorlist');
Route::get('/add-author', [App\Http\Controllers\AuthorController::class, 'addAuthor'])->name('addAuthor');
Route::post('/save-author', [App\Http\Controllers\AuthorController::class, 'saveAuthor'])->name('saveAuthor');

//Route List for Review
Route::group(['middleware' => 'auth'], function()
{
    //All the routes that belongs to the group goes here
    Route::get('/review', [App\Http\Controllers\ReviewController::class, 'addReview'])->name('addReview');
     Route::post('/save-review', [App\Http\Controllers\ReviewController::class, 'saveReview'])->name('saveReview');
});
Route::get('sending-queue-emails', [App\Http\Controllers\ReviewController::class,'sendTestEmails']);



