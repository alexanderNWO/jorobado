<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorias;

class categoria extends Controller
{

  public function reportecategoria()
  {
      $consulta = \DB::select("SELECT ca.id_cat,ca.nombre
      FROM categorias AS ca");
      return view ('reportecategoria')
      ->with('consulta',$consulta);
  }

    public function altacategoria(){
    	return view ('altacategoria');
}

	public function guardarcategoria(Request $request){
		    $nombre=$request->nombre;

    $this->validate($request,[
    	'nombre'=>['regex:/^[A-Z,a-z, ]*$/'],
    ]);

   		$categorias = new categorias;
        $categorias->nombre = $request->nombre;
        $categorias->save();

        echo '<script>alert("Nuevo Registro Exitoso")</script> ';

        return view ('indexadmin');

	}
}
