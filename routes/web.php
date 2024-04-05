<?php

use App\Http\Controllers\AjustesDeInventarioController;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ComunasController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\RecepcionesController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/config', 'App\Http\Controllers\ConfigController@index')->name('config');
Route::put('/config/update/{id}', 'App\Http\Controllers\ConfigController@update')->name('config.update');

Route::group(['namespace' => 'App\Http\Controllers\Profile'], function (){
	Route::get('/profile', 'ProfileController@index')->name('profile');
	Route::put('/profile/update/profile/{id}', 'ProfileController@updateProfile')->name('profile.update.profile');
	Route::put('/profile/update/password/{id}', 'ProfileController@updatePassword')->name('profile.update.password');
	Route::put('/profile/update/avatar/{id}', 'ProfileController@updateAvatar')->name('profile.update.avatar');
});

Route::group(['namespace' => 'App\Http\Controllers\Error'], function (){
	Route::get('/unauthorized', 'ErrorController@unauthorized')->name('unauthorized');
});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('user', 'UserController@index')->name('user');
	Route::get('user/create', 'UserController@create')->name('user.create');
	Route::post('user/store', 'UserController@store')->name('user.store');
	Route::get('user/edit/{id}', 'UserController@edit')->name('user.edit');
	Route::put('user/update/{id}', 'UserController@update')->name('user.update');
	Route::get('user/edit/password/{id}', 'UserController@editPassword')->name('user.edit.password');
	Route::put('user/update/password/{id}', 'UserController@updatePassword')->name('user.update.password');
	Route::get('user/show/{id}', 'UserController@show')->name('user.show');
	Route::get('user/destroy/{id}', 'UserController@destroy')->name('user.destroy');
	// Roles
	Route::get('role', 'RoleController@index')->name('role');
	Route::get('role/create', 'RoleController@create')->name('role.create');
	Route::post('role/store', 'RoleController@store')->name('role.store');
	Route::get('role/edit/{id}', 'RoleController@edit')->name('role.edit');
	Route::put('role/update/{id}', 'RoleController@update')->name('role.update');
	Route::get('role/show/{id}', 'RoleController@show')->name('role.show');
	Route::get('role/destroy/{id}', 'RoleController@destroy')->name('role.destroy');

	 //proveedores

	 Route::get('Proveedores', [ProveedoresController::class, 'index'])->name('proveedores.index');
	 Route::get('Proveedores/Crear', [ProveedoresController::class, 'create'])->name('proveedores.create');
	 Route::get('Proveedores/{id}', [ProveedoresController::class, 'show'])->name('proveedores.editar');
	 Route::put('Proveedores/{proveedor}', [ProveedoresController::class, 'update'])->name('proveedores.update');
	 Route::post('Proveedores', [ProveedoresController::class, 'store'])->name('proveedores.store');
	 
	//articulos

	Route::get('Articulos', [ArticulosController::class, 'index'])->name('articulos.index');
	Route::get('Articulos/Crear', [ArticulosController::class, 'create'])->name('articulos.create');
	Route::get('Articulos/{id}', [ArticulosController::class, 'show'])->name('articulos.editar');
	Route::get('Articulos/{id}/historial', [ArticulosController::class, 'getHistorialArticulo'])->name('articulos.historial');
	Route::put('Articulos/{articulo}', [ArticulosController::class, 'update'])->name('articulos.update');
	Route::post('Articulos', [ArticulosController::class, 'store'])->name('articulos.store');

	//recepciones
	Route::get('Recepciones', [RecepcionesController::class, 'index'])->name('recepciones.index');
	Route::get('Recepciones/Agregar', [RecepcionesController::class, 'create'])->name('recepciones.create');
	Route::get('Recepciones/{id}', [RecepcionesController::class, 'view'])->name('recepciones.view');
	Route::post('Recepciones/Agregar', [RecepcionesController::class, 'addArticulo'])->name('recepciones.addarticulo');
	Route::post('Recepciones/Finalizar', [RecepcionesController::class, 'store'])->name('recepciones.store');

	//ventas
	Route::get('Ventas', [VentasController::class, 'index'])->name('ventas.index');
	Route::get('Ventas/Agregar', [VentasController::class, 'create'])->name('ventas.create');
	Route::get('Ventas/{id}', [VentasController::class, 'show'])->name('ventas.show');
	Route::post('Ventas/Agregar', [VentasController::class, 'addArticulo'])->name('ventas.addarticulo');
	Route::post('Ventas/Finalizar', [VentasController::class, 'store'])->name('ventas.store');
	Route::post('Ventas/print', [VentasController::class, 'print'])->name('ticket.print');
	Route::get('Ventas/print_pdf/{id}', [VentasController::class, 'print_pdf'])->name('ticket.pdf');
	Route::get('ajax/clients', [VentasController::class, 'ajax_clients'])->name('ajax.clients');

	//ventas
	Route::get('AjustesDeInventario', [AjustesDeInventarioController::class, 'index'])->name('ajustesdeinventario.index');
	Route::get('AjustesDeInventario/Agregar', [AjustesDeInventarioController::class, 'create'])->name('ajustesdeinventario.create');
	Route::get('AjustesDeInventario/{id}', [AjustesDeInventarioController::class, 'view'])->name('ajustesdeinventario.view');
	Route::post('AjustesDeInventario/Agregar', [AjustesDeInventarioController::class, 'addArticulo'])->name('ajustesdeinventario.addarticulo');
	Route::post('AjustesDeInventario/Finalizar', [AjustesDeInventarioController::class, 'store'])->name('ajustesdeinventario.store');

	// clientes

	Route::get('Clientes', [ClientesController::class, 'index'])->name('clientes.index');
	Route::get('Clientes/Crear', [ClientesController::class, 'create'])->name('clientes.create');
	Route::get('Clientes/{id}', [ClientesController::class, 'show'])->name('clientes.editar');
	Route::put('Clientes/{cliente}', [ClientesController::class, 'update'])->name('clientes.update');
	Route::post('Clientes', [ClientesController::class, 'store'])->name('clientes.store');
	Route::post('/GetComunasPorRegion', [ComunasController::class, 'GetComunasPorRegion'])->name('getComunasPorRegion');
		
	
});
