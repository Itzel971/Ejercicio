<!Doctype html>
<html>
<head>
	<title>Curso de laravel</title>
</head>
<body>
  <ul>
  	
  	<li><a href="{{route('clientes')}}">Clientes</a></li>
  	<li><a href="{{route('dependencias.create')}}">Crear Depedencia</a></li>
  	<li><a href="{{route('dependencias.index')}}">Lista de Dependencia</a></li>
  </ul>
  @yield('contenido')//inserta la seccion de otra lista apartir de esta linea
</body>
</html>