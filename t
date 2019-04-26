#}
$name=trim(ucwords(strtolower($_POST['name'])));
$company=trim(ucwords(strtolower($_POST['company'])));
$title=trim(ucwords(strtolower($_POST['title'])));
$phone=$_POST['phone'];
$cel=trim(strtoupper($_POST['cel']));
$fax=trim(strtoupper($_POST['fax']));
$email=$_POST['email'];
$country=trim(ucwords(strtolower($_POST['country'])));
$event=$_POST['event'];
#echo "<center><input type='button' value='Retry'
onClick='history.go(-1)'></center>";
#exit();
#}
if (isset($_POST['fax'], $_POST['se'], $_POST['event'], $_POST['phone'])) {

mysql_connect(localhost,$user);
@mysql_select_db($database) or die ("Database if offline. Call
0790609220 immediately!!!");


$unique_check="select country, fax from deals where
country='$_POST[country]' AND fax='$_POST[fax]'";
$results_unique_check = mysql_query($unique_check);
$rowcount = mysql_num_rows($results_unique_check);

#if($rowcount != 1){
if($rowcount > 0){
echo "$rowcount record already in Database. Check who's got the deal", "<br>";
echo "<a href=index.php>Go Back</a>";
exit();
}

