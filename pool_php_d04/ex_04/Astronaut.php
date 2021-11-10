<?php 

include_once("Mars.php");


class Astronaut
{
	private $name;
	public  $snacks = 0;
	private $destination = NULL;
	private $id;
	public static $count_name = 0;


public function __construct($name="")
	{	
		$this->id = self::$count_name;
		self::$count_name++;
		$this->name = $name;
		echo $this->name." ready for launch !".PHP_EOL;		
	}
public function getName()
	{
		return $this->name;
	}

public function getId()
	{
		return $this->id;
	}
public function getDestination()
	{
		return $this->destination;
	}
public function setDestination($destination)
	{
		$this->destination = $destination;
	}
public function getSnacks()
	{
		return $this->snacks;
	}	
public function doActions($action ="")
	{
		if ($action == NULL)
		{
			echo $this->name.": Nothing to do.".PHP_EOL;
		}
		elseif ($action instanceof planet\Mars)
		{
			echo $this->name.": started a mission !".PHP_EOL;
			$this->destination++;
		}
		elseif ($action instanceof chocolate\Mars)
		{
			echo $this->name." is eating mars number ".$action->getId().".".PHP_EOL;
			$this->snacks++;
		}

	}
public function __destruct()
	{
		if ($this->destination!="")
		{
			echo $this->name.": Mission aborted !".PHP_EOL;
		}
		else
		{
			
			$this->id;
			echo $this->name.": I may have done nothing, but I have ".$this->snacks." Mars to eat at least !".PHP_EOL;
		}
	}

}