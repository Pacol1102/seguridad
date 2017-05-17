<?php
	function codificacion ($str)
	{
		$cod=array('a'=>'z','b'=>'y','c'=>'x','d'=>'w','e'=>'v','f'=>'u','g'=>'t','h'=>'s','i'=>'r','j'=>'q','k'=>'p','l'=>'o','m'=>'n','n'=>'m','o'=>'l','p'=>'k','q'=>'j','r'=>'i','s'=>'h','t'=>'g','u'=>'f','v'=>'e','w'=>'d','x'=>'c','y'=>'b','z'=>'a');
		$limi=strlen($str);
		$pal=str_split($str);
		for($n=0;$n<$limi;$n++)
			echo $arr=array_search($pal[$n],$cod);
	}
	$str='hola';
	echo codificacion($str);
echo "<center><p><a href='seguridad.php'>REGRESAR</a></p></center>";
?>