<?php

use Illuminate\Http\Request;
use App\Models\Country;
use Conrollers\Apis\LanguageController;
use Conrollers\Apis\CountriesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/countries', 'API\CountryController@getCountries');
Route::get('country/{code}', 'API\CountryController@getCountry');

//Route::get('/areas', 'AreasController@getAreas');
Route::get('/areas/{countryCode}', 'API\AreaController@getAreasByCountryCode');
Route::get('area/{code}', 'API\AreaController@getArea');

Route::get('ramadans/{areaCode}', 'API\RamadanController@getRamadans');
Route::get('ramadan/{id}', 'API\RamadanController@getRamadan');
//Route::put('ramadan', 'API\RamadanController@updateRamadan');
Route::put('ramadan/{ramadan}', 'API\RamadanController@update');

Route::get("languages","API\LanguageController@getLanguages");
