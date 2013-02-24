-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 02 月 22 日 11:22
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

USE confweb;

--
-- 数据库: `confweb`
--

-- --------------------------------------------------------

--
-- 表的结构 `accommodation`
--

CREATE TABLE IF NOT EXISTS `accommodation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `link` varchar(256) COLLATE utf8_bin NOT NULL,
  `photo` varchar(256) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `accommodation`
--

INSERT INTO `accommodation` (`id`, `name`, `link`, `photo`) VALUES
(1, '如家酒店', 'http://www.homeinns.com/', 'fadsfds');

-- --------------------------------------------------------

--
-- 表的结构 `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`) VALUES
(1, 'root', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- 表的结构 `committee`
--

CREATE TABLE IF NOT EXISTS `committee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `englishname` varchar(32) COLLATE utf8_bin NOT NULL,
  `chinesename` varchar(32) COLLATE utf8_bin NOT NULL,
  `introduction` varchar(1024) COLLATE utf8_bin NOT NULL,
  `type` varchar(16) COLLATE utf8_bin NOT NULL,
  `rank` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='委员会成员' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `committee`
--

INSERT INTO `committee` (`id`, `englishname`, `chinesename`, `introduction`, `type`, `rank`) VALUES
(7, 'fads', 'fads', 'fasd', 'sci', 1);

-- --------------------------------------------------------

--
-- 表的结构 `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `address` varchar(256) COLLATE utf8_bin NOT NULL,
  `phone1` varchar(64) COLLATE utf8_bin NOT NULL,
  `phone2` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `phone3` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `fax` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='contact内容';

--
-- 转存表中的数据 `contact`
--

INSERT INTO `contact` (`address`, `phone1`, `phone2`, `phone3`, `fax`) VALUES
('Mailbox 1511, Center of Mathematical Sciences, Zhejiang University, Hangzhou 310027, China', ' 0086-571-87953030', '87974070', '15824122464', '0086-571-87953035');

-- --------------------------------------------------------

--
-- 表的结构 `directions`
--

CREATE TABLE IF NOT EXISTS `directions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_bin NOT NULL,
  `content` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_bin NOT NULL,
  `content` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `home`
--

INSERT INTO `home` (`id`, `title`, `content`) VALUES
(1, 'fdsa', '');

-- --------------------------------------------------------

--
-- 表的结构 `invitedspeaker`
--

CREATE TABLE IF NOT EXISTS `invitedspeaker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `englishname` varchar(32) COLLATE utf8_bin NOT NULL,
  `chinesename` varchar(32) COLLATE utf8_bin NOT NULL,
  `school` varchar(128) COLLATE utf8_bin NOT NULL,
  `introduction` varchar(64) COLLATE utf8_bin NOT NULL,
  `rank` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='邀请的speaker' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `invitedspeaker`
--

INSERT INTO `invitedspeaker` (`id`, `englishname`, `chinesename`, `school`, `introduction`, `rank`) VALUES
(2, 'fasdfd', 'fdsa', 'aa', 'fadsfds', 1),
(3, 'fasdfd', 'fdsa', 'gfagdf', 'fadsfds', 1);

-- --------------------------------------------------------

--
-- 表的结构 `registrant`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='注册成员表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `registrant`
--

INSERT INTO `registrant` (`id`, `occupation`, `name`, `gender`, `password`, `email`, `organization`, `address`, `zipcode`, `phone`, `fax`, `report`, `arrivaldate`, `departuredate`, `book`, `single`, `special`) VALUES
(1, '教授', 'fdsa', '男', '123', 'fdsafsd', 'fdsaf', 'fdsa', 'fsd', 'fadsf', 'fdas', '是', '1-2', '1-1', '是', '是', 'fasdfd'),
(2, '教授', '1', '男', '1', '1', '1', '1', '1', '1', '1', '是', '12-1', '1-1', '是', '是', NULL),
(3, '教授', '1', '男', '1', '1', '1', '1', '11', '1', '1', '是', '1-2', '1-1', '是', '是', '');

-- --------------------------------------------------------

--
-- 表的结构 `venue`
--

CREATE TABLE IF NOT EXISTS `venue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `confname` varchar(128) COLLATE utf8_bin NOT NULL,
  `time` varchar(16) COLLATE utf8_bin NOT NULL,
  `place` varchar(128) COLLATE utf8_bin NOT NULL,
  `note` varchar(2048) COLLATE utf8_bin NOT NULL,
  `photo` varchar(256) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='开会地点说明' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `venue`
--

INSERT INTO `venue` (`id`, `confname`, `time`, `place`, `note`, `photo`) VALUES
(1, 'First Day of the Conference', '2013-1-1', 'Zhejiang People''s Great Hall', 'The morning session (Opening Ceremony) is open to invited guests and registered participants ONLY', 'fdskaf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
