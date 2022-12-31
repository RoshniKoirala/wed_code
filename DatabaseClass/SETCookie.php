<?php
setcookie("name","Smriti",time()+1*24*60*60,"/","",0);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Setting Cookies with PHP</title>
</head>
<body>
	<?php
	if(!count($_COOKIE)>0) {
		echo "set cookie value";
	}
	else{
		echo $_COOKIE['name'];
	}
	?>

</body>
</html>
