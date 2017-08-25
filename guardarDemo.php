<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> GUARDAR</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$nombre=$_POST["nombre"];
$tipo=$_POST["tipo"];
$fecha_nacimiento=$_POST["fecha_nacimiento"];
$imgsrc=$_POST["imgsrc"];

include_once("UsuarioCollector.php");
$UsuarioCollectorObj= new UsuarioCollector();
$UsuarioCollectorObj->createUsuario($nombre,$tipo,$fecha_nacimiento,$imgsrc);
echo "valor agregado </br>";
?>

<div class="text-fieldsl">
         <a href='index.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
