@extends('layouts.app')

@section('content')


<div class="container">
<h2>Listado de Pacientes <a href="coronavirus/create"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>
@if($search)
<div class="alert alert-primary" role="alert">
  Los resultados para tu busqueda '{{$search}}' son:
</div>
@endif
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Paciente</th>
      <th scope="col">DNI</th>
      <th scope="col">CORREO</th>
      <th scope="col">CELULAR</th>
      <th scope="col">ESTABLECIMIENTO</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($pacientes as $paciente)
    <tr>
      <th scope="row">{{$paciente->NOMBRES}} {{$paciente->APELLIDOS}}</th>
      <td>{{$paciente->DNI}}</td>
      <td>{{$paciente->CORREO}}</td>
      <td>{{$paciente->CELULAR}}</td>
      <td>{{$paciente->ESTABLECIMIENTO}}</td>
    </tr>
    <tr>
   @endforeach
  </tbody>
</table>
</div>



@endsection