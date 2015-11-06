/* 商品表*/
/* 万弘晖*/
/* 服务端*/
/* mysql*/
/* 2014-07-08*/

CREATE TABLE product(
	rec_id int not null AUTO_INCREMENT,
	productID varchar(32) NOT NULL,   -- 商品ID 生成规则  UUID前8位 + SSSS(纳秒)  唯一
	productName varchar (30),       -- 商品名称
	bar_code varchar (30) ,        -- 条码
	item_code varchar(50) ,  -- 货号
	pinyin_code varchar (20),         -- 拼音码	
	proCategory varchar (30),     -- 商品类别
	proCategoryID varchar (20),     -- 商品类别码
	color    varchar (10),    -- 颜色
	specification text,    -- 规格
	measur_units char (6),        -- 计量单位
	purch_price float DEFAULT '0.0',  -- 进货价
	promo_price float DEFAULT '0.0',          -- 促销价
	pro_market float DEFAULT '0.0',          -- 商品市场价
	final_price float DEFAULT '0.0',           -- 最终售价（售价）
	discount float DEFAULT '0.0',           -- 折扣
    pro_info text,     -- 商品简介
    logo  varchar(40),  --  品牌
	origin_place varchar (100),    -- 原产地
	pro_factory varchar (100),    -- 生产厂家
	pro_arri_time  varchar(20),    -- 当前商品到货时间
	out_pro_arri_time    varchar(20),    -- 缺货商品预计到货时间
	gifts_info   text,        -- 赠品信息
	keyword    varchar (30),    -- 关键词
	score int default '0',  -- 可获得积分
	providerName varchar (50),   -- 供应商
	providerID varchar (50),   -- 供应商编号
	change_time   varchar (30),		-- 上次数据修改时间 
	create_time   varchar (30),		-- 数据录入时间 
	operatorMan   varchar (50),                -- 数据录入员  此处存放由谁提供的信息，老板用户名或公司名称
	check_time  varchar (20),		-- 数据审核时间   
	check_man     varchar (20),                -- 数据审核员
	remark    varchar (100),                -- 备注
	service_tel int(15) ,    -- 售后服务电话
	bossID varchar(32) NOT NULL,  -- 老板ID 
	-- foreign key(proCategoryID) references pro_category(proCategoryID) on delete cascade on update cascade, 
	
	MacAddr varchar(30),  -- MAC地址
	lastChangeSide int default'0',         -- 最近修改 0-客户端，1-Web端，Web添加或修改数据后，手机端通过该标识进行更新，更新完毕后设为0
	lastChangeTime varchar(30),  -- 最近修改时间，包括最近的同步时间
	sync int DEFAULT '0', -- 0未同步，1已同步
	
	-- 2014-09-03新增
	staffID varchar(32),  -- 员工ID  规则 sf + UUID前8位

	PRIMARY KEY  (rec_id)
)
 


 


 