<?php

use Illuminate\Http\Request;
use App\Models\Country;

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


Route::get('/countries', 'CountryController@getAllApi');
Route::get('countries/{code}', 'CountryController@showApi');

//Route::get('/areas', 'AreaController@getAreas');
Route::get('/areas/{countryCode}', 'AreaController@getAreasByCountryCode');
Route::get('area/{code}', 'AreaController@getArea');


Route::get('ramadans/{areaCode}', 'RamadanController@getRamadansByAreaCode');

//Route::get('/testcon', 'Apis/TestController@index');
