<?php include 'includes/header.php';

// ? POLIMORFISMO - los objetos pueden tener diferentes formas cuando diferentes clases implementan la misma interfaz

// * Interfaz
interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}

// * Clase principal
class Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

// * Clase Automvil que hereda de transporte
class Automovil extends Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
        
    }

    public function getInfo() : string {
        return "El transporte AUTO tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y tiene el color" . $this->color;
    }

    public function getColor() : string {
        return "El color es " . $this->color;
    }
}

echo "<pre>";

// ? Instanciar clases
var_dump($transporte = new Transporte(8, 20));
var_dump($auto = new Automovil(4, 4, 'Rojo'));

// ? Ver info transporte
echo $transporte->getInfo();
echo "<br>";

// ? ver info automovil
echo $auto->getInfo();
echo "<br>";

echo $auto->getColor();

echo "</pre>";


include 'includes/footer.php';