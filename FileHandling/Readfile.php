<?php
$filename="file.txt";
$file=fopen($filename, "r");
if($file==false) {
echo "Error in opening a file";
exit();
}


$filesize=filesize($filename);
$filetext=fread($file, $filesize);
//echo "File size ".$filesize."bytes"."<br>";
echo $filetext;

?>