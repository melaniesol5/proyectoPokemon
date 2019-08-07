<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Pokemon Finder</title>
    <link href="https://fonts.googleapis.com/css?family=Ultra&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Freckle+Face&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
<body class="d-flex flex-column h-100">

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container ">
    <h1 class="col-md-12 mt-5 mb-5 text-center" style="font-family: 'Freckle Face', cursive; font-size: 110px;">Pokemon Finder</h1>
    
    <div  id="Busqueda" class="form-row">
    <p class="col-md-6 text-center">El que quiere Pokemon que los busque.</p>
    <form class="form-inline col-md-6 text-center" action="/search" method="get">
        <input class="form-control col-md-6" type="text" placeholder="Ingrese el nombre a buscar" name="param">
        <input class="btn btn-outline-danger ml-4 btn-lg" type="submit" value="Buscar">
    </form>
    </div>
  @if (isset($listOfPokemons))  
  @if (count($listOfPokemons)>0)
    <h3 class="lead mt-5 text-success">Resultados de la búsqueda: <h3>
    @else
    <h2 class="mt-5 text-danger"> No hay resultados para la búsqueda: {{$param}}</h2>	
   @endif
   <div>
   	 
  @foreach($listOfPokemons as $pokemon)

	<div class="border border-ligth d-inline-block mt-2 rounded mr-3 text-center" style="width:250px;">
		<div class="card-body">
		    <h5 class="card-title text-center" style="font-family: 'Ultra', serif;">{{$pokemon['nombre']}}</h5>
		</div>
		<img class="card-img-bottom" src="{{$pokemon['imagen_front']}}" alt={{$pokemon['nombre']}}>
		<p class="text-left d-inline" style="font-size: 20px; ">type:</p>
			@foreach ($pokemon['tipo'] as $tipo)
			 	<p class="d-inline" style="font-size: 14px;">{{$tipo->type->name}}</p>
			@endforeach
	  </div>

    @endforeach  
  @endif
  </div>
</main>

<footer class="footer mt-auto py-3">
  <div class="d-inline col-md-6">
    
    <span class=" text-muted text-center">Hecho por Melanie .</span>

  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>