<html>
<head>
<title>BTG Item Search</title>
</head>
<center>
<?php


$con = mysql_connect("localhost","BlairTG","Bla1rTG");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

 mysql_select_db("stock", $con); 
 
 $item=$_POST['item'];
 
 $query="SELECT * FROM inventory WHERE item LIKE'%$item%'";
 
$result = mysql_query($query);

echo "<table border='1'>
<tr>
<th>Item</th>
<th>Count</th>
<th>Cost</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['item'] . "</td>";
  echo "<td>" . $row['count'] . "</td>";
  echo "<td>" . $row['cost'] . "</td>";
  echo "</tr>";
  }
echo "</table>";



 
mysql_close($con)

  ?>
 
  <br>
 <br>
 <br>
 
<a href="index.php">Home</a> </center>
 
 </html>