<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*Route::get('/inicio/login', function(){
	return view('inicio/login');
});*/

use App\models\Funcionario;
use App\models\Banco;
//vistas
Route::get('/', function(){
	return view('inicio/index');
});
Route::get('beneficiario/beneficiario', function(){
	return view('beneficiario/beneficiario');
});
Route::get('beneficiario/consultar', function(){
	return view('beneficiario/consultar');
});
Route::get('anticipo/anticipo', function(){
	$lista=Funcionario::all();	
	$bancos=Banco::all();
	return view('anticipo/registrar',array('funcionarios'=>$lista,'bancos'=>$bancos));
});
Route::get('periodo/periodo', function(){
	$lista=Funcionario::all();	
	return view('periodo/periodo',array('funcionarios'=>$lista));
});
Route::get('periodo/consultar', function(){
	return view('periodo/consultar');
});
/*Vista*/
Route::get('/inicio/login', function(){
	return view('inicio/login');
});

Route::get('/inicio/home', function(){
	if (Session::has('id_usuario')) {
		return view('inicio/home');
	}else{
		return '';
	}
	
});

Route::get('/inicio/inicio', function(){	
	return view('inicio/inicio');	
});
/*Fin vistas*/

//servicios
Blade::setContentTags('[[', ']]'); 
Blade::setEscapedContentTags('[[[', ']]]');

/*Usuario*/
Route::post('usuario/loguear', array('uses'=>'UsuarioController@Loguear'));
Route::get('usuario/verificarlogueo', 'UsuarioController@VerificarLogueo');
Route::get('usuario/desloguear', 'UsuarioController@Desloguear');
/*Fin usuario*/

/*Menu*/
Route::post('menu/consultarmenu', 'MenuController@ConsultarMenu');
/*Fin menu*/

/*Beneficiario*/
Route::post('beneficiario/registrar','BeneficiarioController@Registrar');
Route::post('beneficiario/actualizar','BeneficiarioController@Actualizar');
Route::post('beneficiario/consultar', 'BeneficiarioController@Consultar');
Route::get('beneficiario/consultarporcodigo/{id}','BeneficiarioController@ConsultarPorCodigo');
/*Fin beneficiario*/

/*Legalizaciones*/
Route::post('legalizaciones/registrar','LegalizacionesController@Registrar');
Route::post('legalizaciones/consultar','LegalizacionesController@Consultar');
Route::get('legalizaciones/consultarporcodigo/{id}','LegalizacionesController@ConsultarPorCodigo');
Route::post('legalizaciones/actualizar','LegalizacionesController@Actualizar');
/*Fin legalizaciones*/


//http://caja.com:84/posts-json?page=2
Route::get('posts-json', 'PersonaController@json');

Route::get('test',function(){

	return view('test');

});

use App\models\Persona;
Route::post('test2',function(){

	return Persona::paginate(5);

});

