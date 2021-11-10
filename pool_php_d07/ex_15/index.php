<?php 
$spaceMarine = new ImperiumSoldier ("Gessart") ;
$chaosSpaceMarine = new ChaosSoldier ("Ruphen") ;
echo $spaceMarine , PHP_EOL ;
echo $chaosSpaceMarine , PHP_EOL ;
$spaceMarine -> doDamage ( $chaosSpaceMarine) ;
echo $spaceMarine , PHP_EOL ;
echo $chaosSpaceMarine , PHP_EOL ;