<?php
    //包含数据库连接文件
    include('conn.php');
		
    if(!isset($_POST['submit'])){
        echo('非法访问！');
    }

    //生成库存操作GUID 即yyyyMMddHHmmssSSSS
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
    $inven_oper_guid = microtime_format('YmdHisx',microtime_float());
	
	//生成uuid前8位
	function guid(){
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
		$Uuid=substr($charid,0,8);
        return $Uuid;
    }
	//生成产品ID proID = UUID前八位 + "SSSS";
	$productID = guid().substr($inven_oper_guid,14,17);
	
	//生成uuid前6位
	function stguid(){
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
		$Uuid=substr($charid,0,6);
        return $Uuid;
    }
	//入库单号 6位UUID + 日期(SSSS)
	$in_code = stguid().substr($inven_oper_guid,14,17);
	
	$main_pro_name=$_POST['product_name'];
	$bar_code=$_POST['bar_code'];
	$store_house=$_POST['store_house'];
	$provider=$_POST['provider'];
	$measur_units=$_POST['measur_units'];
	$num=$_POST['num'];
	$purch_price=$_POST['purch_price'];
	$final_price=$_POST['final_price'];
	$price=$_POST['price'];
	$specification=$_POST['specification'];
	$color=$_POST['color'];
	$item_code=$_POST['item_code'];
	
	//获得操作时间
	$create_time=date("Y-m-d H:i:s");
	$oper_time=date("Y-m-d H:i:s");
	
	//取登陆时操作人员的bossID
	session_start();
	$bossID = $_SESSION['userid'];
	$operatorMan = $_SESSION['username'];
	
	//金额的单位 元
	$unit="元";
	
	mysql_query("set names 'utf8'");
    //检测必填项有没有填完
	if($main_pro_name!="" and $bar_code!="" and $store_house!="" and $provider!="" and $measur_units!="" 
	    and $num!=0 and $purch_price!="" and $final_price!="" and $price!=""){
		$sql1 = "INSERT INTO inventory_in(inven_oper_guid,in_code,bar_code,main_pro_name,store_house,provider
		       ,measur_units,num,purch_price,final_price,price,create_time,oper_time,operatorMan,bossID)
			   VALUES('$inven_oper_guid','$in_code','$bar_code','$main_pro_name','$store_house','$provider'
			   ,'$measur_units','$num','$purch_price','$final_price','$price','$create_time','$oper_time'
			   ,'$operatorMan','$bossID')";
		$flag1=mysql_query($sql1,$conn);
		
		$sql2 = "INSERT INTO inventory(invent_guid,productID,productName,bar_code,measur_units,houseName,in_num
		       ,purch_price,final_price,total_price,create_time,changeTime,operatorMan,bossID)
			   VALUES('$inven_oper_guid','$productID','$main_pro_name','$bar_code','$measur_units','$store_house',
			   '$num','$purch_price','$final_price','$price','$create_time','$oper_time','$operatorMan','$bossID'
			   )";
		$flag2=mysql_query($sql2,$conn);
		
		$sql3 = "INSERT INTO storage_order(storageOrder,totalPrice,unit,inventoryNum,operateMan,createTime
		       ,lastChangeTime,bossID)
			   VALUES('$in_code','$price','$measur_units','$num'
			   ,'$operatorMan','$create_time','$oper_time','$bossID'
			   )";
		$flag3 = mysql_query($sql3,$conn);
		

                $sql4 = "INSERT INTO product(productID,productName,bar_code,item_code,color,specification
		       ,measur_units,purch_price,promo_price,final_price,pro_arri_time)
			   VALUES('$productID','$main_pro_name','$bar_code','$item_code'
			   ,'$color','$specification','$measur_units','$purch_price','$price','$final_price','$create_time'
			   )";
		$flag4 = mysql_query($sql4,$conn);
		}
		

	if($flag1 and $flag2 and $flag3 and $flag4){
	    echo('入库成功！');
		echo ' 进入 <a href="index1.html" target="_parent">查询引导</a><br />';
	}else{
	    echo '抱歉！添加数据失败：',mysql_error(),'<br />';
        echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
	}
?>