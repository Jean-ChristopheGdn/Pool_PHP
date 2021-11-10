<?php

include_once("Mars.php");
include_once("Astronaut.php");

$rocks = new chocolate\Mars();
$lite = new chocolate\Mars();
$snack = new chocolate\Mars();
echo $rocks->getId().PHP_EOL;
echo $lite->getId().PHP_EOL;
echo $snack->getId().PHP_EOL;

$Mars = new planet\Mars();
echo $Mars->getSize().PHP_EOL;


$Wachala = new Astronaut("Wachala");
$Francisco = new Astronaut("Francisco");
$Pingouin = new Astronaut("Pingouin");
echo "id ".$Wachala->getId() . " name " . $Wachala->getName() . PHP_EOL;
echo "id ".$Francisco->getId() . " name " . $Francisco->getName() . PHP_EOL;
echo "id ".$Pingouin->getId() . " name " . $Pingouin->getName() . PHP_EOL;

$Wachala->doActions($Mars);
$Pingouin->doActions($snack);
$Pingouin->doActions($lite);
$Francisco->doActions();