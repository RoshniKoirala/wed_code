<?php
//Q.no-4) WAP in PHP t test the error handler by trying to output variable that does not exist:

//error handler function
function CustomError($errno, $errstr){
    echo"<b>Error:</b> [$errno] $errstr";
}
//set error handler
set_error_handler("CustomError");
//trigger error
echo($test);
?>