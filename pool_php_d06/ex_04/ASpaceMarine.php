<?php 

abstract class SpaceMarines implements IUnit
{
	private $name;
	private $hp = 0;
	private $ap = 0;

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
}