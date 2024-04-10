<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

Route::post('/send-message', [EmailController::class, 'sendMessage']);
