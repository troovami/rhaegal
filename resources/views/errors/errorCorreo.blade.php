@extends('layout')

@section('content')


        <div class="main" role="main">
        
        <div id="content" class="content full">
            <div class="container">
                <div class="row">

                    <div class="results-container">

                        <div class="results-container-in">
                                                     
                            <div id="results-holder" class="results-grid-view">
                               
							    <div class="main" role="main">
							        <div id="content" class="content full">
							            <div class="container">
							                <div class="text-align-center error-404">
							                    <h1 class=""><i class="fa fa-envelope" aria-hidden="true"></i> Error: Correo Electrónico</h1>
							                    La dirección de Correo Electrónico no se encuentra registrada en Troovami.com<br>
							                    
							                    <h1><i class="fa fa-frown-o"></i></h1>
							                    
							                    <p>
							                        <a href="{{ route('Auth.password') }}">
							                            <button type="button" class="btn btn-warning">Recuperar Clave</button>
							                        </a>
							                        <a href="{{ route('Auth.registrate') }}">
							                            <button type="button" class="btn btn-info">Registrarse</button>
							                        </a>

							                    </p>
							
							                </div>
							                <div class="spacer-30"></div>
							            </div>
							        </div>
							    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection