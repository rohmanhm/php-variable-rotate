<?php
namespace RohmanHM;

/**
* Rotate number by Habib Rohman
*/
class Rotate
{
	static function number ($min, $max, $separator = "<br>")
	{
		$n = $max - $min + 1;
		$result = '';
		for ($i = 0 ; $i < $n; $i++){
			for ($j = 0; $j < $n; $j++)
				$result .= $min + ($i + $j) % $n;
				$result .= $separator;
		}
		return $result;
	}
}

 ?>