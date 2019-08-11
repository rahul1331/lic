-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 11, 2019 at 11:34 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lic`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
CREATE TABLE IF NOT EXISTS `form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `dob` varchar(23) NOT NULL,
  `age` int(3) NOT NULL,
  `userfile` varchar(300) NOT NULL,
  `place_of_birth` varchar(55) NOT NULL,
  `height` int(3) NOT NULL,
  `weight` int(3) NOT NULL,
  `mark_of_identy` varchar(40) NOT NULL,
  `qulification` varchar(60) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `nature_of_job` varchar(60) NOT NULL,
  `lenth_of_service` int(3) NOT NULL,
  `income` int(20) NOT NULL,
  `name_of_employer` varchar(30) NOT NULL,
  `candidate_image` varchar(300) NOT NULL,
  `present_address` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mob_first` int(12) NOT NULL,
  `mob_secound` int(12) NOT NULL,
  `agency_code` int(12) NOT NULL,
  `plane_and_terms` varchar(23) NOT NULL,
  `sum_assured` varchar(23) NOT NULL,
  `mode` varchar(45) NOT NULL,
  `premium` varchar(45) NOT NULL,
  `noninee_name` varchar(45) NOT NULL,
  `appointee_name` varchar(45) NOT NULL,
  `noninee_age` varchar(45) NOT NULL,
  `appointee_age` varchar(45) NOT NULL,
  `noninee_relation` varchar(45) NOT NULL,
  `appointee_relation` varchar(45) NOT NULL,
  `father` varchar(45) NOT NULL,
  `father_age` varchar(45) NOT NULL,
  `father_health` varchar(45) NOT NULL,
  `father_age_death` varchar(45) NOT NULL,
  `father_cause_death` varchar(45) NOT NULL,
  `mother` varchar(45) NOT NULL,
  `mother_age` varchar(45) NOT NULL,
  `mother_health` varchar(45) NOT NULL,
  `mother_age_death` varchar(45) NOT NULL,
  `mother_cause_death` varchar(45) NOT NULL,
  `brother` varchar(45) NOT NULL,
  `brother_age` varchar(45) NOT NULL,
  `brother_health` varchar(45) NOT NULL,
  `brother_age_death` varchar(45) NOT NULL,
  `brother_cause_death` varchar(45) NOT NULL,
  `husband_and_wife` varchar(45) NOT NULL,
  `husband_and_wife_age` varchar(45) NOT NULL,
  `husband_and_wife_health` varchar(45) NOT NULL,
  `husband_and_wife_age_death` varchar(45) NOT NULL,
  `husband_and_wife_cause_death` varchar(45) NOT NULL,
  `children` varchar(45) NOT NULL,
  `children_age` varchar(45) NOT NULL,
  `children_health` varchar(45) NOT NULL,
  `children_death_age` varchar(45) NOT NULL,
  `children_cause_death` varchar(45) NOT NULL,
  `previous_ins_br_unit_first` varchar(45) NOT NULL,
  `previous_ins_policy_no_first` varchar(45) NOT NULL,
  `previous_ins_sum_assured_first` varchar(45) NOT NULL,
  `previous_ins_prem_first` varchar(45) NOT NULL,
  `previous_ins_t_t_first` varchar(45) NOT NULL,
  `previous_ins_t_t_secound` varchar(45) NOT NULL,
  `previous_ins_mode_first` varchar(45) NOT NULL,
  `previous_ins_d_o_commencement_first` varchar(45) NOT NULL,
  `previous_ins_br_unit_secound` varchar(45) NOT NULL,
  `previous_ins_policy_no_secound` varchar(45) NOT NULL,
  `previous_ins_sum_assured_secound` varchar(45) NOT NULL,
  `previous_ins_prem_secound` varchar(45) NOT NULL,
  `previous_ins_mode_secound` varchar(45) NOT NULL,
  `previous_ins_d_o_commencement_secound` varchar(45) NOT NULL,
  `ladies_husband_name` varchar(45) NOT NULL,
  `ladies_occupation` varchar(45) NOT NULL,
  `ladies_income` varchar(45) NOT NULL,
  `ladies_d_o_b_of_younger_child` varchar(45) NOT NULL,
  `pregnant` varchar(45) NOT NULL,
  `ladies_signature` varchar(45) NOT NULL,
  `ladies_age_proof` varchar(45) NOT NULL,
  `ladies_photograph` varchar(45) NOT NULL,
  `ladies_address_proof` varchar(45) NOT NULL,
  `ladies_pancard` varchar(45) NOT NULL,
  `husband_policy_br_unit_first` varchar(45) NOT NULL,
  `husband_policy_policy_no_first` varchar(45) NOT NULL,
  `husband_policy_sum_assured_first` varchar(45) NOT NULL,
  `husband_policy_premium_first` varchar(45) NOT NULL,
  `husband_policy_d_o_commencement_first` varchar(45) NOT NULL,
  `husband_policy_br_unit_secound` varchar(45) NOT NULL,
  `husband_policy_policy_no_secound` varchar(45) NOT NULL,
  `husband_policy_sum_assured_secound` varchar(45) NOT NULL,
  `husband_policy_premium_secound` varchar(45) NOT NULL,
  `husband_policy_d_o_commencement_secound` varchar(45) NOT NULL,
  `refrance_name_first` varchar(45) NOT NULL,
  `refrance_name_secound` varchar(45) NOT NULL,
  `refrance_age_first` varchar(45) NOT NULL,
  `refrance_age_secound` varchar(45) NOT NULL,
  `refrance_place_first` varchar(45) NOT NULL,
  `refrance_place_secound` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `candidate_name`, `father_name`, `mother_name`, `dob`, `age`, `userfile`, `place_of_birth`, `height`, `weight`, `mark_of_identy`, `qulification`, `occupation`, `nature_of_job`, `lenth_of_service`, `income`, `name_of_employer`, `candidate_image`, `present_address`, `email`, `mob_first`, `mob_secound`, `agency_code`, `plane_and_terms`, `sum_assured`, `mode`, `premium`, `noninee_name`, `appointee_name`, `noninee_age`, `appointee_age`, `noninee_relation`, `appointee_relation`, `father`, `father_age`, `father_health`, `father_age_death`, `father_cause_death`, `mother`, `mother_age`, `mother_health`, `mother_age_death`, `mother_cause_death`, `brother`, `brother_age`, `brother_health`, `brother_age_death`, `brother_cause_death`, `husband_and_wife`, `husband_and_wife_age`, `husband_and_wife_health`, `husband_and_wife_age_death`, `husband_and_wife_cause_death`, `children`, `children_age`, `children_health`, `children_death_age`, `children_cause_death`, `previous_ins_br_unit_first`, `previous_ins_policy_no_first`, `previous_ins_sum_assured_first`, `previous_ins_prem_first`, `previous_ins_t_t_first`, `previous_ins_t_t_secound`, `previous_ins_mode_first`, `previous_ins_d_o_commencement_first`, `previous_ins_br_unit_secound`, `previous_ins_policy_no_secound`, `previous_ins_sum_assured_secound`, `previous_ins_prem_secound`, `previous_ins_mode_secound`, `previous_ins_d_o_commencement_secound`, `ladies_husband_name`, `ladies_occupation`, `ladies_income`, `ladies_d_o_b_of_younger_child`, `pregnant`, `ladies_signature`, `ladies_age_proof`, `ladies_photograph`, `ladies_address_proof`, `ladies_pancard`, `husband_policy_br_unit_first`, `husband_policy_policy_no_first`, `husband_policy_sum_assured_first`, `husband_policy_premium_first`, `husband_policy_d_o_commencement_first`, `husband_policy_br_unit_secound`, `husband_policy_policy_no_secound`, `husband_policy_sum_assured_secound`, `husband_policy_premium_secound`, `husband_policy_d_o_commencement_secound`, `refrance_name_first`, `refrance_name_secound`, `refrance_age_first`, `refrance_age_secound`, `refrance_place_first`, `refrance_place_secound`) VALUES
(46, 'RAHUL', '', '', '', 0, 'http://localhost/lic/ci/upload/r_anil_1.JPG', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', 123, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 'DSFASDFA', '', '', '', 0, 'http://localhost/lic/ci/upload/r_anil_.JPG', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', 90, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 'KALU', '', '', '', 0, 'http://localhost/lic/ci/upload/r2.jpeg', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', 90, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `form_contact_detailes`
--

DROP TABLE IF EXISTS `form_contact_detailes`;
CREATE TABLE IF NOT EXISTS `form_contact_detailes` (
  `present_address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile_first` int(12) NOT NULL,
  `mobile_secound` int(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_contact_detailes`
--

INSERT INTO `form_contact_detailes` (`present_address`, `email`, `mobile_first`, `mobile_secound`) VALUES
('', '', 0, 0),
('rrrr', '1@1', 1111, 111);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `multiple_upload`
--

DROP TABLE IF EXISTS `multiple_upload`;
CREATE TABLE IF NOT EXISTS `multiple_upload` (
  `multiple_upload_ID` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(150) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`multiple_upload_ID`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=164 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiple_upload`
--

INSERT INTO `multiple_upload` (`multiple_upload_ID`, `file_name`, `id`) VALUES
(122, 'e2864f8c06a324551a570f080d200902.png', 0),
(123, '963a3fa60d645688edcb0c50e0b1408c.png', 0),
(124, 'sgsffsdfd', 3),
(125, 'b7a85d5106f9c962f767eb4d54e5e26e.JPG', 0),
(126, 'c513d400eca3efb09222cc5e684d6a18.JPG', 0),
(127, '1174c7d1a160eba6ec30045285619be9.png', 0),
(128, '1afd31b48d613db90b122dfefdac5278.png', 0),
(129, '902e865e9aa2f9bd35fbdfd05a00f053.png', 0),
(130, '68a529af97deb7fe060842b691dc8d4e.png', 0),
(131, 'c2170d2975a1bf75545d1303a1538b93.png', 0),
(132, '9a6c55a60e01fef7ee9cd57aff985dfc.png', 0),
(133, 'e894d9d3146485409e8f368049f55a05.png', 0),
(134, '96e902b8961c9df07ee1ecb5aa58ecc0.png', 0),
(135, '4c52fed74c4452a8fc1d3c5df68c5dc5.png', 0),
(136, 'ed48745cc5ba1c97488655a9e4fbd97d.png', 0),
(137, '0a7c42875bba50f4d033a289f5c4c90d.png', 0),
(138, '1cd8205aad786c215a7e6ab1bad1924c.png', 0),
(139, 'fe349ec67a3231b90a1c9ded306667dd.png', 0),
(140, '31c656b862d099851e19630a90246445.png', 0),
(141, '6f85969f6d64c9250b18388d80f887d8.png', 0),
(142, 'd187183d0c8ddbbf1eb4105ea7e67276.png', 0),
(143, '38341943986596894ae38a663df89323.jpg', 0),
(144, 'e4b1b59e71e4285c297c1dfbabb2fc46.jpg', 0),
(145, 'f7201a648c3e1e0a486cdd14d292f303.jpg', 0),
(146, '0a1726add73adbf05bc9b3ea8ea89929.jpeg', 0),
(147, '18802686398586fce5995beb67c4bd8b.jpeg', 0),
(148, '997d249c3e5a4c38bc10120277281b49.jpg', 0),
(149, '3e8fe62e090fb65c7d05a760cf504ec8.jpg', 0),
(150, '610253bbd43f8b4b6fdaa34e9828897b.JPG', 0),
(151, 'd5f5a8fd039fa3805c1561572bea48cd.png', 0),
(152, '106e10f4683901e0968c1187681f8e7e.png', 0),
(153, 'ac798b95503a614defc66781de31ef33.png', 0),
(154, '10ac035c0095bacf2b45a026e7948e76.png', 0),
(155, 'e6efd97c00875dab8441c8ef99ec6c6f.png', 0),
(156, '7176db4abc5203932050470978be47f6.png', 0),
(157, 'ad6f98fa521f8d6f764697fe35a91921.png', 0),
(158, '91a08b5e110263824b02d63860ad1842.png', 0),
(159, '43db4906a9cf323b565f44e64524c382.png', 0),
(160, 'aec6aa937a663ea5600ad714b7a1526c.png', 0),
(161, 'a97798dc1c1a0af846f10052bcf98bfb.png', 0),
(162, '547ddd21ee172a37aa365365dca67b15.png', 0),
(163, '75ed6333639eda18b27fe2d257e3a46d.png', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
