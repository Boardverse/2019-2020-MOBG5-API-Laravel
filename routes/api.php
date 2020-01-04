<?php

    use Illuminate\Support\Facades\Route;

    Route::get('', function() { return response('', 200); })->name('/');

    Route::middleware(['login'])->group(function() {
        Route::get('games/friendsLoving', 'UserController@friendsLoving');
        Route::get('games/friendsPlaying', 'UserController@friendsPlaying');
        Route::get('games/{game}/friendsOwning', 'GameController@friendsOwning');
        Route::get('games/{game}/friendsLoving', 'GameController@friendsLoving');

        Route::post('games/{game}/collection', 'GameController@addCollection');
        Route::delete('games/{game}/collection', 'GameController@removeCollection');
        Route::post('games/{game}/played', 'GameController@addPlayed');
        Route::delete('games/{game}/played', 'GameController@removePlayed');
        Route::post('games/{game}/wishlist', 'GameController@addWishlist');
        Route::delete('games/{game}/wishlist', 'GameController@removeWishlist');
        Route::put('games/{game}/rate', 'GameController@rate');
    });

    Route::get('games/new', 'GameController@new');
    Route::get('games/popular', 'GameController@popular');
    Route::get('games/randomPublisher', 'GameController@randomPublisher');
    Route::get('games/randomTheme', 'GameController@randomTheme');
    Route::get('games/randomType', 'GameController@randomType');

    Route::get('games/{game}/alsoPlaying', 'GameController@alsoPlaying');
    Route::get('games/{game}/publishers', 'GameController@publishers');
    Route::get('games/{game}/samePublisher', 'GameController@samePublisher');
    Route::get('games/{game}/sameTheme', 'GameController@sameTheme');
    Route::get('games/{game}/sameType', 'GameController@sameType');
    Route::get('games/{game}/scores', 'GameController@scores');
    Route::get('games/{game}/similar', 'GameController@similar');

    Route::apiResource('games', 'GameController');

    Route::get('users/{user}/achievements', 'UserController@achievements');
    Route::get('users/{user}/activity', 'UserController@activity');
    Route::get('users/{user}/collection', 'UserController@collection');
    Route::get('users/{user}/friends', 'UserController@friends');
    Route::get('users/{user}/played', 'UserController@played');
    Route::get('users/{user}/reviews', 'UserController@reviews');
    Route::get('users/{user}/wishlist', 'UserController@wishlist');
    Route::apiResource('users', 'UserController');
