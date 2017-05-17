<?php
	function simple ($nocue)
	{
		$limi=strlen($nocue);
		$nocue=strrev($nocue);
		$arr=str_split($nocue);
		for($n=0;$n<$limi;$n++)
			echo chr($arr[$n]+32);
	}
	$nocue='316057132';
	echo simple($nocue);
echo "<center><p><a href='seguridad.php'>REGRESAR</a></p></center>";	
?>