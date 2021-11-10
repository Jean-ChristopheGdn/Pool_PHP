<?php

include_once("Pony.php");

$pingouin = new Pony("female","Pingouin","black");
echo $pingouin;
$pingouin->speak();
$pingouin->patate();

echo $pingouin->__get("gender").PHP_EOL;
echo $pingouin->__get("name").PHP_EOL;
echo $pingouin->__get("color").PHP_EOL;

$pingouin->__set("gender", "Non-Binary");
$pingouin->__set("name", "Clyde");
$pingouin->__set("color", "Pink");

echo $pingouin->__get("gender").PHP_EOL;
echo $pingouin->__get("name").PHP_EOL;
echo $pingouin->__get("color").PHP_EOL;