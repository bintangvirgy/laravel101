<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;

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
    return view('halamanutama');
});

Route::get('starter', function () {
    return view('starter');
});

Route::get('jumbotron', function () {
    return view('view_page.jumbotron');
});

Route::get('dashboard',[BasicController::class,'dashboard']);


