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

Route::get('/', ['as' => 'login',function () {
    return view('welcome');
}]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

Route::get('/add','App\Http\Controllers\addController@adding' )->middleware('auth');

Route::post('/addadmin','App\Http\Controllers\addController@save_data' )->middleware('auth');

Route::get('/viewadmin','App\Http\Controllers\addController@viewadmin' )->middleware('auth');

Route::get('/delete/{id}','App\Http\Controllers\addController@delete' )->middleware('auth');

Route::get('/update/{id}','App\Http\Controllers\addController@update' )->middleware('auth');

Route::post('/update','App\Http\Controllers\addController@update_data' )->middleware('auth');

Route::get('/admin_list','App\Http\Controllers\addController@admin_list' )->middleware('auth');

Route::get('/commision_rate','App\Http\Controllers\addController@commision_rate' )->middleware('auth');

Route::get('/reseller','App\Http\Controllers\addController@reseller' )->middleware('auth');

Route::get('/reseller_commision','App\Http\Controllers\addController@reseller_commision' )->middleware('auth');

Route::get('/restaurant_list','App\Http\Controllers\addController@restaurant_list' )->middleware('auth');

Route::post('/user','App\Http\Controllers\addController@userlogin' );

Route::get('/logout','App\Http\Controllers\addController@logout')->middleware('auth');





