<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaporController;

Route::get('/', function () { return view('welcome'); });
Route::get('/sd', function () { return view('sd.index'); });
Route::get('/smp', function () { return view('smp.index'); });
Route::get('/sma', function () { return view('sma.index'); });