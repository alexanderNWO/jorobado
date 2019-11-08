@extends('indexadmin')

@section('contenido')

<head>

    <title>Altas de Marcas</title>

</head>

                <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Marcas</strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                          {{Form::open(['route' => 'guardarmarca', 'class' => 'form-horizontal'])}}
  	                                                      {{Form::token()}}
                                                          @if($errors->first ('nombre'))
                                                            <i> {{ $errors->first('nombre') }} </i>
                                                              @endif <br>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre de la Marca</label></div>
                                                                <div class="col-12 col-md-9">{{Form::text('nombre',old('nombre'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el nombre de la Marca</small></div>
                                                            </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Logo</label></div>
                                                                    <div class="col-12 col-md-9">{{Form::file('imagen', ['class' => 'form-control-file'])}}</div>
                                                                </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        {{Form::submit('Enviar Alta',['class' => 'btn btn-primary btn-sm'])}}
                                                        {{Form::reset('Borrar',['class' => 'btn btn-danger btn-sm'])}}
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

@stop
