<?php

use App\Http\Controllers\GameListController;
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

Route::get('/', [GameListController::class, 'index'])->name('index');
Route::get('/brackets', [GameListController::class, 'brackets'])->name('brackets');
Route::get('/bracketControlForm', [GameListController::class, 'bracketControlForm'])->name('bracketControlForm');
