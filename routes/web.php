<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function(){
    return view('template.default');
});

route::get('/MyController', [App\Http\Controllers\MyController::class, 'index']);
route::get('/calculate', [App\Http\Controllers\MyController::class, 'info']);
route::post('/calculate', [App\Http\Controllers\MyController::class, 'calculate']);
route::post('/regis' ,[App\Http\Controllers\MyController::class, 'regis']);
