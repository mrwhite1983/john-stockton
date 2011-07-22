<html>
<head>
<title>BTG Front End Inventory</title>
</head>
<body OnLoad="document.post.item.focus();">

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

 <center><h1> BTG Front End Inventory - Add Item  </h1></center>

<br>
<br>
<br>
<br>

<center> <h3> Inventory Scan In </h3>

<form action="inventory.php" method="post" name="post">

<table border="0" cellpadding="8" cellspacing="2">

<tr>

<td> Item: <input type="text" name="item" maxlength="30" size="30"> </td>

<td> Cost: <input type="text" name="cost" maxlength="12" size="15"> </td>

<td> Count: <input type="text" name="count" maxlength="12" size="15"> </td>

<td> Scan Barcode: <input type="text" name="barcode" maxlength="30" size="30"> </td>

</tr>

</table> 

<input type="Submit" name="Update" value="Submit">

</form>

<?php
if(!empty($_REQUEST['Update']) && $_POST['barcode']!="" && $_POST['item']!="" && $_POST['cost']!="" && $_POST['count']!="") {

$barcode=$_POST['barcode'];
$item=$_POST['item'];
$cost=$_POST['cost'];
$count=$_POST['count'];

 $var= "INSERT INTO inventory (barcode, item, cost, count)
VALUES ('$_POST[barcode]','$_POST[item]','$_POST[cost]','$_POST[count]')";

if (!mysql_query($var,$con))
  {
  die('Error: '  . mysql_error());
  }
  echo "<center><img src='gc.jpg' alt='Epic Win!'></center>";
 echo $item." has successfully been added!";
 }
 elseif(!empty($_REQUEST['Update']) && ($_POST['barcode']=="" || $_POST['item']=="" || $_POST['cost']=="" || $_POST['count']=="")) {
 echo "Please fill out the form in its entirety.";
 }
 mysql_close($con)
?>

<br> <br>

<a href="index.php">Home</a> </center>

</body>

</html>







