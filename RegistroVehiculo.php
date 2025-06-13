<?php

class RegistroVehiculo 
{
    private $numPatente;
    
    public function __construct($numPatente)
    {
        $this->numPatente=$numPatente;
    }




    public function valorPeaje(){
        $valorFinal=20;

        return $valorFinal;
    }
    
}
