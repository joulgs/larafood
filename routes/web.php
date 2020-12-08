<?php

use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/plans', [PlanController::class, 'index'])->name('plans.index'); //dev, futuramente alterar para resource

Route::get('/', function () {
    return view('welcome');
});


/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
