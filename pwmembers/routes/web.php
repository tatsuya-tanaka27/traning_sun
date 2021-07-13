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

// test
Route::get('hello', function(){
    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
});


Route::get('/top', function(){
    return view('top');
});


// トップ画面へのルート
Route::get('top', function () {
    return view('top');
});

