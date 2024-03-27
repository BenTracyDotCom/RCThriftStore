<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartController;

Route::get('/', function () {
    return view('welcome');
});

//Routes to 'index' method of PartController
Route::get('/parts', [PartController::class, 'index']);


