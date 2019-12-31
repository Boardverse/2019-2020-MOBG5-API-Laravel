<?php

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('games/popular', 'GameController@popular');
    Route::get('games/new', 'GameController@new');

    Route::get('games/{game}/alsoPlaying', 'GameController@alsoPlaying');
    Route::get('games/{game}/editor', 'GameController@editor');
    Route::get('games/{game}/friendsOwning', 'GameController@friendsOwning');
    Route::get('games/{game}/friendsLoving', 'GameController@friendsLoving');
    Route::get('games/{game}/samePublisher', 'GameController@samePublisher');
    Route::get('games/{game}/sameTheme', 'GameController@sameTheme');
    Route::get('games/{game}/sameType', 'GameController@sameType');
    Route::get('games/{game}/scores', 'GameController@scores');
    Route::apiResource('games', 'GameController');

    Route::get('users/{user}/achievements', 'UserController@achievements');
    Route::get('users/{user}/activity', 'UserController@activity');
    Route::get('users/{user}/collection', 'UserController@collection');
    Route::get('users/{user}/friends', 'UserController@friends');
    Route::get('users/{user}/played', 'UserController@played');
    Route::get('users/{user}/reviews', 'UserController@reviews');
    Route::get('users/{user}/wishlist', 'UserController@wishlist');
    Route::apiResource('users', 'UserController');
