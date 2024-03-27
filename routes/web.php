<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartController;

//Routes to 'index' method of PartController
Route::resource('/', PartController::class)->names([
  'index' => 'parts.index',
  'create' => 'parts.create',
  'store' => 'parts.store',
  'show' => 'parts.show',
]);


