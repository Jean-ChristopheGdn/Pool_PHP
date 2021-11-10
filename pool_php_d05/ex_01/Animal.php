<?php 

class Animal
{
	const MAMMAL = 0;
	const FISH = 1;
	const BIRD = 2;
	private $name;
	private $legs;
	private $type;

public function __construct($name = "", $legs = "", $type = "")
	{
		$this->name = $name;
		$this->type = $type;
		$this->legs = $legs;
	echo "My name is ".$this->name." and I am a ".$this->getType()."!".PHP_EOL;
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



}