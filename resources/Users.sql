/* 用户表*/
/* 万弘晖*/
/* 服务端*/
/* mysql*/
/* 2014-07-08*/

CREATE TABLE `MMBaoServer`.`Users` (
	userID varchar(30) NOT NULL,  -- 用户ID
	userName varchar(30),  -- 用户名
	userPwd varchar(30),  -- 用户密码
	phone varchar(20),  -- 手机users
	mail varchar(30),  -- 邮箱
	realName varchar(30),  -- 真实姓名
	IDCard int,  -- 身份证
	sex int default '0', -- 性别  0-男 1-女
	vip int default '1', -- 会员  0-是 1-否
	loginStatus int default '0', -- 登录状态  0-在线 1-离线
	accountStatus int default '0', -- 账户状态  0-待激活 1-激活 2-冻结
	score int default '0', -- 积分
	userLevel int default '0', -- 权限等级 
	userPrice float default '0.0',  -- 账户金额
	lastLoginDate varchar(30) ,  -- 最近一次的登录时间
	registerDate varchar(30) ,  -- 注册日期
	
	PRIMARY KEY (userID)
)
 


 


 