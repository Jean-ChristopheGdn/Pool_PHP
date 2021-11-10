<?php 

class Mars 
{
	public static $Id = 0;	


	public function getId()
	{
		return self::$Id++;
	}

}