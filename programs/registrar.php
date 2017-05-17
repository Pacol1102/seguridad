<?php
echo "<!DOCTYPE html>
		<html lang='es'>
			<head>
				<meta charset='utf-8'>
				<title>Registro</title>
			</head>
			<body>";
echo			"<center><h1>Registro de nuevos usuarios</h1></center>
				<form method='POST' action='validar.php'>
					<center><fieldset>
						<legend>Campos Obligatorios</legend>
						<p><caption>Nombre de usuario</caption>
						<input  type='text' size='8' maxlength='8' name='regusu' placeholder='(8 caracteres)'></p>
						<p><caption>Contraseña</caption>
						<input type='password' size='8' maxlength='8' name='regpass' placeholder='(8 caracteres)'>
						<caption>Repite Contraseña</caption>
						<input type='password' size='8' maxlength='8' name='repregpass' placeholder='(8 caracteres)'></p>
						<input type='submit' value='Registrarse'>
					</fieldset></center>
				<form>
				<a href='ingresar.php'>Regresar al inicio</a>";
echo		"</body>
		</html>";
echo "<center><p><a href='seguridad.php'>REGRESAR</a></p></center>";
?>