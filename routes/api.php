<?php

use App\Http\Controllers\registerPatients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\dentalController;
use App\Http\Controllers\login;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("login",[login::class,'users']);

Route::get("list",[dentalController::class,'list']);
Route::get("emailupdate/{id}",[dentalController::class,'emailupdate']);

Route::post("registerPatient", [registerPatients::class,'registerPatient']);
Route::put("updatePatient", [registerPatients::class, 'updatePatient']);
Route::get("listRegisteredPatients", [registerPatients::class, 'listRegisteredPatients']);
Route::get("{id}/getonePatient", [registerPatients::class, 'getonePatient']);