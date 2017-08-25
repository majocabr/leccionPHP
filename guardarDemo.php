<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> actualizar demo</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$nombre=$_POST["nombre"];

include_once("DemoCollector.php");
$DemoCollectorObj= new DemoCollector();
$DemoCollectorObj->createDemo($nombre);
echo "valor agregado </br>";
?>

<div class="text-fieldsl">
         <a href='index.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
