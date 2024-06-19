<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'welcome']);
Route::get('/about', 'AboutController@About');
Route::get('/experience', 'ExperienceController@Experience');
Route::get('/project', 'ProjectController@Project');
