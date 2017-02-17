	<head>
		<meta charset="utf-8" />
		<title>Troovami</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />

		<!-- mobile settings -->
		<link rel="icon" href="{{ asset ('assets/images/logo_dark.png') }}" type="image/x-icon"/>
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		
		<!-- CORE CSS -->
		<link href="{{ url ('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url ('assets/font-awesome/4.2.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
		<!-- THEME CSS -->
		<link href="{{ url ('assets/css/essentials.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url ('assets/css/layout.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url ('jquery-ui.css') }}" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="{{ url ('assets/css/header-1.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url ('assets/css/layout-shop.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url ('assets/css/color_scheme/green.css') }}" rel="stylesheet" type="text/css" id="color_scheme" />
		<link href="{{ url ('css/modal.css') }}" rel="stylesheet" type="text/css" id="color_scheme" />

  <!-- Compiled and minified JavaScript -->

	<div onload="myModal"></div>		
	</head>
<!-- The Modal -->
<div id="myModal" class="modal_css">
  <!-- Modal content -->
  <br><br>
  <div class="modal-contenido">
   
    <div class="modal-body_css" >
    
      @include('auth/login')
    </div>
  </div>

</div>
		<div id="topBar">
				<div class="container">
					<ul class="top-links list-inline pull-right">
						
						@if (Auth::guest())
						
						<li class="hidden-xs" ><a class="ico-rounded lightbox" href="{{ route('Auth.ingreso')}}" id="myBtn" style="color:#fff"> Ingresa</a><li>

						<li class="hidden-xs"><a href="{{ route('Auth.registrate')}}" style="color:#fff">Regístrate</a></li>
					@else
					<li class="text-welcome hidden-xs" style="color:#b7b4b4">Bienvenido a troovami, <strong>{{ Auth::user()->str_nombre }} {{Auth::user()->str_apellido}}</strong></li>
						
						<li class="dropdown">
						
							<a href="#" class="dropdown-toggle" style="color:#fff" data-toggle="dropdown" role="button" aria-expanded="false">Cuenta<span class="caret"></span></a>

							<ul class="dropdown-menu" role="menu">
								<li><a tabindex="-1" href="{{route ('favorito.favoritos', 'Datos')}}"><i class="fa fa-cog"></i> Mi Perfil</a></li>
								
								<li class="divider"></li>
								<li><a tabindex="-1" href="{{ route('favorito.favoritos', 'Favoritos')}}"><i class="fa fa-heart"></i> Favoritos</a></li>
								<li><a tabindex="-1" href="{{route ('favorito.favoritos')}}"><i class="fa fa-edit"></i> Mis Anuncios</a></li>
								<li class="divider"></li>
								
								<li><a tabindex="-1" href="{{ route('Auth.sesion')}}"><i class="glyphicon glyphicon-off"></i> Salir</a></li>
							</ul>
						</li>
					@endif
					</ul>
				</div>
			</div>
			
			<div id="header" class="sticky clearfix">

				<!-- SEARCH HEADER -->
				<div class="search-box over-header">
					<a id="closeSearch"  class="glyphicon glyphicon-remove"></a>
					{!! Form::open(array('route' => 'modelos.busqueda', 'method'=>'GET')) !!}
					 {{ csrf_field() }}
						{!! Form::text ('busqueda', null, ['class'=>'form-control','placeholder'=>'Buscar Modelo'])!!}
					
					{!! Form::close() !!}
				</div> 
				<!-- /SEARCH HEADER -->


				<!-- TOP NAV -->
				<header id="topNav" style="background: #f3f3f3" >
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">

							<!-- SEARCH -->
							<li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
							</li>
							<!-- /SEARCH -->

						</ul>
						<!-- /BUTTONS -->

						<!-- Logo -->
						<a class="logo pull-left" href="{{ route('marcas.index')}}">
							<img src="{{ asset ('assets/images/logo_dark.png') }}" alt="" />
						</a>
							<div class="navbar-collapse pull-right nav-main-collapse collapse">
								<nav class="nav-main">
									<ul id="topMain" class="nav nav-pills nav-main">
										<li class="dropdown"><!-- HOME -->
											<a  href="{{ route('marcas.index')}}">
												HOME
											</a>
										</li>
										<li class="dropdown mega-menu"><!-- PORTFOLIO -->
											<a class="dropdown-toggle" href="{{ route('marcas.moviles')}}">
												MARCAS
											</a>
											<ul class="dropdown-menu">
												<li>
													<div class="row">
														<div class="col-md-5th">
															<ul class="list-unstyled">
															<?php $i=0; ?>
																@foreach ($menu as $menus)
																<li><a href="{{ route('marcas.moviles', $menus->marca->id)}}">{{$menus->marca->str_marca}}</a></li>
																<?php $i=$i+1; ?>
																@if ($i==9 or $i==18 or $i==27 or $i==36 or $i==45 or $i==54 or $i==63 or $i==72 or $i==81 or $i==90)
																</ul>
														</div>
														<div class="col-md-5th">
															<ul class="list-unstyled">
																@endif

																@endforeach
															</ul>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li class="dropdown mega-menu"><!-- SHORTCODES -->
											<a href="{{ route('modelos.detalles') }}">
												COMPARAR
											</a>
										</li>
										<li class="dropdown mega-menu"><!-- SHORTCODES -->
											<a href="{{ route('marcas.somos') }}">
												QUIENES SOMOS
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						</header>
					</div>

			<section class="page-header page-header-xs">
				<div class="container">
				
				<h1>@yield('titulo')</h1>
			
				</div>
			</section>
		


			<!-- CONTENT -->
			<section>
				<div class="container">
					 @yield('content')
				</div>
			</section>
			<!-- CONTENT -->

</body>


			<!-- FOOTER -->
			<footer id="footer">
				<div class="copyright">
					<div class="container">
							<div class="clearfix">
								<a href="https://www.facebook.com/Troovami-1566517207012420/" class="pull-left social-icon social-icon-round social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="https://twitter.com/troovami" class="pull-left social-icon social-icon-round social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a href="https://www.instagram.com/troovami/?ref=badge" class="pull-left social-icon social-icon-round social-instagram" data-toggle="tooltip" data-placement="top" title="Instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>

							</div>

						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="#">Terminos y Condiciones</a></li>
							<li>&bull;</li>
							<li><a href="#">Privacidad</a></li>
						</ul>

						&copy; 2017 troovami.com
					</div>
				</div>

			</footer>
			<!-- /FOOTER -->


		<!-- SCROLL TO TOP -->
		<a href="shop-4col-right.html#" id="toTop"></a>

	<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = "{{ url ('assets/plugins/') }}";</script>

		<script type="text/javascript" src="{{ url ('assets/plugins/jquery/jquery-2.1.4.min.js') }}"></script>
		<script type="text/javascript" src="{{ url ('assets/js/scripts.js') }}"></script>
		
			



		<!-- PAGE LEVEL SCRIPTS -->
		<script type="text/javascript" src="{{ url ('assets/js/view/demo.shop.js') }}"></script>
		<script type="text/javascript" src="{{ url ('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ url ('js/jquery-ui.js') }}"></script>
		<script type="text/javascript" src="{{ url ('js/jquery-ui.min.js') }}"></script>
		<script type="text/javascript" src="{{ url ('js/functions.js') }}"></script>
		<script type="text/javascript" src="{{ url ('js/jquery.maskedinput.min.js') }}"></script>
		<script type="text/javascript" src="{{ url ('js/modal.js') }}"></script>
		<script type="text/javascript" src="{{ url ('js/favorito.js') }}"></script>

		<script type="text/javascript" src="{{ url ('assets/plugins/smoothscroll.js') }}"></script>
		<script type="text/javascript" src="{{ url ('assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
		<script type="text/javascript" src="{{ url ('assets/plugins/countdown/jquery.countdown.pack.min.js') }}"></script>

		
		
	 <script>
	$('.input-mask-date').mask('99/99/9999');
	$('.input-mask-phone').mask('(999) 999-9999');

			/* $(".comparar").click(function(){
			 	var item_id = jQuery(this).attr('data-item-id');

			 		$('#btn_comparar').attr('disabled', false);

			 			var calcular=document.getElementById('lista_producto').value;
						var calcular_medida=calcular.split(",");
						var calcular=calcular_medida.length;
						
						if (calcular==3){
							calcular_medida[2]=item_id;
						}
						if(calcular==1){
							calcular_medida[0]=item_id;
						}
						if(calcular==2){
							calcular_medida[1]=item_id;
						}
						if (calcular==2 || calcular==3){
							if((calcular_medida[0]== calcular_medida[1]) || 
							   (calcular_medida[1]== calcular_medida[2]) || 
							   (calcular_medida[2]== calcular_medida[0]))
							{
								$('#alerta').attr('hidden', false);
								var mensaje='No se permite comparar el mismo modelo';
								document.getElementById('informacion').innerHTML=mensaje;
								return;
							}
						}
						if (calcular<4){

						document.getElementById('count').innerHTML=calcular;
						document.getElementById('lista_producto').value = item_id + ','+ document.getElementById('lista_producto').value;
						$("#comparar"+item_id).css({'color':'#eee','font-size':'1.3em','background':'#328AE0'});
						}
						if (calcular >3){
								$('#alerta').attr('hidden', false);
								var mensaje='Puede comparar hasta 3 teléfonos a la vez';
								document.getElementById('informacion').innerHTML=mensaje;
								
						}
			 		
				});*/
				
			  $("#cerrar").click(function(){
			  	$('#alerta').attr('hidden', true);
			  	});

	function archivo(evt) {
      var files = evt.target.files; // FileList object
        //Obtenemos la imagen del campo "file". 
      for (var i = 0, f; f = files[i]; i++) {         
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
      
         var reader = new FileReader();
           
         reader.onload = (function(theFile) {
          return function(e) {
         // Creamos la imagen.
           document.getElementById("list").innerHTML = ['<img class="thumb" name="blb_img"  style="width:340;height: 290" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
           };
         })(f);
          reader.readAsDataURL(f);
       }
   	 var obj = document.getElementById('otro');
		obj.style.height = "0";
		obj.style.width = "0";
       document.getElementById("otro").style.visibility="hidden";
	}
             
      document.getElementById('files').addEventListener('change', archivo, false);
								 



   </script>