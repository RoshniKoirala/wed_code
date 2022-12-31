<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="get" action="">
	<select name="hobbies">
		<option>Select One</option>
		<option value="games">Games</option>
		<option value="Study">Study</option>
		 
	</select>
	<input type="submit" name="submit">
	
</form>


<?php
if(isset($_GET['submit'])) {
	$hobbies=$_GET['hobbies'];
	if(!in_array($hobbies, array("game","Study")))  {
		echo "Select one option";
	}
	else
	{
		echo "$hobbies";
	}
}

?>
</body>
</html>