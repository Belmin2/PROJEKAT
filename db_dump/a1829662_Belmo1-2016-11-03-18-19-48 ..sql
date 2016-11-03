
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2016 at 06:19 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a1829662_Belmo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `select_company` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `short_description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `application_url` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `location` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `form_work` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `salary` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `working_hours` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `experience` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `certificate` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jobs`
--

