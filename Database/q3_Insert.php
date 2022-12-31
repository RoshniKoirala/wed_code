<?php
/*
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
    echo"Connected<br>";
}
if(mysqli_select_db($conn,'db_studentinfo')){
    echo"database selected<br>";#check database
}
$mysql = "INSERT INTO student(id, name, address, email) VALUES(1, 'Dinesh', 'Tikathali', 'ranad4508@gmail.com'),
(2, 'Jyoti', 'Koteshwor', 'roshni@gmail.com'),
(4, 'Bibek', 'Baneshwor', 'bibek@gmail.com'),
(5, 'Smriti', 'Bhaktapur', 'smriti@gmail.com')";
if(mysqli_query($conn, $mysql)){
    echo "Inserted into table successfully<br>";
}
else{
    echo "Failed to insert<br>";
}
mysqli_close($conn);
?>