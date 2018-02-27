-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2017 at 06:38 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocked_users`
--

CREATE TABLE `blocked_users` (
  `id` bigint(20) NOT NULL,
  `employee_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `blocked_datetime` int(11) NOT NULL,
  `unblocked_datetime` int(11) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `parent_id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coins`
--

CREATE TABLE `coins` (
  `id` bigint(11) NOT NULL,
  `coins_amount` decimal(10,0) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `service1` varchar(255) NOT NULL,
  `coin_price1` decimal(10,0) NOT NULL,
  `service2` varchar(255) NOT NULL,
  `coin_price2` decimal(10,0) NOT NULL,
  `is_deleted` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint(20) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `about_us` text,
  `country_id` int(11) NOT NULL,
  `active` int(1) NOT NULL,
  `registration_date` int(11) NOT NULL,
  `delete_date` int(11) NOT NULL,
  `work_hour` int(11) NOT NULL,
  `job_complete` int(11) NOT NULL,
  `earned` decimal(10,0) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `company_type_id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_confirmed` int(1) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_category`
--

CREATE TABLE `company_category` (
  `id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `subcategory_id` bigint(20) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_type`
--

CREATE TABLE `company_type` (
  `id` bigint(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(5) NOT NULL,
  `countryCode` char(4) NOT NULL DEFAULT '',
  `countryName` varchar(45) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  `account_id` int(11) NOT NULL DEFAULT '1',
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `countryCode`, `countryName`, `sort`, `account_id`, `is_deleted`) VALUES
(196, 'SD', 'Sudan', 999, 1, 0),
(195, 'SC', 'Seychelles', 999, 1, 0),
(194, 'SB', 'Solomon Islands', 999, 1, 0),
(193, 'SA', 'Saudi Arabia', 999, 1, 0),
(192, 'RW', 'Rwanda', 999, 1, 0),
(191, 'RU', 'Russia', 999, 1, 0),
(190, 'RS', 'Serbia', 999, 1, 0),
(189, 'RO', 'Romania', 999, 1, 0),
(188, 'RE', 'Réunion', 999, 1, 0),
(187, 'QA', 'Qatar', 999, 1, 0),
(186, 'PY', 'Paraguay', 999, 1, 0),
(185, 'PW', 'Palau', 999, 1, 0),
(184, 'PT', 'Portugal', 999, 1, 0),
(183, 'PS', 'Palestine', 999, 1, 0),
(182, 'PR', 'Puerto Rico', 999, 1, 0),
(181, 'PN', 'Pitcairn Islands', 999, 1, 0),
(180, 'PM', 'Saint Pierre and Miquelon', 999, 1, 0),
(179, 'PL', 'Poland', 999, 1, 0),
(178, 'PK', 'Pakistan', 999, 1, 0),
(177, 'PH', 'Philippines', 999, 1, 0),
(176, 'PG', 'Papua New Guinea', 999, 1, 0),
(175, 'PF', 'French Polynesia', 999, 1, 0),
(174, 'PE', 'Peru', 999, 1, 0),
(173, 'PA', 'Panama', 999, 1, 0),
(172, 'OM', 'Oman', 999, 1, 0),
(171, 'NZ', 'New Zealand', 999, 1, 0),
(170, 'NU', 'Niue', 999, 1, 0),
(169, 'NR', 'Nauru', 999, 1, 0),
(168, 'NP', 'Nepal', 999, 1, 0),
(167, 'NO', 'Norway', 999, 1, 0),
(166, 'NL', 'Netherlands', 3, 1, 0),
(165, 'NI', 'Nicaragua', 999, 1, 0),
(164, 'NG', 'Nigeria', 999, 1, 0),
(163, 'NF', 'Norfolk Island', 999, 1, 0),
(162, 'NE', 'Niger', 999, 1, 0),
(161, 'NC', 'New Caledonia', 999, 1, 0),
(160, 'NA', 'Namibia', 999, 1, 0),
(159, 'MZ', 'Mozambique', 999, 1, 0),
(158, 'MY', 'Malaysia', 999, 1, 0),
(157, 'MX', 'Mexico', 999, 1, 0),
(156, 'MW', 'Malawi', 999, 1, 0),
(155, 'MV', 'Maldives', 999, 1, 0),
(154, 'MU', 'Mauritius', 999, 1, 0),
(153, 'MT', 'Malta', 999, 1, 0),
(152, 'MS', 'Montserrat', 999, 1, 0),
(151, 'MR', 'Mauritania', 999, 1, 0),
(150, 'MQ', 'Martinique', 999, 1, 0),
(149, 'MP', 'Northern Mariana Islands', 999, 1, 0),
(148, 'MO', 'Macao', 999, 1, 0),
(147, 'MN', 'Mongolia', 999, 1, 0),
(146, 'MM', 'Myanmar [Burma]', 999, 1, 0),
(145, 'ML', 'Mali', 999, 1, 0),
(144, 'MK', 'Macedonia', 999, 1, 0),
(143, 'MH', 'Marshall Islands', 999, 1, 0),
(142, 'MG', 'Madagascar', 999, 1, 0),
(141, 'MF', 'Saint Martin', 999, 1, 0),
(140, 'ME', 'Montenegro', 999, 1, 0),
(139, 'MD', 'Moldova', 999, 1, 0),
(138, 'MC', 'Monaco', 999, 1, 0),
(137, 'MA', 'Morocco', 999, 1, 0),
(136, 'LY', 'Libya', 999, 1, 0),
(135, 'LV', 'Latvia', 999, 1, 0),
(134, 'LU', 'Luxembourg', 999, 1, 0),
(133, 'LT', 'Lithuania', 999, 1, 0),
(132, 'LS', 'Lesotho', 999, 1, 0),
(131, 'LR', 'Liberia', 999, 1, 0),
(130, 'LK', 'Sri Lanka', 999, 1, 0),
(129, 'LI', 'Liechtenstein', 999, 1, 0),
(128, 'LC', 'Saint Lucia', 999, 1, 0),
(127, 'LB', 'Lebanon', 999, 1, 0),
(126, 'LA', 'Laos', 999, 1, 0),
(125, 'KZ', 'Kazakhstan', 999, 1, 0),
(124, 'KY', 'Cayman Islands', 999, 1, 0),
(123, 'KW', 'Kuwait', 999, 1, 0),
(122, 'KR', 'South Korea', 999, 1, 0),
(121, 'KP', 'North Korea', 999, 1, 0),
(120, 'KN', 'Saint Kitts and Nevis', 999, 1, 0),
(119, 'KM', 'Comoros', 999, 1, 0),
(118, 'KI', 'Kiribati', 999, 1, 0),
(117, 'KH', 'Cambodia', 999, 1, 0),
(116, 'KG', 'Kyrgyzstan', 999, 1, 0),
(115, 'KE', 'Kenya', 999, 1, 0),
(114, 'JP', 'Japan', 999, 1, 0),
(113, 'JO', 'Jordan', 999, 1, 0),
(112, 'JM', 'Jamaica', 999, 1, 0),
(111, 'JE', 'Jersey', 999, 1, 0),
(110, 'IT', 'Italy', 999, 1, 0),
(109, 'IS', 'Iceland', 999, 1, 0),
(108, 'IR', 'Iran', 999, 1, 0),
(107, 'IQ', 'Iraq', 999, 1, 0),
(106, 'IO', 'British Indian Ocean Territory', 999, 1, 0),
(105, 'IN', 'India', 999, 1, 0),
(104, 'IM', 'Isle of Man', 999, 1, 0),
(103, 'IL', 'Israel', 999, 1, 0),
(102, 'IE', 'Ireland', 999, 1, 0),
(101, 'ID', 'Indonesia', 999, 1, 0),
(100, 'HU', 'Hungary', 999, 1, 0),
(99, 'HT', 'Haiti', 999, 1, 0),
(98, 'HR', 'Croatia', 999, 1, 0),
(97, 'HN', 'Honduras', 999, 1, 0),
(96, 'HM', 'Heard Island and McDonald Islands', 999, 1, 0),
(95, 'HK', 'Hong Kong', 999, 1, 0),
(94, 'GY', 'Guyana', 999, 1, 0),
(93, 'GW', 'Guinea-Bissau', 999, 1, 0),
(92, 'GU', 'Guam', 999, 1, 0),
(91, 'GT', 'Guatemala', 999, 1, 0),
(90, 'GS', 'South Georgia and the South Sandwich Islands', 999, 1, 0),
(89, 'GR', 'Greece', 999, 1, 0),
(88, 'GQ', 'Equatorial Guinea', 999, 1, 0),
(87, 'GP', 'Guadeloupe', 999, 1, 0),
(86, 'GN', 'Guinea', 999, 1, 0),
(85, 'GM', 'Gambia', 999, 1, 0),
(84, 'GL', 'Greenland', 999, 1, 0),
(83, 'GI', 'Gibraltar', 999, 1, 0),
(82, 'GH', 'Ghana', 999, 1, 0),
(81, 'GG', 'Guernsey', 999, 1, 0),
(80, 'GF', 'French Guiana', 999, 1, 0),
(79, 'GE', 'Georgia', 999, 1, 0),
(78, 'GD', 'Grenada', 999, 1, 0),
(77, 'GB', 'United Kingdom', 5, 1, 0),
(76, 'GA', 'Gabon', 999, 1, 0),
(75, 'FR', 'France', 4, 1, 0),
(74, 'FO', 'Faroe Islands', 999, 1, 0),
(73, 'FM', 'Micronesia', 999, 1, 0),
(72, 'FK', 'Falkland Islands', 999, 1, 0),
(71, 'FJ', 'Fiji', 999, 1, 0),
(70, 'FI', 'Finland', 999, 1, 0),
(69, 'ET', 'Ethiopia', 999, 1, 0),
(68, 'ES', 'Spain', 999, 1, 0),
(67, 'ER', 'Eritrea', 999, 1, 0),
(66, 'EH', 'Western Sahara', 999, 1, 0),
(65, 'EG', 'Egypt', 999, 1, 0),
(64, 'EE', 'Estonia', 999, 1, 0),
(63, 'EC', 'Ecuador', 999, 1, 0),
(62, 'DZ', 'Algeria', 999, 1, 0),
(61, 'DO', 'Dominican Republic', 999, 1, 0),
(60, 'DM', 'Dominica', 999, 1, 0),
(59, 'DK', 'Denmark', 999, 1, 0),
(58, 'DJ', 'Djibouti', 999, 1, 0),
(57, 'DE', 'Germany', 999, 1, 0),
(56, 'CZ', 'Czechia', 999, 1, 0),
(55, 'CY', 'Cyprus', 999, 1, 0),
(54, 'CX', 'Christmas Island', 999, 1, 0),
(53, 'CW', 'Curacao', 999, 1, 0),
(52, 'CV', 'Cape Verde', 999, 1, 0),
(51, 'CU', 'Cuba', 999, 1, 0),
(50, 'CR', 'Costa Rica', 999, 1, 0),
(49, 'CO', 'Colombia', 999, 1, 0),
(48, 'CN', 'China', 17, 1, 0),
(47, 'CM', 'Cameroon', 999, 1, 0),
(46, 'CL', 'Chile', 999, 1, 0),
(45, 'CK', 'Cook Islands', 999, 1, 0),
(44, 'CI', 'Ivory Coast', 999, 1, 0),
(43, 'CH', 'Switzerland', 999, 1, 0),
(42, 'CG', 'Republic of the Congo', 999, 1, 0),
(41, 'CF', 'Central African Republic', 999, 1, 0),
(40, 'CD', 'Democratic Republic of the Congo', 999, 1, 0),
(39, 'CC', 'Cocos [Keeling] Islands', 999, 1, 0),
(38, 'CA', 'Canada', 999, 1, 0),
(37, 'BZ', 'Belize', 999, 1, 0),
(36, 'BY', 'Belarus', 999, 1, 0),
(35, 'BW', 'Botswana', 999, 1, 0),
(34, 'BV', 'Bouvet Island', 999, 1, 0),
(33, 'BT', 'Bhutan', 999, 1, 0),
(32, 'BS', 'Bahamas', 999, 1, 0),
(31, 'BR', 'Brazil', 999, 1, 0),
(30, 'BQ', 'Bonaire', 999, 1, 0),
(29, 'BO', 'Bolivia', 999, 1, 0),
(28, 'BN', 'Brunei', 999, 1, 0),
(27, 'BM', 'Bermuda', 999, 1, 0),
(26, 'BL', 'Saint Barthélemy', 999, 1, 0),
(25, 'BJ', 'Benin', 999, 1, 0),
(24, 'BI', 'Burundi', 999, 1, 0),
(23, 'BH', 'Bahrain', 999, 1, 0),
(22, 'BG', 'Bulgaria', 999, 1, 0),
(21, 'BF', 'Burkina Faso', 999, 1, 0),
(20, 'BE', 'Belgie', 1, 1, 0),
(19, 'BD', 'Bangladesh', 999, 1, 0),
(18, 'BB', 'Barbados', 999, 1, 0),
(17, 'BA', 'Bosnia and Herzegovina', 999, 1, 0),
(16, 'AZ', 'Azerbaijan', 999, 1, 0),
(15, 'AX', 'Åland', 999, 1, 0),
(14, 'AW', 'Aruba', 999, 1, 0),
(12, 'AT', 'Austria', 999, 1, 0),
(11, 'AS', 'American Samoa', 999, 1, 0),
(10, 'AR', 'Argentina', 999, 1, 0),
(9, 'AQ', 'Antarctica', 999, 1, 0),
(8, 'AO', 'Angola', 999, 1, 0),
(7, 'AM', 'Armenia', 999, 1, 0),
(6, 'AL', 'Albania', 999, 1, 0),
(5, 'AI', 'Anguilla', 999, 1, 0),
(4, 'AG', 'Antigua and Barbuda', 999, 1, 0),
(3, 'AF', 'Afghanistan', 999, 1, 0),
(2, 'AE', 'United Arab Emirates', 999, 1, 0),
(1, 'AD', 'Andorra', 999, 1, 0),
(197, 'SE', 'Sweden', 999, 1, 0),
(198, 'SG', 'Singapore', 999, 1, 0),
(199, 'SH', 'Saint Helena', 999, 1, 0),
(200, 'SI', 'Slovenia', 999, 1, 0),
(201, 'SJ', 'Svalbard and Jan Mayen', 999, 1, 0),
(202, 'SK', 'Slovakia', 999, 1, 0),
(203, 'SL', 'Sierra Leone', 999, 1, 0),
(204, 'SM', 'San Marino', 999, 1, 0),
(205, 'SN', 'Senegal', 999, 1, 0),
(206, 'SO', 'Somalia', 999, 1, 0),
(207, 'SR', 'Suriname', 999, 1, 0),
(208, 'SS', 'South Sudan', 999, 1, 0),
(209, 'ST', 'São Tomé and Príncipe', 999, 1, 0),
(210, 'SV', 'El Salvador', 999, 1, 0),
(211, 'SX', 'Sint Maarten', 999, 1, 0),
(212, 'SY', 'Syria', 999, 1, 0),
(213, 'SZ', 'Swaziland', 999, 1, 0),
(214, 'TC', 'Turks and Caicos Islands', 999, 1, 0),
(215, 'TD', 'Chad', 999, 1, 0),
(216, 'TF', 'French Southern Territories', 999, 1, 0),
(217, 'TG', 'Togo', 999, 1, 0),
(218, 'TH', 'Thailand', 999, 1, 0),
(219, 'TJ', 'Tajikistan', 999, 1, 0),
(220, 'TK', 'Tokelau', 999, 1, 0),
(221, 'TL', 'East Timor', 999, 1, 0),
(222, 'TM', 'Turkmenistan', 999, 1, 0),
(223, 'TN', 'Tunisia', 999, 1, 0),
(224, 'TO', 'Tonga', 999, 1, 0),
(225, 'TR', 'Turkey', 999, 1, 0),
(226, 'TT', 'Trinidad and Tobago', 999, 1, 0),
(227, 'TV', 'Tuvalu', 999, 1, 0),
(228, 'TW', 'Taiwan', 999, 1, 0),
(229, 'TZ', 'Tanzania', 999, 1, 0),
(230, 'UA', 'Ukraine', 999, 1, 0),
(231, 'UG', 'Uganda', 999, 1, 0),
(232, 'UM', 'U.S. Minor Outlying Islands', 999, 1, 0),
(233, 'US', 'United States', 999, 1, 0),
(234, 'UY', 'Uruguay', 999, 1, 0),
(235, 'UZ', 'Uzbekistan', 999, 1, 0),
(236, 'VA', 'Vatican City', 999, 1, 0),
(237, 'VC', 'Saint Vincent and the Grenadines', 999, 1, 0),
(238, 'VE', 'Venezuela', 999, 1, 0),
(239, 'VG', 'British Virgin Islands', 999, 1, 0),
(240, 'VI', 'U.S. Virgin Islands', 999, 1, 0),
(241, 'VN', 'Vietnam', 999, 1, 0),
(242, 'VU', 'Vanuatu', 999, 1, 0),
(243, 'WF', 'Wallis and Futuna', 999, 1, 0),
(244, 'WS', 'Samoa', 999, 1, 0),
(245, 'XK', 'Kosovo', 999, 1, 0),
(246, 'YE', 'Yemen', 999, 1, 0),
(247, 'YT', 'Mayotte', 999, 1, 0),
(248, 'ZA', 'South Africa', 999, 1, 0),
(249, 'ZM', 'Zambia', 999, 1, 0),
(250, 'ZW', 'Zimbabwe', 999, 1, 0),
(251, 'NEHU', 'United Kingdom North of England', 6, 1, 0),
(252, 'NWHU', 'United Kingdom North West', 7, 1, 0),
(253, 'SU', 'United Kingdom Scotland', 8, 1, 0),
(254, 'WHU', 'United Kingdom Wales', 9, 1, 0),
(255, 'NPA', 'United Kingdom England', 10, 1, 0),
(256, 'IHU', 'Ireland', 11, 1, 0),
(257, 'DV', 'Germany', 12, 1, 0),
(258, 'DDR', 'Germany Berlin', 13, 1, 0),
(259, 'AU', 'United States American Union', 14, 1, 0),
(260, 'IF', 'United States American Homing Pigeon Fanciers', 15, 1, 0),
(261, 'ANPA', 'Australia', 16, 1, 0),
(266, 'DDD', 'DDDDDD', 33, 1, 1),
(265, 'test', 'test', 0, 1, 0),
(267, 'bar-', 'Bar b  Q', 2, 1, 0),
(268, 'RRRR', 'RRRRR', 5, 1, 1),
(269, 'test', 'tests', 1, 1, 0),
(270, 'ss', 'ss', 1, 1, 0),
(271, 'HHHH', 'HHHHHH', 0, 1, 0),
(272, 'YYYY', 'YYYYY', 0, 1, 0),
(273, 'ss', 'ss', 0, 1, 0),
(274, 'FFF', 'FFF', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_login`
--

CREATE TABLE `dashboard_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `interests` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `notify_new_user` varchar(5) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `account_id` bigint(20) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `session_key` varchar(255) NOT NULL DEFAULT '',
  `language` varchar(255) NOT NULL,
  `first_name` varchar(99) NOT NULL,
  `last_name` varchar(99) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `about` varchar(255) NOT NULL,
  `website_url` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard_login`
--

INSERT INTO `dashboard_login` (`id`, `email`, `password`, `interests`, `role`, `status`, `notify_new_user`, `image`, `account_id`, `is_deleted`, `session_key`, `language`, `first_name`, `last_name`, `mobile_number`, `occupation`, `about`, `website_url`) VALUES
(1, 'test@gmail.com', '88218a4319ce2cf501a965b86dc94adf', 'Computer programming', 'super_admin', 1, '1', '1_tom_1266855115.jpg', 1, 0, '', 'english', 'Tom', 'Paulson', '988837867', 'CFO', 'Movie lover', 'timpaulson.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email_confirmed` int(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `registration_date` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `delete_date` int(11) NOT NULL,
  `rate` decimal(10,4) NOT NULL,
  `work_hour` int(11) NOT NULL,
  `job_complete` int(11) NOT NULL,
  `earned` decimal(10,4) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee_company`
--

CREATE TABLE `employee_company` (
  `id` bigint(20) NOT NULL,
  `employee_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `role` varchar(10) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `job_created_date` int(11) NOT NULL,
  `job_completed_date` int(11) NOT NULL,
  `feedback_by_user` text NOT NULL,
  `feedback_by_user_datetime` int(11) NOT NULL,
  `feedback_by_company` text NOT NULL,
  `feedback_by_company_datetime` int(11) NOT NULL,
  `is_completed` int(1) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `start_work_date` int(11) NOT NULL,
  `planning_end_work_date` int(11) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_invite`
--

CREATE TABLE `job_invite` (
  `id` bigint(20) NOT NULL,
  `job_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `invite_datetime` int(11) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_title`
--

CREATE TABLE `job_title` (
  `job_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `job_desciption` varchar(255) NOT NULL,
  `job_in` varchar(255) NOT NULL,
  `job_date` date NOT NULL,
  `job_workstart` varchar(255) NOT NULL,
  `job_payment` varchar(255) NOT NULL,
  `job_worktype` varchar(255) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `lang_name` varchar(50) NOT NULL,
  `iso` varchar(10) NOT NULL,
  `icon` varchar(10) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `lang_name`, `iso`, `icon`, `is_deleted`) VALUES
(11, 'Italian', 'IT', 'IT', 0),
(2, 'Arabic', 'AE', 'AE', 0),
(3, 'Indian', 'GB', 'GB', 0),
(1, 'Bangladesh', 'BN', 'DE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lang_tables`
--

CREATE TABLE `lang_tables` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lang_tables`
--

INSERT INTO `lang_tables` (`id`, `name`, `is_deleted`) VALUES
(1, 'Frontend', 0),
(2, 'Userdashbaord', 0),
(3, 'Clientdashboard', 0),
(4, 'E-mail Templates', 0);

-- --------------------------------------------------------

--
-- Table structure for table `main_user`
--

CREATE TABLE `main_user` (
  `ID` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `user` varchar(15) NOT NULL,
  `pass` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` bigint(20) NOT NULL,
  `employee_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `text` text NOT NULL,
  `sent_date_time` int(11) NOT NULL,
  `favorite` int(1) NOT NULL,
  `is_deleted` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `post_job`
--

CREATE TABLE `post_job` (
  `ID` int(20) NOT NULL,
  `Catagory` varchar(20) NOT NULL,
  `Sub_cat` varchar(20) NOT NULL,
  `P_title` varchar(20) NOT NULL,
  `Content` text NOT NULL,
  `File` varchar(250) NOT NULL,
  `Desc` varchar(100) NOT NULL,
  `Ex_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_job1`
--

CREATE TABLE `post_job1` (
  `ID` int(11) NOT NULL,
  `start_work` datetime NOT NULL,
  `end_work` datetime NOT NULL,
  `add_skill` varchar(20) NOT NULL,
  `fix_budg` float NOT NULL,
  `hour_budg` float NOT NULL,
  `payout` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_job2`
--

CREATE TABLE `post_job2` (
  `ID` int(11) NOT NULL,
  `Catagory` varchar(100) NOT NULL,
  `Sub_cat` varchar(100) NOT NULL,
  `Skill` varchar(100) NOT NULL,
  `quality` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `sale_datetime` int(11) NOT NULL,
  `sale_complete_datetime` int(11) NOT NULL,
  `is_completed` int(1) NOT NULL,
  `feedback` text NOT NULL,
  `feedback_datetime` int(11) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `count_sales` int(11) NOT NULL,
  `rate` decimal(10,0) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `translation`
--

CREATE TABLE `translation` (
  `id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `lang_table_id` int(11) NOT NULL,
  `eng_string` varchar(256) NOT NULL,
  `translated_string` varchar(256) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `translation`
--

INSERT INTO `translation` (`id`, `language_id`, `lang_table_id`, `eng_string`, `translated_string`, `is_deleted`) VALUES
(1, 1, 1, 'Application Front', '', 0),
(2, 2, 1, 'Application Front', 'Arabic Application Text', 0),
(3, 3, 1, 'Application Front', '', 0),
(4, 1, 2, 'Application Userdash', '', 0),
(5, 2, 2, 'Application Userdash', 'Arabic Text for User Dashboard', 0),
(6, 3, 2, 'Application Userdash', '', 0),
(7, 1, 1, 'Project Front', '', 0),
(8, 2, 1, 'Project Front', '', 0),
(9, 3, 1, 'Project Front', '', 0),
(10, 1, 3, 'Application Client Dashboard', '', 0),
(11, 2, 3, 'Application Client Dashboard', '', 0),
(12, 3, 3, 'Application Client Dashboard', 'Indian App text', 0),
(13, 1, 3, 'Project Client Dashboard', '', 0),
(14, 2, 3, 'Project Client Dashboard', '', 0),
(15, 3, 3, 'Project Client Dashboard', '', 0),
(16, 1, 4, 'Application Email', '', 0),
(17, 2, 4, 'Application Email', '', 0),
(18, 3, 4, 'Application Email', '', 0),
(19, 1, 4, 'Project Email', 'Project Text for BN', 0),
(20, 2, 4, 'Project Email', '', 0),
(21, 3, 4, 'Project Email', 'Indian Project Email Text', 0),
(22, 1, 2, 'Project Userdash', '', 0),
(23, 2, 2, 'Project Userdash', '', 0),
(24, 3, 2, 'Project Userdash', '', 0),
(25, 1, 2, 'Login Userdash', '', 0),
(26, 2, 2, 'Login Userdash', '', 0),
(27, 3, 2, 'Login Userdash', 'Indial Login string', 0),
(28, 1, 2, 'Login Userdash', '', 0),
(29, 2, 2, 'Login Userdash', '', 0),
(30, 3, 2, 'Login Userdash', '', 0),
(47, 11, 3, 'Application Client Dashboard', '', 0),
(46, 11, 1, 'Project Front', '', 0),
(45, 11, 2, 'Application Userdash', '', 0),
(44, 11, 1, 'Application Front', '', 0),
(48, 11, 3, 'Project Client Dashboard', 'Project Italian', 0),
(49, 11, 4, 'Application Email', '', 0),
(50, 11, 4, 'Project Email', '', 0),
(51, 11, 2, 'Project Userdash', '', 0),
(52, 11, 2, 'Login Userdash', 'Login Italian', 0),
(53, 11, 2, 'Login Userdash', '', 0),
(54, 1, 1, 'Help', '', 0),
(55, 2, 1, 'Help', '', 0),
(56, 3, 1, 'Help', '', 0),
(57, 11, 1, 'Help', '', 0),
(58, 1, 1, 'Login/Register', '', 0),
(59, 2, 1, 'Login/Register', '', 0),
(60, 3, 1, 'Login/Register', '', 0),
(61, 11, 1, 'Login/Register', '', 0),
(62, 1, 1, 'Home', '', 0),
(63, 2, 1, 'Home', '', 0),
(64, 3, 1, 'Home', '', 0),
(65, 11, 1, 'Home', '', 0),
(66, 1, 1, 'Buy Services', '', 0),
(67, 2, 1, 'Buy Services', '', 0),
(68, 3, 1, 'Buy Services', '', 0),
(69, 11, 1, 'Buy Services', '', 0),
(70, 1, 1, 'Our Services', '', 0),
(71, 2, 1, 'Our Services', '', 0),
(72, 3, 1, 'Our Services', '', 0),
(73, 11, 1, 'Our Services', '', 0),
(74, 1, 1, 'Job Portal', '', 0),
(75, 2, 1, 'Job Portal', '', 0),
(76, 3, 1, 'Job Portal', '', 0),
(77, 11, 1, 'Job Portal', '', 0),
(78, 1, 1, 'Be partner', '', 0),
(79, 2, 1, 'Be partner', '', 0),
(80, 3, 1, 'Be partner', '', 0),
(81, 11, 1, 'Be partner', '', 0),
(82, 1, 1, 'Post your Job', '', 0),
(83, 2, 1, 'Post your Job', '', 0),
(84, 3, 1, 'Post your Job', '', 0),
(85, 11, 1, 'Post your Job', '', 0),
(86, 1, 1, 'Find & Hire Talented Freelancers', '', 0),
(87, 2, 1, 'Find & Hire Talented Freelancers', '', 0),
(88, 3, 1, 'Find & Hire Talented Freelancers', '', 0),
(89, 11, 1, 'Find & Hire Talented Freelancers', '', 0),
(90, 1, 1, 'Search freelance services', '', 0),
(91, 2, 1, 'Search freelance services', '', 0),
(92, 3, 1, 'Search freelance services', '', 0),
(93, 11, 1, 'Search freelance services', '', 0),
(94, 1, 1, 'Million', '', 0),
(95, 2, 1, 'Million', '', 0),
(96, 3, 1, 'Million', '', 0),
(97, 11, 1, 'Million', '', 0),
(98, 1, 1, 'members worldwide', '', 0),
(99, 2, 1, 'members worldwide', '', 0),
(100, 3, 1, 'members worldwide', '', 0),
(101, 11, 1, 'members worldwide', '', 0),
(102, 1, 1, 'jobs completed', '', 0),
(103, 2, 1, 'jobs completed', '', 0),
(104, 3, 1, 'jobs completed', '', 0),
(105, 11, 1, 'jobs completed', '', 0),
(106, 1, 1, 'paid to gurus', '', 0),
(107, 2, 1, 'paid to gurus', '', 0),
(108, 3, 1, 'paid to gurus', '', 0),
(109, 11, 1, 'paid to gurus', '', 0),
(110, 1, 1, 'Have a large number of freelancers or jobs to manage?', '', 0),
(111, 2, 1, 'Have a large number of freelancers or jobs to manage?', '', 0),
(112, 3, 1, 'Have a large number of freelancers or jobs to manage?', '', 0),
(113, 11, 1, 'Have a large number of freelancers or jobs to manage?', '', 0),
(114, 1, 1, 'Use Freelance Guru Enterprise', '', 0),
(115, 2, 1, 'Use Freelance Guru Enterprise', '', 0),
(116, 3, 1, 'Use Freelance Guru Enterprise', '', 0),
(117, 11, 1, 'Use Freelance Guru Enterprise', '', 0),
(118, 1, 1, 'Buy Services', '', 0),
(119, 2, 1, 'Buy Services', '', 0),
(120, 3, 1, 'Buy Services', '', 0),
(121, 11, 1, 'Buy Services', '', 0),
(122, 1, 1, 'SHARE NOW', '', 0),
(123, 2, 1, 'SHARE NOW', '', 0),
(124, 3, 1, 'SHARE NOW', '', 0),
(125, 11, 1, 'SHARE NOW', '', 0),
(126, 1, 1, 'favorite', '', 0),
(127, 2, 1, 'favorite', '', 0),
(128, 3, 1, 'favorite', '', 0),
(129, 11, 1, 'favorite', '', 0),
(130, 1, 1, 'Buy now', '', 0),
(131, 2, 1, 'Buy now', '', 0),
(132, 3, 1, 'Buy now', '', 0),
(133, 11, 1, 'Buy now', '', 0),
(134, 1, 1, 'How it works', '', 0),
(135, 2, 1, 'How it works', '', 0),
(136, 3, 1, 'How it works', '', 0),
(137, 11, 1, 'How it works', '', 0),
(138, 1, 1, 'FIND', '', 0),
(139, 2, 1, 'FIND', '', 0),
(140, 3, 1, 'FIND', '', 0),
(141, 11, 1, 'FIND', '', 0),
(142, 1, 1, 'Post a job to tell us about your project. We\'ll quickly match you with the right freelancers.', '', 0),
(143, 2, 1, 'Post a job to tell us about your project. We\'ll quickly match you with the right freelancers.', '', 0),
(144, 3, 1, 'Post a job to tell us about your project. We\'ll quickly match you with the right freelancers.', '', 0),
(145, 11, 1, 'Post a job to tell us about your project. We\'ll quickly match you with the right freelancers.', '', 0),
(146, 1, 1, 'HIRE', '', 0),
(147, 2, 1, 'HIRE', '', 0),
(148, 3, 1, 'HIRE', '', 0),
(149, 11, 1, 'HIRE', '', 0),
(150, 1, 1, 'Browse profiles, reviews, and proposals then interview top candidates. Hire a favorite and begin your project.', '', 0),
(151, 2, 1, 'Browse profiles, reviews, and proposals then interview top candidates. Hire a favorite and begin your project.', '', 0),
(152, 3, 1, 'Browse profiles, reviews, and proposals then interview top candidates. Hire a favorite and begin your project.', '', 0),
(153, 11, 1, 'Browse profiles, reviews, and proposals then interview top candidates. Hire a favorite and begin your project.', '', 0),
(154, 1, 1, 'WORK', '', 0),
(155, 2, 1, 'WORK', '', 0),
(156, 3, 1, 'WORK', '', 0),
(157, 11, 1, 'WORK', '', 0),
(158, 1, 1, 'Use the \"Freelancer Guru\" platform to chat, share files, and collaborate from your desktop or on the go.', '', 0),
(159, 2, 1, 'Use the \"Freelancer Guru\" platform to chat, share files, and collaborate from your desktop or on the go.', '', 0),
(160, 3, 1, 'Use the \"Freelancer Guru\" platform to chat, share files, and collaborate from your desktop or on the go.', '', 0),
(161, 11, 1, 'Use the \"Freelancer Guru\" platform to chat, share files, and collaborate from your desktop or on the go.', '', 0),
(162, 1, 1, 'PAY', '', 0),
(163, 2, 1, 'PAY', '', 0),
(164, 3, 1, 'PAY', '', 0),
(165, 11, 1, 'PAY', '', 0),
(166, 1, 1, 'Invoicing and payments happen through Freelancer Guru. With Freelancer Guru Protection, only pay for work you authorize.', '', 0),
(167, 2, 1, 'Invoicing and payments happen through Freelancer Guru. With Freelancer Guru Protection, only pay for work you authorize.', '', 0),
(168, 3, 1, 'Invoicing and payments happen through Freelancer Guru. With Freelancer Guru Protection, only pay for work you authorize.', '', 0),
(169, 11, 1, 'Invoicing and payments happen through Freelancer Guru. With Freelancer Guru Protection, only pay for work you authorize.', '', 0),
(170, 1, 1, 'Work with someone perfect for your team.', '', 0),
(171, 2, 1, 'Work with someone perfect for your team.', '', 0),
(172, 3, 1, 'Work with someone perfect for your team.', '', 0),
(173, 11, 1, 'Work with someone perfect for your team.', '', 0),
(174, 1, 1, 'CATEGORY\'S', '', 0),
(175, 2, 1, 'CATEGORY\'S', '', 0),
(176, 3, 1, 'CATEGORY\'S', '', 0),
(177, 11, 1, 'CATEGORY\'S', '', 0),
(178, 1, 1, 'All', '', 0),
(179, 2, 1, 'All', '', 0),
(180, 3, 1, 'All', '', 0),
(181, 11, 1, 'All', '', 0),
(182, 1, 1, 'Web', '', 0),
(183, 2, 1, 'Web', '', 0),
(184, 3, 1, 'Web', '', 0),
(185, 11, 1, 'Web', '', 0),
(186, 1, 1, 'Photography', '', 0),
(187, 2, 1, 'Photography', '', 0),
(188, 3, 1, 'Photography', '', 0),
(189, 11, 1, 'Photography', '', 0),
(190, 1, 1, 'Branding', '', 0),
(191, 2, 1, 'Branding', '', 0),
(192, 3, 1, 'Branding', '', 0),
(193, 11, 1, 'Branding', '', 0),
(194, 1, 1, 'App', '', 0),
(195, 2, 1, 'App', '', 0),
(196, 3, 1, 'App', '', 0),
(197, 11, 1, 'App', '', 0),
(198, 1, 1, 'Hire Freelancers & Grow your Business', '', 0),
(199, 2, 1, 'Hire Freelancers & Grow your Business', '', 0),
(200, 3, 1, 'Hire Freelancers & Grow your Business', '', 0),
(201, 11, 1, 'Hire Freelancers & Grow your Business', '', 0),
(202, 1, 1, 'Employers love Truelancer because they can quickly hire skilled Freelancers, who can deliver quality work on time and help grow their Business', '', 0),
(203, 2, 1, 'Employers love Truelancer because they can quickly hire skilled Freelancers, who can deliver quality work on time and help grow their Business', '', 0),
(204, 3, 1, 'Employers love Truelancer because they can quickly hire skilled Freelancers, who can deliver quality work on time and help grow their Business', '', 0),
(205, 11, 1, 'Employers love Truelancer because they can quickly hire skilled Freelancers, who can deliver quality work on time and help grow their Business', '', 0),
(206, 1, 1, 'Hire Freelancer', '', 0),
(207, 2, 1, 'Hire Freelancer', '', 0),
(208, 3, 1, 'Hire Freelancer', '', 0),
(209, 11, 1, 'Hire Freelancer', '', 0),
(210, 1, 2, 'My Appointments', '', 0),
(211, 2, 2, 'My Appointments', '', 0),
(212, 3, 2, 'My Appointments', '', 0),
(213, 11, 2, 'My Appointments', '', 0),
(214, 1, 2, 'Message', '', 0),
(215, 2, 2, 'Message', '', 0),
(216, 3, 2, 'Message', '', 0),
(217, 11, 2, 'Message', '', 0),
(218, 1, 2, 'Proposal', '', 0),
(219, 2, 2, 'Proposal', '', 0),
(220, 3, 2, 'Proposal', '', 0),
(221, 11, 2, 'Proposal', '', 0),
(222, 1, 2, 'Info', '', 0),
(223, 2, 2, 'Info', '', 0),
(224, 3, 2, 'Info', '', 0),
(225, 11, 2, 'Info', '', 0),
(226, 1, 2, 'Post your Job', '', 0),
(227, 2, 2, 'Post your Job', '', 0),
(228, 3, 2, 'Post your Job', '', 0),
(229, 11, 2, 'Post your Job', '', 0),
(230, 1, 2, 'My Profile', '', 0),
(231, 2, 2, 'My Profile', '', 0),
(232, 3, 2, 'My Profile', '', 0),
(233, 11, 2, 'My Profile', '', 0),
(234, 1, 2, 'Help', '', 0),
(235, 2, 2, 'Help', '', 0),
(236, 3, 2, 'Help', '', 0),
(237, 11, 2, 'Help', '', 0),
(238, 1, 2, 'Be Partner', '', 0),
(239, 2, 2, 'Be Partner', '', 0),
(240, 3, 2, 'Be Partner', '', 0),
(241, 11, 2, 'Be Partner', '', 0),
(242, 1, 2, 'Settings', '', 0),
(243, 2, 2, 'Settings', '', 0),
(244, 3, 2, 'Settings', '', 0),
(245, 11, 2, 'Settings', '', 0),
(246, 1, 2, 'Logout', '', 0),
(247, 2, 2, 'Logout', '', 0),
(248, 3, 2, 'Logout', '', 0),
(249, 11, 2, 'Logout', '', 0),
(250, 1, 2, 'Statics', '', 0),
(251, 2, 2, 'Statics', '', 0),
(252, 3, 2, 'Statics', '', 0),
(253, 11, 2, 'Statics', '', 0),
(254, 1, 2, 'My Favourite', '', 0),
(255, 2, 2, 'My Favourite', '', 0),
(256, 3, 2, 'My Favourite', '', 0),
(257, 11, 2, 'My Favourite', '', 0),
(258, 1, 2, 'Service offers', '', 0),
(259, 2, 2, 'Service offers', '', 0),
(260, 3, 2, 'Service offers', '', 0),
(261, 11, 2, 'Service offers', '', 0),
(262, 1, 2, 'Jobs Offers', '', 0),
(263, 2, 2, 'Jobs Offers', '', 0),
(264, 3, 2, 'Jobs Offers', '', 0),
(265, 11, 2, 'Jobs Offers', '', 0),
(266, 1, 2, 'My Settings', '', 0),
(267, 2, 2, 'My Settings', '', 0),
(268, 3, 2, 'My Settings', '', 0),
(269, 11, 2, 'My Settings', '', 0),
(270, 1, 2, 'Home', '', 0),
(271, 2, 2, 'Home', '', 0),
(272, 3, 2, 'Home', '', 0),
(273, 11, 2, 'Home', '', 0),
(274, 1, 2, 'My Proposals', '', 0),
(275, 2, 2, 'My Proposals', '', 0),
(276, 3, 2, 'My Proposals', '', 0),
(277, 11, 2, 'My Proposals', '', 0),
(278, 1, 2, 'My Posts', '', 0),
(279, 2, 2, 'My Posts', '', 0),
(280, 3, 2, 'My Posts', '', 0),
(281, 11, 2, 'My Posts', '', 0),
(282, 1, 2, 'My Contracts', '', 0),
(283, 2, 2, 'My Contracts', '', 0),
(284, 3, 2, 'My Contracts', '', 0),
(285, 11, 2, 'My Contracts', '', 0),
(286, 1, 2, 'My Job Tasks', '', 0),
(287, 2, 2, 'My Job Tasks', '', 0),
(288, 3, 2, 'My Job Tasks', '', 0),
(289, 11, 2, 'My Job Tasks', '', 0),
(290, 1, 3, 'Appointment', '', 0),
(291, 2, 3, 'Appointment', '', 0),
(292, 3, 3, 'Appointment', '', 0),
(293, 11, 3, 'Appointment', '', 0),
(294, 1, 3, 'Message', '', 0),
(295, 2, 3, 'Message', '', 0),
(296, 3, 3, 'Message', '', 0),
(297, 11, 3, 'Message', '', 0),
(298, 1, 3, 'Job Offers', '', 0),
(299, 2, 3, 'Job Offers', '', 0),
(300, 3, 3, 'Job Offers', '', 0),
(301, 11, 3, 'Job Offers', '', 0),
(302, 1, 3, 'Info', '', 0),
(303, 2, 3, 'Info', '', 0),
(304, 3, 3, 'Info', '', 0),
(305, 11, 3, 'Info', '', 0),
(306, 1, 3, 'Credit', '', 0),
(307, 2, 3, 'Credit', '', 0),
(308, 3, 3, 'Credit', '', 0),
(309, 11, 3, 'Credit', '', 0),
(310, 1, 3, 'Post your Job', '', 0),
(311, 2, 3, 'Post your Job', '', 0),
(312, 3, 3, 'Post your Job', '', 0),
(313, 11, 3, 'Post your Job', '', 0),
(314, 1, 3, 'My Profile', '', 0),
(315, 2, 3, 'My Profile', '', 0),
(316, 3, 3, 'My Profile', '', 0),
(317, 11, 3, 'My Profile', '', 0),
(318, 1, 3, 'Settings', '', 0),
(319, 2, 3, 'Settings', '', 0),
(320, 3, 3, 'Settings', '', 0),
(321, 11, 3, 'Settings', '', 0),
(322, 1, 3, 'Help', '', 0),
(323, 2, 3, 'Help', '', 0),
(324, 3, 3, 'Help', '', 0),
(325, 11, 3, 'Help', '', 0),
(326, 1, 3, 'Logout', '', 0),
(327, 2, 3, 'Logout', '', 0),
(328, 3, 3, 'Logout', '', 0),
(329, 11, 3, 'Logout', '', 0),
(330, 1, 3, 'Upgrade Your Account', '', 0),
(331, 2, 3, 'Upgrade Your Account', '', 0),
(332, 3, 3, 'Upgrade Your Account', '', 0),
(333, 11, 3, 'Upgrade Your Account', '', 0),
(334, 1, 3, 'Home', '', 0),
(335, 2, 3, 'Home', '', 0),
(336, 3, 3, 'Home', '', 0),
(337, 11, 3, 'Home', '', 0),
(338, 1, 3, 'Job Offers', '', 0),
(339, 2, 3, 'Job Offers', '', 0),
(340, 3, 3, 'Job Offers', '', 0),
(341, 11, 3, 'Job Offers', '', 0),
(342, 1, 3, 'Job Activity', '', 0),
(343, 2, 3, 'Job Activity', '', 0),
(344, 3, 3, 'Job Activity', '', 0),
(345, 11, 3, 'Job Activity', '', 0),
(346, 1, 3, 'Job Contracts', '', 0),
(347, 2, 3, 'Job Contracts', '', 0),
(348, 3, 3, 'Job Contracts', '', 0),
(349, 11, 3, 'Job Contracts', '', 0),
(350, 1, 3, 'Sale Services', '', 0),
(351, 2, 3, 'Sale Services', '', 0),
(352, 3, 3, 'Sale Services', '', 0),
(353, 11, 3, 'Sale Services', '', 0),
(354, 1, 3, 'My Payments', '', 0),
(355, 2, 3, 'My Payments', '', 0),
(356, 3, 3, 'My Payments', '', 0),
(357, 11, 3, 'My Payments', '', 0),
(358, 1, 3, 'My Coins', '', 0),
(359, 2, 3, 'My Coins', '', 0),
(360, 3, 3, 'My Coins', '', 0),
(361, 11, 3, 'My Coins', '', 0),
(362, 1, 3, 'Ticket Support', '', 0),
(363, 2, 3, 'Ticket Support', '', 0),
(364, 3, 3, 'Ticket Support', '', 0),
(365, 11, 3, 'Ticket Support', '', 0),
(366, 1, 3, 'My Appointments', '', 0),
(367, 2, 3, 'My Appointments', '', 0),
(368, 3, 3, 'My Appointments', '', 0),
(369, 11, 3, 'My Appointments', '', 0),
(370, 1, 3, 'Purchase History', '', 0),
(371, 2, 3, 'Purchase History', '', 0),
(372, 3, 3, 'Purchase History', '', 0),
(373, 11, 3, 'Purchase History', '', 0),
(374, 1, 3, 'Search Employer', '', 0),
(375, 2, 3, 'Search Employer', '', 0),
(376, 3, 3, 'Search Employer', '', 0),
(377, 11, 3, 'Search Employer', '', 0),
(378, 1, 3, 'My Reviews', '', 0),
(379, 2, 3, 'My Reviews', '', 0),
(380, 3, 3, 'My Reviews', '', 0),
(381, 11, 3, 'My Reviews', '', 0),
(382, 1, 3, 'My Warranty', '', 0),
(383, 2, 3, 'My Warranty', '', 0),
(384, 3, 3, 'My Warranty', '', 0),
(385, 11, 3, 'My Warranty', '', 0),
(386, 1, 3, 'My Team', '', 0),
(387, 2, 3, 'My Team', '', 0),
(388, 3, 3, 'My Team', '', 0),
(389, 11, 3, 'My Team', '', 0),
(390, 1, 3, 'My Clients', '', 0),
(391, 2, 3, 'My Clients', '', 0),
(392, 3, 3, 'My Clients', '', 0),
(393, 11, 3, 'My Clients', '', 0),
(394, 1, 3, 'My Income', '', 0),
(395, 2, 3, 'My Income', '', 0),
(396, 3, 3, 'My Income', '', 0),
(397, 11, 3, 'My Income', '', 0),
(398, 1, 3, 'Statics', '', 0),
(399, 2, 3, 'Statics', '', 0),
(400, 3, 3, 'Statics', '', 0),
(401, 11, 3, 'Statics', '', 0),
(402, 1, 3, 'About Us', '', 0),
(403, 2, 3, 'About Us', '', 0),
(404, 3, 3, 'About Us', '', 0),
(405, 11, 3, 'About Us', '', 0),
(406, 1, 3, 'Our Team', '', 0),
(407, 2, 3, 'Our Team', '', 0),
(408, 3, 3, 'Our Team', '', 0),
(409, 11, 3, 'Our Team', '', 0),
(410, 1, 3, 'Our Services', '', 0),
(411, 2, 3, 'Our Services', '', 0),
(412, 3, 3, 'Our Services', '', 0),
(413, 11, 3, 'Our Services', '', 0),
(414, 1, 3, 'Portfolio', '', 0),
(415, 2, 3, 'Portfolio', '', 0),
(416, 3, 3, 'Portfolio', '', 0),
(417, 11, 3, 'Portfolio', '', 0),
(418, 1, 3, 'Our Follower', '', 0),
(419, 2, 3, 'Our Follower', '', 0),
(420, 3, 3, 'Our Follower', '', 0),
(421, 11, 3, 'Our Follower', '', 0),
(422, 1, 3, 'Company', '', 0),
(423, 2, 3, 'Company', '', 0),
(424, 3, 3, 'Company', '', 0),
(425, 11, 3, 'Company', '', 0),
(426, 1, 3, 'Edit', '', 0),
(427, 2, 3, 'Edit', '', 0),
(428, 3, 3, 'Edit', '', 0),
(429, 11, 3, 'Edit', '', 0),
(430, 1, 3, 'Read More', '', 0),
(431, 2, 3, 'Read More', '', 0),
(432, 3, 3, 'Read More', '', 0),
(433, 11, 3, 'Read More', '', 0),
(434, 1, 3, 'WEB DESIGN SERVICES', '', 0),
(435, 2, 3, 'WEB DESIGN SERVICES', '', 0),
(436, 3, 3, 'WEB DESIGN SERVICES', '', 0),
(437, 11, 3, 'WEB DESIGN SERVICES', '', 0),
(438, 1, 3, 'WEB DEVELOPMENT', '', 0),
(439, 2, 3, 'WEB DEVELOPMENT', '', 0),
(440, 3, 3, 'WEB DEVELOPMENT', '', 0),
(441, 11, 3, 'WEB DEVELOPMENT', '', 0),
(442, 1, 3, 'GRAPHIC DESIGN', '', 0),
(443, 2, 3, 'GRAPHIC DESIGN', '', 0),
(444, 3, 3, 'GRAPHIC DESIGN', '', 0),
(445, 11, 3, 'GRAPHIC DESIGN', '', 0),
(446, 1, 3, 'SEO MARKETING', '', 0),
(447, 2, 3, 'SEO MARKETING', '', 0),
(448, 3, 3, 'SEO MARKETING', '', 0),
(449, 11, 3, 'SEO MARKETING', '', 0),
(450, 1, 3, 'MATERIAL DESIGN', '', 0),
(451, 2, 3, 'MATERIAL DESIGN', '', 0),
(452, 3, 3, 'MATERIAL DESIGN', '', 0),
(453, 11, 3, 'MATERIAL DESIGN', '', 0),
(454, 1, 3, 'ARTICLE WRITING', '', 0),
(455, 2, 3, 'ARTICLE WRITING', '', 0),
(456, 3, 3, 'ARTICLE WRITING', '', 0),
(457, 11, 3, 'ARTICLE WRITING', '', 0),
(458, 1, 3, 'OUR PORTFOLIO', '', 0),
(459, 2, 3, 'OUR PORTFOLIO', '', 0),
(460, 3, 3, 'OUR PORTFOLIO', '', 0),
(461, 11, 3, 'OUR PORTFOLIO', '', 0),
(462, 1, 3, 'PERSONAL INFORMATION', '', 0),
(463, 2, 3, 'PERSONAL INFORMATION', '', 0),
(464, 3, 3, 'PERSONAL INFORMATION', '', 0),
(465, 11, 3, 'PERSONAL INFORMATION', '', 0),
(466, 1, 3, 'Gender', '', 0),
(467, 2, 3, 'Gender', '', 0),
(468, 3, 3, 'Gender', '', 0),
(469, 11, 3, 'Gender', '', 0),
(470, 1, 3, 'Male', '', 0),
(471, 2, 3, 'Male', '', 0),
(472, 3, 3, 'Male', '', 0),
(473, 11, 3, 'Male', '', 0),
(474, 1, 3, 'Female', '', 0),
(475, 2, 3, 'Female', '', 0),
(476, 3, 3, 'Female', '', 0),
(477, 11, 3, 'Female', '', 0),
(478, 1, 3, 'Name', '', 0),
(479, 2, 3, 'Name', '', 0),
(480, 3, 3, 'Name', '', 0),
(481, 11, 3, 'Name', '', 0),
(482, 1, 3, 'Birthdate', '', 0),
(483, 2, 3, 'Birthdate', '', 0),
(484, 3, 3, 'Birthdate', '', 0),
(485, 11, 3, 'Birthdate', '', 0),
(486, 1, 3, 'Location', '', 0),
(487, 2, 3, 'Location', '', 0),
(488, 3, 3, 'Location', '', 0),
(489, 11, 3, 'Location', '', 0),
(490, 1, 3, 'Contact Number', '', 0),
(491, 2, 3, 'Contact Number', '', 0),
(492, 3, 3, 'Contact Number', '', 0),
(493, 11, 3, 'Contact Number', '', 0),
(494, 1, 3, 'Email & Password', '', 0),
(495, 2, 3, 'Email & Password', '', 0),
(496, 3, 3, 'Email & Password', '', 0),
(497, 11, 3, 'Email & Password', '', 0),
(498, 1, 3, 'E-mail', '', 0),
(499, 2, 3, 'E-mail', '', 0),
(500, 3, 3, 'E-mail', '', 0),
(501, 11, 3, 'E-mail', '', 0),
(502, 1, 3, 'Password', '', 0),
(503, 2, 3, 'Password', '', 0),
(504, 3, 3, 'Password', '', 0),
(505, 11, 3, 'Password', '', 0),
(506, 1, 3, 'Repeat Password', '', 0),
(507, 2, 3, 'Repeat Password', '', 0),
(508, 3, 3, 'Repeat Password', '', 0),
(509, 11, 3, 'Repeat Password', '', 0),
(510, 1, 3, 'Recent Activity', '', 0),
(511, 2, 3, 'Recent Activity', '', 0),
(512, 3, 3, 'Recent Activity', '', 0),
(513, 11, 3, 'Recent Activity', '', 0),
(514, 1, 3, 'Summary', '', 0),
(515, 2, 3, 'Summary', '', 0),
(516, 3, 3, 'Summary', '', 0),
(517, 11, 3, 'Summary', '', 0),
(518, 1, 3, 'Date Joined', '', 0),
(519, 2, 3, 'Date Joined', '', 0),
(520, 3, 3, 'Date Joined', '', 0),
(521, 11, 3, 'Date Joined', '', 0),
(522, 1, 3, 'Last Logged', '', 0),
(523, 2, 3, 'Last Logged', '', 0),
(524, 3, 3, 'Last Logged', '', 0),
(525, 11, 3, 'Last Logged', '', 0),
(526, 1, 3, 'Status', '', 0),
(527, 2, 3, 'Status', '', 0),
(528, 3, 3, 'Status', '', 0),
(529, 11, 3, 'Status', '', 0),
(530, 1, 3, 'Company Information', '', 0),
(531, 2, 3, 'Company Information', '', 0),
(532, 3, 3, 'Company Information', '', 0),
(533, 11, 3, 'Company Information', '', 0),
(534, 1, 3, 'Company Name', '', 0),
(535, 2, 3, 'Company Name', '', 0),
(536, 3, 3, 'Company Name', '', 0),
(537, 11, 3, 'Company Name', '', 0),
(538, 1, 3, 'Legal Name', '', 0),
(539, 2, 3, 'Legal Name', '', 0),
(540, 3, 3, 'Legal Name', '', 0),
(541, 11, 3, 'Legal Name', '', 0),
(542, 1, 3, 'Contact Person', '', 0),
(543, 2, 3, 'Contact Person', '', 0),
(544, 3, 3, 'Contact Person', '', 0),
(545, 11, 3, 'Contact Person', '', 0),
(546, 1, 3, 'Company Address', '', 0),
(547, 2, 3, 'Company Address', '', 0),
(548, 3, 3, 'Company Address', '', 0),
(549, 11, 3, 'Company Address', '', 0),
(550, 1, 3, 'Country', '', 0),
(551, 2, 3, 'Country', '', 0),
(552, 3, 3, 'Country', '', 0),
(553, 11, 3, 'Country', '', 0),
(554, 1, 3, 'City', '', 0),
(555, 2, 3, 'City', '', 0),
(556, 3, 3, 'City', '', 0),
(557, 11, 3, 'City', '', 0),
(558, 1, 3, 'Zip Code', '', 0),
(559, 2, 3, 'Zip Code', '', 0),
(560, 3, 3, 'Zip Code', '', 0),
(561, 11, 3, 'Zip Code', '', 0),
(562, 1, 3, 'Company Phone', '', 0),
(563, 2, 3, 'Company Phone', '', 0),
(564, 3, 3, 'Company Phone', '', 0),
(565, 11, 3, 'Company Phone', '', 0),
(566, 1, 3, 'Company Email', '', 0),
(567, 2, 3, 'Company Email', '', 0),
(568, 3, 3, 'Company Email', '', 0),
(569, 11, 3, 'Company Email', '', 0),
(570, 1, 3, 'Company VAT', '', 0),
(571, 2, 3, 'Company VAT', '', 0),
(572, 3, 3, 'Company VAT', '', 0),
(573, 11, 3, 'Company VAT', '', 0),
(574, 1, 3, 'UMST ID', '', 0),
(575, 2, 3, 'UMST ID', '', 0),
(576, 3, 3, 'UMST ID', '', 0),
(577, 11, 3, 'UMST ID', '', 0),
(578, 1, 3, 'HRB', '', 0),
(579, 2, 3, 'HRB', '', 0),
(580, 3, 3, 'HRB', '', 0),
(581, 11, 3, 'HRB', '', 0),
(582, 1, 3, 'Owner Informations', '', 0),
(583, 2, 3, 'Owner Informations', '', 0),
(584, 3, 3, 'Owner Informations', '', 0),
(585, 11, 3, 'Owner Informations', '', 0),
(586, 1, 3, 'Last Name', '', 0),
(587, 2, 3, 'Last Name', '', 0),
(588, 3, 3, 'Last Name', '', 0),
(589, 11, 3, 'Last Name', '', 0),
(590, 1, 3, 'House-No', '', 0),
(591, 2, 3, 'House-No', '', 0),
(592, 3, 3, 'House-No', '', 0),
(593, 11, 3, 'House-No', '', 0),
(594, 1, 3, 'STR-No', '', 0),
(595, 2, 3, 'STR-No', '', 0),
(596, 3, 3, 'STR-No', '', 0),
(597, 11, 3, 'STR-No', '', 0),
(598, 1, 3, 'UTMS-ID', '', 0),
(599, 2, 3, 'UTMS-ID', '', 0),
(600, 3, 3, 'UTMS-ID', '', 0),
(601, 11, 3, 'UTMS-ID', '', 0),
(602, 1, 3, 'Phone No', '', 0),
(603, 2, 3, 'Phone No', '', 0),
(604, 3, 3, 'Phone No', '', 0),
(605, 11, 3, 'Phone No', '', 0),
(606, 1, 3, 'Security Questions', '', 0),
(607, 2, 3, 'Security Questions', '', 0),
(608, 3, 3, 'Security Questions', '', 0),
(609, 11, 3, 'Security Questions', '', 0),
(610, 1, 3, 'What is the first and last name of your first boyfriend or girlfriend?', '', 0),
(611, 2, 3, 'What is the first and last name of your first boyfriend or girlfriend?', '', 0),
(612, 3, 3, 'What is the first and last name of your first boyfriend or girlfriend?', '', 0),
(613, 11, 3, 'What is the first and last name of your first boyfriend or girlfriend?', '', 0),
(619, 1, 3, 'What was your favorite place to visit as a child?', '', 0),
(615, 1, 3, 'Which phone number do you remember most from your childhood?', '', 0),
(616, 2, 3, 'Which phone number do you remember most from your childhood?', '', 0),
(617, 3, 3, 'Which phone number do you remember most from your childhood?', '', 0),
(618, 11, 3, 'Which phone number do you remember most from your childhood?', '', 0),
(620, 2, 3, 'What was your favorite place to visit as a child?', '', 0),
(621, 3, 3, 'What was your favorite place to visit as a child?', '', 0),
(622, 11, 3, 'What was your favorite place to visit as a child?', '', 0),
(623, 1, 3, 'Who is your favorite actor, musician, or artist?', '', 0),
(624, 2, 3, 'Who is your favorite actor, musician, or artist?', '', 0),
(625, 3, 3, 'Who is your favorite actor, musician, or artist?', '', 0),
(626, 11, 3, 'Who is your favorite actor, musician, or artist?', '', 0),
(627, 1, 3, 'What is the name of your favorite pet?', '', 0),
(628, 2, 3, 'What is the name of your favorite pet?', '', 0),
(629, 3, 3, 'What is the name of your favorite pet?', '', 0),
(630, 11, 3, 'What is the name of your favorite pet?', '', 0),
(631, 1, 3, 'In what city were you born?', '', 0),
(632, 2, 3, 'In what city were you born?', '', 0),
(633, 3, 3, 'In what city were you born?', '', 0),
(634, 11, 3, 'In what city were you born?', '', 0),
(635, 1, 3, 'What high school did you attend?', '', 0),
(636, 2, 3, 'What high school did you attend?', '', 0),
(637, 3, 3, 'What high school did you attend?', '', 0),
(638, 11, 3, 'What high school did you attend?', '', 0),
(639, 1, 3, 'What is the name of your first school?', '', 0),
(640, 2, 3, 'What is the name of your first school?', '', 0),
(641, 3, 3, 'What is the name of your first school?', '', 0),
(642, 11, 3, 'What is the name of your first school?', '', 0),
(643, 1, 3, 'What is your favorite movie?', '', 0),
(644, 2, 3, 'What is your favorite movie?', '', 0),
(645, 3, 3, 'What is your favorite movie?', '', 0),
(646, 11, 3, 'What is your favorite movie?', '', 0),
(647, 1, 3, 'What is your mother\'s maiden name?', '', 0),
(648, 2, 3, 'What is your mother\'s maiden name?', '', 0),
(649, 3, 3, 'What is your mother\'s maiden name?', '', 0),
(650, 11, 3, 'What is your mother\'s maiden name?', '', 0),
(651, 1, 3, 'What street did you grow up on?', '', 0),
(652, 2, 3, 'What street did you grow up on?', '', 0),
(653, 3, 3, 'What street did you grow up on?', '', 0),
(654, 11, 3, 'What street did you grow up on?', '', 0),
(660, 1, 3, 'When is your anniversary?', '', 0),
(656, 1, 3, 'What was the make of your first car?', '', 0),
(657, 2, 3, 'What was the make of your first car?', '', 0),
(658, 3, 3, 'What was the make of your first car?', '', 0),
(659, 11, 3, 'What was the make of your first car?', '', 0),
(661, 2, 3, 'When is your anniversary?', '', 0),
(662, 3, 3, 'When is your anniversary?', '', 0),
(663, 11, 3, 'When is your anniversary?', '', 0),
(664, 1, 3, 'What is your favorite color?', '', 0),
(665, 2, 3, 'What is your favorite color?', '', 0),
(666, 3, 3, 'What is your favorite color?', '', 0),
(667, 11, 3, 'What is your favorite color?', '', 0),
(668, 1, 3, 'Documents', '', 0),
(669, 2, 3, 'Documents', '', 0),
(670, 3, 3, 'Documents', '', 0),
(671, 11, 3, 'Documents', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `language_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `country` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email_confirmed` int(1) NOT NULL,
  `active` int(11) NOT NULL,
  `registration_date` int(11) NOT NULL,
  `photo` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `overview` varchar(100) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_fav_company`
--

CREATE TABLE `user_fav_company` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_fav_services`
--

CREATE TABLE `user_fav_services` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocked_users`
--
ALTER TABLE `blocked_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_category`
--
ALTER TABLE `company_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_type`
--
ALTER TABLE `company_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countryCode` (`countryCode`,`account_id`);

--
-- Indexes for table `dashboard_login`
--
ALTER TABLE `dashboard_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueemail` (`email`,`is_deleted`,`account_id`),
  ADD KEY `indexgroup` (`email`,`password`,`status`,`account_id`,`is_deleted`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_company`
--
ALTER TABLE `employee_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_invite`
--
ALTER TABLE `job_invite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_title`
--
ALTER TABLE `job_title`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lang_tables`
--
ALTER TABLE `lang_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_user`
--
ALTER TABLE `main_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_job`
--
ALTER TABLE `post_job`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `post_job2`
--
ALTER TABLE `post_job2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translation`
--
ALTER TABLE `translation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_fav_company`
--
ALTER TABLE `user_fav_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_fav_services`
--
ALTER TABLE `user_fav_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocked_users`
--
ALTER TABLE `blocked_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_category`
--
ALTER TABLE `company_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_type`
--
ALTER TABLE `company_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;
--
-- AUTO_INCREMENT for table `dashboard_login`
--
ALTER TABLE `dashboard_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee_company`
--
ALTER TABLE `employee_company`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_invite`
--
ALTER TABLE `job_invite`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_title`
--
ALTER TABLE `job_title`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `lang_tables`
--
ALTER TABLE `lang_tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `main_user`
--
ALTER TABLE `main_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post_job`
--
ALTER TABLE `post_job`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post_job2`
--
ALTER TABLE `post_job2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `translation`
--
ALTER TABLE `translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=672;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_fav_company`
--
ALTER TABLE `user_fav_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_fav_services`
--
ALTER TABLE `user_fav_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
