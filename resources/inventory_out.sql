/* ����(��)������*/
/* �����*/
/* �����*/
/* mysql*/
/* 2014-07-08*/

CREATE TABLE inventory_out(
	rec_id int not null AUTO_INCREMENT,
	MacAddr varchar(30),  -- MAC��ַ
	lastChangeSide int default'0' ,         -- ����޸� 0-�ͻ��ˣ�1-Web�ˣ�Web��ӻ��޸����ݺ��ֻ���ͨ���ñ�ʶ���и��£�������Ϻ���Ϊ0
	lastChangeTime varchar(30),  -- ����޸�ʱ�䣬���������ͬ��ʱ��
	sync int DEFAULT '0', -- 0δͬ����1��ͬ��
	salesOrder varchar(32) NOT NULL,
	-- foreign key(salesOrder) references Sales_Order(salesOrder) on delete cascade on update cascade, -- ����������   ��������ϵ��������������ɾ��������ôν��׵���Ʒ��¼����ɾ��
 
	invent_oper_guid varchar(32) NOT NULL,   -- ������GUID
	out_code varchar(10) ,   -- ������
	bar_code varchar (30) ,        -- ����
	item_code varchar(50) ,  -- ����
	main_pro_name varchar(30) ,  -- Ʒ��
	final_price float DEFAULT '0.0',           -- ���������ۼۣ��ۼۣ�
	discount float DEFAULT '0.0',           -- �ۿ�
	num int  DEFAULT '1',   -- ����
	productID varchar(32),   -- ��ƷID 
	invent_oper_status  int  DEFAULT '2',    -- ״̬ 1�� 2��
	store_house varchar(30) ,  -- �ֿ���
	storeHouseID varchar(32) ,  -- �ֿ�ID
	oper_time varchar(10) ,  -- ��������
	create_time timestamp,  -- ����ʱ��
	operatorMan varchar(10) ,  -- ����Ա
	remark varchar(100) ,  -- ��ע

	-- 2014-09-03����
	staffID varchar(32),  -- Ա��ID  ���� sf + UUIDǰ8λ
	bossID varchar(32) NOT NULL,	-- �ϰ�ID
	measur_units varchar(6) ,   -- ������λ
	price float  DEFAULT '0.0',  -- �ܽ��

	PRIMARY KEY  (rec_id)
) 




	
	
