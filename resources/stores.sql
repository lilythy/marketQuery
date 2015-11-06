/* 门店表*/
/* 万弘晖*/
/* 服务端*/
/* mysql*/
/* 2014-07-09*/

CREATE TABLE `MMBaoServer`.`stores` (
	storeID varchar(32) NOT NULL,  -- 门店ID  规则 st + UUID前8位
	storeName varchar(50),  -- 门店名
	storeAddr varchar(30),  -- 门店地址
	storeType varchar(30),  -- 门店类型
	province varchar(50),  -- 所在省份
	tel1 varchar(20),  -- 电话1
	tel2 varchar(20),  -- 电话2
	phone varchar(20),  -- 手机
	staffNum int,  -- 员工人数
	stars float DEFAULT '0.0',  -- 门店星级评价
	bossName varchar(30),  -- 老板姓名
	bossID varchar(32) NOT NULL,  -- 老板ID 
	-- foreign key(bossID) references boss(bossID) on delete cascade on update cascade, -- 老板ID，老板信息删除，其下门店信息联带删除
	license varchar(50) NOT NULL,  -- 营业许可编号
	businessLicense varchar(100),  -- 营业执照附件路径
	createDate varchar(30) ,  -- 创建日期
	
	sync int DEFAULT '0', -- 0未同步，1已同步
	MacAddr varchar(30),  -- MAC地址
	lastChangeSide int default'0',         -- 最近修改 0-客户端，1-Web端
	lastChangeTime varchar(30),  -- 最近修改时间
	
	-- 2014-09-03新增
	staffID varchar(32),  -- 员工ID  规则 sf + UUID前8位
	
	PRIMARY KEY (storeID)
)
 


 


 