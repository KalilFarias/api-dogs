<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;

Route::apiResource('dogs', DogController::class);