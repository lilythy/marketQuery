<?php
// HTTP/1.1
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
// HTTP/1.0
header("Pragma: no-cache");
    mysql_connect("localhost","root","admin") or die("连接失败");
	mysql_select_db(mmbaoserver);

	mysql_query("set names gbk");
	$q = $_GET['q'];
	$sql="SELECT bar_code FROM inventory WHERE bar_code='".$q."'";   
    $result = mysql_query($sql);
	if($result){
	    echo ("<ul>");
		while($row = mysql_fetch_array($result)){
           // $code=$row['bar_code'];	
		   echo ("<li>".$row."</li>");
        }	
        echo ("</ul>");		
	} 
	else{
	    echo "未找到数据";
	}
    
?>