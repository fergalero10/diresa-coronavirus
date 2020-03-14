@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Registro Coronavirus') }}</div>

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
						
						               <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Ingrese sus datos:</h5>
                                <p class="card-text">

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputNombre">Nombre</label>
                                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre') }}"  autocomplete="nombre" autofocus> 
                                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputApellido">Apellido</label>
                                            <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="apellido" name="apellido" value="{{ old('apellido') }}"  autocomplete="apellido" autofocus> @error('apellido')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputDni">DNI</label>
                                            <input type="text" class="form-control @error('dni') is-invalid @enderror" id="dni" name="dni" value="{{ old('dni') }}"  autocomplete="dni" autofocus> @error('dni')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus> @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputCelular">Celular</label>
                                            <input type="text" class="form-control @error('celular') is-invalid @enderror" id="celular" name="celular" value="{{ old('celular') }}"  autocomplete="celular" autofocus> @error('celular')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSalud">Establecimiento de salud mas cercano</label>
                                        <input type="text" class="form-control" id="establecimiento" name="establecimiento" placeholder="">
                                    </div>
                                    

                                </p>

                            </div>
                        </div>
						
						
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Marque si tiene:</h5>
                                <p class="card-text">
                                    <div class="form-row">

                                        <div class="col">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="tos" name="tos">
                                                <label class="custom-control-label" for="tos">TOS</label>

                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="form-control custom-control-input" id="fiebre" name="fiebre">
                                                <label class="custom-control-label" for="fiebre">FIEBRE</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="form-control custom-control-input" id="dolor" name="dolor">
                                                <label class="custom-control-label" for="dolor">DOLOR DE GARGANTA</label>
                                            </div>

                                        </div>
                                    </div>
                                </p>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">En los últimos 14 dias a viajado a:</h5>
                                <p class="card-text">

                                    <div class="form-row">

                                        <div class="col">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="china" name="china">
                                                <label class="custom-control-label" for="china">CHINA</label>

                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="form-control custom-control-input" id="eeuu" name="eeuu">
                                                <label class="custom-control-label" for="eeuu">EE.UU</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="form-control custom-control-input" id="francia" name="francia">
                                                <label class="custom-control-label" for="francia">FRANCIA</label>
                                            </div>

                                        </div>

                                        <div class="col">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="alemania" name="alemania">
                                                <label class="custom-control-label" for="alemania">ALEMANIA</label>

                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="japon" name="japon">
                                                <label class="custom-control-label" for="japon">JAPON</label>

                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="australia" name="australia">
                                                <label class="custom-control-label" for="australia">AUSTRALIA</label>

                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="ecuador" name="ecuador">
                                                <label class="custom-control-label" for="ecuador">ECUADOR</label>

                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="canada" name="canada">
                                                <label class="custom-control-label" for="canada">CANADA</label>

                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="espana" name="espana">
                                                <label class="custom-control-label" for="espana">ESPAÑA</label>

                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="suiza" name="suiza">
                                                <label class="custom-control-label" for="suiza">SUIZA</label>

                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="italia" name="italia">
                                                <label class="custom-control-label" for="italia">ITALIA</label>

                                            </div>
                                        </div>
                                    </div>

                                </p>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">A tenido contacto con algún paciente confirmado de CORONAVIRUS:</h5>
                                <p class="card-text">
                                    <div class="form-row">

                                        <div class="col">

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="SI">
                                                <label class="custom-control-label" for="customRadio1">Si</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="NO" checked>
                                                <label class="custom-control-label" for="customRadio2">No</label>
                                            </div>

                                        </div>

                                    </div>
									
									
                                </p>

                            </div>
                        </div>

         
<div class="form-group">
                           
                                <button type="submit" class="btn btn-success float-right">
                                    {{ __('Grabar Registro') }}
                                </button>
                            
                        </div>
                    </form>

                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection