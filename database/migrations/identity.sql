-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `identity`;
CREATE TABLE `identity` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `marital_status` char(30) NOT NULL,
  `profesional_recomendation` varchar(100) NOT NULL,
  `expected_salary` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal_code` smallint(6) NOT NULL,
  `country` varchar(50) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `cv` varchar(100) DEFAULT NULL,
  `photo` varchar(100) NOT NULL,
  `job_type` varchar(100) DEFAULT NULL,
  `school_name` varchar(100) NOT NULL,
  `school_qualification` varchar(20) NOT NULL,
  `school_start_year` year(4) NOT NULL,
  `school_end_year` year(4) DEFAULT NULL,
  `is_graduated_yet` int(11) DEFAULT NULL,
  `certificate_name` varchar(100) NOT NULL,
  `certificate_year` year(4) NOT NULL,
  `certificate_final_grade` varchar(20) NOT NULL,
  `certificate_document` varchar(100) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `company_position` varchar(100) DEFAULT NULL,
  `company_salary` varchar(20) DEFAULT NULL,
  `company_start_date` date DEFAULT NULL,
  `company_end_date` date DEFAULT NULL,
  `company_stil_work` int(11) DEFAULT NULL,
  `company_responsible` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2017-11-24 10:50:13
