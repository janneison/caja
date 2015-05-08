<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\models\Legalizaciones;
/**
 * Controlador para los periodos
 */
class LegalizacionesController extends Controller {
	/**
	 * [Registrar Agregar un nuevo periodo de legalización]
	 * @param Request $request [contiene los input de la vista]
	 */
	public function Registrar(Request $request){

		$rs=Legalizaciones::create(array(

			'fecha_inicio'=>date('Y-m-d',strtotime($request->input('fecha_inicio'))),
			'fecha_final'=>date('Y-m-d',strtotime($request->input('fecha_final'))),
			'id_responsable'=>$request->input('id_responsable'),
			'nombre'=>$request->input('nombre'),
			'id_estado'=>1

		));

		return $rs['id'] > 0 ? 'Success' : 'Error';

	}

	public function Actualizar(Request $request){

		$leg=Legalizaciones::find($request->input('id'));

	    $leg->fecha_inicio=date('Y-m-d',strtotime($request->input('fecha_inicio')));
	    $leg->fecha_final=date('Y-m-d',strtotime($request->input('fecha_final')));
	    $leg->id_responsable=$request->input('id_responsable');
	    $leg->nombre=$request->input('nombre');
	    $rs=$leg->save();
	    
	    return $rs > 0 ? 'Success' : 'Error';

	}

	public function Consultar(Request $request){

		$result=DB::select('EXEC lgn.consultar_periodos');		
			
		return $result;
	}

	public function ConsultarPorCodigo($id){

		$leg=Legalizaciones::find($id);

		return array(
			'id'=>$leg->id,
			'fecha_inicio'=>$leg->fecha_inicio,
			'fecha_final'=>$leg->fecha_final,
			'id_responsable'=>$leg->id_responsable,
			'nombre'=>$leg->nombre,
			'_token'=>csrf_token()
			);
		
	}

}
