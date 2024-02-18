<?php

use App\Http\Controllers\FromExcel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddVillagesToJson;
use App\Http\Controllers\FixIds;
use App\Http\Controllers\FromJson;
use App\Http\Controllers\Json2Csv;
use App\Http\Controllers\VillageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('village', VillageController::class)->name('village');

Route::get('from-excel', FromExcel::class)->name('from-excel');
Route::get('from-json', FromJson::class)->name('from-json');

Route::get('add-villages', AddVillagesToJson::class)->name('add-villages');

Route::get('fix-ids', FixIds::class)->name('fix-ids');

Route::get('json2csv', Json2Csv::class)->name('2csv');

