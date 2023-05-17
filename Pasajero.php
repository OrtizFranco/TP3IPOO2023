<?php
class Pasajero{
   //el nombre, el número de asiento y el número de ticket del pasaje del viaje
   // 
    private $nombre;
    private $numAsiento;
    private $numTicket;
    private $porcentaje;

    public function __construct($nombre,$numAsiento,$numTicket){
        
        $this->nombre=$nombre;
        $this->numAsiento= $numAsiento;
        $this-> numTicket = $numTicket;
        $this->porcentaje=10;

    }
    //gets y sets
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    //gets y sets
    public function getNumAsiento(){
        return $this->numAsiento;
    }
    public function setNumAsiento($numAsiento){
        $this->numAsientpo=$numAsiento;
    }
    //gets y sets
    public function getNumTicket(){
        return $this->NumTicket;
    }
    public function setNumTicket($numTicket){
        $this->numTicket=$numTicket;
    }
    public function darPorcentajeIncremento(){
        
        return $porcentaje;
    }
    public function getPorcentajeIncremento(){
        return $this->porcentaje;
    }
    public function setPorcentajeIncremento($porcentaje){
        $this->porcentaje=$porcentaje;
    }
    public function __toString(){
        $txt="Pasajero ".$this->getNombre()."\n
        \t > Número de ticket: ".$this->getNumTicket()."\n
        \t > Número de asiento: ".$this->getNumAsiento()."\n";
        return $txt;
    }
}
?>