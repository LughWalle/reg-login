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

/*Route::get('/', 'testController@index')->name('login');
Route::post('login', 'testController@login');

Route::group(['middleware'=>['auth']],function(){

    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->route('login');
    });
    Route::get('/painel','testController@painel')->name('painel');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');