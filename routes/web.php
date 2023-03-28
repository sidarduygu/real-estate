<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SayfaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\EstateController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KullaniciController;
use App\Http\Controllers\ClientTypeController;
use App\Http\Controllers\PropertyTypeController;
use App\Http\Controllers\PropertyFeatureController;



Route::get('/',[HomeController::class, 'index']);




Route::prefix('dashboard')->group(function () {
    Route::get('/',[DashboardController::class, 'index']);
    Route::resource('ilan',EstateController::class);
    Route::resource('sayfa',SayfaController::class);
    Route::resource('blog',BlogController::class);
    Route::resource('kullanici',KullaniciController::class);
    Route::resource('city',CityController::class);
    Route::resource('country',CountryController::class);
    Route::resource('county',CountyController::class);
    Route::resource('client-type',ClientTypeController::class);
    Route::resource('client',ClientController::class);
    Route::resource('property-type',PropertyTypeController::class);
    Route::resource('feature',FeatureController::class);
    Route::resource('property',PropertyController::class);
    Route::resource('property-feature',PropertyFeatureController::class);

});

