<?php
header("Content-Type: text/html; charset=GB2312");
 //�������ݿ������ļ�
    include('conn.php');
		
    if(!isset($_POST['submit'])){
        echo('�Ƿ����ʣ�');
    }
	
	$barcode=$_POST['barcode'];
mysql_query('set names gb2312');

//$sql="SELECT * FROM inventory WHERE bar_code = '".$q."'";
$sql="SELECT productName,final_price,houseName,remark,measur_units FROM inventory WHERE bar_code = '$barcode'";

$result = mysql_query($sql,$conn);       
 $row = mysql_fetch_array($result); 

?>

<html>
<head>
<title>�������ѯ��վ</title>
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

<!-- //���ģ����ʽcss -->
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

<!-- ϵͳ����������Ŀ����ͷ����banner -->

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
<div id='navbarList' class='navbarList'><div id='itemSep_104' class='itemSep'></div><div id='navItem_104' class='navItem navItem_104 '><a href='/col.jsp?id=104' _colid='104' id='navbar_104'><span class='navItemIcon'></span><span class='navItemName'>�û�</span></a></div><div id='itemSep_3' class='itemSep'></div><div id='navItem_3' class='navItem navItem_3 itemSelected'><a href='/index.jsp' _colid='3' id='navbar_3'><span class='navItemIcon'></span><span class='navItemName'>��ҳ</span></a></div><div id='itemSep_6' class='itemSep'></div><div id='navItem_6' class='navItem navItem_6 '><a href='/pr.jsp' _colid='6' id='navbar_6'><span class='navItemIcon'></span><span class='navItemName'>��Ʒչʾ</span></a></div><div id='itemSep_7' class='itemSep'></div><div id='navItem_7' class='navItem navItem_7 '><a href='/nr.jsp' _colid='7' id='navbar_7'><span class='navItemIcon'></span><span class='navItemName'>���Ŷ�̬</span></a></div><div id='itemSep_9' class='itemSep'></div><div id='navItem_9' class='navItem navItem_9 '><a href='/mb.jsp' _colid='9' id='navbar_9'><span class='navItemIcon'></span><span class='navItemName'>���԰�</span></a></div><div id='itemSep_103' class='itemSep'></div><div id='navItem_103' class='navItem navItem_103 '><a href='/col.jsp?id=103' _colid='103' id='navbar_103'><span class='navItemIcon'></span><span class='navItemName'>��������</span></a></div></div><div class='navLeft'></div><div class='navRight'></div></div>

	    	</div>
	    </div>
		<div id="webHeaderBox" class="webHeaderBox"  >
			<div class='navButton' id='navButton'><div class='navButtonPanel'></div><div class='menuNav'><div class='menuNavTip'></div></div></div><div id='webHeader' class='webHeader webHeaderBg' ><div id='header' class='header'><span class='pageTitle' id='pageTitle'>�������ѯ��վ</span><span class='pageLogo ' style=' display:none; ' id='pageLogo'></span></div></div>
			
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
    <form method="post" action="stockoutOP.php">
	<div style="padding-top:10px"><div class="item1" >��Ʒ��</div><div class="item2"><input id="barcode" name="barcode" type="text"readonly value="<?php echo $barcode ?>"/></div></div>
	<div style="padding-top:10px"><div class="item1" >��Ʒ���ƣ�</div><div class="item2"><input id="product_name" name="product_name" type="text"readonly value="<?php echo $row['productName']?>" /></div></div>
		<div style="padding-top:10px"><div class="item1" >�ۼۣ�</div><div class="item2"><input id="final_price" name="final_price" type="text"readonly value="<?php echo $row['final_price']?>"/></div></div>
		<div style="padding-top:10px"><div class="item1" >������</div><div class="item2"><input id="num" name="num" type="text" onkeyup="this.value=this.value.replace(/\D/g,'');calc()" onafterpaste="this.value=this.value.replace(/\D/g,'')" placeholder="����ֻ��Ϊ������"/></div></div>
		<div style="padding-top:10px"><div class="item1" >�ܽ�</div><div class="item2"><input id="price" name="price" type="text" /></div></div>
		<div style="padding-top:10px"><div class="item1" >�ֿ⣺</div><div class="item2"><input id="store_house" name="store_house" type="text"readonly value="<?php echo $row['houseName']?>"/></div></div>
		<div style="padding-top:10px"><div class="item1" >��λ��</div><div class="item2"><input id="measur_units" name="measur_units" type="text"readonly value="<?php echo $row['measur_units']?>"/></div></div>
		<div style="padding-top:10px"><div class="item1" >��ע��</div><div class="item2"><input id="remark" name="remark" type="text" value="<?php echo $row['remark']?>"/></div></div>
	<div style="padding-top:15px;padding-left:80px;margin-bottom:30px;"><input type="submit" id="submit" name="submit" style="width:285px;height:40px;boder-radius:20px;float: left;margin-right:10px" value="ȷ��"></div>
    </form>
	</div>
</div></div>
<div class='middleRight middleRight303'>
</div>
</div>
</div>

			</div>
		</div>
		<div id="webFooterBox" class="webFooterBox">
			<!--ͼƬ����Div -->
			
			
			<div id='webFooter' class='webFooter'>
			<div id='footer'  class='footer'><div class='bottomdiv'><div class='bottom'><div class='backtop' onclick='Mobi.scrollToTop("webContainerBox")'>top<b></b></div></div></div><div class='technical'><div class='technicalSupport'><font face='Arial'>&copy;</font>2014&nbsp;judith1015&nbsp;��Ȩ����</div><div class='technicalSupport'>����֧�֣�<a href='http://m.faisco.com'  target='_blank' hidefocus='true'>lily</a><a class='PcVer' href='http://www.judith1015.icoc.cc?_siteUrl'  target='_blank' hidefocus='true'>���԰�</a><a class='rep' href='http://m.faisco.com/ts.jsp?acct=judith1015'  target='_blank' hidefocus='true'>�ٱ�</a></div></div></div>
				
			</div>
				
			<div id="fullScreenDivCotainer" class='fullScreenDivCotainer'></div>
			
		</div>
		<!--������վ�ı�����ɫ  start-->
		<div class="webBackgroundBox"><div id="webBodyBackground" class="webBackground "></div></div>
		<!--������վ�ı�����ɫ  end-->

		<!-- ------------------------------------------ -->
	</div>






<script type="text/javascript" charset="utf-8" src="js/jqmobi.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/jqmobi_ui.min.js"></script>
<script id="mobiOperationJS" type="text/javascript" charset="utf-8" src="js/mobi.min.js"></script>

<script type="text/javascript" src="http://mo.faidns.com/js/locale/2052.min.js?v=201407301053"></script>



<script type="text/javascript">

//��ĿID��
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

Fai.top._changeStyleNum = 0;//���ڼ�¼��վ����Ƿ���ģ������������ˢ�»��߹ر�ǰ�������ѡ�
Fai.top._templateChanged = 0; //���ڼ�¼ģ���Ƿ��иĶ�
Fai.top._columnOrderChanged = 0;	//���ڼ�¼��Ŀ�����Ƿ��иĶ�
Fai.top._columnOrderData = [104,3,6,7,9,103]; //���ӛ䛙�Ŀ���򔵓�

Fai.top._columnModuleHiddenListChanged = 0;  //���ڼ�¼��Ŀ�[���Ƿ��иĶ�
Fai.top._columnModuleHiddenList = [301,302];  //���ڼ�¼��Ŀ�[�ص�ID����

Fai.top._browserTitleChanged = 0;//���ڼ�¼����������Ƿ��иĶ�
Fai.top._browserTitle = ""; //���ڼ�¼���������

Fai.top._siteBannerChanged = 0;//���ڼ�¼��վ����Ƿ��иĶ�
Fai.top._siteBanner = ""; //���ڼ�¼��վ���

Fai.top._bannerData = {"h":false,"bn":3,"b":[{"i":"121","t":0,"lt":0,"u":"","tp":"http://mo.faidns.com/image/banner/preview/121.jpg","p":"http://mo.faidns.com/image/banner/121.jpg","w":480,"h":150},{"i":"24","t":0,"lt":0,"u":"","tp":"http://mo.faidns.com/image/banner/preview/24.jpg","p":"http://mo.faidns.com/image/banner/24.jpg","w":480,"h":150},{"i":"108","t":0,"lt":0,"u":"","tp":"http://mo.faidns.com/image/banner/preview/108.jpg","p":"http://mo.faidns.com/image/banner/108.jpg","w":480,"h":150}],"c":[]};  //�������
Fai.top._bannerChanged = 0;
Fai.top._mobiColUrlList = [{"url":"/index.jsp","id":3},{"url":"/pr.jsp","id":6},{"url":"/nr.jsp","id":7},{"url":"/mb.jsp","id":9},{"url":"/col.jsp?id=103","id":103},{"url":"/col.jsp?id=104","id":104}];

Fai.top._imagePageJson = {"open":false,"type":0,"sysnum":0,"customs":"","fileId":"","fileView":"","filePreView":""};	//��ӭҳ
Fai.top._imagePageChanged = 0;				//��ӭҳ�ı�


Fai.top._mobileSiteChanged = 0;//�����֙C�Wվ�Ƿ��иĶ�
Fai.top._mobileSite = true; //���ڼ�¼�֙C�Wվ�Ƿ��_����Ĭ�J���_��

Fai.top._mobiSiteTitleChanged = 0; 	//���ڼ�¼��վ�����Ƿ��иĶ�
Fai.top._mobiSiteTitle = "";			//���ڼ�¼��վ����

Fai.top._mobiLogoJsonChanged = 0;

Fai.top._hideNowModuleCheckList = []; 		//������¼�û�����ģ��Ķ���
Fai.top._addNowModuleCheckList = []; 		//������¼��û�м��ص�ǰģ�����PANEL��ʱ����������ģ��Ķ���

Fai.top._currentModuleListInit = false;   //���ֶ�������ʶ��ǰģ���Ƿ�ajax�����ݣ�����ǣ�����Ҫ��ȡ����

Fai.top._cusModuleCount = 4; //�����洢�Զ�����Ŀ��
Fai.top._delModuleList = new Array();  //���ڱ���Ҫɾ����ģ��id

Fai.top._columnStyleJsonChanged = 0  //��Ŀ��ʽ
Fai.top._columnStyleJson = {"s":2};

Fai.top._onlineServiceJson = {"phone":{"open":false,"name":"�绰��ѯ","number":"","type":1},"sms":{"open":false,"name":"��Ϣ��ѯ","number":"","type":2},"map":{"open":false,"name":"���ߵ�ͼ","city":"","mark":"","d_address":"","type":3},"msg":{"open":false,"name":"��������","type":4},"qq":{"open":false,"name":"QQ�ͷ�","number":"","type":5},"open":false,"order":[]};//���߿ͷ�
Fai.top._onlineServiceChange = 0;//���߿ͷ�
Fai.top._resetOnlineService = false; //����û���ʹ�����߿ͷ��Ƿ�ʱ
Fai.top._openOnlineService = false;

Fai.top._siteKeyWordChange = 0 ; //�ж��Ƿ��SEO��"ȫ��վ�ؼ���"�����޸�
Fai.top._siteDescChange = 0 ; //�ж��Ƿ��SEO��"ȫ��վ����"�����޸�
Fai.top._siteKeyWord = ""; //ȫ��վ�ؼ���
Fai.top._siteDesc = "";    //ȫ��վ����

Fai.top._showMemberChange = 0;  //�ж��Ƿ�Ի�Ա��¼�����޸�

Fai.top._mallChange = 0;
Fai.top._mobiMallOpen = false;

Fai.top._independent = false; //��ǰ��Ŀ�Ƿ������Ŀ

Fai.top._headerCodeChange = 0 ; //�ж��Ƿ����վ������������޸�
Fai.top._headerCode = ""; //��վ�������

Fai.top._otherChange = 0;


var _manageMode = false;
jm(document).ready(function() {
	//�жϸ���Ŀ�Ƿ�ɾ��
	if(jm.isEmptyObject({"aid":4672875,"wid":0,"id":3,"type":3,"flag":0,"moduleList":[303],"moduleHidden":[301,302],"authMemberLevelId":0,"extId":0,"name":"��ҳ","url":"/index.jsp","valid":true,"baseSetting":{"c":0,"i":0},"columnStyle":{"s":2},"logo":{"i":"","h":true},"banner":{"h":false,"bn":1,"b":[{"i":"1","t":0}],"c":[]},"independent":false,"allowed":true,"selectable":true})){
		alert("����Ŀ�Ѿ�ɾ�������ȷ���󣬽����ص���ҳ");
		document.location.href = "/index.jsp"
	}

//��ǰģ�� start
	

	//�ֻ���ͼ��ʼ������
	Mobi.initMobiPage(2);
	//ͳ��
	//Mobi.statisticalMobiVisitors({sc:0, rf:""});

     // ȡͳ������
    if(true)
    {
     	 

	      Mobi.statisticalMobiVisitors({colId:3, pdId:-1, ndId:-1, sc:0, rf:""});
     }
     //ǰ�����������ϱ�
     Mobi.report();


	//��ӭҳ


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
