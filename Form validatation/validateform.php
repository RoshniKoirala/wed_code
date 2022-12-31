<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post" action="">
	Name: <input type="text" name="username"><br><br>
	Password: <input type="password" name="password"><br> <br>
	Email: <input type="text" name="email"><br> <br>
	URL: <input type="text" name="url"> <br><br>
Gender: <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="LGBTQ">Not Defined<br><br>
 
          <input type="checkbox" name="faculty[]" value="bim"/>BIM<br>
          <input type="checkbox" name="faculty[]" value="bsw"/>BSW<br>
         <input type="checkbox" name="faculty[]" value="bba"/>BBA<br>
         <input type="checkbox" name="faculty[]" value="csit"/>CSIT<br>
         <input type="checkbox" name="faculty[]" value="bbm"/>BBM<br>
         <input type="checkbox" name="faculty[]" value="bbs"/>BBS<br>
 

	<input type="submit" name="submit" value="submit">
	
</form>
<?php
if(isset($_POST['submit']))  {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$url=$_POST['url'];
	//$gender=$_POST['gender'];


	//validate username
	if(empty($username)) {
		echo "Username cannot be empty";
	}
	else {
		echo "$username<br>";
	}


//Validate password
if(empty($password) || strlen($password)<=8) {
	echo "password must be greater than 8 character";
}
else{
	echo "$password<br>";
}


//validate email
if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)) {
	echo " Enter valid email";

}else {
	echo "$email <br>";
}



//validate url
if(empty($url) || !filter_var($url,FILTER_VALIDATE_URL)) {
	echo "Enter valid url";
} else {
	echo "$url <br>";
}

 //validate gender
if(empty($gender)) {
		echo "One gender is necessary";
	}
	else {
		echo "$gender<br>";
	}

//Validate faculty
	if(empty($_POST['faculty']))  {
		echo "Please select any one faculty ";
	} else {
		$faculty=$_POST['faculty'];
		foreach($faculty as $value) {
			echo $value;
		}
	}





}
?>
</body>
</html>