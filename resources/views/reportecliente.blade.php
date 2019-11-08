@extends('indexadmin')

@section('contenido')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Reporte de Clientes</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr><td>Clave</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Edad</td><td>Sexo</td><td>Telefono</td><td>Numero de Licencia</td><td>Correo</td><td>Contraseña</td></tr>
                            </thead>
                            <tbody>
                              @foreach($consulta as $c)
                              <tr><td>{{$c->id_cli}}</td><td>{{$c->nombre}}</td>
                                <td>{{$c->ap_p}}</td><td>{{$c->ap_m}}</td>
                                <td>{{$c->edad}}</td><td>{{$c->sexo}}</td>
                                <td>{{$c->telefono}}</td><td>{{$c->n_licencia}}</td>
                                <td>{{$c->correo}}</td><td>{{$c->contrasena}}</td></tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>




  @stop
