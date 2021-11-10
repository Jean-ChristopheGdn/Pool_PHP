<?php 

function get_angry_dog($nbr)
{

$str ="woof";
$temp = '';
	for ($i = 0; $i < $nbr; $i++)
	
		$temp = $temp.$str;
		$temp = $temp.PHP_EOL;
	
return $temp;
 
}