<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Album</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/index.css">
  </head>
<body>
<ul class="nav nav-tabs" class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/album/create" style="background-color:#B82929">Crear Albums</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/album">Ver Albums</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/genero">Ver Generos</a>
  </li>
</ul>
<form method="POST" action="/album" id="formulario">
            @csrf
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input class="form-control" type="text" name="nombre" id="nombre"/>
            </div>
            <div class="mb-3">
                <label for="banda" class="form-label">Banda</label>
                <input class="form-control" type="text" name="banda" id="banda">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input class="form-control" type="text" name="precio" id="precio">
            </div>

            {{--Insercion--}}
            <div>
                <select class="form-select form-select-lg mb-3" aria-label="Large select example" id="generos" name="generos[]" multiple>
                    <option value="" selected>Selecciona un genero</option>
                    @foreach ($generos as $genero)
                    <option value="{{$genero->id}}">{{$genero->genero}}</option>
                    @endforeach
                </select>
            </div>
            <input class="btn btn-outline-primary" type="submit" name="action" value="enviar">
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>