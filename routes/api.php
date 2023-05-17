<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ApplyController;


Route::get('/account', [AccountController::class, 'getAllAccount']);
Route::get('/job', [JobsController::class, 'getAllJobs']);
Route::get('/jobs', [JobsController::class, 'threeJobs']);
Route::get('/classes', [ClassesController::class, 'getAllClasses']);

Route::post('/apply', [ApplyController::class, 'store']);
