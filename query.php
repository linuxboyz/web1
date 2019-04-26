<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
        font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
        background-color: #4E5869;
        margin: 0;
        padding: 0;
        color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best
practices to zero padding and margin on lists. For consistency, you
can either specify the amounts you want here, or on the list items
(LI, DT, DD) they contain. Remember that what you do here will cascade
to the .nav list unless you write a more specific selector. */
        padding: 0;
        margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
        margin-top: 0;   /* removing the top margin gets around an issue where
margins can escape from their containing div. The remaining bottom
margin will hold it away from any elements that follow. */
        padding-right: 15px;
        padding-left: 15px; /* adding the padding to the sides of the
elements within the divs, instead of the divs themselves, gets rid of
any box model math. A nested div with side padding can also be used as
an alternate method. */
}
a img { /* this selector removes the default blue border displayed in
some browsers around an image when it is surrounded by a link */
        border: none;
}

/* ~~ Styling for your site's links must remain in this order -
including the group of selectors that create the hover effect. ~~ */
a:link {
        color:#414958;
        text-decoration: underline; /* unless you style your links to look
extremely unique, it's best to provide underlines for quick visual
identification */
}
a:visited {
        color: #4E5869;
        text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a
keyboard navigator the same hover experience as the person using a
mouse. */
        text-decoration: none;
}

/* ~~ this container surrounds all other divs giving them their
percentage-based width ~~ */
.container {
        width: 80%;
        max-width: 1260px;/* a max-width may be desirable to keep this layout
from getting too wide on a large monitor. This keeps line length more
readable. IE6 does not respect this declaration. */
        min-width: 780px;/* a min-width may be desirable to keep this layout
from getting too narrow. This keeps line length more readable in the
side columns. IE6 does not respect this declaration. */
        background-color: #FFF;
        margin: 0 auto; /* the auto value on the sides, coupled with the
width, centers the layout. It is not needed if you set the
.container's width to 100%. */
}

/* ~~ the header is not given a width. It will extend the full width
of your layout. It contains an image placeholder that should be
replaced with your own linked logo ~~ */
.header {
        background-color: #6F7D94;
        font-size: 16px;
}

/* ~~ These are the columns for the layout. ~~

1) Padding is only placed on the top and/or bottom of the divs. The
elements within these divs have padding on their sides. This saves you
from any "box model math". Keep in mind, if you add any side padding
or border to the div itself, it will be added to the width you define
to create the *total* width. You may also choose to remove the padding
on the element in the div and place a second div within it with no
width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated.
If you must add margin, avoid placing it on the side you're floating
toward (for example: a right margin on a div set to float right). Many
times, padding can be used instead. For divs where this rule must be
broken, you should add a "display:inline" declaration to the div's
rule to tame a bug where some versions of Internet Explorer double the
margin.

3) Since classes can be used multiple times in a document (and an
element can also have multiple classes applied), the columns have been
assigned class names instead of IDs. For example, two sidebar divs
could be stacked if necessary. These can very easily be changed to IDs
if that's your preference, as long as you'll only be using them once
per document.

4) If you prefer your nav on the right instead of the left, simply
float these columns the opposite direction (all right instead of all
left) and they'll render in reverse order. There's no need to move the
divs around in the HTML source.

*/
.sidebar1 {
        float: left;
        width: 20%;
        background-color: #93A5C4;
        padding-bottom: 10px;
}
.content {
        padding: 10px 0;
        width: 80%;
        float: left;
        background-color: #CCC;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol {
        padding: 0 15px 15px 40px; /* this padding mirrors the right padding
in the headings and paragraph rule above. Padding was placed on the
bottom for space between other elements on the lists and on the left
to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use
a premade flyout menu like Spry) ~~ */
ul.nav {
        list-style: none; /* this removes the list marker */
        border-top: 1px solid #666; /* this creates the top border for the
links - all others are placed using a bottom border on the LI */
        margin-bottom: 15px; /* this creates the space between the navigation
on the content below */
}
ul.nav li {
        border-bottom: 1px solid #666; /* this creates the button separation */
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure
that your links retain their button look even after being visited */
        padding: 5px 5px 5px 15px;
        display: block; /* this gives the link block properties causing it to
fill the whole LI containing it. This causes the entire area to react
to a mouse click. */
        text-decoration: none;
        background-color: #8090AB;
        color: #000;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the
background and text color for both mouse and keyboard navigators */
        background-color: #6F7D94;
        color: #FFF;
}

/* ~~ The footer ~~ */
.footer {
        padding: 10px 0;
        background-color: #6F7D94;
        position: relative;/* this gives IE6 hasLayout to properly clear */
        clear: both; /* this clear property forces the .container to
understand where the columns end and contain them */
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your
page. The floated element must precede the element it should be next
to on the page. */
        float: right;
        margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your
page. The floated element must precede the element it should be next
to on the page. */
        float: left;
        margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as
the final element following the last floated div (within the
#container) if the #footer is removed or taken out of the #container
*/
        clear:both;
        height:0;
        font-size: 1px;
        line-height: 0px;
}
label {
width:150px;
float: left;
clear: left;
margin-right: .75em;
}

-->
</style><!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be
placed on any of the columns in this layout with the same corrective
effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout
trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]--></head>

<body>

<div class="container">
  <div class="header"><h1>AMC Internatinal</h><!-- end .header --></div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="add.php">Add Entries</a></li>
     <!-- <li><a href="displayevent.php">View Entries</a></li> -->
      <li><a href="query.php">Search 4 Records</a></li>
    </ul>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <!-- end .sidebar1 --></div>
  <div class="content">

<?php
$user="root";
$pass="";
$database="amc";
mysql_connect(localhost,$user);
@mysql_select_db($database) or die ("Database if offline. Call
0790609220 immediately!!!");


$todo=$_POST['todo'];
if(isset($todo) and $todo=="search"){
$search_text=$_POST['search_text'];
$type=$_POST['type'];

$search_text=ltrim($search_text);
$search_text=rtrim($search_text);

 if($type<>"company"){
$kt=split(" ",$search_text);//Breaking the string to array of words
// Now let us generate the sql
   while(list($key,$val)=each($kt)){
if($val<>" " and strlen($val) > 0){$A .= " company like '%$val%' or ";}
   }// end of while
$A=substr($A,0,(strLen($A)-3));
// this will remove the last or from the string
$query="select * from deals where $A";

  }

else{

$kt=split(" ",$search_text);//Breaking the string to array of words
// Now let us generate the sql
   while(list($key,$val)=each($kt)){
if($val<>" " and strlen($val) > 0){$q .= " email like '%$val%' or ";}
   }// end of while
$q=substr($q,0,(strLen($q)-3));
// this will remove the last or from the string
$query="select * from deals where $q";
  } // end of if else based on type value






$nt=mysql_query($query);

echo mysql_error();
$num=mysql_numrows($nt);

?>
<table border="2" cellspacing="2" cellpadding="2">
<tr>
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
while ($i < $num) {

$date=mysql_result($nt,$i,"date");
$se=mysql_result($nt,$i,"se");
$name=mysql_result($nt,$i,"name");
$company=mysql_result($nt,$i,"company");
$title=mysql_result($nt,$i,"title");
$phone=mysql_result($nt,$i,"phone");
$cel=mysql_result($nt,$i,"cel");
$fax=mysql_result($nt,$i,"fax");
$email=mysql_result($nt,$i,"email");
$country=mysql_result($nt,$i,"country");
$event=mysql_result($nt,$i,"event");
?>
<tr>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $date; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $se; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $name; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $company;
?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $title; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $phone; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $cel; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $fax; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $email; ?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $country;
?></font></td>
<td><font face="Arial. Helvetica, sans-serif"><?php echo $event; ?></font></td>
</tr>

<?php

$i++;
}


}else{
echo "<form method=post action=''><input type=hidden name=todo value=search>
<input type=text name=search_text ><input type=submit value=Search><br>
<input type=radio name=type value=email checked>Company
<input type=radio name=type value=company>Email
</form>
";
}


?>




<p>
    <p>&nbsp;</p>
    <p><!-- end .content --></p>
  </div>
  <div class="footer">
    <p>Copyright @2012. Asetos Computers<!-- end .footer --></p>
  </div>
  <!-- end .container --></div>
</body>
</html>
