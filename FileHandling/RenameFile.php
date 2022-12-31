<?php
$file="file.txt";

if(file_exists($file)) {
	if(rename($file, "NewFile.txt"))  {
		echo "File renamed sucessfully";
	}
	else {
		echo "File cannot be renamed";
	}
}
else {
	echo "file doesn't exist";
}


?>