<html>
<?php
$con = mysql_connect(localhost,"root");
if (!$con){
die("could not connect:" . mysql_error());
}
mysql_select_db("amc", $con);
mysql_query("INSERT into allEvents values('$_POST[event]')");
mysql_query("DELETE FROM tblEvents WHERE event='$_POST[event]'");
mysql_close($con);
require 'edit.php';
?>
</html>
