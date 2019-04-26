<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="amc"; // Database name 
$tbl_name="deals"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$date=$_POST['date'];
$se=trim(ucwords(strtolower($_POST['se'])));
$name=trim(ucwords(strtolower($_POST['name'])));
$company=trim(ucwords(strtolower($_POST['company'])));
$title=trim(ucwords(strtolower($_POST['title'])));
$phone=$_POST['phone'];
$cel=$_POST['cel'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$country=trim(ucwords(strtolower($_POST['country'])));
$event=$_POST['event'];


#// update data in mysql database 
$sql="DELETE from deals WHERE email='$email'";

$result=mysql_query($sql);

#// if successfully updated. 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='index.php'>Back Home</a>";
}

else {
echo "There Seems to be an ERROR";
}
require 'del_record.php';
?> 

