<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/index.css">
  </head>
<body>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/genero" style="background-color:#B82929">Ver Generos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/genero/create">Crear Genero</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/album">Ver Albums</a>
  </li>
</ul>
@if (session()->has('success'))
        <p>SI SE BORRO</p>
    @endif

    <h1 id="titulo">GENEROS</h1>
    <table class="table table-striped-columns">
        <thead>
              <tr>
                <th>ID</th>
                <th>Genero</th>
                <th>Ver</th>
              </tr>
        </thead>
        <tbody>
            @foreach ($generos as $genero)
                <tr>
                    <td>{{$genero->id}}</td>
                    <td>{{$genero->genero}}</td>
                    <td><a href="/genero/{{$genero->id}}" class="btn btn-primary">IR</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>