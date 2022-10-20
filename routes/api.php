<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('addproduct', 'App\Http\Controllers\ProductController@submit_data');
Route::get('getproduct', 'App\Http\Controllers\ProductController@get_data');
Route::post('updateproduct', 'App\Http\Controllers\ProductController@update_data');
Route::delete('deletedata/{id}', 'App\Http\Controllers\ProductController@delete_data');
Route::get('get-single-porduct/{id}', 'App\Http\Controllers\ProductController@get_single_data');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
