<?php

use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\OrangController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PerusahaanController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'pengajuan'], function () {
        Route::get('/',             [PengajuanController::class, 'index'])->name('pengajuan.index');
        Route::get('/detail/{id}',  [PengajuanController::class, 'detail'])->name('pengajuan.detail');
        Route::get('/create',  [PengajuanController::class, 'create'])->name('pengajuan.create');
        Route::post('/store',  [PengajuanController::class, 'store'])->name('pengajuan.store');
        Route::get('/edit/{id}',    [PengajuanController::class, 'edit'])->name('pengajuan.edit');
        Route::post('/update/{id}', [PengajuanController::class, 'update'])->name('pengajuan.update');
        Route::get('/destroy/{id}', [PengajuanController::class, 'destroy'])->name('pengajuan.destroy');
});

Route::group(['prefix' => 'perusahaan'], function () {
    Route::get('/',             [PerusahaanController::class, 'index'])->name('perusahaan.index');
    Route::get('/detail/{id}',  [PerusahaanController::class, 'detail'])->name('perusahaan.detail');
    Route::get('/create',  [PerusahaanController::class, 'create'])->name('perusahaan.create');
    Route::post('/store',  [PerusahaanController::class, 'store'])->name('perusahaan.store');
    Route::get('/edit/{id}',    [PerusahaanController::class, 'edit'])->name('perusahaan.edit');
    Route::post('/update/{id}', [PerusahaanController::class, 'update'])->name('perusahaan.update');
    Route::get('/destroy/{id}', [PerusahaanController::class, 'destroy'])->name('perusahaan.destroy');
});

Route::group(['prefix' => 'orang'], function () {
    Route::get('/',             [OrangController::class, 'index'])->name('orang.index');
    Route::get('/detail/{id}',  [OrangController::class, 'detail'])->name('orang.detail');
    Route::get('/create',  [OrangController::class, 'create'])->name('orang.create');
    Route::post('/store',  [OrangController::class, 'store'])->name('orang.store');
    Route::get('/edit/{id}',    [OrangController::class, 'edit'])->name('orang.edit');
    Route::post('/update/{id}', [OrangController::class, 'update'])->name('orang.update');
    Route::get('/destroy/{id}', [OrangController::class, 'destroy'])->name('orang.destroy');
});

Route::group(['prefix' => 'ecommerce'], function () {
    Route::get('/',             [EcommerceController::class, 'index'])->name('ecommerce.index');
    Route::get('/detail/{id}',  [EcommerceController::class, 'detail'])->name('ecommerce.detail');
    Route::get('/create',  [EcommerceController::class, 'create'])->name('ecommerce.create');
    Route::post('/store',  [EcommerceController::class, 'store'])->name('ecommerce.store');
    Route::get('/edit/{id}',    [EcommerceController::class, 'edit'])->name('ecommerce.edit');
    Route::post('/update/{id}', [EcommerceController::class, 'update'])->name('ecommerce.update');
    Route::get('/destroy/{id}', [EcommerceController::class, 'destroy'])->name('ecommerce.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
