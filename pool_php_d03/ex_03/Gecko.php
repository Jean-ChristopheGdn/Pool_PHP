<?php 

class Gecko
{
	private $name;

	public function __construct($name = "")
	{
		$this->name = $name;

		if ($name !="")
			{
			echo "Hello ".$this->name." !" .PHP_EOL;
			}
		else
			{
			echo "Hello !".PHP_EOL;
			}
	}

	public function __destruct()
	{		
		if ($this->name != "")
		{
		echo "Bye ".$this->name." !".PHP_EOL;
		}
		else
		{
			echo "Bye !".PHP_EOL;
		}
	}

	public function getName()
	{
		return $this->name;
	}
	
}