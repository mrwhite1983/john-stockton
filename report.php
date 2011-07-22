<html>
<center>
<?php


$con = mysql_connect("localhost","BlairTG","Bla1rTG");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

 mysql_select_db("stock", $con); 
 
$result = mysql_query("SELECT * FROM inventory");

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