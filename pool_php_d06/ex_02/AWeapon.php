<?php

abstract class AWeapon
{
	protected $name='';
	protected $apcost=0;
	protected $damage=0;
	protected $melee=false;

	
	public function __construct($name, $apcost, $damage)
	{
		$this->name = $name;
		$this->apcost = $apcost;
		$this->damage = $damage;

		if (is_string($name) == false || is_int($apcost) == false || is_int($damage) == false)
		{
			throw new Exception ('Error in AWeapon constructor. Bad parameters.');
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

	public function isMelee ()

	{
		return $this->melee;
	}

	abstract public function attack ();
	
}
