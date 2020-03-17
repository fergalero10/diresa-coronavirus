<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>DIRESA</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="{{ asset('dist/js/adminlte.js')}}"></script>

<!-- Font Awesome Icons -->
<link rel="stylesheet"
	href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link
	href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
	rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- Custom -->

<link rel="stylesheet" href="{{ asset('dist/css/carmen/style.css')}}">
<link rel="stylesheet"
	href="{{ asset('dist/css/carmen/formulario.css')}}">

	<link rel="stylesheet"
	href="{{ asset('dist/css/carmen/prueba.css')}}">
<!--  
	<link rel="stylesheet"
	href="{{ asset('dist/css/carmen/step.css')}}">
	 <script type="text/javascript"  src="{{ asset('dist/css/carmen/step.js')}}"></script>
	  -->
<script>
      $(document).ready(function()
      {
         $("#mostrarmodal").modal({backdrop: 'static', keyboard: false});
         var current_fs, next_fs, previous_fs; //fieldsets
   	  var opacity;

   	  $(".next").click(function(){

   	  current_fs = $(this).parent();
   	  next_fs = $(this).parent().next();

   	  //Add Class Active
   	  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

   	  //show the next fieldset
   	  next_fs.show();
   	  //hide the current fieldset with style
   	  current_fs.animate({opacity: 0}, {
   	  step: function(now) {
   	  // for making fielset appear animation
   	  opacity = 1 - now;

   	  current_fs.css({
   	  'display': 'none',
   	  'position': 'relative'
   	  });
   	  next_fs.css({'opacity': opacity});
   	  },
   	  duration: 600
   	  });
   	  });

   	  $(".previous").click(function(){

   	  current_fs = $(this).parent();
   	  previous_fs = $(this).parent().prev();

   	  //Remove class active
   	  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

   	  //show the previous fieldset
   	  previous_fs.show();

   	  //hide the current fieldset with style
   	  current_fs.animate({opacity: 0}, {
   	  step: function(now) {
   	  // for making fielset appear animation
   	  opacity = 1 - now;

   	  current_fs.css({
   	  'display': 'none',
   	  'position': 'relative'
   	  });
   	  previous_fs.css({'opacity': opacity});
   	  },
   	  duration: 600
   	  });
   	  });

   	  $('.radio-group .radio').click(function(){
   	  $(this).parent().find('.radio').removeClass('selected');
   	  $(this).addClass('selected');
   	  });

   	  $(".submit").click(function(){
   	  return false;
   	  })
      });


</script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div id="app">
		<div class="wrapper">

			<!-- Navbar -->
			<nav
				class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Left navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" data-widget="pushmenu"
						href="#"><i class="fas fa-bars"></i></a></li>
				</ul>

				<!-- SEARCH FORM -->
				<form class="form-inline ml-3">
					<div class="input-group input-group-sm">
						<input class="form-control form-control-navbar" type="search"
							name="search" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<button class="btn btn-navbar" type="submit">
								<i class="fas fa-search"></i>
							</button>
						</div>
					</div>
				</form>



				<!-- Right navbar links -->
				<ul class="navbar-nav ml-auto">
					<!-- Messages Dropdown Menu -->
					<li class="nav-item dropdown">

						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

							<div class="dropdown-divider"></div>

							<div class="dropdown-divider"></div>

							<div class="dropdown-divider"></div>

						</div>
					</li>
					<!-- Notifications Dropdown Menu -->

				</ul>
			</nav>
			<!-- /.navbar -->

			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Brand Logo -->
				<a href="#" class="brand-link"> <img
					src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
					class="brand-image img-circle elevation-3" style="opacity: .8"> <span
					class="brand-text font-weight-light">DIRESA PIURA</span>
				</a>

				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user panel (optional) -->

					@if (auth()->check())
					<div class="user-panel mt-3 pb-3 mb-3 d-flex">

						<div class="image">
							<img src="{{asset('dist/img/user2-160x160.jpg')}}"
								class="img-circle elevation-2" alt="User Image">
						</div>

						<div class="info">


							<a href="#" class="d-block"> {{ Auth::user()->name }} </a>
						</div>

					</div>
					@endif
					<!-- Sidebar Menu -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column"
							data-widget="treeview" role="menu" data-accordion="false">
							<!-- 
							<li class="nav-item"><a href="{{url('home')}}"
								class="{{ Request::path() === 'home' ? 'nav-link active' : 'nav-link' }}">
									<i class="nav-icon fas fa-home"></i>
									<p>Inicio</p>
							</a></li>
							 -->


							<li class="nav-item"><a href="{{url('coronavirus')}}"
								class="{{ Request::path() === 'coronavirus' ? 'nav-link active' : 'nav-link' }}">
									<i class="nav-icon fas fa-book"></i>
									<p>Coronavirus</p>
							</a></li> @if (auth()->check())
							<li class="nav-item"><a href="{{url('usuarios')}}"
								class="{{ Request::path() === 'usuarios' ? 'nav-link active' : 'nav-link' }}">
									<i class="nav-icon fas fa-users"></i>
									<p>
										Usuarios <span class="right badge badge-danger">{{
											$users_count ?? '0' }}</span>
									</p>
							</a></li> @endif
							<li class="nav-item"><a href="{{url('reportes')}}"
								class="{{ Request::path() === 'reportes' ? 'nav-link active' : 'nav-link' }}">
									<i class="nav-icon fas fa-medkit"></i>
									<p>Reportes</p>
							</a></li>


							<li class="nav-item"><a
								href="https://api.whatsapp.com/send?phone=+51976777798"
								target="_blank"
								class="{{ Request::path() === 'reportessss' ? 'nav-link active' : 'nav-link' }}">
									<i class="nav-icon fas fa-phone"></i>
									<p>Comunicate con Nosotros</p>
							</a></li> @if (auth()->check())


							<li class="nav-item"><a href="{{ route('logout') }}"
								class="nav-link"
								onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
									<i class="nav-icon fas fa-sign-out"></i>
									<p>Cerrar Sesión</p>
									<form id="logout-form" action="{{ route('logout') }}"
										method="POST" style="display: none;">@csrf</form>
							</a></li> @endif


						</ul>
					</nav>
					<!-- /.sidebar-menu -->
				</div>
				<!-- /.sidebar -->
			</aside>

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<div class="content-header"></div>
				<!-- /.content-header -->

				<!-- Main content -->
				<section class="content">@yield('content')</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<footer class="main-footer">
				<!-- NO QUITAR -->
				<strong>DIRESA
					<div class="float-right d-none d-sm-inline-block">
						<b>Version</b> 1.0
					</div>
			
			</footer>

			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
			</aside>
			<!-- /.control-sidebar -->
		</div>
	</div>
</body>

</html>