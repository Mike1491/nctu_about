<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Admin Routes */
Route::group(array('prefix' => 'admin', 'before' => 'admin'), function() {
    Route::controller('dashboard', 'AdminDashboardController');
});

Route::get('login', 'AdminDashboardController@getLogin');
Route::post('login', 'AdminDashboardController@postLogin');
Route::get('logout', 'AdminDashboardController@getLogout');

Route::filter('admin', function() {
    if (!Session::has('user')) {
        return Redirect::to('/login');
    }
});

Route::get('/{username}', 'AdminDashboardController@getUser');
Route::get('/', 'IndexController@getIndex');

