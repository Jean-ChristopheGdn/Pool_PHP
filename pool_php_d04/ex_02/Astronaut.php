<?php 

class Astronaut
{
	private $name;
	private $snacks = 0;
	private $destination = NULL;
	public static $Id = 0;

public function __construct($name ="")
	{
		
		echo $name." ready for launch !".PHP_EOL;
		
	}

public function getId()
	{
		return self::$Id++;
	}
public function getDestination()
	{
		return $this->destination;
	}

}