<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/home.css') }}" rel="stylesheet">
	<link href="{{ asset('css/productos.css') }}" rel="stylesheet">
	<link href="{{ asset('css/shop-homepage.css') }}" rel="stylesheet">
	{{-- Iconos FONT --}}
	<script src="https://kit.fontawesome.com/9f3c14b92e.js" crossorigin="anonymous"></script>
</head>

<body>
	<header>
			<nav class="color navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
					<!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"> -->
					<div class="container"> <a class="navbar-brand" href="{{ url('/') }}">
							{{ config('app.name', 'Laravel') }}
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"> <span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarResponsive">
								<ul class="navbar-nav ml-auto">					 
								  <li class="nav-item">
									<a class="nav-link" href="https://www.facebook.com/MumukiStore"><i class="fab fa-facebook fa-2x"></i></a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="https://www.twitter.com/MumukiStore"><i class="fab fa-twitter fa-2x"></i></a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="https://www.instagram.com/MumukiStore"><i class="fab fa-instagram fa-2x "></i></a>
								  </li>
						
								  <!-- ESTOS li SON SOLO DE ESPACIOS ENNTRE LOS ICONOS -->
								  <li class="nav-item  ">
									<a class="nav-link" href="./cart.php"><i class="fas fa-cart-plus fa-2x d-none"></i></a>
								  </li>
						
								  <li class="nav-item  ">
									<a class="nav-link" href="./cart.php"><i class="fas fa-cart-plus fa-2x d-none"></i></a>
								  </li>
								  <li class="nav-item  ">
									<a class="nav-link" href="./cart.php"><i class="fas fa-cart-plus fa-2x d-none"></i></a>
								  </li>
								  
								  <li class="nav-item">
									<a class="nav-link" href="/cart"><i class="fas fa-cart-arrow-down fa-2x"></i></a>	
								  </li>
								</ul>
							  </div>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							
							<!-- Left Side Of Navbar -->
							<ul class="navbar-nav mr-auto"></ul>
							<!-- Right Side Of Navbar -->
							<ul class="navbar-nav ml-auto">
								<!-- Authentication Links -->@guest
								<li class="nav-item"> <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
								</li>@if (Route::has('register'))
								<li class="nav-item"> <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
								</li>@endif @else
								<li class="nav-item dropdown"> <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->name }} <span class="caret"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();">
											{{ __('Salir') }}
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
									</div>
								</li>@endguest</ul>
						</div>
					</div>
				</nav>
	</header>
	<div class="container">
		<div class="row">
		
					<div class="col-lg-3">
							<h1 class="my-4">Tienda Virtual</h1>
							<!--Navbar-->
							<nav class="navbar navbar-light light-blue lighten-4">
								<!-- Navbar brand --><a class="navbar-brand d-lg-none" href="#">Menu</a>
								<!-- Collapse button -->
								<button class="navbar-toggler toggler-example d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text">
										<iclass="fas fa-bars fa-1x"></i>
									</span></button>
								<!-- Collapsible content -->
								<div class="collapse navbar-collapse d-lg-block" id="navbarSupportedContent1">
									<!-- Links -->
									<ul class="navbar-nav mr-auto">
										<li class="nav-item"> <a class="nav-link" href="/home">Home </a> </li>
										<li class="nav-item"> <a class="nav-link" href="/product/list">Productos</a> </li>
										<li class="nav-item"> <a class="nav-link" href="/faq">FAQ's</a> </li>
										@auth
										<li class="nav-item"> <a class="nav-link" href="/account">Cuenta</a> </li>
										<li class="nav-item"> <a class="nav-link" href="/product">Alta de Producto</a> </li>
										@endauth
										@guest
										<li class="nav-item"> <a class="nav-link" href="./register">Registro</a> </li>
										<li class="nav-item"> <a class="nav-link" href="./login">Iniciar Sesión</a> </li>
										@endguest
										<li class="nav-item"> <a class="nav-link" href="/contact">Contacto</a> </li>										
									</ul>
								</div>
							</nav>
						</div>
			
						<div class="col-lg-9 col-md-6 mb-4">
				<div class="row">
					<div class="my-4 col-lg-12 col-md-6 mb-4">
						<!-- ACA VA TODO EL CODIGO  -->
						@yield('content')
						<!-- ACA VA TODO EL CODIGO  -->
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<footer class="fixed-bottom bg-dark">
		<div id="icolor">
			<i class="fab fa-cc-visa fa-3x "></i>
			<i class="fab fa-cc-mastercard fa-3x "></i>
			<i class="fab fa-cc-amex fa-3x "></i>
			<i class="fab fa-cc-paypal fa-3x "></i>
		</div>
		   
		<div class="container">
			<p class="m-0 text-center text-white">Copyright © Los Mumuki 2019</p>   
		</div>
	</footer> 
</body>

</html>