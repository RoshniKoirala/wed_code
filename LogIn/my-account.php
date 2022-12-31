<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<body>
    Welcome, <?php
    echo $_SESSION['username'];
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>