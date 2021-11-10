<?php 



namespace planet\moon;
include_once("Mars.php");
class Phobos
{
	private $mars;

	public function getMars()
	{
		return $this->mars;
	}
	public function __construct($planet)
	{
		$this->mars = $planet;
		if ($planet instanceof \planet\Mars)
		{
			echo "Phobos placed in orbit.".PHP_EOL;
		}
		else
		{
			echo "No planet given.".PHP_EOL;
		}
	}
}