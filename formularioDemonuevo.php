<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> FORMULARIO  guardar</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>

<h2>nuevo USUARIO</h2>
<form id="contact-form" action="guardarDemo.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">

<div class="float-input">
NOMBRE:	<input name="nombre" id="nombre" type="text" />
<span><i class="fa fa-lock"></i></span>
</div>
<div class="float-input">
TIPO:	 <input name="tipo" id="tipo" type="text" />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
FECHA DE NACIMIENTO:	<input name="fecha_nacimiento" id="fecha_nacimiento" type="text" />
<span><i class="fa fa-lock"></i></span>
</div>
<div class="float-input">
IMG SRC:	 <input name="imgsrc" id="imgsrc" type="text"  />
<span><i class="fa fa-user"></i></span>
</div>

<a href="index.php">Cancelar</a>
  
<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                      
</div>


</form>






</aside>
</body>
</html>
