<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\marcas;

class marca extends Controller
{

  public function reportemarca()
  {
      $consulta = \DB::select("SELECT ma.id_mar,ma.nombre
      FROM marcas AS ma");
      return view ('reportemarca')
      ->with('consulta',$consulta);
  }

  public function altamarca(){
    	return view ('altamarca');
}

	public function guardarmarca(Request $request){
		    $nombre=$request->nombre;

    $this->validate($request,[
    	'nombre'=>['regex:/^[A-Z,a-z]*$/'],
    ]);

   		$marcas = new marcas;
        $marcas->nombre = $request->nombre;
        $marcas->save();

        echo '<script>alert("Nuevo Registro Exitoso")</script> ';

        return view ('indexadmin');

	}

    public function indexadmin(){
        return view ('indexadmin');
}

}
