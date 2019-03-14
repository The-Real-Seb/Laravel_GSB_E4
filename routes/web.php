<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/getLogin', 'CommercialController@getLogin');
Route::post('/login', 'CommercialController@login');
Route::get('/logout', 'CommercialController@logout');

Route::get('/getListeMedicaments', 'MedicamentController@getMedicaments');



Route::get('/getErrors/{retour}', ['as' => '/getErrors', 'uses' => 'ErrorsController@getErreurs']);