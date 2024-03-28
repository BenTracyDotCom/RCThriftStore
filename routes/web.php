<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartController;

Route::get('/', function() {
  return view('homepage');
});

//Routes to 'index' method of PartController
Route::resource('/parts', PartController::class)->names([
  'index' => 'parts.index',
  'create' => 'parts.create',
  'store' => 'parts.store',
  'show' => 'parts.show',
]);


