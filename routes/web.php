<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetitionController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{locale?}', function ($locale = 'ca') {

    if (in_array($locale, ['ca', 'es'])  ) { 
        App::setLocale($locale);
        return view('welcome');
    }
    else {
        abort(404);
    }
    
});

Route::post('/paso2','App\Http\Controllers\PetitionController@store');