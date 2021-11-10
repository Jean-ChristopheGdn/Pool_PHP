<?php 

include_once("Animal.php");

class Shark extends Animal

{
private $frenzy = false;

	public function __construct($name = "")
	{
		$this->name = $name;
		parent:: __construct($name, 0, Animal::FISH);
		echo "A KILLER IS BORN!".PHP_EOL;
		
	}

	public function status()
	{
		if ($this->frenzy == true)
		{
			echo $this->name." is smelling blood and wants to kill.".PHP_EOL;
		}
		else
		{
			echo $this->name." is swimming peacefully.".PHP_EOL;
		}
	}
	public function smellBlood($bool)
	{
		$this->frenzy = $bool;	
	}

}