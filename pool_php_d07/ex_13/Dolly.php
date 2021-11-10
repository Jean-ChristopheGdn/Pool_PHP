<?php 

class Dolly
{
	public $age;
	public $animal;
	public $doctor;

	public function __construct($age, $animal, $doctor)
	{
		$this->age = $age;
		$this->animal = $animal;
		$this->doctor = $doctor;
		
	}
}

 function clone_object($object)
{
	echo "I will survive !".PHP_EOL;
	return unserialize(serialize($object));
}