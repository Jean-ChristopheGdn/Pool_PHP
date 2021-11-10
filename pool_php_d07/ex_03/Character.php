<?php 
include_once("IMovable.php");

class Character implements IMovable
{
	protected $name = '';
	protected $life = 50;
	protected $agility = 2;
	protected $strength = 2;
	protected $wit = 2;

	const CLASSE = self::class;

	public function __construct($name)
	{
		$this->name = $name;
	}

	//Getters

	public function getName()
	{
		return $this->name;
	}
	public function getLife()
	{
		return $this->life;
	}
	public function getAgility()
	{
		return $this->agility;
	}
	public function getStrength()
	{
		return $this->strength;
	}
	public function getWit()
	{
		return $this->wit;
	}
	public function getClasse()
	{
		return self::class;
	}
	//Movable
	public function moveRight()
	{
		echo $this->name.": moves right.".PHP_EOL;
	}
	public function moveLeft()
	{
		echo $this->name.": moves left.".PHP_EOL;
	}
	public function moveUp()
	{
		echo $this->name.": moves up.".PHP_EOL;
	}
		public function moveDown()
	{
		echo $this->name.": moves down.".PHP_EOL;
	}
}