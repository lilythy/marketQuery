/* 出库(售)操作表*/
/* 万弘晖*/
/* 服务端*/
/* mysql*/
/* 2014-07-08*/

CREATE TABLE inventory_out(
	rec_id int not null AUTO_INCREMENT,
	MacAddr varchar(30),  -- MAC地址
	lastChangeSide int default'0' ,         -- 最近修改 0-客户端，1-Web端，Web添加或修改数据后，手机端通过该标识进行更新，更新完毕后设为0
	lastChangeTime varchar(30),  -- 最近修改时间，包括最近的同步时间
	sync int DEFAULT '0', -- 0未同步，1已同步
	salesOrder varchar(32) NOT NULL,
	-- foreign key(salesOrder) references Sales_Order(salesOrder) on delete cascade on update cascade, -- 所属订单号   添加外键关系、级联操作，即删除订单后该次交易的商品记录连带删除
 
	invent_oper_guid varchar(32) NOT NULL,   -- 库存操作GUID
	out_code varchar(10) ,   -- 出库编号
	bar_code varchar (30) ,        -- 条码
	item_code varchar(50) ,  -- 货号
	main_pro_name varchar(30) ,  -- 品名
	final_price float DEFAULT '0.0',           -- 单个最终售价（售价）
	discount float DEFAULT '0.0',           -- 折扣
	num int  DEFAULT '1',   -- 数量
	productID varchar(32),   -- 商品ID 
	invent_oper_status  int  DEFAULT '2',    -- 状态 1退 2出
	store_house varchar(30) ,  -- 仓库名
	storeHouseID varchar(32) ,  -- 仓库ID
	oper_time varchar(10) ,  -- 操作日期
	create_time timestamp,  -- 创建时间
	operatorMan varchar(10) ,  -- 操作员
	remark varchar(100) ,  -- 备注

	-- 2014-09-03新增
	staffID varchar(32),  -- 员工ID  规则 sf + UUID前8位
	bossID varchar(32) NOT NULL,	-- 老板ID
	measur_units varchar(6) ,   -- 计量单位
	price float  DEFAULT '0.0',  -- 总金额

	PRIMARY KEY  (rec_id)
) 




	
	
