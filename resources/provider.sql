/* 供应商表*/
/* 万弘晖*/
/* 服务端*/
/* mysql*/
/* 2014-07-10*/

CREATE TABLE provider(
	rec_id int not null AUTO_INCREMENT,
	providerID varchar(32) NOT NULL unique,   -- 供应商编号  生成规则  gys + UUID前8位
	providerName varchar (30),       -- 供应商名称
	contact_provider      varchar(20),  -- 供应商联系人
	contact_tel    varchar(20),  -- 联系电话
	contact_phone   varchar(20),  -- 联系手机
	province varchar(50),  -- 所在省份
	address varchar(50),  -- 地址
	origin_place varchar (100),    -- 原产地
	change_time   varchar (30),		-- 上次数据修改时间 
	create_time   varchar (30),		-- 数据录入时间 
	operatorMan   varchar (10),                -- 数据录入员
	check_time  varchar (20),		-- 数据审核时间   
	check_man     varchar (20),                -- 数据审核员
	remark    varchar (100),                -- 备注
	service_tel int(15) ,    -- 售后服务电话
	bossID varchar(32) NOT NULL,  -- 老板ID 
	 	
	MacAddr varchar(30),  -- MAC地址
	lastChangeSide int default'0' ,         -- 最近修改 0-客户端，1-Web端，Web添加或修改数据后，手机端通过该标识进行更新，更新完毕后设为0
	lastChangeTime varchar(30),  -- 最近修改时间，包括最近的同步时间
	sync int DEFAULT '0', -- 0未同步，1已同步
	
	-- 2014-09-03新增
	staffID varchar(32),  -- 员工ID  规则 sf + UUID前8位

	PRIMARY KEY  (rec_id)
)
 


 


 