<?php
$file="file1.txt";
//unlink($file);
if(!unlink($file))
{
	echo "Error deleting $file";
}
else
{
	echo ("Deleted $file");
}



?>