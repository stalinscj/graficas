<?php
/**************************** Rutas Privadas **********************************/
// Route::group(['middleware' => ['auth', 'accesoRuta', 'bindings']], function (){
 	
// 	Route::get('/grafica', 'GraficaController@index')->name('grafica.index');

// 	Route::get('/empresa', 'EmpresaController@index')->name('empresa.index');

// 	Route::get('/solped/{empresa}', 'SolpedController@index')->name('solped.index');
// 	Route::get('/solped/{empresa}/{solped}', 'SolpedController@show')->name('solped.show');

// 	Route::get('/posicion/{empresa}/{solped}', 'PosicionController@index')->name('posicion.index');
	

// 	Route::resource('test', 'TestController');  	

// });
/**************************** Rutas Privadas **********************************/
/*----------------------------------------------------------------------------*/
/*************************** Rutas Protegidas *********************************/
// Route::group(['middleware' => ['auth', 'bindings']], function (){

//  	Route::get('/home', 'HomeController@index')->name('home');

// });
/*************************** Rutas Protegidas *********************************/
/*----------------------------------------------------------------------------*/
/**************************** Rutas Públicas **********************************/
// Route::group(['middleware' => ['bindings']], function (){
	// Auth::routes();

	// Route::get('/', function () { return view('welcome'); });
	Route::get('/', function () { return view('welcome'); });
	// Route::get('/register', function () { return view('home'); });

	// Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/grafica', 'GraficaController@index')->name('grafica.index');

	Route::get('/empresa', 'EmpresaController@index')->name('empresa.index');

	Route::get('/solped/{empresa}', 'SolpedController@index')->name('solped.index');
	Route::get('/solped/{empresa}/{solped}', 'SolpedController@show')->name('solped.show');

	Route::get('/posicion/{empresa}/{solped}', 'PosicionController@index')->name('posicion.index');

// });
/**************************** Rutas Públicas **********************************/




