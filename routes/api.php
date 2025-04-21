<?php

use Illuminate\Support\Facades\Route;
use Modules\HeadlessBase\Http\Controllers\HeadlessBaseController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('headlessbase', HeadlessBaseController::class)->names('headlessbase');
});
