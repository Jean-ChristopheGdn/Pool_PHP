<?php 

function print_movie_from_nbr($nbr)
{
	switch ($nbr) 
	{
		case '3':
			echo "The Three Brothers" .PHP_EOL;
			break;
		case '6';
			echo "The Sixth Sense" .PHP_EOL;
		break;
		case '28';
			echo "28 Days Later" .PHP_EOL;
		break;

		default:
			echo "I don't know." .PHP_EOL;
			break;
	}
}

 ?>