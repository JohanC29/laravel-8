<?php

use App\Http\Controllers\MiCuentaController;
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
    // return view('theme.back.login');
});

// Route::get('mi-cuenta', function () {
//     return view('welcome');
//     // return view('theme.back.login');
// });

Route::get('mi-cuenta',[MiCuentaController::class,'index'])->middleware('auth')->name('mi-cuenta');
