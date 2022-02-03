<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\AgentServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RessourcesController;
use App\Http\Controllers\UserController;
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
Route::resource('/',HomeController::class);
Route::resource('/users',UserController::class);
// Route::resource('ressource',RessourceController::class);
Route::view('/new','Dashboard.new');
// Route::get('/createUser', function () {
//     return view('doctors.createUser');
// });
Route::get('/createDoctor','App\Http\Controllers\DoctorsController@createUser')->name('doctors.createUser');
Route::post('/storeDoctor','App\Http\Controllers\DoctorsController@storeUser')->name('doctors.storeUser');
Route::get('/createAgent','App\Http\Controllers\AgentServiceController@createUser')->name('agentService.createUser');
Route::post('/storeAgent','App\Http\Controllers\AgentServiceController@storeUser')->name('agentService.storeUser');
// Route::get('/test', function(){
//     return view('departments.test');
// });
