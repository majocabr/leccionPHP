

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> actualizar </title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$nombre=$_POST["nombre"];
$idusuario=$_POST["idusuario"];
$tipo=$_POST["tipo"];
$fecha_nacimiento=$_POST["fecha_nacimiento"];
$imgsrc=$_POST["imgsrc"];

echo "Edicion en proceso . . . . </br>";
include_once("UsuarioCollector.php");
$UsuarioCollectorObj= new UsuarioCollector();
$UsuarioCollectorObj->UpdateUsuario($idusuario,$nombre,$tipo,$fecha_nacimiento,$imgsrc);
echo "id: ".$idusuario." actualizado a:".$nombre.", ".$tipo.", ".$fecha_nacimiento.", ".$imgsrc." </br>";
?>

<div class="text-fieldsl">
         <a href='index.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
