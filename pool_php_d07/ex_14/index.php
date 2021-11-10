<?php 

function call_gecko()
{
	echo "Gecko is calling".PHP_EOL;
	throw new Exception("Error Processing Request",1);
}