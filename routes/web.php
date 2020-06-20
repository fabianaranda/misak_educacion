<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();
//Route menu lateral de los furmulario del censo poblacional ////
Route:: get('/menu-lateral',function(){
    return view('menu_lateral.MenuIzquierdoCensoSIPESM');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('Menu-certificados','InterfacesController@interfas_menu_certificados')->name ('Menu-certificados');

Route::any('Buscar-Persona', 'PersonasCertificadosController@buscar_persona');
Route::get('Buscar-Persona','InterfacesController@interfas_buscar_persona_certificado')->name ('Buscar-Persona');


Route::get('Certificados-Laborales/{id_persona}','InterfacesController@interfas_certificados_laborales')->name ('Certificados-Laborales');


Route::any('Certificados-Registro-Sistema', 'BuscarCertificadoRegistroController@buscar_certificado_ID');
Route::get('Certificados-Registro-Sistema','InterfacesController@interfas_buscar_registro')->name ('Certificados-Registro-Sistema');


Route::get('Certificado-registros/{id_persona}','InterfacesController@interfasRegistroSistema')->name ('Certificado-registros');



Route::get('Ingresar-Trabajador','InterfacesController@interfas_ingreso_trabajador')->name ('Ingresar-Trabajador');
Route::get('Ingresar-Trabajador','DireccionTrabajadorController@direccionTrabajador');
Route::get('get-municipio-list','DireccionTrabajadorController@getmunicipio');
/*Route::get('get-resguardo-list','DireccionTrabajadorController@getresguardo');
Route::get('get-zona-list','DireccionTrabajadorController@getzona');
Route::get('get-vereda-list','DireccionTrabajadorController@getvereda');
Route::get('get-sector-list','DireccionTrabajadorController@getsector');*/

Route::POST('Vivienda-Hogar/Guardado', 'GuardarPersonaController@create_trabajador');


Route::get('Informacion-trabajador/{id_persona}','InterfacesController@interfas_informacion_trabjador')->name ('Informacion-trabajador');



Route::get('Menu-Trabajador','InterfacesController@interfas_menu_trabajadores')->name ('Menu-Trabajador');


Route::get('Listado-General','InterfacesController@interfasListadoGeneralTrabajador')->name ('Listado-Genera');


Route::get('Actualizacion-Datos-Trabajador/{id_persona}','InterfacesController@interfas_actualizacion_empleado')->name ('Actualizacion-Datos-Trabajador');

 	/*
|--------------------------------------------------------------------------
|                       VISTA  MENU   ADMINISTRADOR    
*/
Route::get('/Menu-administrador','InterfacesController@Vista_interfas_menuAdminsitrador')->name('Menu-administrador');

   	/*
|--------------------------------------------------------------------------
|                       VISTA  MENU   USUARIOS   
*/
Route::get('/Menu-Usuarios','InterfacesController@vista_interfas_menu_usuarios')->name('Menu-Usuarios');
  
/*
|--------------------------------------------------------------------------
|                       VISTA   INGRESAR USUARIOS     
*/ Route::get('/Ingresar_Usuarios','InterfacesController@vista_interfas_ingrezar_usuarios')->name('Ingresar_Usuarios');

//Route::post('/Ingresar_Usuarios', 'usuariosController@create');
//Users
Route::POST('Ingresar_Usuarios/Guardado', 'usuariosController@create')->name('Ingresar_Usuarios.create');;


//->middleware('permission:users.index');
Route::get('Menu-Usuarios', 'UserController@index')->name('users.index');

Route::put('users/{user}', 'UserController@update')->name('users.update');
//->middleware('permission:users.edit');

Route::get('users/{user}', 'UserController@show')->name('users.show');
//->middleware('permission:users.show');

Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
//->middleware('permission:users.destroy');

Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
////->middleware('permission:users.edit');
