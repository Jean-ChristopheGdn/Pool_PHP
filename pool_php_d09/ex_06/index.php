<?php 
include_once("ex_06.php");
session_start();

if (isset($_GET["name"]))
{
	$_SESSION["name"] = $_GET["name"];
	setcookie("name", $_GET["name"],time()+3600);
	echo "Hello ".$_GET["name"]; 
}

else if (isset($_SESSION["name"]))
{
    echo "Hello ".$_SESSION["name"];
}
else
{        
    echo "Hello platypus";
}
