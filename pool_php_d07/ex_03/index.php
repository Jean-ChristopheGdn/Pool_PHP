<?php 
include_once("Character.php");
include_once("Warrior.php");
include_once("Mage.php");

$warrior = new Warrior("Jean-Luc");
$mage = new Mage("Robert");
$warrior -> attack();
$mage -> attack();

echo $warrior -> getName () , PHP_EOL ;
echo $warrior -> getLife () , PHP_EOL ;
echo $warrior -> getAgility () , PHP_EOL ;
echo $warrior -> getStrength () , PHP_EOL ;
echo $warrior -> getWit () , PHP_EOL ;
echo $warrior -> getClasse () , PHP_EOL ;

echo $mage -> getName () , PHP_EOL ;
echo $mage -> getLife () , PHP_EOL ;
echo $mage -> getAgility () , PHP_EOL ;
echo $mage -> getStrength () , PHP_EOL ;
echo $mage -> getWit () , PHP_EOL ;
echo $mage -> getClasse () , PHP_EOL ;

$warrior -> moveRight () ;
$warrior -> moveLeft () ;
$warrior -> moveDown () ;
$warrior -> moveUp () ;

$mage -> moveRight () ;
$mage -> moveLeft () ;
$mage -> moveDown () ;
$mage -> moveUp () ;