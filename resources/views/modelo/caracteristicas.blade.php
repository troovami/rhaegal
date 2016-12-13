@extends('layout')

  @section('content') 

		<!-- RIGHT -->
						<div class="col-lg-9 col-md-9 col-sm-9">

							<div class="row">
							
								<!-- IMAGE -->
								<div class="col-lg-6 col-sm-6">
									
									<div class="thumbnail relative margin-bottom-3">

										<!-- 
											IMAGE ZOOM 
											
											data-mode="mouseover|grab|click|toggle"
										-->
										<figure id="zoom-primary" class="zoom" data-mode="mouseover">
											<!-- 
												zoom buttton
												
												positions available:
													.bottom-right
													.bottom-left
													.top-right
													.top-left
											-->
											<a class="lightbox bottom-right" href="{{ url ('assets/images/demo/shop/products/1000x1500/p5.jpg')}}" data-plugin-options='{"type":"image"}'><i class="glyphicon glyphicon-search"></i></a>

											<!-- 
												image 
												
												Extra: add .image-bw class to force black and white!
											-->
											<img class="img-responsive" src="{{ url ('assets/images/demo/shop/products/1000x1500/p5.jpg') }}" width="1200" height="1500" alt="This is the product title" />
										</figure>

									</div>

									<!-- Thumbnails (required height:100px) -->
									<div data-for="zoom-primary" class="zoom-more owl-carousel owl-padding-3 featured" data-plugin-options='{"singleItem": false, "autoPlay": false, "navigation": true, "pagination": false}'>
										<a class="thumbnail active" href="{{ url ('assets/images/demo/shop/products/1000x1500/p5.jpg')}}">
											<img src="{{ url ('assets/images/demo/shop/products/100x100/p5.jpg')}}" height="100" alt="" />
										</a>
										<a class="thumbnail" href="{{ url ('assets/images/demo/shop/products/1000x1500/p6.jpg')}}">
											<img src="{{ url ('assets/images/demo/shop/products/100x100/p6.jpg')}}" height="100" alt="" />
										</a>
										<a class="thumbnail" href="{{ url ('assets/images/demo/shop/products/1000x1500/p7.jpg')}}">
											<img src="{{ url ('assets/images/demo/shop/products/100x100/p7.jpg')}}" height="100" alt="" />
										</a>
										<a class="thumbnail" href="{{ url ('assets/images/demo/shop/products/1000x1500/p8.jpg')}}">
											<img src="{{ url ('assets/images/demo/shop/products/100x100/p8.jpg')}}" height="100" alt="" />
										</a>
										<a class="thumbnail" href="{{ url ('assets/images/demo/shop/products/1000x1500/p9.jpg')}}">
											<img src="{{ url ('assets/images/demo/shop/products/100x100/p9.jpg')}}" height="100" alt="" />
										</a>
										<a class="thumbnail" href="{{ url ('assets/images/demo/shop/products/1000x1500/p10.jpg')}}">
											<img src="{{ url ('assets/images/demo/shop/products/100x100/p10.jpg')}}" height="100" alt="" />
										</a>
										<a class="thumbnail" href="{{ url ('assets/images/demo/shop/products/1000x1500/p11.jpg')}}">
											<img src="{{ url ('assets/images/demo/shop/products/100x100/p11.jpg')}}" height="100" alt="" />
										</a>
									</div>
									<!-- /Thumbnails -->

								</div>
								<!-- /IMAGE -->

								<!-- ITEM DESC -->
								<div class="col-lg-6 col-sm-6">

									<!-- buttons -->
									<div class="pull-right">
										<!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
										<a class="btn btn-default add-wishlist" href="#" data-item-id="1" data-toggle="tooltip" title="Favorito"><i class="fa fa-heart nopadding"></i></a>
										<a class="btn btn-default add-compare" href="#" data-item-id="1" data-toggle="tooltip" title="Agregar a comparar"><i class="fa fa-retweet" data-toggle="tooltip"></i></a>
									</div>
									<!-- /buttons -->

									<!-- price -->
									<div class="shop-item-price">
										Precio: {{$id->precio[0]->dbl_precio}}
										
									</div>
									<!-- /price -->

									<hr />

									<div class="clearfix margin-bottom-30">
										<span class="pull-right text-success"><i class="fa fa-check"></i>Disponible</span>
										<!--
										<span class="pull-right text-danger"><i class="glyphicon glyphicon-remove"></i> Out of Stock</span>
										-->
										<strong>MARCA:</strong> {{$id->modelo->marca->str_marca}} <br>
										<strong>MODELO:</strong> {{$id->modelo->str_modelo}} <br>
										<strong>VERSION:</strong> {{$id->str_version}} 
										
									</div>


									<!-- short description -->
									<p>{{$detalles->str_detalle}}.</p>
									<!-- /short description -->

									<hr />

									<!-- FORM -->
									<form class="clearfix form-inline nomargin" method="get" action="shop-cart.html">


										<button class="btn btn-primary pull-left product-add-cart noradius">AGREGAR AL CARRITO</button>
									
									</form>
									<!-- /FORM -->


									<hr />

									<!-- Share -->
									<div class="pull-right">

										<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>

										<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>

										<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>

										<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
											<i class="icon-linkedin"></i>
											<i class="icon-linkedin"></i>
										</a>

									</div>
									<!-- /Share -->


									<!-- rating -->
									<div class="rating rating-4 size-13 margin-top-10 width-100"><!-- rating-0 ... rating-5 --></div>
									<!-- /rating -->

								</div>
								<!-- /ITEM DESC -->

							</div>

								<!-- REVIEWS -->
								<!-- ficha tecnica -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2 class="panel-title">Ficha tecnica</h2>
								</div>
								<div class="nopadding panel-body">
								<table class="table nomargin">
										<tbody>
										<?php $i='0'; ?>
										@foreach ($detalles->valores_especificacion as $detalles)
											<tr>
												@if ($detalles->especificacion->str_descripcion==$i)
												
												<th style="color:black" ></th>
												@else
												<?php $i=$detalles->especificacion->str_descripcion; ?>
												<th style="color:black" ><span>{{$detalles->especificacion->
												str_descripcion}}</span></th>
												@endif

												<th><span>{{$detalles->especificacion->str_especificacion}}</span></th>

												<td>{{$detalles->str_titulo}}</td>
											</tr>

										@endforeach
										</tbody>
									</table>

															
								</div>
						</div>
						<!-- end ficha tecnica -->
							<hr class="margin-top-80 margin-bottom-80" />


							<h2 class="owl-featured"><strong>Productos</strong> relacionados:</h2>
							<div class="owl-carousel featured nomargin owl-padding-10" data-plugin-options='{"singleItem": false, "items": "4", "stopOnHover":false, "autoPlay":4500, "autoHeight": false, "navigation": true, "pagination": false}'>

								<!-- item -->
								<div class="shop-item nomargin">

									<div class="thumbnail">
										<!-- product image(s) -->
										<a class="shop-item-image" href="shop-single-left.html">
											<img class="img-responsive" src="{{ url ('assets/images/demo/shop/products/300x450/p7.jpg')}}" alt="shop first image" />
										</a>
										<!-- /product image(s) -->
									</div>
									
									<div class="shop-item-summary text-center">
										<h2>Town Dress - Black</h2>
										
										<!-- rating -->
										<div class="shop-item-rating-line">
											<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
										</div>
										<!-- /rating -->

										<!-- price -->
										<div class="shop-item-price">
											$154.00
										</div>
										<!-- /price -->
									</div>

										<!-- buttons -->
										<div class="shop-item-buttons text-center">
											<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
										</div>
										<!-- /buttons -->
								</div>
								<!-- /item -->

							</div>

						</div>


						<!-- LEFT -->
						<div class="col-lg-3 col-md-3 col-sm-3">

							<!-- CATEGORIES -->
							<div class="side-nav margin-bottom-60">

								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>CATEGORIAS</h4>
								</div>

								<ul class="list-group list-group-bordered list-group-noicon uppercase">
									<li class="list-group-item">
										<a class="" href="#">Móviles</a>
									</li>
									<li class="list-group-item">
										<a class="" href="#">Tablet</a>
									</li>
									<li class="list-group-item">
										<a class="" href="#">Smartwatch</a>
									</li>
								</ul>

							</div>
							<!-- /CATEGORIES -->


							<!-- BANNER ROTATOR -->
							<div class="owl-carousel buttons-autohide controlls-over margin-bottom-60 text-center" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": true, "pagination": false, "transitionStyle":"fadeUp"}'>
								<a href="#">
									<img class="img-responsive" src="{{ url ('assets/images/demo/shop/banners/off_1.png')}}" width="270" height="350" alt="">
								</a>
								<a href="#">
									<img class="img-responsive" src="{{ url ('assets/images/demo/shop/banners/off_2.png')}}" width="270" height="350" alt="">
								</a>
							</div>
							<!-- /BANNER ROTATOR -->


							<!-- FEATURED -->
							<div class="margin-bottom-60">

								<h2 class="owl-featured">FEATURED</h2>
								<div class="owl-carousel featured" data-plugin-options='{"singleItem": true, "stopOnHover":false, "autoPlay":false, "autoHeight": false, "navigation": true, "pagination": false}'>
									
									<div><!-- SLIDE 1 -->
										<ul class="list-unstyled nomargin nopadding text-left">

											<li class="clearfix"><!-- item -->
												<div class="thumbnail featured clearfix pull-left">
													<a href="#">
														<img src="{{ url ('assets/images/demo/shop/products/100x100/p10.jpg')}}" width="80" height="80" alt="featured item">
													</a>
												</div>

												<a class="block size-12" href="#">Long Grey Dress - Special</a>
												<div class="rating rating-4 size-13 width-100 text-left"><!-- rating-0 ... rating-5 --></div>
												<div class="size-18 text-left">$132.00</div>
											</li><!-- /item -->

											<li class="clearfix"><!-- item -->
												<div class="thumbnail featured clearfix pull-left">
													<a href="#">
														<img src="{{ url ('assets/images/demo/shop/products/100x100/p2.jpg')}}" width="80" height="80" alt="featured item">
													</a>
												</div>

												<a class="block size-1" href="#">Black Fashion Hat</a>
												<div class="rating rating-4 size-13 width-100 text-left"><!-- rating-0 ... rating-5 --></div>
												<div class="size-18 text-left">$65.00</div>
											</li><!-- /item -->

											<li class="clearfix"><!-- item -->
												<div class="thumbnail featured clearfix pull-left">
													<a href="#">
														<img src="{{ url ('assets/images/demo/shop/products/100x100/p13.jpg')}}" width="80" height="80" alt="featured item">
													</a>
												</div>

												<a class="block size-1" href="#">Cotton 100% - Pink Dress</a>
												<div class="rating rating-4 size-13 width-100 text-left"><!-- rating-0 ... rating-5 --></div>
												<div class="size-18 text-left">$77.00</div>
											</li><!-- /item -->

										</ul>
									</div><!-- /SLIDE 1 -->

									<div><!-- SLIDE 2 -->
										<ul class="list-unstyled nomargin nopadding text-left">

											<li class="clearfix"><!-- item -->
												<div class="thumbnail featured clearfix pull-left">
													<a href="#">
														<img src="{{ url ('assets/images/demo/shop/products/100x100/p12.jpg')}}" width="80" height="80" alt="featured item">
													</a>
												</div>

												<a class="block size-12" href="#">Long Grey Dress - Special</a>
												<div class="rating rating-4 size-13 width-100 text-left"><!-- rating-0 ... rating-5 --></div>
												<div class="size-18 text-left">$132.00</div>
											</li><!-- /item -->

											<li class="clearfix"><!-- item -->
												<div class="thumbnail featured clearfix pull-left">
													<a href="#">
														<img src="{{ url ('assets/images/demo/shop/products/100x100/p6.jpg')}}" width="80" height="80" alt="featured item">
													</a>
												</div>

												<a class="block size-1" href="#">Black Fashion Hat</a>
												<div class="rating rating-4 size-13 width-100 text-left"><!-- rating-0 ... rating-5 --></div>
												<div class="size-18 text-left">$65.00</div>
											</li><!-- /item -->

											<li class="clearfix"><!-- item -->
												<div class="thumbnail featured clearfix pull-left">
													<a href="#">
														<img src="{{ url ('assets/images/demo/shop/products/100x100/p14.jpg')}}" width="80" height="80" alt="featured item">
													</a>
												</div>

												<a class="block size-1" href="#">Cotton 100% - Pink Dress</a>
												<div class="rating rating-4 size-13 width-100 text-left"><!-- rating-0 ... rating-5 --></div>
												<div class="size-18 text-left">$77.00</div>
											</li><!-- /item -->

										</ul>
									</div><!-- /SLIDE 2 -->

								</div>
							
							</div>
							<!-- /FEATURED -->


							<!-- HTML BLOCK -->
							<div class="margin-bottom-60">
								<h4>HTML BLOCK</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus eunit.</p>

								<form action="#" role="form" method="post">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
										<input type="email" name="email" class="form-control" placeholder="Enter your Email" required="required">
										<span class="input-group-btn">
											<button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-send"></i></button>
										</span>
									</div>
								</form>

							</div>
							<!-- /HTML BLOCK -->

						</div>

					</div>
					
			<!-- / -->


					
  @endsection