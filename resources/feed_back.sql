/* �û����������*/
/* �����*/
/* �����*/
/* mysql*/
/* 2014-09-03*/

CREATE TABLE `MMBaoServer`.`feed_back` (
	rec_id int NOT NULL AUTO_INCREMENT,  
	userName varchar(30),  -- �û���
	content varchar(300),  -- ����
	sendTime varchar(30) ,  -- ����ʱ��
	isRead int default '0', -- �Ƿ�鿴  0-�� 1-��
	readTime varchar(30) ,  -- ���ʱ��
	
	PRIMARY KEY (rec_id)
)
 


 