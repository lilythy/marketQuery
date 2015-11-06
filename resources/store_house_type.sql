/* 仓库类型表*/
/* 万弘晖*/
/* 服务端*/
/* mysql*/
/* 2014-07-18*/

CREATE TABLE `MMBaoServer`.`store_house_type` (
	rec_id int not null AUTO_INCREMENT,
	typeName varchar(30),  -- 名称	
	isUsed int default'0',  --是否选用  0--是，1否
	createDate varchar(30) ,  -- 创建日期
	bossID varchar(32) NOT NULL,	-- 老板ID
	foreign key(bossID) references boss(bossID) on delete cascade on update cascade,

	
	PRIMARY KEY (rec_id)
)
 


 


 