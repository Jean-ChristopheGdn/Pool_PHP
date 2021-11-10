<?php

include_once("Mars.php");
$rocks = new chocolate\Mars();
$lite = new chocolate\Mars();
$snack = new chocolate\Mars();
echo $rocks->getId().PHP_EOL;
echo $lite->getId().PHP_EOL;
echo $snack->getId().PHP_EOL;

$Mars = new planet\Mars(10);
echo $Mars->getSize().PHP_EOL;