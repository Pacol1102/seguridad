<?php
echo "<!DOCTYPE html>
		<html lang='es'>
			<head>
				<meta charset='utf-8'>
				<title>Seguridad></title>
				<link rel='stylesheet'type='text/css'href='../styles/estilado.css'/>
			</head>
			<body>";
echo 			"<div><center><h1>SEGURIDAD</h1></center></div>
				<div class='left'><table border='solid'>";
					for($n=1;$n<=9;$n++)
					{
echo					"<tr>";
echo					 	"<th>Practica ".$n."</th>";
echo					"</tr>";
echo					"<tr>";
echo						"<td><center><a href='practica".$n.".php'>".$n."</a></center></td>";
echo					"</tr>";
					}
echo			"</table></div>";
echo			"<table border='solid'>
					<tr>
						<th>
							Proyecto
						</th>
					</tr>
					<tr>
						<td>
							<center><a href='ingresar.php'>Sesiones</a></center>
						</td>
					</tr>
					<tr>
						<th>
							CURP
						</th>
					</tr>
					<tr>
						<td>
							<center><a href='curp.php'>Validacion de CURP</a></center>
						</td>
					</tr>
					<tr>
						<th>
							VISA
						</th>
					</tr>
					<tr>
						<td>
							<center><a href='visa.php'>Validacion de VISA</a></center>
						</td>
					</tr>
					<tr>
						<th>
							Vigenere
						</th>
					</tr>
					<tr>
					
						<td>
							<center><a href='vigenere.php'>Vigenere</a></center>
						</td>
					</tr>";			
echo			"</table>
			</body>
		</html>";
?>