<?php

use App\Http\Controllers\ControllerLogin;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class,'index']);
Route::get('/login', [ControllerLogin::class,'login']);
