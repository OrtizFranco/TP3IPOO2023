<?php
include_once "Pasajero.php";
class PasajeroEspecial extends Pasajero
{
/*La clase Pasajeros con necesidades especiales se refiere a pasajeros que pueden 
 requerir servicios especiales como sillas de ruedas, asistencia para el embarque o desembarque, o comidas 
 especiales para personas con alergias o restricciones alimentarias.*/
 private $cantServiciosRequeridos;
 private $arrayServicios;
 public function __construct($nombre,$numTicket,$numAsiento,$cantNecesidades,$porcentaje){
    parent::__construct($nombre,$numAsiento,$numTicket);
    $this->cantNecesidades=$cantNecesidades;
 }
 public function getCantServiciosRequeridos(){
    return $this-> cantServiciosRequeridos;
 }
 public function setCantServiciosRequeridos($cantServiciosRequeridos){
    $this->cantServiciosRequeridos = $cantServiciosRequeridos;
 }
 public function getServicios(){
    return $this->servicios;
 }
 public function setServicios($arrayServicios){
    $this->arrayServicios=$arrayServicios;
 }
 public function darPorcentajeIncremento(){
    if ($this->cantServiciosRequeridos=1){
        $porcentaje=15;
    }else{
        $porcentaje=30;
    }
    $this->setPorcentajeIncremento($porcentaje);
    return $porcentaje;
 }
 public function cargarServicios(){
    for($i=0;count($this->getCantServiciosRequeridos())<$i;$i++){
        $servicios="\t > ".$this->getServicios()[$i]."\n";
    }
    return $servicios;
 }
    public function __toString(){
        $servicios=$this->cargarServicios();
        $txt=parent::__toString();
        $txt= $txt."\t > Cantidad de servicios requeridos: \n
        > Servicios:\n
        ".$this->cargarServicios();
        return $txt;
    }
}

?>