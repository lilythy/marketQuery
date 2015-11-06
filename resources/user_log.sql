/* 用户行为记录表*/
/* 万弘晖*/
/* 服务端*/
/* mysql*/
/* 2014-07-10*/

CREATE TABLE `MMBaoServer`.`user_log` (
	rec_id int NOT NULL AUTO_INCREMENT,  
	userID varchar(32),  -- 用户ID
	userName varchar(30),  -- 用户名
	userPositon varchar(20),  -- 用户职位
	event varchar(100),  -- 事件  如 登录、登出、查询XX商品
	loginTime varchar(30) ,  -- 登录时间
	logoutTime varchar(30) ,  -- 登出时间
	
	PRIMARY KEY (rec_id)
)
 


 