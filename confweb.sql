-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 02 月 18 日 06:00
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `confweb`
--

-- --------------------------------------------------------

--
-- 表的结构 `accommodation`
--

CREATE TABLE IF NOT EXISTS `accommodation` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `link` varchar(256) COLLATE utf8_bin NOT NULL,
  `photo` varchar(256) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `committee`
--

CREATE TABLE IF NOT EXISTS `committee` (
  `id` int(11) NOT NULL,
  `englishname` varchar(32) COLLATE utf8_bin NOT NULL,
  `chinesename` varchar(32) COLLATE utf8_bin NOT NULL,
  `introduction` varchar(1024) COLLATE utf8_bin NOT NULL,
  `type` varchar(16) COLLATE utf8_bin NOT NULL,
  `rank` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='委员会成员';

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

-- --------------------------------------------------------

--
-- 表的结构 `invitedspeaker`
--

CREATE TABLE IF NOT EXISTS `invitedspeaker` (
  `id` int(11) NOT NULL,
  `englishname` varchar(32) COLLATE utf8_bin NOT NULL,
  `chinesename` varchar(32) COLLATE utf8_bin NOT NULL,
  `school` varchar(128) COLLATE utf8_bin NOT NULL,
  `introduction` varchar(64) COLLATE utf8_bin NOT NULL,
  `type` varchar(16) COLLATE utf8_bin NOT NULL,
  `rank` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='邀请的speaker';

-- --------------------------------------------------------

--
-- 表的结构 `registrant`
--

CREATE TABLE IF NOT EXISTS `registrant` (
  `id` int(11) NOT NULL,
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
  `special` varchar(1024) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='注册成员表';

-- --------------------------------------------------------

--
-- 表的结构 `venue`
--

CREATE TABLE IF NOT EXISTS `venue` (
  `id` int(11) NOT NULL,
  `confname` varchar(128) COLLATE utf8_bin NOT NULL,
  `time` varchar(16) COLLATE utf8_bin NOT NULL,
  `place` varchar(128) COLLATE utf8_bin NOT NULL,
  `note` varchar(2048) COLLATE utf8_bin NOT NULL,
  `photo` varchar(256) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='开会地点说明';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
