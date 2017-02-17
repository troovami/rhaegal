@extends('layout')
@section('titulo')
<h1>Recuperar Contraseña</h1>
@endsection
@section('content')
<!-- Se encarga de enviar correo -->
<div class="container-fluid">
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

		<div class="col-md-8 ">
								              @if(Session::has('mensaje'))
                                
                                    <div class="alert alert-success" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                      <strong><i class="fa fa-exclamation-triangle"></i></strong> {{Session::get('mensaje')}}
                                    </div>                          
                            
                                @endif  

	<div class="box-static box-border-top padding-30">


					<!--<form class="form-horizontal" role="form" method="POST" action="/password/email">-->
					 {!! Form::open(array('route' => 'Auth.password', 'method' => 'POST',  'class'=>'nomargin sky-form') )!!}
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
 								<div style="text-align: justify;">
									Introduzca su dirección de correo electrónico, y nosotros le enviaremos su nueva clave de acceso
								</div>
						<div class="row">	
							<div class="form-group">
								<div class="form-group">
									<div class="col-md-8 col-md-offset-2 col-sm-8 col-ms-offset-2">
										<label for="register:email">Correo</label>
										<label class="input margin-bottom-10">
										<i class="ico-append fa fa-envelope"></i>
										<input required="required" name="email" value="{{ old('email') }}" type="text">
											<b class="tooltip tooltip-bottom-right">Tú correo</b>
										</label>
									</div>
								</div>
							</div>
						</div>

		<div class="row">
		<center>
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> CONTINUAR</button>
			</div>
		</center>
		</div>
					</form>
				</div>
			</div>
			</div>

@endsection