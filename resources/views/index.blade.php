@extends('layout')

@section('content')
	@if (count($errors) > 0)

		<div class="alert alert-mini alert-danger margin-bottom-30"><!-- SUCCESS -->
			<button type="button" class="close" data-dismiss="alert">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
			</button>
	Por favor corrige los siguientes errores:<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
</div>

						@endif
<!-- FEATURED GRID -->
			<section class="featured-grid"  style="top: -25px;">
				<div class="container">
					
					<div class="row">

						<div class="col-sm-6">
							<img src="assets/images/demo/shop/home/grid1.jpg" alt=""  />
							
						</div>

						<div class="col-sm-6">
							<div class="relative">
								<img src="assets/images/demo/shop/home/man_cat.jpg" alt="" />
							</div>

							<div class="relative">
								<img src="assets/images/demo/shop/home/woman_cat.jpg" alt="" />
							</div>
							
						</div>
						
					</div>

				</div>
			</section>
			<!-- /FEATURED GRID -->

			<!-- FEATURED -->
			<section>
				<div class="container">

					<div class="heading-title heading-dotted">
						<h2 class="size-20">LOS MÁS VENDIDOS</h2>
					</div>
					<div class="owl-carousel featured nomargin owl-padding-10" data-plugin-options='{"singleItem": false, "items": "4", "stopOnHover":false, "autoPlay":4000, "autoHeight": false, "navigation": true, "pagination": false}'>
					@foreach ($relevante as $vendido)

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="{{ route('modelos.mas_vendido', $vendido->version[0]->id)}}">
									<img class="img-responsive" width='150' height='80' src="{{ url ('img/modelo_3.jpg')}}" alt="">
								</a>
								<!-- /product image(s) -->

							</div>
							
							<div class="shop-item-summary text-center">
								<h2>{{$vendido->str_modelo}}</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									<h2>Versión {{$vendido->version[0]->str_version}}</h2>
								</div>
								<!-- /price -->
							</div>

								
						</div>
						<!-- /item -->

					@endforeach
					

					</div>

				</div>
			</section>
			<!-- /FEATURED -->

			</div>

			<!-- BANNER -->
			<section class="parallax parallax-2" style="background-image: url('assets/images/demo/particles_bg.jpg');padding: 80px!important;">
				<div class="overlay dark-1"><!-- dark overlay [0 to 9 opacity] --></div>

				<div class="container">



					<div class="owl-carousel text-center owl-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": true}'>
							
						<div class="text-center">
							<h3 class="nomargin">Los más vendidos</h3>
							<p class="font-lato weight-300 lead nomargin-top">Podras visualizar que producto han tenido mayor venta.</p>
						</div>

						<div class="text-center">
							<h3 class="nomargin">Publicaciones recientes</h3>
							<p class="font-lato weight-300 lead nomargin-top">Estaras al dia con las ventas de los equipos</p>
						</div>

					</div>


				</div>

			</section>
			<!-- /FIN BANNER -->

			<div class="container">
			<!-- NEW PRODUCTS -->
			<section>
				<div class="container">

					<div class="heading-title heading-dotted">
						<h2 class="size-20">PUBLICACIONES RECIENTES</h2>
					</div>
					


					<ul class="shop-item-list row list-inline nomargin">
						@foreach ($reciente as $item)
						<li class="col-lg-2 col-sm-4">

							<div class="shop-item">

								<div class="thumbnail noborder nopadding">
									<!-- product image(s) -->
									<a class="shop-item-image" href="{{ route('modelos.index', $item->lng_idversion_modelo)}}">
										<img class="img-responsive" width='100' height='100' src="{{ url ('img/modelo_3.jpg')}}" alt="" />
									</a>
									<!-- /product image(s) -->

									<!-- carrito -->
									<div class="shop-option-over">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
									</div>
									<!-- carrito -->

								</div>
								
								<div class="shop-item-summary text-center">
									<h2 class="size-14">{{$item->versionesmodelo->modelo->str_modelo}}</h2>
									<h2 class="size-14">Versión {{$item->versionesmodelo->str_version}}</h2>
									<!-- rating -->
									<div class="shop-item-rating-line">
										<div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
									</div>
									<!-- /rating -->

									<!-- price 
									<div class="shop-item-price">
										{{$item->dbl_precio}} Bs
									</div>
									<!-- /price -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->
						@endforeach
					</ul>

				</div>
			</section>
			<!-- NEW PRODUCTS -->

			<!-- BRANDS -->
			<section class="padding-xxs">
				<div class="container">
					<div class="text-center">
						<div class="owl-carousel nomargin" data-plugin-options='{"singleItem": false, "autoPlay": 3000}'>
						@foreach($menu as $logo)
							<div>
								<img class="img-responsive" src="data:image/jpeg;base64,{{ $logo->marca->blb_img}}" style="width: 150; height: 60">

							</div>
						@endforeach
						</div>
					</div>

				</div>
			</section>
			<!-- BRANDS -->

@endsection