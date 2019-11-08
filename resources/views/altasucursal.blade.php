@extends('indexadmin')

@section('contenido')

                <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Sucursales</strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                      {{Form::open(['route' => 'guardarsucursal', 'class' => 'form-horizontal'])}}
                                                      {{Form::token()}}
                                                      @if($errors->first ('nombre'))
                                                        <i> {{ $errors->first('nombre') }} </i>
                                                          @endif <br>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre</label></div>
                                                                <div class="col-12 col-md-9">{{Form::text('nombre',old('nombre'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el nombre de la Sucursal</small></div>
                                                            </div>
                                                            @if($errors->first('direccion'))
      			                                                   <i> {{ $errors->first('direccion') }} </i>
        		                                                     @endif  <br>
                                                                 <div class="row form-group">
                                                                     <div class="col col-md-3"><label for="text-input" class=" form-control-label">Direccion</label></div>
                                                                     <div class="col-12 col-md-9">{{Form::text('direccion',old('direccion'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa la Direccion de la Sucursal</small></div>
                                                                 </div>
                                                                 @if($errors->first('tel'))
                                                                    <i> {{ $errors->first('tel') }} </i>
                                                                      @endif  <br>
                                                                      <div class="row form-group">
                                                                      <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telefono</label></div>
                                                                      <div class="col-12 col-md-9">{{Form::text('tel',old('tel'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el telefono de la sucursal</small></div>
                                                                      </div>
                                                                      @if($errors->first('responsable'))
    			                                                               <i> {{ $errors->first('responsable') }} </i>
    		                                                                   @endif  <br>
                                                                           <div class="row form-group">
                                                                               <div class="col col-md-3"><label for="text-input" class=" form-control-label">Responsable</label></div>
                                                                               <div class="col-12 col-md-9">{{Form::text('responsable',old('responsable'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el nombre completo del responsable de la Sucursal</small></div>
                                                                           </div>
                                                                           <div class="row form-group">
                                                                               <div class="col col-md-3"><label for="file-input" class=" form-control-label">Imagen de la Sucursal</label></div>
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
