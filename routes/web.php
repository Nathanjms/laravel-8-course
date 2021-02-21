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

Route::get('/string', function () {
    return 'string';
});

Route::get('/array', function () {
    return [1,2,3];
});

Route::get('/json', function () {
    return response()->json([
        'name' => 'Nathan',
        'course' => 'Laravel Beginners to Advanced',
    ]);
});

Route::get('/users', function () {
    return redirect('/');
});