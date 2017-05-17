<?php
	 function strToBin($input)
	  {
		if (!is_string($input))
		  return false;
		$value = unpack('H*', $input);
		return bindec(base_convert($value[1], 16, 2));
	  }
	  function per ($ha)
	  {
		$re=$ha>>2;
		return $re;
	  }
	  $pa='hola';
	  $ha=strToBin($pa);
	  $re= per($ha);
echo "<center><p><a href='seguridad.php'>REGRESAR</a></p></center>";
?>