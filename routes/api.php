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

Route::get('/countries', 'API\CountriesController@getCountries');
Route::get('countries/{code}', 'API\CountriesController@getCountry');

//Route::get('/areas', 'AreasController@getAreas');
Route::get('/areas/{countryCode}', 'API\AreasController@getAreasByCountryCode');
Route::get('area/{code}', 'API\AreasController@getArea');

Route::get('ramadans/{areaCode}', 'API\RamadansController@getRamadansByAreaCode');

Route::get("languages","API\LanguagesController@getLanguages");
