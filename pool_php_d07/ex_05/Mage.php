<?php 

include_once("Character.php");

class Mage extends Character
{

	const CLASSE = self::class;

	public function __construct($name)
	{
		parent::__construct($name);
		$this->name = $name;
		$this->life = 70;
		$this->agility = 10;
		$this->strength = 3;
		$this->wit = 10;
		echo $this->getName().": May the gods be with me.".PHP_EOL;
	}
	public function __destruct()
	{
		echo $this->getName().": By the four gods, I passed away...".PHP_EOL;
	}
	public function attack()
	{
		echo $this->getName().": Feel the power of my magic!".PHP_EOL;
	}

	//Movable
	public function moveRight()
	{
		echo $this->name.": moves right furtively.".PHP_EOL;
	}
	public function moveLeft()
	{
		echo $this->name.": moves left furtively.".PHP_EOL;
	}
	public function moveUp()
	{
		echo $this->name.": moves up furtively.".PHP_EOL;
	}
	public function moveDown()
	{
		echo $this->name.": moves down furtively.".PHP_EOL;
	}

}