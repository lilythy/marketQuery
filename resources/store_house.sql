/* 仓库表*/
/* 万弘晖*/
/* 服务端*/
/* mysql*/
/* 2014-07-09*/

CREATE TABLE `MMBaoServer`.`store_house` (
	storeHouseID varchar(32) NOT NULL,  -- 仓库ID  规则 sh + UUID前8位
	houseName varchar(50),  -- 仓库名
	houseAddr varchar(30),  -- 仓库地址
	houseType varchar(30),  -- 仓库类型
	houseSize varchar(20),  -- 仓库容量
	lastSize varchar(20),  -- 仓库剩余容量
	houseStatus varchar(20),  -- 仓库状态  已满、空、未满等
	province varchar(50),  -- 所在省份
	tel varchar(20),  -- 电话
	phone varchar(20),  -- 手机
	staffNum int,  -- 员工人数
	bossName varchar(30),  -- 老板姓名
	bossID varchar(32) NOT NULL,  -- 老板ID 
	createDate varchar(30) ,  -- 创建日期
	
	MacAddr varchar(30),  -- MAC地址
	lastChangeSide int default'0' ,         -- 最近修改 0-客户端，1-Web端，Web添加或修改数据后，手机端通过该标识进行更新，更新完毕后设为0
	lastChangeTime varchar(30),  -- 最近修改时间，包括最近的同步时间
	sync int DEFAULT '0', -- 0未同步，1已同步

	-- 2014-09-03新增
	staffID varchar(32),  -- 员工ID  规则 sf + UUID前8位
	
	PRIMARY KEY (storeHouseID)
)
 


 


 