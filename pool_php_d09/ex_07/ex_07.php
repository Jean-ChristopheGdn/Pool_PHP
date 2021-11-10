<?php 

function modify_cookie($name, $value)
{
	setcookie($name,$value,time()+3600, '/');
}