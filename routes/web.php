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

Route::get('/', 'Game\lotoFacilController@home')->name('home.loto');

Route::post('/loto/checkGame', 'Game\lotoFacilController@lotoPage')->name('home.loto.checkGame');

Route::get('/user','Configuration\userController@home')->name('login.home');


/* Testing Pay API*/
Route::get('/getApi/{case}','testingApi@managerChange')->name('testingApiBuyng');
Route::post('/doBuy','testingApi@creditCardCryp')->name('testingApiBuyng.crypto');