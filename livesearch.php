<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', 'admin');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("mmbaoserver", $con);

//$sql="SELECT * FROM inventory WHERE bar_code = '".$q."'";
$sql="SELECT * FROM inventory WHERE bar_code like '$q%'";

$result = mysql_query($sql);

echo "<ul>";

while($row = mysql_fetch_array($result))
 {
 echo "<li>" . $row['bar_code'] . "</li>";
 }
echo "</ul>";

mysql_close($con);
?>