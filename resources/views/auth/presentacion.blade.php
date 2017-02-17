		<div class="testimonial testimonial-bordered">
			<figure class="pull-left">
			 @if (Auth::user()->blb_img != "")
				        <img class="rounded" src="data:image/jpeg;base64,{{ $user->blb_img }}" alt="" />
					@else
										
					@if (Auth::user()->lng_idgenero == 1)
						 <img class="rounded" src="{{ asset('img/user_masculino.png') }}">								  	
					@elseif (Auth::user()->lng_idgenero == 2)
						 <img class="rounded" src="{{ asset('img/usuario_femenino.png') }}">
						 @endif								
				
				    @endif
				
			</figure>
			<div class="testimonial-content">
				<strong>Usuario:</strong> {{$user->name}}<br>
				<strong>Pais:</strong> {{$user->pais->str_paises}}<br>
				<strong>Correo:</strong> {{$user->email}}<br>
				<strong>Telefono:</strong> {{$user->str_telefono}}<br><br>
				<cite>
					{{$user->str_nombre}} {{$user->str_apellido}}
				</cite>
			</div>
		</div>