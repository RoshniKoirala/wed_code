<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6</title>
</head>
<body>
    <form action="" method="POST">
        Name: <input type="text" name="name"><br>
        Address: <input type="text" name="address"><br>
        Phone: <input type="number" name="phone"><br>
        Email: <input type="text" name="email"><br>
        URL: <input type="text" name="url"><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $url = $_POST['url'];

    if(empty($name)){
        echo"Name cannot be empty <br>";
    }else{
        echo"Entered name: $name <br>";
    }
    if(empty($address)){
        echo"Adress cannot be empty";
    }else{
        echo"Entered address: $address <br>";
    }
    if(empty($phone)|| strlen($phone)>10){
        echo"Phone number must be 10 digits<br>";
    }else{
        echo"$phone <br>";
    }

    
    if(empty($email)|| !filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo"Enter valid email<br>";
    }else{
        echo "$email <br>";
    }
    if(empty($url)|| !filter_var($url, FILTER_VALIDATE_URL)){
        echo"Enter valid url<br>";
    }else{
        echo"$url";
    }
}
?>
