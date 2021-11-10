<?php 

 abstract class AWeapon
{
	private $name = "";
	private $apcost = 0;
	private $damage = 0;
	private $melee = false;

	public function __construct($name = "", $apcost = 0, $damage = 0)
	{

		$this->name = $name;
		$this->apcost = $apcost;
		$this->damage = $damage;
		

		if (is_string($name) == false || is_int($apcost) == false || is_int($damage) == false)
		{
			throw new Exception ("Error in AWeapon constructor. Bad parameters.");
		}

	}

	public function getName()
	{
		return $this->name;
	}

	public function getApcost()
	{
		return $this->apcost;
	}

	public function getDamage()
	{
		return $this->damage;
	}

	public function isMelee()
	{
		return $this->melee;
	}

	public abstract function attack();
}