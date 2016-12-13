@extends('layout')

  @section('content') 

					<div class="row">

						<!-- LEFT -->
						<div class="col-lg-9 col-md-9 col-sm-9">
@if ($cantidad>0)
							<!-- LIST OPTIONS -->
							<div class="clearfix shop-list-options margin-bottom-20">
								
								<ul class="pagination nomargin pull-right">
									<li>
									 {!! $marcas->render() !!} 
								
									</li>
									
								</ul>

								<div class="options-left">
									<select>
										<option value="pos_asc">Position ASC</option>
										<option value="pos_desc">Position DESC</option>
										<option value="name_asc">Name ASC</option>
										<option value="name_desc">Name DESC</option>
										<option value="price_asc">Price ASC</option>
										<option value="price_desc">Price DESC</option>
									</select>
									
								</div>

							</div>


							<!-- /LIST OPTIONS -->

							<ul class="shop-item-list row list-inline nomargin">
							@foreach ($marcas as $item)
								<li class="col-lg-3 col-sm-3">

									<div class="shop-item">
										
									
										<div class="thumbnail">
											<!-- product image(s) -->
											<a class="shop-item-image" href="{{ route('modelos.index', $item->id)}}">
												<!-- IMagen CAROUSEL -->
												<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3500, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
												<!-- <img class="img-responsive" src="{{ url ('assets/images/demo/shop/products/300x450/p5.jpg') }}" alt=""> -->
													<img class="img-responsive" src="{{ url ('Imagen-no-disponible-282x300.png') }}" alt="">
												</div>
												<!-- /CAROUSEL -->
											</a>
											<!-- /product image(s) -->

											<!-- carrito -->
											<div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
												<a class="btn btn-default add-wishlist" href="#" data-item-id="9" data-toggle="tooltip" title="Favoritos"><i class="fa fa-heart nopadding"></i></a>
												<a class="btn btn-default add-compare" href="#" data-item-id="9" data-toggle="tooltip" title="Agregar a comparar"><i class="fa fa-retweet" data-toggle="tooltip"></i></a>
											</div>
											<!--end carrito-->
										</div>
										
										<div class="shop-item-summary text-center">

											<h2>{{$item->str_modelo}}</h2>
											
											<!-- estrellas rating -->
											<div class="shop-item-rating-line">
												<div class="rating rating-1 size-13"><!-- rating-0 ... rating-5 --></div>
											</div>
											<!-- /estrellas rating -->

											<!-- price -->
											<div class="shop-item-price">
												{{$item->version[0]->precio[0]->dbl_precio}}
											</div>
											<!-- /price -->
										</div>

											<!-- buttons -->
											<div class="shop-item-buttons text-center">
												<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Agregar al carrito</a>
											</div>
											<!-- /buttons -->
										
									</div>
								
								</li>
								@endforeach
								<!-- /ITEM -->

							</ul>
							
							<hr />

							<!-- Pagination Default -->
							
							<div class="text-center">
							 <div class="pagination"> {!! $marcas->render() !!} </div>
							</div>
							<!-- /Pagination Default -->
							@else
							<div class="alert alert-danger margin-bottom-30"><!-- DANGER -->
								<span>No hay publicaciones que coincidan con tu búsqueda. </span>
							</div>
								
							@endif
						</div>


						<!-- RIGHT -->
						<div class="col-lg-3 col-md-3 col-sm-3">

						@include('marca/publicidad_derecha')
						</div>

					</div>
					
				
			<!-- / -->

			<!-- / -->

</div>

  @endsection

  
 
