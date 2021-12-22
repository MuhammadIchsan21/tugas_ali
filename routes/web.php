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

Route::get('/', 'HomeController@index')
        ->name('home');
Route::get('/detail/{namadosen}', 'DetailController@index')
        ->name('detail');
Route::get('/bimbingan', 'BimbinganController@index')
        ->name('bimbingan');
Route::prefix('admin')
        ->namespace('Admin')
        ->group(function () {
            Route::get('/', 'DashboardController@index')
            ->name('dashboard');

            Route::resource('dosen', 'DosenController');
            Route::resource('gallery', 'GalleryController');
        });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
