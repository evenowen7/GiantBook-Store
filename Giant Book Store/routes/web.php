<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
// use App\Http\Controllers\PagesController;

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

Route::get('/', [PageController::class, 'showHomePage']);
// Route::get('/', 'PageController@showHomePage');

// Route::get('/detail', function () {
//     return view('detail');
// });
Route::get('/detail', [PageController::class, 'showDetail']);

// Route::get('/category', function () {
//     return view('category');
// });
Route::get('/category', [PageController::class, 'showCategory']);

// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/contact', [PageController::class, 'showContact']);

// Route::get('/publisher', function () {
//     return view('publisher');
// });
Route::get('/publisher', [PageController::class, 'showPublisher']);


// Route::get('/category1', function () {
//     return view('category1');
// });

// Route::get('/category2', function () {
//     return view('category2');
// });
Route::get('/category2', [PageController::class, 'showCategory2']);

// Route::get('/category3', function () {
//     return view('category3');
// });
Route::get('/category3', [PageController::class, 'showCategory3']);

// Route::get('/category4', function () {
//     return view('category4');
// });
Route::get('/category4', [PageController::class, 'showCategory4']);
