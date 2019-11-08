<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rentas;
use App\coches;
use App\sucursales;
use App\clientes;


class renta extends Controller
{

  public function reporterenta()
  {
      $consulta = \DB::select("SELECT re.id_ren,re.fecha_inicio,re.fecha_final,re.tipo_pago,re.motivo,re.lugar_estancia,re.monto,re.cobertura,co.modelo as mo,su.nombre as no,cl.nombre as nom
      FROM rentas AS re
      INNER JOIN coches AS co on co.id_co = re.id_co
      INNER JOIN sucursales AS su on su.id_suc = re.id_suc
      INNER JOIN clientes AS cl on cl.id_cli = re.id_cli");
      return view ('reporterenta')
      ->with('consulta',$consulta);
  }

    public function altarenta(){
      $coches = coches::orderby('modelo','asc')->get();
      $sucursales = sucursales::orderby('nombre','asc')->get();
      $clientes = clientes::orderby('nombre','asc')->get();
    	return view ('altarenta')
      ->with('coches',$coches)
      ->with('sucursales',$sucursales)
      ->with('clientes',$clientes);
}

	public function guardarrenta(Request $request){
		    $fecha_inicio=$request->fecha_inicio;
			$fecha_final=$request->fecha_final;
			$tipo_pago=$request->tipo_pago;
			$motivo=$request->motivo;
			$lugar_estancia=$request->lugar_estancia;
			$monto=$request->monto;
			$cobertura=$request->cobertura;
			$id_co=$request->id_co;
			$id_suc=$request->id_suc;
			$id_cli=$request->id_cli;

    $this->validate($request,[
    	'motivo'=>['regex:/^[A-Z,a-z, ,á,é,í,ó,ú,ñ]*$/'],
    	'lugar_estancia'=>['regex:/^[A-Z,a-z, ,á,é,í,ó,ú,ñ]*$/'],
    	'cobertura'=>['regex:/^[A-Z,a-z, ,á,é,í,ó,ú,ñ]*$/'],
    	'monto'=>['regex:/^[0-9]*$/'],
    ]);

   		$rentas = new rentas;
        $rentas->fecha_inicio = $request->fecha_inicio;
        $rentas->fecha_final = $request->fecha_final;
        $rentas->tipo_pago = $request->tipo_pago;
        $rentas->motivo = $request->motivo;
        $rentas->lugar_estancia = $request->lugar_estancia;
        $rentas->monto = $request->monto;
        $rentas->cobertura = $request->cobertura;
        $rentas->id_co = $request->id_co;
        $rentas->id_suc = $request->id_suc;
        $rentas->id_cli = $request->id_cli;
        $rentas->save();

        echo '<script>alert("Nuevo Registro Exitoso")</script> ';

        return view ('indexadmin');

	}
}
