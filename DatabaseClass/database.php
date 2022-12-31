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

if(mysqli_select_db($conn,'db_studentinfo')){
    echo" Database created sucessfully.";#check database
}

$sql = "CREATE TABLE Student(
    id INT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    address VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL
)";
if(mysqli_query($conn,$sql)){
    echo'Table student created successfully. ';
}else
{
    echo'Error creating a table named student';
}
mysqli_close($conn);

// create datdabase
// $sql = "CREATE DATABASE bcathird";
// if(mysqli_query($conn,$sql)){
//     echo "Database created successfully";
// }else{
//     echo "Error creating database.";
// }
// mysqli_close($conn);

// $sql2 = "CREATE DATABASE onepiece";
// if(mysqli_query($conn,$sql2)){
//     echo"You BAKA!!!";
// }
// else{
//     echo"Simaaaa!";
// }
// mysqli_close($conn);
?>