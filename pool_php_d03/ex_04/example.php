<?php 
include_once("Gecko.php");

$thomas = new Gecko("Thomas");
$anonymous = new Gecko();
$serguei = new Gecko( "Serguei");


unset($serguei);
echo $thomas->getName().PHP_EOL;
echo $anonymous->getName().PHP_EOL;

echo $thomas->getAge().PHP_EOL;
echo $anonymous->getAge().PHP_EOL;

$thomas->setAge(5).PHP_EOL;
$anonymous->setAge(12).PHP_EOL;


$thomas->status().PHP_EOL;
$anonymous->status().PHP_EOL;