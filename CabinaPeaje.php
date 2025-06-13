<?php
include_once "RegistroVehiculo.php";
include_once "Recibo.php";
class CabinaPeaje
{
   private $ColRegistrosV;
   private $ColRecibos;
   public function __construct()
{
    $this->ColRegistrosV =[] ;
    $this->ColRecibos =[] ;

}


public function getColRegistrosV() {
  return $this->ColRegistrosV;
}


public function setColRegistrosV($ColRegistros) {
  $this->ColRegistrosV = $ColRegistros;
}


public function getColRecibos() {
  return $this->ColRecibos;
}


public function setColRecibos($ColRecibos) {
  $this->ColRecibos = $ColRecibos;
}

public function __toString()
{   $ColRecibos=[];
    $CadenaPeaje="CabinaPeaje Proceso los siguientes recibos:";
    $ColRecibos=$this->getColRecibos();
    foreach ($ColRecibos as $ObjRecibo) {
        $CadenaPeaje.=$ObjRecibo->toString()."\n ";
        return $CadenaPeaje;
    }
}

public function reciboMayorMonto($fecha){
    $colRecibos=$this->getColRecibos();
    
}

}
