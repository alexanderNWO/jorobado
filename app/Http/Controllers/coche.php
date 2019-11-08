<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coches;
use App\categorias;
use App\sucursales;
use App\marcas;

class coche extends Controller
{

  public function reportecoche()
  {
      $consulta = \DB::select("SELECT co.id_co,co.modelo,co.ano,co.color,co.serie,co.tipo,co.placas,co.capacidad,co.precio_renta,ca.nombre AS nom,su.nombre AS no,ma.nombre AS n
      FROM coches AS co
      INNER JOIN categorias AS ca on ca.id_cat = co.id_cat
      INNER JOIN sucursales AS su on su.id_suc = co.id_suc
      INNER JOIN marcas AS ma on ma.id_mar = co.id_mar");
      return view ('reportecoche')
      ->with('consulta',$consulta);
  }

    public function altacoche(){
      $categorias = categorias::orderby('nombre','asc')->get();
      $sucursales = sucursales::orderby('nombre','asc')->get();
      $marcas = marcas::orderby('nombre','asc')->get();
    	return view ('altacoche')
      ->with('categorias',$categorias)
      ->with('sucursales',$sucursales)
      ->with('marcas',$marcas);
}

	public function guardarcoche(Request $request){
		    $modelo=$request->modelo;
			$ano=$request->ano;
			$color=$request->color;
			$serie=$request->serie;
			$tipo=$request->tipo;
			$placas=$request->placas;
			$capacidad=$request->capacidad;
			$precio_renta=$request->precio_renta;
			$id_cat=$request->id_cat;
			$id_suc=$request->id_suc;
			$id_mar=$request->id_mar;

    $this->validate($request,[
    	'modelo'=>['regex:/^[A-Z,a-z, ,á,é,í,ó,ú,ñ]*$/'],
    	'ano'=>['regex:/^[0-9]{4}$/'],
    	'color'=>['regex:/^[a-z,A-Z, ]*$/'],
    	'serie'=>['regex:/^[a-z,A-Z,0-9]*$/'],
    	'placas'=>['regex:/^[A-Z,a-z,0-9]*$/'],
    	'capacidad'=>['regex:/^[0-9]{1}$/'],
    	'precio_renta'=>['regex:/^[0-9]*$/'],
    ]);

   		$coches = new coches;
        $coches->modelo = $request->modelo;
        $coches->ano = $request->ano;
        $coches->color = $request->color;
        $coches->serie = $request->serie;
        $coches->tipo = $request->tipo;
        $coches->placas = $request->placas;
        $coches->capacidad = $request->capacidad;
        $coches->precio_renta = $request->precio_renta;
        $coches->id_cat = $request->id_cat;
        $coches->id_suc = $request->id_suc;
        $coches->id_mar = $request->id_mar;
        $coches->save();

        echo '<script>alert("Nuevo Registro Exitoso")</script> ';

        return view ('indexadmin');

	}
}
