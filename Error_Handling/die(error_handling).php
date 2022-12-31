 


 <?php
 #Qno-1)WAP in PHP to check whether the file exists or not using die function.

if(file_exists("mytext.txt")){
    $file = fopen("mytext.txt","r");
    $text=fgets($file);
    echo "The file exists <br>";
    echo "$text";
}
else{
    die("Error: The file does not exist!!!");
}


?>