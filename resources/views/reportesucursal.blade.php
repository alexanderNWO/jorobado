@extends('indexadmin')

@section('contenido')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Reporte de Sucursales</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr><td>Clave</td><td>Nombre</td><td>Direccion</td><td>Telefono</td><td>Responsable</td></tr>
                            </thead>
                            <tbody>
                              @foreach($consulta as $s)
                              <tr><td>{{$s->id_suc}}</td><td>{{$s->nombre}}</td>
                                <td>{{$s->direccion}}</td><td>{{$s->telefono}}</td>
                                <td>{{$s->responsable}}</td></tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>




  @stop
