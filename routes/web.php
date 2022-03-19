<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PotentialController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ZohoCrmAuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);


Route::get('/potentials', [PotentialController::class, 'lists'])->name('potentials');
Route::get('/potentials/create', [PotentialController::class, 'create'])->name('potentials.create');
Route::post('/potentials/create/post', [PotentialController::class, 'create_post'])->name('potentials.create.post');

Route::get('/tasks', [TasksController::class, 'lists'])->name('tasks');
Route::get('/tasks/create', [TasksController::class, 'create'])->name('tasks.create');
Route::post('/tasks/create/post', [TasksController::class, 'create_post'])->name('tasks.create.post');
