<?php 

include_once("Gecko.php");
$thomas = new Gecko("Thomas");
$anonymous = new Gecko();
$serguei = new Gecko("Serguei");
unset($serguei);
echo $thomas->getName() . "\n";
echo $anonymous->getName() . "\n";
