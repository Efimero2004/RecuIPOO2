<?php

class Recibo 
{
    public static $id = 0;
    private $numero;
    private $valor;
    private $fecha;
    private $hora;
    private $ObjRegistroVehiculo;

    public static function incrementarId() {
        self::$id++;
    }
    public static function getId() {
        return self::$id;
    }


    public function __construct($valor,$hora,$ObjRegistroVehiculo)
    {   $fechaHora = new DateTime();
        $this->valor =$valor ;
        
        $this->hora = $hora;
        $this->$ObjRegistroVehiculo =$ObjRegistroVehiculo;
        $this->numero= $this->getId();
        $this->incrementarId();
        $this->fecha = $fechaHora->format("y-m-d");
        $this->hora = $fechaHora->format('H:i:s');
    }

    
    public function getNumero() {
        return $this->numero;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function getHora() {
        return $this->hora;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function getObjRegistroVehiculo() {
        return $this->ObjRegistroVehiculo;
    }

    public function setObjRegistroVehiculo($ObjRegistroVehiculo) {
        $this->ObjRegistroVehiculo=$ObjRegistroVehiculo;
    }

}
