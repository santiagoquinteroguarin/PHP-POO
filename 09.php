<?php include 'includes/header.php';

// ? 1. Conectar a la BD con Mysqli.
$db = new mysqli('localhost', 'root', '', 'bienesraices_crud');

// ? 2. Creamos el query
$query = "SELECT titulo, imagen from propiedades";

// ? 3.  preparamos
$stmt = $db->prepare($query);

// ? 4. Lo ejecutamos
$stmt->execute();

// ? 5.  la variable
$stmt->bind_result($titulo, $imagen);

// ? 6. imprimir el resultado
while($stmt->fetch()):
    var_dump($titulo);
endwhile;

include 'includes/footer.php';