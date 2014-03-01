-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 05 月 12 日 06:38
-- 服务器版本: 5.5.27
-- PHP 版本: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `lib`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Username` varchar(20) NOT NULL DEFAULT '',
  `Password` varchar(50) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Id` varchar(20) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `authority` char(1) DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `Name`, `Id`, `year`, `gender`, `authority`) VALUES
('Wiki_ki', 'caa2a7150106191c8666e39894c8eb3f', 'zwk', '11300240041', 18, 'M', 'S');

-- --------------------------------------------------------

--
-- 表的结构 `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `tradeid` varchar(20) NOT NULL DEFAULT '',
  `Author` varchar(20) DEFAULT NULL,
  `Isbn` varchar(30) DEFAULT NULL,
  `Title` varchar(30) DEFAULT NULL,
  `Publiser` varchar(30) DEFAULT NULL,
  `tradetime` datetime DEFAULT NULL,
  `tprice` decimal(6,2) DEFAULT NULL,
  `tnumber` int(11) DEFAULT NULL,
  `type` char(1) DEFAULT NULL,
  `total_value` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`tradeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `bill`
--


-- --------------------------------------------------------

--
-- 表的结构 `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `Title` varchar(30) DEFAULT NULL,
  `Isbn` varchar(30) NOT NULL DEFAULT '',
  `Publiser` varchar(30) DEFAULT NULL,
  `Author` varchar(20) DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  PRIMARY KEY (`Isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `book`
--

INSERT INTO `book` (`Title`, `Isbn`, `Publiser`, `Author`, `price`, `number`) VALUES
('ÎÄÑ§ÉÙÅ®8£ºÂõÏòÉñ¾³µÄ×÷¼ÒÏÂ', '978-7-02-008547-7', 'ÈËÃñÎÄÑ§³ö°æÉç', 'Ò°´åÃÀÔÂ', 20.00, 0),
('DataBase System Concepts', '978-7-111-37529-6', 'China Machine Press', 'Abraham', 99.00, 3),
('step by step HTML5', '978-7-302-28736-0', 'Çå»ª´óÑ§³ö°æÉç', 'Faithe Wempen', 59.00, 1);

-- --------------------------------------------------------

--
-- 表的结构 `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `tradeid` varchar(20) NOT NULL,
  `Title` varchar(30) DEFAULT NULL,
  `Isbn` varchar(30) NOT NULL DEFAULT '',
  `Publiser` varchar(30) DEFAULT NULL,
  `Author` varchar(20) DEFAULT NULL,
  `bnumber` int(11) DEFAULT NULL,
  `bprice` decimal(6,2) DEFAULT NULL,
  `state` char(1) DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`tradeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `buy`
--

