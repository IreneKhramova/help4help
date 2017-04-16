<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@getIndex');

Route::get('/review', 'ReviewController@showReviews');

Route::get('/review/add', 'ReviewController@getAddReview');

Route::post('/review/add', 'ReviewController@addReview');

Route::get('/rating', 'UserController@showTop');

Route::get('/need', 'NeedController@showNeedList');

Route::get('/need/{id}', ['as' => 'need_view', 'uses' => 'NeedController@showNeed'])->where('id', '[0-9]+');

Route::get('/need/create', 'NeedController@getCreateNeed');

Route::post('/need/create', 'NeedController@createNeed');

Route::get('/need/{id}/update', 'NeedController@getUpdateNeed')->where('id', '[0-9]+');

Route::put('/need/{id}/update', 'NeedController@updateNeed')->where('id', '[0-9]+');

Route::get('/need/{id}/delete', 'NeedController@getDeleteNeed')->where('id', '[0-9]+');

Route::delete('/need/{id}/delete', 'NeedController@deleteNeed')->where('id', '[0-9]+');

Route::get('/user/{id}', 'UserController@showProfile')->where('id', '[0-9]+');

Route::post('/user/{id}', 'UserController@editProfile')->where('id', '[0-9]+');

Route::post('/user/{id1}/bill/{id2}', 'UserController@bill')
->where(['id1' => '[0-9]+', 'id2' => '[0-9]+']);

Route::post('/user/{id}/comment', 'UserController@addComment')
->where('id', '[0-9]+');

Route::get('/message/{id}', 'MessageController@showDialog')->where('id', '[0-9]+');

Route::post('/message/{id}', 'MessageController@sendMessage')->where('id', '[0-9]+');

// временный маршрут
Route::get('/env', function() {
    return App::environment();
});