<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sucursales;

class sucursal extends Controller
{

  public function reportesucursal()
  {
      $consulta = \DB::select("SELECT su.id_suc,su.nombre,su.direccion,su.telefono,su.responsable
      FROM sucursales AS su");
      return view ('reportesucursal')
      ->with('consulta',$consulta);
  }

    public function altasucursal(){
    	return view ('altasucursal');
}

	public function guardarsucursal(Request $request){
		    $nombre=$request->nombre;
			$direccion=$request->direccion;
			$responsable=$request->responsable;
			$tel=$request->tel;

    $this->validate($request,[
    	'nombre'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
    	'direccion'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ,0-9,.]*$/'],
    	'responsable'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
    	'tel'=>['regex:/^[0-9]{10}$/'],
    ]);

   		$sucursales = new sucursales;
        $sucursales->nombre = $request->nombre;
        $sucursales->direccion = $request->direccion;
        $sucursales->telefono = $request->tel;
        $sucursales->responsable = $request->responsable;
        $sucursales->save();

        echo '<script>alert("Nuevo Registro Exitoso")</script> ';

        return view ('indexadmin');

	}
}
