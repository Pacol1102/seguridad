<?php
include 'practica8.php';
if(isset($_POST['regusu']) || isset($_POST['regpass']) || isset($_POST['repregpass']))
{	
	$conn=mysqli_connect("localhost","root","","usuarios");
	$nusu=$_POST['regusu'];
	$npass=$_POST['regpass'];
	$nrpass=$_POST['repregpass'];
	$com="/^.{8}$/";
	if(!preg_match($com,$nusu) || !preg_match($com,$npass) || !preg_match($com,$nrpass))
	{
		echo '<h1><p>Los campos obligatorios deben llevar 8 caracteres</h1></p>';
		echo "<a href='registrar.php'>Intentar denuevo</a>";
	}
	else
	{
		if($npass==$nrpass)
		{
			$npass=strToBin($npass);
			$npass= per($npass);
			$query="select * FROM registros WHERE usuario='$nusu';";
			$res=mysqli_query($conn,$query);
			$reg=mysqli_fetch_assoc($res);
			if($reg['usuario']==$nusu)
			{
				echo '<p><h1>Usuario ya registrado</h1></p>';
				echo "<a href='registrar.php'>Intentar denuevo</a>";
			}
			else
			{
				$query="INSERT INTO registros VALUES('$nusu','$npass');";
				$res=mysqli_query($conn,$query);
				$reg=mysqli_fetch_assoc($res);	
				echo '<p><h1>Usuario registrado</h1></p>';
				echo "<a href='ingresar.php'>Ingresar</a>";
			}
		}
		else
		{
			echo '<p><h1>No coinciden las contraseñas</h1></p>';
			echo "<a href='registrar.php'>Intentar denuevo</a>";
		}
	}
}
else
{
	header("location:registrar.php");
}
?>