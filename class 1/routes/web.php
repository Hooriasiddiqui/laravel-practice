<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\PhotoController;

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/furniture', function () {
    return view('furniture');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/home', [DemoController::class , 'index']);


Route::get('/gallery', SingleController::class);

Route::resourse('photo', PhotoController::class);