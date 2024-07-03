<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\heroController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\teamController;
use App\Http\Controllers\teamsController;

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

Route::get('/', [AppController::class, 'index']);
// Login
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
// Hero
Route::get('/hero', [heroController::class, 'index'])->name('hero')->middleware('auth');
Route::get('/hero/create', [heroController::class, 'create'])->name('hero.create')->middleware('auth');
Route::post('/hero/store', [heroController::class, 'store'])->name('hero.store')->middleware('auth');
Route::get('/hero/edit/{id}', [heroController::class, 'edit'])->name('hero.edit')->middleware('auth');
Route::post('/hero/update/{id}', [heroController::class, 'update'])->name('hero.update')->middleware('auth');
Route::post('/hero/destroy/{id}', [heroController::class, 'destroy'])->name('hero.destroy')->middleware('auth');
// About
Route::get('/about', [AboutController::class, 'index'])->name('about')->middleware('auth');
Route::get('/about/create', [aboutController::class, 'create'])->name('about.create')->middleware('auth');
Route::post('/about/store', [aboutController::class, 'store'])->name('about.store')->middleware('auth');
Route::get('/about/edit/{id}', [aboutController::class, 'edit'])->name('about.edit')->middleware('auth');
Route::post('/about/update/{id}', [aboutController::class, 'update'])->name('about.update')->middleware('auth');
Route::post('/about/destroy/{id}', [aboutController::class, 'destroy'])->name('about.destroy')->middleware('auth');
//service
Route::get('/services', [ServicesController::class, 'index'])->name('services')->middleware('auth');
Route::get('/services/create', [servicesController::class, 'create'])->name('services.create')->middleware('auth');
Route::post('/services/store', [servicesController::class, 'store'])->name('services.store')->middleware('auth');
Route::get('/services/edit/{id}', [servicesController::class, 'edit'])->name('services.edit')->middleware('auth');
Route::post('/services/update/{id}', [servicesController::class, 'update'])->name('services.update')->middleware('auth');
Route::post('/services/destroy/{id}', [ServicesController::class, 'destroy'])->name('services.destroy')->middleware('auth');

Route::get('/project', [ProjectController::class, 'index'])->name('project')->middleware('auth');
Route::get('/project/create', [projectController::class, 'create'])->name('project.create')->middleware('auth');
Route::post('/project/store', [projectController::class, 'store'])->name('project.store')->middleware('auth');
Route::get('/project/edit/{id}', [projectController::class, 'edit'])->name('project.edit')->middleware('auth');
Route::post('/project/update/{id}', [projectController::class, 'update'])->name('project.update')->middleware('auth');
Route::post('/project/destroy/{id}', [projectController::class, 'destroy'])->name('project.destroy')->middleware('auth');


Route::get('/team', [teamController::class, 'index'])->name('team')->middleware('auth');
Route::get('/team/create', [teamController::class, 'create'])->name('team.create')->middleware('auth');
Route::post('/team/store', [teamController::class, 'store'])->name('team.store')->middleware('auth');
Route::get('/team/edit/{id}', [teamController::class, 'edit'])->name('team.edit')->middleware('auth');
Route::post('/team/update/{id}', [teamController::class, 'update'])->name('team.update')->middleware('auth');
Route::post('/team/destroy/{id}', [teamController::class, 'destroy'])->name('team.destroy')->middleware('auth');
