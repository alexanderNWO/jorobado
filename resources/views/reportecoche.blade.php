@extends('indexadmin')

@section('contenido')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Reporte de Coches</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr><td>Clave</td><td>Modelo</td><td>Año</td><td>Color</td><td>Serie</td><td>Tipo</td><td>Placas</td><td>Capacidad</td><td>Precio de Renta</td><td>Categoria</td><td>Sucursal</td><td>Marca</td></tr>
                            </thead>
                            <tbody>
                              @foreach($consulta as $c)
                              <tr><td>{{$c->id_co}}</td><td>{{$c->modelo}}</td>
                                <td>{{$c->ano}}</td><td>{{$c->color}}</td>
                                <td>{{$c->serie}}</td><td>{{$c->tipo}}</td>
                                <td>{{$c->placas}}</td><td>{{$c->capacidad}}</td>
                                <td>{{$c->precio_renta}}</td><td>{{$c->nom}}</td>
                                <td>{{$c->no}}</td><td>{{$c->n}}</td></tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>




  @stop
