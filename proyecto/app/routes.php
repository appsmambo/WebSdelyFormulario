<?php

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@index'));
Route::get('/gracias', array('as' => 'gracias', 'uses' => 'HomeController@gracias'));
Route::post('/registro', array('as' => 'registro', 'uses' => 'HomeController@registro'));
Route::post('/getProvincias', array('as' => 'getProvincias', 'uses' => 'HomeController@ajaxProvincias'));
Route::post('/getDistritos', array('as' => 'getDistritos', 'uses' => 'HomeController@ajaxDistritos'));


// backend
Route::get('/admin546', array('as' => 'login', 'uses' => 'AdminController@getLogin'));
Route::post('/login', array('uses' => 'AdminController@postLogin'));
Route::get('/admin-logout', 'AdminController@getLogout');

Route::group(array('before' => 'auth.admin'), function()
{
	Route::get('/admin-inicio', array('as' => 'admin.inicio', 'uses' => 'AdminController@getAdminInicio'));

	Route::post('/admin-consulta', 'AdminController@postConsulta');

	Route::get('/admin-registrados', 'AdminController@getRegistrados');
	Route::post('/admin-registrados', 'AdminController@postRegistrados');
	Route::post('/admin-registrados-rango', 'AdminController@postRegistradosRango');

	Route::get('/admin-reporte/{dia}/{mes}/{anio}/{ganadores}', 'AdminController@getReporte');
	Route::get('/admin-reporte-rango/{diaI}/{mesI}/{anioI}/{diaF}/{mesF}/{anioF}', 'AdminController@getReporteRango');
});

Route::filter('auth.admin', function()
{
	if (!Auth::check()) {
		return Redirect::route('login');
	}
});
