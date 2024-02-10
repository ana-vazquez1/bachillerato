<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', [PagesController::class, 'inicio'])->name('inicio');
Route::get('/docentes', [PagesController::class, 'docentes'])->name('docentes');
Route::get('/calendario', [PagesController::class, 'calendario'])->name('calendario');
Route::get('/login', [PagesController::class, 'login'])->name('login');