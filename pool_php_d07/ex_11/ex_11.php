<?php 

function loadclass($class)
{
	require $class.'.class.php';
}
spl_autoload_register('loadclass');