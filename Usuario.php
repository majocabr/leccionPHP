<?php

class Usuario
{
    private $idusuario;
    private $nombre;
private $tipo;
    private $fecha_nacimiento;
private $imgsrc;
    
     function __construct($idusuario, $nombre, $tipo, $fecha_nacimiento, $imgsrc) {
       $this->idusuario = $idusuario;
       $this->nombre = $nombre;
       $this->tipo = $tipo;
       $this->fecha_nacimiento = $fecha_nacimiento;
       $this->imgsrc = $imgsrc;
     }
    
     function setIdUsuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdUsuario(){
       return $this->idusuario;
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
     function setFechaNacimiento($nombfecha_nacimientore){
       $this->fecha_nacimiento = $fecha_nacimiento;
     } 
     function getFechaNacimiento(){
       return $this->fecha_nacimiento;
     } 
     function setImgsrc($imgsrc){
       $this->imgsrc = $imgsrc;
     } 
     function getImgsrc(){
       return $this->imgsrc;
     } 

}

?> 
