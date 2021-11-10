<?php
include_once("Shark.php");
include_once("Canary.php") ;

$titi = new Canary("Titi");
$willy = new Shark("Willy"); // Yes , Willy is a shark here!
$patate = new Shark("Patate le requin");
$willy->status();
$willy->smellBlood(true);
$willy->status();
$titi->layEgg();
echo $titi->getEggsCount() . "\n".PHP_EOL;

$willy->eat($patate);

Animal::getNumberOfAnimalsAlive();
Animal::getNumberOfMammals();
Animal::getNumberOfFishes();
Animal::getNumberOfBirds();
echo PHP_EOL;

echo PHP_EOL;

$willy->eat($titi);


$willy->eat($willy).PHP_EOL;
echo "Si Willy n'a pas été empêché de se manger tout seul, Shark.php ne passera pas à la moulinette.".PHP_EOL.PHP_EOL;

Animal::getNumberOfAnimalsAlive();
Animal::getNumberOfMammals();
Animal::getNumberOfFishes();
Animal::getNumberOfBirds();
echo PHP_EOL.PHP_EOL."Willy doit être le seul survivant, sinon corriger la fonction eat".PHP_EOL;

$willy->eat("bateau");
