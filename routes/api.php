<?php

use App\Article;
use App\Sala;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Resources\Product as ProductResource;

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

Route::resource('products','productController');

//Route::get('/products/{id}', 'ProductController@show');
Route::resource('salas','SalaController');
Route::resource('articles','ArticleController');
Route::resource('speakers','SpeakerController');
Route::resource('charlas','CharlaController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
