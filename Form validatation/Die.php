//WAP in php whether the file exist or not using die function.
<?php
if(file_exists("mytestfile.txt")) {
$file = fopen("mytestfile.txt", "r");
} else {
die("Error: The file does not exist.");
}



	?>