<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Firstname is " . $_SESSION["Firstname"] . "<br>";
echo "Lastname is " . $_SESSION["Lastname"];
?>

</body>
</html>
