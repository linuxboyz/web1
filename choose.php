<?php 
mysql_connect("localhost", "root") or die(mysql_error()); 
mysql_select_db("amc") or die(mysql_error()); 
# $data = mysql_query("SELECT * FROM tblEvents") 
# or die(mysql_error()); 

 $sql = mysql_query("event from tblEvents");
    $arr1 = array();
echo "<select name=event size=10>";
  foreach ($arr1 as $i){
	if ($i == 'CCNA'){
	 echo "<option value=$i selected>$i";
	}
	 else {echo "<option value=$i>$i";
	}
  }
echo "</select>";
?>
