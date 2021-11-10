<?php 

class Canary extends Animal

{
private $eggs = 0; 	

	public function __construct($name = "")
	{
		$this->name = $name;
		parent:: __construct($name, 2, Animal::BIRD);
		echo "Yellow and smart? Here I am!".PHP_EOL;
	}

	public function getEggsCount()
	{
		return $this->eggs;
	}

	public function layEgg()
	{
		$this->eggs++;
	}

}