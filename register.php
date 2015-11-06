<?php
    //包含数据库连接文件
    include('conn.php');
		
    if(!isset($_POST['submit'])){
        echo('非法访问！');
    }
    $username = $_POST['username'];
    $password = $_POST['password1'];

    //生成uuid+字符“bs”
	function guid(){
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
		$Uuid="bs".substr($charid,0,8);
        return $Uuid;
    }
	$uuid = guid();
	$password = MD5($password);
	
    //检测用户名是否已经存在
	$check_query = mysql_query("select bossName from boss where bossName='$username' limit 1");
	if(mysql_fetch_array($check_query)){
    echo '错误：用户名 ',$username,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
    exit;
}
 
	$sql = "INSERT INTO boss(bossID,bossName,bossPwd) VALUES('$uuid','$username','$password')";
	if(mysql_query($sql,$conn)){
	    echo "<script>location.href='MMBao_plogin.html'</script>";
		//echo('用户注册成功！点击此处 <a href="MMBao_plogin.html" target="_parent">登录</a>');
	}else{
	    echo '抱歉！添加数据失败：',mysql_error(),'<br />';
        echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
	}
?>