<!DOCTYPE html>
<html>
<head>
	<title>index.php</title>
</head>
<body>
<?php
	if (isset($_POST["name"]))
	{
		echo $_POST["name"];
	}
	else 
	{
?>
	<form method="post">
		<input type="text" name="name"><br/>
		<input type="submit" value="Submit"><br/>
	</form>
<?php 
	} 
?>
</body>
</html>