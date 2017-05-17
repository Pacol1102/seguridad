<?php
	function mod ($a,$b)
	{
		if($b==0)
			echo 'error';
		else
		{
			if($a<0 && $b<0)
			{
				$c=$a%$b;
				return $c;			
			}
			else
			{
				if($a>0)
				{
					$c=$a%$b;
					return $c;
				}
				else
				{
					$c=$a%$b;
					$c=$c+$b;
					return $c;
				}
			}
		}
	}
	$a=-32;
	$b=6;
	echo mod($a,$b);
echo "<center><p><a href='seguridad.php'>REGRESAR</a></p></center>";
?>