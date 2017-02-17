@extends('layout')
 @section('titulo')
 	Cuenta
 @endsection
 @section('content')
 @include('mensajes/mensaje') 
 <div class="row">

 	<ul class="nav nav-tabs nav-top-border">
	<li class="@if ($cuenta_id=='Datos') active @else '' @endif"><a href="#actualizar_datos" data-toggle="tab">Actualizar datos</a></li>
	<li class=""><a href="#actualizar_c" data-toggle="tab">Actualizar Contraseña</a></li>
	<li class="@if ($cuenta_id=='Favoritos') active @else '' @endif"><a href="#favorito" data-toggle="tab">Favoritos</a></li>

	</ul>

	<div class="tab-content">

	<div class="tab-pane fade @if ($cuenta_id=='Datos') in active @else '' @endif" id="actualizar_datos">
		<div class="col-sm-12"> 
		<div class="row">
	{!!Form::model($user,['route'=>['Auth.update'],'method'=>'PUT', 'class'=>'nomargin sky-form' ,'data-parsley-validate'=>'', 'enctype'=>'multipart/form-data'])!!}	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="row">
			<div class="col-sm-4">
			<output id="list"></output>
				
              		 @if (Auth::user()->blb_img != "")
				        <img id="otro" src="data:image/jpeg;base64,{{ $user->blb_img }}" style="width:340;height: 290">
					@else
										
					@if (Auth::user()->lng_idgenero == 1)
						<img id="otro" src="{{ asset('img/user_masculino.png') }}" style="width:340;height: 290">								  	
					@elseif (Auth::user()->lng_idgenero == 2)
						<img id="otro" src="{{ asset('img/usuario_femenino.png') }}" style="width:340;height: 290">
						 @endif								
				
				    @endif	
				<br><br>
				
				<input class=""  type="file" id="files" name="blb_img" data-btn-text="Seleccione Archivo"> 
			</div>
			<div class="col-sm-8">
					<div class="row">
					<div class="form-group">
						<div class="col-md-4 col-sm-4">
							<label>Usuario</label>
							<label class="input margin-bottom-10">
							<i class="ico-append fa fa-user"></i>
							<input required="required" type="text" name="name" value="{{ $user->name }}">
								<b class="tooltip tooltip-bottom-right">Tú Usuario</b>
							</label>
						</div>

						<div class="col-md-4 col-sm-4">
							<label>Nombre</label>
							<label class="input margin-bottom-10">
							<i class="ico-append fa fa-user"></i>
							<input required="required" type="text" name="str_nombre" value="{{ $user->str_nombre }}">
								<b class="tooltip tooltip-bottom-right">Tú Nombre</b>
							</label>
						</div>

						<div class="col-md-4 col-sm-4">
							<label>Apellido</label>
							<label class="input margin-bottom-10">
							<i class="ico-append fa fa-user"></i>
							<input required="required" type="text" name="str_apellido" value="{{ $user->str_apellido }}">
								<b class="tooltip tooltip-bottom-right">Tú Apellido</b>
							</label>
						</div>
					</div>
				</div>

			<div class="row">
				<div class="form-group">

					<div class="col-md-4 col-sm-4">
						<label for="register:email">Correo</label>
						<label class="input margin-bottom-10">
						<i class="ico-append fa fa-envelope"></i>
						<input required="required" name="email" value="{{ $user->email }}" type="text">
							<b class="tooltip tooltip-bottom-right">Tú correo</b>
						</label>
					</div>

					<div class="col-md-4 col-sm-4">
						<label for="register:phone">Telefono</label>
						<label class="input margin-bottom-10">
							<i class="ico-append fa fa-phone"></i>
						<input type="text" class="input-mask-phone" name="str_telefono" value="{{ $user->str_telefono }}"onKeyPress="return validarNu(event)">
							<b class="tooltip tooltip-bottom-right">Tú Telefono (opcional)</b>
						</label>
					</div>
					<input type="hidden" name="lng_idservicio" value="4">
					<input type="hidden" name="lng_idrol" value="2">
					<div class="col-md-4 col-sm-4">
						<label for="register:phone">Pais</label>
						<select class="form-control" name="lng_idpais" value="{{ $user->lng_idpais }}">
								@foreach ($pais as $country)
								<option value="{{$country->id}}" name="lng_idpais">{{$country->str_paises}}</option>
								@endforeach
								</select>
					</div>

				</div>
			</div>

		<div class="row">
			<div class="form-group">
				<div class="col-md-4 col-sm-4">
						<label for="register:phone">Fecha de Nacimiento</label>
						<label class="input margin-bottom-10">
							<i class="ico-append fa fa-calendar"></i>
						<input type="text" readonly="readonly"  name="dmt_fecha_nacimiento" value="{{ $user->dmt_fecha_nacimiento }}">
							<b class="tooltip tooltip-bottom-right">Tú Fecha de Nacimiento (opcional)</b>
						</label>
				</div>
					<div class="col-md-4 col-sm-4">
						<label for="register:phone">Documento de Identidad</label>
								<div class="col-md-4">
								<select class="form-control" name="type_document" style="width:80;left:-10px; position:relative;">
								<option value="C.I" name="type_document">C.I</option>
								<option value="RIF" name="type_document" >RIF</option>
								<option value="Pasaporte" name="type_document">Pasaporte</option>
								</select>
								</div>
								<div class="col-md-8">
									<label class="input margin-bottom-12">
									
									<input type="text" name="str_ididentificacion"  style="width:105%;" value="{{ $user->str_ididentificacion }}" onKeyPress="return validarNu(event)">
									<b class="tooltip tooltip-bottom-right">Tú número de documento</b>
									</label>
									
								</div>
						
					</div>

					<div class="col-md-4 col-sm-4">
						<label for="register:phone">Genero</label>
								<select class="form-control" name="lng_idgenero" value="{{ $user->lng_idgenero }}">
								@foreach ($genero as $country)
								<option value="{{$country->id}}" name="lng_idgenero">{{$country->str_descripcion}}</option>
								@endforeach
								</select>
					</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<div class="col-md-4 col-sm-4">
					<label for="register:email">Instagram</label>
					<label class="input margin-bottom-10">
					<i class="ico-append fa fa-instagram"></i>
					<input  name="str_instagram" value="{{ $user->str_instagram }}" type="text">
						<b class="tooltip tooltip-bottom-right">Tú instagram (opcional)</b>
					</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<label for="register:email">Facebook</label>
					<label class="input margin-bottom-10">
					<i class="ico-append fa fa-facebook-square"></i>
					<input   name="str_facebook" value="{{ $user->str_facebook }}" type="text">
						<b class="tooltip tooltip-bottom-right">Tú Facebook (opcional)</b>
					</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<label for="register:email">Twitter</label>
					<label class="input margin-bottom-10">
					<i class="ico-append fa fa-twitter-square"></i>
					<input  name="str_twitter" value="{{ $user->str_twitter }}" type="text">
						<b class="tooltip tooltip-bottom-right">Tú Twitter (opcional)</b>
					</label>
				</div>
			</div>
		</div>

		<hr />

		<div class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i> ACTUALIZAR</button>
			</div>
		</div>

	</form>
	</div>
	</div></div>

		</div>
	</div>
	<div class="tab-pane fade " id="actualizar_c">
		<div class="col-sm-8"> 
		{!!Form::model($user,['route'=>['Auth.update'],'method'=>'PUT', 'class'=>'nomargin sky-form' ,'data-parsley-validate'=>''])!!}
			<br>
		<div class="row">
			<div class="form-group">
				<div class="col-md-8 col-md-offset-2 col-sm-4">
					<label for="register:email">Contraseña</label>
					<label class="input margin-bottom-10">
					<i class="ico-append glyphicon glyphicon-lock form-control-feedback"></i>
					<input   name="password" type="password">
						<b class="tooltip tooltip-bottom-right">Tú Contraseña</b>
					</label>
				</div>
				<div class="col-md-8  col-md-offset-2 col-sm-4">
					<label for="register:email">Confirmar Contraseña</label>
					<label class="input margin-bottom-10">
					<i class="ico-append glyphicon glyphicon-lock form-control-feedback"></i>
					<input  name="password_confirmation" type="password">
						<b class="tooltip tooltip-bottom-right">Tú Contraseña</b>
					</label>
				</div>										

			</div>
		</div>
		<div class="row">
		<center>
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> ACTUALIZAR</button>
			</div>
		</center>
		</div>

		</form>
		</div>
		<div class="col-sm-4">
			@include('auth.presentacion')

		</div>
	</div>

	<div class="tab-pane fade @if($cuenta_id=='Favoritos') in active @else '' @endif" id="favorito">
		<div class="col-sm-8"> 

 	 @if((count($lng_idfavorito)< 1)) 
	<div class="alert alert-warning margin-bottom-30"><!-- SUCCESS -->
		<button type="button" class="close" data-dismiss="alert">
		</button>
		<strong>Actualmente no posees Favoritos</strong>
	</div>
 @else
		<div class="table-responsive">
			<table class="table">
				<tr>
	 			 <th style="background: #ebf3fc" colspan="2">
	  			 <label class="checkbox">
					<input type="checkbox" value="1" name="select-all" id="select-all">
					<i></i>
				</label><br><br>
	  			</th>
	 			 <th style="background: #ebf3fc">
				  Modelo
	 			 </th>
	  			<th style="background: #ebf3fc">
	 				 Precios
	  			</th>
	  			<th style="background: #ebf3fc">
	 			 Acción
	  			</th>
				</tr>
	 @foreach ($lng_idfavorito as $favorito)
				<tr>
				  <td>
				  	<label class="checkbox">
						<input type="checkbox" value="1">
						<i></i>
					</label>
				  </td>
				  <td>
					<img class="img-responsive" style="width:30; height:60" src="{{ url ('img/modelo_3.jpg')}}" alt="">
					</td>
				  <td>{{$favorito->version->modelo->marca->str_marca}} {{$favorito->version->modelo->str_modelo}} Versión {{$favorito->version->str_version}}<br>
				  <span class="pull-left text-success"><i class="fa fa-check"></i>Disponible</span></td>
				  <td>	
				  	<div class="shop-item-price">
						<a href="{{route ('modelos.precio', $favorito->version->id )}}" class="btn btn-3d btn-xs btn-reveal btn-yellow">
						<i class="fa fa-money"></i>
						<span>VER PRECIOS</span>
						</a> 
					</div>
				</td>
				<td>
					<a href="{{route('favorito.favorit',  $favorito->version->id)}}"><i style="color: red" class="fa fa-trash-o"></i></a>
				</td>
				</tr>
	 @endforeach
			</table>
		</div>
		<center>
		<a href="{{route ('favorito.eliminar')}}" id="botn" class="btn btn-3d btn-md btn-reveal btn-red" disabled>
			<i class="fa fa-trash-o"></i>
			<span>ELIMINAR TODO</span>
		</a> 
		</center>
		<div class="pagination"> {!! $lng_idfavorito->render() !!} </div>
		@endif
	</div>
		<div class="col-sm-4">
			@include('auth.presentacion')

			
		</div>
	</div>
	
	</div>


</div>

  @endsection