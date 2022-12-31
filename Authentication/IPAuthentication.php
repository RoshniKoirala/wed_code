<?php
$accept=array("127","0","0","1");
$REMOTE_ADDR=$_SERVER['REMOTE_ADDR'];
$remote=explode(".",$REMOTE_ADDR);
$match=1;

for($i=0;$i<sizeof($accept);$i++) {
	if($remote[$i] !=$accept[$i]) {
		$match=0;
	}
}
if($match)  {
	echo "<h2>Accept Granted!</h2>";
}
else{
	echo "<h2>Acess Forbidden</h2>";
}
?>
