@extends('indexadmin')

@section('contenido')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Reporte de Rentas</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr><td>Clave</td><td>Fecha de Inicio</td><td>Fecha Final</td><td>Tipo de Pago</td><td>Motivo</td><td>Lugar de Estancia</td><td>Monto</td><td>Cobertura</td><td>Coche</td><td>Sucursal</td><td>Cliente</td></tr>
                            </thead>
                            <tbody>
                              @foreach($consulta as $r)
                              <tr><td>{{$r->id_ren}}</td><td>{{$r->fecha_inicio}}</td>
                                <td>{{$r->fecha_final}}</td><td>{{$r->tipo_pago}}</td>
                                <td>{{$r->motivo}}</td><td>{{$r->lugar_estancia}}</td>
                                <td>{{$r->monto}}</td><td>{{$r->cobertura}}</td>
                                <td>{{$r->mo}}</td><td>{{$r->no}}</td>
                                <td>{{$r->nom}}</td></tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>




  @stop
