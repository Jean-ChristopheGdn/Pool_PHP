<?php 

class Pony
{
	public $gender;
	public $name;
	public $color;

	public function __construct($gender, $name, $color)
	{
		$this->gender = $gender;
		$this->name = $name;
		$this->color = $color;
	    
	}

	public function  __destruct()
	{
		 echo "I'm a dead pony.".PHP_EOL;
	}

	public function __tostring()
	{
		 return "Don't worry, I'm a pony!".PHP_EOL;
	}

	public function __call($nom,$arguments)
	{
		echo "I don't know what to do...".PHP_EOL;
	}
	public function speak()
	{
		echo "Hiii hiii hiii".PHP_EOL;
	}

	//Getters
	public function getGender()
	{
		return $this->gender;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getColor()
	{
		return $this->color;
	}

	//setters
	public function setGender($gender)
	{
		$this->gender = $gender;
	}
	public function setName($name)
	{
		$this->name =$name;
	}
	public function setColor($color)
	{
		$this->color = $color;
	}
}