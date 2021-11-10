<?php 
/*
$a = 1;
$b = 2;

my_swap($a, $b);*/
function my_swap(&$a, &$b)
{
	$temp = $a;
	$a = $b;
	$b = $temp;
/*
echo $a;
echo $b;
*/
}



