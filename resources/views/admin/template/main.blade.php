<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
@include('admin.template.partials.nav')
	<section>
		@yield('content')
	</section>
  
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/popper.js') }}"></script>
  <script src="{{ asset('plugins/jquery/js/jquery-3.2.1.slim.min.js') }}"></script>

</body>
</html>