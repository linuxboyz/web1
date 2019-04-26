<?php
$user="root";
$pass="";
$database="amc";

$date=date("d/m/Y H:i:s");
$se=trim(ucwords(strtolower($_POST['se'])));
$name=trim(ucwords(strtolower($_POST['name'])));
$company=trim(ucwords(strtolower($_POST['company'])));
$title=trim(ucwords(strtolower($_POST['title'])));
$phone=$_POST['phone'];
$cel=trim(strtoupper($_POST['cel']));
$fax=trim(strtoupper($_POST['fax']));
$email=$_POST['email'];
$country=trim(ucwords(strtolower($_POST['country'])));
$event=$_POST['event'];
#if($event > 1){
#echo "You have to select an event you are working on. Make sure no empty fields are submitted while you're at it.";
#echo "<center><input type='button' value='Retry' onClick='history.go(-1)'></center>";
#exit();
#}else{

mysql_connect(localhost,$user);
@mysql_select_db($database) or die ("Database if offline. Call 0790609220 immediately!!!");

$unique_check="select company, email from deals where company='$_POST[company]' AND email='$_POST[email]'";
$results_unique_check = mysql_query($unique_check);
$rowcount = mysql_num_rows($results_unique_check);

if($rowcount > 0){
echo "$rowcount record already in Database. Check who's got the deal", "<br>";
echo "<a href=index.php>Go Back</a>";
exit();
}

$query="INSERT INTO deals VALUES ('$date','$se','$name','$company','$title','$phone','$cel','$fax','$email','$country','$event')";
mysql_query($query);
mysql_close();


echo "Thank you, your entry has been captured<br>";
echo "<a href=index.php>Back to HomePage</a>";

?>
