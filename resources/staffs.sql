/* Ա����*/
/* �����*/
/* �����*/
/* mysql*/
/* 2014-07-09*/

CREATE TABLE `MMBaoServer`.`staffs` (
	staffID varchar(32) NOT NULL,  -- �û�ID  ���� sf + UUIDǰ8λ
	staffName varchar(30) NOT NULL unique,  -- �û���
	staffPwd varchar(100),  -- �û�����
	phone varchar(20),  -- �ֻ�
	tel varchar(20),  -- �绰
	mail varchar(30),  -- ����
	age int,  -- ����
	realName varchar(30),  -- ��ʵ����
	position varchar(30), -- ְλ���� 
	IDCard int not null,  -- ���֤ ������
	sex int default '0', -- �Ա�  0-�� 1-Ů
	vip int default '1', -- ��Ա  0-�� 1-��
	loginStatus int default '0', -- ��¼״̬  0-���� 1-����
	loginSide int default '0', -- ��¼�ն�  0-�ֻ��� 1-Web��
	accountStatus int default '0', -- �˻�״̬  0-������ 1-���� 2-����
	score int default '0', -- ����
	couponsNum int default '0', -- �Ż�ȯ����
	userLevel int default '0', -- Ȩ�޵ȼ� 
	vipLevel int default '0', -- vip�ȼ� 
	totalConsume float default '0.0',  -- �ۼ�����
	userPrice float default '0.0',  -- �˻����
	lastLoginDate varchar(30) ,  -- ���һ�εĵ�¼ʱ��
	registerDate varchar(30) ,  -- ע������
--	storeName varchar(50),  --�����ŵ���
--	houseName varchar(50),  --�����ֿ���  ���ID�ж�����ֿ���ҲҪ�ж��
	storeHouseID varchar(50),  --�����ֿ�ID
	storeHouseID1 varchar(50),  --�����ֿ�ID
--	foreign key(storeHouseID) references store_house(storeHouseID) on update cascade,
	storeID varchar(32),	-- �����ŵ�ID
	storeID1 varchar(32),	-- �����ŵ�ID1   Ա������ͬʱ�������ŵ�
	bossID varchar(32) NOT NULL,	-- �ϰ�ID
	foreign key(bossID) references boss(bossID) on delete cascade on update cascade, -- �ϰ���Ϣɾ������Ӧ��Ա����Ϣ����ɾ��
	
	PRIMARY KEY (staffID)
)
 


 


 