<?php 

class Character
{
	private $name = $i;
	private $strength = 0;
	private $magic = 0;
	private $intelligence = 0;
	private $life = 100; 
	private $i = 0;

	public function __construct([string $name])
	{
		$this->i = 0;
		echo "My name is Character".$this->i++.PHP_EOL;
	}

	//getters
	protected function getName()
	{
		return $this->name;
	}
	protected function getStrength()
	{
		return $this->strength;
	}
	protected function getMagic()
	{
		return $this->magic;
	}
	protected function getIntelligence()
	{
		return $this->intelligence;
	}
	protected function getLife()
	{
		return  $this->life;
	}
}