<?php require_once "conecta_db.php";?>
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
    <title>Actualizar Producto</title>
</head>
<body>
    <table class="form-control">
    <h1 >Actualizar Productos</h1>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Actualizar</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                //consulta para obtener los productos de la tabla
                $query = "SELECT id, nombre, precio FROM dulces";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['precio'] ?></td>
                    <td>
                        <form class="form-control" action="actualizar.php" method="post">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
                            <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre'] ?>"><br>
                            <input type="text" class="form-control" name="precio" value="<?php echo $row['precio'] ?>"><br>
                            <input class="btn btn-success" type="submit" value="Actualizar" name="actualizar">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
