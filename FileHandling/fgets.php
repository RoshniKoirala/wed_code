<?php


/*
$file=fopen("file1.txt","r");
echo fgets($file)."<br>";
fclose($file);
*/

$file=fopen("file1.txt","r");
while(!feof($file))
{
	echo fgets($file)."<br>";
}
fclose($file);

?>