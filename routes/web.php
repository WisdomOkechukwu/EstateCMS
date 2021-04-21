<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts.body');
});

Route::get('/agents', function () {
    return view('layouts.views.agents');
});

