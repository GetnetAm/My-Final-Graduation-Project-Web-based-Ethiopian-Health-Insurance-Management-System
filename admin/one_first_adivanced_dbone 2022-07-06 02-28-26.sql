
-- Database Backup --
-- Ver. : 1.0.1
-- Host : 127.0.0.1
-- Generating Time : Jul 06, 2022 at 02:28:26:AM


CREATE TABLE `admin` (
  `admin_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES
("111","getnet","123","getnet@gamil.com","Getnet Amsalu","0925030197"),
("123","tasew","123","tasew@gamil.com","Tasew Woldehana","0910324565");

CREATE TABLE `agent` (
  `agent_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `accunt` varchar(50) NOT NULL,
  PRIMARY KEY (`agent_id`),
  UNIQUE KEY `agent_id` (`agent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO agent VALUES
("111","abisinia_bank","01598745682"),
("116","CBE","1001598745682"),
("getnet","Abay","998765765");

CREATE TABLE `casher` (
  `casher_id` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `age` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `school_level` varchar(50) NOT NULL,
  `policy_id` varchar(50) NOT NULL,
  `agent_id` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`casher_id`),
  UNIQUE KEY `customer_id` (`casher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO casher VALUES
("1511986023","abc","123","getnet","Male","11-05-1985","Married","0121567952","013548743688","get@gmail.com","Uttara","diploama","2","555","download.jpg"),
("1605853689","223","12345","abye","male","10-11-1990","single","debreberehan","9998529631","get@gmail.com","Raigarh","diploama","5048","007","Redmi-Note-9-Grey-4-128-Smart-Phone-491897407-i-1-1200Wx1200H.jpg"),
("1606114669","12rg","123456","tasew","male","10-11-1990","single","debreberehan","9998529631","get@gmail.com","Raigarh","diploama","105","agent007","146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png");

CREATE TABLE `comment` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `text` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO comment VALUES
("abye","abye@gamil.com","basso","you are interestin a"),
("enana","enana@gmail.com","tebase","ilike your campany"),
("tasew","taswew@gmail.com","debreberehan","this is fair payment");

CREATE TABLE `customer` (
  `customer_id` varchar(200) NOT NULL,
  `customer_password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `age` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kebele` varchar(50) NOT NULL,
  `woreda` varchar(50) NOT NULL,
  `policy_id` varchar(50) NOT NULL,
  `agent_id` varchar(20) NOT NULL,
  `no_family` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO customer VALUES
("1511986023","123","getnet","Male","11-05-1985","Married","0121567952","013548743688","tiame@gamil.com","01","baso","2","555","","download.jpg"),
("1605853689","12345","abye","kumar","10-11-1990","single","debreberehan","9998529631","fithisum@gmail","01","tebase","5048","007","","Redmi-Note-9-Grey-4-128-Smart-Phone-491897407-i-1-1200Wx1200H.jpg"),
("1606114669","123456","tasew","male","10-11-1990","single","debreberehan","9998529631","aster@gamil.com","01","tamiraber","105","agent007","","146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png");

CREATE TABLE `family` (
  `family_id` varchar(200) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `phone` varchar(50) NOT NULL,
  PRIMARY KEY (`family_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO family VALUES
("1511986023-414821017","1511986023","Martha Green","Female","15-08-1990","321684798321","Wife","01502816848"),
("1605853689-491904229","1605853689","krishna","male","01-07-1975","debreberehan","father","987643515"),
("LIG 236 HOUSING BOARD COLONY UMDA BHILAI","1606114669","kisan","male","10-11-1995","debreberehan","friends","070 0083 0947");

CREATE TABLE `kebeleadmin` (
  `kebeleadmin_id` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `age` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `school_level` varchar(50) NOT NULL,
  `policy_id` varchar(50) NOT NULL,
  `agent_id` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`kebeleadmin_id`),
  UNIQUE KEY `kebeleadmin_id` (`kebeleadmin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO kebeleadmin VALUES
("1511986023","123","getnet","John","Male","11-05-1985","Married","0121567952","013548743688","","basso","diploama","2","555","download.jpg"),
("1605853689","12345","abye","kumar","10-11-1990","single","debreberehan","0121567952","9998529631","","tebase","diploama","5048","007","Redmi-Note-9-Grey-4-128-Smart-Phone-491897407-i-1-1200Wx1200H.jpg"),
("1606114669","123456","tasew","male","10-11-1990","single","debreberehan","0121567952","9998529631","","anthikia","diploama","105","agent007","146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png");

CREATE TABLE `manager` (
  `manager_id` varchar(200) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `age` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `school_level` varchar(50) NOT NULL,
  `policy_id` varchar(50) NOT NULL,
  `agent_id` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`manager_id`),
  UNIQUE KEY `manager_id` (`manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO manager VALUES
("1511986023","getnet","123","John Green","Male","11-05-1985","Married","0121567952","013548743688","getnetamsalu@gamil.com","Uttara","Dgree","2","555","download.jpg"),
("1605853689","getnet","12345","abye","male","10-11-1990","single","debreberehan","9998529631","getnetamsalu@gamil.com","Raigarh","Phd","5048","007","Redmi-Note-9-Grey-4-128-Smart-Phone-491897407-i-1-1200Wx1200H.jpg"),
("1606114669","getnet","123456","tasew","male","10-11-1990","single","debreberehan","9998529631","getnetamsalu@gamil.com","Raigarh","BSC","105","agent007","146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png");

CREATE TABLE `notification` (
  `notification_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `notification` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO notification VALUES
("1232","12/03/12","plase pay in the next weak"),
("a123","03/03/2020","payment date is caming son!"),
("dc12","30/23/2013","the payment date is until march 8");

CREATE TABLE `payment` (
  `recipt_no` varchar(20) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `agent_id` varchar(30) NOT NULL,
  PRIMARY KEY (`recipt_no`),
  UNIQUE KEY `recipt_no` (`recipt_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO payment VALUES
("1511987179_452089622","1511986023","CBE","400","2014","payed","555"),
("1511990125_551933465","1511987932","Abay","450","2014","not payed","222"),
("1511990498_126571266","1511989196","Abisniya","500","2014","payed","222"),
("1511990510_111608856","1511989196","CBE","400","2013","not payed","222");

CREATE TABLE `policy` (
  `policy_id` varchar(50) NOT NULL,
  `anaualy` varchar(50) NOT NULL,
  `one_four` varchar(50) NOT NULL,
  `five_egiht` varchar(50) NOT NULL,
  `nine_twelve` varchar(50) NOT NULL,
  `free` varchar(20) NOT NULL,
  PRIMARY KEY (`policy_id`),
  UNIQUE KEY `policy_id` (`policy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO policy VALUES
("1","2013 year","300","350","450","free"),
("2","2014 Years","400","450","600","free"),
("3","2015 Years","","","","free");

CREATE TABLE `pyment_history` (
  `pyment_history_id` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `reasion` varchar(200) NOT NULL,
  `total_payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO pyment_history VALUES
("1232","1232","12/03/12","for healthi","300"),
("a123","1232","03/03/2020","for healthi care","300"),
("dc12","1232","30/23/2013","for labratory","300");

CREATE TABLE `red_cross` (
  `red_cross_id` varchar(50) NOT NULL,
  `red_cross_branch_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO red_cross VALUES
("1232","tebase","redcross1","123","09203054","redcross@gamil.com","basso"),
("a123","pissa","redcross2","123","09203054","redcross@gamil.com","debreberehan"),
("dc12","debreberehan","redcross3","123","09203054","redcross@gamil.com","tebase");