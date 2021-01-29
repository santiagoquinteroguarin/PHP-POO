<?php include 'includes/header.php';

// ? 1. Conectar a la BD con PDO
$db = new PDO('mysql:host=localhost; dbname=real_estate', 'root', '');

// ? 2. Creamos el query
$query = "SELECT title, image from properties";

// ? 3. Lo preparamos
$stmt = $db->prepare($query);

// ? 4. Lo ejecutamos
$stmt->execute();

// ? 5. Obtener los resultados
$resultado = $stmt->fetchAll( PDO::FETCH_ASSOC );

// Iterar
foreach($resultado as $propiedad):
    echo $propiedad['title'];
    echo "<br>";
    echo $propiedad['image'];
    echo "<br>";
endforeach;


include 'includes/footer.php';