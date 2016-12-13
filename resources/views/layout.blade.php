	<head>
		<meta charset="utf-8" />
		<title>Trovami</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		
		<!-- CORE CSS -->
		<link href="{{ url ('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="{{ url ('assets/css/essentials.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url ('assets/css/layout.css') }}" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="{{ url ('assets/css/header-1.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url ('assets/css/layout-shop.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url ('assets/css/color_scheme/green.css') }}" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>


		<div id="topBar">
				<div class="container">
					<ul class="top-links list-inline pull-right">
						<li class="text-welcome hidden-xs">Welcome to Smarty, <strong>John Doe</strong></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="shop-4col-right.html#"><i class="fa fa-user hidden-xs"></i> MY ACCOUNT</a>
							<ul class="dropdown-menu pull-right">
								<li><a tabindex="-1" href="shop-4col-right.html#"><i class="fa fa-history"></i> ORDER HISTORY</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="shop-4col-right.html#"><i class="fa fa-bookmark"></i> MY WISHLIST</a></li>
								<li><a tabindex="-1" href="shop-4col-right.html#"><i class="fa fa-edit"></i> MY REVIEWS</a></li>
								<li><a tabindex="-1" href="shop-4col-right.html#"><i class="fa fa-cog"></i> MY SETTINGS</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="shop-4col-right.html#"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
							</ul>
						</li>
						<li class="hidden-xs"><a href="page-login-1.html">LOGIN</a></li>
						<li class="hidden-xs"><a href="page-register-1.html">REGISTER</a></li>
					</ul>
				</div>
			</div>
			
			<div id="header" class="sticky clearfix">

				<!-- SEARCH HEADER -->
				<div class="search-box over-header">
					<a id="closeSearch"  class="glyphicon glyphicon-remove"></a>
					{!! Form::open(array('route' => 'modelos.busqueda', 'method'=>'get')) !!}
						{!! Form::text ('busqueda', null, ['class'=>'form-control','placeholder'=>'Buscar Modelo'])!!}
					
					{!! Form::close() !!}
				</div> 
				<!-- /SEARCH HEADER -->


				<!-- TOP NAV -->
				<header id="topNav">
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
																@foreach ($menu as $menu)
																<li><a href="{{ route('marcas.moviles', $menu[0]->marca->id)}}">{{$menu[0]->marca->str_marca}}</a></li>
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
				
			
			@if (isset ($id) and $id!='{id}')
			<section class="page-header page-header-xs">
				<div class="container">
				@if (isset($id->modelo))
				<h1>{{$id->modelo->str_modelo}}</h1>
				@else
					<h1>{{$id->str_marca}}</h1>
				@endif
				</div>
			</section>
			@endif

			<!-- CONTENT -->
			<section>
				<div class="container">
					 @yield('content')
				</div>
			</section>
			<!-- CONTENT -->




			<!-- FOOTER -->
			<footer id="footer">
				<div class="copyright">
					<div class="container">
							<div class="clearfix">
								<a href="#" class="pull-left social-icon social-icon-round social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="#" class="pull-left social-icon social-icon-round social-gplus" data-toggle="tooltip" data-placement="top" title="Google+">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>
								<a href="#" class="pull-left social-icon social-icon-round social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a href="#" class="pull-left social-icon social-icon-round social-instagram" data-toggle="tooltip" data-placement="top" title="Instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>

							</div>

						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="shop-4col-right.html#">Terms &amp; Conditions</a></li>
							<li>&bull;</li>
							<li><a href="shop-4col-right.html#">Privacy</a></li>
						</ul>

						&copy; All Rights Reserved, Company LTD
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
		<script type="text/javascript" src="{{ url ('assets/plugins/smoothscroll.js') }}"></script>
		<script type="text/javascript" src="{{ url ('assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
		<script type="text/javascript" src="{{ url ('assets/plugins/countdown/jquery.countdown.pack.min.js') }}"></script>
		
		
	 <script>
		
			 $("#combo").click(function(){

				 $.get(document.getElementById("combo").value, function(data){
            		$("#pruebas").html(data);
        										});
										 });


			 $(".comparar").click(function(){
			 	var item_id = jQuery(this).attr('data-item-id');
			 
			 		$('#btn_comparar').attr('disabled', false);

			 			var calcular=document.getElementById('lista_producto').value;
						var calcular=calcular.split(",");
						var calcular=calcular.length;
						if (calcular<4){
						document.getElementById('count').innerHTML=calcular;
						document.getElementById('lista_producto').value = item_id + ','+ document.getElementById('lista_producto').value;
						}
						if (calcular >3){
								$('#alerta').attr('hidden', false);
								var mensaje='Puede comparar hasta 3 teléfonos a la vez';
								document.getElementById('prueba').innerHTML=mensaje;
							//alert('Puede comparar hasta 3 teléfonos a la vez.');
						}

			 		$('#lista_producto').attr('disabled', false);
				});
										 



   </script>