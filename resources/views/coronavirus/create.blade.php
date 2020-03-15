@extends('layouts.app') @section('content')

<div class="container">


	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">


				<div class="card-body">

					<form action="/coronavirus" method="POST">
						@csrf

						<!-- 
						@if($errors->any())
						  <div class="alert alert-danger">
                                        <ul>@foreach($errors->all() as $mensaje)
                                        <li>{{$errors}}</li>
                                        @endforeach
                                        </ul>
                                    </div>
						
						@endif
						 -->
						<legend class="text-center header">Registre sus Datos</legend>



						<div class="card">
							<div class="card-body">
								<div class="row">
									<span class="col-md-1 col-md-offset-2 text-center"><i
										class="fas fa-edit bigicon"></i></span>

									<p class="text-left header">Marque si tiene:</p>


								</div>

								<p class="card-text">
								
								
								<div class="form-row">

									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<p>
												<input type="checkbox"
													class="form-control custom-control-input" id="tos"
													name="tos"> <label for="tos">TOS</label>
											</p>
										</div>
									</div>
									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<p>
												<input type="checkbox"
													class="form-control custom-control-input" id="fiebre"
													name="fiebre"> <label for="fiebre">FIEBRE</label>
											</p>
										</div>
									</div>
									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<p>
												<input type="checkbox"
													class="form-control custom-control-input" id="dolor"
													name="dolor"> <label for="dolor">DOLOR DE GARGANTA</label>
											</p>
										</div>

									</div>



								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="row">
									<span class="col-md-1 col-md-offset-2 text-center"><i
										class="fas fa-edit bigicon"></i></span>
									<p class="text-left header">En los &uacuteltimos 14 dias a viajado a:</p>

								</div>

								<p class="card-text">
								
								
								<div class="form-row">

									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<p>
												<input type="checkbox" class="custom-control-input"
													id="china" name="china"> <label for="china">CHINA</label>
											</p>

										</div>
									</div>
									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<p>
												<input type="checkbox"
													class="form-control custom-control-input" id="eeuu"
													name="eeuu"> <label for="eeuu">EE.UU</label>
											</p>
										</div>
									</div>
									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<p>
												<input type="checkbox"
													class="form-control custom-control-input" id="francia"
													name="francia"> <label for="francia">FRANCIA</label>
											</p>
										</div>

									</div>

									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<p>
												<input type="checkbox" class="custom-control-input"
													id="alemania" name="alemania"> <label for="alemania">ALEMANIA</label>
											</p>

										</div>
									</div>

									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<p>
												<input type="checkbox" class="custom-control-input"
													id="japon" name="japon"> <label for="japon">JAPON</label>
											</p>

										</div>
									</div>

									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<p>
												<input type="checkbox" class="custom-control-input"
													id="australia" name="australia"> <label for="australia">AUSTRALIA</label>
											</p>

										</div>
									</div>
								</div>

								<div class="form-row">
									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<p>
												<input type="checkbox" class="custom-control-input"
													id="ecuador" name="ecuador"> <label for="ecuador">ECUADOR</label>
											</p>

										</div>
									</div>

									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<p>
												<input type="checkbox" class="custom-control-input"
													id="canada" name="canada"> <label for="canada">CANADA</label>
											</p>

										</div>
									</div>

									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<p>
												<input type="checkbox" class="custom-control-input"
													id="espana" name="espana"> <label for="espana">ESPAÃ‘A</label>
											</p>

										</div>
									</div>

									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<p>
												<input type="checkbox" class="custom-control-input"
													id="suiza" name="suiza"> <label for="suiza">SUIZA</label>
											</p>

										</div>
									</div>

									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<p>
												<input type="checkbox" class="custom-control-input"
													id="italia" name="italia"> <label for="italia">ITALIA</label>
											</p>

										</div>
									</div>
									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<p></p>

										</div>
									</div>
								</div>



							</div>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="row">
									<span class="col-md-1 col-md-offset-2 text-center"><i
										class="fas fa-edit bigicon"></i></span>
									<p class="text-left header">A tenido contacto con alg&uacuten
										paciente confirmado de CORONAVIRUS:</p>
								</div>
								<p class="card-text">
								
								
								<div class="form-row">

									<div class="col">

										<div class="custom-control custom-radio">
											<p>
												<input type="radio" id="customRadio1" name="customRadio"
													class="custom-control-input" value="SI"> <label
													for="customRadio1">Si</label>
											</p>
										</div>

										<div class="custom-control custom-radio">
											<p>
												<input type="radio" id="customRadio2" name="customRadio"
													class="custom-control-input" value="NO" checked> <label
													for="customRadio2">No</label>
											</p>
										</div>

									</div>

								</div>



							</div>
						</div>




						<div class="card">
							<div class="card-body">
								<div class="row">
									<span class="col-md-1 col-md-offset-2 text-center"><i
										class="fa fa-pencil-square-o bigicon"></i></span>
									<p class="text-left header">Ingrese sus datos:</p>
								</div>
								<p class="card-text">
								
								
								<div class="form-row">

									<span class="col-md-1 col-md-offset-2 text-center"><i
										class="fa fa-user bigicon"></i></span>
									<div class="form-group  col-md-10">
										<input type="text" placeholder="Nombres"
											class="form-control @error('nombre') is-invalid @enderror"
											id="nombre" name="nombre" value="{{ old('nombre') }}"
											autocomplete="nombre"> @error('nombre') <span
											class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
										</span> @enderror
									</div>


								</div>
								<div class="form-row">
									<span class="col-md-1 col-md-offset-2 text-center"><i
										class="fa fa-user bigicon"></i></span>
									<div class="form-group  col-md-10">
										<input type="text" placeholder="Apellidos"
											class="form-control @error('apellido') is-invalid @enderror"
											id="apellido" name="apellido" value="{{ old('apellido') }}"
											autocomplete="apellido"> @error('apellido') <span
											class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
										</span> @enderror
									</div>
								</div>

								<div class="form-row">
									<span class="col-md-1 col-md-offset-2 text-center"><i
										class="fas fa-map-marker-alt bigicon"></i></span>
									<div class="form-group  col-md-10">
										<input type="text" placeholder="direccion"
											class="form-control @error('direccion') is-invalid @enderror"
											id="direccion" name="direccion"
											value="{{ old('Escribenos') }}" autocomplete="Escribenos">
										@error('Escribenos') <span class="invalid-feedback"
											role="alert"> <strong>{{ $message }}</strong>
										</span> @enderror
									</div>
								</div>

								<div class="form-row">
									<span class="col-md-1 col-md-offset-2 text-center"><i
										class="fa fa-book bigicon"></i></span>
									<div class="form-group  col-md-10">
										<input type="text" placeholder="DNI"
											class="form-control @error('dni') is-invalid @enderror"
											id="dni" name="dni" value="{{ old('dni') }}"
											autocomplete="dni"> @error('dni') <span
											class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
										</span> @enderror
									</div>
								</div>


								<div class="form-row">
									<span class="col-md-1 col-md-offset-2 text-center"><i
										class="fas fa-envelope-square bigicon"></i></span>
									<div class="form-group col-md-10">
										<input type="email" placeholder="Correo electrónico"
											class="form-control @error('email') is-invalid @enderror"
											id="email" name="email" value="{{ old('email') }}"
											autocomplete="email"> @error('email') <span
											class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
										</span> @enderror
									</div>

								</div>
								<div class="form-row">
									<span class="col-md-1 col-md-offset-2 text-center"><i
										class="fa fa-phone-square bigicon"></i></span>
									<div class="form-group col-md-10">
										<input type="text" placeholder="Celular"
											class="form-control @error('celular') is-invalid @enderror"
											id="celular" name="celular" value="{{ old('celular') }}"
											autocomplete="celular"> @error('celular') <span
											class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
										</span> @enderror
									</div>
								</div>

								<div class="form-row">
									<span class="col-md-1 col-md-offset-2 text-center"><i
										class="fas fa-edit bigicon"></i></span>
									<div class="form-group col-md-10">

										<input type="text"
											placeholder="Establecimiento de Salud Mas cercano"
											class="form-control" id="establecimiento"
											name="establecimiento" placeholder="">
									</div>
								</div>




							</div>
						</div>



						<div class="form-group">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-success btn-lg form-btn">{{
									__('Grabar Registro') }}</button>
							</div>
						</div>
					</form>



				</div>
			</div>
		</div>
	</div>
</div>
@endsection
