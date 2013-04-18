-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2013 at 11:56 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `confweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE IF NOT EXISTS `accommodation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `link` varchar(256) COLLATE utf8_bin NOT NULL,
  `photo` varchar(256) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`id`, `name`, `link`, `photo`) VALUES
(1, '如家酒店', 'http://www.baidu.com', '2013/02/27/1361942678144.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`) VALUES
(1, 'root', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE IF NOT EXISTS `committee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `englishname` varchar(32) COLLATE utf8_bin NOT NULL,
  `chinesename` varchar(32) COLLATE utf8_bin NOT NULL,
  `introduction` varchar(1024) COLLATE utf8_bin NOT NULL,
  `type` varchar(16) COLLATE utf8_bin NOT NULL,
  `rank` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='委员会成员' AUTO_INCREMENT=15 ;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`id`, `englishname`, `chinesename`, `introduction`, `type`, `rank`) VALUES
(9, 'S.T.Yau', '丘成桐', 'Chairman,Harvard University and Zhejiang University', 'sci', 1),
(10, 'Zhi-Ming Chen', '陈志明', 'Academy of Mathematics and Systems Science, Chinese Academy of Science', 'sci', 2),
(11, 'Chong-Qing Cheng', '程崇庆', 'Nanjing University', 'sci', 3),
(12, 'Huai-dong Cao', '曹怀东', 'Lehigh University', 'exe', 1),
(13, 'Gerard J. Chang', '张镇华', 'National Taiwan University', 'exe', 2),
(14, 'Kefeng Liu', '刘克峰', 'Chairman, Zhejiang University and UCLA', 'org', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(256) COLLATE utf8_bin NOT NULL,
  `phone1` varchar(64) COLLATE utf8_bin NOT NULL,
  `phone2` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `phone3` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `fax` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='contact内容' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `phone1`, `phone2`, `phone3`, `fax`) VALUES
(1, 'Mailbox 1511, Center of Mathematical Sciences, Zhejiang University, Hangzhou 310027, China', ' 0086-571-87953030', ' 0086-571-87953030', '15824122464', '0086-571-87953035');

-- --------------------------------------------------------

--
-- Table structure for table `directions`
--

CREATE TABLE IF NOT EXISTS `directions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_bin NOT NULL,
  `content` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_bin NOT NULL,
  `content` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `content`) VALUES
(1, 'Background', '<p align="left" style="font-family: ''Times New Roman''; font-size: medium; "><img src="/conference/Attachments/FCKeditor/201303/20130302_110316_117.jpg" width="200" height="269" align="left" alt="" />The International Congress of Chinese Mathematicians (ICCM) is a triennial congress sponsored by Shing-Tung Yau and Ronnie Chan,Chairman of the Hang Lung Group. The congress is hosted by institutions in Mainland China, Taiwan, and Hong Kong in a rotating basis. The previous three congresses were successfully held in Beijing (1998), Taipei (2001) and Hong Kong (2004) with from 500 to 1000 participants from all over the world. One of the highlights of the Congresses is the award of the&nbsp;<a href="http://www.cms.zju.edu.cn/ICCM2007/award.html" style="color: rgb(101, 88, 61); ">Morningside Medals of Mathematics</a>&nbsp;and the Chern Prize. Awardees are selected by a panel of international renowned mathematicians with the aim to encourage outstanding mathematicians of Chinese descent in their pursuit of mathematical truth.</p>\r\n<p style="font-family: ''Times New Roman''; font-size: medium; ">The Fourth ICCM (ICCM2007) will be held in&nbsp;<a href="http://www.cms.zju.edu.cn/frontindex.asp" style="color: rgb(101, 88, 61); ">Center of Mathematical Sciences</a>,<a href="http://www.zju.edu.cn/" style="color: rgb(101, 88, 61); ">Zhejiang University</a>&nbsp;in December 2007. There will be&nbsp;<a href="http://www.cms.zju.edu.cn/ICCM2007/speaker.html" style="color: rgb(101, 88, 61); ">14 plenary lectures and 40 special sessions</a>&nbsp;on mathematical topics. Besides the invited lectures, there will also be contributed and poster sessions. Morningside Medals of Mathematics and Chern Prize will be awarded in the opening ceremony.Mr. Yongxiang Lu, vice chairman of the national people''s congress, will attend the fourth International Congress of Chinese Mathematicians.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `invitedspeaker`
--

CREATE TABLE IF NOT EXISTS `invitedspeaker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `englishname` varchar(32) COLLATE utf8_bin NOT NULL,
  `chinesename` varchar(32) COLLATE utf8_bin NOT NULL,
  `school` varchar(128) COLLATE utf8_bin NOT NULL,
  `introduction` varchar(64) COLLATE utf8_bin NOT NULL,
  `rank` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='邀请的speaker' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `invitedspeaker`
--

INSERT INTO `invitedspeaker` (`id`, `englishname`, `chinesename`, `school`, `introduction`, `rank`) VALUES
(5, 'Zhiming Chen', '陈志明', 'ICMSEC', 'Chinese Academy of Science', 1),
(6, 'Weinan E', '鄂维南', 'Princeton University', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `registrant`
--

CREATE TABLE IF NOT EXISTS `registrant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `occupation` varchar(128) COLLATE utf8_bin NOT NULL,
  `name` varchar(64) COLLATE utf8_bin NOT NULL,
  `gender` varchar(2) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `email` varchar(128) COLLATE utf8_bin NOT NULL,
  `organization` varchar(256) COLLATE utf8_bin NOT NULL,
  `address` varchar(256) COLLATE utf8_bin NOT NULL,
  `zipcode` varchar(64) COLLATE utf8_bin NOT NULL,
  `phone` varchar(32) COLLATE utf8_bin NOT NULL,
  `fax` varchar(64) COLLATE utf8_bin NOT NULL,
  `report` varchar(1) COLLATE utf8_bin NOT NULL COMMENT '是否报告',
  `arrivaldate` varchar(16) COLLATE utf8_bin NOT NULL,
  `departuredate` varchar(16) COLLATE utf8_bin NOT NULL,
  `book` varchar(1) COLLATE utf8_bin NOT NULL COMMENT '是否预定房间',
  `single` varchar(1) COLLATE utf8_bin NOT NULL COMMENT '是否单人间',
  `special` varchar(1024) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='注册成员表' AUTO_INCREMENT=23 ;

--
-- Dumping data for table `registrant`
--

INSERT INTO `registrant` (`id`, `occupation`, `name`, `gender`, `password`, `email`, `organization`, `address`, `zipcode`, `phone`, `fax`, `report`, `arrivaldate`, `departuredate`, `book`, `single`, `special`) VALUES
(6, '教授', 'shengxiaochang', '男', '123', 'sheng_xc@126.com', 'zju', 'yq', '123', '1234456', '2342345', '是', '11-1', '1-1', '否', '否', 'fdsafd'),
(8, '教授', 'fdsafd', '男', '1', 'fdsa', 'fdsafds', 'gdsafs', 'fdsaf', 'fdsags', 'fdsafdsf', '是', '1-12', '1-1', '是', '是', 'fads'),
(9, '教授', 'fdsaf ', '男', '1', 'fdsa', 'fdsaf', 'gfsadf', 'gfdg', '13213', '23432432', '是', '1-12', '1-1', '是', '是', ''),
(10, '教授', 'fdsaf ', '男', '1', 'fdsa', 'fdsaf', 'gfsadf', 'gfdg', '13213', '23432432', '是', '1-12', '1-1', '是', '是', ''),
(11, '教授', 'fdsaf ', '男', '1', 'fdsa', 'fdsaf', 'gfsadf', 'gfdg', '13213', '23432432', '是', '1-12', '1-1', '是', '是', ''),
(12, '教授', 'fsadfd', '男', '1', 'fdsa', 'fsdaf', 'gfsda', 'fsdag', 'fsdadf', 'gsdadf', '是', '12-1', '1-1', '是', '是', 'fsadfds'),
(13, '教授', 'fsadfd', '男', '1', 'fdsa', 'fsdaf', 'gfsda', 'fsdag', 'fsdadf', 'gsdadf', '是', '12-1', '1-1', '是', '是', 'fsadfds'),
(14, '教授', 'fasdfs', '男', '1', 'fadsfdsaf', 'gsdfa', 'gadfs', 'fdasfds', 'fdsaf', 'adgf', '是', '11-1', '1-1', '否', '是', 'fadsfds'),
(15, '教授', 'fasw', '男', '1', '1', '1', '1', '1', '1', '1', '是', '1-11', '1-1', '是', '是', '1'),
(16, '教授', 'fasw', '男', '1', '1', '1', '1', '1', '1', '1', '是', '1-11', '1-1', '是', '是', '1'),
(17, '教授', 'fadfd', '男', '1', 'fdasfds', '', '', '', '', '', '是', '-', '-', '是', '是', ''),
(18, '教授', 'afds', '男', '1', 'fsdaf.fads@fds.com', '', '', '', '', '', '是', '-', '-', '是', '是', ''),
(19, '教授', 'fdsaf', '男', '1', 'fa@fds', '', '', '', '', '', '是', '-', '-', '是', '是', ''),
(20, '教授', 'fdsa', '男', '1', 'fdasfds', '', '', '', '', '', '是', '-', '-', '是', '是', ''),
(21, '教授', '1', '男', '1', 'fdfda.fsda@fds.co', '', '', '', '', '', '是', '-', '-', '是', '是', ''),
(22, '教授', 'fdsa', '男', '1', 'fdsa@fdsa', '', '', '', '', '', '是', '-', '-', '是', '是', '');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE IF NOT EXISTS `venue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `confname` varchar(128) COLLATE utf8_bin NOT NULL,
  `time` varchar(16) COLLATE utf8_bin NOT NULL,
  `place` varchar(128) COLLATE utf8_bin NOT NULL,
  `placelink` varchar(512) COLLATE utf8_bin NOT NULL,
  `note` varchar(2048) COLLATE utf8_bin NOT NULL,
  `photo` varchar(256) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='开会地点说明' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `confname`, `time`, `place`, `placelink`, `note`, `photo`) VALUES
(1, 'First Day of the Conference', '2013-1-10', '测试地点', '', 'The morning session (Opening Ceremony) is open to invited guests and registered participants ONLY', '2013/02/27/1361940537186.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
