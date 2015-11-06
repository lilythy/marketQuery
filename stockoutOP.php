<?php
header("Content-Type: text/html; charset=GB2312");
    //包含数据库连接文件
    include('conn.php');
		
    if(!isset($_POST['submit'])){
        echo('非法访问！');
    }
	
	//生成出库操作GUID 即yyyyMMddHHmmssSSSS
	function microtime_float()
    {
       list($usec, $sec) = explode(" ", microtime());
       return ((float)$usec + (float)$sec);
    }
    function microtime_format($tag, $time)
    {
       list($usec, $sec) = explode(".", $time);
       $date = date($tag,$usec);
       return str_replace('x', $sec, $date);
    }
    $invent_oper_guid = microtime_format('YmdHisx',microtime_float());
	
    //生成uuid前6位
	function stguid(){
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
		$Uuid=substr($charid,0,6);
        return $Uuid;
    }
	//入库单号 6位UUID + 日期(SSSS)
	$out_code = stguid().substr($invent_oper_guid,14,17);	
    

    $barcode=$_POST['barcode'];
	$product_name=$_POST['product_name'];
	$final_price=$_POST['final_price'];
	$num=$_POST['num'];
	$price=$_POST['price'];
	$store_house=$_POST['store_house'];
	$measur_units=$_POST['measur_units'];
	$remark=$_POST['remark'];
	
    //获得操作时间
	$create_time=date("Y-m-d H:i:s");
	$oper_time=date("Y-m-d H:i:s");
	
	//取登陆时操作人员的bossID
	session_start();
	$bossID = $_SESSION['userid'];
	
    mysql_query("set names 'utf8'");
    if($num!=""){
		$sql1 = "INSERT INTO inventory_out(invent_oper_guid,out_code,bar_code,main_pro_name,final_price,num,price,store_house
		       ,remark,measur_units,create_time,oper_time,bossID)
			   VALUES('$invent_oper_guid','$out_code','$barcode','$product_name','$final_price','$num','$price'
			   ,'$store_house','$remark','$measur_units','$create_time','$oper_time','$bossID')";
		$flag1=mysql_query($sql1,$conn);
		
		
		$sql2 = "update inventory set in_num = in_num-$num";
		$flag2=mysql_query($sql2,$conn);		
	}

   if($flag1 and $flag2){
	    echo('出库成功！');
		echo ' 进入 <a href="index1.html" target="_parent">查询引导</a><br />';
	}else{
	    echo '抱歉！添加数据失败：',mysql_error(),'<br />';
        echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
	}	
		
?>