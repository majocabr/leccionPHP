<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    echo "linea 1";
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'nombre'},$c{'tipo'},$c{'fecha_nacimiento'},$c{'imgsrc'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
function showUsuario($id) {
    $rows = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array ("{$id}"));        
$ObjDemo= new Usuario($rows[0]{'idusuario'},$rows[0]{'nombre'},$rows[0]{'tipo'},$rows[0]{'fecha_nacimiento'},$rows[0]{'imgsrc'});
    
    return $ObjDemo;        
  }
function UpdateUsuario($id,$nombre,$tipo,$fecha_nacimiento,$imgsrc) {
    $insertrow = self::$db->updateRow("UPDATE public.usuario SET nombre = ?, tipo = ?, fecha_nacimiento = ?, imgsrc = ? where idusuario= ? ", array ("{$nombre}","{$tipo}","{$fecha_nacimiento}","{$imgsrc}",$id));

}
function deleteUsuario($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.usuario where idusuario= ? ", array ("{$id}"));

}

function createUsuario($nombre,$tipo,$fecha_nacimiento,$imgsrc) {
    $insertrow = self::$db->insertRow("INSERT INTO public.usuario (nombre,tipo,fecha_nacimiento,imgsrc) VALUES (?,?,?,?)", array ("{$nombre}","{$tipo}","{$fecha_nacimiento}","{$imgsrc}"));
}

}
?>

