# Host: localhost  (Version 5.5.5-10.1.21-MariaDB)
# Date: 2019-04-04 16:07:25
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "cat"
#

CREATE TABLE `cat` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(20) NOT NULL,
  `isrec` int(20) NOT NULL,
  `parent_id` varchar(10) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

#
# Data for table "cat"
#

INSERT INTO `cat` VALUES (1,'电器',1,'0'),(2,'手机',1,'0'),(3,'人工智能',1,'0'),(4,'儿童用品',1,'0'),(5,'成人用品',0,'0'),(7,'电脑配件',1,'0'),(8,'苹果',0,'2'),(9,'安卓',0,'2');

#
# Structure for table "goods"
#

CREATE TABLE `goods` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL,
  `goods_sn` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `shop_price` decimal(10,2) NOT NULL,
  `market_price` decimal(10,2) NOT NULL,
  `goods_number` int(11) NOT NULL,
  `click_count` varchar(255) NOT NULL,
  `goods_weight` double NOT NULL,
  `goods_brief` varchar(255) NOT NULL,
  `goods_desc` varchar(255) NOT NULL,
  `tiumb_img` varchar(255) NOT NULL,
  `goods_img` varchar(255) NOT NULL,
  `ori_img` varchar(255) NOT NULL,
  `is_sale` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL,
  `is_best` int(11) NOT NULL,
  `is_rec` int(11) NOT NULL DEFAULT '0',
  `is_new` int(11) NOT NULL,
  `is_hot` int(11) NOT NULL,
  `add_time` varchar(255) NOT NULL,
  `last_update` varchar(255) NOT NULL,
  `goods_body` varchar(255) NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

#
# Data for table "goods"
#

INSERT INTO `goods` VALUES (1,0,'ECC1',0,'冰箱1',2000.00,2500.00,0,'',0,'','','','./Upload/2019-04-04/5ca56dd5a3c1b.png','',1,0,0,1,1,1,'','','22222'),(2,0,'DCC',0,'vivox10',1888.00,2500.00,0,'',0,'','','','','',1,0,0,0,0,0,'','','手机价格非常便宜'),(3,0,'BCC',0,'外星人笔记本',15000.88,18888.88,0,'',0,'','','','','',1,0,0,0,0,0,'','','只有你用不到，没有你想不到'),(4,0,'ABB',0,'惠普暗夜精灵pro4',6000.00,6888.00,0,'',0,'','','','','',1,0,0,0,0,0,'','','游戏本必需品'),(5,0,'BCC111',0,'空调111',2000.00,2500.00,0,'',0,'','','','','',1,0,0,0,0,0,'','','111111'),(6,0,'DDD',0,'三星note10',4800.00,5500.00,0,'',0,'','','','','',1,0,0,0,0,0,'','','会爆炸得手机，记得收藏哦'),(11,0,'1111111111',0,'111111111111',111111.00,11111111.00,0,'',0,'','','','','',1,0,0,0,0,0,'','','11111111'),(12,0,'111',0,'1111',1111.00,111.00,0,'',0,'','','','','',1,0,0,0,0,0,'','','1111'),(13,0,'123',0,'123',123.00,123.00,0,'',0,'','','','./Upload/2019-04-04/5ca567e96fa16.png','',1,0,0,1,1,1,'','','123123'),(14,0,'123123',0,'123123',123123.00,123123.00,0,'',0,'','','','./Upload/2019-04-04/5ca5689b877ca.png','',1,0,0,1,1,1,'','','123123123'),(15,0,'213123',0,'123',123123.00,123123.00,0,'',0,'','','','./Upload/2019-04-04/5ca567cc0f2e5.png','',1,0,0,1,1,1,'','','12312312');
