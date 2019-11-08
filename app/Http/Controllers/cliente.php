<?php

namespace App\Http\Controllers;
use App\clientes;

use Illuminate\Http\Request;

class cliente extends Controller
{
  public function reportecliente()
  {
      $consulta = \DB::select("SELECT cl.id_cli,cl.nombre,cl.ap_p,cl.ap_m,cl.edad,cl.sexo,cl.telefono,cl.n_licencia,cl.correo,cl.contrasena
      FROM clientes AS cl");
      return view ('reportecliente')
      ->with('consulta',$consulta);
  }

    public function altacliente(){
    	return view ('altacliente');
}

	public function guardarcliente(Request $request){
		    $nombre=$request->nombre;
			$ap_p=$request->ap_p;
			$ap_m=$request->ap_m;
			$edad=$request->edad;
			$sexo=$request->sexo;
			$tel=$request->tel;
			$licencia=$request->licencia;
			$correo=$request->correo;
			$contrasena=$request->contrasena;

    $this->validate($request,[
    	'nombre'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
    	'ap_p'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
    	'ap_m'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
    	'edad'=>['regex:/^[0-9]{2}$/'],
    	'tel'=>['regex:/^[0-9]{10}$/'],
    	'licencia'=>['regex:/^[0-9]*$/'],
    	'correo'=>['regex:/^[A-Z,a-z,0-9]*[@]{1}[a-z]*[.]{1}[a-z]*$/'],
    	'contrasena'=>['regex:/^[A-Z,a-z,0-9]*$/'],
    ]);

   		$clientes = new clientes;
        $clientes->nombre = $request->nombre;
        $clientes->ap_p = $request->ap_p;
        $clientes->ap_m = $request->ap_m;
        $clientes->edad = $request->edad;
        $clientes->sexo = $request->sexo;
        $clientes->telefono = $request->tel;
        $clientes->n_licencia = $request->licencia;
        $clientes->correo = $request->correo;
        $clientes->contrasena = $request->contrasena;
        $clientes->save();

        echo '<script>alert("Nuevo Registro Exitoso")</script> ';

        return view ('indexadmin');

	}

}
