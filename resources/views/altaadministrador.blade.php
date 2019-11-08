@extends('indexadmin')

@section('contenido')

                <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Administradores</strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                      {{Form::open(['route' => 'guardaradministrador', 'class' => 'form-horizontal'])}}
                                                      {{Form::token()}}
                                                      @if($errors->first ('nombre'))
                                                        <i> {{ $errors->first('nombre') }} </i>
                                                          @endif <br>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre</label></div>
                                                                <div class="col-12 col-md-9">{{Form::text('nombre',old('nombre'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el nombre del administrador</small></div>
                                                            </div>
                                                            @if($errors->first('ap_p'))
      			                                                   <i> {{ $errors->first('ap_p') }} </i>
      		                                                       @endif  <br>
                                                                  <div class="row form-group">
                                                                      <div class="col col-md-3"><label for="text-input" class=" form-control-label">Apellido Paterno</label></div>
                                                                      <div class="col-12 col-md-9">{{Form::text('ap_p',old('ap_p'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el apellido paterno del administrador</small></div>
                                                                  </div>
                                                                  @if($errors->first('ap_m'))
      			                                                         <i> {{ $errors->first('ap_m') }} </i>
      		                                                             @endif  <br>
                                                                  <div class="row form-group">
                                                                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Apellido Materno</label></div>
                                                                  <div class="col-12 col-md-9">{{Form::text('ap_m',old('ap_m'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el apellido materno del administrador</small></div>
                                                                  </div>
                                                                  @if($errors->first('edad'))
			                                                               <i> {{ $errors->first('edad') }} </i>
		                                                                   @endif  <br>
                                                                       <div class="row form-group">
                                                                       <div class="col col-md-3"><label for="text-input" class=" form-control-label">Edad</label></div>
                                                                       <div class="col-12 col-md-9">{{Form::text('edad',old('edad'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa la edad del administrador</small></div>
                                                                       </div>
                                                                       <div class="row form-group">
                                                                           <div class="col col-md-3"><label class=" form-control-label">Sexo</label></div>
                                                                           <div class="col col-md-9">
                                                                               <div class="form-check">
                                                                                   <div class="radio">
                                                                                       <label for="radio2" class="form-check-label ">
                                                                                           {!! Form::radio('sexo', 'H', true, ['id' => 'radio1']) !!}Hombre
                                                                                       </label>
                                                                                   </div>
                                                                                   <div class="radio">
                                                                                       <label for="radio3" class="form-check-label ">
                                                                                           {!! Form::radio('sexo', 'M', false, ['id' => 'radio1']) !!}Mujer
                                                                                       </label>
                                                                                   </div>
                                                                               <small class="form-text text-muted">Selecciona el sexo del administrador</small></div>
                                                                           </div>
                                                                       </div>
                                                                       @if($errors->first('tel'))
                                                                          <i> {{ $errors->first('tel') }} </i>
                                                                            @endif  <br>
                                                                            <div class="row form-group">
                                                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telefono</label></div>
                                                                            <div class="col-12 col-md-9">{{Form::text('tel',old('tel'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el telefono del administrador</small></div>
                                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Correo</label></div>
                                                                <div class="col-12 col-md-9">{{Form::email('correo',old('correo'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el correo del administrador</small></div>
                                                            </div>
                                                            @if($errors->first('contrasena'))
			                                                         <i> {{ $errors->first('contrasena') }} </i>
		                                                             @endif  <br>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Contraseña</label></div>
                                                                <div class="col-12 col-md-9">{{Form::text('contrasena',old('contrasena'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa la contraseña del administrador</small></div>
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
