/* �û���Ϊ��¼��*/
/* �����*/
/* �����*/
/* mysql*/
/* 2014-07-10*/

CREATE TABLE `MMBaoServer`.`user_log` (
	rec_id int NOT NULL AUTO_INCREMENT,  
	userID varchar(32),  -- �û�ID
	userName varchar(30),  -- �û���
	userPositon varchar(20),  -- �û�ְλ
	event varchar(100),  -- �¼�  �� ��¼���ǳ�����ѯXX��Ʒ
	loginTime varchar(30) ,  -- ��¼ʱ��
	logoutTime varchar(30) ,  -- �ǳ�ʱ��
	
	PRIMARY KEY (rec_id)
)
 


 