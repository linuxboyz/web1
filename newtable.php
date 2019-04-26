<?php
$con = mysql_connect(localhost,"root");
if (!$con){
die("could not connect:" . mysql_error());
}
mysql_select_db("amc", $con);
mysql_query( "INSERT INTO table_name (event) VALUES ('$_POST[table_name]')";
mysql_close($con);
?>
