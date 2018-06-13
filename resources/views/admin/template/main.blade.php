<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.min.css') }}">

</head>
<body class="admin-body">

	@include('admin.template.partials.nav')

<div class="container">	
	<section class="section-admin">
		<div class="panel panel-default">
			<div class="panel-heading">
				<br>
				<h1 class="panel-title" style="margin-left:15%">@yield('title')</h1>
			</div>
			<div class="panel-body" style="margin-left: 37%" ;><p>Panel de administración Usuarios</p></div>
			@include('flash::message')
			@include('admin.template.partials.errors')
			@yield('content')
		</div>
	</section>

			</div>
		</nav>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
	<footer class="admin-footer">
		<nav class="navbar navbar-default">
			<div class="collapse navbar-collapse">
				<p class="navbar-text">Todos los deechos reservados &copy {{ date('y')}} </p>
				<p></p>

	</footer>
</div>
  
			</div>
		</nav>

  <script src="{{ asset('plugins/bootstrap/js/jqury.min.js') }}"></script>
  <!-- <script src="{{ asset('plugins/jquery/js/jquery-3.2.1.slim.min.js') }}"></script> -->
  
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>
  <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
  <script src="{{ asset('plugins/trumbowyg/trumbowyg.min.js') }}"></script>



  @yield('js')
</body>
</html>