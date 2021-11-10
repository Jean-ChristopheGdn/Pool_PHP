<?php 

class Gecko
{
	private $name;
	private $Age;

	public function __construct($name = "",$Age = 0)
	{
		$this->name = $name;
		$this->Age = $Age;

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

	public function getAge()
	{
		return $this->Age;
	}

	public function setAge($new_Age)
	{
		$this->Age = $new_Age;
	}

	public function status()
	{
		switch($this->Age)
		{
		case 0:
		echo "Unborn Gecko".PHP_EOL;
		break;
		case 1:
		case 2:
		echo "Baby Gecko".PHP_EOL;
		break; 
		case 3:
		case 4:
		case 5:
		case 6:
		case 7:
		case 8:
		case 9:
		case 10:
		echo "Adult Gecko".PHP_EOL;
		break;
		case 11:
		case 12:
		case 13:
		echo "Old Gecko".PHP_EOL;
		break;
		default : 
		echo "Impossible Gecko".PHP_EOL;
		break;
		}
	}
}
