<?php 

class Gecko
{
	private $name;
	private $Age;
	private $energy = 100; 

	public function __construct($name = "",$Age = 0)
	{
		$this->name = $name;
		$this->Age = $Age;
		$this->energy = $energy;

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


	public function hello($str)
	{	
		if ($this->name == NULL)
		{
			echo "Yo".PHP_EOL;
		} 

		elseif (is_string($str))
		{
		echo "Hello ".$str.", I'm ".$this->name."!".PHP_EOL;		
		}
		elseif (is_int($str))
		{
			for ($i = 0; $i < $str; $i++)
			{
				echo "Hello, I'm ".$this->name. "!".PHP_EOL;
				
			}
		}
		else
		{
			return;
		}				
	}
	public function eat($str)
	{
		if ($str)
	}

}
