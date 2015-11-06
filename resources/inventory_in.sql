/* 入库操作表*/
/* 万弘晖*/
/* 服务端*/
/* mysql*/
/* 2014-07-08*/

CREATE TABLE inventory_in(
	rec_id int not null AUTO_INCREMENT,
	MacAddr varchar(30),  -- MAC地址
	lastChangeSide int default'0' ,         -- 最近修改 0-客户端，1-Web端，Web添加或修改数据后，手机端通过该标识进行更新，更新完毕后设为0
	lastChangeTime varchar(30),  -- 最近修改时间，包括最近的同步时间
	sync int DEFAULT '0', -- 0未同步，1已同步
	storageOrder varchar(32) NOT NULL,
	-- foreign key(storageOrder) references Storage_Order(storageOrder) on delete cascade on update cascade, -- 所属入库单号
 
	inven_oper_guid varchar(32) NOT NULL,   -- 库存操作GUID
	in_code varchar(10) ,  -- 入库编号
	bar_code varchar (30) ,        -- 条码
	item_code varchar(50) ,  -- 货号
	main_pro_name varchar(30) ,  -- 品名
	num int  DEFAULT '1',   -- 数量
	specification text,    -- 规格
	color    varchar (10),    -- 颜色
	measur_units varchar(6) ,   -- 计量单位
	purch_price float DEFAULT '0.0',  -- 进货价
	final_price float DEFAULT '0.0',           -- 最终售价（售价）
	price float  DEFAULT '0.0',  -- 金额
 	provider_code varchar(30) ,   -- 供应商编号
	provider varchar(50) ,   -- 供应商
	invent_oper_status  int  DEFAULT '0',    -- 状态 0入，1调拨，2出，3退
	store_house varchar(30) ,  -- 仓库
	oper_time varchar(10) ,  -- 操作日期
	create_time timestamp,  -- 创建时间
	operatorMan varchar(10) ,  -- 操作员
	remark varchar(100) ,  -- 备注
	item_category_code varchar(20) ,  -- 商品类别代码，需要类别核算时需要  （商品群）
	category varchar(15),   -- 类别	
	
	
	-- 2014-09-03新增
	staffID varchar(32),  -- 员工ID  规则 sf + UUID前8位
	productID varchar(32), -- 商品ID
	bossID varchar(32) NOT NULL,	-- 老板ID
	
	
	PRIMARY KEY  (rec_id)
) 




	
	
