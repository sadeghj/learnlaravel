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

// Route::get('/commnets',function(){
//     return "test api";
// });

Route::get('/commnets','CommentsController@restapiindex');
Route::get('/commnets/{id}','CommentsController@getcommnentbyid');
Route::post('/commnets','CommentsController@commnetrestsaveapi');
Route::put('/commnets/{commnet}','CommentsController@commnetrestupdateapi');
 Route::delete('/commnets/{commnet}','CommentsController@commnetrestdeleteapi');
