<?php 

interface IUnit
{
	public function equip($equip);
	
	public function attack($attack);
	
	public function receiveDamage($receiveDamage);
	
	public function moveCloseTo($moveCloseTo);

	public function recoverAP();
}