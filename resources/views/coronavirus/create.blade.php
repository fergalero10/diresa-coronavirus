@extends('layouts.app') @section('content')


<div class="container">
	<div class="jumbotron">
		<div class="row justify-content-center">
			<h1 class="display-5">¿Estoy en riesgo de haber contraído el
				coronavirus COVID-19?</h1>

		</div>
		<hr class="my-4">
		<form id="msform" action="/coronavirus" method="POST">
			@csrf
			<fieldset>
				<div class="form-card">
					<h2 class="fs-title">¿C&oacutemo te sientes?</h2>
					<div class="radio-group">
						<div class='radio' data-value="credit">

							<img src="{{asset('dist/img/feliz.png')}}" width="150px"
								height="150px">
						</div>
						<div class='radio' data-value="paypal">
							<img src="{{asset('dist/img/enfermo.png')}}" width="150px"
								height="150px">
						</div>
						<br>
					</div>

				</div>
				<input type="button" name="next" class="next action-button"
					value="CONTINUAR" />
			</fieldset>

			<fieldset>
				<div class="form-card">


					<h2 class="fs-title">Marque si tiene</h2>

					<div class="form-row">

						<div class="col">
							<div class="custom-control custom-checkbox mb-3">
								<p>
									<input type="checkbox"
										class="form-control custom-control-input" id="tos" name="tos">
									<label for="tos">TOS</label>
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
				<input type="button" name="previous"
					class="previous action-button-previous" value="ANTERIOR" /> <input
					type="button" name="next" class="next action-button"
					value="CONTINUAR" />
			</fieldset>


			<fieldset>
				<div class="form-card">


					<h2 class="fs-title">En los &uacuteltimos 14 dias a viajado a:</h2>

					<div class="form-row">

						<div class="col">
							<div class="custom-control custom-checkbox mb-3">
								<p>
									<input type="checkbox" class="custom-control-input" id="china"
										name="china"> <label for="china">CHINA</label>
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
									<input type="checkbox" class="custom-control-input" id="japon"
										name="japon"> <label for="japon">JAPON</label>
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
									<input type="checkbox" class="custom-control-input" id="canada"
										name="canada"> <label for="canada">CANADA</label>
								</p>

							</div>
						</div>

						<div class="col">
							<div class="custom-control custom-checkbox mb-3">
								<p>
									<input type="checkbox" class="custom-control-input" id="espana"
										name="espana"> <label for="espana">ESPAÑA</label>
								</p>

							</div>
						</div>

						<div class="col">
							<div class="custom-control custom-checkbox mb-3">
								<p>
									<input type="checkbox" class="custom-control-input" id="suiza"
										name="suiza"> <label for="suiza">SUIZA</label>
								</p>

							</div>
						</div>

						<div class="col">
							<div class="custom-control custom-checkbox mb-3">
								<p>
									<input type="checkbox" class="custom-control-input" id="italia"
										name="italia"> <label for="italia">ITALIA</label>
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
				<input type="button" name="previous"
					class="previous action-button-previous" value="ANTERIOR" /> <input
					type="button" name="next" class="next action-button"
					value="CONTINUAR" />
			</fieldset>


			<fieldset>
				<div class="form-card">


					<h2 class="fs-title">A tenido contacto con alg&uacuten paciente
						confirmado de CORONAVIRUS:</h2>

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
				<input type="button" name="previous"
					class="previous action-button-previous" value="ANTERIOR" /> <input
					type="button" name="next" class="next action-button"
					value="CONTINUAR" />
			</fieldset>

			<fieldset>
				<div class="form-card">


					<h2 class="fs-title">Ingrese sus datos:</h2>
					<br>

					<div class="form-row">

						<span class="col-md-1 col-md-offset-2 text-center"><i
							class="fa fa-user bigicon"></i></span>
						<div class="form-group  col-md-10">
							<input type="text" placeholder="Nombres" maxlength="100"
								class="form-control @error('nombre') is-invalid @enderror"
								required id="nombre" name="nombre" value="{{ old('nombre') }}"
								autocomplete="nombre"> @error('nombre') <span
								class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
							</span> @enderror
						</div>


					</div>

					<div class="form-row">
						<span class="col-md-1 col-md-offset-2 text-center"><i
							class="fa fa-user bigicon"></i></span>
						<div class="form-group  col-md-10">
							<input type="text" placeholder="Apellidos" maxlength="100"
								class="form-control @error('apellido') is-invalid @enderror"
								required id="apellido" name="apellido"
								value="{{ old('apellido') }}" autocomplete="apellido">
							@error('apellido') <span class="invalid-feedback" role="alert"> <strong>{{
									$message }}</strong>
							</span> @enderror
						</div>
					</div>

					<div class="form-row">
						<span class="col-md-1 col-md-offset-2 text-center"><i
							class="fas fa-map-marker-alt bigicon"></i></span>
						<div class="form-group  col-md-10">
							<input type="text" placeholder="direccion" maxlength="450"
								class="form-control @error('direccion') is-invalid @enderror"
								required id="direccion" name="direccion"
								value="{{ old('Escribenos') }}" autocomplete="Escribenos">
							@error('Escribenos') <span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span> @enderror
						</div>
					</div>

					<div class="form-row">
						<span class="col-md-1 col-md-offset-2 text-center"><i
							class="fa fa-book bigicon"></i></span>
						<div class="form-group  col-md-10">
							<input type="text" placeholder="DNI" maxlength="8" min="8"
								class="form-control @error('dni') is-invalid @enderror" id="dni"
								required name="dni" value="{{ old('dni') }}" autocomplete="dni">
							@error('dni') <span class="invalid-feedback" role="alert"> <strong>{{
									$message }}</strong>
							</span> @enderror
						</div>
					</div>


					<div class="form-row">
						<span class="col-md-1 col-md-offset-2 text-center"><i
							class="fas fa-envelope-square bigicon"></i></span>
						<div class="form-group col-md-10">
							<input type="email" placeholder="Correo"
								class="form-control @error('email') is-invalid @enderror"
								id="email" name="email" value="{{ old('email') }}"
								autocomplete="email" required> @error('email') <span
								class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
							</span> @enderror
						</div>

					</div>


					<div class="form-row">
						<span class="col-md-1 col-md-offset-2 text-center"><i
							class="fa fa-phone-square bigicon"></i></span>
						<div class="form-group col-md-10">
							<input type="text" placeholder="Celular" maxlength="9" min="9"
								class="form-control @error('celular') is-invalid @enderror"
								id="celular" name="celular" value="{{ old('celular') }}"
								required autocomplete="celular"> @error('celular') <span
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
								class="form-control" id="establecimiento" name="establecimiento"
								placeholder="">
						</div>
					</div>





				</div>
				<input type="button" name="previous"
					class="previous action-button-previous" value="ANTERIOR" /> <input
					type="submit" class="action-button" value="FINALIZAR" />
			</fieldset>

		</form>
	</div>
</div>

@endsection
