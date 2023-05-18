<?php
include_once "Pasajero.php";
class PasajeroVIP extends Pasajero{
    private $numViajeroFrecuente;
    private $millasDePasajero;

    public function __construct($nombre,$numAsiento,$numTicket,$numViajeroFrecuente, $millasDePasajero,$porcentaje){
        parent::__construct($nombre,$numAsiento,$numTicket,$porcentaje);
        $this-> numViajeroFrecuente = $numViajeroFrecuente;
        $this->millasDePasajero=$millasDePasajero;
    }
     //gets y sets
     
     public function darPorcentajeIncremento(){
        if ($this->getmillasDePasajero()<300){
            $porcentaje=30;
        }else{
            $porcentaje=35;
        }
        return $porcentaje;
     }

     public function getNumViajeroFrecuente(){
        return $this->numViajero;
    }
    public function setNumViajeroFrecuente($numViajeroFrecuente){
        $this->numViajeroFrecuente=$numViajeroFrecuente;
    }
     //gets y sets
     public function getMillasDePasajero(){
        return $this->millasDePasajero;
    }
    public function setMillasDePasajero($millas){
        $this->millasDePasajero=$millas;
    }
    public function __toString(){
        $txt=parent::__toString();
        $txt= $txt."\t > Número de viajero frecuente: ".$this->getNumViajeroFrecuente()."\n
        \t > Número de millas acumuladas: ".$this->getMillasDePasajero()."\n";
        return $txt;
    }
}
 ?>