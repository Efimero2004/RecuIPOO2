<?php
class Camion extends RegistroVehiculo
{
    private $peso;
    private $cantEjes;


    public function __construct($patente,$peso,$cantEjes){
    parent::__construct($patente);
    $this->peso=$peso;
    $this->cantEjes=$cantEjes;

    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCantEjes() {
        return $this->cantEjes;
    }


    public function valorPeaje() {
        parent::valorPeaje();
        $cantidadEjes=$this->getCantEjes();
        $pesoCamion=$this->getPeso();

        $valorFinal=20+(100*$cantidadEjes)+(15*$pesoCamion);
        if ($pesoCamion<5) {
            $valorFinal=$valorFinal+($valorFinal*0.02);
        }else{
            $valorFinal=$valorFinal+($valorFinal*0.05);
        }
        return $valorFinal;
    }

}
