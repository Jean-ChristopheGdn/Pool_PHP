<?php 
function my_print_args($argv)

{
	
foreach($argv as $i) 
{
    echo $i.PHP_EOL;	
}

}
my_print_args($argv);
 ?>