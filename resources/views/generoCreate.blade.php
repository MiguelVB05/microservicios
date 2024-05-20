<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Genero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/create.css">
  </head>
<body>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/genero/create" style="background-color:#B82929">Crear Genero</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/genero">Ver Generos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/album">Ver Albums</a>
  </li>
</ul>

<form method="POST" action="/genero" id="formulario">
            @csrf
            
            <div class="mb-3">
                <label class="form-label" for="genero">Genero</label>
                <input class="form-control" type="text" name="genero" id="genero"/>
            </div>
            
            <input class="btn btn-outline-primary" type="submit" name="action" value="enviar">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>