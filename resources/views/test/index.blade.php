<!DOCTYPE html>
<html>
<head>
	<title>{{ $article->title}}</title>
<!--	<link rel="stylesheet" type="text/css" href="/css/general.css"> -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
</head>
<body>


	Hola Codigo Facilito


<br><br>
<h1>{{ $article->title }}</h1>
<hr>
{{ $article->content }}
<hr>
{{ $article->user->name }} |


</body>
</html>
