
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> FORMULARIO demo</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$id=$_GET["id"];
echo "el valor de id es ".$id;
include_once("UsuarioCollector.php");
include_once("Usuario.php");
$UsuarioCollectorObj= new UsuarioCollector();
$ObjUsuario=$UsuarioCollectorObj->showUsuario($id);
print_r($ObjUsuario);
//echo "<p><a href='eliminar.php?id=".$id."'>Eliminar</a></p>";
?>
<h2>Editar Objeto </h2>
<img src="<?php echo $ObjUsuario->getImgsrc(); ?>" width="100" height="100" alt="usuario">
<img src="http://tusimagenesde.com/wp-content/uploads/2016/11/rostros-33.jpg" width="100" height="100" alt="usuario">
<form id="contact-form" action="actualizar.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="idusuario" id="idusuario" type="text" value="<?php echo $ObjUsuario->getIdUsuario(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
NOMBRE:	<input name="nombre" id="nombre" type="text" value="<?php echo $ObjUsuario->getNombre(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>
<div class="float-input">
TIPO:	 <input name="tipo" id="tipo" type="text" value="<?php echo $ObjUsuario->getTipo(); ?>"  />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
FECHA DE NACIMIENTO:	<input name="fecha_nacimiento" id="fecha_nacimiento" type="text" value="<?php echo $ObjUsuario->getFechaNacimiento(); ?>"/>
<span><i class="fa fa-lock"></i></span>
</div>
<div class="float-input">
IMG SRC:	 <input name="imgsrc" id="imgsrc" type="text" value="<?php echo $ObjUsuario->getImgsrc(); ?>"  />
<span><i class="fa fa-user"></i></span>
</div>

<a href="index.php">Cancelar</a>
 <?php
$id=$_GET["id"];

echo "<a href='eliminar.php?id=".$id."'>Eliminar</a>";
?>   
<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                      
</div>


</form>

</aside>
</body>
</html>
