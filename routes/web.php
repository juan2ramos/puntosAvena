<?php

Auth::routes();

Route::get('/', 'HomeController@index')->middleware('guest');
Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    Route::get('/', 'HomeController@admin');
    Route::get('/reporte/punto', 'HomeController@point')->name('homePoint');
    Route::get('/reporte', 'HomeController@administrator')->name('homeAdmin');

    Route::get('/usuarios', 'UserController@index');
    Route::get('/usuarios/nuevo', 'UserController@newUser');
    Route::post('/usuarios/nuevo', 'UserController@insertUser');
    Route::get('/usuarios/{id}/editar', 'UserController@editUser');
    Route::post('/usuarios/editar', 'UserController@updateUser');
    Route::post('/usuarios/eliminar', 'UserController@deleteUser');

    Route::get('/productos', 'ProductController@index');
    Route::get('/productos/nuevo', 'ProductController@newProduct');
    Route::post('/productos/nuevo', 'ProductController@insertProduct');
    Route::get('/productos/{id}/editar', 'ProductController@editProduct');
    Route::post('/productos/editar', 'ProductController@updateProduct');
    Route::post('/productos/eliminar', 'ProductController@deleteProduct');

    Route::post('/productos/punto', 'ProductController@productPoint');
    Route::get('/puntos/reporte/{id}/{date?}', 'PointController@pointProductDetail');
    Route::post('/puntos/reporte', 'PointController@productPointUpdate');

    Route::get('/reportes', 'ReportController@index');
    Route::post('/reportes', 'ReportController@reports');

});


