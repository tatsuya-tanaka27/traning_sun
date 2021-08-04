<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SampleController;

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
    return view('auth/login');
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
//Route::get('top',[App\Http\Controllers\infoController::class, 'index'])->name('top');
Route::get('top','App\Http\Controllers\infoController@model');

Route::get('layouts/common', function () {
    return view('layouts/common');
});

//　フォーム画面系
//　フォーム画面へのルート
Route::get('/form', function(){
    return view('forms/form');
});

Route::get('post','FormController@post');
Route::post('insert', 'App\Http\Controllers\FormController@insert');
Route::get('/form/send', 'App\Http\Controllers\FormSendController@send');


//　内容確認
Route::get('/form/check', function(){
    return view('forms/form_check');
});
//　送信成功
Route::get('/form/success', function(){
    return view('forms/form_success');
});
//　送信失敗
Route::get('/form/failure', function(){
    return view('forms/form_failure');
});

//ヘルプ画面
Route::get('help', function () {
    return view('help');
});

//サポート画面
Route::get('support', function () {
    return view('support');
});

Route::get('layouts/error', function () {
    return view('layouts/error');
});



// サンプル画面
//Route::get('sample','sampleController@index');
Route::get('sample', [sampleController::class, 'index']);

