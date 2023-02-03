<?php


use Brtechsistemas\Whatsapp\Controllers\InstanceController;
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

Route::get('/init', [InstanceController::class, 'init'])->name('init');
Route::get('/qr-code', [InstanceController::class, 'generateQR'])->name('generateQR');
Route::get('/information', [InstanceController::class, 'info'])->name('info');
Route::get('/list', [InstanceController::class, 'listAll'])->name('list');
Route::get('/restore', [InstanceController::class, 'restoreAll'])->name('restore');