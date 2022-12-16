<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, "index"])->name("/");
Route::get('/about', [HomeController::class, "about"])->name("about");
Route::get('/teams', [HomeController::class, "teams"])->name( "teams");
Route::get('/contactUs', [HomeController::class, "contactUs"])->name( "contactUs");
Route::get('/menu', [HomeController::class, "menu"])->name("menu");
Route::post('/storeForm', [HomeController::class, "storeForm"])->name("storeForm");
