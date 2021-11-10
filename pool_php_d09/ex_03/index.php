<?php

session_start();

if (isset($_GET["name"]))
{
	echo "tata";
	$_SESSION["name"] = 'toto';
	echo "Hello ".$_GET["name"]; 
	  
}

elseif (isset($_SESSION["name"]))
{
	echo "toto";
    echo "Hello ".$_SESSION["name"];
}
else
{        
    echo "Hello platypus";
}

