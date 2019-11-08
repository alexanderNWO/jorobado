@extends('indexadmin')

@section('contenido')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Reporte de Administradores</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr><td>Clave</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Edad</td><td>Sexo</td><td>Telefono</td><td>Correo</td><td>Contraseña</td></tr>
                            </thead>
                            <tbody>
                              @foreach($consulta as $a)
                              <tr><td>{{$a->id_ad}}</td><td>{{$a->nombre}}</td>
                                <td>{{$a->ap_p}}</td><td>{{$a->ap_m}}</td>
                                <td>{{$a->edad}}</td><td>{{$a->sexo}}</td>
                                <td>{{$a->telefono}}</td><td>{{$a->correo}}</td>
                                <td>{{$a->contrasena}}</td></tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>




  @stop
