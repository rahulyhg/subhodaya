-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2009 at 09:02 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `subhodaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categeory`
--

DROP TABLE IF EXISTS `gallery_categeory`;
CREATE TABLE IF NOT EXISTS `gallery_categeory` (
  `id` int(20) NOT NULL auto_increment,
  `catname` varchar(200) character set utf8 collate utf8_unicode_ci NOT NULL,
  `parentid` int(20) NOT NULL,
  `active` int(10) NOT NULL,
  `update_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;