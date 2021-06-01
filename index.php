<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Busquda por codigo</title>

  <style>
    .result {
      display: none;
    }
    .active {
      display: flex;
    }
  </style>
</head>
<body>
  <form id="form-search" autocomplete="off">
    <label for="codigo">Código</label>
    <input type="text" id="codigo" name="codigo">
    <button type="submit">Buscar</button>
  </form>

  <section class="result">
    <p class='info'>Resultado de la busqueda.</p>
  </section>

  <script src="./main.js"></script>
</body>
</html>