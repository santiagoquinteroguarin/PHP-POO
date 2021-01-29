<?php 

// ? ABSTRACCIÓN

// ? 0. Código estricto
declare( strict_types = 1);

include 'includes/header.php';

// ? 1. Definir una clase
class Producto {

    // ? Metodos magicos - Metodo constructor
    // ? Modificadores de acceso --> public
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
    }

    public function mostrarProducto() {
        // ? This --> nos da acceso a los datos de la instancia creada
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }
}

// ? 2. Instanciar una clase
$producto = new Producto('Tablet', 200, true);

// ? 3. llamar una variable o un metodo
$producto->mostrarProducto();

echo "<pre>";
var_dump($producto);
echo "</pre>";

// ? 2. Instanciar una clase
$producto2 = new Producto('Monitor Curvo', 300, true);
$producto2->mostrarProducto();

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';