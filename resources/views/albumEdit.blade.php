<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Album</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/edit.css">
  </head>
<body>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="/album">Ver Albums</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/album/create">Crear Album</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/genero">Ver Generos</a>
  </li>

</ul>
        <form method="POST" action="/album/{{$album->id}}" id="formulario">
			@csrf
			@method('patch')

			<div class="">
				<label for="nombre" class="form-label">Nombre</label>
				<input class="form-control" type="text" name="nombre" id="nombre" value="{{$album->nombre}}"/>
			</div>
			<div class="">
				<label for="banda" class="form-label">Banda</label>
				<input class="form-control" type="text" name="banda" id="banda" value="{{$album->banda}}">
			</div>
			<div class="">
				<label for="precio" class="form-label">Precio</label>
				<input class="form-control" type="text" name="precio" id="precio" value="{{$album->precio}}">
			</div>
			
            <div>
                <label for="generos">Generos</label>
                <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="generos[]" id="generos" multiple>
                    @foreach ($generos as $genero)
                        <option value="{{ $genero->id}}" @if ($album->generos->contains($genero->id)) selected @endif>
                            {{$genero->genero}}
                        </option>
                    
                    @endforeach
                </select>
            </div>
			
			<input class="btn btn-outline-primary" type="submit"  class="btn center" name="action" value="enviar">
		</form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>