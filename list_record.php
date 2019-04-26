<html>
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$db_name="amc"; // Database name 
$tbl_name="deals"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username") or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
<table width="400" border="1" cellspacing="0" cellpadding="3">
<tr>
<td colspan="4"><strong>List data from mysql </strong> </td>
</tr>

<tr>
<td align="center"><strong>Date</strong></td>
<td align="center"><strong>Sales Exec.</strong></td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Company</strong></td>
<td align="center"><strong>Job Title</strong></td>
<td align="center"><strong>Telephone</strong></td>
<td align="center"><strong>Fax</strong></td>
<td align="center"><strong>Cellphone</strong></td>
<td align="center"><strong>Email</strong></td>
<td align="center"><strong>Country</strong></td>
<td align="center"><strong>Event</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td><?php echo $rows['date']; ?></td>
<td><?php echo $rows['se']; ?></td>
<td><?php echo $rows['name']; ?></td>
<td><?php echo $rows['company']; ?></td>
<td><?php echo $rows['title']; ?></td>
<td><?php echo $rows['phone']; ?></td>
<td><?php echo $rows['fax']; ?></td>
<td><?php echo $rows['cel']; ?></td>
<td><?php echo $rows['email']; ?></td>
<td><?php echo $rows['country']; ?></td>
<td><?php echo $rows['event']; ?></td>

<td><a href="update.php?email=<?php echo $rows['email']; ?>">update</a></td>
</tr>

<?php
}
?>

</table>
</td>
</tr>
</table>

<?php
mysql_close();
?>
<a href='index.php'>Back to HomePage</a>
</html>
