<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\AgentServiceController;
use App\Http\Controllers\RessourcesController;
// use App\Http\Controllers\RessourceController;
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

Route::resource('department',DepartmentsController::class);
Route::resource('doctors',DoctorsController::class);
Route::resource('agentService',AgentServiceController::class);
Route::resource('ressources',RessourcesController::class);
// Route::resource('ressource',RessourceController::class);
Route::view('/','Dashboard.index'); 
