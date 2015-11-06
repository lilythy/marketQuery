<?php
//包含数据库连接文件
    include('conn.php');
		
    if(!isset($_POST['submit'])){
        echo('非法访问！');
    }
    $barcode = $_POST['barcode'];
	
	//查询商品码，商品名称，售价，仓库和门店
	$query = select bar_code,productName,final_price,houseName,storeName 
	         from inventory as a,stores as b where a.bossID=b.bossID and a.bar_code=$barcode;
	$result = mysql_query($query);
	
	
	
?>