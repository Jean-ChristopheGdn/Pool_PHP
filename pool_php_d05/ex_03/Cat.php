<?php 

include_once("Animal.php");

class Cat extends Animal

{
	private $color;

public function __construct($name = "", $color = "grey")		
	{
		$this->name = $name;
		$this->color = $color;
	 	parent:: __construct($name, 4, Animal::MAMMAL);
		echo $name.": MEEEOOWWWW".PHP_EOL;
		parent:: getLegs();
		
	}
public function meow()
	{
		$this->color;

		echo $this->name." the ".$this->color." kitty is meowing.".PHP_EOL;

	}

public function getColor()
	{
		return $this->color;
	}
public function setColor($_color)
	{
		$this->color = $_color;
	}	
}