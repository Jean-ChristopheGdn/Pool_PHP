<?php 
include_once("IUnit")
abstract class Monsters implements IUnit
{
	private $name;
	private $hp = 0;
	private $ap = 0;
	private $damage = 0;
	private $apcost = 0;
	protected $melee = true;

	public function __construct()
	{

	}

	public function getName()
	{
		return $this->name;
	}
	public function getHp()
	{
		return $this->hp;
	}
	public function getAp()
	{
		return  $this->ap;
	}
	public function getDamage()
	{
		return $this->damage;
	}
	public function setDamage($damage)
	{
		$this->damage = $damage;
	}
	public function equip()
	{
		echo "Monsters are proud and fight with their own bodies.".PHP_EOL;
	}
	public function attack($a)
	{
		if ($a instanceof AMonster == false || $a instanceof ASpaceMarine == false)
		{
		throw new exception ("Error in AMonster.Parameter is not an IUnit");
		}
	}
}