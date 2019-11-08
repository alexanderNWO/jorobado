<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagina extends Controller
{
  public function index(){
      return view ('index');
  }
  public function iniciodesesion(){
      return view ('iniciodesesion');
  }
  public function exitoso(){
      return view ('exitoso');
  }
  public function registroexito(){
      return view ('registroexito');
  }
  public function Tarjeta(){
      return view ('Tarjeta');
  }
  public function verificar(){
      return view('verificar');
  }
  public function cerrar(){
    session_start();
    if($_SESSION['Usuario']){
    session_destroy();
    return view ('iniciodesesion');
    }
    else {
    	return view ('index');
    }
  }
  public function indexinicio(){
      return view ('indexinicio');
  }
  public function rentas(){
      return view ('rentas');
  }
  public function registros(){
      return view ('registros');
  }
  public function contactoinicio(){
      return view ('contactoinicio');
  }
  public function misioninicio(){
      return view ('misioninicio');
  }
  public function reservas(){
      return view ('reservas');
  }
  public function ubicacioninicio(){
      return view ('ubicacioninicio');
  }
  public function visioninicio(){
      return view ('visioninicio');
  }
  public function cochesmedianainicio(){
      return view ('cochesmedianainicio');
  }
  public function cochesbajainicio(){
      return view ('cochesbajainicio');
  }
  public function cochesaltoinicio(){
      return view ('cochesaltoinicio');
  }
  public function cochesalto(){
      return view ('cochesalto');
  }
  public function contacto(){
      return view ('contacto');
  }
  public function cochesbaja(){
      return view ('cochesbaja');
  }
  public function ubicacion(){
      return view ('ubicacion');
  }
  public function cochesaltopopup(){
      return view ('cochesaltopopup');
  }
  public function cochesbajapopup(){
      return view ('cochesbajapopup');
  }
  public function cochesmedianapopup(){
      return view ('cochesmedianapopup');
  }
  public function cochesmediana(){
      return view ('cochesmediana');
  }
  public function mision(){
      return view ('mision');
  }
  public function vision(){
      return view ('vision');
  }
}
