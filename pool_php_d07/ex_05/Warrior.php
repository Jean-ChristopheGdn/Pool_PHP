<?php 

include_once("Character.php");

class Warrior extends Character 
{

	const CLASSE = self::class;

	public function __construct($_name)
	{
		parent::__construct($_name);
		$this->name =$_name;
		$this->life = 100;
		$this->agility = 10;
		$this->strength = 8;
		$this->wit = 3;
		echo $this->getName().": I'll engrave my name in history!".PHP_EOL;	
	}
	public function __destruct()
	{
		echo $this->getName().": Aarrg I can't believe I'm dead...".PHP_EOL;
	}

	public function attack()
	{
		echo $this->getName().": I'll crush you with my hammer!".PHP_EOL;
	}
	//Movable
	public function moveRight()
	{
		echo $this->name.": moves right like a bad boy.".PHP_EOL;
	}
	public function moveLeft()
	{
		echo $this->name.": moves left like a bad boy.".PHP_EOL;
	}
	public function moveUp()
	{
		echo $this->name.": moves up like a bad boy.".PHP_EOL;
	}
		public function moveDown()
	{
		echo $this->name.": moves down like a bad boy.".PHP_EOL;
	}


}