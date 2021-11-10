<?php 


class soldier
{
	protected $hp;
	protected $attack;
	protected $name;

	public function __construct($name, $hp, $attack)
	{
		$this->name = $name;
		$this->hp = $hp;
		$this->attack = $attack;
	}

	public function doDamage($cible)
	{
		$cible 
	}

	//getters
	public function getHp()
	{
		return $this->hp;
	}
	public function getAttack()
	{
		return $this->attack;
	}
	public function getName()
	{
		return $this->name;
	}
	//setters
	public function setHp($hp)
	{
		$this->hp = $hp;
	}
	public function setAttack($attack)
	{
		$this->attack = $attack;
	}
	public function setName($name)
	{
		$this->name = $name;
	}
}

class Imperium extends soldier
{
	public function __construct()
	{
		parent::__construct()
		$this->hp = 50;
		$this->attack = 12;
	}	
}

class Chaos extends soldier
{
	public function __construct()
	{
		parent::__construct();
		$this->hp = 70;
		$this->attack = 12;
	}
}
