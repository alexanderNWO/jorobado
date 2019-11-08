@extends('indexadmin')

@section('contenido')


                <div class="row">
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <strong>Coches</strong>
                          </div>
                          <div class="card-body card-block">
                            {{Form::open(['route' => 'guardarrenta', 'class' => 'form-horizontal'])}}
                            {{Form::token()}}
                            @if($errors->first ('fecha_inicio'))
                              <i> {{ $errors->first('fecha_inicio') }} </i>
                                @endif <br>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Fecha de Inicio</label></div>
                                    <div class="col-12 col-md-9">{{Form::date('fecha_inicio',old('fecha_inicio'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa la fecha de inicio de la renta</small></div>
                                </div>
                                @if($errors->first('fecha_final'))
                                   <i> {{ $errors->first('fecha_final') }} </i>
                                     @endif  <br>
                                     <div class="row form-group">
                                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Fecha Final</label></div>
                                         <div class="col-12 col-md-9">{{Form::date('fecha_final',old('fecha_final'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa la fecha del final de la renta</small></div>
                                     </div>
                                     @if($errors->first('tipo_pago'))
                                        <i> {{ $errors->first('tipo_pago') }} </i>
                                          @endif  <br>
                                          <div class="row form-group">
                                              <div class="col col-md-3"><label class=" form-control-label">Tipo de Pago</label></div>
                                              <div class="col col-md-9">
                                                  <div class="form-check">
                                                      <div class="radio">
                                                          <label for="radio2" class="form-check-label ">
                                                              {!! Form::radio('tipo_pago', 'Efectivo', true, ['id' => 'radio1']) !!}Efectivo (Pago en Sucursal)
                                                          </label>
                                                      </div>
                                                      <div class="radio">
                                                          <label for="radio3" class="form-check-label ">
                                                              {!! Form::radio('tipo_pago', 'Tarjeta', false, ['id' => 'radio1']) !!}Tarjeta de Crédito
                                                          </label>
                                                      </div>
                                                  <small class="form-text text-muted">Selecciona tu tipo de pago</small></div>
                                              </div>
                                          </div>
                                          @if($errors->first('motivo'))
                                             <i> {{ $errors->first('motivo') }} </i>
                                               @endif  <br>
                                               <div class="row form-group">
                                                   <div class="col col-md-3"><label for="text-input" class=" form-control-label">Motivo</label></div>
                                                   <div class="col-12 col-md-9">{{Form::text('motivo',old('motivo'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el motivo de la renta</small></div>
                                               </div>
                                               @if($errors->first('lugar_estancia'))
                                                 <i> {{ $errors->first('lugar_estancia') }} </i>
                                                   @endif  <br>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lugar de Estancia durante la renta</label></div>
                                                        <div class="col-12 col-md-9">{{Form::text('lugar_estancia',old('lugar_estancia'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa tu lugar de estancia durante la renta</small></div>
                                                    </div>
                                                    @if($errors->first('monto'))
                                                       <i> {{ $errors->first('monto') }} </i>
                                                         @endif  <br>
                                                         <div class="row form-group">
                                                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Monto</label></div>
                                                         <div class="col-12 col-md-9">{{Form::text('monto',old('monto'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa el monto total de la renta</small></div>
                                                         </div>
                                                         @if($errors->first('cobertura'))
                                                           <i> {{ $errors->first('cobertura') }} </i>
                                                             @endif  <br>
                                                              <div class="row form-group">
                                                                  <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cobertura de la renta (Seguro)</label></div>
                                                                  <div class="col-12 col-md-9">{{Form::text('cobertura',old('cobertura'), ['class' => 'form-control'])}}<small class="form-text text-muted">Ingresa la agencia de seguros que asegurará el coche durante la renta</small></div>
                                                              </div>
                                      <div class="row form-group">
                                          <div class="col col-md-3"><label for="select" class=" form-control-label">Selecciona el coche a rentar</label></div>
                                          <div class="col-12 col-md-9">
                                            <select name = 'id_co' class="form-control">
                                              @foreach ($coches as $c)
                                              <option value ='{{$c->id_co}}'>{{$c->modelo}}</option>
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
                                          <div class="col col-md-3"><label for="select" class=" form-control-label">Cliente que renta</label></div>
                                          <div class="col-12 col-md-9">
                                            <select name = 'id_cli' class="form-control">
                                              @foreach ($clientes as $c)
                                              <option value ='{{$c->id_cli}}'>{{$c->nombre}}</option>
                                              @endforeach
                                            </select>
                                          </div>
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
