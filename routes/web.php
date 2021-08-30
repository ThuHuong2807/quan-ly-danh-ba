<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DanhBaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('view_all', [DanhBaController::class, 'getview_all']);

Route::get('view_update/{ma}',[DanhBaController::class, 'getview_update']);
Route::post('view_update/{ma}',[DanhBaController::class, 'postview_update']);

Route::get('view_insert',[DanhBaController::class, 'getview_insert']);
Route::post('view_insert',[DanhBaController::class, 'postview_insert']);

Route::get('delete/{ma}', [DanhBaController::class, 'delete']);