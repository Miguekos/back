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


//Route::get('articles', function (){
//    return Article::all();
//});
    Route::apiResource('salas','SalaController');
    Route::apiResource('speakers','SpeakerController');
    Route::apiResource('charlas','CharlaController');

    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
