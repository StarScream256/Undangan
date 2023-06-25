<?php

use App\Http\Controllers\undangan\IzzaChandraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\undangan\KumisDeliaController;

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

Route::get('/kumis-delia/{nama}', [KumisDeliaController::class, 'undangan']);
Route::post('/kumis-delia/post-comment', [KumisDeliaController::class, 'create'])->name('kd-post-comment');

Route::get('/izza-chandra/to={key}', [IzzaChandraController::class, 'undangan']);
Route::post('/izza-chandra/post-comment', [IzzaChandraController::class, 'create'])->name('ic-post-comment');

