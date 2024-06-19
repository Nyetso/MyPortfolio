<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'welcome']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/experience', [ExperienceController::class, 'experience']);
Route::get('/project', [ProjectController::class, 'project']);
Route::get('/contact', [ContactController::class, 'contact']);
