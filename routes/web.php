<?php


Auth::routes();

Route::get('/', 'HomeController@index')->middleware('guest');
Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@admin');
    Route::get('/usuarios', 'UserController@index');
    Route::get('/usuarios/nuevo', 'UserController@newUser');

});


