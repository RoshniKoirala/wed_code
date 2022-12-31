<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="POST" action="">
	<input type="text" name="name">
	<input type="text" name="Phone">
	<input type="submit" name="submit">
</form>
<?php
$name='';


if(isset($_POST['submit'])) {
	$name=$_POST['name'];
	$Phone=$_POST['Phone'];
	$reg="/^[a-zA-Z ]+$/";
	$reg2="/^98[0-9]{8}$/";


	if(preg_match($reg, $name)) {
		echo $name;
	}
	else {
		echo "Only alphabets.";
	}

if(preg_match($reg2, $Phone)) {
		echo $Phone;
	}
	else {
		echo "Only Numbers.";
	}
}
?>
</body>
</html>