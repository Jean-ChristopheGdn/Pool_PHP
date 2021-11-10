<?php 
require("ex_05.php");
$map = array();

my_add_elem_map('1',"a", $map);
my_add_elem_map('2',"b", $map);
my_add_elem_map('3',"c", $map);

print_r($map);


my_modify_elem_map('1',"a", $map);
my_modify_elem_map('1',"b", $map);
my_modify_elem_map('3',"c", $map);

print_r($map);


my_delete_elem_map ('1',$map);
my_delete_elem_map ('2',$map);
my_delete_elem_map ('3',$map);

print_r($map);

my_is_elem_valid('3',"c", $map);
