<?php

use App\Http\Resources\FuelResource;
use App\Http\Resources\StationResource;
use App\Models\Fuel;
use App\Models\Station;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('fuels', function () {
    return FuelResource::collection(Fuel::all());
});
Route::get('stations', function () {
    return StationResource::collection(Station::all());
});
Route::get('fuels', function () {
    return FuelResource::collection(Fuel::paginate(2));
})->middleware('auth:api');;
Route::get('stations', function () {
    return StationResource::collection(Station::paginate());
})->middleware('auth:api');
Route::middleware('auth:api')->group(function () {
    Route::get('/employee/{id}', function (string $id) {
        return new FuelResource(Fuel::findOrFail($id));
    });
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('fuels', function () {
// Token has both "check-status" and "place-orders" abilities...
})->middleware(['auth:sanctum',
    'abilities:check-status']);

Route::get('stations', function () {
// Token has the "check-status" or "place-orders"
    //ability...
})->middleware(['auth:sanctum',
    'ability:check-status']);
// Revoke all tokens...

