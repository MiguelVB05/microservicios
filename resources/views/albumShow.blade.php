<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/index.css">
  </head>
<body>
<header>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link " href="/album">Ver Album</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/album/create">Crear Albums</a>
  </li> 
  <li class="nav-item">
    <a class="nav-link" href="/genero">Ver Generos</a>
  </li>
</ul>
</header>


<table class="table table-striped-columns">
  <thead>
    <tr class="table-info">
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Banda</th>
      <th scope="col">Generos</th>
      <th scope="col">#</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$album->nombre}}</th>
      <td>${{$album->precio}}</td>
      <td>{{$album->banda}}</td>
      <td>@foreach ($album->generos as $genero)
            <h5>{{$genero->genero}}</h5>
        @endforeach</td>
      <td><a class="btn btn-primary" href="/album/{{$album->id}}/edit">Modificar</a></td>
      <td><form method="POST" action="/album/{{$album->id}}" id="formulario">
			@csrf
			@method('DELETE')		
			<input class="btn btn-danger" type="submit"  name="action" value="Eliminar">
		</form>
    </td>
    </tr>
  </tbody>
</table>


		

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>