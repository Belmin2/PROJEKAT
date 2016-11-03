
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2016 at 04:21 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a1829662_Belmo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `Add_Job`
--

CREATE TABLE `Add_Job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Job_title` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Select_company` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Short_description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Application_URL` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Location` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Form_work` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Salary` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Working_hours` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Experience` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Certificate` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Add_Job`
--

