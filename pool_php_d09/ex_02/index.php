<?php
echo $_GET['name'];
if(isset($_GET["name"]))
{ 
    echo "Hello ".$_GET["name"];
}
elseif (isset($_GET["name"]) == "")
{
	echo "Hello platypus";
}
else
{
    echo "Hello platypus";
}

