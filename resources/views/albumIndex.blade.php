<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>

  <header>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/album" style="background-color:#B82929">Ver Album</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/album/create">Crear Albums</a>
  </li> 
  <li class="nav-item">
    <a class="nav-link" href="/genero">Ver Generos</a>
  </li>
</ul>
</header>

<main>
@if (session()->has('success'))
        <p>SI SE BORRO</p>
    @endif

    <h1 id="titulo">ALBUMS</h1>
    <table class="table table-striped-columns">
        <thead>
              <tr class="table-info">
                <th>ID</th>
                <th>Nombre</th>
                <th>Banda</th>
                <th>Precio</th>
                <th>Generos</th>
                <th>Ver</th>
              </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
                <tr>
                    <td>{{$album->id}}</td>
                    <td>{{$album->nombre}}</td>
                    <td>{{$album->banda}}</td>
                    <td>{{$album->precio}}</td>
                    <td>
                        @foreach ($album->generos as $genero)
                            {{$genero->genero}}<br>
                        @endforeach
                    </td>
                    <td><a href="/album/{{$album->id}}" class="btn btn-primary">IR</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </main>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>