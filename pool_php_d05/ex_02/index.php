<?php
include_once("Animal.php");

Animal::getNumberOfAnimalsAlive();
Animal::getNumberOfMammals();
Animal::getNumberOfFishes();
Animal::getNumberOfBirds();
echo PHP_EOL;

$isidore = new Animal("Isidore", 4, Animal::MAMMAL);
echo $isidore->getName() . " has " . $isidore->getLegs() . " legs and is a " .
$isidore->getType() . ".\n".PHP_EOL;
Animal::getNumberOfAnimalsAlive();
echo PHP_EOL;
$pingouin = new Animal("pingouin", 2, Animal::BIRD);
echo $pingouin->getName() . " has " . $pingouin->getLegs() . " legs and is a " .
$pingouin->getType() . ".\n".PHP_EOL;
$thon = new Animal("thon", 0, Animal::FISH);
echo $thon->getName() . " has " . $thon->getLegs() . " legs and is a " .
$thon->getType() . ".\n".PHP_EOL;

Animal::getNumberOfAnimalsAlive();
Animal::getNumberOfMammals();
Animal::getNumberOfFishes();
Animal::getNumberOfBirds();
echo PHP_EOL;

$chien = new Animal("chien", 4, Animal::MAMMAL);
$chat = new Animal("chat", 4, Animal::MAMMAL);
$cheval = new Animal("cheval", 4, Animal::MAMMAL);
$moineau = new Animal("moineau", 2, Animal::BIRD);
$carpe = new Animal("carpe", 0, Animal::FISH);
$meduse = new Animal("meduse", 0, Animal::FISH);
$pivert = new Animal("pivert", 2, Animal::BIRD);

echo PHP_EOL;

echo Animal::getNumberOfAnimalsAlive()." animals alive.".PHP_EOL;
echo Animal::getNumberOfMammals()." mammals alive.".PHP_EOL;
echo Animal::getNumberOfFishes()." fishes alive.".PHP_EOL;
echo Animal::getNumberOfBirds()." birds alive.".PHP_EOL;

unset($chien);
unset($chat);
unset($cheval);
unset($moineau);
unset($carpe);
unset($meduse);
unset($pivert);

echo Animal::getNumberOfAnimalsAlive()." animals alive.".PHP_EOL;
echo Animal::getNumberOfMammals()." mammals alive.".PHP_EOL;
echo Animal::getNumberOfFishes()." fishes alive.".PHP_EOL;
echo Animal::getNumberOfBirds()." birds alive.".PHP_EOL;
