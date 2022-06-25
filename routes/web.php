<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/dashboard', function () {
    return view('admin/dashboard/index');
});

Route::get('/dashboard/charts', function () {
    return view('admin/dashboard/charts');
});

Route::get('/dashboard/tables', function () {
    return view('admin/dashboard/tables');
});

Route::get('/dashboard/layoutstatic', function () {
    return view('admin/dashboard/layoutstatic');
});

Route::get('/dashboard/layoutsidenavlight', function () {
    return view('admin/dashboard/layoutsidenavlight');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
