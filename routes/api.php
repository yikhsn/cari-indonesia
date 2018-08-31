<?php

Route::get('/', 'AppController@index');
Route::get('/desa/{village}', 'AppController@desa');
Route::get('/kecamatan/{district}', 'AppController@kecamatan');
Route::get('/kabupaten/{regency}', 'AppController@kabupaten');
Route::get('/provinsi/{province}', 'AppController@provinsi');
