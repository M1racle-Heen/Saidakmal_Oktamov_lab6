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

Route::get('/test', function () {
    return 'Web programming: back end';
});

Route::get('/user/{name?}/{lname?}', function ($name = "Azamat",$lname = "Oktamov") {
    return 'Your name is '.$name." ".$lname;
});
/*
Route::get('/redirect-example', function () {
    return redirect("/test");
});
Route::get('student/{number}/{sign}/{number2}',"CalculatorController@operation"
);

//optional parameter не обязательно
Route::get('/user/{name?}', function ($name = "Azamat") {
    return $name;
});
//required parameter обязательно
Route::get('/user/{name}', function () {
    return $name;
});
Route::resource('/student','TeacherController');*/