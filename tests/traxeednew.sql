-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2015 at 06:34 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minativenew`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactforms`
--

CREATE TABLE IF NOT EXISTS `contactforms` (
`id` int(11) NOT NULL,
  `formname` varchar(255) COLLATE utf8_bin NOT NULL,
  `formtpl` text COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contactforms`
--

INSERT INTO `contactforms` (`id`, `formname`, `formtpl`, `status`) VALUES
(1, 'Contact form', 'contact.html', 1),
(2, 'Job application', 'job.html', 0),
(3, 'Quota Request', 'qouta.html', 0);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
`id` int(11) NOT NULL,
  `iso` char(2) CHARACTER SET latin1 NOT NULL,
  `name` varchar(80) CHARACTER SET latin1 NOT NULL,
  `nicename` varchar(80) CHARACTER SET latin1 NOT NULL,
  `iso3` char(3) CHARACTER SET latin1 DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=240 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D''IVOIRE', 'Cote D''Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC OF', 'Korea, Democratic People''s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE''S DEMOCRATIC REPUBLIC', 'Lao People''s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `form_contact`
--

CREATE TABLE IF NOT EXISTS `form_contact` (
`id` int(11) NOT NULL,
  `formid` int(11) NOT NULL,
  `type` varchar(250) COLLATE utf8_bin NOT NULL,
  `title` varchar(250) COLLATE utf8_bin NOT NULL,
  `messagecont` text COLLATE utf8_bin NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_bin NOT NULL,
  `email` varchar(250) COLLATE utf8_bin NOT NULL,
  `hash` varchar(250) COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `seen` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=54 ;

--
-- Dumping data for table `form_contact`
--

INSERT INTO `form_contact` (`id`, `formid`, `type`, `title`, `messagecont`, `userid`, `name`, `email`, `hash`, `status`, `date`, `seen`) VALUES
(24, 1, 'contact', 'Mina Atif is here', 'Hello,<br><br>\r\n\r\ncan you send me your phone number pleas?\r\n<br><br>\r\nThanks.', 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '2429336d278d7a3f54d77b7050816733fe', 0, '2015-01-25 20:52:29', 1),
(26, 1, 'contact', 'rthrth', 'trhrthrthrt', 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '26dc13f589b5bb5bd9748dc31b5b8b60f0', 0, '2015-01-25 20:57:58', 1),
(29, 1, 'contact', 'AHmed is here', '<p>AHmed is here</p>', 53, 'Ahmed', 'ahmed@live.com', '299254394dbe4fce001f7e1d198c155022', 0, '2015-01-28 22:18:44', 1),
(31, 1, 'contact', 'Test 1', '<p>Test 1</p>', 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '31fac88f11fd0f6e11cab122f2515248ba', 0, '2015-01-30 16:40:01', 1),
(32, 1, 'contact', 'Test 2', '<p><strong>Test 2</strong></p>', 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '3263457446d9c0dbc454c98c74d7ef17e2', 1, '2015-01-30 16:40:20', 1),
(33, 1, 'contact', 'ahmed test 1', '<p>ahmed test 1</p>', 53, 'Ahmed', 'ahmed@live.com', '33964cd598a2e38701d44098ff9b691f1b', 0, '2015-01-30 16:40:53', 0),
(34, 1, 'contact', 'Some one 1', '<p>Some one 1</p>', 0, 'Some one ', 'som@yahoo.com', '34974a637a9b082d2c5305ef9d1bf7f98f', 0, '2015-01-30 16:41:40', 1),
(35, 1, 'contact', 'Some one 2', '<p><strong>Some one 2</strong></p>', 0, 'Some one 2', 'som2@yahoo.com', '35afecde413540435d998a87de4372e99a', 0, '2015-01-30 16:42:09', 0),
(36, 1, 'contact', 'Hi ahmed', '<p>Hi ahmedHi ahmedHi ahmedHi ahmedHi ahmedHi ahmedHi ahmedHi ahmed</p>', 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '36c629cedb8f7c69e5bcf39e08a656f469', 0, '2015-02-06 17:00:28', 1),
(50, 1, 'contact', 'wefwef wefqwefw', 'wefwefwefwef', 0, 'Mina Atif said', 'minaatifabduallah@gmail.com', '507ab3366f43bc73ab36e4f059295a6785', 0, '2015-10-26 11:30:45', 0),
(51, 1, 'contact', 'wewf qwfwqe wefqwefw qfe', 'wef qwfweqf wefqwefwf', 0, 'Mina Atif said', 'minaatifabduallah@gmail.com', '5174e1e7b2c7ab0bbb2dd5a059684b6a46', 0, '2015-10-26 11:32:14', 0),
(52, 1, 'contact', 'wefwe qwefwef wefwefqwe', 'wefwefqwefwe wefwefwe', 49, 'Mina Atif said', 'minaatifabduallah@gmail.com', '526d7b7892a4c47a3529ff7c7d8b8eca81', 0, '2015-10-26 11:33:40', 0),
(53, 1, 'contact', 'ytjtyjytrejtryj', 'tyrjtyjrtyj', 49, 'Mina Atif said', 'minaatifabduallah@gmail.com', '53c8f34568ecafbf1310a1b31d583e08a0', 0, '2015-10-26 11:43:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `form_replies`
--

CREATE TABLE IF NOT EXISTS `form_replies` (
`id` int(11) NOT NULL,
  `reply` text COLLATE utf8_bin NOT NULL,
  `messageid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_bin NOT NULL,
  `email` varchar(250) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=48 ;

--
-- Dumping data for table `form_replies`
--

INSERT INTO `form_replies` (`id`, `reply`, `messageid`, `userid`, `name`, `email`, `date`) VALUES
(1, 'hello', 24, 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '2015-01-08 09:00:00'),
(12, '<p><img src="http://senseable.mit.edu/obama/images/the-world-1.jpg" alt="" width="350" height="200" /></p>', 24, 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '2015-01-26 11:40:32'),
(14, '<p>regerg</p>\r\n<p>&nbsp;</p>\r\n<p>ergergerg</p>', 24, 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '2015-01-26 12:05:16'),
(15, '<p><iframe style="display: block; margin-left: auto; margin-right: auto;" src="//www.youtube.com/embed/rYEDA3JcQqw" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>', 24, 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '2015-01-26 12:21:20'),
(16, '<p>Last reply in this message.</p>\r\n<p>I did it, hope to continue what i started.</p>\r\n<p><img src="js/tinymce/plugins/emoticons/img/smiley-sealed.gif" alt="sealed" /><img src="js/tinymce/plugins/emoticons/img/smiley-cool.gif" alt="cool" /></p>', 24, 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '2015-01-26 12:25:26'),
(17, '<p>wefwefwefwef</p>', 24, 53, 'Ahmed', 'ahmed@live.com', '2015-01-26 13:38:46'),
(18, '<p>Hello</p>\r\n<p>&nbsp;</p>\r\n<p>this is my second test</p>', 24, 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '2015-01-26 13:46:02'),
(20, '<p>Ahmed is here ..</p>\r\n<p>&nbsp;</p>\r\n<p>Looking forward to your reply.</p>', 24, 53, 'Ahmed', 'ahmed@live.com', '2015-01-26 13:56:31'),
(26, '<p>wefwewwefwef</p>', 24, 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '2015-01-26 14:13:02'),
(27, '<p>wefwef</p>\r\n<p>&nbsp;</p>\r\n<p>wefwef</p>', 24, 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '2015-01-26 14:13:28'),
(28, '<p>wwe</p>\r\n<p>yrtht</p>\r\n<p>&nbsp;</p>\r\n<p>ergre</p>', 24, 53, 'Ahmed', 'ahmed@live.com', '2015-01-26 14:14:46'),
(33, '<p>wqef</p>\r\n<p>&nbsp;</p>\r\n<p>wef</p>', 24, 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '2015-01-26 15:18:24'),
(34, '<p>Thank you</p>\r\n<p>&nbsp;</p>\r\n<p><img src="js/tinymce/plugins/emoticons/img/smiley-cool.gif" alt="cool" /><img src="js/tinymce/plugins/emoticons/img/smiley-cry.gif" alt="cry" /><img src="js/tinymce/plugins/emoticons/img/smiley-embarassed.gif" alt="embarassed" /><img src="js/tinymce/plugins/emoticons/img/smiley-foot-in-mouth.gif" alt="foot-in-mouth" /></p>', 24, 53, 'Ahmed', 'ahmed@live.com', '2015-01-26 15:50:24'),
(35, '<p>Hello</p>\r\n<p>iam here</p>', 24, 53, 'Ahmed', 'ahmed@live.com', '2015-01-28 01:06:00'),
(36, '<p>mina atif</p>', 24, 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '2015-01-28 01:06:41'),
(37, '<p>wefwefqwefwefwef</p>', 29, 53, 'Ahmed', 'ahmed@live.com', '2015-01-29 20:27:10'),
(38, '<p>Guest aebd</p>', 30, 0, 'wfwewefwef', 'mina.daid@yahoo.com', '2015-01-29 20:39:42'),
(39, '<p>65454654</p>', 25, 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '2015-01-29 22:32:10'),
(40, '<p>ougoug;g&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>phpohop</p>', 26, 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '2015-01-29 22:32:41'),
(41, '<p>ewfweqfwefewf</p>', 34, 0, 'Some one ', 'som@yahoo.com', '2015-01-30 16:48:39'),
(42, '<p>Ø´Ø«Ø¨ØµØ«Ø¨ØµØ«Ø¨ØµØ«</p>', 36, 49, 'Mina Atif', 'minaatifabduallah@gmail.com', '2015-02-06 17:10:03'),
(43, 'efweq weqfwefweqfwef', 26, 49, 'Mina Atif said', 'minaatifabduallah@gmail.com', '2015-10-26 11:45:17'),
(44, 'i&#39;m hereeeeeeeeeeee', 26, 49, 'Mina Atif said', 'minaatifabduallah@gmail.com', '2015-10-26 11:45:34'),
(45, 'Hello\r\n&nbsp;\r\nwe will be in touch again\r\n&nbsp;\r\nthanks', 52, 49, 'Mina Atif said', 'minaatifabduallah@gmail.com', '2015-10-26 18:35:15'),
(46, 'wefwef weqfwefw', 52, 49, 'Mina Atif said', 'minaatifabduallah@gmail.com', '2015-10-26 18:37:22'),
(47, 'wefew wefqewfwqef wefweqfewfewf', 52, 49, 'Mina Atif said', 'minaatifabduallah@gmail.com', '2015-10-26 18:38:33');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `userid` int(11) NOT NULL,
  `time` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`userid`, `time`) VALUES
(53, '1445671171'),
(53, '1445671176'),
(53, '1445672806'),
(53, '1445672851'),
(53, '1445674248'),
(53, '1445674450'),
(49, '1445680069'),
(49, '1445783693');

-- --------------------------------------------------------

--
-- Table structure for table `pagemanager`
--

CREATE TABLE IF NOT EXISTS `pagemanager` (
`id` int(11) NOT NULL,
  `pagetitle` varchar(255) COLLATE utf8_bin NOT NULL,
  `pagecontent` text COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Dumping data for table `pagemanager`
--

INSERT INTO `pagemanager` (`id`, `pagetitle`, `pagecontent`, `status`) VALUES
(1, 'Contact Us', '<p>- Good relations:</p>\r\n<p>We consider our clients as business partners not customers since our most important investment is good reputation and common success ,Thus we deal with high flexibility with our business partners to maintain good relations.</p>\r\n<p><br /><span class="style24">- Commitment:</span><br />Knowing our job as a feeding industry that is an important part in the manufacturing process made us put the commitment in time, quality and quantity as our highest value to avoid putting our business partners in any critical situation.<br /><br /><span class="style24">- Common success:</span><br />The success of our clients is a success of our company. We use our wide experience in our field to serve not only products but also technical help to our business partners with the aid of our research and development department to present them the latest technological ways and solutions (In the harness section)<br /><br /><span class="style24">- Efficiency:</span><br />Using the best raw material with giving attention to every little detail and continuous testing for the products in and after the production process by highly trained workers and accurate devices gives our products the efficiency that exceed you expectations.</p>', 0),
(9, 'About Us', '<p><strong><span class="style23">Our vision:</span></strong><br />Using science and technology to facilitate the life of mankind.</p>\r\n<p><br /><strong><span class="style23">Our mission:</span></strong><br />Sustainability of caring and improving our products and services quality to satisfy our clients needs and exceed their expectations.</p>\r\n<p><strong><span class="style23">Who we are:</span></strong><br />We are El Badr Company for Manufacturing established in 2004 .a company that is specified in producing requirements of house hold appliances with supreme quality to maintain our position as the number one company in that field.</p>\r\n<p><strong><span class="style23">Our values:</span></strong><br /><span class="style24">- Good relations:</span><br />We consider our clients as business partners not customers since our most important investment is good reputation and common success ,Thus we deal with high flexibility with our business partners to maintain good relations.</p>\r\n<p><br /><span class="style24">- Commitment:</span><br />Knowing our job as a feeding industry that is an important part in the manufacturing process made us put the commitment in time, quality and quantity as our highest value to avoid putting our business partners in any critical situation.<br /><br /><span class="style24">- Common success:</span><br />The success of our clients is a success of our company. We use our wide experience in our field to serve not only products but also technical help to our business partners with the aid of our research and development department to present them the latest technological ways and solutions (In the harness section)<br /><br /><span class="style24">- Efficiency:</span><br />Using the best raw material with giving attention to every little detail and continuous testing for the products in and after the production process by highly trained workers and accurate devices gives our products the efficiency that exceed you expectations.</p>', 1),
(11, 'Terms of services', '<h2>Welcome to Google!</h2>\r\n<p>Thanks for using our products and services (â€œServicesâ€). The Services are provided by Google Inc. (â€œGoogleâ€), located at 1600 Amphitheatre Parkway, Mountain View, CA 94043, United States.</p>\r\n<p>By using our Services, you are agreeing to these terms. Please read them carefully.</p>\r\n<p>Our Services are very diverse, so sometimes additional terms or product requirements (including age requirements) may apply. Additional terms will be available with the relevant Services, and those additional terms become part of your agreement with us if you use those Services.</p>\r\n<h2 id="toc-services">Using our Services</h2>\r\n<p>You must follow any policies made available to you within the Services.</p>\r\n<p>Donâ€™t misuse our Services. For example, donâ€™t interfere with our Services or try to access them using a method other than the interface and the instructions that we provide. You may use our Services only as permitted by law, including applicable export and re-export control laws and regulations. We may suspend or stop providing our Services to you if you do not comply with our terms or policies or if we are investigating suspected misconduct.</p>\r\n<p>Using our Services does not give you ownership of any intellectual property rights in our Services or the content you access. You may not use content from our Services unless you obtain permission from its owner or are otherwise permitted by law. These terms do not grant you the right to use any branding or logos used in our Services. Donâ€™t remove, obscure, or alter any legal notices displayed in or along with our Services.</p>\r\n<p>Our Services display some content that is not Googleâ€™s. This content is the sole responsibility of the entity that makes it available. We may review content to determine whether it is illegal or violates our policies, and we may remove or refuse to display content that we reasonably believe violates our policies or the law. But that does not necessarily mean that we review content, so please donâ€™t assume that we do.</p>\r\n<p>In connection with your use of the Services, we may send you service announcements, administrative messages, and other information. You may opt out of some of those communications.</p>\r\n<p>Some of our Services are available on mobile devices. Do not use such Services in a way that distracts you and prevents you from obeying traffic or safety laws.</p>\r\n<h2 id="toc-account">Your Google Account</h2>\r\n<p>You may need a Google Account in order to use some of our Services. You may create your own Google Account, or your Google Account may be assigned to you by an administrator, such as your employer or educational institution. If you are using a Google Account assigned to you by an administrator, different or additional terms may apply and your administrator may be able to access or disable your account.</p>\r\n<p>To protect your Google Account, keep your password confidential. You are responsible for the activity that happens on or through your Google Account. Try not to reuse your Google Account password on third-party applications. If you learn of any unauthorized use of your password or Google Account, <a href="http://support.google.com/accounts/bin/answer.py?hl=en&answer=58585">follow these instructions</a>.</p>\r\n<h2 id="toc-protection">Privacy and Copyright Protection</h2>\r\n<p>Googleâ€™s <a href="http://www.google.com/intl/en/policies/privacy/">privacy policies</a> explain how we treat your personal data and protect your privacy when you use our Services. By using our Services, you agree that Google can use such data in accordance with our privacy policies.</p>\r\n<p>We respond to notices of alleged copyright infringement and terminate accounts of repeat infringers according to the process set out in the U.S. Digital Millennium Copyright Act.</p>\r\n<p>We provide information to help copyright holders manage their intellectual property online. If you think somebody is violating your copyrights and want to notify us, you can find information about submitting notices and Googleâ€™s policy about responding to notices <a href="http://support.google.com/bin/static.py?hl=en&ts=1114905&page=ts.cs">in our Help Center</a>.</p>\r\n<h2 id="toc-content">Your Content in our Services</h2>\r\n<p>Some of our Services allow you to upload, submit, store, send or receive content. You retain ownership of any intellectual property rights that you hold in that content. In short, what belongs to you stays yours.</p>\r\n<p>When you upload, submit, store, send or receive content to or through our Services, you give Google (and those we work with) a worldwide license to use, host, store, reproduce, modify, create derivative works (such as those resulting from translations, adaptations or other changes we make so that your content works better with our Services), communicate, publish, publicly perform, publicly display and distribute such content. The rights you grant in this license are for the limited purpose of operating, promoting, and improving our Services, and to develop new ones. This license continues even if you stop using our Services (for example, for a business listing you have added to Google Maps). Some Services may offer you ways to access and remove content that has been provided to that Service. Also, in some of our Services, there are terms or settings that narrow the scope of our use of the content submitted in those Services. Make sure you have the necessary rights to grant us this license for any content that you submit to our Services.</p>\r\n<p>Our automated systems analyze your content (including emails) to provide you personally relevant product features, such as customized search results, tailored advertising, and spam and malware detection. This analysis occurs as the content is sent, received, and when it is stored.</p>\r\n<p>If you have a Google Account, we may display your Profile name, Profile photo, and actions you take on Google or on third-party applications connected to your Google Account (such as +1â€™s, reviews you write and comments you post) in our Services, including displaying in ads and other commercial contexts. We will respect the choices you make to limit sharing or visibility settings in your Google Account. For example, you can choose your settings so your name and photo do not appear in an ad.</p>\r\n<p>You can find more information about how Google uses and stores content in the privacy policy or additional terms for particular Services. If you submit feedback or suggestions about our Services, we may use your feedback or suggestions without obligation to you.</p>\r\n<h2 id="toc-software">About Software in our Services</h2>\r\n<p>When a Service requires or includes downloadable software, this software may update automatically on your device once a new version or feature is available. Some Services may let you adjust your automatic update settings.</p>\r\n<p>Google gives you a personal, worldwide, royalty-free, non-assignable and non-exclusive license to use the software provided to you by Google as part of the Services. This license is for the sole purpose of enabling you to use and enjoy the benefit of the Services as provided by Google, in the manner permitted by these terms. You may not copy, modify, distribute, sell, or lease any part of our Services or included software, nor may you reverse engineer or attempt to extract the source code of that software, unless laws prohibit those restrictions or you have our written permission.</p>', 1),
(12, 'Privacy Policy', '<h2>PrivacyÂ Policy</h2>\r\n<p class="statement">Your privacy is critically important to us. At Automattic we have a few fundamental principles:</p>\r\n<ul>\r\n<li>We donâ€™t ask you for personal information unless we truly need it. (We canâ€™t stand services that ask you for things like your gender or income level for no apparent reason.)</li>\r\n<li>We donâ€™t share your personal information with anyone except to comply with the law, develop our products, or protect our rights.</li>\r\n<li>We donâ€™t store personal information on our servers unless required for the on-going operation of one of our services.</li>\r\n<li>In our blogging products, we aim to make it as simple as possible for you to control whatâ€™s visible to the public, seen by search engines, kept private, and permanently deleted.</li>\r\n</ul>\r\n<p>Below is our privacy policy which incorporates these goals: (Note, weâ€™ve decided to make this privacy policy available under a<a href="http://creativecommons.org/licenses/by-sa/2.5/">Creative Commons Sharealike</a> license, which means youâ€™re more than welcome to steal it and repurpose it for your own use, just make sure to replace references to us with ones to you, and if you want weâ€™d appreciate a link to Automattic.com somewhere on your site. We spent a lot of money and time on the below, and other people shouldnâ€™t need to do the same.)</p>\r\n<p>If you have questions about deleting or correcting your personal data please contact our <a href="http://en.support.wordpress.com/">support team</a>.</p>\r\n<p>Automattic Inc. (â€œ<strong>Automattic</strong>â€) operates several websites including <a href="http://automattic.com/">automattic.com</a>, <a href="http://wordpress.com/">wordpress.com</a>, <a href="http://gravatar.com/">gravatar.com</a>,<a href="http://intensedebate.com/">intensedebate.com</a>, and <a href="http://akismet.com/">akismet.com</a>. It is Automatticâ€™s policy to respect your privacy regarding any information we may collect while operating our websites.</p>\r\n<h3>Website Visitors</h3>\r\n<p>Like most website operators, Automattic collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. Automatticâ€™s purpose in collecting non-personally identifying information is to better understand how Automatticâ€™s visitors use its website. From time to time, Automattic may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage of its website.</p>\r\n<p>Automattic also collects potentially personally-identifying information like Internet Protocol (IP) addresses for logged in users and for users leaving comments on WordPress.com blogs. Automattic only discloses logged in user and commenter IP addresses under the same circumstances that it uses and discloses personally-identifying information as described below, except that blog commenter IP addresses and email addresses are visible and disclosed to the administrators of the blog where the comment was left.</p>\r\n<h3>Gathering of Personally-Identifying Information</h3>\r\n<p>Certain visitors to Automatticâ€™s websites choose to interact with Automattic in ways that require Automattic to gather personally-identifying information. The amount and type of information that Automattic gathers depends on the nature of the interaction. For example, we ask visitors who sign up for a blog at <a href="http://wordpress.com/">WordPress.com</a> to provide a username and email address. Those who engage in transactions with Automattic â€“ by purchasing access to the Akismet comment spam prevention service, for example â€“ are asked to provide additional information, including as necessary the personal and financial information required to process those transactions. In each case, Automattic collects such information only insofar as is necessary or appropriate to fulfill the purpose of the visitorâ€™s interaction with Automattic. Automattic does not disclose personally-identifying information other than as described below. And visitors can always refuse to supply personally-identifying information, with the caveat that it may prevent them from engaging in certain website-related activities.</p>\r\n<h3>Aggregated Statistics</h3>\r\n<p>Automattic may collect statistics about the behavior of visitors to its websites. For instance, Automattic may monitor the most popular blogs on the WordPress.com site or use spam screened by the Akismet service to help identify spam. Automattic may display this information publicly or provide it to others. However, Automattic does not disclose personally-identifying information other than as described below.</p>\r\n<h3>Protection of Certain Personally-Identifying Information</h3>\r\n<p>Automattic discloses potentially personally-identifying and personally-identifying information only to those of its employees, contractors and affiliated organizations that (i) need to know that information in order to process it on Automatticâ€™s behalf or to provide services available at Automatticâ€™s websites, and (ii) that have agreed not to disclose it to others. Some of those employees, contractors and affiliated organizations may be located outside of your home country; by using Automatticâ€™s websites, you consent to the transfer of such information to them. Automattic will not rent or sell potentially personally-identifying and personally-identifying information to anyone. Other than to its employees, contractors and affiliated organizations, as described above, Automattic discloses potentially personally-identifying and personally-identifying information only in response to a subpoena, court order or other governmental request, or when Automattic believes in good faith that disclosure is reasonably necessary to protect the property or rights of Automattic, third parties or the public at large. If you are a registered user of an Automattic website and have supplied your email address, Automattic may occasionally send you an email to tell you about new features, solicit your feedback, or just keep you up to date with whatâ€™s going on with Automattic and our products. We primarily use our various product blogs to communicate this type of information, so we expect to keep this type of email to a minimum. If you send us a request (for example via a support email or via one of our feedback mechanisms), we reserve the right to publish it in order to help us clarify or respond to your request or to help us support other users. Automattic takes all measures reasonably necessary to protect against the unauthorized access, use, alteration or destruction of potentially personally-identifying and personally-identifying information.</p>\r\n<h3>Cookies</h3>\r\n<p>A cookie is a string of information that a website stores on a visitorâ€™s computer, and that the visitorâ€™s browser provides to the website each time the visitor returns. Automattic uses cookies to help Automattic identify and track visitors, their usage of Automattic website, and their website access preferences. Automattic visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using Automatticâ€™s websites, with the drawback that certain features of Automatticâ€™s websites may not function properly without the aid of cookies.</p>\r\n<h3>Business Transfers</h3>\r\n<p>If Automattic, or substantially all of its assets, were acquired, or in the unlikely event that Automattic goes out of business or enters bankruptcy, user information would be one of the assets that is transferred or acquired by a third party. You acknowledge that such transfers may occur, and that any acquirer of Automattic may continue to use your personal information as set forth in this policy.</p>\r\n<h3>Ads</h3>\r\n<p>Ads appearing on any of our websites may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by Automattic and does not cover the use of cookies by any advertisers.</p>\r\n<h3>Comments</h3>\r\n<p>Comments and other content submitted to our Akismet anti-spam service are not saved on our servers unless they were marked as false positives, in which case we store them long enough to use them to improve the service to avoid future false positives.</p>\r\n<h3>Privacy Policy Changes</h3>\r\n<p>Although most changes are likely to be minor, Automattic may change its Privacy Policy from time to time, and in Automatticâ€™s sole discretion. Automattic encourages visitors to frequently check this page for any changes to its Privacy Policy. If you have a WordPress.com account, you should also check your blogâ€™s dashboard for alerts to these changes. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance of such change.</p>\r\n<p><strong>Change log:</strong></p>\r\n<ul>\r\n<li><em>September 18, 2013:</em>Â  Added that blog commenter email addresses are disclosed to administrators of the blog where the comment was left.</li>\r\n<li><em>February 1, 2011:</em> Clarified subpoena language and added Business Transfers paragraph</li>\r\n<li><em>January 3, 2011:</em> Added court order and subpoena clarification</li>\r\n<li><em>July 1, 2010:</em> Revised paragraph about IP addresses to explain when they are collected and that commenter IPs are visible to blog administrators</li>\r\n<li><em>October 29, 2009:</em> Added Comments paragraph to explain Akismet comment storage policy</li>\r\n<li><em>March 10, 2009:</em> Added Ads paragraph to alert users that ads from third parties may use cookies</li>\r\n</ul>', 1),
(13, 'Hi ahme', '<p>Hi ahmed</p>', 1),
(14, 'ewfwef', 'wefwefewf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
`id` int(255) NOT NULL,
  `pname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `value` int(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `pname`, `value`) VALUES
(1, 'can_view_home', 1),
(2, 'can_edit_profile', 2),
(3, 'can_view_user_panel', 4);

-- --------------------------------------------------------

--
-- Table structure for table `plugins`
--

CREATE TABLE IF NOT EXISTS `plugins` (
  `filename` varchar(127) COLLATE utf8_bin NOT NULL DEFAULT '',
  `action` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `plugins`
--

INSERT INTO `plugins` (`filename`, `action`) VALUES
('art.plugin.php', 0),
('market.plugin.php', 0),
('news.plugin.php', 0),
('tickets.plugin.php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pl_market_cats`
--

CREATE TABLE IF NOT EXISTS `pl_market_cats` (
`id` int(11) NOT NULL,
  `motherid` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL,
  `pic` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `pl_market_cats`
--

INSERT INTO `pl_market_cats` (`id`, `motherid`, `name`, `description`, `status`, `pic`) VALUES
(1, 0, 'Cat 1', 'Cat 1Cat 1Cat 1Cat 1Cat 1Cat 1Cat 1Cat 1', 1, ''),
(2, 0, 'Cat 2', 'Cat 2\r\nCat 2\r\nCat 2Cat 2', 1, ''),
(39, 0, 'erhreherh', 'erherhrhe', 1, 'ajax-loader.gif');

-- --------------------------------------------------------

--
-- Table structure for table `pl_news_sections`
--

CREATE TABLE IF NOT EXISTS `pl_news_sections` (
`id` int(11) NOT NULL,
  `motherid` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL,
  `pic` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `pl_news_sections`
--

INSERT INTO `pl_news_sections` (`id`, `motherid`, `name`, `description`, `status`, `pic`) VALUES
(1, 0, 'News Section 1', 'Section 1 Section 1 Section 1', 1, ''),
(2, 0, 'News Section 2', 'Section 2\r\nSection 2\r\nSection 2\r\nSection 2', 1, ''),
(39, 0, 'News Section 3', 'Section 3\r\nSection 3\r\nSection 3\r\nSection 3', 1, 'ajax-loader.gif');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
`id` int(255) NOT NULL,
  `grouptitle` varchar(255) CHARACTER SET latin1 NOT NULL,
  `setname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `value` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `grouptitle`, `setname`, `value`) VALUES
(1, 'mainsettings', 'sitename', 'MiNative Ltd.'),
(2, 'mainsettings', 'siteurl', 'http://localhost/'),
(3, 'mainsettings', 'scriptfolder', 'minative/'),
(4, 'mainsettings', 'adminmail', 'minaatifabduallah@gmail.com'),
(5, 'mainsettings', 'closing', '0'),
(6, 'mainsettings', 'closingmessage', '<i class="glyphicon glyphicon-off" style="font-size:20px;color:red;"></i> <br>\r\nWe are sorry, we have some issues to be solved .. !'),
(7, 'mainsettings', 'metadisc', 'mina atif programing tracon ltd'),
(8, 'mainsettings', 'metakey', 'mina,said,programin,keyword,mina,said,all'),
(9, 'regsettings', 'enablereg', '1'),
(10, 'regsettings', 'uniqueemail', '1'),
(11, 'regsettings', 'uniqueusername', '1'),
(12, 'regsettings', 'mailconfirm', '0'),
(13, 'regsettings', 'adminconfirm', '1'),
(14, 'regsettings', 'disabledusernames', 'admin,sex,fuck');

-- --------------------------------------------------------

--
-- Table structure for table `settingsgroup`
--

CREATE TABLE IF NOT EXISTS `settingsgroup` (
  `setgroupid` int(255) NOT NULL,
  `setgroupname` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `settingsgroup`
--

INSERT INTO `settingsgroup` (`setgroupid`, `setgroupname`) VALUES
(1, 'mainsettings'),
(2, 'langstylesettings'),
(3, 'regsettings');

-- --------------------------------------------------------

--
-- Table structure for table `usergroups`
--

CREATE TABLE IF NOT EXISTS `usergroups` (
`id` int(255) NOT NULL,
  `groupname` varchar(255) COLLATE utf8_bin NOT NULL,
  `permissions` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `usergroups`
--

INSERT INTO `usergroups` (`id`, `groupname`, `permissions`) VALUES
(1, 'Admins', 7),
(2, 'Members', 3),
(3, 'Guests', 1),
(4, 'Awaiting email confirmation', 0),
(5, 'Awaiting Admin confirmation', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(128) COLLATE utf8_bin NOT NULL,
  `user` varchar(20) COLLATE utf8_bin NOT NULL,
  `dname` varchar(50) COLLATE utf8_bin NOT NULL,
  `country` int(5) NOT NULL,
  `city` varchar(20) COLLATE utf8_bin NOT NULL,
  `sex` int(5) NOT NULL,
  `bio` text COLLATE utf8_bin NOT NULL,
  `face` varchar(50) COLLATE utf8_bin NOT NULL,
  `twitter` varchar(50) COLLATE utf8_bin NOT NULL,
  `google` varchar(50) COLLATE utf8_bin NOT NULL,
  `skype` varchar(50) COLLATE utf8_bin NOT NULL,
  `linkedin` varchar(50) COLLATE utf8_bin NOT NULL,
  `yahoo` varchar(50) COLLATE utf8_bin NOT NULL,
  `avatar` varchar(50) COLLATE utf8_bin NOT NULL,
  `website` varchar(50) COLLATE utf8_bin NOT NULL,
  `reg_date` date NOT NULL,
  `group_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL,
  `salt` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=71 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user`, `dname`, `country`, `city`, `sex`, `bio`, `face`, `twitter`, `google`, `skype`, `linkedin`, `yahoo`, `avatar`, `website`, `reg_date`, `group_id`, `last_login`, `salt`) VALUES
(49, 'Mina Atif said', 'minaatifabduallah@gmail.com', '969449f244abe1ff0d91f78b7daa6b31b85227fec62b30edbdcb97e52ca68fe10e7272814269d8ebacf68ab0cf5dd6d86c2bcd0ac7a474303d119793b7011247', 'mina', 'Mina Atif mina', 2, 'cairo', 1, '                     I have been dealing with Computers & Internet since 1997, I started taking courses in 2001, after that I started self-studying networks, computer systems & windows App. programming, then in 2006 I become interested in the Web field, I started it with learning HTML and Photoshop then I moved to design entire websites, after 2 years of studying and working as a freelancer, I started my own company specializing in webhosting. During this period, I was studying programing with PHP&MySQL and managing Linux servers, then I worked as a &#39;Technical Support&#39; specialist, finally, I specialized in â€˜Linux servers administrationâ€™ and I have been working in this field since.\r\n                ', 'http://facebook.com/Mina Atif', 'http://twitter.com/Mina Atif', 'http://google.com/Mina Atif', 'mina_said89', 'http://linkedin.com/Mina Atif', 'eng.3mina', 'wef', 'http://Mina Atif.com/', '2015-01-14', '1', '2015-10-26 19:14:12', '8fb57c118b7fea27708c18b22d63f888a24d17fd43d1edce5ec04ea420ca3ff53879ebb31948ff057884f7ecc1ce232b139c681eb3626298d0e42e215c1569d4'),
(53, 'Ahmed said', 'wqdwd@yahoo.com', '969449f244abe1ff0d91f78b7daa6b31b85227fec62b30edbdcb97e52ca68fe10e7272814269d8ebacf68ab0cf5dd6d86c2bcd0ac7a474303d119793b7011247', 'ahmeds', 'Ahmed said', 44, 'cairo', 1, '                                                                                                                                                                efgwe wefwefwe\r\n                \r\n                \r\n                \r\n                \r\n                \r\n                \r\n                \r\n                ', 'ahmedsss', 'ahmedeee', 'ahmed6eefewf', 'ahmed5ee', 'ahmed8eewef', 'wewefee', '', 'wefwefwe', '0000-00-00', '2', '2015-10-24 12:52:04', '8fb57c118b7fea27708c18b22d63f888a24d17fd43d1edce5ec04ea420ca3ff53879ebb31948ff057884f7ecc1ce232b139c681eb3626298d0e42e215c1569d4'),
(56, 'Fatma', 'fatma@dimofinf.net', '969449f244abe1ff0d91f78b7daa6b31b85227fec62b30edbdcb97e52ca68fe10e7272814269d8ebacf68ab0cf5dd6d86c2bcd0ac7a474303d119793b7011247', 'fatma', 'Fatma said', 6, 'cairo', 2, 'Snippet below inserts same values using Prepared Statement. As discussed earlier the Prepared statements are very effective against SQL injection, you should always use prepared statement in situations like this. Snippet below inserts same values using Prepared Statement. As discussed earlier the Prepared statements are very effective against SQL injection, you should always use prepared statement in situations like this.', 'http://facebook.com/fatma', 'http://twitter.com/fatma', 'http://google.com/fatma', 'fatma_said', 'http://linkedin.com/fatma', 'fatma.said', '', 'http://fatmasaid.com', '0000-00-00', '2', '2015-10-26 06:28:13', '8fb57c118b7fea27708c18b22d63f888a24d17fd43d1edce5ec04ea420ca3ff53879ebb31948ff057884f7ecc1ce232b139c681eb3626298d0e42e215c1569d4'),
(58, 'Aya mina', 'aya@gmail.com', '', 'Aya', 'Aya', 1, 'cairo', 1, '                ', '', '', '', '', '', '', '', '', '2015-01-21', '2', '0000-00-00 00:00:00', ''),
(60, 'Ø«Ø¨ØµÙØºØªÙØºØª', 'ffffff@yahoo.com', '74c5a669ff879fb685a2eb22e2b98649738b88a55df16ea5820b6ac57a7218c1a2741b56af6b0306f0f91484aec00f65ce02b4c697272b827e67bd33257158b4', 'ewferther', 'ytkthrt', 13, 'thrthrth', 1, '', '', '', '', '', '', '', '', '', '2015-10-22', '5', '0000-00-00 00:00:00', '8562e32f48ed9d0dada27472bf93bc9297ac3944599c45af4dd20c3b9a7e9ef1b24e122e9cddad958bb824ecac1ae7b6a3b9ece0f05768567210ea0520ad54cd'),
(69, 'uykuyk', 'tl4t.sa@gmail.com', 'e6613809455a1482daf8dab517de34fab26513de2ecaa6da2f3a97f0819c33b028ee4754f1ffcce1a244e5c4cdf076d4eb98b23fff709bf5886c767cba231e2f', 'yukyuk', 'yukyuk', 187, 'Riyadh', 1, '', '', '', '', '', '', '', '', '', '2015-10-22', '5', '2015-10-22 20:35:21', 'c62f3ed7aa49a268d8a0a8abc220517d0cc2b266927a4a93514647bd0377f7b969445da95c665b83c1595ac798bc833ad7e648b07caf1368470309e432c5eff8'),
(70, 'Asera', 'aser@yahoo.com', '22675c831ab0a951490e9d968dac0bf3e513827d16ae422f3940b33f37f4bda2bb48aab1aa4086ddf3a8c1cb4fea81b0297e4be62e844dc3a408774e304e9823', 'aser', 'aser', 63, 'cairo', 1, '', '', '', '', '', '', '', '', '', '2015-10-24', '5', '2015-10-24 10:23:12', '1d5fb5acaff9facae5e3bcd6e6662ed043ddecb119e2eec6d0e5fbbf449c3b2c691f63b0df850f4d610b21379e42fbcdd88dac8320669429ff8ec5fbdd3a7625');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactforms`
--
ALTER TABLE `contactforms`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_contact`
--
ALTER TABLE `form_contact`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `form_replies`
--
ALTER TABLE `form_replies`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagemanager`
--
ALTER TABLE `pagemanager`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plugins`
--
ALTER TABLE `plugins`
 ADD PRIMARY KEY (`filename`);

--
-- Indexes for table `pl_market_cats`
--
ALTER TABLE `pl_market_cats`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pl_news_sections`
--
ALTER TABLE `pl_news_sections`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`id`), ADD KEY `grouptitle` (`grouptitle`);

--
-- Indexes for table `usergroups`
--
ALTER TABLE `usergroups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactforms`
--
ALTER TABLE `contactforms`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `form_contact`
--
ALTER TABLE `form_contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `form_replies`
--
ALTER TABLE `form_replies`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `pagemanager`
--
ALTER TABLE `pagemanager`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pl_market_cats`
--
ALTER TABLE `pl_market_cats`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `pl_news_sections`
--
ALTER TABLE `pl_news_sections`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `usergroups`
--
ALTER TABLE `usergroups`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
