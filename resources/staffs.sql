/* 员工表*/
/* 万弘晖*/
/* 服务端*/
/* mysql*/
/* 2014-07-09*/

CREATE TABLE `MMBaoServer`.`staffs` (
	staffID varchar(32) NOT NULL,  -- 用户ID  规则 sf + UUID前8位
	staffName varchar(30) NOT NULL unique,  -- 用户名
	staffPwd varchar(100),  -- 用户密码
	phone varchar(20),  -- 手机
	tel varchar(20),  -- 电话
	mail varchar(30),  -- 邮箱
	age int,  -- 年龄
	realName varchar(30),  -- 真实姓名
	position varchar(30), -- 职位名称 
	IDCard int not null,  -- 身份证 必填项
	sex int default '0', -- 性别  0-男 1-女
	vip int default '1', -- 会员  0-是 1-否
	loginStatus int default '0', -- 登录状态  0-在线 1-离线
	loginSide int default '0', -- 登录终端  0-手机端 1-Web端
	accountStatus int default '0', -- 账户状态  0-待激活 1-激活 2-冻结
	score int default '0', -- 积分
	couponsNum int default '0', -- 优惠券数量
	userLevel int default '0', -- 权限等级 
	vipLevel int default '0', -- vip等级 
	totalConsume float default '0.0',  -- 累计消费
	userPrice float default '0.0',  -- 账户金额
	lastLoginDate varchar(30) ,  -- 最近一次的登录时间
	registerDate varchar(30) ,  -- 注册日期
--	storeName varchar(50),  --所属门店名
--	houseName varchar(50),  --所属仓库名  如果ID有多个，仓库名也要有多个
	storeHouseID varchar(50),  --所属仓库ID
	storeHouseID1 varchar(50),  --所属仓库ID
--	foreign key(storeHouseID) references store_house(storeHouseID) on update cascade,
	storeID varchar(32),	-- 所属门店ID
	storeID1 varchar(32),	-- 所属门店ID1   员工可能同时管理多个门店
	bossID varchar(32) NOT NULL,	-- 老板ID
	foreign key(bossID) references boss(bossID) on delete cascade on update cascade, -- 老板信息删除，对应的员工信息联带删除
	
	PRIMARY KEY (staffID)
)
 


 


 