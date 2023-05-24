<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/publisher', [MainController::class, 'publisherAll'])->name('publisher');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/book/{id}', [MainController::class, 'bookDetail'])->name('bookDetail');
Route::get('/publisher/{id}', [MainController::class, 'publisher'])->name('publisherSpecific');
Route::get('/category/{id}', [MainController::class, 'category'])->name('category');

