<div class="side-nav margin-bottom-60">

								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>CATEGORIAS</h4>
								</div>

								<ul class="list-group list-group-bordered list-group-noicon uppercase">
									<li class="list-group-item">
										<a class="" href="{{ route('modelos.categoria', 713)}}">Móviles</a>
									</li>
									<li class="list-group-item">
										<a class="" href="{{ route('modelos.categoria', 714)}}">Tablet</a>
									</li>
									<li class="list-group-item">
										<a class="" href="{{ route('modelos.categoria', 715)}}">Smartwatch</a>
									</li>
								</ul>

							</div>
							<!-- /CATEGORIES -->

							<!-- COLOR -->
							<div class="margin-bottom-60">
								<h4>COLOR</h4>
								@foreach ($color as $colors)
								<a class="tag shop-color" href="{{ route('modelos.colores', $colors->str_descripcion)}}" style="background-color:{{ $colors->str_caracteristica }}" title="{{ $colors->str_descripcion }}"></a>
		
								@endforeach

								<hr />
								@if(isset($dimension_color))
								@foreach ($dimension_color as $item)
								<div class="clearfix size-12">
									<a class="pull-right" href="#"></a>
									COLOR SELECCIONADO: <span>{{$item->str_titulo}}</span>
								</div>
									@endforeach
								@endif
							</div>
							<!-- /COLOR -->

							<!-- BANNER ROTATOR -->
							<div class="owl-carousel buttons-autohide controlls-over margin-bottom-60 text-center" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": true, "pagination": false, "transitionStyle":"goDown"}'>
								<a href="#">
									<img class="img-responsive" src="{{ url ('assets/images/demo/shop/banners/off_1.png') }}" width="270" height="350" alt="">
								</a>
								<a href="#">
									<img class="img-responsive" src="{{ url ('assets/images/demo/shop/banners/off_2.png') }}" width="270" height="350" alt="">
								</a>
							</div>
							<!-- /BANNER ROTATOR -->


							<!-- mas vendido -->
							@if(isset($relevante))
							<div class="margin-bottom-60">

								<h2 class="owl-featured">LOS MÁS VENDIDOS</h2>
								<div class="owl-carousel featured" data-plugin-options='{"singleItem": true, "stopOnHover":false, "autoPlay":false, "autoHeight": false, "navigation": true, "pagination": false}'>
									
									<div><!-- imagenes de mas vendido 1er0-->
										<ul class="list-unstyled nomargin nopadding text-left">
										<?php $i=1;?>
											@foreach ($relevante as $vendido)
											<li class="clearfix"><!-- item -->
												<div class="thumbnail featured clearfix pull-left">
													<a href="{{ route('modelos.mas_vendido', $vendido->version[0]->id)}}">
														<img src="{{ url ('img/modelo_3.jpg')}}" width="80" height="80" alt="featured item">
													</a>
												</div>

												<a class="block size-12" href="{{ route('modelos.mas_vendido', $vendido->version[0]->id)}}">{{$vendido->str_modelo}}</a>
												<div class="rating rating-4 size-13 width-100 text-left"><!-- rating-0 ... rating-5 --></div>
												<div class="size-18 text-left">Versión {{$vendido->version[0]->str_version}}</div>
											</li><!-- /item -->
											@if($i==3)
											</ul>
										</div>
										<div> <!-- imagenes de mas vendido 2do-->
										<ul class="list-unstyled nomargin nopadding text-left">
											@endif
											<?php $i++; ?>
											@endforeach
										</ul>
									</div>

								</div>
							</div>
							@endif
							<!-- /mas vendido -->


							<!-- HTML BLOCK -->
							<div class="margin-bottom-60">
								<h4>HTML BLOCK</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus eunit.</p>

								<form action="#" role="form" method="post">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
										<input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
										<span class="input-group-btn">
											<button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-send"></i></button>
										</span>
									</div>
								</form>

							</div>
							<!-- /HTML BLOCK -->