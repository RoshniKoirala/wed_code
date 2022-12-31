<!DOCTYPE html>
<html>
<?php
//set the expiration date to one hour ago
setcookie("Name1","Rosie",time()-24*60*60*60,"/",0);
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
echo "Cookie 'user' is denied.".$_COOKIE['Name1'];
?>
</body>
</html>