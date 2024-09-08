<?php 

include("registro_db.php");

if (isset($_POST['formulario__btn'])) {
    if (strlen($_POST['usuario'])>=1&&
   strlen($_POST['nombre'])>=1&&
   strlen($_POST['password'])>=1&&
   strlen($_POST['correo'])>=1&&
   strlen($_POST['telefono'])>=1&&
   strlen($_POST['fecha'])>=1&&
   strlen($_POST['dni'])>=1){
  
  $usuario=trim($_POST['usuario']);
  $nombre=trim($_POST['nombre']);
  $password=trim($_POST['password']);
  $correo=trim($_POST['correo']);
  $telefono=trim($_POST['telefono']);
  $dni=trim($_POST['dni']);
  $fechareg = date("d/m/y");
  $consulta="INSERT INTO datos(usuario, nombre, password, correo, telefono, fecha, dni) VALUES ('$usuario','$nombre','$password','$correo','$telefono','$fecha','$dni')";
  $resultado= mysqli_query($conex, $consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
