<?php
$cookiename="Name1";
$cookievalue="Rosie";
setcookie("$cookiename",$cookievalue,time()+(24*60*60*60),"/","",0);

?>
 <!DOCTYPE html>
<html>

<body>
<?php
if(!isset($_COOKIE[$cookiename])) {
    echo "Cookie named " . '$cookiename '. " is not set";
} else {
    echo "Cookie " . "$cookiename ". " is set<br>";
    echo "Value is: " . $_COOKIE[$cookiename];
}

?>
</body>
</html>