<?php
function isbn10 ($str)
{
	$mul=0;
	$x102=0;
	$str=str_split($str);
	for($n=0;$n<=8;$n++)
	{	
		$mul=$mul+1;
		$x10=$mul*$str[$n];
		$x102=$x10+$x102;
	}
	$x10=$x102%11;
	echo $x10;
}
function isbn13 ($str)
{
	$x132=0;
	$str=str_split($str);
	for($n=0;$n<=11;$n++)
	{	
		if($n%2==0)
			$mul=1;
		else
			$mul=3;
		$x13=$mul*$str[$n];
		$x132=$x13+$x132;
	}
	$x13=(10-$x132)%10;
	echo $x13;
}
$str10='123456789';
$str13='123456789876';
isbn10($str10);
isbn13($str13);
echo "<center><p><a href='seguridad.php'>REGRESAR</a></p></center>";
?>