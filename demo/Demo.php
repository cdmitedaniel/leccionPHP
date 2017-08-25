<?php

class Demo
{
    private $idDemo;
    private $nombre;
    private $tipo;
    private $fechanacimiento;
    
     function __construct($idDemo, $nombre,$tipo,$fechanacimiento) {
       $this->idDemo = $idDemo;
       $this->nombre = $nombre;
       $this->tipo = $tipo;
       $this->fechanacimiento = $fechanacimiento;
     }
    
     function setIdDemo($idDemo){
       $this->idDemo = $idDemo;
     } 
     function getIdDemo(){
       return $this->idDemo;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     } 
     function setFechanacimiento($fechanacimiento){
       $this->fechanacimiento = $fechanacimiento;
     } 
     function getFechanacimiento(){
       return $this->fechanacimiento;
     } 

}

?> 
