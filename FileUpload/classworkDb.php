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

$sql = "create database Student";
if(mysqli_query($conn, $sql)){
    echo "Database created successfully";
}
else{
    echo "Failed to create database";
}
/*
if(mysqli_select_db($conn,'Student')){
    echo" ";#check database
}

$sql = "CREATE TABLE student(
    id INT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    address VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL
)";
if(mysqli_query($conn,$sql)){
    echo'Table user created successfully. ';
}else
{
    echo'failed to create table';
}
*/
mysqli_close($conn);

?>