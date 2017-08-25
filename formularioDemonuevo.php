<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> FORMULARIO demo guardar</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>

<h2>Editar Objeto Demo</h2>
<form id="contact-form" action="guardarDemo.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">

<div class="float-input">
NOMBRE:	<input name="nombre" id="nombre" type="text" value="nombre"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>
<a href="index.php">Cancelar</a>
<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>
