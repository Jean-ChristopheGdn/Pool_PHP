<?php
include_once("Shark.php");
include_once("Canary.php") ;
$titi = new Canary("Titi");
$willy = new Shark("Willy"); // Yes , Willy is a shark here!
$willy->status();
$willy->smellBlood(true);
$willy->status();
$titi->layEgg();
echo $titi->getEggsCount() . "\n";