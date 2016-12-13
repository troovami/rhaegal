<ul class="shop-item-list row list-inline nomargin">
							@foreach ($marcas as $item)
							@foreach ($item->version as $version)
								<li class="col-lg-3 col-sm-3">

									<div class="shop-item">

										<div class="thumbnail">
											<!-- product image(s) -->
											<a class="shop-item-image" href="{{ route('modelos.index', $version->id)}}">
												<img class="img-responsive" src="{{ url ('Imagen-no-disponible-282x300.png') }}" alt="shop first image" />
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

											
											<h2>Versión {{$version->str_version}}</h2>
											<!-- estrellas rating -->
											
											<div class="shop-item-rating-line">
												<div class="rating rating-1 size-13"><!-- rating-0 ... rating-5 --></div>
											</div>
											<!-- /estrellas rating -->

											<!-- price -->
											<div class="shop-item-price">
												{{$version->precio[0]->dbl_precio}}
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
								@endforeach
								<!-- /ITEM -->

							</ul>