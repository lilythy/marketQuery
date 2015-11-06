/* 入库单号表*/
/* 万弘晖*/
/* 服务端*/
/* mysql*/
/* 2014-07-08*/

CREATE TABLE storage_order(
storageOrder varchar(32) NOT NULL, -- 入库单号 6位UUID + 日期(SSSS) + _ + 当天第几笔入库单（1,2,3。。。）
totalPrice float DEFAULT '0.0',  -- 进价总额
unit varchar (10) , 	   -- 金额单位 当前默认为元
inventoryNum int DEFAULT '1', 	   -- 入库数量
operateMan  varchar (20), -- 入库人员
staffID varchar(32), -- 员工号
createTime varchar(30), -- 入库时间

bossID varchar(32) NOT NULL,	-- 老板ID
-- foreign key(bossID) references boss(bossID) on delete cascade on update cascade,
MacAddr varchar(30),  -- MAC地址
lastChangeSide int default'0' ,         -- 最近修改 0-客户端，1-Web端，Web添加或修改数据后，手机端通过该标识进行更新，更新完毕后设为0
lastChangeTime varchar(30),  -- 最近修改时间，包括最近的同步时间
sync int DEFAULT '0', -- 0未同步，1已同步
status int DEFAULT '0',

PRIMARY KEY (storageOrder));

