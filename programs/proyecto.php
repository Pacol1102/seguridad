<?php	
include 'practica8.php';
session_start();
	if(isset($_POST['usu']) && isset($_POST['pass']))
	{
		$_session['1']=$_POST['usu'];
		$_session['2']=$_POST['pass'];
		$com="/^.{8}$/";
		if(!preg_match($com,$_session['1']) || !preg_match($com,$_session['2']))
		{
			echo '<h1><p>Los campos obligatorios deben llevar 8 caracteres</h1></p>';
			echo "<a href='ingresar.php'>Intentar denuevo</a>";
		}
		else
		{
			$conn=mysqli_connect("localhost","root","","usuarios");
			$usu=$_session['1'];
			$pass=$_session['2'];
			$pass=strToBin($pass);
			$pass= per($pass);
			$pass=substr($pass,0,8);
			$query="select * FROM registros WHERE usuario='$usu';";
			$res=mysqli_query($conn,$query);
			$reg=mysqli_fetch_assoc($res);
			if($reg['usuario']==$usu)
			{
				if($reg['pass']==$pass)
				{
					echo"<h1>Formulario</h1>";
					echo "<a href='Seguridad.php'>Cerrar</a>";
				}
				else
				{
					echo"<h1><p>Contraseña Incorrecta</p></h1>
						<a href='ingresar.php'>Intenta denuevo</a>";
				}
			}
			else
			{
				echo "<h1><p>Usuario no Registrado</p></h1>";
				echo "<a href='registrar.php'>Registrarse</a>";
			}
		}
	}
	else
	{
		header("location:ingresar.php");
	}
session_unset();
session_destroy();
?>