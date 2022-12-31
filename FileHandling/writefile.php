<?php
$filename="file1.txt";
$file=fopen($filename, "w");
if($file==false) {
echo "Error in opening a file";
exit();
}

fwrite($file,"This is a sample test\n Hello");
fclose($file);
	//reading a file
$file=fopen($filename,"r");
if($file==false) {
	echo "Error in opening file";
	exit();
}
$filesize=filesize($filename);
$filetext=fread($file,$filesize);
fclose($file);

echo "File size".$filesize."<br>";

echo "$filetext"."<br>";
echo "File name".$filename;
                                                                                                            



?>