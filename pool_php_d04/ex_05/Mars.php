<?php 

namespace chocolate;

	class Mars 
	{
	public static $i = 0;	
	private $id;

	public function __construct()
	{
	$this->id = self::$i;
	self::$i++;
	}


		public function getId()
		{
		return $this->id;
		}

	}

namespace planet;

	class Mars
	{

	private $size;

		public function __construct($size = "")
		{
			$this->size = $size;
		}

		public function getSize()
		{
		return $this->size;
		}
		public function setSize($size)
		{
		$this->size = $size;
		}
	}