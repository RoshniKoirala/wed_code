<?php
$servername = "localhost";
$username  ="root";
$password  = "";
//Create connection
$conn = mysqli_connect($servername,$username,$password);
//Check connection
if(!$conn){
    die ("Connection failed:".mysqli_connect_error());
}
else
{
    echo"Connected";
}

if(mysqli_select_db($conn,'bcathird')){
    echo" You Baka!!!";#check database
}

$sql = "CREATE TABLE user(
    id INT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
)";
if(mysqli_query($conn,$sql)){
    echo'Table user created successfully. ';
}else
{
    echo'Dattebayo!!!';
}
mysqli_close($conn);

?>