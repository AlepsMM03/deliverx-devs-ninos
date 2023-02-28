<?php include "templates/navbar.php"?>
<?php 
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}
// Verificar el tipo de usuario
if ($_SESSION['user_type'] != 'i7t7Dn@tNTrJ!xTh') {
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Alta Productos</title>
</head>
<body>
<form class="col-md-5" action="alta_productos.php" method="post">
<h1 class="col-md-5" >Alta de Productos</h1>
  <div class="form-group">
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del producto">
  </div><br>
  <div class="form-group">
    <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingresa el precio del producto">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="agregar_productos">Agregar Producto</button>
</form>

</body>
</html>