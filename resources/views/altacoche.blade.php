@extends('indexadmin')

@section('contenido')

                <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Coches</strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                      {{Form::open(['route' => 'guardarcoche', 'class' => 'form-horizontal'])}}
                                                      {{Form::token()}}
                                                      @if($errors->first ('modelo'))
                                                        <i> {{ $errors->first('modelo') }} </i>
                                                          @endif <br>
                                                          <div class="row form-group">
                                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Modelo</label></div>
                                                              <div class="col-12 col-md-9">{{Form::text('modelo',old('modelo'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el modelo del coche</small></div>
                                                          </div>
                                                          @if($errors->first('ano'))
                                                             <i> {{ $errors->first('ano') }} </i>
                                                               @endif  <br>
                                                               <div class="row form-group">
                                                                   <div class="col col-md-3"><label for="text-input" class=" form-control-label">Año</label></div>
                                                                   <div class="col-12 col-md-9">{{Form::text('ano',old('ano'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el año de salida del coche</small></div>
                                                               </div>
                                                               @if($errors->first('color'))
                                                                  <i> {{ $errors->first('color') }} </i>
                                                                    @endif  <br>
                                                                    <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Color</label></div>
                                                                    <div class="col-12 col-md-9">{{Form::text('color',old('color'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el color del coche</small></div>
                                                                    </div>
                                                                    @if($errors->first('serie'))
                                                                       <i> {{ $errors->first('serie') }} </i>
                                                                         @endif  <br>
                                                                         <div class="row form-group">
                                                                             <div class="col col-md-3"><label for="text-input" class=" form-control-label">Serie</label></div>
                                                                             <div class="col-12 col-md-9">{{Form::text('serie',old('serie'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el numero de serie del coche</small></div>
                                                                         </div>
                                                                         <div class="row form-group">
                                                                             <div class="col col-md-3"><label class=" form-control-label">Tipo de Coche</label></div>
                                                                             <div class="col col-md-9">
                                                                                 <div class="form-check">
                                                                                     <div class="radio">
                                                                                         <label for="radio2" class="form-check-label ">
                                                                                             {!! Form::radio('tipo', 'Estandar', true, ['id' => 'radio1']) !!}Estandar
                                                                                         </label>
                                                                                     </div>
                                                                                     <div class="radio">
                                                                                         <label for="radio3" class="form-check-label ">
                                                                                             {!! Form::radio('tipo', 'Automatico', false, ['id' => 'radio1']) !!}Automatico
                                                                                         </label>
                                                                                     </div>
                                                                                 <small class="form-text text-muted">Selecciona que tipo de coche es</small></div>
                                                                             </div>
                                                                         </div>
                                                                         @if($errors->first('placas'))
                   			                                                   <i> {{ $errors->first('placas') }} </i>
                     		                                                     @endif  <br>
                                                                              <div class="row form-group">
                                                                                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Placas</label></div>
                                                                                  <div class="col-12 col-md-9">{{Form::text('placas',old('placas'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa las placas del coche</small></div>
                                                                              </div>
                                                                              @if($errors->first('capacidad'))
                                                                                 <i> {{ $errors->first('capacidad') }} </i>
                                                                                   @endif  <br>
                                                                                   <div class="row form-group">
                                                                                   <div class="col col-md-3"><label for="text-input" class=" form-control-label">Capacidad</label></div>
                                                                                   <div class="col-12 col-md-9">{{Form::text('capacidad',old('capacidad'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa la capacidad de personas del coche</small></div>
                                                                                   </div>
                                                                                   @if($errors->first('precio_renta'))
                 			                                                               <i> {{ $errors->first('precio_renta') }} </i>
                 		                                                                   @endif  <br>
                                                                                        <div class="row form-group">
                                                                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Precio de renta (Por dia)</label></div>
                                                                                            <div class="col-12 col-md-9">{{Form::text('precio_renta',old('precio_renta'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el precio de renta al dia del coche</small></div>
                                                                                        </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Selecciona la Categoria del Coche</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                      <select name = 'id_cat' class="form-control">
                                                                        @foreach ($categorias as $c)
                                                                        <option value ='{{$c->id_cat}}'>{{$c->nombre}}</option>
                                                                        @endforeach
                                                                      </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Selecciona la Sucursal del Coche</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                      <select name = 'id_suc' class="form-control">
                                                                        @foreach ($sucursales as $s)
                                                                        <option value ='{{$s->id_suc}}'>{{$s->nombre}}</option>
                                                                        @endforeach
                                                                      </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Selecciona la Marca del Coche</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                      <select name = 'id_mar' class="form-control">
                                                                        @foreach ($marcas as $m)
                                                                        <option value ='{{$m->id_mar}}'>{{$m->nombre}}</option>
                                                                        @endforeach
                                                                      </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Imagen del Coche</label></div>
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
