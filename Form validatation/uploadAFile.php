<?php

$path="/Form validation/uploadAFile.php";
 //show filename with file extension
 echo basename($path)."<br/>";

 echo basename($path,".php");
?>

<?php
	print_r(pathinfo("/Form validation/uploadAFile.php"));
?>