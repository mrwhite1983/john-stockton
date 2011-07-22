<html>
<html>
<head>
<title>BTG Subtract Inventory</title>
</head>
<body OnLoad="document.post.barcode.focus();">
<?php

$con = mysql_connect("localhost","BlairTG","Bla1rTG");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

 mysql_select_db("stock", $con); 
 
?>

<img src="OEMlogo.bmp" ALIGN=LEFT style="padding:10px;"> 
<br>

 <center><h1> BTG Front End Inventory - Subtract Inventory  </h1></center>

<br>
<br>
<br>
<br>

<center> <h3> Inventory Scan Out </h3>

Enter a quantity to remove then scan barcode. Or you could simply scan each item and we'll subtract for you.
<br>
    
Simple as pie.
<br>
    <br>

<form action="subtract_count.php" method='post' name="post">

<table border="0" cellpadding="8" cellspacing="2" >

<tr>

<td> Count: <input type="text" name="count" maxlength="20" size="20"> </td>

<td> Scan Barcode: <input type="text" name="barcode" maxlength="20" size="20"> </td>

</tr>

</table>

<input type="Submit" name="Update" value="Submit">

</form>

<br> <br>

<a href="index.php">Home</a> </center>

<?php

if(!empty($_REQUEST['Update']) && $_POST['barcode']=="")
{
echo "<center>Please enter a valid item barcode in which to update.</center>";
}

if(!empty($_REQUEST['Update']) && $_POST['count']=="" && $_POST['barcode']!="")
{
$count=$_POST['count'];
$barcode=$_POST['barcode'];
$check = mysql_query("SELECT * FROM inventory WHERE barcode='$barcode'"); 
if(mysql_num_rows($check) != 0){
  mysql_query("UPDATE inventory SET count = count - 1 WHERE barcode = '".$barcode."'");
echo "<center><img src='gc.jpg' alt='Epic Win!'></center>";
echo "<center>-1</center>";         
}
else {
echo "<center>This item does not seem to be entered into the database, please add this item <a href=inventory.php>here</a></center>";  
}
}

if(!empty($_REQUEST['Update']) && $_POST['count']!="" && $_POST['barcode']!="")
{
$count=$_POST['count'];
$barcode=$_POST['barcode'];
$check = mysql_query("SELECT * FROM inventory WHERE barcode='$barcode'"); 
if(mysql_num_rows($check) != 0){
  mysql_query("UPDATE inventory SET count = count - ".$count." WHERE barcode = '".$barcode."'");
echo "<center><img src='gc.jpg' alt='Epic Win!'></center>";
  echo "<center>-" . "$count</center>";
}
else {
echo "<center>This item does not seem to be entered into the database, please add this item <a href=inventory.php>here</a></center>";  
}
}

    
    

mysql_close($con)

?>
</body>

</html>







