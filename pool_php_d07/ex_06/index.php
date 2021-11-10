<?php 

include_once("Pony.php");

$pony = new Pony("male", "machin", "blue");
echo $pony;

$forest = new Pony("femele", "Forest", "blue");

$forest->speak();