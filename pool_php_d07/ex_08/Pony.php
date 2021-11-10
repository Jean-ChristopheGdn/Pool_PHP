<?php 

class Pony
{
	private $gender;
	private $name;
	private $color;


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

		public function speak()
	{
		echo "Hiii hiii hiii".PHP_EOL;
	}

	//Erreurs
	public function __tostring()
	{
		 return "Don't worry, I'm a pony!".PHP_EOL;
	}

	public function __call($nom,$arguments)
	{
		echo "I don't know what to do...".PHP_EOL;
	}
	 //set & get
	public function __get($arguments)
	{
		switch ($arguments)
		{
		case "gender":		
		echo "It's not right to get a private attribute!".PHP_EOL;
		return $this->gender;
		case "name":
		echo "It's not right to get a private attribute!".PHP_EOL;
		return $this->name;
		case "color":		
		echo "It's not right to get a private attribute!".PHP_EOL;
		return $this->color;
		default :
		echo "There is no attribute: ".$arguments.".".PHP_EOL;
		break;
		}

	}
	public function __set($arguments, $value)
	{
		switch ($arguments)
		{
		case "gender":
		echo "It's not right to set a private attribute!".PHP_EOL;
		$this->gender = $value;
		break;
		case "name":
		echo "It's not right to set a private attribute!".PHP_EOL;
		$this->name = $value;
		break;
		case "color":
		echo "It's not right to set a private attribute!".PHP_EOL;
		$this->color = $value;
		break;
		default :
		echo "There is no attribute: ".$arguments.".".PHP_EOL;
		break;
		}

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