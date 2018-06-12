<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}">
</head>
<body class="admin-body">

	@include('admin.template.partials.nav')


<div class="container">	
	<section class="section-admin">
		<div class="panel panel-default">
			<div class="panel-heading">
				<br>
				<h1 class="panel-title" style="margin-left: 35%">@yield('title')</h1>
			</div>
			<div class="panel-body" style="margin-left: 37%" ;><p>Panel de administración Usuarios</p></div>
			@include('flash::message')
			@include('admin.template.partials.errors')
			@yield('content')
		</div>
	</section>
</div>
  
  <script src="{{ asset('plugins/jquery/js/jquery-3.2.1.slim.min.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>

</body>
</html>