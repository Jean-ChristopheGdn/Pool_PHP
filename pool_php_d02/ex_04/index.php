<?php 
require("ex_04.php");

echo my_password_verify($argv[1], md5(rand()), md5($argv[1])).PHP_EOL;