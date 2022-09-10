<html>

<head>
	<meta charset="UTF-8">
	<title>Registrar</title>
	<link rel="stylesheet" type="text/css" href="desing.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<h1>REGISTRARME</h1>
	<div class="cuadro formulario rounded_borders ">
		<form  method="post" style="margin:  auto ; width: 210px;">
			<fieldset>
				<legend class="subtitle"> Datos personales </legend>
				Nombre: <input type="text" name="nombre" placeholder="Nombre" required>

				Correo electronico: <input type="email" name="email" placeholder="Correo electronico" required>

				Número de Teléfono: <input type="number" name="telefono" placeholder="Teléfono" required>

				Página Web: <input type="text" name="paginaweb" placeholder="Página Web" required>

				Mensaje: <input type="text" name="mensaje" placeholder="Mensaje" required>
				<br>
			</fieldset>
			<br>
			<fieldset>
				<legend class="subtitle"> Datos del usuario </legend>
				Usuario: <input type="text" name="usuario" placeholder="Usuario" required>

				Contraseña:<input type="password" id="passwd1" size="20" placeholder="Contraseña" name="userpass" required>

				<!-- Repetir contraseña:<input type="password" id="passwd2" size="20" placeholder="Contraseña" name="userpass"
					> -->
				<br>
			</fieldset>
			<br>
			<div>
				<input type="submit" value="Registrar" name="register" class="btn btn-primary ">
				<a href="iniciar.html"><input type="button" value="Cancelar" class="btn btn-primary "></a>
			</div>
		</form>

		<?php
			include("registrar.php");
		?>

	</div>
	<footer class="clase-general">
		<center>
			<p><strong><u>Profesor:</u></strong> Carlos Villaroel ****** <strong><u>Materia:</u></strong> Electiva IV <br>
				Yatdimar Alvarado||
				Noel Tejeda ||
				KleberCabezas ||
				Humberto Diaz
			</p>
		</center>
	</footer>
</body>

</html>

<!-- https://www.youtube.com/watch?v=cka0J41iJY0&t=927s -->
<!-- https://github.com/soydalto/Conexion-a-mysql-con-php/blob/master/registrar.php -->