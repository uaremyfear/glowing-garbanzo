<?php

use Illuminate\Http\Request;

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


Route::get('/savehouse','SavehouseApiController@index');
Route::get('/savehouse/{id}','SavehouseApiController@show');

Route::get('/savehouse_category','SavehouseApiController@getCategories');
Route::get('/savehouse_category/{id}','SavehouseApiController@getSavehouseById');

Route::get('/savehouse_states','LocationApiController@getStates');
Route::get('/savehousestatecity/{id}','LocationApiController@getCityByState');

Route::get('/savehousebycity/{city_id}','SavehouseApiController@getSavehouseByCity');
// http://192.168.43.38:8000/api/savehouse

Route::get('/organization','OrganizationApiController@index');
Route::get('/organization/{id}','OrganizationApiController@show');
Route::get('/organization_category','OrganizationApiController@getCategory');
Route::get('/organization_category/{id}','OrganizationApiController@getOrganizationByCategory');


Route::get('/foundation','FoundationApiController@index');
Route::get('/foundation/{id}','FoundationApiController@show');
Route::get('/foundation_category','FoundationApiController@getCategory');
Route::get('/foundation_category/{id}','FoundationApiController@getFoundationByCategory');

Route::get('/thadin','ThadinApiController@index');
Route::get('/thadin/{id}','ThadinApiController@detail');