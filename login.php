<?php
    error_reporting(E_ALL ^ E_NOTICE);
	session_start();

    //注销登录
    if($_GET['action'] == "logout"){
        unset($_SESSION['userid']);
        unset($_SESSION['username']);
        echo '注销登录成功！点击此处 <a href="MMBao_plogin.html">登录</a>';
        exit;
    }
	
    if(!isset($_POST['submit'])){
        exit('非法访问!');
    }
	$username = htmlspecialchars($_POST['logusername']);
    $password = MD5($_POST['logPassword']);
	//包含数据库连接文件
    include('conn.php');
	//检测用户名及密码是否正确
	$check_query = mysql_query("select bossID from boss where bossName='$username' and bossPwd='$password' 
limit 1");
    if($result = mysql_fetch_array($check_query)){
    //登录成功
	
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $result['bossID'];
    echo $username,' 欢迎你！进入 <a href="index1.html" target="_parent">查询引导</a><br />';
    echo '点击此处 <a href="login.php?action=logout" target="_parent">注销</a> 登录！<br />';
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}

?>