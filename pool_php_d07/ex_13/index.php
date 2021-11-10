<?php

require_once ("ex_13.php");
require_once ("Dolly.php");

$animal1 = new Dolly(3, "chat", "Frankenstein");
$animal2 = clone $animal1;
$animal3 = clone $animal2;
$animal4 = $animal1;
$animal5 =  new Dolly(3, "chat", "Frankenstein");
$animal6 =  new Dolly(6, "chat", "Frankenstein");

objects_comparison($animal1, $animal2);
objects_comparison($animal1, $animal4);
objects_comparison($animal1, $animal5);
objects_comparison($animal1, $animal6);
