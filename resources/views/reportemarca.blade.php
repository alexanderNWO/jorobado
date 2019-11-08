@extends('indexadmin')

@section('contenido')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Reporte de Marcas</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr><td>Clave</td><td>Nombre</td></tr>
                            </thead>
                            <tbody>
                              @foreach($consulta as $m)
                              <tr><td>{{$m->id_mar}}</td><td>{{$m->nombre}}</td></tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>




  @stop
