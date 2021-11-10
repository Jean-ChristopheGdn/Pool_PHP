<?php
include_once("AWeapon.php");

class PlasmaRifle extends AWeapon
{

		protected $melee = false;
	
		public function __construct()
		{

			AWeapon:: __construct('Plasma Rifle', 5, 21);
			
		}
		public function attack()
				{
					echo "PIOU".PHP_EOL;
				}
}