<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// standard Laravel route works
Route::get('/welcome', function () {
    return view('welcome');
});

// Inertia Route; route is read but doesn't render page
Route::get('/', function () {
    return Inertia::render('Home');
});
