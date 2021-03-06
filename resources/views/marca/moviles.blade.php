@extends('layout')
  @section('titulo')
  {{$id->str_marca}}
  @endsection 
  @section('content') 

        @if($id=='{id}')
	  imagenes por categoria
	   @else 
				<div class="row">

						<!-- LEFT -->
						<div class="col-lg-9 col-md-9 col-sm-9">


							<!-- INICIO CAROUSEL -->
							<div class="owl-carousel buttons-autohide controlls-over margin-bottom-30 radius-4" data-plugin-options='{"singleItem": true, "autoPlay": 6000, "navigation": true, "pagination": true, "transitionStyle":"fade"}'>
								<!-- item -->
								<div>
									<div class="caption-slider-default">
										<div class="display-table">
											<div class="display-table-cell vertical-align-middle">
												<div class="caption-container text-left">
													<h2>SHOP <strong>NOW</strong> &ndash; 50% OFF</h2>
													<p>
														This is a category banner rotator<br />
														for any category of your shop.
													</p>
												</div>
											</div>
										</div>
									</div>

									<img class="img-responsive radius-4" src="{{ url ('assets/images/demo/shop/banners/top_2.png') }}" width="851" height="335" alt="">
								</div>
								<!-- /item -->

								<!-- item -->
								<div>

									<div class="caption-slider-default">
										<div class="display-table">
											<div class="display-table-cell vertical-align-middle">
												<div class="caption-container text-left">
													<h2>LOREM IPSUM <strong>DOLOR</strong></h2>
													<p>
														Unlimited designs, unlimited combinations <br />
														imagination is the limit!
													</p>
												</div>
											</div>
										</div>
									</div>

									<img class="img-responsive radius-4" src="{{ url ('assets/images/demo/shop/banners/top_1.png') }}" width="851" height="335" alt="">
								</div>
								<!-- /item -->

							</div>
							<!-- FIN CAROUSEL -->


							<!-- LIST OPTIONS -->
							<div id="pruebas">
							<div class="clearfix shop-list-options margin-bottom-20">

								<ul class="pagination nomargin pull-right">
									<li>
									 {!! $marcas->render() !!} 
								
									</li>
								</ul>

								<div class="options-left">
								{!! Form::open(array('route' => 'modelos.autocomplet', 'method' => 'post') )!!}
									<select id="combo" onclick="myFunction()">
										<option id="combo"  value="{{$id->id}}/asc/str_modelo">Nombre: de A a Z</option>
										<option id="combo" value="{{$id->id}}/desc/str_modelo">Nombre: de Z a A</option>
									</select>
									<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
									<a class="btn active fa fa-th"><!-- grid --></a>
								{!! Form::close() !!}
								</div>
							</div>
							<hr />
							<div class="alert alert-danger margin-bottom-30" id="alerta" hidden>
								<button type="button" id="cerrar" class="col-md-12 text-right">
									<span>X</span>
								</button>
								<span id="informacion"></span>

							</div>
							 
							<!-- /LIST OPTIONS -->
							
							<ul class="shop-item-list row list-inline nomargin">
							@foreach ($marcas as $item)
							@foreach ($item->version as $version)
							
								<li class="col-lg-3 col-sm-3">


									<div class="shop-item">

										<div class="thumbnail">
											<!-- product image(s) -->
										<a class="shop-item-image" href="{{ route('modelos.index', $version->id)}}">
												<!-- IMagen CAROUSEL -->
												<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3500, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
													<img class="img-responsive"  width='80' height='80' src="{{ url ('img/modelo_3.jpg')}}" alt="">
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
											<h2>{{$item->str_modelo}}</h2>

											
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
							</div>
							<hr />
							<div class="text-center">
							 <div class="pagination"> {!! $marcas->render() !!} </div>
							</div>
							

						</div>


						<!-- RIGHT -->
									
						<div class="col-lg-3 col-md-3 col-sm-3">

						@include('marca/publicidad_derecha')
						</div>

					</div>
					
				
			<!-- / -->

			<!-- / -->

</div>
					
				
		
@endif

  
  @endsection

 
