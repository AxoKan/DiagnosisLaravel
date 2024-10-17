<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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

Route::get('/', [Controller::class, 'dashboard'])->name('dashboard');
Route::post('/aksi_tambah', [Controller::class, 'aksi_tambah']);
Route::get('/tambah', [Controller::class, 'tambah'])->name('tambah');
Route::get('/login', [Controller::class, 'login'])->name('login');
Route::post('/aksi_login', [Controller::class, 'aksi_login']);
Route::get('delete/{id}', [Controller::class, 'delete'])->name('delete');
Route::post('/logout', [Controller::class, 'logout'])->name('logout');
Route::get('/dashboard_L', [Controller::class, 'dashboard_L'])->name('dashboard_L');  
Route::get('/gejala', [Controller::class, 'gejala'])->name('gejala');  
