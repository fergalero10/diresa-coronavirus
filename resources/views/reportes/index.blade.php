@extends('layouts.app') @section('content')


<div class="container">
	<h2>
		Listado de Pacientes <a href="{{url('coronavirus/create')}}"><button
				type="button" class="btn btn-success float-right">Agregar</button></a>
	</h2>
	@if($search)
	<div class="alert alert-primary" role="alert">Los resultados para tu
		busqueda '{{$search}}' son:</div>
	@endif



	<div class="table-responsive">
		<table class="table table-striped table-condensed table-hover">
			<thead>
				<tr>
					<th scope="col">PACIENTE</th>
					<th scope="col">DNI</th>
					<th scope="col">CORREO</th>
					<th scope="col">CELULAR</th>
					<th scope="col">DIRECCION</th>
					<th scope="col">ESTABLECIMIENTO</th>
					<th scope="col">TOS</th>
					<th scope="col">FIEBRE</th>
					<th scope="col">DOLOR GARGANTA</th>
					<th scope="col">PAISES</th>
					<th scope="col">CONTACTO</th>

				</tr>
			</thead>
			<tbody>
				@foreach($pacientes as $paciente)
				<tr>
					<th>{{$paciente->NOMBRES}} {{$paciente->APELLIDOS}}</th>
					<td>{{$paciente->DNI}}</td>
					<td>{{$paciente->CORREO}}</td>
					<td>{{$paciente->CELULAR}}</td>
					<td>{{$paciente->DIRECCION}}</td>
					<td>{{$paciente->ESTABLECIMIENTO}}</td>
					<td>@if($paciente->TOS) Si @else No @endif</td>
					<td>@if($paciente->FIEBRE) Si @else No @endif</td>


					<td>@if($paciente->DOLOR_GARGANTA) Si @else No @endif</td>


					<td>
						<ul class="list-unstyled">
							@if($paciente->CHINA)
							<li>{{$paciente->CHINA}}</li> @endif @if($paciente->EEUU)
							<li>{{$paciente->EEUU}}</li> @endif @if($paciente->FRANCIA)
							<li>{{$paciente->FRANCIA}}</li> @endif @if($paciente->ALEMANIA)
							<li>{{$paciente->ALEMANIA}}</li> @endif @if($paciente->JAPON)
							<li>{{$paciente->JAPON}}</li> @endif @if($paciente->AUSTRALIA)
							<li>{{$paciente->AUSTRALIA}}</li> @endif @if($paciente->ECUADOR)
							<li>{{$paciente->ECUADOR}}</li> @endif @if($paciente->CANADA)
							<li>{{$paciente->CANADA}}</li> @endif @if($paciente->ESPANA)
							<li>{{$paciente->ESPANA}}</li> @endif @if($paciente->SUIZA)
							<li>{{$paciente->SUIZA}}</li> @endif @if($paciente->ITALIA)
							<li>{{$paciente->ITALIA}}</li> @endif
						</ul>



					</td>


					<td>@if($paciente->SI_CONTACTO) Si @else No @endif</td>
				</tr>
				<tr>@endforeach
			
			</tbody>
		</table>


	</div>

	{{$pacientes->render()}}

</div>

@endsection
