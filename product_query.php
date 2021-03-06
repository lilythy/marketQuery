<!DOCTYPE html>	  
<html>
<head>
<title>进销存查询网站</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Cache-Control" content="no-transform"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=2.0, user-scalable=1"> -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="layoutmode" content="standard">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="renderer" content="webkit">
<meta content="telephone=no" name="format-detection" />
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<link rel="stylesheet" type="text/css" href="css/base.min.css"/>
<link rel="stylesheet" id="mobiStyleTemplateCss" type="text/css" href="css/template.min.css"/>
<link rel="stylesheet" id="mobiCubeNavigationCss" type="text/css" href="css/cubeNavigation.min.css"/>
<link rel="stylesheet" type="text/css" href="css/343.min.css"/>
<link rel="stylesheet" type="text/css" href="css/table.css"/>

<!-- //输出模块样式css -->
<style id='mobiStyleModule'>
#module303 {border:none;}
#module303 {padding:0px;}
#module303 .formMiddle303{border:none;}
#module303 .formMiddle303{padding:0px;}
#module303 .formBannerTitle303{border:none;}
#module303 .formBannerTitle303{padding:0px;}
#module303 {background:none;}
#module303 .formMiddle303 {background:none;}
#module303 .formMiddle303 .formMiddleCenter303{background:none;}
#module303 .formMiddleContent303{background:none;}
</style>
<style id='mobiStyleNav' type='text/css'>
#navbar_104 .navItemIcon{background-image: url(http://mo.faidns.com/image/colIcon/27.png);} 
</style>


<style id='mobiCubeStyleModule'>
#module303{overflow:hidden;}
#cubeNavigation303_cubeLink1 .cubeLink_ico{background-image:url(http://mo.faidns.com/image/colIcon/19.png);background-color:transparent;}
#cubeNavigation303_cubeLink2 .cubeLink_ico{background-image:url(http://mo.faidns.com/image/colIcon/192.png);background-color:transparent;}
#cubeNavigation303_cubeLink3 .cubeLink_ico{background-image:url(http://mo.faidns.com/image/colIcon/20.png);background-color:transparent;}
#cubeNavigation303_cubeLink4 .cubeLink_ico{background-image:url(http://mo.faidns.com/image/colIcon/173.png);background-color:transparent;}
#cubeNavigation303_cubeLink5 .cubeLink_ico{background-image:url(http://mo.faidns.com/image/colIcon/172.png);background-color:transparent;}
#cubeNavigation303_cubeLink6 .cubeLink_ico{background-image:url(http://mo.faidns.com/image/colIcon/279.png);background-color:transparent;}
#cubeNavigation303_cubeLink7 .cubeLink_ico{background-image:url(http://mo.faidns.com/image/colIcon/32.png);background-color:transparent;}
#cubeNavigation303_cubeLink8 .cubeLink_ico{background-image:url(http://mo.faidns.com/image/colIcon/247.png);background-color:transparent;}
</style>

<!-- 系统特殊隐藏栏目隐藏头部、banner -->

<style type='text/css'>
.item1 {
    float: left;
    height: 22px;
    width: 70px;
    margin-right: 10px;
    color: #ffffff;
    text-align: right;
    font-size: 14px;
}
.item2 input {
    border: 1px solid #c0c0c0;
    width: 270px;
    height: 22px;
    text-indent: 5px;
    line-height: 16px;
    color: #4f4f4f;
    padding: 5px 3px;
}

ul,li{ list-style:none;width:200px;margin-left:80px;margin-right:50px;background:#ffffff;}
li.active{ background:#CEE7FF;}
</style>

<script type="text/javascript" src="http://www.wufangbo.com/demo/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/inputmail.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>

   <script type="text/javascript">
       
   </script>
</head>
<body id="g_body" class="g_locale2052">
	
	<div id="g_web" class="g_web">
		<!-- this is loading  -->
		<div id="webLoading" class="loading">
			<div id="splashscreen" class='splashscreen ui-loader'>
			    <span class='ui-icon ui-icon-loading spin'></span>
			</div>
	    </div>
	    <div id="webTopBox" class="webTopBox">
	    	<div id="webTop" class="webTop" >
	    		
				<div id='navbar' class='navbar navBaseIcon'>
<div id='navbarList' class='navbarList'><div id='itemSep_104' class='itemSep'></div><div id='navItem_104' class='navItem navItem_104 '><a href='/col.jsp?id=104' _colid='104' id='navbar_104'><span class='navItemIcon'></span><span class='navItemName'>用户</span></a></div><div id='itemSep_3' class='itemSep'></div><div id='navItem_3' class='navItem navItem_3 itemSelected'><a href='/index.jsp' _colid='3' id='navbar_3'><span class='navItemIcon'></span><span class='navItemName'>首页</span></a></div><div id='itemSep_6' class='itemSep'></div><div id='navItem_6' class='navItem navItem_6 '><a href='/pr.jsp' _colid='6' id='navbar_6'><span class='navItemIcon'></span><span class='navItemName'>产品展示</span></a></div><div id='itemSep_7' class='itemSep'></div><div id='navItem_7' class='navItem navItem_7 '><a href='/nr.jsp' _colid='7' id='navbar_7'><span class='navItemIcon'></span><span class='navItemName'>新闻动态</span></a></div><div id='itemSep_9' class='itemSep'></div><div id='navItem_9' class='navItem navItem_9 '><a href='/mb.jsp' _colid='9' id='navbar_9'><span class='navItemIcon'></span><span class='navItemName'>留言板</span></a></div><div id='itemSep_103' class='itemSep'></div><div id='navItem_103' class='navItem navItem_103 '><a href='/col.jsp?id=103' _colid='103' id='navbar_103'><span class='navItemIcon'></span><span class='navItemName'>关于我们</span></a></div></div><div class='navLeft'></div><div class='navRight'></div></div>

	    	</div>
	    </div>
		<div id="webHeaderBox" class="webHeaderBox"  >
			<div class='navButton' id='navButton'><div class='navButtonPanel'></div><div class='menuNav'><div class='menuNavTip'></div></div></div><div id='webHeader' class='webHeader webHeaderBg' ><div id='header' class='header'><span class='pageTitle' id='pageTitle'>进销存查询网站</span><span class='pageLogo ' style=' display:none; ' id='pageLogo'></span></div></div>
			
		</div>
		
		<div id="webContainerBox" class="webContainerBox">
			<div id="webModuleContainer" class="webModuleContainer">
					<div id='module303' _headerHiden='1' class='form Handle formStyle31 moduleStyle5' _autoHeight='1'><div style='display:none;'  class='formBannerTitle formBannerTitle303'><div class='titleLeft titleLeft303'>
</div>
<div class='titleCenter titleCenter303'>
<div class='titleText titleText303'><div class='titleTextIcon'>&nbsp;</div><div class='textContent'></div></div><div class='formBannerMore formBannerMore303'></div></div>
<div class='titleRight titleRight303'>
</div>
</div>
<div class='formMiddle formMiddle303'><div class='middleLeft middleLeft303'>
</div>
<div class='middleCenter middleCenter303'>
<div class='formMiddleContent formMiddleContent303 moduleContent'><div class='cubeNavigationArea cubeNavigationArea5' id='cubeNavigation303'>
    <form action="" method="get" style="border-color: #006600; border-style: dotted; border-width: 2px"> 
        <label style="padding-left:50px; ">请选择搜索商品的方式：<br/><br/> </label>
            <label style="padding-left:50px; "><input name="way" type="radio" checked="checked" value="" />按商品条码查找 </label> 
            <label style="padding-left:20px; "><input name="way" type="radio" value="" />按商品名称查找 </label><br/><br/>
			<label style="padding-left:50px;padding-bottom:20px; "><input class="span3"name="input" type="text" value="" /></label>
			<label style="padding-left:20px; "><input name="sub" class="btn btn-warning" type="submit" value="查找" /> </label><br/>
        			
    </form> 

    <div class="table-responsive">
   <table class="table">
      <caption><b  style="font-size:18px;">商品列表</b></caption>
      <thead>
         <tr>
            <th>商品条码</th>
            <th>商品名称</th>
			<th>计量单位</th>
            <th>进价</th>
			<th>售价</th>			
         </tr>
      </thead>
      <tbody>
	      <?php
	        $conn=mysql_connect("localhost","root","admin");
		if(!$conn){
		    die('could not connect:' .mysql_error());
		}
		mysql_select_db("mmbaoserver",$conn);
		mysql_query("set names utf8");//设置编码格式
		
		$sql = "SELECT bar_code,productName,measur_units,purch_price,final_price FROM product";
		
        $result = mysql_query($sql);
		while($row=mysql_fetch_array($result))
        { 
        ?>		
          
		<tr>
		<td><?php echo $row['bar_code'];?></td>
		<td><?php echo $row['productName'];?></td>
		<td><?php echo $row['measur_units'];?></td>
		<td><?php echo $row['purch_price'];?></td>
		<td><?php echo $row['final_price'];?></td>
		</tr>
        <?php
		}	  
	  ?>
         
      </tbody>
   </table>
</div> 
	</div>
</div></div>
<div class='middleRight middleRight303'>
</div>
</div>
</div>

			</div>
		</div>
		<div id="webFooterBox" class="webFooterBox">
			<!--图片详情Div -->
			
			
			<div id='webFooter' class='webFooter'>
			<div id='footer'  class='footer'><div class='bottomdiv'><div class='bottom'><div class='backtop' onclick='Mobi.scrollToTop("webContainerBox")'>top<b></b></div></div></div><div class='technical'><div class='technicalSupport'><font face='Arial'>&copy;</font>2014&nbsp;judith1015&nbsp;版权所有</div><div class='technicalSupport'>技术支持：<a href='http://m.faisco.com'  target='_blank' hidefocus='true'>lily</a><a class='PcVer' href='http://www.judith1015.icoc.cc?_siteUrl'  target='_blank' hidefocus='true'>电脑版</a><a class='rep' href='http://m.faisco.com/ts.jsp?acct=judith1015'  target='_blank' hidefocus='true'>举报</a></div></div></div>
				
			</div>
				
			<div id="fullScreenDivCotainer" class='fullScreenDivCotainer'></div>
			
		</div>
		<!--设置网站的背景颜色  start-->
		<div class="webBackgroundBox"><div id="webBodyBackground" class="webBackground "></div></div>
		<!--设置网站的背景颜色  end-->

		<!-- ------------------------------------------ -->
	</div>






<script type="text/javascript" charset="utf-8" src="js/jqmobi.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/jqmobi_ui.min.js"></script>
<script id="mobiOperationJS" type="text/javascript" charset="utf-8" src="js/mobi.min.js"></script>

<script type="text/javascript" src="http://mo.faidns.com/js/locale/2052.min.js?v=201407301053"></script>



<script type="text/javascript">

//栏目ID，
top.window._colId = 3;
if (typeof Fai == 'undefined'){
	Fai = {};
	Fai.top = top;
}

Fai.top._mobiTabInit = {"initParent": 0, "initChild": 0};

Fai.top._siteDomain = 'http://judith1015.faisco.cn';

Fai.top._userHostName = 'm.judith1015.icoc.cc';

Fai.top._templateFrameId = 343;
Fai.top._templateLayoutId = 2;
Fai.top._templateType = 1;

Fai.top._extId = 0;

Fai.top._changeStyleNum = 0;//用于记录网站风格是否更改，如果更改则在刷新或者关闭前进行提醒。
Fai.top._templateChanged = 0; //用于记录模版是否有改动
Fai.top._columnOrderChanged = 0;	//用于记录欄目排序是否有改动
Fai.top._columnOrderData = [104,3,6,7,9,103]; //用於記錄欄目排序數據

Fai.top._columnModuleHiddenListChanged = 0;  //用于记录欄目隱藏是否有改动
Fai.top._columnModuleHiddenList = [301,302];  //用于记录欄目隱藏的ID集合

Fai.top._browserTitleChanged = 0;//用于记录浏览器标题是否有改动
Fai.top._browserTitle = ""; //用于记录浏览器标题

Fai.top._siteBannerChanged = 0;//用于记录网站横幅是否有改动
Fai.top._siteBanner = ""; //用于记录网站横幅

Fai.top._bannerData = {"h":false,"bn":3,"b":[{"i":"121","t":0,"lt":0,"u":"","tp":"http://mo.faidns.com/image/banner/preview/121.jpg","p":"http://mo.faidns.com/image/banner/121.jpg","w":480,"h":150},{"i":"24","t":0,"lt":0,"u":"","tp":"http://mo.faidns.com/image/banner/preview/24.jpg","p":"http://mo.faidns.com/image/banner/24.jpg","w":480,"h":150},{"i":"108","t":0,"lt":0,"u":"","tp":"http://mo.faidns.com/image/banner/preview/108.jpg","p":"http://mo.faidns.com/image/banner/108.jpg","w":480,"h":150}],"c":[]};  //横幅数据
Fai.top._bannerChanged = 0;
Fai.top._mobiColUrlList = [{"url":"/index.jsp","id":3},{"url":"/pr.jsp","id":6},{"url":"/nr.jsp","id":7},{"url":"/mb.jsp","id":9},{"url":"/col.jsp?id=103","id":103},{"url":"/col.jsp?id=104","id":104}];

Fai.top._imagePageJson = {"open":false,"type":0,"sysnum":0,"customs":"","fileId":"","fileView":"","filePreView":""};	//欢迎页
Fai.top._imagePageChanged = 0;				//欢迎页改变


Fai.top._mobileSiteChanged = 0;//用于手機網站是否有改动
Fai.top._mobileSite = true; //用于记录手機網站是否開啟，默認是開啟

Fai.top._mobiSiteTitleChanged = 0; 	//用于记录网站标题是否有改动
Fai.top._mobiSiteTitle = "";			//用于记录网站标题

Fai.top._mobiLogoJsonChanged = 0;

Fai.top._hideNowModuleCheckList = []; 		//用来记录用户隐藏模块的对象
Fai.top._addNowModuleCheckList = []; 		//用来记录还没有加载当前模块这个PANEL的时候所新增加模块的对象

Fai.top._currentModuleListInit = false;   //该字段用来标识当前模块是否ajax过数据，如果是，则不需要再取数据

Fai.top._cusModuleCount = 4; //用来存储自定义栏目数
Fai.top._delModuleList = new Array();  //用于保存要删除的模块id

Fai.top._columnStyleJsonChanged = 0  //栏目样式
Fai.top._columnStyleJson = {"s":2};

Fai.top._onlineServiceJson = {"phone":{"open":false,"name":"电话咨询","number":"","type":1},"sms":{"open":false,"name":"信息咨询","number":"","type":2},"map":{"open":false,"name":"在线地图","city":"","mark":"","d_address":"","type":3},"msg":{"open":false,"name":"在线留言","type":4},"qq":{"open":false,"name":"QQ客服","number":"","type":5},"open":false,"order":[]};//在线客服
Fai.top._onlineServiceChange = 0;//在线客服
Fai.top._resetOnlineService = false; //免费用户下使用在线客服是否超时
Fai.top._openOnlineService = false;

Fai.top._siteKeyWordChange = 0 ; //判断是否对SEO的"全网站关键词"做了修改
Fai.top._siteDescChange = 0 ; //判断是否对SEO的"全网站描述"做了修改
Fai.top._siteKeyWord = ""; //全网站关键词
Fai.top._siteDesc = "";    //全网站描述

Fai.top._showMemberChange = 0;  //判断是否对会员登录做了修改

Fai.top._mallChange = 0;
Fai.top._mobiMallOpen = false;

Fai.top._independent = false; //当前栏目是否独立栏目

Fai.top._headerCodeChange = 0 ; //判断是否对网站插件代码做了修改
Fai.top._headerCode = ""; //网站插件代码

Fai.top._otherChange = 0;


var _manageMode = false;
jm(document).ready(function() {
	//判断该栏目是否被删除
	if(jm.isEmptyObject({"aid":4672875,"wid":0,"id":3,"type":3,"flag":0,"moduleList":[303],"moduleHidden":[301,302],"authMemberLevelId":0,"extId":0,"name":"首页","url":"/index.jsp","valid":true,"baseSetting":{"c":0,"i":0},"columnStyle":{"s":2},"logo":{"i":"","h":true},"banner":{"h":false,"bn":1,"b":[{"i":"1","t":0}],"c":[]},"independent":false,"allowed":true,"selectable":true})){
		alert("该栏目已经删除，点击确定后，将返回到首页");
		document.location.href = "/index.jsp"
	}

//当前模块 start
	

	//手机视图初始化函数
	Mobi.initMobiPage(2);
	//统计
	//Mobi.statisticalMobiVisitors({sc:0, rf:""});

     // 取统计数据
    if(true)
    {
     	 

	      Mobi.statisticalMobiVisitors({colId:3, pdId:-1, ndId:-1, sc:0, rf:""});
     }
     //前端性能数据上报
     Mobi.report();


	//欢迎页


	Mobi.initModuleAppendCss('#module303 {border:none;}\n#module303 {padding:0px;}\n#module303 .formMiddle303{border:none;}\n#module303 .formMiddle303{padding:0px;}\n#module303 .formBannerTitle303{border:none;}\n#module303 .formBannerTitle303{padding:0px;}\n#module303 {background:none;}\n#module303 .formMiddle303 {background:none;}\n#module303 .formMiddle303 .formMiddleCenter303{background:none;}\n#module303 .formMiddleContent303{background:none;}\n');
Mobi.manageFaiscoAd();


	if(false){
		Mobi.ing("",true);
	}	
});
</script>

<script>
        function calc() {
            var i1 = document.getElementById('num').value;
            var i2 = document.getElementById('final_price').value;
            if (i1 && i2) {
                var r = document.getElementById('price');
                r.value = i1 * i2;
               // r.style.display = 'block';
            }
        }
    </script>
<script type="text/javascript">
$(function(){
	$("#barcode").changeTips({
		divTip:".on_changes"
	}); 
})
</script>

</body>
</html>


