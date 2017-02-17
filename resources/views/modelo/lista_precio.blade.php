@extends('layout')
  @section('titulo')
  Lista de Precio
  @endsection
  @section('content') 

<div class="row">
	<div class="col-lg-9 col-md-9 col-sm-9">
	@if (count($precio)>0)
		<div class="row">

			<div class="col-md-4" style="width:150; height:150">
				<img class="img-responsive" src="{{ url ('img/modelo_3.jpg')}}" alt="">
			</div>
			<div class="col-md-8" style="font-size:24; color:#353535">
				<strong>{{$precio[0]->versionesmodelo->modelo->marca->str_marca}} {{$precio[0]->versionesmodelo->modelo->str_modelo}} 
				Versión {{$precio[0]->versionesmodelo->str_version}}</strong>
				<td colspan="2" class="text-center">
					<div class="rating rating-2 size-13"><!-- rating-0 ... rating-5 --></div>
				</td>
					<hr />
				
				<div class="pull-right">

					<a href="#" class="social-icon social-icon-round social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="#" class="social-icon social-icon-round social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>
											
					<a href="#" class="social-icon social-icon-round social-instagram" data-toggle="tooltip" data-placement="top" title="Instagram">
						<i class="icon-instagram"></i>
						<i class="icon-instagram"></i>
					</a>

				</div>
			
			</div>
		</div>
	<hr />

	<div class="clearfix shop-list-options margin-bottom-20">
	<!-- paginado para resultados de busqueda -->
		<ul class="pagination nomargin pull-right">
			<li>
				{!! $precio->render() !!} 					
			</li>
		</ul>
		<div class="options-left">
		@if(isset ($min) or isset($max))
			<select  id="ordenar" onclick="ordenar()">
				<option  id="ordenar"  value="{{$id_version}}/asc/dbl_precio?min={{$min}}&max={{$max}}">Ordenar por menor precio</option>
				<option  id="ordenar"  value="{{$id_version}}/desc/dbl_precio?min={{$min}}&max={{$max}}">Ordenar por mayor precio</option>
			</select>
		@else
			<select  id="ordenar" onclick="ordenar()">
				<option  id="ordenar"  value="{{$id_version}}/asc/dbl_precio">Ordenar por menor precio</option>
				<option  id="ordenar"  value="{{$id_version}}/desc/dbl_precio">Ordenar por mayor precio</option>
			</select>
			@endif						
		</div>
	</div>

<table class="table table-hover table-responsive">
	<tr>
		<td  style="color:#000">
		<strong> Precio </strong>
		</td>
		<td  style="color:#000">
		<strong> Condición </strong>
		</td>
		<td  style="color:#000">
		<strong> Publicado </strong>
		</td>
		<td  style="color:#000">
		<strong> Vendedor </strong>
		</td>
	</tr>
	
		@foreach ($precio as $version)
	<tr>
	<?php 
	$hoy1=explode("-", $version->usuario->created_at);
			if ($hoy1[1]==1){
			$hoy1[1]='Enero';
			}else if ($hoy1[1]==2){
				$hoy1[1]='Febrero';
			}else if ($hoy1[1]==3){
				$hoy1[1]='Marzo';
			}else if ($hoy1[1]==4){
				$hoy1[1]='Abril';
			}else if ($hoy1[1]==5){
				$hoy1[1]='Mayo';
			}else if ($hoy1[1]==6){
				$hoy1[1]='Junio';
			}else if ($hoy1[1]==7){
				$hoy1[1]='Julio';
			}else if ($hoy1[1]==8){
				$hoy1[1]='Agosto';
			}else if ($hoy1[1]==9){
				$hoy1[1]='Septiembre';
			}else if ($hoy1[1]==10){
				$hoy1[1]='Octubre';
			}else if ($hoy1[1]==11){
				$hoy1[1]='Noviembre';
			}else if ($hoy1[1]==12){
				$hoy1[1]='Diciembre';
			}
			$dia=explode(" ", $hoy1[2]);
	?>
			<td style="color:#7d0404">
			<strong> {{ $version->dbl_precio }}	$</strong>		
			</td>
			<td>
			<strong>{{ $version->str_detalle }}	</strong>		
			</td>
			<td>
			{{$dia[0]}} de {{$hoy1[1]}} {{$hoy1[0]}}
			</td>
			<td>
			Por: {{$version->usuario->str_nombre}} {{$version->usuario->str_apellido}}
			</td>
			<td>
			<button class="btn btn-primary pull-left product-add-cart noradius">AGREGAR AL CARRITO</button>
			</td>
	</tr>							
		@endforeach
	</tr>
</table>								

	<hr />
	<div class="text-center">					
		<div class="pagination"> {!! $precio->render() !!} </div>
	</div>
	</div>
	@else
	<div class="alert alert-danger margin-bottom-30"><!-- DANGER -->
		<span>No hay publicaciones que coincidan con tu búsqueda. </span>
	</div>
</div>	
	@endif		
	<div class="col-lg-3 col-md-3 col-sm-3">

	<div class="side-nav margin-bottom-30">
		<div class="side-nav-head">
			<h4>RANGO DE PRECIO</h4>
		</div>
		{!! Form::open(array('route' => array('modelos.precio',$id_version), 'method' => 'get') )!!}
		 <div class="row">
    		<div class=" col-md-3">
            <input type="text" id="min" name="min" class="form-control fa fa-dollar"  style="width:80px;height:35px" placeholder="Min" onKeyPress="return validarNu(event)" /> 
     		</div>
     		<div class="col-md-1">
     		&nbsp;&nbsp;&nbsp;&nbsp;-
     		</div>
    		 <div class="col-xs-3 col-md-3">
            <input type="text" id="max" name="max" class="form-control fa fa-dollar" style="width:80px;height:35px" placeholder="Max" onKeyPress="return validarNu(event)" /> 
   			 </div>
   			 <div class=" col-md-3">
   			<input type="submit"  class="btn btn-default" style="background:#ccc;width:40px;height:35px" value="Ir">
   			 </div>
		</div>
	{!! Form::close() !!}
	</div>
	
		@include('marca/publicidad_derecha')
	</div>
</div>
  @endsection

  
 
