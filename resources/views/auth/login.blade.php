
	<div class="row" align="center">
	
		<div class="col-md-12 col-md-offset">
			<div class="panel panel-primary">
			<br>
				<div class="text-center" style="color:#337ab7;font-size:24;"><i class="glyphicon glyphicon-user"></i> Iniciar sesión<span class="close" style="color:#337ab7">×&nbsp;&nbsp;&nbsp;&nbsp;</span></div><hr>
				<div class="panel-body">
					

					
					 {!! Form::open(array('route' => 'Auth.ingreso', 'method' => 'POST', 'class'=>'form-horizontal') )!!}
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="col-md-8 col-md-offset-2">
						<div class="form-group">
						
							<div class="form-group has-feedback">
							    {!!  Form::text('email',  null, ['class' => 'form-control', 'type' => 'email','placeholder'=>'Correo'])  !!}
							    <i class="	glyphicon glyphicon-envelope form-control-feedback"></i>
							</div>
							</div>
						</div>

						<div class="col-md-8 col-md-offset-2">
						<div class="form-group">
							
							
							<div class="form-group has-feedback">
						    	{!! Form::password('password', ['class' => 'form-control', 'placeholder'=>'Contraseña']) !!}
						    	<i class="glyphicon glyphicon-lock form-control-feedback"></i>
							
							</div>
						</div>
						</div>
											<div class="row">

												<div class="col-md-6 col-sm-6 col-xs-6">
													
													<!-- Inform Tip -->                                        
													<div class="form-tip pt-20">
													<label class="inline">
                                                            <input type="checkbox" name="remember" class="ace" />
                                                            <span class="lbl" style="font-family: 'times new roman';"> Recordar</span>
                                                        </label>
													</div>
													
												</div>

												<div class="col-md-6 col-sm-6 col-xs-6 text-right">


                                                        <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                            <i class="ace-icon fa fa-key"></i>
                                                            <span class="bigger-110">Aceptar</span>
                                                        </button>

												</div>


                                           

                                            
                                        </div><!-- /.widget-main -->

                                       
                                    

											</div>
					{!! Form::close() !!}
			<div class="toolbar clearfix" style="background: #337ab7"><br>
                                            <div class="col-md-8">
                                                <a href="{{ route('Auth.password')}}" style="color: #FE9" data-target="#forgot-box" class="forgot-password-link">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    Recuperar contraseña
                                                </a>
                                            </div>

                                            <div class="col-md-4">
                                                <a href="{{ route('Auth.registrate')}}" style="color:#CF7" data-target="#signup-box" class="user-signup-link">
                                                    Registrarse
                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            </div><br><br>
                                        </div>
				</div>

			
			</div>
		</div>
	</div>
</div>
</div>