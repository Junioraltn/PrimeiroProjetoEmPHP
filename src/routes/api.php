<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Model\Usuario;
use App\Http\Controllers\contorllerProjetoFinal;
use App\Http\Controllers\ContBand;
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

Route::post('bands/store',[ContBand::class,'store']);
Route::get('bands',[ContBand::class,'getAll']);
Route::get('bands/{id}',[ContBand::class,'getById']);
Route::get('bands/genero/{genero}',[ContBand::class,'getGenero']);
