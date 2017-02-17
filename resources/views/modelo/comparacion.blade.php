@extends('layout')
  @section('titulo')
 Comparación
  @endsection
  @section('content') 

  
<div class="table-responsive">
{!! Form::open(array('route' => 'modelos.autocomplet', 'method' => 'post') )!!}
	<table class="table table-condensed table-hover table-bordered">
		<tbody>
			<!-- IMAGE -->
			<tr>
				<!-- title -->
				<td colspan="2"></td>
				<!-- PRODUCTO 1 -->
				<td class="text-center" width='316' height='258'>
				<!-- color a div-->
					<div style="background:#EBF3FC">
						<div  style="font-size:12;"> 
							<label>COMPARAR CON</label>
						</div>
						<!-- envia la busqueda del autocompletar -->
						<div  id="buscador">
							<input type="search" style="width:230px;" data-token="{{ csrf_token() }}" name="autocomplete" class="input-sm" placeholder="Indique un modelo" />
							<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
						</div>
						<!-- recibe la busqueda -->
						<div class="col-md-3 col-md-offset"  id="busqueda" style="position: absolute; z-index:25;">
						</div>
					<br>
					</div>
					<br>
				<!-- determinar que exista la variable -->
				@if (!empty($detalles_comp))
				<input type="hidden" name="valor1" value="{{$detalles_comp->id}}" id="id1">
					<a class="shop-compare-item" href="shop-single-left.html">
						<strong>{{$detalles_comp->modelo->str_modelo}}</strong>
						<strong>Versión {{$detalles_comp->str_version}}</strong><br>
						<img class="img-responsive" src="{{ url ('img/modelo_1.jpg')}}" width='150' height='150' />
					</a>
				@endif
				</td>
				
				<!-- PRODUCTO 2 -->
				<td class="text-center" width='316' height='258'>
					<div style="background:#EBF3FC">
						<div  style="font-size:12;"> 
							<label>COMPARAR CON</label>
						</div>
						<div  id="buscador">
							<input type="search" style="width:230px;" data-token="{{ csrf_token() }}" name="autocompletar" class="input-sm" placeholder="Indique un modelo" />
							<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
						</div>
						<div class="col-md-3 col-md-offset"  id="busquedas" style="position: absolute; z-index:25;"> 
						</div>
				<br>
					</div>
				<br>
				@if (!empty($detalles_compa))
				<input type="hidden" name="valor2" value="{{$detalles_compa->id}}" id="id2">
					<a class="shop-compare-item" href="shop-single-left.html">
						<strong>{{$detalles_compa->modelo->str_modelo}}</strong>
						<strong>Versión {{$detalles_compa->str_version}}</strong><br>
						<img class="img-responsive" src="{{ url ('img/modelo_2.jpg')}}" width='150' height='150' />
						
					</a>
				@endif
				</td>

				<!-- PRODUCTO 3 -->
				<td class="text-center" width='316' height='258'>
				<div style="background:#EBF3FC">
					<div  style="font-size:12;"> 
						<b><label>COMPARAR CON</label></b>
					</div>
					<div  id="buscador">
						<input type="search" style="width:230px;" data-token="{{ csrf_token() }}" name="autocompletado" class="input-sm" placeholder="Indique un modelo" />
						<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
					</div>
					<div class="col-md-3 col-md-offset"  id="busqued" style="position: absolute; z-index:25;">
					</div>
				<br>
				</div>
				<br>
				@if (!empty($detalles_compar))
				<input type="hidden" name="valor3" value="{{$detalles_compar->id}}" id="id3">
					<a class="shop-compare-item" href="shop-single-left.html">
						<strong>{{$detalles_compar->modelo->str_modelo}}</strong>
						<strong>Versión {{$detalles_compar->str_version}}</strong><br>
						<img class="img-responsive" src="{{ url ('img/modelo_3.jpg')}}" width='150' height='150' />
						
					</a>
				@endif
				</td>
			</tr>			
				<!-- RATING -->
			<tr>
				<!-- title -->
				<td class="text-right shop-compare-title" style="color:#328AE0"><strong>CALIFICACIÓN</strong></td>
				
				<!-- rating product 1 -->
				<td colspan="2" class="text-center">
					<div class="rating rating-2 size-13"><!-- rating-0 ... rating-5 --></div>
				</td>
				
				<!-- RATING product 2 -->
				<td class="text-center">
					<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
				</td>
				<!-- RATING product 3 -->
				<td class="text-center">
					<div class="rating rating-0 size-13"><!-- rating-0 ... rating-5 --></div>
				</td>
			</tr>
			<!-- Especificaciones -->
			<?php $i='0'; $valor1=0; $valor2=0; $valor3=0;?>
			@for($j=0; $j< count($columna_distinta); $j++)
			<?php
			if (!empty($detalles_comp)) {
				// se cuenta de acuerdo al modelo cuantas caracteristicas posee
			$calculo1=((count($detalles_comp->valores_especificacion))-1);
			}if (!empty($detalles_compa)) {
			$calculo2=((count($detalles_compa->valores_especificacion))-1);
			}if (!empty($detalles_compar)) {
			$calculo3=((count($detalles_compar->valores_especificacion))-1);
			}
			?>
			<tr>
			<!-- para evitar q duplique las especificaciones valido -->
			@if ($columna_distinta[$j]->str_especificacion==$i)
				<td class="text-right shop-compare-title"></td>
			@else

			<?php $i=$columna_distinta[$j]->str_especificacion; ?>
				<td class="text-right shop-compare-title" style="color:#328AE0"><strong>{{strtoupper($columna_distinta[$j]->str_especificacion)}}</strong></td>
			@endif


				<td style="font-size:12; color:#4E4C4C" class="text-center"><strong>{{$columna_distinta[$j]->str_titulo}}</strong></td>
				<!-- determino si ha sido seleccionado -->

				@if (!empty($detalles_comp))
				<!-- valido si el telefono posee esa caracteristica-->
					@if ($columna_distinta[$j]->str_titulo==$detalles_comp->valores_especificacion[$valor1]->str_titulo)
				
						<td style="font-size:12; color:#4E4C4C" >
							{{$detalles_comp->valores_especificacion[$valor1]->str_descripcion}}
						</td>
						@if($calculo1>$valor1)
						<?php $valor1++; ?>
						@endif

					@else
					<td></td>
					@endif
				@else
				<td></td>
				@endif
				
				@if (!empty($detalles_compa))
					<!-- valido si el telefono posee esa caracteristica-->
					@if ($columna_distinta[$j]->str_titulo==$detalles_compa->valores_especificacion[$valor2]->str_titulo)
					
						<td style="font-size:12; color:#4E4C4C" >
							{{$detalles_compa->valores_especificacion[$valor2]->str_descripcion}}
						</td>
						@if($calculo2>$valor2)
						<?php $valor2++; ?>
						@endif

					@else
					<td></td>
					@endif
				@else
				<td></td>
				@endif

				@if (!empty($detalles_compar))
					<!-- valido si el telefono posee esa caracteristica-->
					@if ($columna_distinta[$j]->str_titulo==$detalles_compar->valores_especificacion[$valor3]->str_titulo)
					
						<td style="font-size:12; color:#4E4C4C" >
							{{$detalles_compar->valores_especificacion[$valor3]->str_descripcion}}
						</td>
						@if($calculo3>$valor3)
						<?php $valor3++; ?>
						@endif

					@else
					<td></td>
					@endif
				@else
				<td></td>
				@endif
				
			</tr>
			@endfor









			<!-- CARRITO 
			<tr class="text-center">
				
				<td class="text-right shop-compare-title"></td>
				
				
				<td>
					<a class="btn btn-default nomargin" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
				</td>
				
				
				<td>
					<span class="out-of-stock text-warning margin-top-6">out of stock</span>
				</td>
				
				<td>
					<a class="btn btn-default nomargin" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
				</td>
			</tr>
			<!-- END CARRITO -->
		</tbody>
	</table>
</div>

  @endsection