-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 06 月 05 日 17:01
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mainpage`
--
CREATE DATABASE IF NOT EXISTS `mainpage` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mainpage`;

-- --------------------------------------------------------

--
-- 表的结构 `inform`
--

CREATE TABLE IF NOT EXISTS `inform` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 NOT NULL,
  `content` text NOT NULL,
  `time` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `overview`
--

CREATE TABLE IF NOT EXISTS `overview` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `time` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `overview`
--

INSERT INTO `overview` (`id`, `content`, `title`, `time`) VALUES
(1, '', '', '1429096474');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) CHARACTER SET utf8 NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 NOT NULL,
  `level` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`id`, `uname`, `password`, `level`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 2),
(5, 'test', '098f6bcd4621d373cade4e832627b4f6', 1);

-- --------------------------------------------------------

--
-- 表的结构 `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) CHARACTER SET utf8 NOT NULL,
  `path` varchar(80) CHARACTER SET utf8 NOT NULL,
  `editor` varchar(40) CHARACTER SET utf8 NOT NULL,
  `time` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
