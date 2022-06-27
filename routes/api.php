<?php

use App\Http\Controllers\Api\ContentController;
use Illuminate\Support\Facades\Route;


Route::get("/service/{category}", [ContentController::class, "show"]);