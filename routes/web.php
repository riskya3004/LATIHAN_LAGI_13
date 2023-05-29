<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
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
//     return view('home');
// });
// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/publisher', function () {
//     return view('publisher');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });


Route::get('/', [BookController::class, 'bookindex']);

Route::get('/home', [BookController::class, 'bookindex']);

Route::get('/bookdetail/{id}', [BookController::class, 'detailbookindex']);

Route::get('/category/{id}', [CategoryController::class, 'filtercategoryindex']);

Route::get('/publisher', [PublisherController::class, 'showallpublisher']);

Route::get('/publisher/{id}', [PublisherController::class, 'filterpublisherindex']);
