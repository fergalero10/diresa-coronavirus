@extends('layouts.app') @section('content')
<div class="container">


	<section id="logo-section" class="text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="logo text-center">
						<h1 style="color: black;">
							<img src=""><font size="6">Registra tu estado de Salud ante el
								coronavirus</font>
						</h1>

					</div>
					<!--     <div style="color: red;"><b>ACTUALIZADO HASTA EL MES DE SETIEMBRE DEL 2019</b></div>-->

				</div>
			</div>
		</div>
	</section>




	<div class="row">
		<div class="col-md-12" align="center">
			<div class="well well-sm" align="center">
				<form method="POST" action="/coronavirus">
					@csrf
					<legend class="text-center header">Registre sus Datos</legend>

					<div class="row">
						<span class="col-md-1 col-md-offset-2 text-center"><i
							class="fa fa-pencil-square-o bigicon"></i></span>

						<p class="text-left header">Marque si tiene:</p>


					</div>

					<div class="form-group">
						<div class="row " align="center">

							<p>
								<input type="checkbox" name="TOS" value="TOS" id="checkbox1"
									style="position: absolute; left: -1000em;" class="form-input"
									required><label for="checkbox1">TOS</label>
							</p>


							<p>
								<input type="checkbox" name="FIEBRE" value="FIEBRE"
									id="checkbox2" style="position: absolute; left: -1000em;"
									class="form-input" required><label for="checkbox2">FIEBRE</label>
							</p>


							<p>
								<input type="checkbox" name="DOLOR" value="DOLOR" id="checkbox3"
									style="position: absolute; left: -1000em;" class="form-input"
									required><label for="checkbox3">DOLOR DE GARGANTA</label>
							</p>


						</div>
					</div>
					<div class="row">
						<span class="col-md-1 col-md-offset-2 text-center"><i
							class="fa fa-pencil-square-o bigicon"></i></span>
						<p class="text-left header">En los ultimos 14 dias a viajado a:</p>

					</div>

					<div class="row " align="center">




						<p>
							<input type="checkbox" name="CHINA" value="CHINA" id="checkbox4"
								style="position: absolute; left: -1000em;"><label
								for="checkbox4">CHINA</label>
						</p>

						<p>
							<input type="checkbox" name="EEUU" value="EEUU" id="checkbox5"
								style="position: absolute; left: -1000em;"><label
								for="checkbox5">EE.UU</label>
						</p>
						<p>
							<input type="checkbox" name="FRANCIA" value="FRANCIA"
								id="checkbox6" style="position: absolute; left: -1000em;"><label
								for="checkbox6">FRANCIA</label>
						</p>
						<p>
							<input type="checkbox" name="ALEMANIA" value="ALEMANIA"
								id="checkbox7" style="position: absolute; left: -1000em;"><label
								for="checkbox7">ALEMANIA</label>
						</p>
						<p>
							<input type="checkbox" name="JAPON" value="JAPON" id="checkbox8"
								style="position: absolute; left: -1000em;"><label
								for="checkbox8">JAPON</label>
						</p>
						<p>
							<input type="checkbox" name="AUSTRALIA" value="AUSTRALIA"
								id="checkbox9" style="position: absolute; left: -1000em;"><label
								for="checkbox9">AUSTRALIA</label>
						</p>
						<p>
							<input type="checkbox" name="ECUADOR" value="ECUADOR"
								id="checkbox10" style="position: absolute; left: -1000em;"><label
								for="checkbox10">ECUADOR</label>
						</p>
						<p>
							<input type="checkbox" name="CANADA" value="CANADA"
								id="checkbox11" style="position: absolute; left: -1000em;"><label
								for="checkbox11">CANADA</label>
						</p>
						<p>
							<input type="checkbox" name="ESPANA" value="ESPANA"
								id="checkbox12" style="position: absolute; left: -1000em;"><label
								for="checkbox12">ESPAÑA</label>
						</p>
						<p>
							<input type="checkbox" name="SUIZA" value="SUIZA" id="checkbox13"
								style="position: absolute; left: -1000em;"><label
								for="checkbox13">SUIZA</label>
						</p>
						<p>
							<input type="checkbox" name="ITALIA" value="ITALIA"
								id="checkbox14" style="position: absolute; left: -1000em;"><label
								for="checkbox14">ITALIA</label>
						</p>
					</div>

					<div class="row">
						<span class="col-md-1 col-md-offset-2 text-center"><i
							class="fa fa-pencil-square-o bigicon"></i></span>
						<p class="text-left header">A tenido contacto con algun paciente
							confirmado de CORONAVIRUS:</p>
					</div>
					<div class="row " align="center">



						<p>
							<input type="radio" name="SI" value="SI" id="checkbox15"
								style="position: absolute; left: -1000em;"><label
								for="checkbox15">SI</label>
						</p>
						<p>
							<input type="radio" name="NO" value="NO" id="checkbox16"
								style="position: absolute; left: -1000em;"><label
								for="checkbox16">NO</label>
						</p>


					</div>

					<legend class="text-left header">Ingrese sus datos:</legend>
					<div class="form-group">
						<div class="row">
							<span class="col-md-1 col-md-offset-2 text-center"><i
								class="fa fa-user bigicon"></i></span>
							<div class="col-md-10">
								<input type="text"
									class="form-control @error('nombre') is-invalid @enderror"
									id="nombre" name="nombre" value="{{ old('nombre') }}"
									autocomplete="nombre" autofocus> @error('nombre') <span
									class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
								</span> @enderror
							</div>

						</div>
					</div>


					<div class="form-group">
						<div class="row">
							<span class="col-md-1 col-md-offset-2 text-center"><i
								class="fa fa-user bigicon"></i></span>
							<div class="col-md-10">
								<input id="lname" name="APELLIDOS" type="text"
									placeholder="Apellidos" class="form-control">
							</div>
						</div>

					</div>
					<div class="form-group">
						<div class="row">
							<span class="col-md-1 col-md-offset-2 text-center"><i
								class="fa fa-book bigicon"></i></span>
							<div class="col-md-10">
								<input id="lname" name="DNI" type="text" placeholder="DNI"
									class="form-control">
							</div>
						</div>

					</div>

					<div class="form-group">
						<div class="row">
							<span class="col-md-1 col-md-offset-2 text-center"><i
								class="fa fa-envelope-o bigicon"></i></span>
							<div class="col-md-10">
								<input id="email" name="CORREO" type="text"
									placeholder="Correo electrónico" class="form-control">
							</div>
						</div>

					</div>

					<div class="form-group">
						<div class="row">
							<span class="col-md-1 col-md-offset-2 text-center"><i
								class="fa fa-phone-square bigicon"></i></span>
							<div class="col-md-10">
								<input id="phone" name="TELEFONO" type="text"
									placeholder="Celular" class="form-control">
							</div>
						</div>

					</div>

					<div class="form-group">
						<div class="row">
							<span class="col-md-1 col-md-offset-2 text-center"><i
								class="fa fa-pencil-square-o bigicon"></i></span>
							<!-- <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Establecimiento de Salud Mas cercano" rows="7"></textarea>
                            </div>-->
							<div class="col-md-10">
								<input id="Establecimiento" name="Establecimiento" type="text"
									placeholder="Establecimiento de Salud Mas cercano"
									class="form-control">
							</div>
						</div>

					</div>

					<div class="form-group">
						<div class="col-md-12 text-center">
							<button type="submit" class="btn btn-primary btn-lg form-btn">GRABAR
								DATOS</button>
						</div>
					</div>



				</form>
			</div>
		</div>
	</div>








</div>
@endsection
