@extends('layout')
@section('titulo')
<h1>Registrarse</h1>
@endsection
@section('content')

					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<Strong> ¡Vaya! </ Strong> Hubo algunos problemas con su entrada. <br> <br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
<div class="row">
	<div class="col-sm-4">
		<!-- banner -->
		<div class="owl-carousel buttons-autohide controlls-over margin-bottom-60 text-center" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": true, "pagination": false, "transitionStyle":"goDown"}'>
			<a href="#">
			<img class="img-responsive" src="{{ url ('assets/images/demo/shop/banners/off_1.png') }}" width="270" height="350" alt="">
			</a>
			<a href="#">
			<img class="img-responsive" src="{{ url ('assets/images/demo/shop/banners/off_2.png') }}" width="270" height="350" alt="">
			</a>
		</div>
	</div>
<div class="col-sm-8">
<div class="box-static box-border-top padding-30">
	
		 {!! Form::open(array('route' => 'Auth.registrate', 'method' => 'POST', 'class'=>'nomargin sky-form', 'enctype'=>'multipart/form-data') )!!}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="row">
					<div class="form-group">

						<div class="col-md-4 col-sm-4">
							<label>Usuario</label>
							<label class="input margin-bottom-10">
							<i class="ico-append fa fa-user"></i>
							<input required="required" type="text" name="name" value="{{ old('name') }}">
								<b class="tooltip tooltip-bottom-right">Tú Usuario</b>
							</label>
						</div>

						<div class="col-md-4 col-sm-4">
							<label>Nombre</label>
							<label class="input margin-bottom-10">
							<i class="ico-append fa fa-user"></i>
							<input required="required" type="text" name="str_nombre" value="{{ old('str_nombre') }}">
								<b class="tooltip tooltip-bottom-right">Tú Nombre</b>
							</label>
						</div>

						<div class="col-md-4 col-sm-4">
							<label>Apellido</label>
							<label class="input margin-bottom-10">
							<i class="ico-append fa fa-user"></i>
							<input required="required" type="text" name="str_apellido" value="{{ old('str_apellido') }}">
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
						<input required="required" name="email" value="{{ old('email') }}" type="text">
							<b class="tooltip tooltip-bottom-right">Tú correo</b>
						</label>
					</div>

					<div class="col-md-4 col-sm-4">
						<label for="register:phone">Telefono</label>
						<label class="input margin-bottom-10">
							<i class="ico-append fa fa-phone"></i>
						<input type="text" class="input-mask-phone" name="str_telefono" value="{{ old('str_telefono') }}" onKeyPress="return validarNu(event)">
							<b class="tooltip tooltip-bottom-right">Tú Telefono (opcional)</b>
						</label>
					</div>
					<input type="hidden" name="lng_idservicio" value="4">
					<input type="hidden" name="lng_idrol" value="2">
					<div class="col-md-4 col-sm-4">
						<label for="register:phone">Pais</label>
						<select class="form-control" name="lng_idpais" required="required">
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
						<input type="text" class="input-mask-date" id="id-date-picker-1" name="dmt_fecha_nacimiento" value="{{ old('dmt_fecha_nacimiento') }}" required="required">
							<b class="tooltip tooltip-bottom-right">Tú Fecha de Nacimiento</b>
						</label>
				</div>
					<div class="col-md-4 col-sm-4">
						<label for="register:phone">Documento de Identidad</label>
								<div class="col-md-4">
								<select class="form-control" name="type_document" style="width:100;left:-10px; position:relative;" required="required">
								<option value="C.I" name="type_document">C.I</option>
								<option value="RIF" name="type_document" >RIF</option>
								<option value="Pasaporte" name="type_document">Pasaporte</option>
								</select>
								</div>
								<div class="col-md-8">
									<label class="input margin-bottom-12">
									
									<input type="text" name="str_ididentificacion"  style="width:105%;" value="{{ old('str_ididentificacion') }}" onKeyPress="return validarNu(event)" required="required">
									<b class="tooltip tooltip-bottom-right">Tú número de documento</b>
									</label>
									
								</div>
						
					</div>

					<div class="col-md-4 col-sm-4">
						<label for="register:phone">Genero</label>
								<select class="form-control" name="lng_idgenero">
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
					<input  name="str_instagram" value="{{ old('str_instagram') }}" type="text">
						<b class="tooltip tooltip-bottom-right">Tú instagram (opcional)</b>
					</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<label for="register:email">Facebook</label>
					<label class="input margin-bottom-10">
					<i class="ico-append fa fa-facebook-square"></i>
					<input   name="str_facebook" value="{{ old('str_facebook') }}" type="text">
						<b class="tooltip tooltip-bottom-right">Tú Facebook (opcional)</b>
					</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<label for="register:email">Twitter</label>
					<label class="input margin-bottom-10">
					<i class="ico-append fa fa-twitter-square"></i>
					<input  name="str_twitter" value="{{ old('str_twitter') }}" type="text">
						<b class="tooltip tooltip-bottom-right">Tú Twitter (opcional)</b>
					</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<div class="col-md-8 col-sm-4">

				<input type="file" name="blb_img" data-btn-text="Seleccione Archivo"> 
				</div>
			</div>
		</div>
		<div class="row">

			<div class="form-group">
			
				<div class="col-md-4 col-md-offset-2 col-sm-4">
					<label for="register:email">Contraseña</label>
					<label class="input margin-bottom-10">
					<i class="ico-append glyphicon glyphicon-lock form-control-feedback"></i>
					<input   name="password" type="password" required="required">
						<b class="tooltip tooltip-bottom-right">Tú Contraseña</b>
					</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<label for="register:email">Confirmar Contraseña</label>
					<label class="input margin-bottom-10">
					<i class="ico-append glyphicon glyphicon-lock form-control-feedback"></i>
					<input  name="password_confirmation" type="password">
						<b class="tooltip tooltip-bottom-right">Tú Contraseña</b>
					</label>
				</div>
														

			</div>
		</div>

		<hr />

		<div class="row">
		<center>
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> REGISTRAR</button>
			</div>
		</center>
		</div>

	</form>
</div>

</div>
@endsection