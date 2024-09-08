<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Regitro Empresa Alwiya Kamay</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400&family=Montserrat:wght@400;700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="css/registro.css">
</head>




<body>
	<main>
		<form action="registro.php" class="formulario" id="formulario">
			<div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Usuario</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="Juanito">
					<i class="formulario__validacion-estado fas fa-solid fa-users"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 5 a 15 dígitos y solo puede contener
					numeros, letras y guion bajo.</p>



			</div>
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Nombre</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Juan Aldair">
					<i class="formulario__validacion-estado fas fa-regular fa-user"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 5 a 15 dígitos y solo puede contener
					numeros, letras y guion bajo.</p>
			</div>



			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label">Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password" id="password">
					<i class="formulario__validacion-estado fas fa-solid fa-lock"></i>
				</div>
				<p class="formulario__input-error">La contraseña tiene que ser de 8 a 15 dígitos.</p>
			</div>



			<div class="formulario__grupo" id="grupo__password2">
				<label for="password2" class="formulario__label">Repetir Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password2" id="password2">
					<i class="formulario__validacion-estado fas fa-solid fa-key"></i>
				</div>
				<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
			</div>



			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo" id="correo"
						placeholder="U20201597@utp.edu.pe">
					<i class="formulario__validacion-estado fas fa-regular fa-envelope"></i>
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y
					guion bajo.</p>
			</div>


			<div class="formulario__grupo" id="grupo__telefono">
				<label for="telefono" class="formulario__label">Teléfono</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="969370043">
					<i class="formulario__validacion-estado fas fa-solid fa-phone"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y 9 dígitos.</p>
			</div>


			<div class="formulario__grupo" id="fecha">
				<label for="fecha" class="formulario__label">Fecha de Nacimiento</label>
				<div class="formulario__grupo-input">
					<input type="date" class="formulario__input" name="fecha" id="fecha">
					<i class="formulario__validacion-estado  fas fa-times-circle"></i>
				</div>
			</div>



			<div class="formulario__grupo" id="grupo__dni">
				<label for="dni" class="formulario__label">DNI</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="dni" id="dni" placeholder="75370043">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El DNI solo puede contener numeros y 8 dígitos.</p>
			</div>



			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario
					correctamente. </p>
			</div>
			<br>
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<input type="submit" class="formulario__btn" name="enviar">
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
                <?php
                include 'registro.php';
                ?>
	</main>






