<?php

use App\Http\Controllers\Backend\MenuController;
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

Route::group(['prefix' => 'admin-backend', 'middleware' => ['auth','superadministrador']],function(){
    /* Rutas del Menu */
    Route::get('menu',[MenuController::class,'index'])->name('menu');
    Route::get('menu/crear',[MenuController::class,'crear'])->name('menu.crear');
    Route::get('menu/{id}/editar',[MenuController::class,'editar'])->name('menu.editar');
    Route::post('menu',[MenuController::class,'guardar'])->name('menu.guardar');
    Route::post('menu/guardar-orden',[MenuController::class,'guardarOrden'])->name('menu.orden');
    Route::put('menu/{id}',[MenuController::class,'actualizar'])->name('menu.actualizar');
    Route::delete('menu/{id}/eliminar',[MenuController::class,'eliminar'])->name('menu.eliminar');
});
