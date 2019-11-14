-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 نوفمبر 2019 الساعة 21:03
-- إصدار الخادم: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geo`
--

-- --------------------------------------------------------

--
-- بنية الجدول `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('456k0nd50q60ftn0odn0ntql6ia6ddos', '::1', 1573751752, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333735313735323b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('at1453a3787oonllp9q1sd499ec9o9ld', '::1', 1573758050, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333735383035303b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('b2tfisbi6b7bo9lgmfecjkmi5bkb80d3', '::1', 1573740524, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333734303532343b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('c41kq54ctt06jo64d3a9c36ggbhnakf0', '::1', 1573741274, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333734313237343b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('ec2d783akkms2r92gtc7b3krhetosqnl', '::1', 1573737803, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333733373830333b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('f2i02hu16kgtqntard52s4mooqg65d2e', '::1', 1573735902, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333733353930323b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('g3s9e3lo5iqdua3ammtd9v1gh5p9clve', '::1', 1573754768, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333735343736383b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('g63eskcb2muu88b79ocnl711675elnpr', '::1', 1573761588, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333736313538363b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('gio510u52ufpss2fm4o0a9vm9o532f93', '::1', 1573742363, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333734323336333b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('jahkgv4omfdmt1du5hm9hlq9oiikndj4', '::1', 1573748641, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333734383634313b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('jrtpid90n5qsmigkadh15vdcjrnr503r', '::1', 1573758624, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333735383632343b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('k1c2qv822fgan2rbofu1h4m1h15qqdfh', '::1', 1573759531, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333735393533313b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('kvhoi1h9v7qa79fop2d9ba6eqnko8rvj', '::1', 1573761586, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333736313538363b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('l4uubsv93cvvsu8f6l8reli6k0crbb3c', '::1', 1573756289, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333735363238393b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('m35kq927n3du1vce2eqi7au5bptmmt5k', '::1', 1573753579, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333735333537393b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('m6b7uku7k2lhmf5jter4koh2sn818sgs', '::1', 1573738606, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333733383630363b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('mhdui42dfqekcnl38frtd5f84hucc7cg', '::1', 1573751021, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333735313032313b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('mlffscgedo9darf8nr95ct74llj3q8od', '::1', 1573760795, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333736303739353b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('n4phajk4932tuk79cecink7mmabcn2tu', '::1', 1573759146, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333735393134363b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('pkt5urffsjd4q5b64l1jl2a8revsdsmt', '::1', 1573752083, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333735323038333b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('r1gptvg72u7ksisve5q3efevb6922jaf', '::1', 1573760294, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333736303239343b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('s2koie8ds548hktk06oou8r0q71bt9hl', '::1', 1573759897, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333735393839373b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('thvhg48ntflkkmuva2ogekeu0gjhe5oa', '::1', 1573740926, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333734303932363b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('tlket7pvgqq0h6pjavqg23cldhs98glc', '::1', 1573742013, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333734323031333b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('u14vjb0hjt9dpu1fpokpucpf9fmegn9i', '::1', 1573755979, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333735353937393b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('uphu5jileu2j9kv6m9ihsmsm727fmbt1', '::1', 1573742880, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333734323838303b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b),
('upsbdk3a8j36qtvfmajf67qn9da4sgc9', '::1', 1573738254, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333733383235343b69647c733a323a223131223b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a32313a226d686d642e79617373696e407961686f6f2e636f6d223b735f726f6c657c733a333a22725f35223b6c6f67676564696e7c623a313b);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_accounts`
--

CREATE TABLE `geopos_accounts` (
  `id` int(5) NOT NULL,
  `acn` varchar(35) NOT NULL,
  `holder` varchar(100) NOT NULL,
  `adate` datetime NOT NULL,
  `lastbal` decimal(16,2) DEFAULT 0.00,
  `code` varchar(30) DEFAULT NULL,
  `loc` int(4) DEFAULT NULL,
  `account_type` enum('Assets','Expenses','Income','Liabilities','Equity','Basic') NOT NULL DEFAULT 'Basic'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_accounts`
--

INSERT INTO `geopos_accounts` (`id`, `acn`, `holder`, `adate`, `lastbal`, `code`, `loc`, `account_type`) VALUES
(1, '123456', 'Sales Account', '2018-01-01 00:00:00', '2291876390.05', 'Default Sales Account', 0, 'Basic');

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_attendance`
--

CREATE TABLE `geopos_attendance` (
  `id` int(11) NOT NULL,
  `emp` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `adate` date NOT NULL,
  `tfrom` time NOT NULL,
  `tto` time NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `actual_hours` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_bank_ac`
--

CREATE TABLE `geopos_bank_ac` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `acn` varchar(50) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `note` varchar(2000) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `enable` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_config`
--

CREATE TABLE `geopos_config` (
  `id` int(11) NOT NULL,
  `type` int(3) NOT NULL,
  `val1` varchar(50) NOT NULL,
  `val2` varchar(200) NOT NULL,
  `val3` varchar(100) NOT NULL,
  `val4` varchar(100) NOT NULL,
  `rid` int(11) NOT NULL,
  `other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_currencies`
--

CREATE TABLE `geopos_currencies` (
  `id` int(4) NOT NULL,
  `code` varchar(3) CHARACTER SET latin1 DEFAULT NULL,
  `symbol` varchar(3) DEFAULT NULL,
  `rate` decimal(10,2) NOT NULL,
  `thous` char(1) CHARACTER SET latin1 DEFAULT NULL,
  `dpoint` char(1) CHARACTER SET latin1 NOT NULL,
  `decim` int(2) NOT NULL,
  `cpos` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_customers`
--

CREATE TABLE `geopos_customers` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `region` varchar(30) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `postbox` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `picture` varchar(100) NOT NULL DEFAULT 'example.png',
  `gid` int(5) NOT NULL DEFAULT 1,
  `company` varchar(100) DEFAULT NULL,
  `taxid` varchar(100) DEFAULT NULL,
  `name_s` varchar(100) DEFAULT NULL,
  `phone_s` varchar(100) DEFAULT NULL,
  `email_s` varchar(100) DEFAULT NULL,
  `address_s` varchar(100) DEFAULT NULL,
  `city_s` varchar(100) DEFAULT NULL,
  `region_s` varchar(100) DEFAULT NULL,
  `country_s` varchar(100) DEFAULT NULL,
  `postbox_s` varchar(100) DEFAULT NULL,
  `balance` decimal(16,2) DEFAULT 0.00,
  `loc` int(11) DEFAULT 0,
  `docid` varchar(255) DEFAULT NULL,
  `custom1` varchar(255) DEFAULT NULL,
  `discount_c` decimal(16,2) DEFAULT NULL,
  `reg_date` datetime DEFAULT current_timestamp(),
  `wholesale` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_customers`
--

INSERT INTO `geopos_customers` (`id`, `name`, `phone`, `address`, `city`, `region`, `country`, `postbox`, `email`, `picture`, `gid`, `company`, `taxid`, `name_s`, `phone_s`, `email_s`, `address_s`, `city_s`, `region_s`, `country_s`, `postbox_s`, `balance`, `loc`, `docid`, `custom1`, `discount_c`, `reg_date`, `wholesale`) VALUES
(1, 'Walk-in Client', '0987654321', NULL, NULL, NULL, NULL, NULL, 'example@example.com', 'example.png', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', 0, NULL, NULL, NULL, NULL, 0),
(2, 'Mohamed', '010000000000', '', '', '', '', '', 'mohamed@mohamed.com', 'example.png', 1, '', '', '', '', '', '', '', '', '', '', '0.00', 0, '', '', NULL, '2019-08-26 19:51:30', 0),
(3, 'Hossam', '0444444', '', '', '', '', '', 'Hossam@Hossam.com', 'example.png', 1, '', '', '', '', '', '', '', '', '', '', '0.00', 0, '', '', NULL, '2019-08-26 19:52:08', 0),
(4, 'Yassin', '1206314865', '', '', '', '', '', 'admin@geo.com', 'example.png', 1, 'etrtrte', '', '', '', '', '', '', '', '', '', '0.00', 1, '', '', NULL, '2019-08-27 08:40:03', 0),
(5, 'fsa', '12312', 'asdf', 'asdf', 'asdf', 'asd', 'asd', 'abc@1abcled.com', 'example.png', 1, 'adf', '', '', '', '', '', '', '', '', '', '0.00', 1, '', '', NULL, '2019-08-28 05:31:11', 1),
(6, 'ahmed', 'hjghg', '', '', '', '', '', 'hkjhkjhkj', 'example.png', 1, 'gfghfghf', '', '', '', '', '', '', '', '', '', '0.00', 1, '', '', NULL, '2019-08-30 22:44:07', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_custom_data`
--

CREATE TABLE `geopos_custom_data` (
  `id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `module` int(3) NOT NULL,
  `data` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_custom_data`
--

INSERT INTO `geopos_custom_data` (`id`, `field_id`, `rid`, `module`, `data`) VALUES
(229, 10, 15, 4, 'hp'),
(230, 9, 15, 4, '89809089'),
(231, 5, 15, 4, '4sdfsdfdf'),
(232, 3, 15, 4, 'opppppp 2'),
(233, 7, 15, 4, '[\"12109305_915581051867947_8072135768095906306_n5.jpg\",\"49-Conference-translation-300x2256.jpg\",\"57-Interpreters-Arabic-300x1965.jpg\"]'),
(239, 10, 20, 4, 'dell'),
(240, 9, 20, 4, '0890809'),
(241, 5, 20, 4, '45geg'),
(242, 3, 20, 4, 'opppppp 2'),
(243, 7, 20, 4, '[\"featured-individual-volunteer19.jpg\",\"portrait-of-a-smiling-confident-man-wearing-volunteer-t-shirt-pointing-two-fingers-isolated-over-stock-photo_csp5220622419.jpg\",\"man-showing-volunteer-text-tshirt_13339-16489317.jpg\"]'),
(244, 10, 21, 4, 'dell'),
(245, 9, 21, 4, '0890809'),
(246, 5, 21, 4, '45geg'),
(247, 3, 21, 4, 'opppppp 2'),
(248, 7, 21, 4, '[\"featured-individual-volunteer19.jpg\",\"portrait-of-a-smiling-confident-man-wearing-volunteer-t-shirt-pointing-two-fingers-isolated-over-stock-photo_csp5220622419.jpg\",\"man-showing-volunteer-text-tshirt_13339-16489317.jpg\"]'),
(249, 10, 22, 4, 'hp'),
(250, 9, 22, 4, '0890809'),
(251, 5, 22, 4, 'wweeer'),
(252, 3, 22, 4, 'opppppp 1'),
(253, 7, 22, 4, '[\"portrait-of-a-smiling-confident-man-wearing-volunteer-t-shirt-pointing-two-fingers-isolated-over-stock-photo_csp5220622420.jpg\",\"man-showing-volunteer-text-tshirt_13339-16489318.jpg\"]'),
(257, 3, 23, 4, 'opppppp 2'),
(258, 5, 23, 4, 'erwererwer'),
(259, 9, 23, 4, '89809089'),
(260, 10, 23, 4, 'hp'),
(261, 7, 23, 4, '[\"featured-individual-volunteer20.jpg\",\"portrait-of-a-smiling-confident-man-wearing-volunteer-t-shirt-pointing-two-fingers-isolated-over-stock-photo_csp5220622421.jpg\",\"man-showing-volunteer-text-tshirt_13339-16489320.jpg\"]'),
(262, 10, 24, 4, 'dell'),
(263, 9, 24, 4, '0890809'),
(264, 5, 24, 4, 'trfr3454v54v5'),
(265, 3, 24, 4, 'opppppp 1'),
(266, 10, 25, 4, 'hp'),
(267, 9, 25, 4, '0890809'),
(268, 7, 25, 4, '[\"67959155_10213803922162693_6893539663902932992_n2.jpg\",\"12109305_915581051867947_8072135768095906306_n6.jpg\"]'),
(269, 10, 26, 4, 'hp'),
(270, 9, 26, 4, '0890809'),
(271, 7, 26, 4, '[\"67959155_10213803922162693_6893539663902932992_n2.jpg\",\"12109305_915581051867947_8072135768095906306_n6.jpg\"]'),
(272, 10, 27, 4, 'hp'),
(273, 9, 27, 4, '0890809'),
(274, 7, 27, 4, '[\"67959155_10213803922162693_6893539663902932992_n2.jpg\",\"12109305_915581051867947_8072135768095906306_n6.jpg\"]'),
(275, 7, 32, 4, '[\"featured-individual-volunteer21.jpg\",\"portrait-of-a-smiling-confident-man-wearing-volunteer-t-shirt-pointing-two-fingers-isolated-over-stock-photo_csp5220622422.jpg\"]'),
(291, 3, 44, 4, 'opppppp 1'),
(292, 9, 44, 4, '89809089'),
(293, 10, 44, 4, 'hp'),
(294, 7, 57, 4, '[\"featured-individual-volunteer22.jpg\",\"portrait-of-a-smiling-confident-man-wearing-volunteer-t-shirt-pointing-two-fingers-isolated-over-stock-photo_csp5220622423.jpg\",\"man-showing-volunteer-text-tshirt_13339-16489321.jpg\"]'),
(295, 10, 59, 4, 'hp'),
(296, 9, 59, 4, '89809089'),
(297, 5, 59, 4, 'ewf eedwee erfe'),
(298, 3, 59, 4, 'opppppp 2'),
(299, 7, 59, 4, '[\"featured-individual-volunteer23.jpg\",\"portrait-of-a-smiling-confident-man-wearing-volunteer-t-shirt-pointing-two-fingers-isolated-over-stock-photo_csp5220622424.jpg\",\"man-showing-volunteer-text-tshirt_13339-16489322.jpg\"]'),
(300, 10, 62, 4, 'dell'),
(301, 9, 62, 4, '0890809'),
(302, 5, 62, 4, 'f fds dds'),
(303, 3, 62, 4, 'opppppp 1'),
(304, 7, 62, 4, '[\"featured-individual-volunteer24.jpg\",\"portrait-of-a-smiling-confident-man-wearing-volunteer-t-shirt-pointing-two-fingers-isolated-over-stock-photo_csp5220622425.jpg\",\"man-showing-volunteer-text-tshirt_13339-16489323.jpg\"]'),
(305, 10, 63, 4, 'dell'),
(306, 9, 63, 4, '0890809'),
(307, 5, 63, 4, 'f fds dds'),
(308, 3, 63, 4, 'opppppp 1'),
(309, 7, 63, 4, '[\"featured-individual-volunteer24.jpg\",\"portrait-of-a-smiling-confident-man-wearing-volunteer-t-shirt-pointing-two-fingers-isolated-over-stock-photo_csp5220622425.jpg\",\"man-showing-volunteer-text-tshirt_13339-16489323.jpg\"]'),
(310, 10, 64, 4, 'hp'),
(311, 5, 64, 4, 'trfr3454v54v5'),
(312, 7, 64, 4, '[\"featured-individual-volunteer25.jpg\",\"portrait-of-a-smiling-confident-man-wearing-volunteer-t-shirt-pointing-two-fingers-isolated-over-stock-photo_csp5220622426.jpg\",\"man-showing-volunteer-text-tshirt_13339-16489324.jpg\"]'),
(313, 10, 68, 4, 'hp'),
(314, 9, 68, 4, '89809089'),
(315, 5, 68, 4, 'ewf eedwee erfe'),
(316, 3, 68, 4, 'opppppp 2'),
(317, 7, 68, 4, '[\"featured-individual-volunteer23.jpg\",\"portrait-of-a-smiling-confident-man-wearing-volunteer-t-shirt-pointing-two-fingers-isolated-over-stock-photo_csp5220622424.jpg\",\"man-showing-volunteer-text-tshirt_13339-16489322.jpg\"]'),
(318, 3, 72, 4, 'opppppp 1'),
(319, 9, 72, 4, '89809089'),
(320, 10, 72, 4, 'hp'),
(330, 3, 76, 4, 'opppppp 1'),
(331, 9, 76, 4, '89809089'),
(332, 10, 76, 4, 'hp');

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_custom_fields`
--

CREATE TABLE `geopos_custom_fields` (
  `id` int(11) NOT NULL,
  `f_module` int(3) NOT NULL,
  `f_type` varchar(30) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `placeholder` varchar(30) DEFAULT NULL,
  `value_data` text NOT NULL,
  `f_view` int(2) NOT NULL,
  `other` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_custom_fields`
--

INSERT INTO `geopos_custom_fields` (`id`, `f_module`, `f_type`, `name`, `placeholder`, `value_data`, `f_view`, `other`) VALUES
(2, 1, 'text', 'for customer', 'place holder of the new field', 'description of the new field', 0, ''),
(3, 4, 'select', 'customer select for products', '', '[\"opppppp 1\",\"opppppp 2\",\"opppppp 3\"]', 0, ''),
(5, 4, 'text', 'text for product', '', '[\"\"]', 0, ''),
(6, 1, 'select', 'select new field for clint', '', '[\"5555\",\"55555\"]', 0, ''),
(7, 4, 'images', 'Product galery', '', '[\"\"]', 0, ''),
(9, 4, 'select', 'slect uiouoououio', '', '[\"89809089\",\"0890809\"]', 0, ''),
(10, 4, 'select', 'Brand', '', '[\"hp\",\"dell\",\"apple\"]', 0, '');

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_cust_group`
--

CREATE TABLE `geopos_cust_group` (
  `id` int(10) NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `summary` varchar(250) DEFAULT NULL,
  `disc_rate` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_cust_group`
--

INSERT INTO `geopos_cust_group` (`id`, `title`, `summary`, `disc_rate`) VALUES
(1, 'Default Group', 'Default Group', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_documents`
--

CREATE TABLE `geopos_documents` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `filename` varchar(50) DEFAULT NULL,
  `cdate` date NOT NULL,
  `permission` int(1) DEFAULT NULL,
  `cid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_draft`
--

CREATE TABLE `geopos_draft` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `invoicedate` date NOT NULL,
  `invoiceduedate` date NOT NULL,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `shipping` decimal(16,2) DEFAULT 0.00,
  `ship_tax` decimal(16,2) DEFAULT NULL,
  `ship_tax_type` enum('incl','excl','off') DEFAULT 'off',
  `discount` decimal(16,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `total` decimal(16,2) DEFAULT 0.00,
  `pmethod` varchar(14) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `status` enum('paid','due','canceled','partial') NOT NULL DEFAULT 'due',
  `csd` int(5) NOT NULL DEFAULT 0,
  `eid` int(4) NOT NULL,
  `pamnt` decimal(16,2) DEFAULT 0.00,
  `items` decimal(10,2) NOT NULL,
  `taxstatus` enum('yes','no','cgst','igst') NOT NULL DEFAULT 'yes',
  `discstatus` tinyint(1) NOT NULL,
  `format_discount` enum('%','flat','bflat','b_p') NOT NULL DEFAULT '%',
  `refer` varchar(20) DEFAULT NULL,
  `term` int(3) NOT NULL,
  `multi` int(4) DEFAULT NULL,
  `i_class` int(1) NOT NULL DEFAULT 0,
  `loc` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_draft_items`
--

CREATE TABLE `geopos_draft_items` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT 0,
  `product` varchar(255) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `qty` decimal(10,2) NOT NULL DEFAULT 0.00,
  `price` decimal(16,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `discount` decimal(16,2) DEFAULT 0.00,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `totaltax` decimal(16,2) DEFAULT 0.00,
  `totaldiscount` decimal(16,2) DEFAULT 0.00,
  `product_des` text DEFAULT NULL,
  `i_class` int(1) NOT NULL DEFAULT 0,
  `unit` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_employees`
--

CREATE TABLE `geopos_employees` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `postbox` varchar(20) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `phonealt` varchar(15) DEFAULT NULL,
  `picture` varchar(50) NOT NULL DEFAULT 'example.png',
  `sign` varchar(100) DEFAULT 'sign.png',
  `joindate` datetime NOT NULL DEFAULT current_timestamp(),
  `dept` int(11) DEFAULT NULL,
  `degis` int(11) DEFAULT NULL,
  `salary` decimal(16,2) DEFAULT 0.00,
  `clock` int(1) DEFAULT NULL,
  `clockin` int(11) DEFAULT NULL,
  `clockout` int(11) DEFAULT NULL,
  `c_rate` decimal(16,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_employees`
--

INSERT INTO `geopos_employees` (`id`, `username`, `name`, `address`, `city`, `region`, `country`, `postbox`, `phone`, `phonealt`, `picture`, `sign`, `joindate`, `dept`, `degis`, `salary`, `clock`, `clockin`, `clockout`, `c_rate`) VALUES
(11, 'admin', 'BusinessOwner', 'Test Street', 'Test City', 'Test Region', 'Test Country', '123456', '12345678', '0', 'example.png', 'sign.png', '2019-08-22 18:39:23', NULL, NULL, '0.00', NULL, NULL, NULL, NULL),
(12, 'businessowner', 'businessowner', '', '', '', '', '', '', NULL, 'example.png', 'sign.png', '2019-09-25 15:03:12', 0, NULL, '0.00', NULL, NULL, NULL, '0.00'),
(13, 'sales', 'sales', '', '', '', '', '', '', NULL, 'example.png', 'sign.png', '2019-09-25 15:06:51', 0, NULL, '0.00', NULL, NULL, NULL, '0.00');

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_events`
--

CREATE TABLE `geopos_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(7) NOT NULL DEFAULT '#3a87ad',
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `allDay` varchar(50) NOT NULL DEFAULT 'true',
  `rel` int(2) NOT NULL DEFAULT 0,
  `rid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_gateways`
--

CREATE TABLE `geopos_gateways` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `enable` enum('Yes','No') NOT NULL,
  `key1` varchar(255) NOT NULL,
  `key2` varchar(255) DEFAULT NULL,
  `currency` varchar(3) NOT NULL DEFAULT 'USD',
  `dev_mode` enum('true','false') NOT NULL,
  `ord` int(5) NOT NULL,
  `surcharge` decimal(16,2) NOT NULL,
  `extra` varchar(40) NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_gateways`
--

INSERT INTO `geopos_gateways` (`id`, `name`, `enable`, `key1`, `key2`, `currency`, `dev_mode`, `ord`, `surcharge`, `extra`) VALUES
(1, 'Stripe', 'Yes', 'sk_test_secratekey', 'stripe_public_key', 'USD', 'true', 1, '0.00', 'none'),
(2, 'Authorize.Net', 'Yes', 'TRANSACTIONKEY', 'LOGINID', 'AUD', 'true', 2, '0.00', 'none'),
(3, 'Pin Payments', 'Yes', 'TEST', 'none', 'AUD', 'true', 3, '0.00', 'none'),
(4, 'PayPal', 'Yes', 'MyPayPalClientId', 'MyPayPalSecret', 'USD', 'true', 4, '0.00', 'none'),
(5, 'SecurePay', 'Yes', 'ABC0001', 'abc123', 'AUD', 'true', 5, '0.00', 'none'),
(6, '2Checkout', 'Yes', 'Publishable Key', 'Private Key', 'USD', 'true', 6, '0.00', 'seller_id'),
(7, 'PayU Money', 'Yes', 'MERCHANT_KEY', 'MERCHANT_SALT', 'USD', 'true', 7, '0.00', 'none'),
(8, 'RazorPay', 'Yes', 'Key Id', 'Key Secret', 'INR', 'true', 8, '0.00', 'none');

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_goals`
--

CREATE TABLE `geopos_goals` (
  `id` int(1) NOT NULL,
  `income` bigint(20) NOT NULL,
  `expense` bigint(20) NOT NULL,
  `sales` bigint(20) NOT NULL,
  `netincome` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_goals`
--

INSERT INTO `geopos_goals` (`id`, `income`, `expense`, `sales`, `netincome`) VALUES
(1, 999999, 999999, 999999, 999999);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_hrm`
--

CREATE TABLE `geopos_hrm` (
  `id` int(11) NOT NULL,
  `typ` int(2) NOT NULL,
  `rid` int(11) NOT NULL,
  `val1` varchar(255) DEFAULT NULL,
  `val2` varchar(255) DEFAULT NULL,
  `val3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_invoices`
--

CREATE TABLE `geopos_invoices` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `invoicedate` date NOT NULL,
  `invoiceduedate` date NOT NULL,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `shipping` decimal(16,2) DEFAULT 0.00,
  `ship_tax` decimal(16,2) DEFAULT NULL,
  `ship_tax_type` enum('incl','excl','off') DEFAULT 'off',
  `discount` decimal(16,2) DEFAULT 0.00,
  `discount_rate` decimal(10,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `total` decimal(16,2) DEFAULT 0.00,
  `pmethod` varchar(14) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `status` enum('paid','due','canceled','partial') NOT NULL DEFAULT 'due',
  `csd` int(5) NOT NULL DEFAULT 0,
  `eid` int(4) NOT NULL,
  `pamnt` decimal(16,2) DEFAULT 0.00,
  `items` decimal(10,2) NOT NULL,
  `taxstatus` enum('yes','no','incl','cgst','igst') NOT NULL DEFAULT 'yes',
  `discstatus` tinyint(1) NOT NULL,
  `format_discount` enum('%','flat','b_p','bflat') NOT NULL DEFAULT '%',
  `refer` varchar(20) DEFAULT NULL,
  `term` int(3) NOT NULL,
  `multi` int(4) DEFAULT NULL,
  `i_class` int(1) NOT NULL DEFAULT 0,
  `loc` int(4) NOT NULL,
  `r_time` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_invoices`
--

INSERT INTO `geopos_invoices` (`id`, `tid`, `invoicedate`, `invoiceduedate`, `subtotal`, `shipping`, `ship_tax`, `ship_tax_type`, `discount`, `discount_rate`, `tax`, `total`, `pmethod`, `notes`, `status`, `csd`, `eid`, `pamnt`, `items`, `taxstatus`, `discstatus`, `format_discount`, `refer`, `term`, `multi`, `i_class`, `loc`, `r_time`) VALUES
(1, 1001, '2019-08-26', '2019-08-26', '10142.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '10142.00', 'Cash', '', 'paid', 3, 11, '10142.00', '25.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(2, 1002, '2019-08-26', '2019-08-26', '853.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '853.00', 'Cash', '', 'due', 1, 11, '0.00', '3.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(3, 1003, '2019-08-26', '2019-08-26', '853.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '853.00', 'Cash', '', 'due', 3, 11, '0.00', '3.00', 'yes', 1, '%', '', 1, NULL, 1, 1, NULL),
(4, 1004, '2019-08-27', '2019-08-27', '2185.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '2185.00', 'Cash', '', 'due', 3, 11, '0.00', '6.00', 'yes', 1, '%', '', 1, NULL, 1, 1, NULL),
(5, 1005, '2019-08-27', '2019-08-27', '919.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '919.00', 'Cash', '', 'paid', 3, 11, '919.00', '0.00', 'yes', 1, '%', '', 1, NULL, 1, 1, NULL),
(6, 1006, '2019-08-27', '2019-08-27', '444.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '444.00', 'Cash', '', 'paid', 1, 11, '444.00', '1.00', 'yes', 1, '%', '', 1, NULL, 1, 1, NULL),
(7, 1007, '2019-08-28', '2019-08-28', '55244.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '55244.00', 'Cash', '', 'due', 3, 11, '0.00', '3.00', 'yes', 1, '%', '', 1, NULL, 1, 1, NULL),
(9, 1008, '2019-08-31', '2019-08-31', '1157302209.65', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '1157302209.65', 'Cash', '', 'partial', 3, 11, '47302210.65', '4.00', 'yes', 1, '%', '', 1, NULL, 1, 1, NULL),
(10, 1009, '2019-09-02', '2019-09-02', '409.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '409.00', 'Cash', '', 'paid', 3, 11, '409.00', '2.00', 'yes', 1, '%', '', 1, NULL, 1, 1, NULL),
(11, 1010, '2019-09-03', '2019-09-03', '556101009.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '556101009.00', 'Cash', '', 'paid', 2, 11, '556101009.00', '2.00', 'yes', 1, '%', '', 1, NULL, 1, 1, NULL),
(12, 1011, '2019-09-03', '2019-09-03', '444.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '444.00', 'Cash', '', 'paid', 3, 11, '444.00', '1.00', 'yes', 1, '%', '', 1, NULL, 1, 1, NULL),
(14, 1012, '2019-09-16', '2019-09-16', '557897878.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '557897878.00', 'Cash', '', 'partial', 1, 11, '555555555.00', '2.00', 'yes', 1, '%', '', 1, NULL, 1, 1, NULL),
(15, 1013, '2019-09-19', '2019-09-19', '345.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '345.00', 'Cash', '', 'paid', 1, 11, '345.00', '1.00', 'yes', 1, '%', '', 1, NULL, 1, 1, NULL),
(16, 1014, '2019-09-24', '2019-09-24', '3806863.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '3806863.00', 'Cash', '', 'due', 1, 11, '0.00', '8.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(17, 1015, '2019-10-01', '2019-10-01', '5341.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '5341.00', 'Cash', '', 'partial', 3, 11, '999.00', '3.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(18, 1016, '2019-10-01', '2019-10-01', '791.44', '0.00', '0.00', 'incl', '0.45', '0.00', '4.88', '791.44', 'Cash', '', 'partial', 3, 11, '99.00', '2.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(19, 1017, '2019-10-01', '2019-10-01', '5341.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '5341.00', 'Cash', '', 'due', 4, 11, '0.00', '4.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(20, 1018, '2019-10-01', '2019-10-01', '343.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '343.00', 'Cash', '', 'due', 2, 11, '0.00', '1.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(22, 1019, '2019-10-04', '2019-10-04', '787.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '787.00', 'Cash', '', 'due', 1, 11, '0.00', '2.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(24, 1020, '2019-10-04', '2019-10-04', '1116868.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '1116868.00', 'Cash', '', 'due', 1, 11, '0.00', '3.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(25, 1020, '2019-10-04', '2019-10-04', '45714866.65', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '45714866.65', 'Cash', '', 'due', 3, 11, '0.00', '9.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(28, 1021, '2019-10-04', '2019-10-04', '59354.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '59354.00', 'Cash', '', 'due', 1, 11, '0.00', '3.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(34, 1022, '2019-10-04', '2019-10-04', '545454.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '545454.00', 'Cash', '', 'due', 1, 11, '0.00', '1.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(36, 1023, '2019-10-04', '2019-10-04', '0.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '0.00', 'Cash', '', 'paid', 1, 11, '0.00', '1.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(37, 1024, '2019-10-04', '2019-10-04', '4554.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '4554.00', 'Cash', '', 'due', 1, 11, '0.00', '2.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(38, 1025, '2019-10-04', '2019-10-04', '4554.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '4554.00', 'Cash', '', 'due', 1, 11, '0.00', '2.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(39, 1026, '2019-10-04', '2019-10-04', '557898333.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '557898333.00', 'Cash', '', 'partial', 1, 11, '2342778.00', '3.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(41, 1027, '2019-10-05', '2019-10-05', '414408.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '414408.00', 'Cash', '', 'paid', 1, 11, '414408.00', '12.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(42, 1028, '2019-10-05', '2019-10-05', '555659157.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '555659157.00', 'Cash', '', 'paid', 1, 11, '555659157.00', '4.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(43, 1029, '2019-10-08', '2019-10-08', '611992179.65', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '611992179.65', 'Cash', '', 'partial', 1, 11, '563969677.00', '6.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(44, 1030, '2019-10-09', '2019-10-09', '556101454.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '556101454.00', 'Cash', '', 'partial', 1, 11, '545799.00', '4.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(47, 1031, '2019-10-09', '2019-10-09', '801.44', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '801.44', 'Cash', '', 'due', 1, 11, '0.00', '2.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(50, 1032, '2019-10-09', '2019-10-09', '801.44', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '801.44', 'Cash', '', 'due', 1, 11, '0.00', '2.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(51, 1033, '2019-10-09', '2019-10-09', '345.44', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '345.44', 'Cash', '', 'due', 1, 11, '0.00', '1.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(52, 1034, '2019-10-09', '2019-10-09', '4254.44', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '4254.44', 'Cash', '', 'paid', 1, 11, '4254.44', '3.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(53, 1035, '2019-10-09', '2019-10-09', '4599.88', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '4599.88', 'Cash', '', 'paid', 1, 11, '4599.88', '4.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(54, 1036, '2019-10-10', '2019-10-10', '2342668.44', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '2342668.44', 'Cash', '', 'paid', 1, 11, '2342668.44', '2.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(55, 1037, '2019-10-10', '2019-10-10', '4689245.88', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '4689245.88', 'Cash', '', 'partial', 1, 11, '4688099.00', '6.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(56, 1038, '2019-10-10', '2019-10-10', '2342668.44', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '2342668.44', 'Cash', '', 'paid', 1, 11, '2342668.44', '2.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(57, 1039, '2019-10-10', '2019-10-10', '3909.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '3909.00', 'Cash', '', 'due', 1, 11, '0.00', '2.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(59, 1040, '2019-10-10', '2019-10-10', '4599.44', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '4599.44', 'Cash', '', 'partial', 1, 11, '801.00', '4.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(60, 1041, '2019-10-10', '2019-10-10', '4599.44', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '4599.44', 'Cash', '', 'partial', 1, 11, '3798.44', '4.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(61, 1042, '2019-10-10', '2019-10-10', '4599.44', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '4599.44', 'Cash', '', 'partial', 1, 11, '801.00', '4.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(63, 1043, '2019-10-10', '2019-10-10', '4254.44', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '4254.44', 'Cash', '', 'partial', 1, 11, '3798.44', '3.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(64, 1044, '2019-10-10', '2019-10-10', '4254.44', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '4254.44', 'Cash', '', 'partial', 1, 11, '3798.44', '3.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(65, 1045, '2019-10-10', '2019-10-10', '4254.44', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '4254.44', 'Cash', '', 'partial', 1, 11, '3798.44', '3.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(66, 1046, '2019-10-10', '2019-10-10', '4254.44', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '4254.44', 'Cash', '', 'partial', 1, 11, '3798.44', '3.00', 'yes', 1, '%', '', 1, NULL, 1, 0, NULL),
(67, 1047, '2019-10-16', '2019-10-16', '566100.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '566100.00', 'Cash', '', 'partial', 2, 11, '565656.00', '2.00', 'yes', 1, '%', '', 1, NULL, 1, 1, NULL),
(68, 1048, '2019-10-24', '2019-10-24', '1840.16', '0.00', '0.00', 'incl', '17782716.79', '0.00', '7597614.78', '1840.16', 'Cash', '', 'partial', 1, 11, '0.00', '2.00', 'yes', 1, '%', '', 1, NULL, 1, 1, NULL),
(69, 1049, '2019-10-27', '2019-10-27', '444.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '444.00', 'Cash', '', 'paid', 1, 11, '444.00', '3.00', 'yes', 1, '%', '', 1, NULL, 1, 3, NULL),
(70, 1050, '2019-10-27', '2019-10-27', '444.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '444.00', 'Cash', '', 'paid', 1, 11, '444.00', '5.00', 'yes', 1, '%', '', 1, NULL, 1, 3, NULL),
(71, 1051, '2019-11-04', '2019-11-04', '2789.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', '2789.00', 'Cash', '', 'partial', 1, 11, '2567.00', '4.00', 'yes', 1, '%', '', 1, NULL, 1, 1, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_invoice_items`
--

CREATE TABLE `geopos_invoice_items` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT 0,
  `product` varchar(255) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `qty` decimal(10,2) NOT NULL DEFAULT 0.00,
  `price` decimal(16,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `discount` decimal(16,2) DEFAULT 0.00,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `totaltax` decimal(16,2) DEFAULT 0.00,
  `totaldiscount` decimal(16,2) DEFAULT 0.00,
  `product_des` text DEFAULT NULL,
  `i_class` int(1) NOT NULL DEFAULT 0,
  `unit` varchar(5) DEFAULT NULL,
  `pay` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_invoice_items`
--

INSERT INTO `geopos_invoice_items` (`id`, `tid`, `pid`, `product`, `code`, `qty`, `price`, `tax`, `discount`, `subtotal`, `totaltax`, `totaldiscount`, `product_des`, `i_class`, `unit`, `pay`) VALUES
(1, 1, 3, 'Pompa-', '', '21.00', '444.00', '0.00', '0.00', '9324.00', '0.00', '0.00', NULL, 1, '', 1),
(2, 1, 1, 'product 1-', '', '2.00', '66.00', '0.00', '0.00', '132.00', '0.00', '0.00', NULL, 1, '', 1),
(3, 1, 2, 'shop-', '', '2.00', '343.00', '0.00', '0.00', '686.00', '0.00', '0.00', NULL, 1, '', 1),
(4, 2, 3, 'Pompa-', '', '1.00', '444.00', '0.00', '0.00', '444.00', '0.00', '0.00', NULL, 1, '', 1),
(5, 2, 1, 'product 1-', '', '1.00', '66.00', '0.00', '0.00', '66.00', '0.00', '0.00', NULL, 1, '', 1),
(6, 2, 2, 'shop-', '', '1.00', '343.00', '0.00', '0.00', '343.00', '0.00', '0.00', NULL, 1, '', 1),
(7, 3, 1, 'product 1-', '', '1.00', '66.00', '0.00', '0.00', '66.00', '0.00', '0.00', NULL, 1, '', 1),
(8, 3, 2, 'shop-', '', '1.00', '343.00', '0.00', '0.00', '343.00', '0.00', '0.00', NULL, 1, '', 1),
(9, 3, 3, 'Pompa-', '', '1.00', '444.00', '0.00', '0.00', '444.00', '0.00', '0.00', NULL, 1, '', 1),
(10, 4, 3, 'Pompa-', '', '4.00', '444.00', '0.00', '0.00', '1776.00', '0.00', '0.00', NULL, 1, '', 1),
(11, 4, 1, 'product 1-', '', '1.00', '66.00', '0.00', '0.00', '66.00', '0.00', '0.00', NULL, 1, '', 1),
(12, 4, 2, 'shop-', '', '1.00', '343.00', '0.00', '0.00', '343.00', '0.00', '0.00', NULL, 1, '', 1),
(16, 5, 1, 'product 1-', '', '2.00', '66.00', '0.00', '0.00', '132.00', '0.00', '0.00', NULL, 1, '', 1),
(17, 5, 3, 'Pompa-', '', '1.00', '444.00', '0.00', '0.00', '444.00', '0.00', '0.00', NULL, 1, '', 1),
(18, 5, 2, 'shop-', '', '1.00', '343.00', '0.00', '0.00', '343.00', '0.00', '0.00', NULL, 1, '', 1),
(19, 6, 3, 'Pompa-', '', '1.00', '444.00', '0.00', '0.00', '444.00', '0.00', '0.00', NULL, 1, '', 1),
(20, 7, 13, 'fjdfklfd-456', '456', '1.00', '455.00', '0.00', '0.00', '455.00', '0.00', '0.00', NULL, 1, '', 1),
(21, 7, 14, 'new one-', '', '1.00', '54345.00', '0.00', '0.00', '54345.00', '0.00', '0.00', NULL, 1, '', 1),
(22, 7, 3, 'Pompa-', '', '1.00', '444.00', '0.00', '0.00', '444.00', '0.00', '0.00', NULL, 1, '', 1),
(23, 9, 22, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-', '', '2.00', '555555555.00', '0.00', '0.00', '1111111110.00', '0.00', '0.00', NULL, 1, '', 1),
(24, 9, 21, 'ertrtert-345435', '345435', '1.00', '545454.00', '0.00', '0.00', '545454.00', '0.00', '0.00', NULL, 1, '', 1),
(25, 9, 16, 'favourite bundle-', '', '1.00', '45645645.65', '0.00', '0.00', '45645645.65', '0.00', '0.00', NULL, 1, '', 1),
(26, 10, 1, 'product 1-', '', '1.00', '66.00', '0.00', '0.00', '66.00', '0.00', '0.00', NULL, 1, '', 1),
(27, 10, 2, 'shop-', '', '1.00', '343.00', '0.00', '0.00', '343.00', '0.00', '0.00', NULL, 1, '', 1),
(28, 11, 22, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-', '', '1.00', '555555555.00', '0.00', '0.00', '555555555.00', '0.00', '0.00', NULL, 1, '', 1),
(29, 11, 21, 'ertrtert-345435', '345435', '1.00', '545454.00', '0.00', '0.00', '545454.00', '0.00', '0.00', NULL, 1, '', 1),
(30, 12, 3, 'Pompa-', '', '1.00', '444.00', '0.00', '0.00', '444.00', '0.00', '0.00', NULL, 1, '', 1),
(31, 14, 24, '4 9 2019-tererte', 'tererte', '1.00', '2342323.00', '0.00', '0.00', '2342323.00', '0.00', '0.00', NULL, 1, '', 1),
(32, 14, 22, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-', '', '1.00', '555555555.00', '0.00', '0.00', '555555555.00', '0.00', '0.00', NULL, 1, '', 0),
(33, 15, 33, 'product with cayegory-', '', '1.00', '345.00', '0.00', '0.00', '345.00', '0.00', '0.00', NULL, 1, '', 1),
(34, 16, 1, 'product 1-', '', '1.00', '66.00', '0.00', '0.00', '66.00', '0.00', '0.00', NULL, 1, '', 1),
(35, 16, 2, 'shop-', '', '1.00', '343.00', '0.00', '0.00', '343.00', '0.00', '0.00', NULL, 1, '', 1),
(36, 16, 3, 'Pompa-', '', '1.00', '444.00', '0.00', '0.00', '444.00', '0.00', '0.00', NULL, 1, '', 1),
(37, 16, 4, 'new product hee-', '', '1.00', '4554.00', '0.00', '0.00', '4554.00', '0.00', '0.00', NULL, 1, '', 1),
(38, 16, 33, 'product with cayegory-', '', '1.00', '345.00', '0.00', '0.00', '345.00', '0.00', '0.00', NULL, 1, '', 1),
(39, 16, 32, 'with prices-', '', '1.00', '3453434.00', '0.00', '0.00', '3453434.00', '0.00', '0.00', NULL, 1, '', 1),
(40, 16, 31, 'product with galary-', '', '1.00', '345345.00', '0.00', '0.00', '345345.00', '0.00', '0.00', NULL, 1, '', 1),
(41, 16, 28, 'related to other product-', '', '1.00', '2332.00', '0.00', '0.00', '2332.00', '0.00', '0.00', NULL, 1, '', 1),
(42, 17, 2, 'shop-', '', '1.00', '343.00', '0.00', '0.00', '343.00', '0.00', '0.00', NULL, 1, '', 1),
(43, 17, 3, 'Pompa-', '', '1.00', '444.00', '0.00', '0.00', '444.00', '0.00', '0.00', NULL, 1, '', 1),
(44, 17, 4, 'new product hee-', '', '1.00', '4554.00', '0.00', '0.00', '4554.00', '0.00', '0.00', NULL, 1, '', 1),
(45, 18, 2, 'shop-', '', '1.00', '343.00', '0.00', '0.00', '343.00', '0.00', '0.00', NULL, 1, '', 1),
(46, 18, 3, 'Pompa-', '', '1.00', '444.00', '1.10', '0.10', '448.44', '4.88', '0.45', NULL, 1, '', 1),
(47, 19, 1, 'product 1-', '', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, 1, '', 1),
(48, 19, 2, 'shop-', '', '1.00', '343.00', '0.00', '0.00', '343.00', '0.00', '0.00', NULL, 1, '', 1),
(49, 19, 3, 'Pompa-', '', '1.00', '444.00', '0.00', '0.00', '444.00', '0.00', '0.00', NULL, 1, '', 1),
(50, 19, 4, 'new product hee-', '', '1.00', '4554.00', '0.00', '0.00', '4554.00', '0.00', '0.00', NULL, 1, '', 1),
(51, 20, 2, 'shop-', '', '1.00', '343.00', '0.00', '0.00', '343.00', '0.00', '0.00', NULL, 1, '', 1),
(52, 22, 2, 'shop-', '', '1.00', '343.00', '0.00', '0.00', '343.00', '0.00', '0.00', NULL, 1, '', 1),
(53, 22, 3, 'Pompa-', '', '1.00', '444.00', '0.00', '0.00', '444.00', '0.00', '0.00', NULL, 1, '', 1),
(57, 24, 18, 'tyututyu-', '', '1.00', '1111111.00', '0.00', '0.00', '1111111.00', '0.00', '0.00', NULL, 1, '', 0),
(58, 24, 17, 'tertettretet-', '', '1.00', '5646.00', '0.00', '0.00', '5646.00', '0.00', '0.00', NULL, 1, '', 1),
(59, 24, 19, 'favourite bundle with galary-', '', '1.00', '111.00', '0.00', '0.00', '111.00', '0.00', '0.00', NULL, 1, '', 1),
(60, 25, 1, 'product 1-', '', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, 1, '', 1),
(61, 25, 2, 'shop-', '', '1.00', '343.00', '0.00', '0.00', '343.00', '0.00', '0.00', NULL, 1, '', 0),
(62, 25, 3, 'Pompa-', '', '1.00', '444.00', '0.00', '0.00', '444.00', '0.00', '0.00', NULL, 1, '', 1),
(63, 25, 4, 'new product hee-', '', '1.00', '4554.00', '0.00', '0.00', '4554.00', '0.00', '0.00', NULL, 1, '', 0),
(64, 25, 13, 'fjdfklfd-456', '456', '1.00', '455.00', '0.00', '0.00', '455.00', '0.00', '0.00', NULL, 1, '', 1),
(65, 25, 14, 'new one-', '', '1.00', '54345.00', '0.00', '0.00', '54345.00', '0.00', '0.00', NULL, 1, '', 0),
(66, 25, 15, 'trereter-', '', '1.00', '3434.00', '0.00', '0.00', '3434.00', '0.00', '0.00', NULL, 1, '', 1),
(67, 25, 16, 'favourite bundle-', '', '1.00', '45645645.65', '0.00', '0.00', '45645645.65', '0.00', '0.00', NULL, 1, '', 0),
(68, 25, 17, 'tertettretet-', '', '1.00', '5646.00', '0.00', '0.00', '5646.00', '0.00', '0.00', NULL, 1, '', 1),
(78, 28, 4, 'new product hee-', '', '1.00', '4554.00', '0.00', '0.00', '4554.00', '0.00', '0.00', NULL, 1, '', 0),
(79, 28, 13, 'fjdfklfd-456', '456', '1.00', '455.00', '0.00', '0.00', '455.00', '0.00', '0.00', NULL, 1, '', 1),
(80, 28, 14, 'new one-', '', '1.00', '54345.00', '0.00', '0.00', '54345.00', '0.00', '0.00', NULL, 1, '', 0),
(92, 34, 21, 'ertrtert-345435', '345435', '1.00', '545454.00', '0.00', '0.00', '545454.00', '0.00', '0.00', NULL, 1, '', 1),
(96, 36, 1, 'product 1-', '', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, 1, '', 1),
(97, 37, 1, 'product 1-', '', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, 1, '', 1),
(98, 37, 4, 'new product hee-', '', '1.00', '4554.00', '0.00', '0.00', '4554.00', '0.00', '0.00', NULL, 1, '', 1),
(99, 38, 1, 'product 1-', '', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, 1, '', 0),
(100, 38, 4, 'new product hee-', '', '1.00', '4554.00', '0.00', '0.00', '4554.00', '0.00', '0.00', NULL, 1, '', 1),
(101, 39, 24, '4 9 2019-tererte', 'tererte', '1.00', '2342323.00', '0.00', '0.00', '2342323.00', '0.00', '0.00', NULL, 1, '', 0),
(102, 39, 22, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-', '', '1.00', '555555555.00', '0.00', '0.00', '555555555.00', '0.00', '0.00', NULL, 1, '', 0),
(103, 39, 13, 'fjdfklfd-456', '456', '1.00', '455.00', '0.00', '0.00', '455.00', '0.00', '0.00', NULL, 1, '', 0),
(110, 41, 27, 'bundle x-', '', '12.00', '34534.00', '0.00', '0.00', '414408.00', '0.00', '0.00', NULL, 1, '', 0),
(111, 42, 27, 'bundle x-', '', '3.00', '34534.00', '0.00', '0.00', '103602.00', '0.00', '0.00', NULL, 1, '', 0),
(112, 42, 22, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-', '', '1.00', '555555555.00', '0.00', '0.00', '555555555.00', '0.00', '0.00', NULL, 1, '', 0),
(113, 43, 24, '4 9 2019-tererte', 'tererte', '1.00', '2342323.00', '0.00', '0.00', '2342323.00', '0.00', '0.00', NULL, 1, '', 0),
(114, 43, 22, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-', '', '1.00', '555555555.00', '0.00', '0.00', '555555555.00', '0.00', '0.00', NULL, 1, '', 0),
(115, 43, 27, 'bundle x-', '', '1.00', '34534.00', '0.00', '0.00', '34534.00', '0.00', '0.00', NULL, 1, '', 0),
(116, 43, 21, 'ertrtert-345435', '345435', '1.00', '545454.00', '0.00', '0.00', '545454.00', '0.00', '0.00', NULL, 1, '', 0),
(117, 43, 16, 'favourite bundle-', '', '1.00', '45645645.65', '0.00', '0.00', '45645645.65', '0.00', '0.00', NULL, 1, '', 0),
(118, 43, 35, 'gytggyukg-', '', '1.00', '7868668.00', '0.00', '0.00', '7868668.00', '0.00', '0.00', NULL, 1, '', 0),
(119, 44, 47, 'a5-', '', '1.00', '345.00', '0.00', '0.00', '345.00', '0.00', '0.00', NULL, 1, '', 0),
(120, 44, 22, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-', '', '1.00', '555555555.00', '0.00', '0.00', '555555555.00', '0.00', '0.00', NULL, 1, '', 0),
(121, 44, 21, 'ertrtert-345435', '345435', '1.00', '545454.00', '0.00', '0.00', '545454.00', '0.00', '0.00', NULL, 1, '', 0),
(122, 44, 36, 'Hossam jyuiui-', '', '1.00', '100.00', '0.00', '0.00', '100.00', '0.00', '0.00', NULL, 1, '', 0),
(129, 47, 44, 'a2-', '', '1.00', '345.44', '0.00', '0.00', '345.44', '0.00', '0.00', NULL, 1, '', 0),
(130, 47, 45, 'a3-', '', '1.00', '456.00', '0.00', '0.00', '456.00', '0.00', '0.00', NULL, 1, '', 1),
(136, 50, 44, 'a2-', '', '1.00', '345.44', '0.00', '0.00', '345.44', '0.00', '0.00', NULL, 1, '', 1),
(137, 50, 45, 'a3-', '', '1.00', '456.00', '0.00', '0.00', '456.00', '0.00', '0.00', NULL, 1, '', 1),
(138, 51, 44, 'a2-', '', '1.00', '345.44', '0.00', '0.00', '345.44', '0.00', '0.00', NULL, 1, '', 1),
(139, 52, 44, 'a2-', '', '1.00', '345.44', '0.00', '0.00', '345.44', '0.00', '0.00', NULL, 1, '', 0),
(140, 52, 45, 'a3-', '', '1.00', '456.00', '0.00', '0.00', '456.00', '0.00', '0.00', NULL, 1, '', 0),
(141, 52, 46, 'a4-', '', '1.00', '3453.00', '0.00', '0.00', '3453.00', '0.00', '0.00', NULL, 1, '', 0),
(142, 53, 44, 'a2-', '', '2.00', '345.44', '0.00', '0.00', '690.88', '0.00', '0.00', NULL, 1, '', 0),
(143, 53, 45, 'a3-', '', '1.00', '456.00', '0.00', '0.00', '456.00', '0.00', '0.00', NULL, 1, '', 0),
(144, 53, 46, 'a4-', '', '1.00', '3453.00', '0.00', '0.00', '3453.00', '0.00', '0.00', NULL, 1, '', 0),
(145, 54, 24, '4 9 2019-tererte', 'tererte', '1.00', '2342323.00', '0.00', '0.00', '2342323.00', '0.00', '0.00', NULL, 1, '', 0),
(146, 54, 44, 'a2-', '', '1.00', '345.44', '0.00', '0.00', '345.44', '0.00', '0.00', NULL, 1, '', 0),
(147, 55, 24, '4 9 2019-tererte', 'tererte', '2.00', '2342323.00', '0.00', '0.00', '4684646.00', '0.00', '0.00', NULL, 1, '', 0),
(148, 55, 44, 'a2-', '', '2.00', '345.44', '0.00', '0.00', '690.88', '0.00', '0.00', NULL, 1, '', 0),
(149, 55, 46, 'a4-', '', '1.00', '3453.00', '0.00', '0.00', '3453.00', '0.00', '0.00', NULL, 1, '', 0),
(150, 55, 45, 'a3-', '', '1.00', '456.00', '0.00', '0.00', '456.00', '0.00', '0.00', NULL, 1, '', 1),
(151, 56, 24, '4 9 2019-tererte', 'tererte', '1.00', '2342323.00', '0.00', '0.00', '2342323.00', '0.00', '0.00', NULL, 1, '', 0),
(152, 56, 44, 'a2-', '', '1.00', '345.44', '0.00', '0.00', '345.44', '0.00', '0.00', NULL, 1, '', 0),
(153, 57, 45, 'a3-', '', '1.00', '456.00', '0.00', '0.00', '456.00', '0.00', '0.00', NULL, 1, '', 1),
(154, 57, 46, 'a4-', '', '1.00', '3453.00', '0.00', '0.00', '3453.00', '0.00', '0.00', NULL, 1, '', 1),
(158, 59, 44, 'a2-', '', '1.00', '345.44', '0.00', '0.00', '345.44', '0.00', '0.00', NULL, 1, '', 0),
(159, 59, 45, 'a3-', '', '1.00', '456.00', '0.00', '0.00', '456.00', '0.00', '0.00', NULL, 1, '', 0),
(160, 59, 46, 'a4-', '', '1.00', '3453.00', '0.00', '0.00', '3453.00', '0.00', '0.00', NULL, 1, '', 0),
(161, 59, 47, 'a5-', '', '1.00', '345.00', '0.00', '0.00', '345.00', '0.00', '0.00', NULL, 1, '', 1),
(162, 60, 44, 'a2-', '', '1.00', '345.44', '0.00', '0.00', '345.44', '0.00', '0.00', NULL, 1, '', 1),
(163, 60, 45, 'a3-', '', '1.00', '456.00', '0.00', '0.00', '456.00', '0.00', '0.00', NULL, 1, '', 0),
(164, 60, 46, 'a4-', '', '1.00', '3453.00', '0.00', '0.00', '3453.00', '0.00', '0.00', NULL, 1, '', 1),
(165, 60, 47, 'a5-', '', '1.00', '345.00', '0.00', '0.00', '345.00', '0.00', '0.00', NULL, 1, '', 0),
(166, 61, 44, 'a2-', '', '1.00', '345.44', '0.00', '0.00', '345.44', '0.00', '0.00', NULL, 1, '', 0),
(167, 61, 45, 'a3-', '', '1.00', '456.00', '0.00', '0.00', '456.00', '0.00', '0.00', NULL, 1, '', 1),
(168, 61, 46, 'a4-', '', '1.00', '3453.00', '0.00', '0.00', '3453.00', '0.00', '0.00', NULL, 1, '', 0),
(169, 61, 47, 'a5-', '', '1.00', '345.00', '0.00', '0.00', '345.00', '0.00', '0.00', NULL, 1, '', 1),
(173, 63, 44, 'a2-', '', '1.00', '345.44', '0.00', '0.00', '345.44', '0.00', '0.00', NULL, 1, '', 0),
(174, 63, 45, 'a3-', '', '1.00', '456.00', '0.00', '0.00', '456.00', '0.00', '0.00', NULL, 1, '', 0),
(175, 63, 46, 'a4-', '', '1.00', '3453.00', '0.00', '0.00', '3453.00', '0.00', '0.00', NULL, 1, '', 0),
(176, 64, 44, 'a2-', '', '1.00', '345.44', '0.00', '0.00', '345.44', '0.00', '0.00', NULL, 1, '', 1),
(177, 64, 45, 'a3-', '', '1.00', '456.00', '0.00', '0.00', '456.00', '0.00', '0.00', NULL, 1, '', 0),
(178, 64, 46, 'a4-', '', '1.00', '3453.00', '0.00', '0.00', '3453.00', '0.00', '0.00', NULL, 1, '', 1),
(179, 65, 44, 'a2-', '', '1.00', '345.44', '0.00', '0.00', '345.44', '0.00', '0.00', NULL, 1, '', 1),
(180, 65, 45, 'a3-', '', '1.00', '456.00', '0.00', '0.00', '456.00', '0.00', '0.00', NULL, 1, '', 0),
(181, 65, 46, 'a4-', '', '1.00', '3453.00', '0.00', '0.00', '3453.00', '0.00', '0.00', NULL, 1, '', 1),
(182, 66, 44, 'a2-', '', '1.00', '345.44', '0.00', '0.00', '345.44', '0.00', '0.00', NULL, 1, '', 1),
(183, 66, 45, 'a3-', '', '1.00', '456.00', '0.00', '0.00', '456.00', '0.00', '0.00', NULL, 1, '', 0),
(184, 66, 46, 'a4-', '', '1.00', '3453.00', '0.00', '0.00', '3453.00', '0.00', '0.00', NULL, 1, '', 1),
(185, 67, 4, 'p1-p1', 'p1', '1.00', '565656.00', '0.00', '0.00', '565656.00', '0.00', '0.00', NULL, 1, '', 1),
(186, 67, 8, 'p4-p4', 'p4', '1.00', '444.00', '0.00', '0.00', '444.00', '0.00', '0.00', NULL, 1, '', 0),
(187, 68, 16, 'p7-p7', 'p7', '1.00', '3243.00', '234234.00', '234.00', '-10183265.17', '7596208.62', '17782716.79', NULL, 1, '', 1),
(188, 68, 5, 'p2-p2', 'p2', '1.00', '434.00', '324.00', '0.00', '1840.16', '1406.16', '0.00', NULL, 1, '', 1),
(189, 69, 59, 'p3-p3', 'p3', '2.00', '222.00', '0.00', '0.00', '444.00', '0.00', '0.00', NULL, 1, '', 1),
(190, 69, 56, 'p2-p2', 'p2', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, 1, '', 1),
(191, 70, 56, 'p2-p2', 'p2', '3.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, 1, '', 1),
(192, 70, 59, 'p3-p3', 'p3', '2.00', '222.00', '0.00', '0.00', '444.00', '0.00', '0.00', NULL, 1, '', 1),
(193, 71, 56, 'p2-p2', 'p2', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, 1, '', 0),
(194, 71, 59, 'p3-p3', 'p3', '1.00', '222.00', '0.00', '0.00', '222.00', '0.00', '0.00', NULL, 1, '', 1),
(195, 71, 68, 'p3-p3', 'p3', '1.00', '222.00', '0.00', '0.00', '222.00', '0.00', '0.00', NULL, 1, '', 0),
(196, 71, 65, 'p44-p44', 'p44', '1.00', '2345.00', '0.00', '0.00', '2345.00', '0.00', '0.00', NULL, 1, '', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_locations`
--

CREATE TABLE `geopos_locations` (
  `id` int(3) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `region` varchar(40) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  `postbox` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `taxid` varchar(40) DEFAULT NULL,
  `logo` varchar(50) DEFAULT 'logo.png',
  `cur` int(4) NOT NULL,
  `ware` int(11) DEFAULT 0,
  `ext` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_locations`
--

INSERT INTO `geopos_locations` (`id`, `cname`, `address`, `city`, `region`, `country`, `postbox`, `phone`, `email`, `taxid`, `logo`, `cur`, `ware`, `ext`) VALUES
(1, 'Mit Ghamr Branch', 'rrrrrrrr', 'rrr', 'r', 'r', '', '', '', '', 'logo.png', 0, 1, '1'),
(2, 'dfsdfsdf', 'sdfsdfsdfsd', 'sdfsfsdfdsf', 'werwerw', 'sdfsd', 'sdfsd', '453434534', 'admin@geo.com', '', 'logo.png', 0, 1, '1'),
(3, 'Alex Business', 'adress', 'Alexandria', '', '', '', '', '', '', 'logo.png', 0, 1, '1');

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_log`
--

CREATE TABLE `geopos_log` (
  `id` int(11) NOT NULL,
  `note` mediumtext NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_log`
--

INSERT INTO `geopos_log` (`id`, `note`, `created`, `user`) VALUES
(1, '[Logged In] mhmd.yassin@yahoo.com', '2019-08-22 18:40:07', ''),
(2, '[Logged In] mhmd.yassin@yahoo.com', '2019-08-26 10:41:53', ''),
(3, '[New Product] -product 1  -Qty-332 ID 1', '2019-08-26 19:47:18', 'admin'),
(4, '[New Product] -shop  -Qty-32 ID 2', '2019-08-26 19:48:03', 'admin'),
(5, '[New Product] -Pompa  -Qty-43 ID 3', '2019-08-26 19:49:03', 'admin'),
(6, '[Client Added] Mohamed ID 2', '2019-08-26 19:51:31', 'admin'),
(7, '[Client Added] Hossam ID 3', '2019-08-26 19:52:08', 'admin'),
(8, '[Payment Invoice 1]  Transaction-1 - 10142.00 ', '2019-08-26 19:53:17', 'admin'),
(9, '[Payment Invoice 5]  Transaction-2 - 919.00 ', '2019-08-27 07:11:35', 'admin'),
(10, '[Payment Invoice 5]  Transaction-3 - 0 ', '2019-08-27 07:13:36', 'admin'),
(11, '[Payment Invoice 6]  Transaction-4 - 444.00 ', '2019-08-27 07:23:19', 'admin'),
(12, '[Client Added] Yassin ID 4', '2019-08-27 08:40:04', 'admin'),
(13, '[New Product] -new product hee  -Qty-4544 ID 4', '2019-08-27 08:41:37', 'admin'),
(14, '[New Product] -fdsfsd  -Qty-545 ID 5', '2019-08-27 08:42:33', 'admin'),
(15, '[New Product] -بلابلابلا  -Qty-3454353 ID 6', '2019-08-27 08:45:17', 'admin'),
(16, '[New Product] -custome select product  -Qty-3434 ID 7', '2019-08-27 08:55:09', 'admin'),
(17, '[New Product] -custome select product 2  -Qty-234234 ID 8', '2019-08-27 08:57:31', 'admin'),
(18, '[New Product] -text for product  -Qty-343453 ID 9', '2019-08-27 09:00:00', 'admin'),
(19, '[New Product] -new one   -Qty-435435 ID 10', '2019-08-27 09:07:16', 'admin'),
(20, '[New Product] -6666  -Qty-666666666 ID 11', '2019-08-27 09:10:06', 'admin'),
(21, '[New Product] -fjdfklfd  -Qty-4565454 ID 12', '2019-08-27 09:12:09', 'admin'),
(22, '[New Product] -fjdfklfd  -Qty-4565454 ID 12', '2019-08-27 09:12:09', 'admin'),
(23, '[New Product] -new one  -Qty-345345 ID 14', '2019-08-27 09:50:37', 'admin'),
(24, '[New Product] -trereter  -Qty-344534 ID 15', '2019-08-27 10:41:17', 'admin'),
(25, '[New Product] -favourite bundle  -Qty-5443534 ID 16', '2019-08-28 02:54:44', 'admin'),
(26, '[New Product] -tertettretet  -Qty-456456456 ID 17', '2019-08-28 03:17:48', 'admin'),
(27, '[Logged Out] admin', '2019-08-28 05:11:35', ''),
(28, '[Logged In] mhmd.yassin@yahoo.com', '2019-08-28 05:11:59', ''),
(29, '[Logged In] mhmd.yassin@yahoo.com', '2019-08-28 05:12:16', ''),
(30, '[Client Added] fsa ID 5', '2019-08-28 05:31:12', 'admin'),
(31, '[New Product] -tyututyu  -Qty-89789798 ID 18', '2019-08-28 05:33:09', 'admin'),
(32, '[New Product] -favourite bundle with galary  -Qty-54545 ID 19', '2019-08-28 06:23:13', 'admin'),
(33, '[Logged In] mhmd.yassin@yahoo.com', '2019-08-28 10:45:00', ''),
(34, '[Logged In] mhmd.yassin@yahoo.com', '2019-08-29 02:17:28', ''),
(35, '[Logged In] mhmd.yassin@yahoo.com', '2019-08-29 21:06:32', ''),
(36, '[Update Product] -favourite bundle with galary  -Qty-54545.00 ID 19', '2019-08-29 22:25:12', 'admin'),
(37, '[Update Product] -shop  -Qty-26.00 ID 2', '2019-08-29 22:25:54', 'admin'),
(38, '[Update Product] -favourite bundle  -Qty-5443534.00 ID 16', '2019-08-29 22:39:18', 'admin'),
(39, '[Update Product] -favourite bundle  -Qty-5443534.00 ID 16', '2019-08-29 22:39:58', 'admin'),
(40, '[Update Product] -favourite bundle  -Qty-5443534.00 ID 16', '2019-08-29 22:40:31', 'admin'),
(41, '[New Product] -test  -Qty-1006 ID 20', '2019-08-30 22:37:58', 'admin'),
(42, '[New Product] -ertrtert  -Qty-54665565 ID 21', '2019-08-30 22:41:01', 'admin'),
(43, '[New Product] -aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa  -Qty-555555 ID 22', '2019-08-30 22:41:36', 'admin'),
(44, '[Client Added] ahmed ID 6', '2019-08-30 22:44:07', 'admin'),
(45, '[Payment Invoice 9]  Transaction-5 - 47302210.65 ', '2019-08-31 14:58:29', 'admin'),
(46, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-01 03:40:34', ''),
(47, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-02 22:36:42', ''),
(48, '[Payment Invoice 10]  Transaction-6 - 409.00 ', '2019-09-02 22:37:17', 'admin'),
(49, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-03 23:46:25', ''),
(50, '[Payment Invoice 11]  Transaction-7 - 556101009.00 ', '2019-09-03 23:47:35', 'admin'),
(51, '[Payment Invoice 12]  Transaction-8 - 444.00 ', '2019-09-03 23:50:13', 'admin'),
(52, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-04 13:08:15', ''),
(53, '[New Product] -قققققققققق  -Qty-5555555 ID 23', '2019-09-04 13:41:12', 'admin'),
(54, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-04 17:46:43', ''),
(55, '[New Product] -4 9 2019  -Qty-234234 ID 24', '2019-09-04 17:48:14', 'admin'),
(56, '[New Product] -sdffsdfsd  -Qty-345435 ID 25', '2019-09-04 17:49:00', 'admin'),
(57, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-05 16:45:16', ''),
(58, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-06 17:42:57', ''),
(59, '[New Product] -new related  -Qty-345534 ID 26', '2019-09-06 18:49:48', 'admin'),
(60, '[New Product] -bundle x  -Qty-345345 ID 27', '2019-09-06 18:59:36', 'admin'),
(61, '[New Product] -related to other product  -Qty-23423 ID 28', '2019-09-06 19:01:36', 'admin'),
(62, '[Update Product] -bundle x  -Qty-345345.00 ID 27', '2019-09-06 19:03:19', 'admin'),
(63, '[New Product] -new  -Qty-44 ID 29', '2019-09-06 20:07:38', 'admin'),
(64, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-12 04:32:42', ''),
(65, '[New Product] -new fav bundle  -Qty-432423 ID 30', '2019-09-12 04:36:16', 'admin'),
(66, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-12 12:50:40', ''),
(67, '[New Product] -product with galary  -Qty-345345 ID 31', '2019-09-14 18:49:10', 'admin'),
(68, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-15 05:16:19', ''),
(69, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-15 11:57:00', ''),
(70, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-15 15:38:36', ''),
(71, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-16 12:29:16', ''),
(72, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-16 17:31:38', ''),
(73, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-16 19:53:30', ''),
(74, '[Payment Invoice 14]  Transaction-9 - 555555555 ', '2019-09-16 21:08:44', 'admin'),
(75, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-16 23:41:12', ''),
(76, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-17 21:31:14', ''),
(77, '[New Product] -with prices  -Qty-34543 ID 32', '2019-09-17 22:21:41', 'admin'),
(78, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-18 02:32:17', ''),
(79, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-18 09:31:01', ''),
(80, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-19 05:44:29', ''),
(81, '[Category Created] new category ID 2', '2019-09-19 06:03:08', 'admin'),
(82, '[New Product] -product with cayegory  -Qty-34543 ID 33', '2019-09-19 06:04:08', 'admin'),
(83, '[Payment Invoice 15]  Transaction-10 - 345.00 ', '2019-09-19 06:05:18', 'admin'),
(84, '[New Product] -with galary  -Qty-23423 ID 34', '2019-09-19 06:57:01', 'admin'),
(85, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-22 10:36:01', ''),
(86, '[New Product] -gytggyukg  -Qty-7897998 ID 35', '2019-09-22 10:38:09', 'admin'),
(87, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-23 02:00:28', ''),
(88, '[New Product] -Hossam  -Qty-100 ID 36', '2019-09-23 03:31:42', 'admin'),
(89, '[WareHouse Created] hossam ID 2', '2019-09-23 03:34:16', 'admin'),
(90, '[Product Transfer] -Hossam  -Qty-20  W hossam ID 36', '2019-09-23 03:36:56', 'admin'),
(91, '[New Product] -cv dggfd  -Qty-3242432 ID 38', '2019-09-23 03:50:34', 'admin'),
(92, '[New Product] -cv dggfd  -Qty-3242432 ID 38', '2019-09-23 03:50:35', 'admin'),
(93, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-23 21:41:02', ''),
(94, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-24 00:27:57', ''),
(95, '[New Product] -fsdfsdfd  -Qty-4453 ID 40', '2019-09-24 00:29:09', 'admin'),
(96, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-24 02:57:49', ''),
(97, '[WareHouse Created] Mohamed ID 3', '2019-09-24 04:26:51', 'admin'),
(98, '[New Product] -Mohamed  -Qty-100 ID 41', '2019-09-24 04:27:34', 'admin'),
(99, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-24 15:38:15', ''),
(100, '[Update Product] -product 1  -Qty-323.00 ID 1', '2019-09-24 16:22:45', 'admin'),
(101, '[Update Product] -product 1  -Qty-323.00 ID 1', '2019-09-24 16:23:25', 'admin'),
(102, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-24 22:56:53', ''),
(103, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-25 13:07:50', ''),
(104, '[Logged In] businessowner@businessowner.com', '2019-09-25 15:03:43', ''),
(105, '[Logged Out] businessowner', '2019-09-25 15:06:56', ''),
(106, '[Logged In] sales@sales.com', '2019-09-25 15:07:08', ''),
(107, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-26 13:51:17', ''),
(108, '[Logged In] mhmd.yassin@yahoo.com', '2019-09-30 23:56:22', ''),
(109, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-01 21:35:07', ''),
(110, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-02 01:11:11', ''),
(111, '[Payment Invoice 17]  Transaction-11 - 999 ', '2019-10-02 01:18:22', 'admin'),
(112, '[Payment Invoice 18]  Transaction-12 - 99 ', '2019-10-02 01:23:54', 'admin'),
(113, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-03 20:21:48', ''),
(114, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-04 02:44:59', ''),
(115, '[Payment Invoice 39]  Transaction-13 - 2342778 ', '2019-10-04 04:33:51', 'admin'),
(116, '[Payment Invoice 40]  Transaction-14 - 48022502.65 ', '2019-10-05 17:11:31', 'admin'),
(117, '[New Product] -name  -Qty-34535345 ID 42', '2019-10-06 00:44:09', 'admin'),
(118, '[Category Created] offer 10% ID 3', '2019-10-06 00:58:06', 'admin'),
(119, '[Payment Invoice 41]  Transaction-15 - 414408.00 ', '2019-10-06 01:13:18', 'admin'),
(120, '[Payment Invoice 42]  Transaction-16 - 555659157.00 ', '2019-10-06 01:14:40', 'admin'),
(121, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-08 05:13:49', ''),
(122, '[Payment Invoice 43]  Transaction-17 - 563969677 ', '2019-10-08 05:19:21', 'admin'),
(123, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-09 22:57:40', ''),
(124, '[New Product] -a1  -Qty-10000 ID 43', '2019-10-09 22:59:35', 'admin'),
(125, '[New Product] -a2  -Qty-444444444 ID 44', '2019-10-09 23:00:20', 'admin'),
(126, '[New Product] -32423424  -Qty-234234324 ID 45', '2019-10-09 23:01:15', 'admin'),
(127, '[Update Product] -a3  -Qty-99999999.99 ID 45', '2019-10-09 23:01:54', 'admin'),
(128, '[New Product] -a4  -Qty-111111111111111 ID 46', '2019-10-09 23:02:27', 'admin'),
(129, '[New Product] -a5  -Qty-23423432224 ID 47', '2019-10-09 23:02:56', 'admin'),
(130, '[Update Product] -a1  -Qty-10000.00 ID 43', '2019-10-09 23:22:22', 'admin'),
(131, '[Update Product] -a5  -Qty-99999999.99 ID 47', '2019-10-09 23:23:21', 'admin'),
(132, '[Update Product] -a4  -Qty-99999999.99 ID 46', '2019-10-09 23:23:26', 'admin'),
(133, '[Update Product] -a5  -Qty-99999999.99 ID 47', '2019-10-09 23:27:03', 'admin'),
(134, '[Update Product] -a4  -Qty-99999999.99 ID 46', '2019-10-09 23:28:05', 'admin'),
(135, '[Update Product] -a3  -Qty-99999999.99 ID 45', '2019-10-09 23:28:21', 'admin'),
(136, '[Update Product] -a2  -Qty-99999999.99 ID 44', '2019-10-09 23:29:22', 'admin'),
(137, '[Update Product] -a2  -Qty-99999999.99 ID 44', '2019-10-09 23:41:03', 'admin'),
(138, '[Payment Invoice 44]  Transaction-18 - 545799 ', '2019-10-10 01:14:25', 'admin'),
(139, '[Payment Invoice 52]  Transaction-19 - 4254.44 ', '2019-10-10 01:41:09', 'admin'),
(140, '[Payment Invoice 53]  Transaction-20 - 4599.88 ', '2019-10-10 01:42:29', 'admin'),
(141, '[Payment Invoice 54]  Transaction-21 - 2342668.44 ', '2019-10-10 03:18:32', 'admin'),
(142, '[Payment Invoice 55]  Transaction-22 - 4688099 ', '2019-10-10 03:25:04', 'admin'),
(143, '[Payment Invoice 56]  Transaction-23 - 2342668.44 ', '2019-10-10 03:34:32', 'admin'),
(144, '[Payment Invoice 58]  Transaction-24 - 2343565 ', '2019-10-10 04:11:01', 'admin'),
(145, '[Payment Invoice 59]  Transaction-25 - 801 ', '2019-10-10 04:11:42', 'admin'),
(146, '[Payment Invoice 60]  Transaction-26 - 3798.44 ', '2019-10-10 04:12:38', 'admin'),
(147, '[Payment Invoice 61]  Transaction-27 - 801 ', '2019-10-10 04:13:21', 'admin'),
(148, '[Payment Invoice 62]  Transaction-28 - 343 ', '2019-10-10 04:28:38', 'admin'),
(149, '[Payment Invoice 63]  Transaction-29 - 3798.44 ', '2019-10-10 04:29:17', 'admin'),
(150, '[Payment Invoice 64]  Transaction-30 - 3798.44 ', '2019-10-10 05:31:31', 'admin'),
(151, '[Payment Invoice 65]  Transaction-31 - 3798.44 ', '2019-10-10 05:34:52', 'admin'),
(152, '[Payment Invoice 66]  Transaction-32 - 3798.44 ', '2019-10-10 05:35:45', 'admin'),
(153, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-10 19:21:02', ''),
(154, '[Category Created] Sub category3% of offer10% ID 4', '2019-10-10 19:56:55', 'admin'),
(155, '[New Product] -a6  -Qty-1000 ID 48', '2019-10-10 21:13:54', 'admin'),
(156, '[WareHouse Created] Kom El nor ID 4', '2019-10-10 23:23:14', 'admin'),
(157, '[New Product] -a7  -Qty-2343 ID 49', '2019-10-10 23:25:12', 'admin'),
(158, '[New Product] -a8  -Qty-2343 ID 50', '2019-10-10 23:25:35', 'admin'),
(159, '[New Product] -a9  -Qty-34534 ID 51', '2019-10-11 02:26:36', 'admin'),
(160, '[New Product] -p1  -Qty-2343 ID 1', '2019-10-11 05:53:50', 'admin'),
(161, '[New Product] -p1  -Qty-234 ID 2', '2019-10-11 05:59:00', 'admin'),
(162, '[New Product] -P2  -Qty-3433 ID 3', '2019-10-11 06:03:22', 'admin'),
(163, '[Product Transfer] -p1  -Qty-34  W hossam ID 2', '2019-10-11 06:04:17', 'admin'),
(164, '[Product Transfer] -p1  -Qty-44  W Mohamed ID 2', '2019-10-11 07:19:42', 'admin'),
(165, '[Warehouse Edited] Mohamed ID 3', '2019-10-11 08:03:16', 'admin'),
(166, '[Warehouse Edited] Mohamed ID 3', '2019-10-11 08:04:19', 'admin'),
(167, '[Product Transfer] -p1  -Qty-49 W hossam  ID 4', '2019-10-11 08:11:39', 'admin'),
(168, '[Product Transfer] -p1  -Qty-56 W Mohamed  ID 5', '2019-10-11 08:16:11', 'admin'),
(169, '[New Product] -p1  -Qty-5000 ID 1', '2019-10-11 08:20:21', 'admin'),
(170, '[New Product] -p1  -Qty-22222 ID 1', '2019-10-11 08:22:14', 'admin'),
(171, '[New Product] -p1  -Qty-10000 ID 1', '2019-10-11 08:27:17', 'admin'),
(172, '[Product Transfer] -p1  -Qty-1000  W Mohamed ID 1', '2019-10-11 08:27:48', 'admin'),
(173, '[Product Transfer] -p1  -Qty-2000  W hossam ID 1', '2019-10-11 08:28:28', 'admin'),
(174, '[Product Transfer] -p1  -Qty-3000  W Main WareHouse ID 1', '2019-10-11 08:30:51', 'admin'),
(175, '[New Product] -p2  -Qty-23432 ID 5', '2019-10-11 08:50:55', 'admin'),
(176, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-11 19:42:22', ''),
(177, '[WareHouse Created] Sidi Gaber ID 5', '2019-10-11 19:55:11', 'admin'),
(178, '[Product Transfer] -p1  -Qty-1500  W Sidi Gaber ID 1', '2019-10-11 19:55:54', 'admin'),
(179, '[New Product] -p3  -Qty-567 ID 7', '2019-10-11 22:45:45', 'admin'),
(180, '[New Product] -p4  -Qty-3443 ID 8', '2019-10-11 22:52:18', 'admin'),
(181, '[New Product] -p5  -Qty-343 ID 9', '2019-10-11 22:56:26', 'admin'),
(182, '[New Product] -p6  -Qty-43543 ID 10', '2019-10-11 22:59:56', 'admin'),
(183, '[New Product] -p8  -Qty-3223 ID 11', '2019-10-11 23:00:46', 'admin'),
(184, '[New Product] -p10  -Qty-324 ID 12', '2019-10-11 23:01:38', 'admin'),
(185, '[New Product] -p11  -Qty-3222 ID 13', '2019-10-11 23:15:37', 'admin'),
(186, '[New Product] -p12  -Qty-45434 ID 14', '2019-10-11 23:38:19', 'admin'),
(187, '[New Product] -p13  -Qty-32432 ID 15', '2019-10-11 23:43:14', 'admin'),
(188, '[New Product] -p15  -Qty-32432 ID 16', '2019-10-11 23:48:47', 'admin'),
(189, '[New Product] -p16  -Qty-23432 ID 17', '2019-10-11 23:51:23', 'admin'),
(190, '[New Product] -p17  -Qty-432 ID 18', '2019-10-12 00:01:28', 'admin'),
(191, '[Category Created] mobiles with Sale R10 W15 ID 5', '2019-10-12 01:02:29', 'admin'),
(192, '[Category Created] mobiles with Sale R7 W12 ID 6', '2019-10-12 01:03:06', 'admin'),
(193, '[Category Created] mobiles with Sale R7 W12 ID 7', '2019-10-12 01:04:27', 'admin'),
(194, '[Category Created] mobiles with Sale R6 W11 ID 8', '2019-10-12 02:17:10', 'admin'),
(195, '[New Product] -p18  -Qty-900 ID 19', '2019-10-12 08:22:06', 'admin'),
(196, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-16 00:44:45', ''),
(197, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-16 11:03:31', ''),
(198, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-16 11:08:31', ''),
(199, '[Category Created] parent cat  ID 9', '2019-10-16 12:32:01', 'admin'),
(200, '[Category Created] child ID 10', '2019-10-16 12:33:07', 'admin'),
(201, '[New Product] -p19  -Qty-98998 ID 20', '2019-10-16 12:35:20', 'admin'),
(202, '[Payment Invoice 67]  Transaction-33 - 565656 ', '2019-10-16 12:40:08', 'admin'),
(203, '[Update Product] -p19  -Qty-98998.00 ID 20', '2019-10-16 12:43:16', 'admin'),
(204, '[New Product] -p20  -Qty-7668 ID 21', '2019-10-16 12:45:10', 'admin'),
(205, '[Logged Out] admin', '2019-10-16 13:07:22', ''),
(206, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-16 13:07:33', ''),
(207, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-16 18:08:31', ''),
(208, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-17 05:18:55', ''),
(209, '[New Product] -p1  -Qty-34545 ID 1', '2019-10-17 05:24:18', 'admin'),
(210, '[New Product] -p1  -Qty-2342 ID 1', '2019-10-17 05:27:07', 'admin'),
(211, '[Product Transfer] -p1  -Qty-342  W hossam ID 1', '2019-10-17 05:29:10', 'admin'),
(212, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-17 06:59:34', ''),
(213, '[New Product] -p2  -Qty-234 ID 3', '2019-10-17 07:07:22', 'admin'),
(214, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-17 10:33:41', ''),
(215, '[New Product] -P200  -Qty-234234 ID 4', '2019-10-17 11:36:00', 'admin'),
(216, '[Product Transfer] -p2  -Qty-4  W Main WareHouse ID 3', '2019-10-17 14:43:17', 'admin'),
(217, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-17 20:25:09', ''),
(218, '[New Product] -p3  -Qty-423423 ID 6', '2019-10-17 22:16:03', 'admin'),
(219, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-18 01:49:47', ''),
(220, '[Product Transfer] -p1  -Qty-11  W Main WareHouse ID 1', '2019-10-18 02:11:06', 'admin'),
(221, '[Product Transfer] -p1  -Qty-1 W Main WareHouse  ID 7', '2019-10-18 03:16:19', 'admin'),
(222, '[Product Transfer] -p1  -Qty-1 W hossam  ID 2', '2019-10-18 03:18:46', 'admin'),
(223, '[Product Transfer] -p1  -Qty-1  W Kom El nor ID 1', '2019-10-18 03:20:43', 'admin'),
(224, '[Product Transfer] -p1  -Qty-11 W hossam  ID 2', '2019-10-18 03:21:02', 'admin'),
(225, '[Product Transfer] -p1  -Qty-11 W hossam  ID 2', '2019-10-18 03:21:38', 'admin'),
(226, '[Product Transfer] -p1  -Qty-11 W hossam  ID 2', '2019-10-18 03:22:10', 'admin'),
(227, '[WareHouse Created] Mansoura ID 6', '2019-10-18 03:23:10', 'admin'),
(228, '[Product Transfer] -p1  -Qty-22  W Mansoura ID 1', '2019-10-18 03:23:39', 'admin'),
(229, '[Product Transfer] -P200  -Qty-3  W Mansoura ID 4', '2019-10-18 03:29:31', 'admin'),
(230, '[New Product] -p3  -Qty-234234 ID 11', '2019-10-18 03:36:28', 'admin'),
(231, '[Product Transfer] -p3  -Qty-2  W Mansoura ID 11', '2019-10-18 03:37:15', 'admin'),
(232, '[New Product] -p5  -Qty-4234234 ID 13', '2019-10-18 06:40:46', 'admin'),
(233, '[New Product] -p6  -Qty-3455 ID 14', '2019-10-18 06:56:25', 'admin'),
(234, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-18 10:51:23', ''),
(235, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-18 12:56:19', ''),
(236, '[New Product] -p7  -Qty-24323423 ID 15', '2019-10-18 13:03:40', 'admin'),
(237, '[Product Transfer] -p7  -Qty-1  W Main WareHouse ID 15', '2019-10-18 13:56:25', 'admin'),
(238, '[Product Transfer] -p7  -Qty-1 W Main WareHouse  ID 16', '2019-10-18 13:58:37', 'admin'),
(239, '[Product Transfer] -p7  -Qty-1 W Main WareHouse  ID 16', '2019-10-18 13:59:19', 'admin'),
(240, '[Product Transfer] -p7  -Qty-1 W Main WareHouse  ID 16', '2019-10-18 13:59:42', 'admin'),
(241, '[Product Transfer] -p7  -Qty-1  W hossam ID 15', '2019-10-18 14:00:21', 'admin'),
(242, '[Product Transfer] -p7  -Qty-2 W Main WareHouse  ID 16', '2019-10-18 14:04:47', 'admin'),
(243, '[Product Transfer] -p7  -Qty-2  W Kom El nor ID 15', '2019-10-18 14:04:56', 'admin'),
(244, '[Product Transfer] -p6  -Qty-1  W hossam ID 14', '2019-10-18 14:06:30', 'admin'),
(245, '[New Product] -p8  -Qty-345345 ID 20', '2019-10-18 14:22:59', 'admin'),
(246, '[Product Transfer] -p8  -Qty-1  W Kom El nor ID 20', '2019-10-18 14:24:04', 'admin'),
(247, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-18 15:50:26', ''),
(248, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-19 02:37:43', ''),
(249, '[New Product] -p9  -Qty-444 ID 22', '2019-10-19 02:53:00', 'admin'),
(250, '[New Product] -p10  -Qty-55555 ID 23', '2019-10-19 02:56:32', 'admin'),
(251, '[Update Product] -p10  -Qty-55555.00 ID 23', '2019-10-19 04:34:29', 'admin'),
(252, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-19 09:00:48', ''),
(253, '[New Product] -p11  -Qty-34 ID 24', '2019-10-19 14:29:06', 'admin'),
(254, '[New Product] -p12  -Qty-32321 ID 25', '2019-10-19 21:05:28', 'admin'),
(255, '[Product Transfer] -p12  -Qty-10  W Kom El nor ID 25', '2019-10-19 21:09:08', 'admin'),
(256, '[Product Transfer] -p12  -Qty-3  W Mansoura ID 25', '2019-10-19 21:15:00', 'admin'),
(257, '[Product Transfer] -p12  -Qty-34 W Mansoura  ID 27', '2019-10-19 21:16:14', 'admin'),
(258, '[Product Transfer] -p12  -Qty-34 W Mansoura  ID 27', '2019-10-19 21:16:18', 'admin'),
(259, '[Product Transfer] -p12  -Qty-34 W Mansoura  ID 25', '2019-10-19 21:16:30', 'admin'),
(260, '[Product Transfer] -p12  -Qty-3  W hossam ID 27', '2019-10-19 21:34:15', 'admin'),
(261, '[Product Transfer] -p12  -Qty-3  W hossam ID 27', '2019-10-19 21:35:48', 'admin'),
(262, '[Product Transfer] -p12  -Qty-2 W Mansoura  ID 27', '2019-10-19 21:39:33', 'admin'),
(263, '[Product Transfer] -p12  -Qty-2  W hossam ID 27', '2019-10-19 21:57:56', 'admin'),
(264, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-21 11:04:53', ''),
(265, '[New Product] -trete  -Qty-435345 ID 31', '2019-10-21 17:28:25', 'admin'),
(266, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-22 14:35:41', ''),
(267, '[Category Edited] General ID 1', '2019-10-22 15:37:55', 'admin'),
(268, '[Category Edited] General ID 1', '2019-10-22 15:41:01', 'admin'),
(269, '[Category Edited] General5 ID 1', '2019-10-22 15:41:30', 'admin'),
(270, '[Category Edited] General5 ID 1', '2019-10-22 17:39:01', 'admin'),
(271, '[Category Edited] General555 ID 1', '2019-10-22 17:41:35', 'admin'),
(272, '[Category Edited] Generalllll ID 1', '2019-10-22 17:48:50', 'admin'),
(273, '[New Product] -p13  -Qty-234234 ID 32', '2019-10-22 18:02:23', 'admin'),
(274, '[New Product] -p14  -Qty-22342 ID 33', '2019-10-22 18:04:06', 'admin'),
(275, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-22 18:39:51', ''),
(276, '[Category Edited] mobiles with Sale R10 W15 ID 5', '2019-10-22 19:22:02', 'admin'),
(277, '[Category Edited] mobiles with Sale R12 W18 ID 5', '2019-10-22 19:26:09', 'admin'),
(278, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 19:48:27', 'admin'),
(279, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 19:48:34', 'admin'),
(280, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 19:51:44', 'admin'),
(281, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 19:52:01', 'admin'),
(282, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 19:52:58', 'admin'),
(283, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 19:53:55', 'admin'),
(284, '[Category Edited]  ID 5', '2019-10-22 20:02:15', 'admin'),
(285, '[Category Edited]  ID 5', '2019-10-22 20:03:15', 'admin'),
(286, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 20:06:36', 'admin'),
(287, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 20:07:42', 'admin'),
(288, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 20:09:15', 'admin'),
(289, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 20:14:46', 'admin'),
(290, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 20:37:49', 'admin'),
(291, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 20:38:52', 'admin'),
(292, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 20:40:43', 'admin'),
(293, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 20:41:55', 'admin'),
(294, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 20:43:29', 'admin'),
(295, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-22 20:45:44', 'admin'),
(296, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-23 00:09:52', ''),
(297, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 00:12:01', 'admin'),
(298, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 00:12:47', 'admin'),
(299, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 00:23:58', 'admin'),
(300, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 00:26:03', 'admin'),
(301, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 00:26:22', 'admin'),
(302, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 00:27:17', 'admin'),
(303, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 00:28:20', 'admin'),
(304, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 00:28:53', 'admin'),
(305, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 00:29:35', 'admin'),
(306, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 01:20:28', 'admin'),
(307, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 01:21:15', 'admin'),
(308, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 01:31:33', 'admin'),
(309, '[Category Edited] mobiles with Sale R12 W19555 ID 5', '2019-10-23 01:43:38', 'admin'),
(310, '[Category Edited] mobiles with Sale R12 W19555 ID 5', '2019-10-23 01:43:56', 'admin'),
(311, '[Category Edited] mobiles with Sale R12 W19555 ID 5', '2019-10-23 01:45:08', 'admin'),
(312, '[Category Edited] mobiles with Sale R12 W19555 ID 5', '2019-10-23 01:46:54', 'admin'),
(313, '[Category Edited] mobiles with Sale R12 W19555 ID 5', '2019-10-23 01:48:49', 'admin'),
(314, '[Category Edited] mobiles with Sale R12 W19555 ID 5', '2019-10-23 01:48:52', 'admin'),
(315, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 01:55:23', 'admin'),
(316, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-23 14:09:21', ''),
(317, '[Category Edited] mobiles with Sale R12 W19999999999999 ID 5', '2019-10-23 15:18:55', 'admin'),
(318, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 15:23:12', 'admin'),
(319, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 15:24:50', 'admin'),
(320, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 15:24:53', 'admin'),
(321, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 15:25:05', 'admin'),
(322, '[Category Edited] mobiles with Sale R12 W194 ID 5', '2019-10-23 15:27:18', 'admin'),
(323, '[Category Edited] mobiles with Sale R12 W1945 ID 5', '2019-10-23 15:27:27', 'admin'),
(324, '[Category Edited] mobiles with Sale R12 W1945 ID 5', '2019-10-23 15:45:37', 'admin'),
(325, '[Category Edited] mobiles with Sale R12 W1945 ID 5', '2019-10-23 16:11:35', 'admin'),
(326, '[Category Edited] mobiles with Sale R12 W1945 ID 5', '2019-10-23 16:13:04', 'admin'),
(327, '[Category Edited] mobiles with Sale R12 W1945 ID 5', '2019-10-23 16:13:20', 'admin'),
(328, '[Category Edited] mobiles with Sale R12 W1945 ID 5', '2019-10-23 16:13:44', 'admin'),
(329, '[Category Edited] mobiles with Sale R12 W1945eeee ID 5', '2019-10-23 16:14:05', 'admin'),
(330, '[Category Edited] mobiles with Sale R12 W1945eeee ID 5', '2019-10-23 16:14:36', 'admin'),
(331, '[Category Edited] mobiles with Sale R12 W1945eeeerrrr ID 5', '2019-10-23 16:14:45', 'admin'),
(332, '[Category Edited] mobiles with Sale R12 W1945eeeerrrr ID 5', '2019-10-23 16:14:47', 'admin'),
(333, '[Category Edited] mobiles with Sale R12 W1945eeeerrrreee ID 5', '2019-10-23 16:14:54', 'admin'),
(334, '[Category Edited] mobiles with Sale R12 W19 ID 5', '2019-10-23 16:15:04', 'admin'),
(335, '[Category Edited] mobiles with Sale R12 W194 ID 5', '2019-10-23 16:15:39', 'admin'),
(336, '[Category Edited] mobiles with Sale R12 W1945 ID 5', '2019-10-23 16:16:31', 'admin'),
(337, '[Category Edited] mobiles with Sale R12 W19456666 ID 5', '2019-10-23 16:19:41', 'admin'),
(338, '[Category Edited] mobiles with Sale R12 W19456666555 ID 5', '2019-10-23 16:20:12', 'admin'),
(339, '[Category Edited] mobiles with Sale R12 W19456666555 ID 5', '2019-10-23 16:35:37', 'admin'),
(340, '[Category Edited] mobiles with Sale R12 W19456666555 ID 5', '2019-10-23 16:36:25', 'admin'),
(341, '[Category Edited] mobiles with Sale R12 W19456666555 ID 5', '2019-10-23 19:04:03', 'admin'),
(342, '[Category Edited] mobiles with Sale R12 W19456666555 ID 5', '2019-10-23 19:05:15', 'admin'),
(343, '[Category Edited] mobiles with Sale R12 W19456666555 ID 5', '2019-10-23 19:05:55', 'admin'),
(344, '[New Product] -etrretet  -Qty-3432423 ID 34', '2019-10-23 19:27:35', 'admin'),
(345, '[New Product] -p16  -Qty-34234 ID 35', '2019-10-23 21:04:25', 'admin'),
(346, '[New Product] -p17  -Qty-3433 ID 36', '2019-10-23 21:05:48', 'admin'),
(347, '[New Product] -p18  -Qty-23423423 ID 37', '2019-10-23 21:06:55', 'admin'),
(348, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-24 00:09:28', ''),
(349, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-24 12:39:29', ''),
(350, '[New Product] -p19  -Qty-233223 ID 38', '2019-10-24 14:15:07', 'admin'),
(351, '[New Product] -p20  -Qty-232 ID 39', '2019-10-24 14:17:21', 'admin'),
(352, '[New Product] -p21  -Qty-3243 ID 40', '2019-10-24 14:20:36', 'admin'),
(353, '[New Product] -p22  -Qty-343 ID 41', '2019-10-24 14:24:10', 'admin'),
(354, '[New Product] -p23  -Qty-3443 ID 42', '2019-10-24 14:46:13', 'admin'),
(355, '[New Product] -p24  -Qty-43434 ID 43', '2019-10-24 14:48:22', 'admin'),
(356, '[New Product] -p25  -Qty-4444 ID 44', '2019-10-24 14:51:53', 'admin'),
(357, '[Update Product] -p253  -Qty-4444.00 ID 44', '2019-10-24 16:05:42', 'admin'),
(358, '[Update Product] -p253  -Qty-4444.00 ID 44', '2019-10-24 16:06:28', 'admin'),
(359, '[Update Product] -p2535  -Qty-4444.00 ID 44', '2019-10-24 16:07:36', 'admin'),
(360, '[Update Product] -p2535  -Qty-4444.00 ID 44', '2019-10-24 17:21:12', 'admin'),
(361, '[Update Product] -p2535  -Qty-4444.00 ID 44', '2019-10-24 17:49:18', 'admin'),
(362, '[Update Product] -p2535  -Qty-4444.00 ID 44', '2019-10-24 17:50:59', 'admin'),
(363, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-25 13:30:21', ''),
(364, '[New Product] -p25  -Qty-2233 ID 45', '2019-10-25 13:32:23', 'admin'),
(365, '[WareHouse Created] zefta ID 7', '2019-10-25 13:33:34', 'admin'),
(366, '[WareHouse Created] zefta ID 8', '2019-10-25 13:33:37', 'admin'),
(367, '[WareHouse Created] zefta ID 9', '2019-10-25 13:33:43', 'admin'),
(368, '[WareHouse Created] zofta ID 10', '2019-10-25 13:44:44', 'admin'),
(369, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-26 14:39:47', ''),
(370, '[New Product] -p26  -Qty-32423 ID 46', '2019-10-26 19:08:04', 'admin'),
(371, '[New Product] -p27  -Qty-32423 ID 47', '2019-10-26 19:25:15', 'admin'),
(372, '[New Product] -p28  -Qty-2343 ID 48', '2019-10-26 20:12:43', 'admin'),
(373, '[New Product] -p29  -Qty-32432 ID 49', '2019-10-26 20:14:33', 'admin'),
(374, '[New Product] -p30  -Qty-343 ID 50', '2019-10-26 20:17:59', 'admin'),
(375, '[New Product] -p31  -Qty-342 ID 51', '2019-10-26 20:24:35', 'admin'),
(376, '[New Product] -p32  -Qty-343 ID 52', '2019-10-26 21:58:13', 'admin'),
(377, '[New Product] -p33  -Qty-234 ID 53', '2019-10-26 21:59:36', 'admin'),
(378, '[New Product] -p1  -Qty-234 ID 54', '2019-10-27 00:34:31', 'admin'),
(379, '[Product Transfer] -p1  -Qty-2  W hossam ID 54', '2019-10-27 00:48:10', 'admin'),
(380, '[Product Transfer] -p1  -Qty-2 W hossam  ID 55', '2019-10-27 00:48:35', 'admin'),
(381, '[Product Transfer] -p1  -Qty-2 W hossam  ID 55', '2019-10-27 00:49:48', 'admin'),
(382, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-27 10:27:52', ''),
(383, '[New Product] -p2  -Qty-345 ID 56', '2019-10-27 10:29:15', 'admin'),
(384, '[Product Transfer] -p2  -Qty-1  W Sidi Gaber ID 56', '2019-10-27 10:34:43', 'admin'),
(385, '[Product Transfer] -p2  -Qty-2 W Sidi Gaber  ID 57', '2019-10-27 10:35:16', 'admin'),
(386, '[Product Transfer] -p2  -Qty-3  W hossam ID 56', '2019-10-27 10:43:32', 'admin'),
(387, '[New Product] -p3  -Qty-333 ID 59', '2019-10-27 10:45:16', 'admin'),
(388, '[Product Transfer] -p3  -Qty-4  W Sidi Gaber ID 59', '2019-10-27 10:45:56', 'admin'),
(389, '[Product Transfer] -p3  -Qty-4  W hossam ID 59', '2019-10-27 10:56:26', 'admin'),
(390, '[New Product] -p4  -Qty-234 ID 62', '2019-10-27 10:58:34', 'admin'),
(391, '[Product Transfer] -p4  -Qty-3  W hossam ID 62', '2019-10-27 10:59:34', 'admin'),
(392, '[Payment Invoice 69]  Transaction-34 - 444.00 ', '2019-10-27 14:01:09', 'admin'),
(393, '[Payment Invoice 70]  Transaction-35 - 444.00 ', '2019-10-27 14:07:49', 'admin'),
(394, '[New Product] -p33  -Qty-3432 ID 64', '2019-10-27 20:08:18', 'admin'),
(395, '[New Product] -p44  -Qty-4342 ID 65', '2019-10-27 21:10:07', 'admin'),
(396, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-28 16:53:44', ''),
(397, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-29 00:36:59', ''),
(398, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-29 16:59:20', ''),
(399, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-29 22:51:52', ''),
(400, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-30 00:55:06', ''),
(401, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-30 09:54:10', ''),
(402, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-30 16:26:36', ''),
(403, '[Logged In] mhmd.yassin@yahoo.com', '2019-10-31 18:54:30', ''),
(404, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-01 17:52:42', ''),
(405, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-02 01:59:14', ''),
(406, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-02 17:04:34', ''),
(407, '[New Product] -p5  -Qty-444 ID 67', '2019-11-02 19:08:19', 'admin'),
(408, '[Product Transfer] -p3  -Qty-44  W Main WareHouse ID 59', '2019-11-02 21:07:13', 'admin'),
(409, '[Product Transfer] -p5  -Qty-0  W zofta ID 67', '2019-11-02 23:29:23', 'admin'),
(410, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-03 09:48:46', ''),
(411, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-03 16:19:23', ''),
(412, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-03 20:50:08', ''),
(413, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-04 12:14:43', ''),
(414, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-05 00:51:07', ''),
(415, '[New Product] -p6  -Qty-666 ID 70', '2019-11-05 00:52:59', 'admin'),
(416, '[Payment Invoice 71]  Transaction-36 - 2567 ', '2019-11-05 00:57:24', 'admin'),
(417, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-05 16:27:13', ''),
(418, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-10 01:59:40', ''),
(419, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-10 11:06:49', ''),
(420, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-10 23:05:48', ''),
(421, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-11 03:41:12', ''),
(422, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-11 15:17:23', ''),
(423, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-12 02:58:25', ''),
(424, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-12 17:45:14', ''),
(425, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-13 20:33:30', ''),
(426, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:29:31', 'admin'),
(427, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:33:12', 'admin'),
(428, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:33:13', 'admin'),
(429, '[Product Transfer] -p3  -Qty-1 W hossam  ID 61', '2019-11-13 23:33:13', 'admin'),
(430, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:33:43', 'admin'),
(431, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:33:43', 'admin'),
(432, '[Product Transfer] -p3  -Qty-1 W hossam  ID 61', '2019-11-13 23:33:43', 'admin'),
(433, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:34:37', 'admin'),
(434, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:34:37', 'admin'),
(435, '[Product Transfer] -p3  -Qty-1 W hossam  ID 61', '2019-11-13 23:34:37', 'admin'),
(436, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:35:20', 'admin'),
(437, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:35:20', 'admin'),
(438, '[Product Transfer] -p3  -Qty-1 W hossam  ID 61', '2019-11-13 23:35:20', 'admin'),
(439, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:36:06', 'admin'),
(440, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:36:06', 'admin'),
(441, '[Product Transfer] -p3  -Qty-1 W hossam  ID 61', '2019-11-13 23:36:07', 'admin'),
(442, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:37:00', 'admin'),
(443, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:37:00', 'admin'),
(444, '[Product Transfer] -p3  -Qty-1 W hossam  ID 61', '2019-11-13 23:37:01', 'admin'),
(445, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:38:56', 'admin'),
(446, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:38:56', 'admin'),
(447, '[Product Transfer] -p3  -Qty-1 W hossam  ID 61', '2019-11-13 23:38:57', 'admin'),
(448, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:45:06', 'admin'),
(449, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:45:06', 'admin'),
(450, '[Product Transfer] -p3  -Qty-1 W hossam  ID 61', '2019-11-13 23:45:06', 'admin'),
(451, '[Product Transfer] -p2  -Qty-1 W hossam  ID 58', '2019-11-13 23:46:59', 'admin'),
(452, '[Product Transfer] -p3  -Qty-1 W hossam  ID 61', '2019-11-13 23:46:59', 'admin'),
(453, '[New Product] -p7 bundle  -Qty-900 ID 71', '2019-11-13 23:50:25', 'admin'),
(454, '[New Product] -p9  -Qty-999 ID 72', '2019-11-14 01:32:51', 'admin'),
(455, '[Update Product] -p9  -Qty-999.00 ID 72', '2019-11-14 01:46:30', 'admin'),
(456, '[New Product] -p10  -Qty-9009 ID 73', '2019-11-14 02:35:02', 'admin'),
(457, '[New Product] -p11  -Qty-900 ID 74', '2019-11-14 02:37:13', 'admin'),
(458, '[New Product] -p12  -Qty-90 ID 75', '2019-11-14 02:38:29', 'admin'),
(459, '[Logged In] mhmd.yassin@yahoo.com', '2019-11-14 14:45:33', ''),
(460, '[New Product] -p13  -Qty-34324 ID 76', '2019-11-14 15:23:56', 'admin'),
(461, '[Update Product] -p13  -Qty-34324.00 ID 76', '2019-11-14 15:37:03', 'admin'),
(462, '[Update Product] -p13  -Qty-34324.00 ID 76', '2019-11-14 15:37:53', 'admin'),
(463, '[Update Product] -p13  -Qty-34324.00 ID 76', '2019-11-14 15:38:22', 'admin'),
(464, '[Update Product] -p13  -Qty-34324.00 ID 76', '2019-11-14 16:09:05', 'admin'),
(465, '[New Product] -p14  -Qty-4534 ID 77', '2019-11-14 16:16:06', 'admin'),
(466, '[New Product] -p15  -Qty-4234 ID 78', '2019-11-14 16:18:07', 'admin'),
(467, '[New Product] -p16  -Qty-90 ID 79', '2019-11-14 16:20:20', 'admin'),
(468, '[New Product] -p17  -Qty-90 ID 80', '2019-11-14 16:22:53', 'admin'),
(469, '[New Product] -p18  -Qty-8989 ID 81', '2019-11-14 16:37:01', 'admin'),
(470, '[New Product] -p19  -Qty-9000 ID 82', '2019-11-14 16:38:20', 'admin'),
(471, '[New Product] -p20  -Qty-545 ID 83', '2019-11-14 19:05:32', 'admin'),
(472, '[New Product] -p21  -Qty-30 ID 84', '2019-11-14 20:03:56', 'admin'),
(473, '[New Product] -p22  -Qty-30 ID 85', '2019-11-14 20:04:25', 'admin'),
(474, '[New Product] -p23  -Qty-4343 ID 86', '2019-11-14 20:06:58', 'admin'),
(475, '[New Product] -p24  -Qty-344343 ID 87', '2019-11-14 20:28:14', 'admin'),
(476, '[Category Edited] mobiles with Sale R12 W19456666555 ID 5', '2019-11-14 20:29:31', 'admin'),
(477, '[New Product] -p25  -Qty-3443 ID 88', '2019-11-14 20:31:08', 'admin'),
(478, '[New Product] -p26  -Qty-3443 ID 89', '2019-11-14 21:13:37', 'admin');

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_login_attempts`
--

CREATE TABLE `geopos_login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(39) DEFAULT '0',
  `timestamp` datetime DEFAULT NULL,
  `login_attempts` tinyint(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_metadata`
--

CREATE TABLE `geopos_metadata` (
  `id` int(11) NOT NULL,
  `type` int(3) NOT NULL,
  `rid` int(11) NOT NULL,
  `col1` varchar(255) DEFAULT NULL,
  `col2` varchar(255) DEFAULT NULL,
  `d_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_metadata`
--

INSERT INTO `geopos_metadata` (`id`, `type`, `rid`, `col1`, `col2`, `d_date`) VALUES
(1, 9, 1, '4770', NULL, '2019-08-26'),
(2, 9, 2, '276', NULL, '2019-08-26'),
(3, 9, 3, '276', NULL, '2019-08-26'),
(4, 9, 4, '942', NULL, '2019-08-27'),
(5, 9, 5, '287', NULL, '2019-08-27'),
(6, 9, 6, '222', NULL, '2019-08-27'),
(7, 9, 7, '-345779', NULL, '2019-08-28'),
(8, 9, 8, '0', NULL, '2019-08-29'),
(9, 9, 1, '4770', NULL, '2019-08-29'),
(10, 9, 9, '555989998.2', NULL, '2019-08-31'),
(11, 9, 10, '54', NULL, '2019-09-02'),
(12, 9, 11, '501390809', NULL, '2019-09-03'),
(13, 9, 12, '222', NULL, '2019-09-03'),
(14, 9, 13, '0', NULL, '2019-09-12'),
(15, 9, 14, '557818891', NULL, '2019-09-16'),
(16, 9, 15, '-43198', NULL, '2019-09-19'),
(17, 9, 16, '-341700381', NULL, '2019-09-24'),
(18, 9, 17, '274', NULL, '2019-10-01'),
(19, 9, 18, '265', NULL, '2019-10-01'),
(20, 9, 19, '219', NULL, '2019-10-01'),
(21, 9, 20, '43', NULL, '2019-10-01'),
(22, 9, 21, '0', NULL, '2019-10-04'),
(23, 9, 22, '265', NULL, '2019-10-04'),
(24, 9, 23, '0', NULL, '2019-10-04'),
(25, 9, 24, '-47862113', NULL, '2019-10-04'),
(26, 9, 25, '-547228592.8', NULL, '2019-10-04'),
(27, 9, 26, '0', NULL, '2019-10-04'),
(28, 9, 27, '0', NULL, '2019-10-04'),
(29, 9, 28, '-345992', NULL, '2019-10-04'),
(30, 9, 29, '0', NULL, '2019-10-04'),
(31, 9, 30, '0', NULL, '2019-10-04'),
(32, 9, 31, '0', NULL, '2019-10-04'),
(33, 9, 32, '0', NULL, '2019-10-04'),
(34, 9, 33, '0', NULL, '2019-10-04'),
(35, 9, 34, '-54109191', NULL, '2019-10-04'),
(36, 9, 35, '0', NULL, '2019-10-04'),
(37, 9, 36, '-55', NULL, '2019-10-04'),
(38, 9, 37, '-46', NULL, '2019-10-04'),
(39, 9, 38, '-46', NULL, '2019-10-04'),
(40, 9, 39, '557772890', NULL, '2019-10-04'),
(41, 9, 40, '0', NULL, '2019-10-05'),
(42, 9, 41, '-108', NULL, '2019-10-05'),
(43, 9, 42, '555499973', NULL, '2019-10-05'),
(44, 9, 43, '-66201138.8', NULL, '2019-10-08'),
(45, 9, 44, '501390900', NULL, '2019-10-09'),
(46, 9, 45, '0', NULL, '2019-10-09'),
(47, 9, 46, '0', NULL, '2019-10-09'),
(48, 9, 47, '-2341886.89', NULL, '2019-10-09'),
(49, 9, 48, '0', NULL, '2019-10-09'),
(50, 9, 49, '0', NULL, '2019-10-09'),
(51, 9, 50, '-2341886.89', NULL, '2019-10-09'),
(52, 9, 51, '0.11000000000001', NULL, '2019-10-09'),
(53, 9, 52, '-2338877.89', NULL, '2019-10-09'),
(54, 9, 53, '-2338877.78', NULL, '2019-10-09'),
(55, 9, 54, '2318891.11', NULL, '2019-10-10'),
(56, 9, 55, '2298904.22', NULL, '2019-10-10'),
(57, 9, 56, '2318891.11', NULL, '2019-10-10'),
(58, 9, 57, '-2338878', NULL, '2019-10-10'),
(59, 9, 58, '0', NULL, '2019-10-10'),
(60, 9, 59, '-2338876.89', NULL, '2019-10-10'),
(61, 9, 60, '-2338876.89', NULL, '2019-10-10'),
(62, 9, 61, '-2338876.89', NULL, '2019-10-10'),
(63, 9, 62, '0', NULL, '2019-10-10'),
(64, 9, 63, '-2338877.89', NULL, '2019-10-10'),
(65, 9, 64, '-2338877.89', NULL, '2019-10-10'),
(66, 9, 65, '-2338877.89', NULL, '2019-10-10'),
(67, 9, 66, '-2338877.89', NULL, '2019-10-10'),
(68, 9, 67, '112200', NULL, '2019-10-16'),
(69, 9, 68, '-230899', NULL, '2019-10-24'),
(70, 9, 69, '-655', NULL, '2019-10-27'),
(71, 9, 70, '-1521', NULL, '2019-10-27'),
(72, 9, 71, '1540', NULL, '2019-11-04');

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_milestones`
--

CREATE TABLE `geopos_milestones` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `exp` text NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_movers`
--

CREATE TABLE `geopos_movers` (
  `id` int(11) NOT NULL,
  `d_type` int(3) NOT NULL,
  `rid1` int(11) NOT NULL,
  `rid2` int(11) NOT NULL,
  `rid3` int(11) NOT NULL,
  `d_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_movers`
--

INSERT INTO `geopos_movers` (`id`, `d_type`, `rid1`, `rid2`, `rid3`, `d_time`, `note`) VALUES
(2, 1, 2, 32, 0, '2019-08-26 17:48:03', 'Stock Initialized'),
(5, 1, 5, 545, 0, '2019-08-27 06:42:33', 'Stock Initialized'),
(7, 1, 7, 3434, 0, '2019-08-27 06:55:09', 'Stock Initialized'),
(8, 1, 8, 234234, 0, '2019-08-27 06:57:31', 'Stock Initialized'),
(9, 1, 9, 343453, 0, '2019-08-27 07:00:00', 'Stock Initialized'),
(10, 1, 10, 435435, 0, '2019-08-27 07:07:16', 'Stock Initialized'),
(11, 1, 11, 666666666, 0, '2019-08-27 07:10:06', 'Stock Initialized'),
(12, 1, 12, 4565454, 0, '2019-08-27 07:12:09', 'Stock Initialized'),
(13, 1, 13, 566456, 0, '2019-08-27 07:12:09', 'Stock Initialized'),
(14, 1, 14, 345345, 0, '2019-08-27 07:50:37', 'Stock Initialized'),
(15, 1, 15, 344534, 0, '2019-08-27 08:41:17', 'Stock Initialized'),
(16, 1, 16, 5443534, 0, '2019-08-28 00:54:44', 'Stock Initialized'),
(17, 1, 17, 456456456, 0, '2019-08-28 01:17:48', 'Stock Initialized'),
(18, 1, 18, 89789798, 0, '2019-08-28 03:33:09', 'Stock Initialized'),
(19, 1, 19, 54545, 0, '2019-08-28 04:23:13', 'Stock Initialized'),
(20, 1, 20, 1006, 0, '2019-08-30 20:37:57', 'Stock Initialized'),
(21, 1, 21, 54665565, 0, '2019-08-30 20:41:01', 'Stock Initialized'),
(22, 1, 22, 555555, 0, '2019-08-30 20:41:36', 'Stock Initialized'),
(23, 1, 23, 5555555, 0, '2019-09-04 11:41:12', 'Stock Initialized'),
(24, 1, 24, 234234, 0, '2019-09-04 15:48:14', 'Stock Initialized'),
(25, 1, 25, 345435, 0, '2019-09-04 15:49:00', 'Stock Initialized'),
(26, 1, 26, 345534, 0, '2019-09-06 16:49:47', 'Stock Initialized'),
(27, 1, 27, 345345, 0, '2019-09-06 16:59:36', 'Stock Initialized'),
(28, 1, 28, 23423, 0, '2019-09-06 17:01:36', 'Stock Initialized'),
(29, 1, 29, 44, 0, '2019-09-06 18:07:38', 'Stock Initialized'),
(30, 1, 30, 432423, 0, '2019-09-12 02:36:16', 'Stock Initialized'),
(31, 1, 31, 345345, 0, '2019-09-14 16:49:10', 'Stock Initialized'),
(32, 1, 32, 34543, 0, '2019-09-17 20:21:41', 'Stock Initialized'),
(33, 1, 33, 34543, 0, '2019-09-19 04:04:08', 'Stock Initialized'),
(34, 1, 34, 23423, 0, '2019-09-19 04:57:01', 'Stock Initialized'),
(35, 1, 35, 7897998, 0, '2019-09-22 08:38:09', 'Stock Initialized'),
(36, 1, 36, 100, 0, '2019-09-23 01:31:42', 'Stock Initialized'),
(37, 1, 37, 20, 0, '2019-09-23 01:36:56', 'Stock Transferred & Initialized W hossam'),
(38, 1, 36, -20, 0, '2019-09-23 01:36:56', 'Stock Transferred WID hossam'),
(39, 1, 38, 3242432, 0, '2019-09-23 01:50:34', 'Stock Initialized'),
(40, 1, 39, 4334334, 0, '2019-09-23 01:50:35', 'Stock Initialized'),
(41, 1, 40, 4453, 0, '2019-09-23 22:29:09', 'Stock Initialized'),
(42, 1, 41, 100, 0, '2019-09-24 02:27:33', 'Stock Initialized'),
(43, 1, 42, 34535345, 0, '2019-10-05 22:44:08', 'Stock Initialized'),
(44, 1, 43, 10000, 0, '2019-10-09 20:59:35', 'Stock Initialized'),
(45, 1, 44, 444444444, 0, '2019-10-09 21:00:20', 'Stock Initialized'),
(46, 1, 45, 234234324, 0, '2019-10-09 21:01:15', 'Stock Initialized'),
(47, 1, 46, 2147483647, 0, '2019-10-09 21:02:27', 'Stock Initialized'),
(48, 1, 47, 2147483647, 0, '2019-10-09 21:02:56', 'Stock Initialized'),
(49, 1, 48, 1000, 0, '2019-10-10 19:13:54', 'Stock Initialized'),
(50, 1, 49, 2343, 0, '2019-10-10 21:25:12', 'Stock Initialized'),
(51, 1, 50, 2343, 0, '2019-10-10 21:25:35', 'Stock Initialized'),
(52, 1, 51, 34534, 0, '2019-10-11 00:26:36', 'Stock Initialized'),
(54, 1, 2, 234, 0, '2019-10-11 03:59:00', 'Stock Initialized'),
(57, 1, 2, -34, 0, '2019-10-11 04:04:17', 'Stock Transferred WID hossam'),
(58, 1, 5, 44, 0, '2019-10-11 05:19:41', 'Stock Transferred & Initialized W Mohamed'),
(59, 1, 2, -44, 0, '2019-10-11 05:19:42', 'Stock Transferred WID Mohamed'),
(61, 1, 2, -49, 0, '2019-10-11 06:11:39', 'Stock Transferred WID hossam'),
(62, 1, 5, 56, 0, '2019-10-11 06:16:11', 'Stock Transferred W Mohamed'),
(63, 1, 2, -56, 0, '2019-10-11 06:16:11', 'Stock Transferred WID Mohamed'),
(67, 1, 2, 1000, 0, '2019-10-11 06:27:48', 'Stock Transferred & Initialized W Mohamed'),
(73, 1, 5, 23432, 0, '2019-10-11 06:50:55', 'Stock Initialized'),
(76, 1, 7, 567, 0, '2019-10-11 20:45:45', 'Stock Initialized'),
(77, 1, 8, 3443, 0, '2019-10-11 20:52:18', 'Stock Initialized'),
(78, 1, 9, 343, 0, '2019-10-11 20:56:26', 'Stock Initialized'),
(79, 1, 10, 43543, 0, '2019-10-11 20:59:56', 'Stock Initialized'),
(80, 1, 11, 3223, 0, '2019-10-11 21:00:46', 'Stock Initialized'),
(81, 1, 12, 324, 0, '2019-10-11 21:01:38', 'Stock Initialized'),
(82, 1, 13, 3222, 0, '2019-10-11 21:15:37', 'Stock Initialized'),
(83, 1, 14, 45434, 0, '2019-10-11 21:38:19', 'Stock Initialized'),
(84, 1, 15, 32432, 0, '2019-10-11 21:43:14', 'Stock Initialized'),
(85, 1, 16, 32432, 0, '2019-10-11 21:48:47', 'Stock Initialized'),
(86, 1, 17, 23432, 0, '2019-10-11 21:51:23', 'Stock Initialized'),
(87, 1, 18, 432, 0, '2019-10-11 22:01:28', 'Stock Initialized'),
(88, 1, 19, 900, 0, '2019-10-12 06:22:06', 'Stock Initialized'),
(89, 1, 20, 98998, 0, '2019-10-16 10:35:20', 'Stock Initialized'),
(90, 1, 21, 7668, 0, '2019-10-16 10:45:10', 'Stock Initialized'),
(93, 1, 2, 342, 0, '2019-10-17 03:29:10', 'Stock Transferred & Initialized W hossam'),
(97, 1, 5, 4, 0, '2019-10-17 12:43:17', 'Stock Transferred & Initialized W Main WareHouse'),
(100, 1, 7, 11, 0, '2019-10-18 00:11:06', 'Stock Transferred & Initialized W Main WareHouse'),
(102, 1, 7, 1, 0, '2019-10-18 01:16:19', 'Stock Transferred W Main WareHouse'),
(104, 1, 2, 1, 0, '2019-10-18 01:18:46', 'Stock Transferred W hossam'),
(106, 1, 8, 1, 0, '2019-10-18 01:20:43', 'Stock Transferred & Initialized W Kom El nor'),
(108, 1, 2, 11, 0, '2019-10-18 01:21:02', 'Stock Transferred W hossam'),
(110, 1, 2, 11, 0, '2019-10-18 01:21:38', 'Stock Transferred W hossam'),
(112, 1, 2, 11, 0, '2019-10-18 01:22:10', 'Stock Transferred W hossam'),
(114, 1, 9, 22, 0, '2019-10-18 01:23:39', 'Stock Transferred & Initialized W Mansoura'),
(116, 1, 10, 3, 0, '2019-10-18 01:29:31', 'Stock Transferred & Initialized W Mansoura'),
(118, 1, 11, 234234, 0, '2019-10-18 01:36:28', 'Stock Initialized'),
(119, 1, 12, 2, 0, '2019-10-18 01:37:15', 'Stock Transferred & Initialized W Mansoura'),
(120, 1, 11, -2, 0, '2019-10-18 01:37:16', 'Stock Transferred WID Mansoura'),
(121, 1, 13, 4234234, 0, '2019-10-18 04:40:46', 'Stock Initialized'),
(122, 1, 14, 3455, 0, '2019-10-18 04:56:25', 'Stock Initialized'),
(123, 1, 15, 24323423, 0, '2019-10-18 11:03:40', 'Stock Initialized'),
(124, 1, 16, 1, 0, '2019-10-18 11:56:25', 'Stock Transferred & Initialized W Main WareHouse'),
(125, 1, 15, -1, 0, '2019-10-18 11:56:25', 'Stock Transferred WID Main WareHouse'),
(126, 1, 16, 1, 0, '2019-10-18 11:58:37', 'Stock Transferred W Main WareHouse'),
(127, 1, 15, -1, 0, '2019-10-18 11:58:37', 'Stock Transferred WID Main WareHouse'),
(128, 1, 16, 1, 0, '2019-10-18 11:59:19', 'Stock Transferred W Main WareHouse'),
(129, 1, 15, -1, 0, '2019-10-18 11:59:19', 'Stock Transferred WID Main WareHouse'),
(130, 1, 16, 1, 0, '2019-10-18 11:59:42', 'Stock Transferred W Main WareHouse'),
(131, 1, 15, -1, 0, '2019-10-18 11:59:42', 'Stock Transferred WID Main WareHouse'),
(132, 1, 17, 1, 0, '2019-10-18 12:00:21', 'Stock Transferred & Initialized W hossam'),
(133, 1, 15, -1, 0, '2019-10-18 12:00:21', 'Stock Transferred WID hossam'),
(134, 1, 16, 2, 0, '2019-10-18 12:04:47', 'Stock Transferred W Main WareHouse'),
(135, 1, 15, -2, 0, '2019-10-18 12:04:47', 'Stock Transferred WID Main WareHouse'),
(136, 1, 18, 2, 0, '2019-10-18 12:04:56', 'Stock Transferred & Initialized W Kom El nor'),
(137, 1, 15, -2, 0, '2019-10-18 12:04:57', 'Stock Transferred WID Kom El nor'),
(138, 1, 19, 1, 0, '2019-10-18 12:06:30', 'Stock Transferred & Initialized W hossam'),
(139, 1, 14, -1, 0, '2019-10-18 12:06:30', 'Stock Transferred WID hossam'),
(140, 1, 20, 345345, 0, '2019-10-18 12:22:59', 'Stock Initialized'),
(141, 1, 21, 1, 0, '2019-10-18 12:24:04', 'Stock Transferred & Initialized W Kom El nor'),
(142, 1, 20, -1, 0, '2019-10-18 12:24:05', 'Stock Transferred WID Kom El nor'),
(143, 1, 22, 444, 0, '2019-10-19 00:52:59', 'Stock Initialized'),
(144, 1, 23, 55555, 0, '2019-10-19 00:56:32', 'Stock Initialized'),
(145, 1, 24, 34, 0, '2019-10-19 12:29:06', 'Stock Initialized'),
(146, 1, 25, 32321, 0, '2019-10-19 19:05:28', 'Stock Initialized'),
(147, 1, 26, 10, 0, '2019-10-19 19:09:08', 'Stock Transferred & Initialized W Kom El nor'),
(148, 1, 25, -10, 0, '2019-10-19 19:09:08', 'Stock Transferred WID Kom El nor'),
(149, 1, 27, 3, 0, '2019-10-19 19:15:00', 'Stock Transferred & Initialized W Mansoura'),
(150, 1, 25, -3, 0, '2019-10-19 19:15:00', 'Stock Transferred WID Mansoura'),
(151, 1, 27, 34, 0, '2019-10-19 19:16:14', 'Stock Transferred W Mansoura'),
(152, 1, 25, -34, 0, '2019-10-19 19:16:14', 'Stock Transferred WID Mansoura'),
(153, 1, 27, 34, 0, '2019-10-19 19:16:18', 'Stock Transferred W Mansoura'),
(154, 1, 25, -34, 0, '2019-10-19 19:16:18', 'Stock Transferred WID Mansoura'),
(155, 1, 25, 34, 0, '2019-10-19 19:16:30', 'Stock Transferred W Mansoura'),
(156, 1, 27, -34, 0, '2019-10-19 19:16:30', 'Stock Transferred WID Mansoura'),
(157, 1, 28, 3, 0, '2019-10-19 19:34:15', 'Stock Transferred & Initialized W hossam'),
(158, 1, 29, 3, 0, '2019-10-19 19:35:48', 'Stock Transferred & Initialized W hossam'),
(159, 1, 27, 2, 0, '2019-10-19 19:39:33', 'Stock Transferred W Mansoura'),
(160, 1, 25, -2, 0, '2019-10-19 19:39:33', 'Stock Transferred WID Mansoura'),
(161, 1, 30, 2, 0, '2019-10-19 19:57:56', 'Stock Transferred & Initialized W hossam'),
(162, 1, 31, 435345, 0, '2019-10-21 15:28:25', 'Stock Initialized'),
(163, 1, 32, 234234, 0, '2019-10-22 16:02:23', 'Stock Initialized'),
(164, 1, 33, 22342, 0, '2019-10-22 16:04:06', 'Stock Initialized'),
(165, 1, 34, 3432423, 0, '2019-10-23 17:27:35', 'Stock Initialized'),
(166, 1, 35, 34234, 0, '2019-10-23 19:04:25', 'Stock Initialized'),
(167, 1, 36, 3433, 0, '2019-10-23 19:05:48', 'Stock Initialized'),
(168, 1, 37, 23423423, 0, '2019-10-23 19:06:55', 'Stock Initialized'),
(169, 1, 38, 233223, 0, '2019-10-24 12:15:07', 'Stock Initialized'),
(170, 1, 39, 232, 0, '2019-10-24 12:17:21', 'Stock Initialized'),
(171, 1, 40, 3243, 0, '2019-10-24 12:20:36', 'Stock Initialized'),
(172, 1, 41, 343, 0, '2019-10-24 12:24:10', 'Stock Initialized'),
(173, 1, 42, 3443, 0, '2019-10-24 12:46:13', 'Stock Initialized'),
(174, 1, 43, 43434, 0, '2019-10-24 12:48:22', 'Stock Initialized'),
(175, 1, 44, 4444, 0, '2019-10-24 12:51:53', 'Stock Initialized'),
(176, 1, 45, 2233, 0, '2019-10-25 11:32:23', 'Stock Initialized'),
(177, 1, 46, 32423, 0, '2019-10-26 17:08:04', 'Stock Initialized'),
(178, 1, 47, 32423, 0, '2019-10-26 17:25:15', 'Stock Initialized'),
(179, 1, 48, 2343, 0, '2019-10-26 18:12:43', 'Stock Initialized'),
(180, 1, 49, 32432, 0, '2019-10-26 18:14:33', 'Stock Initialized'),
(181, 1, 50, 343, 0, '2019-10-26 18:17:59', 'Stock Initialized'),
(182, 1, 51, 342, 0, '2019-10-26 18:24:35', 'Stock Initialized'),
(183, 1, 52, 343, 0, '2019-10-26 19:58:13', 'Stock Initialized'),
(184, 1, 53, 234, 0, '2019-10-26 19:59:36', 'Stock Initialized'),
(185, 1, 54, 234, 0, '2019-10-26 22:34:31', 'Stock Initialized'),
(186, 1, 55, 2, 0, '2019-10-26 22:48:10', 'Stock Transferred & Initialized W hossam'),
(187, 1, 55, 2, 0, '2019-10-26 22:48:34', 'Stock Transferred W hossam'),
(188, 1, 54, -2, 0, '2019-10-26 22:48:35', 'Stock Transferred WID hossam'),
(189, 1, 55, 2, 0, '2019-10-26 22:49:48', 'Stock Transferred W hossam'),
(190, 1, 54, -2, 0, '2019-10-26 22:49:48', 'Stock Transferred WID hossam'),
(191, 1, 56, 345, 0, '2019-10-27 08:29:15', 'Stock Initialized'),
(192, 1, 57, 1, 0, '2019-10-27 08:34:42', 'Stock Transferred & Initialized W Sidi Gaber'),
(193, 1, 57, 2, 0, '2019-10-27 08:35:16', 'Stock Transferred W Sidi Gaber'),
(194, 1, 56, -2, 0, '2019-10-27 08:35:16', 'Stock Transferred WID Sidi Gaber'),
(195, 1, 58, 3, 0, '2019-10-27 08:43:32', 'Stock Transferred & Initialized W hossam'),
(196, 1, 59, 333, 0, '2019-10-27 08:45:16', 'Stock Initialized'),
(197, 1, 60, 4, 0, '2019-10-27 08:45:56', 'Stock Transferred & Initialized W Sidi Gaber'),
(198, 1, 61, 4, 0, '2019-10-27 08:56:26', 'Stock Transferred & Initialized W hossam'),
(199, 1, 62, 234, 0, '2019-10-27 08:58:34', 'Stock Initialized'),
(200, 1, 63, 3, 0, '2019-10-27 08:59:34', 'Stock Transferred & Initialized W hossam'),
(201, 1, 62, -3, 0, '2019-10-27 08:59:34', 'Stock Transferred WID hossam'),
(202, 1, 64, 3432, 0, '2019-10-27 18:08:18', 'Stock Initialized'),
(203, 1, 65, 4342, 0, '2019-10-27 19:10:07', 'Stock Initialized'),
(204, 1, 67, 444, 0, '2019-11-02 17:08:19', 'Stock Initialized'),
(205, 1, 68, 44, 0, '2019-11-02 19:07:13', 'Stock Transferred & Initialized W Main WareHouse'),
(206, 1, 59, -44, 0, '2019-11-02 19:07:14', 'Stock Transferred WID Main WareHouse'),
(207, 1, 69, 0, 0, '2019-11-02 21:29:23', 'Stock Transferred & Initialized W zofta'),
(208, 1, 67, 0, 0, '2019-11-02 21:29:23', 'Stock Transferred WID zofta'),
(209, 1, 70, 666, 0, '2019-11-04 22:52:59', 'Stock Initialized'),
(210, 1, 58, 1, 0, '2019-11-13 21:29:31', 'Stock Transferred W hossam'),
(211, 1, 56, -1, 0, '2019-11-13 21:29:31', 'Stock Transferred WID hossam'),
(212, 1, 58, 1, 0, '2019-11-13 21:33:12', 'Stock Transferred W hossam'),
(213, 1, 56, -1, 0, '2019-11-13 21:33:12', 'Stock Transferred WID hossam'),
(214, 1, 58, 1, 0, '2019-11-13 21:33:12', 'Stock Transferred W hossam'),
(215, 1, 56, -1, 0, '2019-11-13 21:33:13', 'Stock Transferred WID hossam'),
(216, 1, 61, 1, 0, '2019-11-13 21:33:13', 'Stock Transferred W hossam'),
(217, 1, 59, -1, 0, '2019-11-13 21:33:13', 'Stock Transferred WID hossam'),
(218, 1, 58, 1, 0, '2019-11-13 21:33:43', 'Stock Transferred W hossam'),
(219, 1, 56, -1, 0, '2019-11-13 21:33:43', 'Stock Transferred WID hossam'),
(220, 1, 58, 1, 0, '2019-11-13 21:33:43', 'Stock Transferred W hossam'),
(221, 1, 56, -1, 0, '2019-11-13 21:33:43', 'Stock Transferred WID hossam'),
(222, 1, 61, 1, 0, '2019-11-13 21:33:43', 'Stock Transferred W hossam'),
(223, 1, 59, -1, 0, '2019-11-13 21:33:43', 'Stock Transferred WID hossam'),
(224, 1, 58, 1, 0, '2019-11-13 21:34:37', 'Stock Transferred W hossam'),
(225, 1, 56, -1, 0, '2019-11-13 21:34:37', 'Stock Transferred WID hossam'),
(226, 1, 58, 1, 0, '2019-11-13 21:34:37', 'Stock Transferred W hossam'),
(227, 1, 56, -1, 0, '2019-11-13 21:34:37', 'Stock Transferred WID hossam'),
(228, 1, 61, 1, 0, '2019-11-13 21:34:37', 'Stock Transferred W hossam'),
(229, 1, 59, -1, 0, '2019-11-13 21:34:38', 'Stock Transferred WID hossam'),
(230, 1, 58, 1, 0, '2019-11-13 21:35:20', 'Stock Transferred W hossam'),
(231, 1, 56, -1, 0, '2019-11-13 21:35:20', 'Stock Transferred WID hossam'),
(232, 1, 58, 1, 0, '2019-11-13 21:35:20', 'Stock Transferred W hossam'),
(233, 1, 56, -1, 0, '2019-11-13 21:35:20', 'Stock Transferred WID hossam'),
(234, 1, 61, 1, 0, '2019-11-13 21:35:20', 'Stock Transferred W hossam'),
(235, 1, 59, -1, 0, '2019-11-13 21:35:20', 'Stock Transferred WID hossam'),
(236, 1, 58, 1, 0, '2019-11-13 21:36:06', 'Stock Transferred W hossam'),
(237, 1, 56, -1, 0, '2019-11-13 21:36:06', 'Stock Transferred WID hossam'),
(238, 1, 58, 1, 0, '2019-11-13 21:36:06', 'Stock Transferred W hossam'),
(239, 1, 56, -1, 0, '2019-11-13 21:36:07', 'Stock Transferred WID hossam'),
(240, 1, 61, 1, 0, '2019-11-13 21:36:07', 'Stock Transferred W hossam'),
(241, 1, 59, -1, 0, '2019-11-13 21:36:07', 'Stock Transferred WID hossam'),
(242, 1, 58, 1, 0, '2019-11-13 21:37:00', 'Stock Transferred W hossam'),
(243, 1, 56, -1, 0, '2019-11-13 21:37:00', 'Stock Transferred WID hossam'),
(244, 1, 58, 1, 0, '2019-11-13 21:37:00', 'Stock Transferred W hossam'),
(245, 1, 56, -1, 0, '2019-11-13 21:37:00', 'Stock Transferred WID hossam'),
(246, 1, 61, 1, 0, '2019-11-13 21:37:01', 'Stock Transferred W hossam'),
(247, 1, 59, -1, 0, '2019-11-13 21:37:01', 'Stock Transferred WID hossam'),
(248, 1, 58, 1, 0, '2019-11-13 21:38:56', 'Stock Transferred W hossam'),
(249, 1, 56, -1, 0, '2019-11-13 21:38:56', 'Stock Transferred WID hossam'),
(250, 1, 58, 1, 0, '2019-11-13 21:38:56', 'Stock Transferred W hossam'),
(251, 1, 56, -1, 0, '2019-11-13 21:38:56', 'Stock Transferred WID hossam'),
(252, 1, 61, 1, 0, '2019-11-13 21:38:56', 'Stock Transferred W hossam'),
(253, 1, 59, -1, 0, '2019-11-13 21:38:57', 'Stock Transferred WID hossam'),
(254, 1, 58, 1, 0, '2019-11-13 21:45:06', 'Stock Transferred W hossam'),
(255, 1, 56, -1, 0, '2019-11-13 21:45:06', 'Stock Transferred WID hossam'),
(256, 1, 58, 1, 0, '2019-11-13 21:45:06', 'Stock Transferred W hossam'),
(257, 1, 56, -1, 0, '2019-11-13 21:45:06', 'Stock Transferred WID hossam'),
(258, 1, 61, 1, 0, '2019-11-13 21:45:06', 'Stock Transferred W hossam'),
(259, 1, 59, -1, 0, '2019-11-13 21:45:06', 'Stock Transferred WID hossam'),
(260, 1, 58, 1, 0, '2019-11-13 21:46:59', 'Stock Transferred W hossam'),
(261, 1, 56, -1, 0, '2019-11-13 21:46:59', 'Stock Transferred WID hossam'),
(262, 1, 61, 1, 0, '2019-11-13 21:46:59', 'Stock Transferred W hossam'),
(263, 1, 59, -1, 0, '2019-11-13 21:46:59', 'Stock Transferred WID hossam'),
(264, 1, 71, 900, 0, '2019-11-13 21:50:25', 'Stock Initialized'),
(265, 1, 72, 999, 0, '2019-11-13 23:32:51', 'Stock Initialized'),
(266, 1, 73, 9009, 0, '2019-11-14 00:35:02', 'Stock Initialized'),
(267, 1, 74, 900, 0, '2019-11-14 00:37:13', 'Stock Initialized'),
(268, 1, 75, 90, 0, '2019-11-14 00:38:29', 'Stock Initialized'),
(269, 1, 76, 34324, 0, '2019-11-14 13:23:56', 'Stock Initialized'),
(270, 1, 77, 4534, 0, '2019-11-14 14:16:06', 'Stock Initialized'),
(271, 1, 78, 4234, 0, '2019-11-14 14:18:07', 'Stock Initialized'),
(272, 1, 79, 90, 0, '2019-11-14 14:20:20', 'Stock Initialized'),
(273, 1, 80, 90, 0, '2019-11-14 14:22:53', 'Stock Initialized'),
(274, 1, 81, 8989, 0, '2019-11-14 14:37:01', 'Stock Initialized'),
(275, 1, 82, 9000, 0, '2019-11-14 14:38:20', 'Stock Initialized'),
(276, 1, 83, 545, 0, '2019-11-14 17:05:32', 'Stock Initialized'),
(277, 1, 84, 30, 0, '2019-11-14 18:03:56', 'Stock Initialized'),
(278, 1, 85, 30, 0, '2019-11-14 18:04:25', 'Stock Initialized'),
(279, 1, 86, 4343, 0, '2019-11-14 18:06:58', 'Stock Initialized'),
(280, 1, 87, 344343, 0, '2019-11-14 18:28:14', 'Stock Initialized'),
(281, 1, 88, 3443, 0, '2019-11-14 18:31:08', 'Stock Initialized'),
(282, 1, 89, 3443, 0, '2019-11-14 19:13:37', 'Stock Initialized');

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_notes`
--

CREATE TABLE `geopos_notes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `cdate` date NOT NULL,
  `last_edit` datetime NOT NULL DEFAULT current_timestamp(),
  `cid` int(11) NOT NULL DEFAULT 0,
  `fid` int(11) NOT NULL DEFAULT 0,
  `rid` int(11) NOT NULL DEFAULT 0,
  `ntype` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_pms`
--

CREATE TABLE `geopos_pms` (
  `id` int(11) UNSIGNED NOT NULL,
  `sender_id` int(11) UNSIGNED NOT NULL,
  `receiver_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `date_sent` datetime DEFAULT NULL,
  `date_read` datetime DEFAULT NULL,
  `pm_deleted_sender` int(1) NOT NULL,
  `pm_deleted_receiver` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_premissions`
--

CREATE TABLE `geopos_premissions` (
  `id` int(11) NOT NULL,
  `module` enum('Sales','Stock','Crm','Project','Accounts','Miscellaneous','Employees','Assign Project','Customer Profile','Reports','Delete','Products Variations','Variations Variables') NOT NULL,
  `r_1` int(1) NOT NULL,
  `r_2` int(1) NOT NULL,
  `r_3` int(1) NOT NULL,
  `r_4` int(1) NOT NULL,
  `r_5` int(1) NOT NULL,
  `r_6` int(1) NOT NULL,
  `r_7` int(1) NOT NULL,
  `r_8` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_premissions`
--

INSERT INTO `geopos_premissions` (`id`, `module`, `r_1`, `r_2`, `r_3`, `r_4`, `r_5`, `r_6`, `r_7`, `r_8`) VALUES
(1, 'Sales', 0, 1, 1, 1, 1, 0, 0, 0),
(2, 'Stock', 1, 0, 1, 1, 1, 0, 0, 0),
(3, 'Crm', 0, 0, 1, 1, 1, 0, 0, 0),
(4, 'Project', 0, 0, 0, 1, 1, 1, 0, 0),
(5, 'Accounts', 0, 0, 0, 1, 1, 0, 0, 0),
(6, 'Miscellaneous', 0, 0, 0, 1, 1, 0, 0, 0),
(7, 'Assign Project', 0, 1, 0, 0, 1, 0, 0, 0),
(8, 'Customer Profile', 0, 0, 0, 0, 1, 0, 0, 0),
(9, 'Employees', 0, 0, 0, 0, 1, 0, 0, 0),
(10, 'Reports', 1, 1, 0, 0, 0, 0, 0, 0),
(11, 'Delete', 1, 1, 1, 1, 1, 1, 0, 1),
(12, 'Products Variations', 1, 1, 0, 0, 0, 0, 0, 1),
(13, 'Variations Variables', 1, 1, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_products`
--

CREATE TABLE `geopos_products` (
  `pid` int(11) NOT NULL,
  `pcat` int(3) NOT NULL DEFAULT 1,
  `warehouse` int(11) NOT NULL DEFAULT 1,
  `product_name` varchar(80) NOT NULL,
  `product_code` varchar(30) DEFAULT NULL,
  `product_price` decimal(16,2) DEFAULT 0.00,
  `fproduct_price` decimal(16,2) DEFAULT 0.00,
  `taxrate` decimal(16,2) DEFAULT 0.00,
  `disrate` decimal(16,2) DEFAULT 0.00,
  `qty` decimal(10,2) NOT NULL,
  `product_des` text DEFAULT NULL,
  `alert` int(11) DEFAULT NULL,
  `unit` varchar(4) DEFAULT NULL,
  `image` varchar(120) DEFAULT 'default.png',
  `barcode` varchar(255) DEFAULT NULL,
  `extra_barcodes` varchar(255) NOT NULL DEFAULT '',
  `merge` int(2) NOT NULL,
  `sub` int(11) NOT NULL,
  `vb` int(11) NOT NULL,
  `expiry` date DEFAULT NULL,
  `code_type` varchar(8) DEFAULT 'EAN13',
  `sub_id` int(11) DEFAULT 0,
  `b_id` int(11) DEFAULT 0,
  `related_product` text DEFAULT NULL,
  `favorite` int(11) DEFAULT 0,
  `wholesale` int(11) DEFAULT 0,
  `product_status` int(11) DEFAULT NULL,
  `bundle_products` text DEFAULT NULL,
  `bundle_discount` varchar(255) NOT NULL DEFAULT '',
  `search_meta` varchar(255) NOT NULL DEFAULT '',
  `auto_prices` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_products`
--

INSERT INTO `geopos_products` (`pid`, `pcat`, `warehouse`, `product_name`, `product_code`, `product_price`, `fproduct_price`, `taxrate`, `disrate`, `qty`, `product_des`, `alert`, `unit`, `image`, `barcode`, `extra_barcodes`, `merge`, `sub`, `vb`, `expiry`, `code_type`, `sub_id`, `b_id`, `related_product`, `favorite`, `wholesale`, `product_status`, `bundle_products`, `bundle_discount`, `search_meta`, `auto_prices`) VALUES
(54, 9, 5, 'p1', 'p1', '43.00', '324.00', '0.00', '0.00', '938.00', '', 0, '', 'default.png', '554227069259', '', 0, 0, 0, '2014-05-03', 'EAN13', 0, 0, NULL, 0, 234, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p1 , p1 ,  , parent cat  , Sidi Gaber , ', 0),
(55, 9, 2, 'p1', 'p1', '43.00', '324.00', '0.00', '0.00', '6.00', '', 0, '', 'default.png', '554227069259', '', 2, 54, 2, NULL, 'EAN13', 0, 0, NULL, 0, 234, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p1 , p1 ,  , parent cat  , Sidi Gaber , ', 0),
(56, 5, 1, 'p2', 'p2', '480.63', '433.00', '0.00', '0.00', '323.00', '', 0, '', 'default.png', '176689668845', '', 0, 0, 0, '2014-05-04', 'EAN13', 0, 0, NULL, 0, 498, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p2 , p2 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , ', 1),
(57, 5, 5, 'p2', 'p2', '0.00', '433.00', '0.00', '0.00', '3.00', '', 0, '', 'default.png', '176689668845', '', 2, 56, 5, NULL, 'EAN13', 0, 0, NULL, 0, NULL, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p2 , p2 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , ', 0),
(58, 5, 2, 'p2', 'p2', '0.00', '433.00', '0.00', '0.00', '21.00', '', 0, '', 'default.png', '176689668845', '', 2, 56, 2, NULL, 'EAN13', 0, 0, NULL, 0, NULL, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p2 , p2 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , ', 0),
(59, 5, 1, 'p3', 'p3', '222.00', '333.00', '0.00', '0.00', '276.00', '', 0, '', '9882791.jpg', '669946472535', '', 0, 0, 0, '2014-05-04', 'EAN13', 0, 0, '[\"56\"]', 0, 444, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p3 , p3 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , hp , 89809089 , ewf eedwee erfe , opppppp 2 , p2 , ', 0),
(60, 5, 5, 'p3', 'p3', '222.00', '333.00', '0.00', '0.00', '4.00', '', 0, '', '9882791.jpg', '669946472535', '', 2, 59, 5, NULL, 'EAN13', 0, 0, '[\"56\"]', 0, 444, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p3 , p3 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , hp , 89809089 , ewf eedwee erfe , opppppp 2 , p2 , ', 0),
(61, 5, 2, 'p3', 'p3', '222.00', '333.00', '0.00', '0.00', '13.00', '', 0, '', '9882791.jpg', '669946472535', '', 2, 59, 2, NULL, 'EAN13', 0, 0, '[\"56\"]', 0, 444, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p3 , p3 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , hp , 89809089 , ewf eedwee erfe , opppppp 2 , p2 , ', 0),
(62, 9, 5, 'p4', 'p4', '3434.00', '23432.00', '0.00', '0.00', '231.00', '', 0, '', '2468161.jpg', '319678816445', '', 0, 0, 0, NULL, 'EAN13', 0, 0, '[\"57\",\"54\"]', 0, 234, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p4 , p4 ,  , parent cat  , Sidi Gaber , dell , 0890809 , f fds dds , opppppp 1 , p2 , p1 , ', 0),
(63, 9, 2, 'p4', 'p4', '3434.00', '23432.00', '0.00', '0.00', '3.00', '', 0, '', '2468161.jpg', '319678816445', '', 2, 62, 2, NULL, 'EAN13', 0, 0, '[\"57\",\"54\"]', 0, 234, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p4 , p4 ,  , parent cat  , Sidi Gaber , dell , 0890809 , f fds dds , opppppp 1 , p2 , p1 , ', 0),
(64, 9, 10, 'p33', 'p33', '0.00', '10.00', '0.00', '0.00', '1.00', '', 0, '', 'default.png', '605142469662', '', 0, 0, 0, '2014-05-04', 'EAN13', 0, 0, '[\"62\"]', 0, NULL, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p33 , p33 ,  , parent cat  , zofta , hp , trfr3454v54v5 , ', 1),
(65, 9, 1, 'p44', 'p44', '2345.00', '150.00', '0.00', '0.00', '149.00', '', 0, '', 'default.png', '325418563505', '', 0, 0, 0, '2014-05-04', 'EAN13', 0, 0, '[\"56\",\"59\",\"64\"]', 0, 34535, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p44 , p44 ,  , parent cat  , Main WareHouse , p2 , p3 , ', 0),
(67, 5, 1, 'p5', 'p5', '111.00', '333.00', '0.00', '0.00', '444.00', '', 0, '', 'default.png', '159896232232', '', 0, 0, 0, NULL, 'EAN13', 7, 0, NULL, 0, 222, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p5 , p5 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , ', 0),
(68, 5, 1, 'p3', 'p3', '222.00', '333.00', '0.00', '0.00', '43.00', '', 0, '', '9882791.jpg', '669946472535', '', 2, 59, 1, NULL, 'EAN13', 0, 0, '[\"56\"]', 0, 444, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p3 , p3 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , hp , 89809089 , ewf eedwee erfe , opppppp 2 , p2 , ', 0),
(69, 5, 10, 'p5', 'p5', '111.00', '333.00', '0.00', '0.00', '0.00', '', 0, '', 'default.png', '159896232232', '', 2, 67, 10, NULL, 'EAN13', 0, 0, NULL, 0, 222, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p5 , p5 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , ', 0),
(70, 9, 2, 'p6', 'p6', '788.00', '666.00', '0.00', '0.00', '4670.00', 'desy', 0, '', 'default.png', '358745012612', '', 0, 0, 0, '2014-04-19', 'EAN13', 10, 0, NULL, 0, 799, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p6 , p6 ,  , parent cat  , hossam , ', 0),
(71, 9, 1, 'p7 bundle', 'p7 bundle', '2567.00', '0.00', '0.00', '0.00', '900.00', '', 0, '', 'default.png', '513558359746', '', 0, 0, 0, '2014-05-06', 'EAN13', 10, 0, NULL, 0, 34979, 1, '[\"56\",\"65\",\"68\"]', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p7 bundle , p7 bundle ,  , parent cat  , Main WareHouse , ', 0),
(72, 9, 1, 'p9', NULL, '111.00', '88.00', '0.00', '0.00', '999.00', '', 0, '', 'default.png', '806469115017', '', 0, 0, 0, '2014-05-07', '  EAN13', 10, NULL, 'null', 0, 99, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p9  parent cat   Main WareHouse opppppp 1 89809089 hp ', 0),
(73, 9, 10, 'p10', 'p10', '100.00', '80.00', '0.00', '0.00', '9009.00', '', 0, '', 'default.png', '140942045131', '', 0, 0, 0, '2014-05-08', 'EAN13', 0, 0, NULL, 0, 90, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p10 , p10 ,  , parent cat  , zofta , ', 0),
(74, 9, 1, 'p11', 'p11', '100.00', '80.00', '0.00', '0.00', '900.00', '', 0, '', 'default.png', '103259901066', '', 0, 0, 0, '2014-05-08', 'EAN13', 0, 0, NULL, 0, 90, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p11 , p11 ,  , parent cat  , Main WareHouse , ', 0),
(75, 9, 1, 'p12', 'p12', '100.00', '80.00', '0.00', '0.00', '90.00', '', 0, '', 'default.png', '736256982871', '', 0, 0, 0, '2014-05-08', 'EAN13', 0, 0, NULL, 0, 90, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p12 , p12 ,  , parent cat  , Main WareHouse , ', 0),
(76, 9, 1, 'p13', 'p13', '122.00', '82.00', '0.00', '0.00', '34324.00', '', 0, '', 'default.png', '313142492969', '', 0, 0, 0, '2014-05-08', '    EAN1', 0, NULL, 'null', 0, 92, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p13 p13 parent cat   Main WareHouse opppppp 1 89809089 hp ', 0),
(77, 5, 1, 'p14', 'p14', '111.00', '109.00', '0.00', '0.00', '4534.00', '', 0, '', 'default.png', '346322567127', '', 0, 0, 0, '2014-05-08', 'EAN13', 0, 0, NULL, 0, 110, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p14 , p14 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , ', 0),
(78, 5, 1, 'p15', 'p15', '90.00', '90.00', '0.00', '0.00', '4234.00', '', 0, '', 'default.png', '549196709811', '', 0, 0, 0, '2014-05-08', 'EAN13', 0, 0, NULL, 0, 90, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p15 , p15 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , ', 0),
(79, 1, 1, 'p16', 'p16', '90.00', '90.00', '0.00', '0.00', '90.00', '', 0, '', 'default.png', '452520423272', '', 0, 0, 0, '2014-05-08', 'EAN13', 0, 0, NULL, 0, 90, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p16 , p16 ,  , Generalllll , Main WareHouse , ', 0),
(80, 1, 1, 'p17', 'p17', '90.00', '90.00', '0.00', '0.00', '90.00', '', 0, '', 'default.png', '315437224574', '', 0, 0, 0, '2014-05-08', 'EAN13', 0, 0, NULL, 0, 90, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p17 , p17 ,  , Generalllll , Main WareHouse , ', 0),
(81, 1, 2, 'p18', 'p18', '90.00', '90.00', '0.00', '0.00', '8989.00', '', 0, '', 'default.png', '729972059270', '', 0, 0, 0, '2014-05-08', 'EAN13', 0, 0, NULL, 0, 90, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p18 , p18 ,  , Generalllll , hossam , ', 0),
(82, 9, 2, 'p19', 'p19', '90.00', '90.00', '0.00', '0.00', '9000.00', '', 0, '', 'default.png', '789119412262', '', 0, 0, 0, '2014-05-08', 'EAN13', 0, 0, NULL, 0, 90, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p19 , p19 ,  , parent cat  , hossam , ', 0),
(83, 5, 1, 'p20', 'p20', '110.00', '100.00', '0.00', '0.00', '545.00', '', 0, '', 'default.png', '769710388302', '', 0, 0, 0, '2014-05-08', 'EAN13', 0, 0, NULL, 0, 120, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p20 , p20 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , ', 0),
(84, 1, 1, 'p21', 'p21', '20.00', '230.00', '0.00', '0.00', '30.00', '', 0, '', 'default.png', '465536258818', '', 0, 0, 0, '2014-05-08', 'EAN13', 0, 0, NULL, 0, 20, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p21 , p21 ,  , Generalllll , Main WareHouse , ', 0),
(85, 1, 1, 'p22', 'p22', '230.00', '230.00', '0.00', '0.00', '30.00', '', 0, '', 'default.png', '907113050336', '', 0, 0, 0, '2014-05-08', 'EAN13', 0, 0, NULL, 0, 230, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p22 , p22 ,  , Generalllll , Main WareHouse , ', 1),
(86, 5, 1, 'p23', 'p23', '111.00', '100.00', '0.00', '0.00', '4343.00', '', 0, '', 'default.png', '399644193487', '', 0, 0, 0, '2014-05-08', 'EAN13', 0, 0, NULL, 0, 115, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p23 , p23 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , ', 1),
(87, 5, 1, 'p24', 'p24', '111.00', '100.00', '0.00', '0.00', '344343.00', '', 0, '', 'default.png', '147361217977', '', 0, 0, 0, '2014-05-08', 'EAN13', 0, 0, NULL, 0, 115, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p24 , p24 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , ', 1),
(88, 5, 1, 'p25', 'p25', '0.00', '100.00', '0.00', '0.00', '3443.00', '', 0, '', 'default.png', '605513294730', '', 0, 0, 0, '2014-05-08', 'EAN13', 8, 0, NULL, 0, NULL, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p25 , p25 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , ', 1),
(89, 5, 1, 'p26', 'p26', '106.00', '100.00', '0.00', '0.00', '3443.00', '', 0, '', 'default.png', '564890371839', '', 0, 0, 0, '2014-05-08', 'EAN13', 8, 0, NULL, 0, 111, 1, 'null', '{\"bundle_p_discount_amount\":\"\\\"0\\\"\",\"bundle_p_discount_factor\":\"\\\"percent\\\"\",\"bundle_w_discount_amount\":\"\\\"0\\\"\",\"bundle_w_discount_factor\":\"\\\"percent\\\"\"}', 'p26 , p26 ,  , mobiles with Sale R12 W19456666555 , Main WareHouse , ', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_products_prices_history`
--

CREATE TABLE `geopos_products_prices_history` (
  `change_id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `fproduct_price` int(11) DEFAULT NULL,
  `wholesale` int(11) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_products_prices_history`
--

INSERT INTO `geopos_products_prices_history` (`change_id`, `pid`, `product_price`, `fproduct_price`, `wholesale`, `date`) VALUES
(9, 100, 200, 300, 400, '2019-10-24 00:00:00'),
(10, 100, 201, 301, 401, '2019-10-24 00:00:00'),
(12, 100, 202, NULL, 402, '2019-10-24 00:00:00'),
(13, 100, 203, NULL, NULL, '2019-10-24 00:00:00'),
(14, 233, 2147483647, 2147483647, 2147483647, '2019-10-24 00:00:00'),
(15, 43, 2147483647, 2147483647, 2147483647, '2019-10-24 00:00:00'),
(16, 44, 1111, 3333, 2222, '2019-10-24 00:00:00'),
(17, 44, 1111, 3333, 2222, '2019-10-24 00:00:00'),
(18, 44, 2147483647, 3333, 0, '2019-10-24 00:00:00'),
(19, 44, 9090, 3333, 0, '2019-10-24 00:00:00'),
(20, 44, 9090, 3333, 0, '2019-10-24 00:00:00'),
(22, 44, 1111, NULL, 2222, '2019-10-24 17:50:59'),
(23, 45, 333, 3333, 3333, '2019-10-25 13:32:23'),
(24, 46, 33333, 4332, 32434, '2019-10-26 19:08:04'),
(25, 47, 33333, 4332, 32434, '2019-10-26 19:25:15'),
(26, 48, 33334, 234324, 3443, '2019-10-26 20:12:43'),
(27, 49, 34, 34, 3243, '2019-10-26 20:14:33'),
(28, 50, 43, 343, 343, '2019-10-26 20:17:59'),
(29, 51, 34, 2342, 234, '2019-10-26 20:24:35'),
(30, 52, 343, 34343, 343, '2019-10-26 21:58:13'),
(31, 53, 3432, 234, 234, '2019-10-26 21:59:37'),
(32, 54, 43, 324, 234, '2019-10-27 00:34:31'),
(33, 56, 0, 433, NULL, '2019-10-27 10:29:15'),
(34, 59, 222, 333, 444, '2019-10-27 10:45:16'),
(35, 62, 3434, 23432, 234, '2019-10-27 10:58:34'),
(36, 64, 0, 1000, NULL, '2019-10-27 20:08:18'),
(37, 65, 2345, 34345, 34535, '2019-10-27 21:10:07'),
(38, 67, 111, 333, 222, '2019-11-02 19:08:19'),
(39, 70, 900, 555, 777, '2019-11-05 00:52:59'),
(40, 71, 2567, 0, 34979, '2019-11-13 23:50:25'),
(41, 72, 111, 88, 99, '2019-11-14 01:46:30'),
(42, 76, NULL, NULL, 99, '2019-11-14 15:37:03'),
(43, 76, 111, NULL, NULL, '2019-11-14 15:37:53'),
(44, 76, NULL, 88, NULL, '2019-11-14 15:38:22'),
(45, 76, 122, 82, 92, '2019-11-14 16:09:06'),
(46, 79, 90, 90, 90, '2019-11-14 16:20:20'),
(47, 80, 90, 90, 90, '2019-11-14 16:22:53'),
(48, 82, 90, 90, 90, '2019-11-14 16:38:20'),
(49, 83, 110, 100, 120, '2019-11-14 19:05:32'),
(50, 84, 20, 230, 20, '2019-11-14 20:03:56'),
(51, 85, 230, 230, 230, '2019-11-14 20:04:25'),
(52, 86, 110, 100, 120, '2019-11-14 20:06:59'),
(53, 87, 0, 100, NULL, '2019-11-14 20:28:14'),
(54, 88, 0, 100, NULL, '2019-11-14 20:31:08'),
(55, 89, 106, 100, 111, '2019-11-14 21:13:37');

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_product_cat`
--

CREATE TABLE `geopos_product_cat` (
  `id` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `extra` varchar(255) DEFAULT NULL,
  `c_type` int(2) DEFAULT 0,
  `rel_id` int(11) DEFAULT 0,
  `retail_discount` decimal(16,2) NOT NULL DEFAULT 0.00,
  `wholesale_discount` decimal(16,2) NOT NULL DEFAULT 0.00,
  `update_prices` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_product_cat`
--

INSERT INTO `geopos_product_cat` (`id`, `title`, `extra`, `c_type`, `rel_id`, `retail_discount`, `wholesale_discount`, `update_prices`) VALUES
(1, 'Generalllll', 'General Cat', 0, 0, '0.00', '0.00', 1),
(2, 'new category', ' ', 0, 0, '0.00', '0.00', 0),
(3, 'offer 10%', 'offer 10%', 0, 0, '10.00', '10.00', 0),
(4, 'Sub category3% of offer10%', 'ddsddsf', 1, 3, '3.00', '3.00', 0),
(5, 'mobiles with Sale R12 W19456666555', 'mobiles with Sale', 0, 0, '11.00', '15.00', 1),
(7, 'mobiles with Sale R7 W12', 'mobiles with Sale R7 W12', 1, 5, '7.00', '12.00', 0),
(8, 'mobiles with Sale R6 W11', 'mobiles with Sale R6 W11', 1, 5, '6.00', '11.00', 0),
(9, 'parent cat ', 'uyuuiuio', 0, 0, '15.00', '10.00', 0),
(10, 'child', 'yuryuy', 1, 9, '12.00', '8.00', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_projects`
--

CREATE TABLE `geopos_projects` (
  `id` int(11) NOT NULL,
  `p_id` varchar(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` enum('Waiting','Pending','Terminated','Finished','Progress') NOT NULL DEFAULT 'Pending',
  `priority` enum('Low','Medium','High','Urgent') NOT NULL DEFAULT 'Medium',
  `progress` int(3) NOT NULL,
  `cid` int(11) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `phase` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `worth` decimal(16,2) NOT NULL DEFAULT 0.00,
  `ptype` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_project_meta`
--

CREATE TABLE `geopos_project_meta` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `meta_key` int(11) NOT NULL,
  `meta_data` varchar(200) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `key3` varchar(20) DEFAULT NULL,
  `key4` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_promo`
--

CREATE TABLE `geopos_promo` (
  `id` int(11) NOT NULL,
  `code` varchar(15) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `valid` date NOT NULL,
  `active` int(1) NOT NULL,
  `note` varchar(100) NOT NULL,
  `reflect` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `location` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_purchase`
--

CREATE TABLE `geopos_purchase` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `invoicedate` date NOT NULL,
  `invoiceduedate` date NOT NULL,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `shipping` decimal(16,2) DEFAULT 0.00,
  `ship_tax` decimal(16,2) DEFAULT NULL,
  `ship_tax_type` enum('incl','excl','off') DEFAULT 'off',
  `discount` decimal(16,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `total` decimal(16,2) DEFAULT 0.00,
  `pmethod` varchar(14) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `status` enum('paid','due','canceled','partial') DEFAULT 'due',
  `csd` int(5) NOT NULL DEFAULT 0,
  `eid` int(4) NOT NULL,
  `pamnt` decimal(16,2) DEFAULT 0.00,
  `items` decimal(10,2) NOT NULL,
  `taxstatus` enum('yes','no','incl','cgst','igst') DEFAULT 'yes',
  `discstatus` tinyint(1) NOT NULL,
  `format_discount` enum('%','flat','b_p','bflat') DEFAULT NULL,
  `refer` varchar(20) DEFAULT NULL,
  `term` int(3) NOT NULL,
  `loc` int(4) NOT NULL,
  `multi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_purchase`
--

INSERT INTO `geopos_purchase` (`id`, `tid`, `invoicedate`, `invoiceduedate`, `subtotal`, `shipping`, `ship_tax`, `ship_tax_type`, `discount`, `tax`, `total`, `pmethod`, `notes`, `status`, `csd`, `eid`, `pamnt`, `items`, `taxstatus`, `discstatus`, `format_discount`, `refer`, `term`, `loc`, `multi`) VALUES
(59, 1001, '2019-11-12', '2019-11-12', '369963.00', '0.00', '0.00', 'incl', '0.00', '0.00', '369963.00', NULL, '', 'due', 2, 11, '0.00', '3333.00', 'yes', 1, '%', '', 1, 3, NULL),
(60, 1002, '2019-11-12', '2019-11-12', '0.00', '0.00', '0.00', 'incl', '0.00', '0.00', '0.00', NULL, '', 'due', 2, 11, '0.00', '1.00', 'yes', 1, '%', '', 1, 3, NULL),
(61, 1003, '2019-11-12', '2019-11-12', '999.00', '0.00', '0.00', 'incl', '0.00', '0.00', '999.00', NULL, '', 'due', 2, 11, '0.00', '1.00', 'yes', 1, '%', '', 1, 3, NULL),
(62, 1004, '2019-11-12', '2019-11-12', '1814295.00', '0.00', '0.00', 'incl', '0.00', '0.00', '1814295.00', NULL, '', 'due', 2, 11, '0.00', '2335.00', 'yes', 1, '%', '', 1, 3, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_purchase_items`
--

CREATE TABLE `geopos_purchase_items` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `product` varchar(255) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `qty` decimal(10,2) NOT NULL,
  `price` decimal(16,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `discount` decimal(16,2) DEFAULT 0.00,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `totaltax` decimal(16,2) DEFAULT 0.00,
  `totaldiscount` decimal(16,2) DEFAULT 0.00,
  `product_des` text DEFAULT NULL,
  `unit` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_purchase_items`
--

INSERT INTO `geopos_purchase_items` (`id`, `tid`, `pid`, `product`, `code`, `qty`, `price`, `tax`, `discount`, `subtotal`, `totaltax`, `totaldiscount`, `product_des`, `unit`) VALUES
(47, 59, 70, 'p6', 'p6', '3333.00', '111.00', '0.00', '0.00', '369963.00', '0.00', '0.00', '', ''),
(48, 60, 70, 'p6', 'p6', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', ''),
(49, 61, 70, 'p6', 'p6', '1.00', '999.00', '0.00', '0.00', '999.00', '0.00', '0.00', '', ''),
(50, 62, 70, 'p6', 'p6', '2335.00', '777.00', '0.00', '0.00', '1814295.00', '0.00', '0.00', 'desy', '');

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_quotes`
--

CREATE TABLE `geopos_quotes` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `invoicedate` date NOT NULL,
  `invoiceduedate` date NOT NULL,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `shipping` decimal(16,2) DEFAULT 0.00,
  `ship_tax` decimal(16,2) DEFAULT NULL,
  `ship_tax_type` enum('incl','excl','off') DEFAULT 'off',
  `discount` decimal(16,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `total` decimal(16,2) DEFAULT 0.00,
  `pmethod` varchar(14) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `status` enum('pending','accepted','rejected') DEFAULT 'pending',
  `csd` int(5) NOT NULL DEFAULT 0,
  `eid` int(4) NOT NULL,
  `pamnt` decimal(16,2) NOT NULL,
  `items` decimal(10,2) NOT NULL,
  `taxstatus` enum('yes','no','incl','cgst','igst') DEFAULT 'yes',
  `discstatus` tinyint(1) NOT NULL,
  `format_discount` enum('%','flat','b_p','bflat') DEFAULT '%',
  `refer` varchar(20) DEFAULT NULL,
  `term` int(3) NOT NULL,
  `proposal` text DEFAULT NULL,
  `multi` int(4) DEFAULT NULL,
  `loc` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_quotes_items`
--

CREATE TABLE `geopos_quotes_items` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `product` varchar(255) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `qty` decimal(10,0) NOT NULL,
  `price` decimal(16,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `discount` decimal(16,2) DEFAULT 0.00,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `totaltax` decimal(16,2) DEFAULT 0.00,
  `totaldiscount` decimal(16,2) DEFAULT 0.00,
  `product_des` text DEFAULT NULL,
  `unit` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_register`
--

CREATE TABLE `geopos_register` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `o_date` datetime NOT NULL,
  `c_date` datetime NOT NULL,
  `cash` decimal(16,2) NOT NULL,
  `card` decimal(16,2) NOT NULL,
  `bank` decimal(16,2) NOT NULL,
  `cheque` decimal(16,2) NOT NULL,
  `r_change` decimal(16,2) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_register`
--

INSERT INTO `geopos_register` (`id`, `uid`, `o_date`, `c_date`, `cash`, `card`, `bank`, `cheque`, `r_change`, `active`) VALUES
(1, 11, '2019-08-26 17:43:45', '2019-10-08 03:50:15', '2281358595.65', '0.00', '0.00', '0.00', '0.00', 0),
(2, 11, '2019-10-09 21:20:32', '0000-00-00 00:00:00', '336369.39', '0.00', '0.00', '0.00', '0.00', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_reports`
--

CREATE TABLE `geopos_reports` (
  `id` int(11) NOT NULL,
  `month` varchar(10) DEFAULT NULL,
  `year` int(4) NOT NULL,
  `invoices` int(11) NOT NULL,
  `sales` decimal(16,2) DEFAULT 0.00,
  `items` decimal(10,2) NOT NULL,
  `income` decimal(16,2) DEFAULT 0.00,
  `expense` decimal(16,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_restkeys`
--

CREATE TABLE `geopos_restkeys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) DEFAULT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_smtp`
--

CREATE TABLE `geopos_smtp` (
  `id` int(11) NOT NULL,
  `host` varchar(100) NOT NULL,
  `port` int(11) NOT NULL,
  `auth` enum('true','false') NOT NULL,
  `auth_type` enum('none','tls','ssl') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_smtp`
--

INSERT INTO `geopos_smtp` (`id`, `host`, `port`, `auth`, `auth_type`, `username`, `password`, `sender`) VALUES
(1, 'smtp.com', 587, 'true', 'none', 'support@example.com', '123456', 'support@example.com');

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_stock_r`
--

CREATE TABLE `geopos_stock_r` (
  `id` int(11) NOT NULL,
  `tid` int(8) NOT NULL,
  `invoicedate` date NOT NULL,
  `invoiceduedate` date NOT NULL,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `shipping` decimal(16,2) DEFAULT 0.00,
  `ship_tax` decimal(16,2) DEFAULT NULL,
  `ship_tax_type` enum('incl','excl','off') DEFAULT 'off',
  `discount` decimal(16,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `total` decimal(16,2) DEFAULT 0.00,
  `pmethod` varchar(14) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `status` enum('pending','accepted','rejected','partial','canceled') DEFAULT 'pending',
  `csd` int(5) NOT NULL DEFAULT 0,
  `eid` int(4) NOT NULL,
  `pamnt` decimal(16,2) DEFAULT 0.00,
  `items` decimal(10,0) NOT NULL,
  `taxstatus` enum('yes','no','incl','cgst','igst') DEFAULT 'yes',
  `discstatus` tinyint(1) NOT NULL,
  `format_discount` enum('%','flat','bflat','b_p') DEFAULT NULL,
  `refer` varchar(20) DEFAULT NULL,
  `term` int(3) NOT NULL,
  `loc` int(4) NOT NULL,
  `i_class` int(1) NOT NULL DEFAULT 0,
  `multi` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_stock_r_items`
--

CREATE TABLE `geopos_stock_r_items` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `product` varchar(255) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `qty` decimal(10,2) NOT NULL,
  `price` decimal(16,2) DEFAULT 0.00,
  `tax` decimal(16,2) DEFAULT 0.00,
  `discount` decimal(16,2) DEFAULT 0.00,
  `subtotal` decimal(16,2) DEFAULT 0.00,
  `totaltax` decimal(16,2) DEFAULT 0.00,
  `totaldiscount` decimal(16,2) DEFAULT 0.00,
  `product_des` text DEFAULT NULL,
  `unit` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_supplier`
--

CREATE TABLE `geopos_supplier` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `region` varchar(30) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `postbox` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `picture` varchar(100) NOT NULL DEFAULT 'example.png',
  `gid` int(5) NOT NULL DEFAULT 1,
  `company` varchar(100) DEFAULT NULL,
  `taxid` varchar(100) DEFAULT NULL,
  `loc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_supplier`
--

INSERT INTO `geopos_supplier` (`id`, `name`, `phone`, `address`, `city`, `region`, `country`, `postbox`, `email`, `picture`, `gid`, `company`, `taxid`, `loc`) VALUES
(1, 'sup 1', '9080989809', '', '', '', '', '', 'm.m@yahoo.com', 'example.png', 1, NULL, '', 1),
(2, 'sup2', '435453', 'werfwe', '', '', '', '', 'table@table.com', 'example.png', 1, NULL, '', 3);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_system`
--

CREATE TABLE `geopos_system` (
  `id` int(1) NOT NULL,
  `cname` char(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(30) NOT NULL,
  `region` varchar(40) NOT NULL,
  `country` varchar(30) NOT NULL,
  `postbox` varchar(15) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `taxid` varchar(20) NOT NULL,
  `tax` int(11) NOT NULL,
  `currency` varchar(4) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `currency_format` int(1) NOT NULL,
  `prefix` varchar(5) NOT NULL,
  `dformat` int(1) NOT NULL,
  `zone` varchar(25) NOT NULL,
  `logo` varchar(30) NOT NULL,
  `lang` varchar(20) DEFAULT 'english'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_system`
--

INSERT INTO `geopos_system` (`id`, `cname`, `address`, `city`, `region`, `country`, `postbox`, `phone`, `email`, `taxid`, `tax`, `currency`, `currency_format`, `prefix`, `dformat`, `zone`, `logo`, `lang`) VALUES
(1, 'ABC Company', '412 Example South Street,', 'Los Angeles', 'FL', 'USA', '123', '410-987-89-60', 'support@ultimatekode.com', '23442', -1, '$', 0, 'SRN', 1, 'Etc/Greenwich', 'logo.png', 'english');

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_terms`
--

CREATE TABLE `geopos_terms` (
  `id` int(4) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` int(1) NOT NULL,
  `terms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_terms`
--

INSERT INTO `geopos_terms` (`id`, `title`, `type`, `terms`) VALUES
(1, 'Payment On Receipt', 0, '<p>1. 10% discount if payment received within ten days otherwise payment 30 days\n            after invoice date<br></p>');

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_tickets`
--

CREATE TABLE `geopos_tickets` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `cid` int(11) NOT NULL,
  `status` enum('Solved','Processing','Waiting') NOT NULL,
  `section` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_tickets_th`
--

CREATE TABLE `geopos_tickets_th` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `cid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `cdate` datetime NOT NULL,
  `attach` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_todolist`
--

CREATE TABLE `geopos_todolist` (
  `id` int(11) NOT NULL,
  `tdate` date NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` enum('Due','Done','Progress') NOT NULL DEFAULT 'Due',
  `start` date NOT NULL,
  `duedate` date NOT NULL,
  `description` text DEFAULT NULL,
  `eid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `related` int(11) NOT NULL,
  `priority` enum('Low','Medium','High','Urgent') NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_tranfering_products`
--

CREATE TABLE `geopos_tranfering_products` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `w_from` int(11) NOT NULL,
  `w_to` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_tranfering_products`
--

INSERT INTO `geopos_tranfering_products` (`id`, `pid`, `qty`, `w_from`, `w_to`, `status`) VALUES
(1, 61, 3, 2, 6, 3),
(2, 55, 3, 2, 6, 3),
(3, 63, 3, 2, 6, 3),
(4, 65, 4, 1, 6, 3),
(5, 67, 2, 1, 6, 3),
(6, 54, 1, 5, 2, 3),
(7, 60, 1, 5, 2, 3),
(8, 54, 1, 5, 2, 3),
(9, 60, 1, 5, 2, 3),
(10, 54, 1, 5, 2, 3),
(11, 60, 1, 5, 2, 3),
(12, 54, 1, 5, 2, 3),
(13, 54, 1, 5, 2, 3),
(14, 62, 1, 5, 2, 3),
(15, 56, 1, 1, 2, 3),
(16, 56, 1, 1, 2, 3),
(17, 56, 1, 1, 2, 3),
(18, 59, 1, 1, 2, 3),
(19, 56, 1, 1, 2, 3),
(20, 59, 1, 1, 2, 3);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_transactions`
--

CREATE TABLE `geopos_transactions` (
  `id` int(11) NOT NULL,
  `acid` int(11) NOT NULL,
  `account` varchar(200) NOT NULL,
  `type` enum('Income','Expense','Transfer') NOT NULL,
  `cat` varchar(200) NOT NULL,
  `debit` decimal(16,2) DEFAULT 0.00,
  `credit` decimal(16,2) DEFAULT 0.00,
  `payer` varchar(200) DEFAULT NULL,
  `payerid` int(11) NOT NULL DEFAULT 0,
  `method` varchar(200) DEFAULT NULL,
  `date` date NOT NULL,
  `tid` int(11) NOT NULL DEFAULT 0,
  `eid` int(11) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `ext` int(1) DEFAULT 0,
  `loc` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_transactions`
--

INSERT INTO `geopos_transactions` (`id`, `acid`, `account`, `type`, `cat`, `debit`, `credit`, `payer`, `payerid`, `method`, `date`, `tid`, `eid`, `note`, `ext`, `loc`) VALUES
(1, 1, 'Sales Account', 'Income', 'Sales', '0.00', '10142.00', 'Hossam', 3, 'Cash', '2019-08-26', 1, 11, '#1001-Cash', 0, 0),
(2, 1, 'Sales Account', 'Income', 'Sales', '0.00', '919.00', 'Walk-in Client', 1, 'Cash', '2019-08-27', 5, 11, '#1005-Cash', 0, 1),
(3, 1, 'Sales Account', 'Income', 'Sales', '0.00', '0.00', 'Hossam', 3, 'Cash', '2019-08-27', 5, 11, '#-Cash', 0, 1),
(4, 1, 'Sales Account', 'Income', 'Sales', '0.00', '444.00', 'Walk-in Client', 1, 'Cash', '2019-08-27', 6, 11, '#1006-Cash', 0, 1),
(5, 1, 'Sales Account', 'Income', 'Sales', '0.00', '47302210.65', 'Hossam', 3, 'Cash', '2019-08-31', 9, 11, '#1008-Cash', 0, 1),
(6, 1, 'Sales Account', 'Income', 'Sales', '0.00', '409.00', 'Hossam', 3, 'Cash', '2019-09-02', 10, 11, '#1009-Cash', 0, 1),
(7, 1, 'Sales Account', 'Income', 'Sales', '0.00', '556101009.00', 'Mohamed', 2, 'Cash', '2019-09-03', 11, 11, '#1010-Cash', 0, 1),
(8, 1, 'Sales Account', 'Income', 'Sales', '0.00', '444.00', 'Hossam', 3, 'Cash', '2019-09-03', 12, 11, '#1011-Cash', 0, 1),
(9, 1, 'Sales Account', 'Income', 'Sales', '0.00', '555555555.00', 'Walk-in Client', 1, 'Cash', '2019-09-16', 14, 11, '#1012-Cash', 0, 1),
(10, 1, 'Sales Account', 'Income', 'Sales', '0.00', '345.00', 'Walk-in Client', 1, 'Cash', '2019-09-19', 15, 11, '#1013-Cash', 0, 1),
(11, 1, 'Sales Account', 'Income', 'Sales', '0.00', '999.00', 'Hossam', 3, 'Cash', '2019-10-01', 17, 11, '#1015-Cash', 0, 0),
(12, 1, 'Sales Account', 'Income', 'Sales', '0.00', '99.00', 'Hossam', 3, 'Cash', '2019-10-01', 18, 11, '#1016-Cash', 0, 0),
(13, 1, 'Sales Account', 'Income', 'Sales', '0.00', '2342778.00', 'Walk-in Client', 1, 'Cash', '2019-10-04', 39, 11, '#1026-Cash', 0, 0),
(15, 1, 'Sales Account', 'Income', 'Sales', '0.00', '414408.00', 'Walk-in Client', 1, 'Cash', '2019-10-05', 41, 11, '#1027-Cash', 0, 0),
(16, 1, 'Sales Account', 'Income', 'Sales', '0.00', '555659157.00', 'Walk-in Client', 1, 'Cash', '2019-10-05', 42, 11, '#1028-Cash', 0, 0),
(17, 1, 'Sales Account', 'Income', 'Sales', '0.00', '563969677.00', 'Walk-in Client', 1, 'Cash', '2019-10-08', 43, 11, '#1029-Cash', 0, 0),
(18, 1, 'Sales Account', 'Income', 'Sales', '0.00', '545799.00', 'Walk-in Client', 1, 'Cash', '2019-10-09', 44, 11, '#1030-Cash', 0, 0),
(19, 1, 'Sales Account', 'Income', 'Sales', '0.00', '4254.44', 'Walk-in Client', 1, 'Cash', '2019-10-09', 52, 11, '#1034-Cash', 0, 0),
(20, 1, 'Sales Account', 'Income', 'Sales', '0.00', '4599.88', 'Walk-in Client', 1, 'Cash', '2019-10-09', 53, 11, '#1035-Cash', 0, 0),
(21, 1, 'Sales Account', 'Income', 'Sales', '0.00', '2342668.44', 'Walk-in Client', 1, 'Cash', '2019-10-10', 54, 11, '#1036-Cash', 0, 0),
(22, 1, 'Sales Account', 'Income', 'Sales', '0.00', '4688099.00', 'Walk-in Client', 1, 'Cash', '2019-10-10', 55, 11, '#1037-Cash', 0, 0),
(23, 1, 'Sales Account', 'Income', 'Sales', '0.00', '2342668.44', 'Walk-in Client', 1, 'Cash', '2019-10-10', 56, 11, '#1038-Cash', 0, 0),
(25, 1, 'Sales Account', 'Income', 'Sales', '0.00', '801.00', 'Walk-in Client', 1, 'Cash', '2019-10-10', 59, 11, '#1040-Cash', 0, 0),
(26, 1, 'Sales Account', 'Income', 'Sales', '0.00', '3798.44', 'Walk-in Client', 1, 'Cash', '2019-10-10', 60, 11, '#1041-Cash', 0, 0),
(27, 1, 'Sales Account', 'Income', 'Sales', '0.00', '801.00', 'Walk-in Client', 1, 'Cash', '2019-10-10', 61, 11, '#1042-Cash', 0, 0),
(29, 1, 'Sales Account', 'Income', 'Sales', '0.00', '3798.44', 'Walk-in Client', 1, 'Cash', '2019-10-10', 63, 11, '#1043-Cash', 0, 0),
(30, 1, 'Sales Account', 'Income', 'Sales', '0.00', '3798.44', 'Walk-in Client', 1, 'Cash', '2019-10-10', 64, 11, '#1044-Cash', 0, 0),
(31, 1, 'Sales Account', 'Income', 'Sales', '0.00', '3798.44', 'Walk-in Client', 1, 'Cash', '2019-10-10', 65, 11, '#1045-Cash', 0, 0),
(32, 1, 'Sales Account', 'Income', 'Sales', '0.00', '3798.44', 'Walk-in Client', 1, 'Cash', '2019-10-10', 66, 11, '#1046-Cash', 0, 0),
(33, 1, 'Sales Account', 'Income', 'Sales', '0.00', '565656.00', 'Mohamed', 2, 'Cash', '2019-10-16', 67, 11, '#1047-Cash', 0, 1),
(34, 1, 'Sales Account', 'Income', 'Sales', '0.00', '444.00', 'Walk-in Client', 1, 'Cash', '2019-10-27', 69, 11, '#1049-Cash', 0, 3),
(35, 1, 'Sales Account', 'Income', 'Sales', '0.00', '444.00', 'Walk-in Client', 1, 'Cash', '2019-10-27', 70, 11, '#1050-Cash', 0, 3),
(36, 1, 'Sales Account', 'Income', 'Sales', '0.00', '2567.00', 'Walk-in Client', 1, 'Cash', '2019-11-04', 71, 11, '#1051-Cash', 0, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_trans_cat`
--

CREATE TABLE `geopos_trans_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_trans_cat`
--

INSERT INTO `geopos_trans_cat` (`id`, `name`) VALUES
(1, 'Income'),
(2, 'Expenses'),
(3, 'Other');

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_units`
--

CREATE TABLE `geopos_units` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `code` varchar(5) NOT NULL,
  `type` int(1) NOT NULL,
  `sub` int(1) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_units`
--

INSERT INTO `geopos_units` (`id`, `name`, `code`, `type`, `sub`, `rid`) VALUES
(1, 'color', '', 1, 0, 0),
(2, 'red', '', 2, 0, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_users`
--

CREATE TABLE `geopos_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `banned` tinyint(1) DEFAULT 0,
  `last_login` datetime DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `forgot_exp` text DEFAULT NULL,
  `remember_time` datetime DEFAULT NULL,
  `remember_exp` text DEFAULT NULL,
  `verification_code` text DEFAULT NULL,
  `totp_secret` varchar(16) DEFAULT NULL,
  `ip_address` text DEFAULT NULL,
  `roleid` int(1) NOT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `loc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_users`
--

INSERT INTO `geopos_users` (`id`, `email`, `pass`, `username`, `banned`, `last_login`, `last_activity`, `date_created`, `forgot_exp`, `remember_time`, `remember_exp`, `verification_code`, `totp_secret`, `ip_address`, `roleid`, `picture`, `loc`) VALUES
(11, 'mhmd.yassin@yahoo.com', '391ed40ef01e7c09b0c27d97adba46d9aa04e52e1a3c9c7561185393b84d223c', 'admin', 0, '2019-11-14 12:45:32', '2019-11-14 12:45:32', '2019-08-22 18:39:06', NULL, '2019-11-08 00:00:00', '6arBOQdTuhpoAzVM', '', NULL, '::1', 5, 'example.png', 0),
(12, 'businessowner@businessowner.com', '463d66d5f41c485b2f6f9999a10f8f3941e8687ffa8d4aa3f4cafa9ef64909cd', 'businessowner', 0, '2019-09-25 13:03:43', '2019-09-25 13:03:43', '2019-09-25 13:03:12', NULL, NULL, NULL, NULL, NULL, '::1', 5, 'example.png', 0),
(13, 'sales@sales.com', '6cea61b95e29f80bc865b57e6f74101deda17d7dbde2614382715dc7723e6129', 'sales', 0, '2019-09-25 13:07:08', '2019-09-25 13:07:08', '2019-09-25 13:06:50', NULL, NULL, NULL, NULL, NULL, '::1', 2, 'example.png', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `geopos_warehouse`
--

CREATE TABLE `geopos_warehouse` (
  `id` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `extra` varchar(255) DEFAULT NULL,
  `loc` int(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `geopos_warehouse`
--

INSERT INTO `geopos_warehouse` (`id`, `title`, `extra`, `loc`) VALUES
(1, 'Main WareHouse', 'The Main WareHouse', 0),
(2, 'hossam', 'hhhhhh', 0),
(3, 'Mohamed', 'Mohamed', 2),
(4, 'Kom El nor', 'kom el nor', 1),
(5, 'Sidi Gaber', 'sidi Gaber', 3),
(6, 'Mansoura', 'Mansoura', 1),
(7, 'zefta', 'zefta', 1),
(8, 'zefta', 'zefta', 1),
(9, 'zefta', 'zefta', 1),
(10, 'zofta', 'zofta', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `univarsal_api`
--

CREATE TABLE `univarsal_api` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `key1` varchar(255) DEFAULT NULL,
  `key2` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `method` varchar(10) DEFAULT NULL,
  `other` text DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `univarsal_api`
--

INSERT INTO `univarsal_api` (`id`, `name`, `key1`, `key2`, `url`, `method`, `other`, `active`) VALUES
(1, 'Goo.gl URL Shortner', 'yourkey', '0', '0', '0', '0', 0),
(2, 'Twilio SMS API', 'ac', 'key', '+11234567', '0', '0', 1),
(3, 'Company Support', '1', '1', 'support@gmail.com', NULL, '<p>Your footer</p>', 1),
(4, 'Currency', '.', ',', '2', 'l', NULL, NULL),
(5, 'Exchange', 'key1v', 'key2', 'USD', NULL, NULL, 0),
(6, 'New Invoice Notification', '[{Company}] Invoice #{BillNumber} Generated', NULL, NULL, NULL, '<p>Dear\n            Client,\r\n</p><p>We are contacting you in regard to a payment received for invoice # {BillNumber} that has\n            been created on your account. You may find the invoice with below link.\r\n\r\nView\n            Invoice\r\n{URL}\r\n\r\nWe look forward to conducting future business with you.\r\n\r\nKind\n            Regards,\r\nTeam\r\n{CompanyDetails}</p>', NULL),
(7, 'Invoice Payment Reminder', '[{Company}] Invoice #{BillNumber} Payment Reminder', NULL, NULL, NULL, '<p>Dear\n            Client,</p><p>We are contacting you in regard to a payment reminder of invoice # {BillNumber} that has been\n            created on your account. You may find the invoice with below link. Please pay the balance of {Amount} due by\n            {DueDate}.</p><p>\r\n\r\n<b>View Invoice</b></p><p><span style=\"font-size: 1rem;\">{URL}\r\n</span></p><p>\n            <span style=\"font-size: 1rem;\">\r\nWe look forward to conducting future business with you.</span></p><p>\n            <span style=\"font-size: 1rem;\">\r\n\r\nKind Regards,\r\n</span></p><p><span style=\"font-size: 1rem;\">\r\nTeam\r\n</span>\n        </p><p><span style=\"font-size: 1rem;\">\r\n{CompanyDetails}</span></p>', NULL),
(8, 'Invoice Refund Proceeded', '{Company} Invoice #{BillNumber} Refund Proceeded', NULL, NULL, NULL, '<p>Dear\n            Client,</p><p>\r\nWe are contacting you in regard to a refund request processed for invoice # {BillNumber}\n            that has been created on your account. You may find the invoice with below link. Please pay the balance of\n            {Amount} by {DueDate}.\r\n</p><p>\r\nView Invoice\r\n</p><p>{URL}\r\n</p><p>\r\nWe look forward to\n            conducting future business with you.\r\n</p><p>\r\nKind Regards,\r\n</p><p>\n            \r\nTeam\r\n\r\n{CompanyDetails}</p>', NULL),
(9, 'Invoice payment Received', '{Company} Payment Received for Invoice #{BillNumber}', NULL, NULL, NULL, '<p>\n            Dear Client,\r\n</p><p>We are contacting you in regard to a payment received for invoice # {BillNumber} that\n            has been created on your account. You can find the invoice with below link.\r\n</p><p>\r\nView Invoice</p>\n        <p>\r\n{URL}\r\n</p><p>\r\nWe look forward to conducting future business with you.\r\n</p><p>\r\nKind\n            Regards,\r\n</p><p>\r\nTeam\r\n</p><p>\r\n{CompanyDetails}</p>', NULL),
(10, 'Invoice Overdue Notice', '{Company} Invoice #{BillNumber} Generated for you', NULL, NULL, NULL, '<p>Dear\n            Client,</p><p>\r\nWe are contacting you in regard to an Overdue Notice for invoice # {BillNumber} that has\n            been created on your account. You may find the invoice with below link.\r\nPlease pay the balance of\n            {Amount} due by {DueDate}.\r\n</p><p>View Invoice\r\n</p><p>{URL}\r\n</p><p>\r\nWe look forward to\n            conducting future business with you.\r\n</p><p>\r\nKind Regards,\r\n</p><p>\r\nTeam</p><p>\n            \r\n\r\n{CompanyDetails}</p>', NULL),
(11, 'Quote Proposal', '{Company} Quote #{BillNumber} Generated for you', NULL, NULL, NULL, '<p>Dear Client,</p>\n        <p>\r\nWe are contacting you in regard to a new quote # {BillNumber} that has been created on your account. You\n            may find the quote with below link.\r\n</p><p>\r\nView Invoice\r\n</p><p>{URL}\r\n</p><p>\r\nWe look forward\n            to conducting future business with you.</p><p>\r\n\r\nKind Regards,</p><p>\r\n\r\nTeam</p><p>\n            \r\n\r\n{CompanyDetails}</p>', NULL),
(12, 'Purchase Order Request', '{Company} Purchase Order #{BillNumber} Requested', NULL, NULL, NULL, '<p>Dear\n            Client,\r\n</p><p>We are contacting you in regard to a new purchase # {BillNumber} that has been requested\n            on your account. You may find the order with below link. </p><p>\r\n\r\nView Invoice\r\n</p><p>{URL}</p><p>\n            \r\n\r\nWe look forward to conducting future business with you.</p><p>\r\n\r\nKind Regards,\r\n</p><p>\n            \r\nTeam</p><p>\r\n\r\n{CompanyDetails}</p>', NULL),
(13, 'Stock Return Mail', '{Company} New purchase return # {BillNumber}', NULL, NULL, NULL, 'Dear Client,\r\n\r\nWe are contacting you in regard to a new purchase return # {BillNumber} that has been requested on your account. You may find the order with below link.\r\n\r\nView Invoice\r\n\r\n{URL}\r\n\r\nWe look forward to conducting future business with you.\r\n\r\nKind Regards,\r\n\r\nTeam\r\n\r\n{CompanyDetails}', NULL),
(14, 'Customer Registration', '{Company}  Customer Registration - {NAME}', NULL, NULL, NULL, 'Dear Customer,\r\nThank You for registration, please confirm the registration by the following URL {REG_URL}\r\nRegards', NULL),
(15, 'Â Customer Password Reset', '{Company} Â Customer Password Reset- {NAME}', NULL, NULL, NULL, 'Dear Customer,\r\nPlease reset the password by the following URL {RESET_URL}\r\nRegards', NULL),
(16, 'Customer Registration by Employee', '{Company} Â Customer Registration - {NAME}', '0', '0', '0', 'Dear Customer,\r\nThank You for registration.\r\nLogin URL: {URL}\r\nLogin Email: {EMAIL}\r\nPassword: {PASSWORD}\r\n\r\nRegards\r\n{CompanyDetails}', 0),
(30, 'New Invoice Notification', NULL, NULL, NULL, NULL, 'Dear Customer, new invoice  # {BillNumber} generated. {URL} Regards', NULL),
(31, 'Invoice Payment Reminder', NULL, NULL, NULL, NULL, 'Dear Customer, Please make payment of invoice  # {BillNumber}. {URL} Regards', NULL),
(32, 'Invoice Refund Proceeded', NULL, NULL, NULL, NULL, 'Dear Customer, Refund generated of invoice # {BillNumber}. {URL} Regards', NULL),
(33, 'Invoice payment Received', NULL, NULL, NULL, NULL, 'Dear Customer, Payment received of invoice # {BillNumber}. {URL} Regards', NULL),
(34, 'Invoice Overdue Notice', NULL, NULL, NULL, NULL, 'Dear Customer, Dear Customer,Payment is overdue of invoice # {BillNumber}. {URL} Regards', NULL),
(35, 'Quote Proposal', NULL, NULL, NULL, NULL, 'Dear Customer, Dear Customer, a quote created for you # {BillNumber}. {URL} Regards', NULL),
(36, 'Purchase Order Request', NULL, NULL, NULL, NULL, 'Dear Customer, Dear, a purchased order for you # {BillNumber}. {URL} Regards', NULL),
(51, 'QT#', 'PO#', 'SUB#', 'SR#', 'TRN#', 'SRN#', 1),
(52, 'ThermalPrint', '0', NULL, NULL, NULL, 'POS#', 0),
(53, 'ConfPort', 'Public Key', '0', 'Private Key', NULL, NULL, 1),
(54, 'online_payment', '1', 'USD', '1', '1', NULL, 1),
(55, 'CronJob', '99293768', 'rec_email', 'email', 'rec_due', 'recemail', NULL),
(56, 'Auto Email SMS', 'email', 'sms', NULL, NULL, NULL, NULL),
(60, 'Warehouse', '1', NULL, NULL, NULL, NULL, NULL),
(61, 'Discount & Shipping', '%', '10.00', 'incl', NULL, NULL, NULL),
(62, 'AutoAttendance', '1', '0', '0', '0', '0', NULL),
(63, 'Zero Stock Billing', '1', '0', '0', '0', '0', 0),
(64, 'FrontEndSection', '0', '0', '0', '0', NULL, 0),
(65, 'Dual Entry', '0', '1', '0', '0', '0', 0),
(66, 'Email Alert', '0', '0', 'sample@email.com', '0', '0', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `var_key` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `is_deleted` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `lang` varchar(25) NOT NULL DEFAULT 'english',
  `code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`users_id`, `user_id`, `var_key`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `cid`, `lang`, `code`) VALUES
(1, '1', NULL, 'active', '0', 'Walk-in Client', '$2y$10$TKfTVltchv/jxZIouy8i8O7rSzVvtdx4Y5wNRodK5RNyTBJkEoIAW', 'example@example.com', NULL, 'Member', 1, 'english', NULL),
(2, '1', NULL, 'active', '0', 'Mohamed', '$2y$10$CMQmW6Jq/9OM3Rs2BMJSnOlk5CIXsDD9YOd4OJZ.nJ190z6gDYd2G', 'mohamed@mohamed.com', NULL, 'Member', 2, 'english', NULL),
(3, '1', NULL, 'active', '0', 'Hossam', '$2y$10$wvgIefpixQohvAJEc/MPu.GJRH4isYEr9Ilb8IZEnhcQ53Yj6ayyS', 'Hossam@Hossam.com', NULL, 'Member', 3, 'english', NULL),
(4, '1', NULL, 'active', '0', 'Yassin', '$2y$10$.qUPrXnQ9kfpRjvG7hYHWO2fUlLE7BqjJCihodKcYCJ8xmPsvBgcG', 'admin@geo.com', NULL, 'Member', 4, 'english', NULL),
(5, '1', NULL, 'active', '0', 'fsa', '$2y$10$2709NFb/nuT4M092/dPiNOIibQ7/7YuP57vgjrI3/AdrccDFJJihm', 'abc@1abcled.com', NULL, 'Member', 5, 'english', NULL),
(6, '1', NULL, 'active', '0', 'ahmed', '$2y$10$9Yxi2zbUowya/fXGfaUlCuiQybN1tPgJ/OIaHB.ae2UrF4Zh2Done', 'hkjhkjhkj', NULL, 'Member', 6, 'english', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `geopos_accounts`
--
ALTER TABLE `geopos_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `acn` (`acn`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `geopos_attendance`
--
ALTER TABLE `geopos_attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp` (`emp`);

--
-- Indexes for table `geopos_bank_ac`
--
ALTER TABLE `geopos_bank_ac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_config`
--
ALTER TABLE `geopos_config`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `geopos_currencies`
--
ALTER TABLE `geopos_currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_customers`
--
ALTER TABLE `geopos_customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gid` (`gid`);

--
-- Indexes for table `geopos_custom_data`
--
ALTER TABLE `geopos_custom_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fid` (`field_id`,`rid`);

--
-- Indexes for table `geopos_custom_fields`
--
ALTER TABLE `geopos_custom_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_module` (`f_module`);

--
-- Indexes for table `geopos_cust_group`
--
ALTER TABLE `geopos_cust_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_documents`
--
ALTER TABLE `geopos_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_draft`
--
ALTER TABLE `geopos_draft`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eid` (`eid`),
  ADD KEY `csd` (`csd`),
  ADD KEY `invoice` (`tid`) USING BTREE,
  ADD KEY `i_class` (`i_class`),
  ADD KEY `loc` (`loc`);

--
-- Indexes for table `geopos_draft_items`
--
ALTER TABLE `geopos_draft_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice` (`tid`),
  ADD KEY `i_class` (`i_class`);

--
-- Indexes for table `geopos_employees`
--
ALTER TABLE `geopos_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_events`
--
ALTER TABLE `geopos_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rel` (`rel`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `geopos_gateways`
--
ALTER TABLE `geopos_gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_hrm`
--
ALTER TABLE `geopos_hrm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_invoices`
--
ALTER TABLE `geopos_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eid` (`eid`),
  ADD KEY `csd` (`csd`),
  ADD KEY `invoice` (`tid`) USING BTREE,
  ADD KEY `i_class` (`i_class`),
  ADD KEY `loc` (`loc`);

--
-- Indexes for table `geopos_invoice_items`
--
ALTER TABLE `geopos_invoice_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice` (`tid`),
  ADD KEY `i_class` (`i_class`);

--
-- Indexes for table `geopos_locations`
--
ALTER TABLE `geopos_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_log`
--
ALTER TABLE `geopos_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_login_attempts`
--
ALTER TABLE `geopos_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_metadata`
--
ALTER TABLE `geopos_metadata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `geopos_milestones`
--
ALTER TABLE `geopos_milestones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_movers`
--
ALTER TABLE `geopos_movers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `d_type` (`d_type`,`rid1`,`rid2`,`rid3`);

--
-- Indexes for table `geopos_notes`
--
ALTER TABLE `geopos_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_pms`
--
ALTER TABLE `geopos_pms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `full_index` (`id`,`sender_id`,`receiver_id`,`date_read`);

--
-- Indexes for table `geopos_premissions`
--
ALTER TABLE `geopos_premissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_products`
--
ALTER TABLE `geopos_products`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `pcat` (`pcat`),
  ADD KEY `warehouse` (`warehouse`);

--
-- Indexes for table `geopos_products_prices_history`
--
ALTER TABLE `geopos_products_prices_history`
  ADD PRIMARY KEY (`change_id`);

--
-- Indexes for table `geopos_product_cat`
--
ALTER TABLE `geopos_product_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_projects`
--
ALTER TABLE `geopos_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `geopos_project_meta`
--
ALTER TABLE `geopos_project_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `meta_key` (`meta_key`),
  ADD KEY `key3` (`key3`);

--
-- Indexes for table `geopos_promo`
--
ALTER TABLE `geopos_promo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_2` (`code`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `geopos_purchase`
--
ALTER TABLE `geopos_purchase`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoice` (`tid`),
  ADD KEY `eid` (`eid`),
  ADD KEY `csd` (`csd`);

--
-- Indexes for table `geopos_purchase_items`
--
ALTER TABLE `geopos_purchase_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice` (`tid`);

--
-- Indexes for table `geopos_quotes`
--
ALTER TABLE `geopos_quotes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoice` (`tid`),
  ADD KEY `eid` (`eid`),
  ADD KEY `csd` (`csd`);

--
-- Indexes for table `geopos_quotes_items`
--
ALTER TABLE `geopos_quotes_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice` (`tid`);

--
-- Indexes for table `geopos_register`
--
ALTER TABLE `geopos_register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `geopos_reports`
--
ALTER TABLE `geopos_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_restkeys`
--
ALTER TABLE `geopos_restkeys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_smtp`
--
ALTER TABLE `geopos_smtp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_stock_r`
--
ALTER TABLE `geopos_stock_r`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoice` (`tid`),
  ADD KEY `eid` (`eid`),
  ADD KEY `csd` (`csd`);

--
-- Indexes for table `geopos_stock_r_items`
--
ALTER TABLE `geopos_stock_r_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice` (`tid`) KEY_BLOCK_SIZE=1024 USING BTREE;

--
-- Indexes for table `geopos_supplier`
--
ALTER TABLE `geopos_supplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gid` (`gid`);

--
-- Indexes for table `geopos_system`
--
ALTER TABLE `geopos_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_terms`
--
ALTER TABLE `geopos_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_tickets`
--
ALTER TABLE `geopos_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_tickets_th`
--
ALTER TABLE `geopos_tickets_th`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tid` (`tid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `eid` (`eid`);

--
-- Indexes for table `geopos_todolist`
--
ALTER TABLE `geopos_todolist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_tranfering_products`
--
ALTER TABLE `geopos_tranfering_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_transactions`
--
ALTER TABLE `geopos_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loc` (`loc`),
  ADD KEY `acid` (`acid`),
  ADD KEY `eid` (`eid`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `geopos_trans_cat`
--
ALTER TABLE `geopos_trans_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_units`
--
ALTER TABLE `geopos_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geopos_users`
--
ALTER TABLE `geopos_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `geopos_warehouse`
--
ALTER TABLE `geopos_warehouse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `univarsal_api`
--
ALTER TABLE `univarsal_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD KEY `code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `geopos_accounts`
--
ALTER TABLE `geopos_accounts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geopos_attendance`
--
ALTER TABLE `geopos_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_bank_ac`
--
ALTER TABLE `geopos_bank_ac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_config`
--
ALTER TABLE `geopos_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_currencies`
--
ALTER TABLE `geopos_currencies`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_customers`
--
ALTER TABLE `geopos_customers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `geopos_custom_data`
--
ALTER TABLE `geopos_custom_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;

--
-- AUTO_INCREMENT for table `geopos_custom_fields`
--
ALTER TABLE `geopos_custom_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `geopos_cust_group`
--
ALTER TABLE `geopos_cust_group`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geopos_documents`
--
ALTER TABLE `geopos_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_draft`
--
ALTER TABLE `geopos_draft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geopos_draft_items`
--
ALTER TABLE `geopos_draft_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_employees`
--
ALTER TABLE `geopos_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `geopos_events`
--
ALTER TABLE `geopos_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_gateways`
--
ALTER TABLE `geopos_gateways`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `geopos_hrm`
--
ALTER TABLE `geopos_hrm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_invoices`
--
ALTER TABLE `geopos_invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `geopos_invoice_items`
--
ALTER TABLE `geopos_invoice_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `geopos_locations`
--
ALTER TABLE `geopos_locations`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `geopos_log`
--
ALTER TABLE `geopos_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=479;

--
-- AUTO_INCREMENT for table `geopos_login_attempts`
--
ALTER TABLE `geopos_login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `geopos_metadata`
--
ALTER TABLE `geopos_metadata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `geopos_milestones`
--
ALTER TABLE `geopos_milestones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_movers`
--
ALTER TABLE `geopos_movers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT for table `geopos_notes`
--
ALTER TABLE `geopos_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_pms`
--
ALTER TABLE `geopos_pms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_premissions`
--
ALTER TABLE `geopos_premissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `geopos_products`
--
ALTER TABLE `geopos_products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `geopos_products_prices_history`
--
ALTER TABLE `geopos_products_prices_history`
  MODIFY `change_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `geopos_product_cat`
--
ALTER TABLE `geopos_product_cat`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `geopos_projects`
--
ALTER TABLE `geopos_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_project_meta`
--
ALTER TABLE `geopos_project_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_promo`
--
ALTER TABLE `geopos_promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_purchase`
--
ALTER TABLE `geopos_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `geopos_purchase_items`
--
ALTER TABLE `geopos_purchase_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `geopos_quotes`
--
ALTER TABLE `geopos_quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_quotes_items`
--
ALTER TABLE `geopos_quotes_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_register`
--
ALTER TABLE `geopos_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `geopos_reports`
--
ALTER TABLE `geopos_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_restkeys`
--
ALTER TABLE `geopos_restkeys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_stock_r`
--
ALTER TABLE `geopos_stock_r`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_stock_r_items`
--
ALTER TABLE `geopos_stock_r_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_supplier`
--
ALTER TABLE `geopos_supplier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `geopos_terms`
--
ALTER TABLE `geopos_terms`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geopos_tickets`
--
ALTER TABLE `geopos_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_tickets_th`
--
ALTER TABLE `geopos_tickets_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_todolist`
--
ALTER TABLE `geopos_todolist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geopos_tranfering_products`
--
ALTER TABLE `geopos_tranfering_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `geopos_transactions`
--
ALTER TABLE `geopos_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `geopos_trans_cat`
--
ALTER TABLE `geopos_trans_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `geopos_units`
--
ALTER TABLE `geopos_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `geopos_users`
--
ALTER TABLE `geopos_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `geopos_warehouse`
--
ALTER TABLE `geopos_warehouse`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `univarsal_api`
--
ALTER TABLE `univarsal_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
