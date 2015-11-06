/* 老板表*/
/* 万弘晖*/
/* 服务端*/
/* mysql*/
/* 2014-09-03*/
/*身份证暂时可为空*/
CREATE TABLE `MMBaoServer`.`boss` (
	bossName varchar(30) NOT NULL ,  -- 用户名 唯一
	bossID varchar(32) NOT NULL,  -- 老板ID  规则 bs + UUID前8位
	bossPwd varchar(100),  -- 用户密码
	phone varchar(20),  -- 手机
	tel varchar(20),  -- 电话
	mail varchar(30),  -- 邮箱
	age int,  -- 年龄	
	realName varchar(30),  -- 真实姓名
	position varchar(30), -- 职位名称 
	IDCard varchar(50) ,  -- 身份证 必填项
	sex int default '0', -- 性别  0-男 1-女
	vip int default '1', -- 会员  0-是 1-否
	loginStatus int default '0', -- 登录状态  0-在线 1-离线
	loginSide int default '0', -- 登录终端  0-手机端 1-Web端
	accountStatus int default '0', -- 账户状态  0-待激活 1-激活 2-冻结
	score int default '0', -- 积分
	couponsNum int default '0', -- 优惠券数量
	userLevel int default '0', -- 权限等级  0员工 1管理员工 2老板
	vipLevel int default '0', -- vip等级 
	totalConsume float default '0.0',  -- 累计消费
	userPrice float default '0.0',  -- 账户金额
	lastLoginDate varchar(30) ,  -- 最近一次的登录时间
	registerDate varchar(30) ,  -- 注册日期
	
	macAddr varchar(30),  -- MAC地址
	lastChangeSide int default'0' ,  -- 最近修改 0-客户端，1-Web端，Web添加或修改数据后，手机端通过该标识进行更新，更新完毕后设为0
	lastChangeTime varchar(30),  -- 最近修改时间，包括最近的同步时间
	sync int DEFAULT '0', -- 0未同步，1已同步
	
	-- 2014-09-03新增
	staffID varchar(32),  -- 员工ID  规则 sf + UUID前8位
	province varchar(50), -- 省份
--	storeID varchar(32), -- 拥有门店ID
--	storeID1 varchar(32), -- 拥有门店ID,预留字段,老板可能拥有多个门店
--	storeID2 varchar(32), -- 拥有门店ID,预留字段,老板可能拥有多个门店
--	storeID3 varchar(32), -- 拥有门店ID,预留字段,老板可能拥有多个门店
	
	
	
	PRIMARY KEY (bossName)
)
 


 


 