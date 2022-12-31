<?php


//To read a single character
$file=fopen("file.txt", "r");
echo fgetc($file)."<br>";
fclose($file);

?>

<?php

// To read whole file
$file=fopen("file1.txt","r");
while(!feof($file))
{
	echo fgetc($file);
}
fclose($file);

?>