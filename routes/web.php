<?php

use App\Http\Controllers\Web\CountTheSumController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\TextConcatController;
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

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::post('/calc', [CountTheSumController::class, 'countTheSum'])->name('calc');
Route::post('/text', [TextConcatController::class, 'store'])->name('text-store');
