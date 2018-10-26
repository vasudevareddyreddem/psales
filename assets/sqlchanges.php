
Create Table
/*  sales_details table   */

CREATE TABLE `sales_details` (
  `sale_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(250) DEFAULT NULL,
  `f_number` varchar(250) DEFAULT NULL,
  `f_email` varchar(250) DEFAULT NULL,
  `f_bname` varchar(250) DEFAULT NULL,
  `f_bnature` varchar(250) DEFAULT NULL,
  `f_dbusiness` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`sale_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1
