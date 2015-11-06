/* 库存统计表*/
/* 万弘晖*/
/* 服务端*/
/* mysql*/
/* 2014-07-08*/

CREATE TABLE inventory(
	rec_id int not null AUTO_INCREMENT,
	MacAddr varchar(30),  -- MAC地址
	lastChangeSide int default'0' ,         -- 最近修改 0-客户端，1-Web端，Web添加或修改数据后，手机端通过该标识进行更新，更新完毕后设为0
	lastChangeTime varchar(30),  -- 最近修改时间，包括最近的同步时间
	sync int DEFAULT '0', -- 0未同步，1已同步
	
	invent_guid varchar(32) NOT NULL,   -- 库存GUID
	productID varchar(32),   -- 商品ID 
	productName varchar (30),       -- 商品名称
	bar_code varchar (30) ,        -- 条码
	item_code varchar(50) ,  -- 货号
	pinyin_code varchar (20),         -- 拼音码	
	proCategory varchar (30),     -- 商品类别
	proCategoryID varchar (20),     -- 商品类别码
	measur_units char (6),        -- 计量单位
	purch_price float DEFAULT '0.0',  -- 进货价
	final_price float DEFAULT '0.0',           -- 最终售价（售价）
	total_price float DEFAULT '0.0',           -- 库存商品总金额
	color    varchar (10),    -- 颜色
	specification text,    -- 规格
	in_num  int,          -- 库存数量
    sale_status int default'1',	-- 销售状态，0-冻结，1-可售 2-过期
	freeze_num int,   -- 冻结数
	sale_num int,  -- 可售数
	specifi_num int  DEFAULT'0',   -- 规格数量
	color_num int  DEFAULT '0',  -- 颜色数量	
	changeTime   varchar (30),		-- 上次数据修改时间 
	checkTime  varchar (20),		-- 数据审核时间   
	checkMan     varchar (20),                -- 数据审核员
	create_time   varchar (30),		-- 数据录入时间 
	operatorMan   varchar (10),                -- 数据录入员
	remark    varchar (100),                -- 备注
	houseName    varchar (32),    -- 商品所在仓库名称
	storeHouseID    varchar (32),    -- 商品所在仓库ID
	bossID varchar(32) NOT NULL,  -- 老板ID 
	
	-- 2014-09-03新增
	staffID varchar(32),  -- 员工ID  规则 sf + UUID前8位
	
	PRIMARY KEY  (rec_id)
)
 

 


 


 