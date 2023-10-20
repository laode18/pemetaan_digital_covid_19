<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaerahController;
use App\Http\Controllers\DataPenyebaranController;
use App\Http\Livewire\MapLocation;
use App\Http\Livewire\EditMapLocation;
use App\Http\Livewire\Location;

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
Route::get('/', [LandingpageController::class, 'index'])->name('landingpage');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//Data Daerah
Route::get('daerah', [DaerahController::class, 'index'])->name('daerah')->middleware('auth');
Route::post('daerah/store', [DaerahController::class, 'store'])->name('storedaerah');
Route::post('daerah/update/{id_daerah}', [DaerahController::class, 'update'])->name('updatedaerah');
Route::get('daerah/{id_daerah}', [DaerahController::class, 'destroy'])->name('destroydaerah');

//Data Penyebaran
Route::get('datapenyebaran', [DataPenyebaranController::class, 'index'])->name('datapenyebaran')->middleware('auth');
Route::post('datapenyebaran/store', [DataPenyebaranController::class, 'store'])->name('storedatapenyebaran');
Route::post('datapenyebaran/update/{id_penyebaran}', [DataPenyebaranController::class, 'update'])->name('updatedatapenyebaran');
Route::get('datapenyebaran/{id_penyebaran}', [DataPenyebaranController::class, 'destroy'])->name('destroydatapenyebaran');

Route::get('map', MapLocation::class)->name('input.datapenyebaran')->middleware('auth');
Route::get('visualisasi', Location::class)->name('visualisasi')->middleware('auth');