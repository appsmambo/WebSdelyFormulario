<?php

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@index'));
Route::get('/gracias', array('as' => 'gracias', 'uses' => 'HomeController@gracias'));
Route::post('/registro', array('as' => 'registro', 'uses' => 'HomeController@registro'));
Route::post('/getProvincias', array('as' => 'getProvincias', 'uses' => 'HomeController@ajaxProvincias'));
Route::post('/getDistritos', array('as' => 'getDistritos', 'uses' => 'HomeController@ajaxDistritos'));
