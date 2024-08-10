<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RekapSprintController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserStoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('rekap-sprints/filter', [RekapSprintController::class, 'filterByProjectName'])->name('rekap_sprints.filter');
Route::get('user_stories', [UserStoryController::class, 'index'])->name('user_stories');
