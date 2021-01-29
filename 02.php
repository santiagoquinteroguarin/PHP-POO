<?php 
declare( strict_types = 1);

include 'includes/header.php';

// ? ENCAPSULACIÓN

class Producto {
    // ? Public - Se puede acceder y modificar en cualquier lugar (clase y objeto)
    // ? protected - Se puede acceder / modificar unicamente en la clase
    // ? private solo miembros de la misma clase pueden acceder a el

    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
    }

    // ? void --> metodo vacio significa que no retorna nada
    public function mostrarProducto() : void {
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    // ? Getters and Setters

    // * retorna un string
    public function getNombre() : string {
        return $this->nombre;
    }

    // * recibe un string
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 200, true);

echo $producto->getNombre();
$producto->setNombre('Portatil');

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 300, true);
// $producto2->mostrarProducto();

echo $producto2->getNombre();

include 'includes/footer.php';