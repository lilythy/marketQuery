/* 销售订单表*/
/* 万弘晖*/
/* 服务端*/
/* mysql*/
/* 2014-07-08*/

CREATE TABLE sales_order(
salesOrder varchar(32) NOT NULL, -- 订单号  sa + UUID前6位 + SSss(纳秒) + _ +当天第几笔入库单（1,2,3。。。）
totalPrice float DEFAULT '0.0',  -- 销售总额
unit varchar (10) ,	   -- 金额单位
discount float  DEFAULT '1.0',  -- 折扣
status int  DEFAULT '0',  -- 状态  1交易成功 2未完成 
proNum int DEFAULT '1',  -- 商品总量
payMode  varchar (20),  -- 支付方式
salesStore varchar(50),  -- 销售门店
operateMan varchar(20),  -- 出售人员
operateID varchar(30),  -- 人员工号
createTime varchar(30),  -- 出售时间
bossID varchar(32) NOT NULL,	-- 老板ID

MacAddr varchar(30),  -- MAC地址
lastChangeSide int default'0' ,  -- 最近修改 0-客户端，1-Web端，Web添加或修改数据后，手机端通过该标识进行更新，更新完毕后设为0
lastChangeTime varchar(30),  -- 最近修改时间，包括最近的同步时间
sync int DEFAULT '0', -- 0未同步，1已同步

-- 2014-09-03新增
staffID varchar(32),  -- 员工ID  规则 sf + UUID前8位

PRIMARY KEY (salesOrder));


