/* 用户意见反馈表*/
/* 万弘晖*/
/* 服务端*/
/* mysql*/
/* 2014-09-03*/

CREATE TABLE `MMBaoServer`.`feed_back` (
	rec_id int NOT NULL AUTO_INCREMENT,  
	userName varchar(30),  -- 用户名
	content varchar(300),  -- 内容
	sendTime varchar(30) ,  -- 发送时间
	isRead int default '0', -- 是否查看  0-否 1-是
	readTime varchar(30) ,  -- 审查时间
	
	PRIMARY KEY (rec_id)
)
 


 