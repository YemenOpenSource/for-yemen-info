<?php

use App\Http\Controllers\FromExcel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddVillagesToJson;
use App\Http\Controllers\VillageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('village', VillageController::class)->name('village');

Route::get('from-excel', FromExcel::class)->name('from-excel');

Route::get('add-villages', AddVillagesToJson::class)->name('add-villages');
