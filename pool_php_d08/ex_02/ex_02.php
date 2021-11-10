<?php 

function my_password_hash($password)
{
	$arr = ['hash' => md5($password), 'salt' => md5(uniqid())];
	//print_r($arr);
	return ($arr);
}

function my_password_verify($password, $salt, $hash)
{
	$arr = my_password_hash($password);
	if ($arr['hash'] == $hash && $arr['salt'] != $salt)
	{
		return true;
	}
	else
	{
		return false;
	}
}
$points = 0; $value = my_password_hash("my_lovely_password"); if (crypt("my_lovely_password", $value["salt"]) == $value["hash"]) { echo "OK - 2 points".PHP_EOL; $points += 2; } else { echo "Failed".PHP_EOL; } if (my_password_verify("my_lovely_password", $value["salt"], $value["hash"]) === TRUE) { echo "OK - 1 point".PHP_EOL; $points += 1; } else { echo "Failed".PHP_EOL; } echo "Total points : ".$points.PHP_EOL;
