<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", function(){
    return view('login');

Route::get('/main', function () {
    return view('mainpage');
});