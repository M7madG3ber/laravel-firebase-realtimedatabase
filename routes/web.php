<?php

use App\Http\Controllers\FirebaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FirebaseController::class, 'index']);
Route::get('/send/{key}/{value}', [FirebaseController::class, 'send']);