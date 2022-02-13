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

Route::get('/hello', function () {
    return "WAT UP";
});

Route::get('/name/{name}', function($name) {
    return 'Hello there ' . $name . '.';
});


// with optionals
Route::get('/animal/{animal?}', function($animal = null) {
    if (!is_null($animal)) {
        return 'Animal entered: ' . $animal . '.';
    }
    return 'No animal entered';
});

Route::get('/user/{id?}', function($id = null) {
    if (!is_null($id)) {
        return 'user id: ' . $id;
    }
    return 'no user found.';
});