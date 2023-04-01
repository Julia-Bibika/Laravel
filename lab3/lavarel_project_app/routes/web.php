<?php

use App\Http\Controllers\CV;
use App\Http\Controllers\StationController;
use App\Http\Controllers\FuelController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Bibika/cv' , [CV::class, 'show']
);

//CRUD
//Route::get('stations', [StationController ::class,'index'])->name('stations');
//Route::get('stations/create', [StationController ::class,'create'])->name('stations.create');
//Route::post('stations', [StationController ::class,'store'])->name('stations.store');
//Route::get('stations/{station}', [StationController ::class,'show'])->name('stations.show');
//Route::put('stations/{station}/edit', [StationController ::class,'edit'])->name('stations.edit');
//Route::put('stations/{station}', [StationController ::class,'update'])->name('stations.update');
//Route::delete('stations/{station}', [StationController ::class,'destroy'])->name('stations.destroy');
//
//Route::get('fuels', [FuelController ::class,'index'])->name('fuels');
//Route::get('fuels/create', [FuelController ::class,'create'])->name('fuels.create');
//Route::post('fuels', [FuelController ::class,'store'])->name('fuels.store');
//Route::get('fuels/{fuels}', [FuelController ::class,'show'])->name('fuels.show');
//Route::put('fuels/{fuels}/edit', [FuelController ::class,'edit'])->name('fuels.edit');
//Route::put('fuels/{fuels}', [FuelController ::class,'update'])->name('fuels.update');
//Route::delete('fuels/{fuels}', [FuelController ::class,'destroy'])->name('fuels.destroy');

Route::resource('stations',StationController::class);
Route::resource('fuels',FuelController::class);
