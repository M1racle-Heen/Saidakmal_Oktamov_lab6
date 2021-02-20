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

Route::get('/post/{id?}', function ($id = 999) {
    return "Your ID is: ".$id;
})->where('id','[\d]+');


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
Route::resource('/student','TeacherController');