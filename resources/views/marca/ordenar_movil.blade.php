<div class="clearfix shop-list-options margin-bottom-20">

								<ul class="pagination nomargin pull-right">
									<li>
									 {!! $marcas->render() !!} 
								
									</li>
								</ul>

								<div class="options-left">
								
									<select>
										<option id="combo" value="{{ route('marcas.prueba',$id->id.'/desc/str_modelo')}}">Nombre: de Z a A</option>
										<option id="combo" value="{{ route('marcas.prueba',$id->id.'/asc/str_modelo')}}">Nombre: de A a Z</option>
										<option id="combo" value="{{ route('marcas.prueba',$id->id.'/asc/dbl_precio')}}">Ordenar por menor precio</option>
										<option value="{{ route('marcas.prueba',$id->id.'/desc/dbl_precio')}}">Ordenar por mayor precio</option>
									</select>
									
									<a class="btn active fa fa-th"><!-- grid --></a>
								
								</div>
							</div>
							<hr />
							<div class="alert alert-danger margin-bottom-30" id="alerta" hidden>
								<button type="button" id="cerrar" class="col-md-12 text-right">
									<span>X</span>
								</button>
								<span id="informacion"></span>

							</div>

							<div class="clearfix shop-list-options margin-bottom-20">
								<ul class="pagination nomargin pull-right">
								<input type="hidden" name="compare_product_list" id="lista_producto" value="">
								<button type="button" href="" class="btn btn-primary btn-3d" id="btn_comparar" disabled >Comparar (<span id='count'>0</span>)</button>
								</ul>
								
							</div>
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
						@if(isset(Auth::user()->id))
						@if (count(Auth::user()->favorito)>0)
                                            		
                       <div id="fav_pub{{$version->id}}">
                            <a class="btn btn-default"  onclick="fav_eliminar({{ $version->id }})" data-item-id="{{ $version->id }}" title="Quitar de favoritos" data-toggle="tooltip"><i style="color: red" class="fa fa-heart nopadding"></i></a>

                        </div>
                                            		
                         @else
                                            	
                        <div id="fav_pub{{$version->id}}">
                          <a class="btn btn-default" onclick="fav({{ $version->id}})" title="Añadir a favoritos" data-item-id="{{ $version->id }}" data-toggle="tooltip"><i class="fa fa-heart nopadding"></i></a>
                        </div>
                          @endif                	
                        @endif
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