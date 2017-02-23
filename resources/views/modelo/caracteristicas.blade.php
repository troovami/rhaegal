@extends('layout')
  @section('titulo')
  {{$id->modelo->str_modelo}}
  @endsection
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
										<figure id="zoom-primary" width="15" height="18" class="zoom" data-mode="mouseover">
											

											<img class="img-responsive" style="width: 400; height: 450" src="{{ url ('imagenes/1000x1500/1.jpg')}}"   alt="This is the product title" />
										</figure>

									</div>

									<!-- Thumbnails (required height:100px) -->
									<div data-for="zoom-primary" class="zoom-more owl-carousel owl-padding-3 featured" data-plugin-options='{"singleItem": false, "autoPlay": false, "navigation": true, "pagination": false}'>
										<a class="thumbnail active" href="{{ url ('imagenes/1000x1500/1.jpg')}}">
											<img src="{{ url ('imagenes/100x100/1.jpg')}}" height="100" alt="" />
										</a>
										<a class="thumbnail" href="{{ url ('imagenes/1000x1500/2.png')}}">
											<img src="{{ url ('imagenes/100x100/2.png')}}" height="100" alt="" />
										</a>
										<a class="thumbnail" href="{{ url ('imagenes/3.jpg')}}">
											<img src="{{ url ('imagenes/100x100/3.jpg')}}" height="100" alt="" />
										</a>
										<a class="thumbnail" href="{{ url ('imagenes/4.jpg')}}">
											<img src="{{ url ('imagenes/100x100/4.jpg')}}" height="100" alt="" />
										</a>
										<a class="thumbnail" href="{{ url ('imagenes/5.jpg')}}">
											<img src="{{ url ('imagenes/100x100/5.jpg')}}" height="100" alt="" />
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
										
										<a class="btn btn-default" style="font-size:12;color: #827f7f;"  href="{{route('modelos.detalles',$id->id)}}" data-item-id="1" data-toggle="tooltip">COMPARAR</a>
									</div>
									<!-- /buttons -->
								
									
									<div class="shop-item-price">
										<a href="{{route ('modelos.precio', $id->id )}}" class="btn btn-3d btn-xs btn-reveal btn-yellow">
											<i class="fa fa-money"></i>
											<span>VER PRECIOS</span>
										</a> 
										
									</div>
									
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

								<!-- Favorito -->
						@if(isset(Auth::user()->id))
							@if (count($lng_idfavorito)>0)
 		
			                       <div id="fav_pub{{$id->id}}">
			                            <a class="btn btn-default" href="#" onclick="fav_eliminar({{ $id->id }})" data-item-id="{{ $id->id }}" title="Quitar de favoritos" data-toggle="tooltip"><i style="color: red" class="fa fa-heart nopadding"></i></a>

			                        </div>
	                                     		
	                         @else

	                                            	
	                        <div id="fav_pub{{$id->id}}">
	                          <a class="btn btn-default" href="#" onclick="fav({{ $id->id }})" title="Añadir a favoritos" data-item-id="{{ $id->id }}" data-toggle="tooltip"><i class="fa fa-heart nopadding"></i></a>
	                        </div>
	                                          	
	                        @endif
                        @endif

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


<div class="toggle toggle-transparent-body" style="background:#ebf3fc">
	@if (isset ($red))
	<div class="toggle active">
		<label><span>Operadoras</span></label>
		<div class="toggle-content">
			
				<?php $j='0'; $h='0'; ?>
						
			@foreach($red as $operadora)
			@if ($j==$operadora->str_operadora)
			
			@else
			<?php $j=$operadora->str_operadora ?>
				<br>{{$operadora->str_operadora}}
			@endif
				{{$operadora->str_especificaciones}}/{{$operadora->str_description}}
				Frecuencia {{$operadora->str_frecuecia}}
			
			@endforeach
			
											

		</div>
	</div>
	@endif
	<div class="toggle">
		<label>Ficha tecnica</label>
		<div class="toggle-content">
			<table class="table nomargin table-condensed">
									<tbody>

										<?php $i='0'; $k='0';?>
										@foreach ($id->valores_especificacion as $detalles)
											<tr>
												@if ($detalles->especificacion->str_especificacion==$i)
												
												<th style="color:black" ></th>
												@else
												<?php $i=$detalles->especificacion->str_especificacion; ?>
												<th style="color:black" ><span>{{$detalles->especificacion->
												str_especificacion}}</span></th>
												@endif
												@if ($detalles->str_titulo==$k)
												<th style="color:black" ></th>
												@else
												<?php $k=$detalles->str_titulo ?>
												<th><span>{{$detalles->str_titulo}}</span></th>
												@endif
												<td colspan="2">{{$detalles->str_descripcion}}</td>
											</tr>

										@endforeach
										</tbody>
									</table>
		</div>
	</div>


</div>


						<!-- end ficha tecnica -->
							<hr class="margin-top-80 margin-bottom-80" />


							<h2 class="owl-featured"><strong>Productos</strong> relacionados:</h2>
							<div class="owl-carousel featured nomargin owl-padding-10" data-plugin-options='{"singleItem": false, "items": "4", "stopOnHover":false, "autoPlay":4500, "autoHeight": false, "navigation": true, "pagination": false}'>

								<!-- item -->
								@foreach ($similares as $similitud)
								<div class="shop-item nomargin">

									<div class="thumbnail">
										<!-- product image(s) -->
										<a class="shop-item-image" href="shop-single-left.html">
											<img class="img-responsive" src="{{ url ('img/modelo_3.jpg')}}" alt="shop first image" />
										</a>
										<!-- /product image(s) -->
									</div>
									
									<div class="shop-item-summary text-center">
										<h2>{{$similitud->str_modelo}}</h2>
										
										<!-- rating -->
										<div class="shop-item-rating-line">
											<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
										</div>
										<!-- /rating -->

									</div>

										<!-- buttons -->
										<div class="shop-item-buttons text-center">
											<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
										</div>
										<!-- /buttons -->
								</div>
								<!-- /item -->
								@endforeach
							</div>

						</div>

						<div class="col-lg-3 col-md-3 col-sm-3">

						@include('marca/publicidad_derecha')
						</div>

					</div>
					
			<!-- / -->


					
  @endsection