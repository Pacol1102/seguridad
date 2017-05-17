<?php
SESSION_START();
SESSION_UNSET();
SESSION_DESTROY();
echo"<!DOCTYPE html>
	<html lang='es'>
		<head>
			<meta charset='utf-8'>
			<title>INGRESAR</title>
		</head>
		<body>
			<center><h1>Proyecto de Seguridad</h1></center>
				<form method='POST' action='proyecto.php'>
					<center><fieldset>
						<legend>Ingresa tus datos</legend>
						<p><caption>Usuario</caption>
						<input type='text' size='8' maxlength='8' name='usu'></p>
						<p><caption>Contraseña</caption>
						<input type='password' size='8' maxlength='8' name='pass'></p>
						<input type='submit' value='Ingresar'>
					</fieldset></center>
				<form>
				<a href='registrar.php'>¿No tienes cuenta?, Registrate.</a>
		</body>
	</html>";
echo "<center><p><a href='seguridad.php'>REGRESAR</a></p></center>";
?>