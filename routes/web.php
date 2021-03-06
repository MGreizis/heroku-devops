<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ProductController;

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
    return User::all();
});

Route::view('/home', 'home')->middleware('auth');
Route::resource('products', ProductController::class)->middleware('auth');
