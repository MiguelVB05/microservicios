<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genero</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="/css/show.css">
</head>
<body>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="/genero/create">Crear Genero</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/genero">Ver Generos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/album">Ver Albums</a>
  </li>
</ul>

    <table class="table table-striped-columns">
  <thead>
    <tr class="table-info">
      <th scope="col">Genero</th>
      <th scope="col">#</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$genero->genero}}</th>
      <td><a class="btn btn-primary" href="/genero/{{$genero->id}}/edit">Modificar</a></td>
      <td><form method="POST" action="/genero/{{$genero->id}}" id="formulario">
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