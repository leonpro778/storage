<?php

/**
 * Guests
 *
 * Routes only for guests
 */
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', function () {
        return view('guests.login');
    })->name('login');
});

/**
 * Authorized
 *
 * For all types authorized users
 */
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('auth.welcome');
    });
});

/**
 * Simply route to change language. For now selected language is stored in session.
 * TODO - add security for language selection
 */
Route::get('changeLanguage/{language}', function ($language) {
    session()->put('language', $language);
    return redirect()->back();
});