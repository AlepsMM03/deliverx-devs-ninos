<?php

// Definir las credenciales de la base de datos
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'deliverx');

// Crear conexión a la base de datos
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificar si la conexión a la base de datos es exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
//define('DB_SERVER', '192.168.69.119');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', '1q2w3e4r5t');
//define('DB_NAME', 'tienda_dulces');
?>
