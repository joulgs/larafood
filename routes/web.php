<?php

use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;

Route::get('admin/plans', [PlanController::class, 'index'])->name('plans.index');
Route::get('admin/Plans/create', [PlanController::class, 'create'])->name('plans.create');
Route::post('admin/plans', [PlanController::class, 'store'])->name('plans.store');
Route::get('admin/plans/{url}', [PlanController::class, 'show'])->name('plans.show');
Route::dele ('admin/plans/{url}', [PlanController::class, 'destroy'])->name('plans.destroy');

Route::get('/', function () {
    return view('welcome');
});

