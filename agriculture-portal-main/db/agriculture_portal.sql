-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 21, 2024 at 10:13 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `agriculture_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(20) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'Admin', '1234456'),
(2, 'Boubacar', 'Bonjour2020');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cropname` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_mobile` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_address` varchar(500) NOT NULL,
  `c_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`c_id`, `c_name`, `c_mobile`, `c_email`, `c_address`, `c_message`) VALUES
(6, 'vaishnavid', '9878749887', 'vaishnavi.19cs109@sode-edu.in', 'udupi', 'its working'),
(7, 'Boubacar ', '0676861686', 'contact@ngroupagency.com', 'cité universitaire internationale ,rabat', 'Bonjour, comment analysez vous vos données agricoles ?');

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `Crop_id` int(255) NOT NULL,
  `Crop_name` varchar(255) NOT NULL,
  `N_value` double NOT NULL,
  `P_value` double NOT NULL,
  `K_value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`Crop_id`, `Crop_name`, `N_value`, `P_value`, `K_value`) VALUES
(1, 'Riz', 20, 25, 25),
(2, 'lentille', 50, 25, 0),
(3, 'maïs', 135, 62.5, 50),
(4, 'Coton', 50, 25, 25),
(5, 'Soja', 20, 80, 40),
(6, 'Mangue', 12.5, 25, 12.5),
(7, 'grenade', 25, 50, 75),
(8, 'raisins', 300, 100, 200);

-- --------------------------------------------------------

--
-- Table structure for table `custlogin`
--

CREATE TABLE `custlogin` (
  `cust_id` int(20) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `otp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custlogin`
--

INSERT INTO `custlogin` (`cust_id`, `cust_name`, `password`, `email`, `address`, `city`, `pincode`, `state`, `phone_no`, `otp`) VALUES
(1, 'Client ', 'Bonjour2020', 'monsieurboubacar91@gmail.com', 'Ville Haute', 'Kénitra', '12000', 'Rabat-Salé-Kénitra', '067654354', 49021);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `DistCode` int(11) NOT NULL,
  `StCode` int(11) DEFAULT NULL,
  `DistrictName` varchar(200) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`DistCode`, `StCode`, `DistrictName`) VALUES
(1, 6, 'Aïn Harrouda'),
(2, 6, 'Ben Yakhlef'),
(3, 6, 'Bouskoura'),
(4, 6, 'Casablanca'),
(5, 6, 'Médiouna'),
(6, 6, 'Mohammadia'),
(7, 6, 'Tit Mellil'),
(8, 6, 'Ben Yakhlef'),
(9, 5, 'Bejaâd'),
(10, 6, 'Ben Ahmed'),
(11, 6, 'Benslimane'),
(12, 6, 'Berrechid'),
(13, 5, 'Boujniba'),
(14, 5, 'Boulanouare'),
(15, 6, 'Bouznika'),
(16, 6, 'Deroua'),
(17, 6, 'El Borouj'),
(18, 6, 'El Gara'),
(19, 6, 'Guisser'),
(20, 5, 'Hattane'),
(21, 5, 'Khouribga'),
(22, 6, 'Loulad'),
(23, 5, 'Oued Zem'),
(24, 6, 'Oulad Abbou'),
(25, 6, 'Oulad H\'Riz Sahel'),
(26, 6, 'Oulad M\'rah'),
(27, 6, 'Oulad Saïd'),
(28, 6, 'Oulad Sidi Ben Daoud'),
(29, 6, 'Ras El Aïn'),
(30, 6, 'Settat'),
(31, 6, 'Sidi Rahhal Chataï'),
(32, 6, 'Soualem'),
(33, 6, 'Azemmour'),
(34, 6, 'Bir Jdid'),
(35, 7, 'Bouguedra'),
(36, 7, 'Echemmaia'),
(37, 6, 'El Jadida'),
(38, 7, 'Hrara'),
(39, 7, 'Ighoud'),
(40, 7, 'Jamâat Shaim'),
(41, 6, 'Jorf Lasfar'),
(42, 6, 'Khemis Zemamra'),
(43, 6, 'Laaounate'),
(44, 6, 'Moulay Abdallah'),
(45, 6, 'Oualidia'),
(46, 6, 'Oulad Amrane'),
(47, 6, 'Oulad Frej'),
(48, 6, 'Oulad Ghadbane'),
(49, 7, 'Safi'),
(50, 6, 'Sebt El Maârif'),
(51, 7, 'Sebt Gzoula'),
(52, 7, 'Sidi Ahmed'),
(53, 6, 'Sidi Ali Ban Hamdouche'),
(54, 6, 'Sidi Bennour'),
(55, 6, 'Sidi Bouzid'),
(56, 6, 'Sidi Smaïl'),
(57, 7, 'Youssoufia'),
(58, 3, 'Fès'),
(59, 3, 'Aïn Cheggag'),
(60, 3, 'Bhalil'),
(61, 3, 'Boulemane'),
(62, 3, 'El Menzel'),
(63, 3, 'Guigou'),
(64, 3, 'Imouzzer Kandar'),
(65, 3, 'Imouzzer Marmoucha'),
(66, 3, 'Missour'),
(67, 3, 'Moulay Yaâcoub'),
(68, 3, 'Ouled Tayeb'),
(69, 3, 'Outat El Haj'),
(70, 3, 'Ribate El Kheir'),
(71, 3, 'Séfrou'),
(72, 3, 'Skhinate'),
(73, 3, 'Tafajight'),
(74, 4, 'Arbaoua'),
(75, 1, 'Aïn Dorij'),
(76, 4, 'Dar Gueddari'),
(77, 4, 'Had Kourt'),
(78, 4, 'Jorf El Melha'),
(79, 4, 'Kénitra'),
(80, 4, 'Khenichet'),
(81, 4, 'Lalla Mimouna'),
(82, 4, 'Mechra Bel Ksiri'),
(83, 4, 'Mehdia'),
(84, 4, 'Moulay Bousselham'),
(85, 4, 'Sidi Allal Tazi'),
(86, 4, 'Sidi Kacem'),
(87, 4, 'Sidi Slimane'),
(88, 4, 'Sidi Taibi'),
(89, 4, 'Sidi Yahya El Gharb'),
(90, 4, 'Souk El Arbaa'),
(91, 9, 'Akka'),
(92, 10, 'Assa'),
(93, 10, 'Bouizakarne'),
(94, 10, 'El Ouatia'),
(95, 11, 'Es-Semara'),
(96, 9, 'Fam El Hisn'),
(97, 9, 'Foum Zguid'),
(98, 10, 'Guelmim'),
(99, 10, 'Taghjijt'),
(100, 10, 'Tan-Tan'),
(101, 9, 'Tata'),
(102, 10, 'Zag'),
(103, 7, 'Marrakech'),
(104, 7, 'Ait Daoud'),
(115, 7, 'Amizmiz'),
(116, 7, 'Assahrij'),
(117, 7, 'Aït Ourir'),
(118, 7, 'Ben Guerir'),
(119, 7, 'Chichaoua'),
(120, 7, 'El Hanchane'),
(121, 7, 'El Kelaâ des Sraghna'),
(122, 7, 'Essaouira'),
(123, 7, 'Fraïta'),
(124, 7, 'Ghmate'),
(125, 8, 'Ighounane'),
(126, 7, 'Imintanoute'),
(127, 7, 'Kattara'),
(128, 7, 'Lalla Takerkoust'),
(129, 7, 'Loudaya'),
(130, 7, 'Lâattaouia'),
(131, 7, 'Moulay Brahim'),
(132, 7, 'Mzouda'),
(133, 7, 'Ounagha'),
(134, 7, 'Sid L\'Mokhtar'),
(135, 7, 'Sid Zouin'),
(136, 7, 'Sidi Abdallah Ghiat'),
(137, 7, 'Sidi Bou Othmane'),
(138, 7, 'Sidi Rahhal'),
(139, 7, 'Skhour Rehamna'),
(140, 7, 'Smimou'),
(141, 7, 'Tafetachte'),
(142, 7, 'Tahannaout'),
(143, 7, 'Talmest'),
(144, 7, 'Tamallalt'),
(145, 7, 'Tamanar'),
(146, 7, 'Tamansourt'),
(147, 7, 'Tameslouht'),
(148, 9, 'Tanalt'),
(149, 7, 'Zeubelemok'),
(150, 3, 'Meknès‎'),
(151, 5, 'Khénifra'),
(152, 3, 'Agourai'),
(153, 3, 'Ain Taoujdate'),
(154, 8, 'MyAliCherif'),
(155, 8, 'Rissani'),
(156, 5, 'Amalou Ighriben'),
(157, 8, 'Aoufous'),
(158, 8, 'Arfoud'),
(159, 3, 'Azrou'),
(160, 3, 'Aïn Jemaa'),
(161, 3, 'Aïn Karma'),
(162, 3, 'Aïn Leuh'),
(163, 3, 'Aït Boubidmane'),
(164, 5, 'Aït Ishaq'),
(165, 8, 'Boudnib'),
(166, 3, 'Boufakrane'),
(167, 8, 'Boumia'),
(168, 3, 'El Hajeb'),
(169, 5, 'Elkbab'),
(170, 5, 'Er-Rich'),
(171, 8, 'Errachidia'),
(172, 8, 'Gardmit'),
(173, 8, 'Goulmima'),
(174, 8, 'Gourrama'),
(175, 5, 'Had Bouhssoussen'),
(176, 3, 'Haj Kaddour'),
(177, 3, 'Ifrane'),
(178, 8, 'Itzer'),
(179, 8, 'Jorf'),
(180, 5, 'Kehf Nsour'),
(181, 5, 'Kerrouchen'),
(182, 3, 'M\'haya'),
(183, 5, 'M\'rirt'),
(184, 8, 'Midelt'),
(185, 8, 'Moulay Ali Cherif'),
(186, 5, 'Moulay Bouazza'),
(187, 3, 'Moulay Idriss Zerhoun'),
(188, 3, 'Moussaoua'),
(189, 3, 'N\'Zalat Bni Amar'),
(190, 5, 'Ouaoumana'),
(191, 3, 'Oued Ifrane'),
(192, 3, 'Sabaa Aiyoun'),
(193, 3, 'Sebt Jahjouh'),
(194, 3, 'Sidi Addi'),
(195, 8, 'Tichoute'),
(196, 5, 'Tighassaline'),
(197, 5, 'Tighza'),
(198, 3, 'Timahdite'),
(199, 8, 'Tinejdad'),
(200, 3, 'Tizguite'),
(201, 3, 'Toulal'),
(202, 8, 'Tounfite'),
(203, 3, 'Zaouia d\'Ifrane'),
(204, 8, 'Zaïda'),
(205, 2, 'Ahfir'),
(206, 2, 'Aklim'),
(207, 2, 'Al Aroui'),
(208, 2, 'Aïn Bni Mathar'),
(209, 2, 'Aïn Erreggada'),
(210, 2, 'Ben Taïeb'),
(211, 2, 'Berkane'),
(212, 2, 'Bni Ansar'),
(213, 2, 'Bni Chiker'),
(214, 2, 'Bni Drar'),
(215, 2, 'Bni Tadjite'),
(216, 2, 'Bouanane'),
(217, 2, 'Bouarfa'),
(218, 2, 'Bouhdila'),
(219, 2, 'Dar El Kebdani'),
(220, 2, 'Debdou'),
(221, 2, 'Douar Kannine'),
(222, 2, 'Driouch'),
(223, 2, 'El Aïoun Sidi Mellouk'),
(224, 2, 'Farkhana'),
(225, 2, 'Figuig'),
(226, 2, 'Ihddaden'),
(227, 2, 'Jaâdar'),
(228, 2, 'Jerada'),
(229, 2, 'Kariat Arekmane'),
(230, 2, 'Kassita'),
(231, 2, 'Kerouna'),
(232, 2, 'Laâtamna'),
(233, 2, 'Madagh'),
(234, 2, 'Midar'),
(235, 2, 'Nador'),
(236, 2, 'Naima'),
(237, 2, 'Oued Heimer'),
(238, 2, 'Oujda'),
(239, 2, 'Ras El Ma'),
(240, 2, 'Saïdia'),
(241, 2, 'Selouane'),
(242, 2, 'Sidi Boubker'),
(243, 2, 'Sidi Slimane Echcharaa'),
(244, 2, 'Talsint'),
(245, 2, 'Taourirt'),
(246, 2, 'Tendrara'),
(247, 2, 'Tiztoutine'),
(248, 2, 'Touima'),
(249, 2, 'Touissit'),
(250, 2, 'Zaïo'),
(251, 2, 'Zeghanghane'),
(252, 4, 'Rabat'),
(253, 4, 'Salé'),
(254, 4, 'Ain El Aouda'),
(255, 4, 'Harhoura'),
(256, 4, 'Khémisset'),
(257, 4, 'Oulmès'),
(258, 4, 'Rommani'),
(259, 4, 'Sidi Allal El Bahraoui'),
(260, 4, 'Sidi Bouknadel'),
(261, 4, 'Skhirate'),
(262, 4, 'Tamesna'),
(263, 4, 'Témara'),
(264, 4, 'Tiddas'),
(265, 4, 'Tiflet'),
(266, 4, 'Touarga'),
(267, 9, 'Agadir'),
(268, 8, 'Agdz'),
(269, 9, 'Agni Izimmer'),
(270, 9, 'Aït Melloul'),
(271, 8, 'Alnif'),
(272, 9, 'Anzi'),
(273, 9, 'Aoulouz'),
(274, 9, 'Aourir'),
(275, 9, 'Arazane'),
(276, 9, 'Aït Baha'),
(277, 9, 'Aït Iaâza'),
(278, 8, 'Aït Yalla'),
(279, 9, 'Ben Sergao'),
(280, 9, 'Biougra'),
(281, 8, 'Boumalne-Dadès'),
(282, 9, 'Dcheira El Jihadia'),
(283, 9, 'Drargua'),
(284, 9, 'El Guerdane'),
(285, 8, 'Harte Lyamine'),
(286, 9, 'Ida Ougnidif'),
(287, 8, 'Ifri'),
(288, 9, 'Igdamen'),
(289, 8, 'Ighil n\'Oumgoun'),
(290, 8, 'Imassine'),
(291, 9, 'Inezgane'),
(292, 9, 'Irherm'),
(293, 8, 'Kelaat-M\'Gouna'),
(294, 9, 'Lakhsas'),
(295, 9, 'Lakhsass'),
(296, 9, 'Lqliâa'),
(297, 8, 'M\'semrir'),
(298, 9, 'Massa (Maroc)'),
(299, 9, 'Megousse'),
(300, 8, 'Ouarzazate'),
(301, 9, 'Oulad Berhil'),
(302, 9, 'Oulad Teïma'),
(303, 8, 'Sarghine'),
(304, 10, 'Sidi Ifni'),
(305, 8, 'Skoura'),
(306, 8, 'Tabounte'),
(307, 9, 'Tafraout'),
(308, 1, 'Taghzout'),
(309, 9, 'Tagzen'),
(310, 9, 'Taliouine'),
(311, 8, 'Tamegroute'),
(312, 9, 'Tamraght'),
(313, 8, 'Tanoumrite Nkob Zagora'),
(314, 8, 'Taourirt ait zaghar'),
(315, 9, 'Taroudannt'),
(316, 9, 'Temsia'),
(317, 9, 'Tifnit'),
(318, 9, 'Tisgdal'),
(319, 9, 'Tiznit'),
(320, 8, 'Toundoute'),
(321, 8, 'Zagora'),
(322, 5, 'Afourar'),
(323, 5, 'Aghbala'),
(324, 5, 'Azilal'),
(325, 5, 'Aït Majden'),
(326, 5, 'Beni Ayat'),
(327, 5, 'Béni Mellal'),
(328, 5, 'Bin elouidane'),
(329, 5, 'Bradia'),
(330, 5, 'Bzou'),
(331, 5, 'Dar Oulad Zidouh'),
(332, 5, 'Demnate'),
(333, 8, 'Dra\'a'),
(334, 5, 'El Ksiba'),
(335, 5, 'Foum Jamaa'),
(336, 5, 'Fquih Ben Salah'),
(337, 5, 'Kasba Tadla'),
(338, 5, 'Ouaouizeght'),
(339, 5, 'Oulad Ayad'),
(340, 5, 'Oulad M\'Barek'),
(341, 5, 'Oulad Yaich'),
(342, 5, 'Sidi Jaber'),
(343, 5, 'Souk Sebt Oulad Nemma'),
(344, 5, 'Zaouïat Cheikh'),
(345, 1, 'Tanger‎'),
(346, 1, 'Tétouan‎'),
(347, 1, 'Akchour'),
(348, 1, 'Assilah'),
(349, 1, 'Bab Berred'),
(350, 1, 'Bab Taza'),
(351, 1, 'Brikcha'),
(352, 1, 'Chefchaouen'),
(353, 1, 'Dar Bni Karrich'),
(354, 1, 'Dar Chaoui'),
(355, 1, 'Fnideq'),
(356, 1, 'Gueznaia'),
(357, 1, 'Jebha'),
(358, 3, 'Karia'),
(359, 1, 'Khémis Sahel'),
(360, 1, 'Ksar El Kébir'),
(361, 1, 'Larache'),
(362, 1, 'M\'diq'),
(363, 1, 'Martil'),
(364, 1, 'Moqrisset'),
(365, 1, 'Oued Laou'),
(366, 1, 'Oued Rmel'),
(367, 1, 'Ouazzane'),
(368, 1, 'Point Cires'),
(369, 1, 'Sidi Lyamani'),
(370, 1, 'Sidi Mohamed ben Abdallah el-Raisuni'),
(371, 1, 'Zinat'),
(372, 1, 'Ajdir‎'),
(373, 3, 'Aknoul‎'),
(374, 1, 'Al Hoceïma‎'),
(375, 1, 'Aït Hichem‎'),
(376, 1, 'Bni Bouayach‎'),
(377, 1, 'Bni Hadifa‎'),
(378, 3, 'Ghafsai‎'),
(379, 2, 'Guercif‎'),
(380, 1, 'Imzouren‎'),
(381, 1, 'Inahnahen‎'),
(382, 1, 'Issaguen (Ketama)‎'),
(383, 6, 'Karia (El Jadida)‎'),
(384, 3, 'Karia Ba Mohamed‎'),
(385, 3, 'Oued Amlil‎'),
(386, 3, 'Oulad Zbair‎'),
(387, 3, 'Tahla‎'),
(388, 1, 'Tala Tazegwaght‎'),
(389, 1, 'Tamassint‎'),
(390, 3, 'Taounate‎'),
(391, 1, 'Targuist‎'),
(392, 3, 'Taza‎'),
(393, 3, 'Taïnaste‎'),
(394, 3, 'Thar Es-Souk‎'),
(395, 3, 'Tissa‎'),
(396, 3, 'Tizi Ouasli‎'),
(397, 11, 'Laayoune‎'),
(398, 11, 'El Marsa‎'),
(399, 11, 'Tarfaya‎'),
(400, 11, 'Boujdour‎'),
(401, 12, 'Awsard'),
(402, 12, 'Oued-Eddahab'),
(403, 1, 'Stehat'),
(404, 5, 'Aït Attab');

-- --------------------------------------------------------

--
-- Table structure for table `farmerlogin`
--

CREATE TABLE `farmerlogin` (
  `farmer_id` int(11) NOT NULL,
  `farmer_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `F_gender` varchar(255) NOT NULL,
  `F_birthday` varchar(255) NOT NULL,
  `F_State` varchar(255) NOT NULL,
  `F_District` varchar(255) NOT NULL,
  `F_Location` varchar(255) NOT NULL,
  `otp` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmerlogin`
--

INSERT INTO `farmerlogin` (`farmer_id`, `farmer_name`, `password`, `email`, `phone_no`, `F_gender`, `F_birthday`, `F_State`, `F_District`, `F_Location`, `otp`) VALUES
(45, 'Nikiema', 'Bonjour2020', 'monsieurboubacar91@gmail.com', '0676861686', 'Male', '1995-05-13', 'Rabat-Salé-Kénitra', 'Mehdia', 'Ville Haute', 60087),
(46, 'Boubacar Nikiema', 'Bonjour2020', 'nikiemaboubacar@gmail.com', '0676861686', 'Male', '1999-02-14', 'Rabat-Salé-Kénitra', 'Kénitra', 'Ville Haute', 65576);

-- --------------------------------------------------------

--
-- Table structure for table `farmer_crops_trade`
--

CREATE TABLE `farmer_crops_trade` (
  `trade_id` int(11) NOT NULL,
  `farmer_fkid` int(50) NOT NULL,
  `Trade_crop` varchar(255) NOT NULL,
  `Crop_quantity` double NOT NULL,
  `costperkg` int(11) NOT NULL,
  `msp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `farmer_history`
--

CREATE TABLE `farmer_history` (
  `History_id` int(11) NOT NULL,
  `farmer_id` int(50) NOT NULL,
  `farmer_crop` varchar(255) NOT NULL,
  `farmer_quantity` int(50) NOT NULL,
  `farmer_price` int(50) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer_history`
--

INSERT INTO `farmer_history` (`History_id`, `farmer_id`, `farmer_crop`, `farmer_quantity`, `farmer_price`, `date`) VALUES
(25, 44, 'bajra', 1, 23, '01/04/2023'),
(26, 44, 'bajra', 1, 23, '03/04/2023'),
(27, 44, 'barley', 1, 2, '03/04/2023'),
(28, 44, 'arhar', 1, 60, '03/04/2023'),
(29, 44, 'bajra', 1, 23, '03/04/2023'),
(30, 44, 'barley', 1, 2, '03/04/2023'),
(31, 44, 'arhar', 1, 60, '03/04/2023');

-- --------------------------------------------------------

--
-- Table structure for table `production_approx`
--

CREATE TABLE `production_approx` (
  `crop` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production_approx`
--

INSERT INTO `production_approx` (`crop`, `quantity`) VALUES
('banane', 0),
('café', 0),
('coton', 0),
('gram noir', 0),
('grenade', 0),
('haricot mungo', 0),
('haricot papillon', 0),
('haricot rouge', 0),
('jute', 0),
('lentilles', 0),
('maïs', 0),
('mangue', 0),
('melon', 0),
('noix de coco', 0),
('orange', 0),
('papaye', 0),
('pastèque', 0),
('pois chiche', 0),
('pois d\'Angole', 0),
('pomme', 0),
('raisins', 0),
('riz', 0);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `StCode` int(11) NOT NULL,
  `StateName` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StCode`, `StateName`) VALUES
(1, 'Tanger-Tétouan-Al Hoceïma'),
(2, 'l\'Oriental'),
(3, 'Fès-Meknès'),
(4, 'Rabat-Salé-Kénitra'),
(5, 'Béni Mellal-Khénifra'),
(6, 'Casablanca-Settat'),
(7, 'Marrakech-Safi'),
(8, 'Drâa-Tafilalet'),
(9, 'Souss-Massa'),
(10, 'Guelmim-Oued Noun'),
(11, 'Laâyoune-Sakia El Hamra'),
(12, 'Dakhla-Oued Ed Dahab');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_name` (`admin_name`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cropname` (`cropname`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`Crop_id`);

--
-- Indexes for table `custlogin`
--
ALTER TABLE `custlogin`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`DistCode`),
  ADD KEY `StCode` (`StCode`);

--
-- Indexes for table `farmerlogin`
--
ALTER TABLE `farmerlogin`
  ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `farmer_crops_trade`
--
ALTER TABLE `farmer_crops_trade`
  ADD PRIMARY KEY (`trade_id`),
  ADD KEY `farmer_fkid` (`farmer_fkid`);

--
-- Indexes for table `farmer_history`
--
ALTER TABLE `farmer_history`
  ADD PRIMARY KEY (`History_id`);

--
-- Indexes for table `production_approx`
--
ALTER TABLE `production_approx`
  ADD PRIMARY KEY (`crop`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`StCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `custlogin`
--
ALTER TABLE `custlogin`
  MODIFY `cust_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `DistCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- AUTO_INCREMENT for table `farmerlogin`
--
ALTER TABLE `farmerlogin`
  MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `farmer_crops_trade`
--
ALTER TABLE `farmer_crops_trade`
  MODIFY `trade_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmer_history`
--
ALTER TABLE `farmer_history`
  MODIFY `History_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `StCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `farmer_crops_trade`
--
ALTER TABLE `farmer_crops_trade`
  ADD CONSTRAINT `farmer_crops_trade_ibfk_1` FOREIGN KEY (`farmer_fkid`) REFERENCES `farmerlogin` (`farmer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
