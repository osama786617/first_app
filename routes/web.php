<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\sitecontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/cal', function () {
    return view('cal');
});


Route::get('/calculater', function (Request $request){
    $v1 = $request -> v1;
    $v2 = $request -> v2;

    $data = compact('v1','v2');

    return view('calculater')->with($data);
});


Route::get('/table', function () {
    return view('table');
});

Route::get('/tables', function (Request $request){
    $num = $request ->  num;
   

    $data = compact('num');

    return view('tables')->with($data);
});




Route::get('username',[sitecontroller::class,'personal'] );
Route::get('world',[sitecontroller::class,'personalworld'] );
Route::get('question/{name}',[sitecontroller::class,'personalinfo'] );



Route::get('/data', function () {
    return view('data');
});

Route::get('data2/{id}',[sitecontroller::class,'personaldata'] );