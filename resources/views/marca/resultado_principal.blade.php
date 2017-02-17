@extends('layout')

  @section('content') 
					<div class="row">
						<div class="col-lg-9 col-md-9 col-sm-9">
						<!-- resultado de busqueda 1-->
				<!-- valida si existe informacion relacionada con la busqueda -->
				
			@if (count($dimension_color)>0)

							<div class="clearfix shop-list-options margin-bottom-20">
							<!-- paginado para resultados de busqueda -->
								
								<div class="pagination nomargin pull-right"> {!! $dimension_color->render() !!} </div>
							
								

							</div>

							
							<ul class="shop-item-list row list-inline nomargin">
						
							@foreach ($dimension_color as $item)
							@foreach ($item->version_modelo as $version)
							

								<li class="col-lg-3 col-sm-3">

									<div class="shop-item">
										
									
										<div class="thumbnail">
											<!-- product image(s) -->
											<a class="shop-item-image" href="{{ route('modelos.index', $version->id)}}">
												<!-- IMagen CAROUSEL -->
												<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3500, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
												<!-- <img class="img-responsive" src="{{ url ('assets/images/demo/shop/products/300x450/p5.jpg') }}" alt=""> -->
													<img class="img-responsive" width='150' height='150' src="{{ url ('img/modelo_3.jpg')}}" alt="">
												</div>
												<!-- /CAROUSEL -->
											</a>
											<!-- /product image(s) -->

											<!-- carrito -->
											<div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
								@if(isset(Auth::user()->id))
						<?php $favo=0; ?>
							@foreach ($version->favorito as $fav)
								@if($fav->usuario_social->lng_idpersona == Auth::user()->id)
									<?php $favo=1; break; ?>
								@endif
							@endforeach
								 @if ($favo==1)   		
			                       <div id="fav_pub{{$version->id}}">
			                            <a class="btn btn-default add-wishlist" href="#" onclick="fav_eliminar({{ $version->id }})" data-item-id="{{ $version->id }}" title="Quitar de favoritos" data-toggle="tooltip"><i style="color: red" class="fa fa-heart nopadding"></i></a>

			                        </div>
	                             @else  
	                             	 <div id="fav_pub{{$version->id}}">
	                          		<a class="btn btn-default add-wishlist" href="#" onclick="fav({{ $version->id}})" title="Añadir a favoritos" data-item-id="{{ $version->id }}" data-toggle="tooltip"><i class="fa fa-heart nopadding"></i></a>
	                       			 </div>  
	                       		 @endif   
	                      @endif 
											</div>
											<!--end carrito-->
										</div>
										
										<div class="shop-item-summary text-center">

											<h2>{{$version->modelo->str_modelo}}</h2>
											<h2>Versión {{$version->str_version}}</h2>
											
											<!-- estrellas rating -->
											<div class="shop-item-rating-line">
												<div class="rating rating-1 size-13"><!-- rating-0 ... rating-5 --></div>
											</div>
											<!-- /estrellas rating -->
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
							
							<hr />

							<!-- Pagination Default -->
							
							<div class="text-center">
							
								<div class="pagination"> {!! $dimension_color->render() !!} </div>
								
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

  
 
