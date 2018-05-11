<?php

use Illuminate\Http\Request;
use App\Models\Country;
use Conrollers\API\LanguageController;

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

// Route::get('countries', function() {
//     return  ['message'=> "",
//     'status'=>'OK',`
//     'result'=>Country::all()
//     ] ;
// });


Route::get('/countries', 'CountriesController@getAllApi');
Route::get('countries/{code}', 'CountriesController@showApi');

//Route::get('/areas', 'AreasController@getAreas');
Route::get('/areas/{countryCode}', 'AreasController@getAreasByCountryCode');
Route::get('area/{code}', 'AreasController@getArea');


Route::get('ramadans/{areaCode}', 'RamadansController@getRamadansByAreaCode');

//Route::get('/testcon', 'Apis/TestController@index');

Route::resource("languages","API\LanguageController");
