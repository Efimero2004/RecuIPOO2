<?php
class TransporteEscolar extends RegistroVehiculo
{
    private $capacidad;
    public function __construct($patente,$capacidad)
{
    parent::__construct($patente);
    $this->capacidad=$capacidad;
}

public function getCapacidad(){
    return $this->capacidad;
}

    public function valorPeaje() {
        parent::valorPeaje();
        $valorFinal=25*$this->getCapacidad();

        return $valorFinal;
    }
}