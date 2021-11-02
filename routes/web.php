<?php

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
    echo "Hello World";
});

Route::get('/name/{Bayu}', function ($name) {
    return "Hello " . $name;
});

Route::get('/name/{Nama}/{nrp}', function ($name,$nrp) {
    return "Hello " . $name . " NRP anda ". $nrp;
});
Route::get('/person', 'PersonController@index');
Route::get('/person/show/{param}', 'PersonController@show');
Route::get('/student', 'StudentController');