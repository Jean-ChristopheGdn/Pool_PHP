<?php 

class Animal
{
	const MAMMAL = 0;
	const FISH = 1;
	const BIRD = 2;
	private $name;
	private $legs;
	private $type;
	private static $NumberOfAnimalsAlive = 0;
	private static $NumberOfMammals = 0;
	private static $NumberOfFishes = 0;
	private static $NumberOfBirds = 0;


public function __construct($name = "", $legs = "", $type = "")
	{
		$this->name = $name;
		$this->type = $type;
		$this->legs = $legs;
	echo "My name is ".$this->name." and I am a ".$this->getType()."!".PHP_EOL;
	Animal::$NumberOfAnimalsAlive++;

			if ($this->type == Animal::MAMMAL)
		{
			Animal::$NumberOfMammals++;
		
		}
		elseif ($this->type == Animal::FISH)
		{
			Animal::$NumberOfFishes++;
			;
		}
		elseif ($this->type == Animal::BIRD)
		{
			Animal::$NumberOfBirds++;
			
		}
	}
public function __destruct()
	{
			Animal::$NumberOfAnimalsAlive--;

			if ($this->type == Animal::MAMMAL)
		{
			Animal::$NumberOfMammals--;
		
		}
		elseif ($this->type == Animal::FISH)
		{
			Animal::$NumberOfFishes--;
			;
		}
		elseif ($this->type == Animal::BIRD)
		{
			Animal::$NumberOfBirds--;
			
		}
	}
	

public function getName()
	{
		return $this->name;
	}
public function setName($_name)
	{
		$this->name = $_name;
	}
public function getLegs()
	{
		return $this->legs;
	}
public function setLegs($_legs)
	{

		$this->legs = $_legs;
	}
public function getType()
	{
				
		if ($this->type == Animal::MAMMAL)
		{
			return "mammal";
		}
		elseif ($this->type == Animal::FISH)
		{
			return "fish";
		}
		elseif ($this->type == Animal::BIRD)
		{
			return "bird";
		}
		
	}	
public function setType($_type)
	{
		$this->type = $_type;
	}
public function getNumberOfAnimals()
	{
		return $this->numberOfAnimals;
	}
public function getNumberOfAnimalsAlive()
	{
		
		if (self::$NumberOfAnimalsAlive == 1)
		{
			echo "There is currently ".self::$NumberOfAnimalsAlive." animal alive in our world.".PHP_EOL;
			
		}

		elseif (self::$NumberOfAnimalsAlive  == 0 || self::$NumberOfAnimalsAlive > 1)
		{
			echo "There are currently ".self::$NumberOfAnimalsAlive. " animals alive in our world.".PHP_EOL;
			
		}
		return self::$NumberOfAnimalsAlive;
	}
public function getNumberOfMammals()
	{

		if (self::$NumberOfMammals  == 1)
		{
			echo "There is currently ".self::$NumberOfMammals ." mammal alive in our world.".PHP_EOL;
		}

		elseif (self::$NumberOfMammals  == 0 || self::$NumberOfMammals  > 1)
		{
			echo "There are currently ".self::$NumberOfMammals ." mammals alive in our world.".PHP_EOL;
		}
		return self::$NumberOfMammals;
	}
public function getNumberOfFishes()
	{
		if (self::$NumberOfFishes  == 0 || self::$NumberOfFishes == 1)
		{
			echo "There is currently ".self::$NumberOfFishes." fish alive in our world.".PHP_EOL;
		}

		elseif (self::$NumberOfFishes  > 1)
		{
			echo "There are currently ".self::$NumberOfFishes." fishes alive in our world.".PHP_EOL;
		}
		return self::$NumberOfFishes;
	}
public function getNumberOfBirds()
	{
		if (self::$NumberOfBirds  == 1)
		{
			echo "There is currently ".self::$NumberOfBirds ." bird alive in our world.".PHP_EOL;
		}

		elseif (self::$NumberOfBirds  == 0 || self::$NumberOfBirds  > 1)
		{
			echo "There are currently ".self::$NumberOfBirds ." birds alive in our world.".PHP_EOL;
		}
		return self::$NumberOfBirds;
	}

}