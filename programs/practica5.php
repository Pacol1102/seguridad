<?php
	 function strToBin($input)
	  {
		if (!is_string($input))
		  return false;
		$value = unpack('H*', $input);
		return bindec(base_convert($value[1], 16, 2));
	  }
	  function x ($car,$key)
	  {
		  $xo=$car^$key &(0xFFFFFFFF);
		  return $xo;
	  }
	  $inputkey='8';
	  $input='1';
	  $c=strToBin($input);
	  $key=strToBin($inputkey);
	  $res=x($c,$key);
	  echo $res;
echo "<center><p><a href='seguridad.php'>REGRESAR</a></p></center>";
?>