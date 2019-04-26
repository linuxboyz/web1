<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language=JavaScript> var message="Function Disabled!"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Entries</title>



</head>
<body bgcolor="#FFFFFF" ondragstart="return false" onselectstart="return false">


<form id="form2" name="form2" method="post" action="">
      <label for="eventdel">Select an Event whose entries you wand to view</label>
	
	<?php
	$user="root";
	$pass="";
	$database="amc";
        mysql_connect("localhost", "root") or die(mysql_error());
        mysql_select_db("amc") or die(mysql_error());
        $sql="Select event from tblEvents";
        $q=mysql_query($sql);
        echo "<select name=\"event\">";
        echo "<option size =30 ></option>";
        while($row = mysql_fetch_array($q))
        {
        echo "<option value='".$row['event']."'>".$row['event']."</option>";
        }
        echo "</select>";

        ?>


<input type="submit" name="edit2" id="edit2" value="View Records" />
</form>

    <p>&nbsp;</p>

        <?php
	mysql_connect(localhost,$user,$pass);
	@mysql_select_db($database) or die ("Siwezi kuona kabati!!!");

	$query="SELECT * FROM deals WHERE event='$_POST[event]'";
	$result=mysql_query($query);

	$num=mysql_numrows($result);

	mysql_close();
	?>

<table border="2" cellspacing="2" cellpadding="2">
<tr>
<td><font face="Arial. Helvetica, sans-serif"><b>Number</b></font></td>
<td><font face="Arial. Helvetica, sans-serif"><b>Date</b></font></td>
<td><font face="Arial. Helvetica, sans-serif"><b>Sales Exec.</b></font></td>
<td><font face="Arial. Helvetica, sans-serif"><b>Name</b></font></td>
<td><font face="Arial. Helvetica, sans-serif"><b>Company</b></font></td>
<td><font face="Arial. Helvetica, sans-serif"><b>Title</b></font></td>
<td><font face="Arial. Helvetica, sans-serif"><b>Phone</b></font></td>
<td><font face="Arial. Helvetica, sans-serif"><b>Cellphone</b></font></td>
<td><font face="Arial. Helvetica, sans-serif"><b>Fax</b></font></td>
<td><font face="Arial. Helvetica, sans-serif"><b>E-Mail</b></font></td>
<td><font face="Arial. Helvetica, sans-serif"><b>Country</b></font></td>
<td><font face="Arial. Helvetica, sans-serif"><b>Event</b></font></td>
</tr>

<?php

$i=0;
$x=1;
while ($i < $num) {

$date=mysql_result($result,$i,"date");
$se=mysql_result($result,$i,"se");
$name=mysql_result($result,$i,"name");
$company=mysql_result($result,$i,"company");
$title=mysql_result($result,$i,"title");
$phone=mysql_result($result,$i,"phone");
$cel=mysql_result($result,$i,"cel");
$fax=mysql_result($result,$i,"fax");
$email=mysql_result($result,$i,"email");
$country=mysql_result($result,$i,"country");
$event=mysql_result($result,$i,"event");
?>
<tr>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $x; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $date; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $se; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $name; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $company; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $title; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $phone; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $cel; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $fax; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $email; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $country; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $event; ?></font></td>
<td><a href="delete.php?email=<?php echo $email; ?>">delete</a></td>
</tr>

<?php
$x++;
$i++;
}
?>

</body>

<a href='index.php'>Back to HomePage</a>
</html>
