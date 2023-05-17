<?php
include_once "Pasajero.php";
class Viaje{
/**Modificar la clase viaje para almacenar el costo del viaje, la suma de los costos abonados por los pasajeros
 e implementar el método venderPasaje($objPasajero) que debe incorporar el pasajero a la colección de
  pasajeros ( solo si hay espacio disponible), actualizar los costos abonados y retornar el costo final
   que deberá ser abonado por el pasajero. */
    private $codigo;
    private $destino;
    private $cant_Max_Pjs;
    private $pasajeros;
    private $responsableViaje;
    private $costoPasaje;
    private $sumaDeVentas;
    public function setSumaDeVentas($venta){
        $this-> sumaDeVentas+=$venta;
    }
    public function getSumaDeVentas(){
        return $sumaDeVentas;
    }
    public function venderPasaje($objPasajero){
        if($this->hayPasajesDisponibles()){
            $porcentaje=$objPasajero->getPorcentajeIncremento();
            $costo=$this-> getCostoPasaje()+getCostoPasaje()*$porcentaje/100;
            $this->setSumaDeVentas($costo);
            $this->setPasajeros($objPasajero);
        }
        return $costo;
    }
    public function hayPasajesDisponibles(){
        $disp=FALSE;
       if (count($this->getPasajeros())<$this->getCantPasajeros()){
        $disp=true;
       }
       return $disp;
    }
    //metodo constructor, recibe datos desde el test
    public function __construct($codigo, $destino, $cant_Max_Pjs,$arrayPasajeros,$responsable,$costoPasaje){
        $this-> codigo = $codigo;
        $this-> destino = $destino;
        $this -> cant_Max_Pjs = $cant_Max_Pjs;
        $this -> pasajeros = $arrayPasajeros;
        $this -> responsableViaje = $responsable;
        $this ->costoPasaje = $costoPasaje;
    }

    //gets y sets de la clase
    //gets y sets de la clase
    public function getResponsable(){
        return $this->responsableViaje;
    }
    public function setResponsable($responsable){
        $this->responsableViaje = $responsable;
    }
    public function getCostoPasaje(){
        return $this->costoPasaje;
    }
    public function setCostoPasaje($costoPasaje){
        $this->costoPasaje = $costoPasaje;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($cod){
        $this->codigo = $cod;
    }
    public function getDestino(){
        return $this->destino;
    }
    public function setDestino($dest){
        $this->destino = $dest;
    }
    public function getCantPasajeros(){
        return $this->cant_Max_Pjs;
    }
    public function setCantPasajeros($cantP){
        $this->cant_Max_Pjs = $cantP;
    }
    public function getPasajeros(){
        return $this->pasajeros;
    }
    public function setPasajero($pasajero,$posicion){
        $this->pasajeros[$posicion] = $pasajero;
    }
    public function setPasajeros($pasajero){
        $this->pasajeros = $pasajero;
    }
    //retorna el string a mostrar en __toString()
    public function cargarString(){
        
        $p="";
        $s = "codigo de viaje: ".$this->codigo."\n". " destino: ".$this->destino."\n". " cantidad máxima de pasajeros: ".$this->cant_Max_Pjs."\n";
        $cant_P = count($this->pasajeros);
        $r="Responsable del viaje: ".$this->responsableViaje->getNombreYApellido()." 
        \n \t empleado n° ".$this->responsableViaje->getNumEmpleado()." 
        \n \t matrícula n° ".$this->responsableViaje->getNumLicencia()."\n";
        for ($i=0;$i<$cant_P;$i++){
            $pasaje=$this->getPasajeros()[$i];
            $p = $p.$this->getPasajeros[$i]->__toString()."\n";
        }
        $s = $s.$r.$p;
        return $s;
    }
    // al hacer echo muestra los atributos de la clase
    public function __toString(){
        $string=$this->cargarString();
        return $string;
    }
    
} 
?>