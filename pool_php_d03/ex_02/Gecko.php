<?php 

class Gecko
{
	public $name;

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
}