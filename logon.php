<?php
$_POST['adminpass'] = trim(ucwords(strtolower($_POST['adminpass'])));



$user="root";
$pass="";
$database="amc";

mysql_connect(localhost,$user,$pass);
@mysql_select_db($database) or die ("Siwezi kuona kabati!!!");

$unique_check="select adminpass from users";
/*unique_check = "select adminpass from users where adminpass = $_POST['adminpass']";*/
$results_unique_check = mysql_query($unique_check);
$rowcount = mysql_num_rows($results_unique_check);
echo $rowcount;

if ($rowcount != 1){
echo "Invalid Credentials", "<br>";
echo "<a ref=index.php>Go Back</a>";
exit();
}
else {

require 'display.php'; 
}
?>
