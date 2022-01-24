<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes 3228 1641  0800 031 8000
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/* Todo - Group */
Route::group(['namespace' => 'App\Http\Controllers\Api'], function(){

    Route::resource('categories', 'CategoryController',['except' => ['create','edit']]);

});

