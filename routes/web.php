<?php

use App\Http\Controllers\DecoracionController;
use App\Http\Controllers\PaqueteController;
use App\Models\Paquete;
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

Route::get('/app', function () {
    return "<h5> Soy la vista APP desde web.php de routes </h5>";
});

Route::get("/decoraciones", [DecoracionController::class, "index"]);

Route::get("/paquetes", [PaqueteController::class, "index"]);
