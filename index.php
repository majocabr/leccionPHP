<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> FORMULARIO</title>
	</head>
<body>

<aside>
<?php

include_once("UsuarioCollector.php");

$UsuarioCollectorObj = new UsuarioCollector();

echo "<p><a href='formularioDemonuevo.php'>Nuevo Usuario</a></p>";

foreach ($UsuarioCollectorObj->showUsuarios() as $c){
  echo "<div>";
  echo $c->getIdUsuario(). "  && " .$c->getNombre()."  && " .$c->getTipo()."  && " .$c->getFechaNacimiento()."  && " .$c->getImgsrc()."<a href='formularioUsuarioeditar.php?id=".$c->getIdUsuario()."'> Perfil </a>";                                     
  echo "</div>"; 
}
?>
</aside>
</body>
</html>
