-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 02:17 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `main_adivanced_dbone_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `agent_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `accunt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `name`, `accunt`) VALUES
('111', 'abisinia_bank', '01598745682'),
('116', 'CBE', '1001598745682'),
('getnet',  'Abay',  '998765765');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
   `email` varchar(50) NOT NULL,
    `full_name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`,`email`, `full_name`, `phone`) VALUES
('111', 'admin1', '12345','admin1@gamil.com','Getnet Amsalu', '0925030197' ),
('123',  'getnet', '123', 'getnet@gamil.com', 'Tasew Woldehana', '0910324565' );

-- --------------------------------------------------------




--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` varchar(200) NOT NULL,
  `customer_password` varchar(30) NOT NULL,
  `full_name` varchar(50) NOT NULL,
   `username` varchar(50) NOT NULL,
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
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebeleadmin`
--

INSERT INTO `customer` (`customer_id`, `customer_password`, `full_name`, `sex`, `birth_date`, `marital_status`, `age`, `phone`, `email`, `kebele`, `woreda`, `policy_id`, `agent_id`, `image`) VALUES
('1511986023', '123', 'getnet', 'Male', '11-05-1985', 'Married', '0121567952', '013548743688', 'tiame@gamil.com', '01', 'baso', '2', '555', 'download.jpg'),
('1605853689', '12345', 'customer1', 'getnet', '10-11-1990', 'single', 'debreberehan', '9998529631', 'fithisum@gmail', '01', 'tebase', '5048', '007', 'customer1.png'),
('1606114669', '123456', 'tasew', 'male', '10-11-1990', 'single', 'debreberehan', '9998529631', 'aster@gamil.com', '01', 'tamiraber', '105', 'agent007', '146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png');

-- --------------------------------------------------------


--
-- Table structure for table `family`
--

CREATE TABLE IF NOT EXISTS `family` (
  `family_id` varchar(200) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`family_id`, `customer_id`, `name`, `sex`, `birth_date`, `age`, `relationship`, `phone`) VALUES
('1511986023-414821017', '1511986023', 'Martha Green', 'Female', '15-08-1990', '321684798321', 'Wife', '01502816848'),
('1605853689-491904229', '1605853689', 'krishna', 'male', '01-07-1975', 'debreberehan', 'father', '987643515'),
('LIG 236 HOUSING BOARD COLONY UMDA BHILAI', '1606114669', 'kisan', 'male', '10-11-1995', 'debreberehan', 'friends', '070 0083 0947');

-- --------------------------------------------------------



--
-- Table structure for table `kebeleadmin`
--

CREATE TABLE IF NOT EXISTS `kebeleadmin` (
  `kebeleadmin_id` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
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
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebeleadmin`
--

INSERT INTO `kebeleadmin` (`kebeleadmin_id`, `password`,`username`, `name`, `sex`, `birth_date`, `marital_status`, `age`, `phone`, `address`, `school_level`, `policy_id`, `agent_id`, `image`) VALUES
('1511986023', '123','getnet', 'John', 'Male', '11-05-1985', 'Married', '0121567952', '013548743688', 'basso', 'diploama', '2', '555', 'download.jpg'),
('1605853689', '1234', 'abye', 'kumar', '10-11-1990', 'single', 'debreberehan','0121567952', '9998529631', 'tebase', 'diploama', '5048', '007', 'Redmi-Note-9-Grey-4-128-Smart-Phone-491897407-i-1-1200Wx1200H.jpg'),
('160585368912', '12345', 'kebeleadmin1', 'kebede abate', '10-11-1990', 'single', 'debreberehan','0121567952', '9998529631', 'tebase', 'diploama', '5048', '007', 'kebeleadmin1.png'),

('1606114669', '123456', 'tasew', 'male', '10-11-1990', 'single', 'debreberehan','0121567952', '9998529631', 'anthikia', 'diploama', '105', 'agent007', '146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png');

-- --------------------------------------------------------





--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `health_center` (
   `health_center_id` varchar(200) NOT NULL,
   `health_center_name` varchar(200) NOT NULL,
   `health_center_type` varchar(200) NOT NULL,
  `casher_id` varchar(200) NOT NULL,

  `username` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
   `email` varchar(20) NOT NULL,

  `address` varchar(50) NOT NULL,
  `policy_id` varchar(50) NOT NULL,
  `agent_id` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_Center`
--

INSERT INTO `health_center` (`health_center_id`, `health_center_name`, `health_center_type`, `casher_id`, `username`, `password`, `name`, `phone`,`email`, `address`, `policy_id`, `agent_id`, `image`) VALUES
('15119860','debreberehan','hospital','1511986023', 'healhiCenter1', '12345', '0121567952', '013548743688', 'get@gmail.com', 'Uttara', '2', '555', 'download.jpg'),
('1511986023','tebase','clinik','1605853689', '12345', 'abye', 'debreberehan', '9998529631', 'get@gmail.com', 'Raigarh','5048', '007', 'Redmi-Note-9-Grey-4-128-Smart-Phone-491897407-i-1-1200Wx1200H.jpg'),
('1511986023','basso','clinik','1606114669', '123456', 'tasew', 'debreberehan', '9998529631', 'get@gmail.com', 'Raigarh', '105', 'agent007', '146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png');

-- --------------------------------------------------------



--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
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
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `username`,  `password`, `name`, `sex`, `birth_date`, `marital_status`, `age`, `phone`, `email`, `address`, `school_level`, `policy_id`, `agent_id`, `image`) VALUES
('1511986023','manager1', '12345', 'John Green', 'Male', '11-05-1985', 'Married', '0121567952', '013548743688', 'getnetamsalu@gamil.com', 'Uttara', 'Dgree', '2', '555', 'manager1.png'),
('1605853689','getnet', '12345', 'abye', 'male', '10-11-1990', 'single', 'debreberehan', '9998529631', 'getnetamsalu@gamil.com', 'Raigarh', 'Phd', '5048', '007', 'Redmi-Note-9-Grey-4-128-Smart-Phone-491897407-i-1-1200Wx1200H.jpg'),
('1606114669','getnet', '123456', 'tasew', 'male', '10-11-1990', 'single', 'debreberehan', '9998529631', 'getnetamsalu@gamil.com', 'Raigarh', 'BSC', '105', 'agent007', '146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png');

-- --------------------------------------------------------



--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `recipt_no` varchar(20) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `agent_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`recipt_no`, `customer_id`, `bank_name`, `amount`, `year`, `status`, `agent_id`) VALUES
('1511987179_452089622', '1511986023', 'CBE', '400', '2014', 'payed', '555'),
('1511990125_551933465', '1511987932', 'Abay', '450', '2014', 'not payed', '222'),
('1511990498_126571266', '1511989196', 'Abisniya', '500', '2014', 'payed', '222'),
('1511990510_111608856', '1511989196', 'CBE', '400', '2013', 'not payed', '222');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE IF NOT EXISTS `policy` (
  `policy_id` varchar(50) NOT NULL,
  `anaualy` varchar(50) NOT NULL,
  `one_four` varchar(50) NOT NULL,
  `five_egiht` varchar(50) NOT NULL,
  `nine_twelve` varchar(50) NOT NULL,
  `free` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policy_id`, `anaualy`, `one_four`, `five_egiht`, `nine_twelve`, `free`) VALUES
('1', '2013 year', '300', '350', '450', 'free'),
('2', '2014 Years', '400', '450', '600', 'free'),
('3', '2015 Years', '', '', '', 'free');

--
-- Indexes for dumped tables
--
--
-- Table structure for table `comment`
--


CREATE TABLE IF NOT EXISTS `comment` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  
  `text` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`name`, `email`, `address`, `text`) VALUES
('abye', 'abye@gamil.com', 'basso', 'you are interestin and amizing plan'),
('enana', 'enana@gmail.com', 'tebase', 'ilike your campany'),
('tasew', 'taswew@gmail.com', 'debreberehan', 'this is fair payment');


--
-- Table structure for table `notification`
--


CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `notification` varchar(200) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `date`, `notification`) VALUES
('1232', '12/03/12', 'plase pay in the next weak'),
('a123', '03/03/2020', 'payment date is caming son!'),
('dc12', '30/23/2013',  'the payment date is until march 8');



--
-- Table structure for table `service`
--


CREATE TABLE IF NOT EXISTS `service` (
  `service_id` varchar(50) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `service_discription` varchar(200) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_discription`) VALUES
('1232', 'hiv', 'plase pay in the next weak'),
('a123', 'Tb', 'payment date is caming son!'),
('dc12', 'kidiny',  'the payment date is until march 8');




--
-- Table structure for table `service`
--


CREATE TABLE IF NOT EXISTS `news` (
  `news_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `news_header` varchar(50) NOT NULL,
    `news_discripion` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`,`date`, `news_header`, `news_discripion`,`image`) VALUES
('1232', '20/10/23', 'hiv',  'payment date is caming son!','herv'),
('a1q23', '2014', 'hiv',  'payment date is caming son!','hiv'),
('dc12', '2013', 'hiv', 'the payment date is until march ', 'gee');



--
-- Table structure for table `pyment_history`
--


CREATE TABLE IF NOT EXISTS `pyment_history` (
  `pyment_history_id` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
   `reasion` varchar(200) NOT NULL,
  `total_payment` varchar(50) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pyment_history`
--

INSERT INTO `pyment_history` (`pyment_history_id`, `customer_id`, `date`, `reasion`, `total_payment`) VALUES
('1232','1232', '12/03/12', 'for healthi','300'),
('a123','1232', '03/03/2020', 'for healthi care','300'),
('dc12','1232', '30/23/2013',  'for labratory','300');


--
-- Table structure for table `red_cross`
--


CREATE TABLE IF NOT EXISTS `red_cross` (
  `red_cross_id` varchar(50) NOT NULL,
  `red_cross_branch_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,

  `address` varchar(50) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `red_cross`
--

INSERT INTO `red_cross` (`red_cross_id`, `red_cross_branch_name`, `username`, `password`,`phone`, `email`, `address`) VALUES
('1232','tebase', 'redcross1', '12345','09203054','redcross@gamil.com','basso'),
('a123','pissa', 'redcross2','123','09203054','redcross@gamil.com','debreberehan'),
('dc12','debreberehan', 'redcross3','123','09203054','redcross@gamil.com', 'tebase');


--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
 ADD PRIMARY KEY (`agent_id`), ADD UNIQUE KEY `agent_id` (`agent_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`customer_id`), ADD UNIQUE KEY `customer_id` (`customer_id`);
  -- ADD PRIMARY KEY (`username`), ADD UNIQUE KEY `username` (`username`);



--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`), ADD UNIQUE KEY `admin_id` (`admin_id`);


--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
 ADD PRIMARY KEY (`manager_id`), ADD UNIQUE KEY `manager_id` (`manager_id`);

 --
-- Indexes for table `customer`
--
ALTER TABLE `health_center`
 ADD PRIMARY KEY (`casher_id`), ADD UNIQUE KEY `customer_id` (`casher_id`);


--
-- Indexes for table `customer`
--
ALTER TABLE `kebeleadmin`
 ADD PRIMARY KEY (`kebeleadmin_id`), ADD UNIQUE KEY `kebeleadmin_id` (`kebeleadmin_id`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
 ADD PRIMARY KEY (`family_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`recipt_no`), ADD UNIQUE KEY `recipt_no` (`recipt_no`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
 ADD PRIMARY KEY (`policy_id`), ADD UNIQUE KEY `policy_id` (`policy_id`);




--
-- Indexes for table `red_cross`
--
ALTER TABLE `red_cross`
 ADD PRIMARY KEY (`red_cross_id`), ADD UNIQUE KEY `red_cross_id` (`red_cross_id`);


--
-- Indexes for table `red_cross`
--
ALTER TABLE `service`
 ADD PRIMARY KEY (`service_id`), ADD UNIQUE KEY `service_id` (`service_id`);

 --
-- Indexes for table `notification`
--
ALTER TABLE `notification`
 ADD PRIMARY KEY (`notification_id`), ADD UNIQUE KEY `notification_id` (`notification_id`);

 --
-- Indexes for table `policy`
--
ALTER TABLE `pyment_history`
 ADD PRIMARY KEY (`pyment_history_id`), ADD UNIQUE KEY `pyment_history_id` (`pyment_history_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
