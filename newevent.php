<html>
<?php
$con = mysql_connect(localhost,"root");
if (!$con){
die("could not connect:" . mysql_error());
}
mysql_select_db("amc", $con);
mysql_query( "INSERT INTO tblEvents (event) VALUES ('$_POST[newevent]')");
mysql_close($con);
require 'edit.php';
?>
</html>
