<?php 

function my_password_hash($password)
{
	$arr = ['hash' => md5($password), 'salt' => md5(uniqid())];

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