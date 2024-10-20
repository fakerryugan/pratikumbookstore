<?php

use App\Http\Controllers\FormApiController;

Route::get('/', [FormApiController::class, 'index']);