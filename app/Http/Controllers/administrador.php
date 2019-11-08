<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\administradores;


class administrador extends Controller
{
  public function reporteadministrador()
  {
      $consulta = \DB::select("SELECT ad.id_ad,ad.nombre,ad.ap_p,ad.ap_m,ad.edad,ad.sexo,ad.telefono,ad.correo,ad.contrasena
      FROM administradores AS ad");
      return view ('reporteadministrador')
      ->with('consulta',$consulta);
  }

    public function altaadministrador(){
    	return view ('altaadministrador');
}

	public function guardaradministrador(Request $request){
		    $nombre=$request->nombre;
			$ap_p=$request->ap_p;
			$ap_m=$request->ap_m;
			$edad=$request->edad;
			$sexo=$request->sexo;
			$tel=$request->tel;
			$correo=$request->correo;
			$contrasena=$request->contrasena;

    $this->validate($request,[
    	'nombre'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
    	'ap_p'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
    	'ap_m'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
    	'edad'=>['regex:/^[0-9]{2}$/'],
    	'tel'=>['regex:/^[0-9]{10}$/'],
    	'correo'=>['regex:/^[A-Z,a-z,0-9]*[@]{1}[a-z]*[.]{1}[a-z]*$/'],
    	'contrasena'=>['regex:/^[A-Z,a-z,0-9]*$/'],
    ]);

   		$administradores = new administradores;
        $administradores->nombre = $request->nombre;
        $administradores->ap_p = $request->ap_p;
        $administradores->ap_m = $request->ap_m;
        $administradores->edad = $request->edad;
        $administradores->sexo = $request->sexo;
        $administradores->telefono = $request->tel;
        $administradores->correo = $request->correo;
        $administradores->contrasena = $request->contrasena;
        $administradores->save();

        echo '<script>alert("Nuevo Registro Exitoso")</script> ';

        return view ('indexadmin');

	}
}
