<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IlanController;
use App\Http\Controllers\SayfaController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\EstateController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\KullaniciController;
use App\Http\Controllers\EstateImageController;
use App\Http\Controllers\EstateTeypeController;
use App\Http\Controllers\EstateCategoryController;
use App\Http\Controllers\EstateCategorySelectController;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;


Route::get('/',[HomeController::class, 'index']);




Route::prefix('panel')->group(function () {
    Route::resource('ilan',IlanController::class);
    Route::resource('sayfa',SayfaController::class);
    Route::resource('blog',BlogController::class);
    Route::resource('kullanici',KullaniciController::class);
    Route::resource('city',CityController::class);
    Route::resource('country',CountryController::class);
    Route::resource('estate-category',EstateCategoryController::class);
    Route::resource('estate-category-select',EstateCategorySelectController::class);
    Route::resource('estate',EstateController::class);
    Route::resource('estate-image',EstateImageController::class);
    Route::resource('estate-teype',EstateTeypeController::class);
    Route::resource('county',CountyController::class);

});

