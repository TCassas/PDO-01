<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Buscar</h1>

  <form action="buscar.php" method="GET">
    <div style="display: flex;">
      <em>Tipo:</em>
      <div>
        <div>
          <input type="radio" name="tipo" value="movies" id="pelicula" required>
          <label for="pelicula">Pelicula</label>
        </div>
        <div>
          <input type="radio" name="tipo" value="series" id="serie" required>
          <label for="serie">Serie</label>
        </div>
      </div>
    </div>

    <br>

    <div>
      <label for="buscar">Buscar: </label>
      <input type="text" name="buscar" id="buscar" required><br>
    </div>

    <br>

    <input type="submit" name="" value="Enviar">
  </form>
  
</body>
</html>
