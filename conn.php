<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
    <?php 
	    $conn=mysql_connect("localhost","root","admin");
		if(!$conn){
		    die('could not connect:' .mysql_error());
		}
		mysql_select_db("mmbaoserver",$conn);
		mysql_query("set character set 'gbk'");
	?>
</body>
</html>