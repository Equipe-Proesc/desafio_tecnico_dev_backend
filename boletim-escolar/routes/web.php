<?php

use App\Http\Controllers\StudentReportCardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('boletim/{id}', StudentReportCardController::class);
