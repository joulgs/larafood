<?php

use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;

Route::get('admin/plans', [PlanController::class, 'index'])->name('plans.index');
Route::get('admin/Plans/create', [PlanController::class, 'create'])->name('plans.create');
Route::post('admin/plans', [Plancontroller::class, 'store'])->name('plans.store');

Route::get('/', function () {
    return view('welcome');
});


/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
