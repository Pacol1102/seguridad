<?php
function playfairn ($str,$num)
{	
	$lon=strlen($str);
	$lon=ceil($lon/$num)-1;
	for($n=0;$n<$num;$n++)
	{
		for ($x=0;$x<=$lon;$x++)
		{
			$substr=substr($str,$num*$x,$num);
			$arr=str_split($substr);
			if(array_key_exists($n,$arr))
				print_r($arr[$n]);
		}
	}
}
	$str='navega,veleromio,sintemor';
	$num=7;
	echo playfairn($str,$num);
echo "<center><p><a href='seguridad.php'>REGRESAR</a></p></center>";
?>