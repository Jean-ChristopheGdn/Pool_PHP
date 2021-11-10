<?php
include_once("AWeapon.php");

class PowerFist extends AWeapon

{
	protected $melee = true;

	public function __construct()
		{

			AWeapon:: __construct('Power Fist', 8, 50);
		}
	public function attack()
		{
			echo "SBAM".PHP_EOL;
		}
		

}