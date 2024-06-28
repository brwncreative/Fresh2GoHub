<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MailController;
use \App\Http\Controllers\RouteController;
use Illuminate\Http\Request;


Route::get('/', [RouteController::class, 'direct']);


Route::post('/subscribe/{case?}', [MailController::class, 'deliver'])->name('subscribe');


