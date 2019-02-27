-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 10 déc. 2018 à 20:03
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `esi`
--

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

DROP TABLE IF EXISTS `connexion`;
CREATE TABLE IF NOT EXISTS `connexion` (
  `matricule` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`matricule`, `mdp`) VALUES
('14INP00747', 'gratuit'),
('ok', 'bro'),
('', ''),
('', ''),
('', ''),
('', ''),
('nontonhus@gmail.com', ''),
('nontonhus@gmail.com', ''),
('nontonhus@gmail.com', '1257'),
('llkjjd@yahoo.fr', '31545');

-- --------------------------------------------------------

--
-- Structure de la table `enregis`
--

DROP TABLE IF EXISTS `enregis`;
CREATE TABLE IF NOT EXISTS `enregis` (
  `matricule` varchar(20) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `contact` int(11) NOT NULL,
  `contact2` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(10000) NOT NULL,
  `pays` text NOT NULL,
  `ville` text NOT NULL,
  `tempspremier` int(11) NOT NULL,
  `tempscdi` int(11) NOT NULL,
  `nomentreprise` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `domaine` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `fonction` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `salaire6` int(11) NOT NULL,
  `salaire1` int(11) NOT NULL,
  `salaire3` int(11) NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enregis`
--

INSERT INTO `enregis` (`matricule`, `email`, `contact`, `contact2`, `address`, `password`, `pays`, `ville`, `tempspremier`, `tempscdi`, `nomentreprise`, `domaine`, `fonction`, `salaire6`, `salaire1`, `salaire3`) VALUES
('09INP00394', 'test@gmail.com', 12345, 0, 'ABIdjan', 'cfcd208495d565ef66e7dff9f98764da', 'civ', 'yakro', 2, 8, 'orange', 'Sante', 'Chef de projet', 1000001, 1500001, 2500000),
('09INP00400', 'elhadj@yahoo.fr', 12345, 3, 'AZER', '120', 'france', 'paris', 0, 6, 'SMILE', 'Integrateurs et solutions', 'Fournisseurs de services', 1000001, 1500001, 2500000),
('09INP05129 ', 'ifu@yahoo.fr', 12345, 1234, 'AZER', '0', '10', '', 1, 2, '3', 'Reseaux telecom et informatique', 'Fournisseurs de services', 1000001, 750000, 2500000),
('10INP00577', 'aka@yahoo.fr', 123450, 30, 'ABIdjan', 'd3d9446802a44259755d38e6d163e820', 'civ', 'yakro', 12, 123, 'rey', 'Fournisseurs de services', 'Maintenance', 1000001, 1500001, 2500000),
('10INP00613', 'djue@tuy.com', 0, 0, '12huy', '0a5b3913cbc9a9092311630e869b4442', 'CIV \n', 'ero', 3, 3, 'ORANGE', 'Enseignement, recherche, dÃ©veloppement', 'Maintenancier', 1000001, 1500001, 2500000),
('10INP00672', 'ifu@yahoo.fr', 12345, 1234, 'AZER', '0', 'france', 'yakro', 3, 2, 'orange', 'industrie', 'autre', 750000, 750000, 1200000),
('12INP00518', 'sekou@gmail.com', 145, 145, 'bouake', '0', 'civ', 'yakro', 2, 5, 'wanpan', 'Equipementiers telecom et informatique', 'Equipementiers telecom et informatique', 200000, 300000, 500000);

-- --------------------------------------------------------

--
-- Structure de la table `idesi`
--

DROP TABLE IF EXISTS `idesi`;
CREATE TABLE IF NOT EXISTS `idesi` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `matricule` varchar(20) NOT NULL,
  `promo` year(4) NOT NULL,
  `filiere` varchar(50) NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sexe` varchar(5) NOT NULL,
  `birth` date NOT NULL,
  `wher` varchar(100) NOT NULL,
  `who` varchar(50) NOT NULL,
  `bac` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `idesi`
--

INSERT INTO `idesi` (`id`, `matricule`, `promo`, `filiere`, `nom`, `sexe`, `birth`, `wher`, `who`, `bac`) VALUES
(1, '09INP05129', 2015, 'E2IT', 'DJAMANGUY ALPHONSE EVARISTE\r\n', 'M', '1992-03-20', 'YOPOUGON ', 'IVOIRIENNE', 'D'),
(2, '09INP00347', 2015, 'E2IT', 'KOSSONOU Yao Taky Alvarez', 'M', '1990-05-10', 'Seguela', 'IVOIRIENNE ', 'C'),
(3, '09INP00744', 2015, 'E2IT', 'KOUAME Adjoua Linda-Cyrielle\r\n', 'F', '1991-10-22', ' COCODY (ABIDJAN)\r\n', 'IVOIRIENNE', 'C'),
(4, '08INP00743', 2015, 'E2IT', 'YANGUE MAMPHI  FLORENT\r\n', 'M', '1988-10-14', ' Bonoua\r\n', 'IVOIRIENNE', 'C'),
(5, '09INP00351', 2015, 'E2IT', 'SILUE Denan Amidou', 'M', '1992-02-23', 'ABOBO ', 'IVOIRIENNE', 'D'),
(6, '09INP00786', 2015, 'E2IT', 'TAKOUO Dito Sébastien\r\n', 'M', '1990-06-17', 'Bondoukou', 'IVOIRIENNE', ''),
(7, '09INP00395', 2015, 'info', 'BECHEHIN Aboua Pascal Landry\r\n', 'M', '1990-06-02', ' ATTINGUIÉ (ANYAMA)\r\n', 'IVOIRIENNE', 'D'),
(8, '09INP00156', 2015, 'info', 'KARAMOKO HAMED\r\n', 'M', '1992-10-29', ' COCODY (ABIDJAN)\r\n', 'IVOIRIENNE', 'F2'),
(9, '09INP05135', 2015, 'info', 'LASME MEL PAULE RENEE\r\n', 'F', '1991-07-27', ' ADJAME (ABIDJAN)\r\n', 'IVOIRIENNE', 'C'),
(10, '09INP00400', 2015, 'info', 'OUATTARA El Hadj Ibrahim\r\n', 'M', '1991-05-14', 'DJÉGNADOU (GUEYO)\r\n', 'IVOIRIENNE', 'C'),
(11, '10INP00613', 2015, 'tlc', 'DJEAHOU Irie Bi Tah Jean Marc\r\n', 'M', '1989-12-20', ' ADJAMÉ (ABIDJAN)\r\n', 'IVOIRIENNE', 'C'),
(12, '10INP00672', 2015, 'tlc', 'MUKENDI Kanyinda Jude Nathan\r\n', 'M', '1992-06-30', 'WILLIAMSVILLE (ABIDJAN)\r\n', 'IVOIRIENNE', 'C'),
(13, '09INP00394', 2016, 'info', 'ADEGOKE HASSAN ISMAËL FRANCK OLIVIER\r\n', 'M', '1991-06-26', 'BORDEAUX (FRANCE)\r\n', 'IVOIRIENNE', 'C'),
(14, '10INP00574', 2016, 'info', 'ADINGRA Kouamé Noel\r\n', 'M', '1991-07-30', ' Bondo\r\n', 'IVOIRIENNE', 'C'),
(15, '10INP00595', 2016, 'info', 'CISSE Souhalio\r\n', 'M', '1989-09-06', ' Boundiali\r\n', 'IVOIRIENNE', 'C'),
(16, '11INP00677', 2016, 'info', 'DAGBO  ANDREA FRANCK\r\n', 'M', '1992-08-17', 'Bouaké\r\n', 'IVOIRIENNE', 'E'),
(17, '11INP00666', 2016, 'info', 'FOFANA Yenin Mariam\r\n', 'F', '1994-05-14', ' Fresco\r\n', 'IVOIRIENNE', 'C'),
(18, '10INP00626', 2016, 'info', 'GBEDEGNE-GUIGUI Charles Laurent Kevin\r\n', 'M', '1992-11-06', ' TREICHVILLE (ABIDJAN)\r\n', 'IVOIRIENNE', 'C'),
(19, '11INP00667', 2016, 'info', 'GNABA Carine Suzie\r\n', 'F', '1994-05-31', ' Korhogo\r\n', 'IVOIRIENNE', 'C'),
(20, '11INP00657', 2016, 'info', 'KABA Diakite Amadou\r\n', 'M', '1995-01-13', '  Aboisso\r\n', 'IVOIRIENNE', 'C'),
(21, '10INP00639', 2016, 'info', 'KAMAGATE Amadou\r\n', 'M', '1990-11-11', ' Bondoukou\r\n', 'IVOIRIENNE', 'C'),
(22, '10INP00668', 2016, 'info', 'KPO Louagbeu Loua\r\n', 'M', '1990-06-30', ' Mangouin\r\n', 'IVOIRIENNE', 'C'),
(23, '10INP00680', 2016, 'info', 'N\'GUESSAN Konan Thomas\r\n', 'M', '1991-12-19', ' Bouaké\r\n', 'IVOIRIENNE', 'C'),
(24, '10INP00577', 2016, 'tlc', 'AKA Amichia Frejus Arnaud\r\n', 'M', '1992-06-10', ' ABOBO DOUME (ABIDJAN)\r\n', 'IVOIRIENNE', 'C'),
(25, '11INP00611', 2016, 'tlc', 'ASSA Konan aubin\r\n', 'M', '1993-05-23', ' N\'Zecrezessou\r\n', 'IVOIRIENNE', 'C'),
(26, '11INP00671', 2016, 'tlc', 'ASSAMOI Fred Williams\r\n', 'M', '1994-05-17', ' YOPOUGON (ABIDJAN)\r\n', 'IVOIRIENNE', 'C'),
(27, '10INP00589', 2016, 'tlc', 'BEUGRE Gnongo Patrick\r\n', 'M', '1991-01-01', ' YOCOBOUÉ (GUITRY)\r\n', 'IVOIRIENNE', 'C'),
(28, '10INP00600', 2016, 'tlc', 'COULIBALY Zana Dramane\r\n', 'M', '1990-10-22', ' Tai\r\n', 'IVOIRIENNE', 'E'),
(29, '10INP00606', 2016, 'tlc', 'DIABATE Sekou\r\n', 'M', '1990-11-24', ' Yamoussoukro\r\n', 'IVOIRIENNE', 'C'),
(30, '10INP00600', 2016, 'tlc', 'DJADE Djebadje Gildas\r\n', 'M', '1991-12-04', ' Bongo\r\n', 'IVOIRIENNE', ''),
(31, '10INP00644', 2016, 'tlc', 'KOFFI Koffi Jean François\r\n', 'M', '1992-06-13', ' Yamoussoukro\r\n', 'IVOIRIENNE', 'C'),
(32, '10INP00667', 2016, 'tlc', 'KOUMAN Tano Yao Pacome\r\n', 'M', '1994-05-09', ' Tabagne\r\n', 'IVOIRIENNE', 'C'),
(33, '10INP00702', 2016, 'tlc', 'SIAGBE Dieudonné\r\n', 'M', '1990-01-03', ' Bouake\r\n', 'IVOIRIENNE', 'C'),
(34, '11INP00640', 2016, 'tlc', 'SILUE Nahoua Etienne\r\n', 'M', '1991-12-27', ' Lamekaha\r\n', 'IVOIRIENNE', 'C'),
(35, '10INP00718', 2016, 'tlc', 'YAO Kouakou Lazare\r\n', 'M', '1992-01-10', ' Korhogo\r\n', 'IVOIRIENNE', 'C'),
(36, '10INP00631', 2016, 'E2IT', 'BOLI - GNAZALE Laetitia Armandine\r\n', 'F', '1993-08-03', ' YOPOUGON (ABIDJAN)\r\n', 'IVOIRIENNE', 'C'),
(37, '10INP00218', 2016, 'E2IT', 'EDIA Boni Serge Erick\r\n', 'M', '1993-12-21', ' Abongoua/ Arrah\r\n', 'IVOIRIENNE', 'E'),
(38, '10INP00642', 2016, 'E2IT', 'KLIKAN Enyonam Mawuli Lydie\r\n', 'F', '1993-08-03', ' Lome\r\n', 'IVOIRIENNE', 'C'),
(39, '10INP00659', 2016, 'E2IT', 'KOUAKOU Teh I I Aristide\r\n', 'M', '1992-05-16', 'Bodokro', 'IVOIRIENNE', 'C'),
(40, '11INP00733', 2016, 'E2IT', 'BROU Zadi Yagbeu', 'M', '1994-02-09', 'Yamoussoukro', 'IVOIRIENNE', 'C'),
(41, '14INP00052', 2017, 'tlc', 'AZAH ACKA MEDARD ANDERSON', 'M', '1994-08-17', 'brindoukro', 'IVOIRIENNE', 'c'),
(42, '11INP00629', 2017, 'tlc', 'BEUGRE Amari Tite Axel', 'm', '1992-04-09', 'yopougon', 'IVOIRIENNE', 'c'),
(43, '11INP00630', 2017, 'tlc', 'DAGBALE YVES ROLAND', 'm', '1994-05-10', 'abidjan', 'IVOIRIENNE', 'c'),
(44, '11INP00631', 2017, 'tlc', 'EDOUKOU Kouassi Serge Melaine', 'M', '1993-09-21', 'BROU AKPAOUSSOU', 'IVOIRIENNE', 'C'),
(45, '12INP00563', 2017, 'tlc', 'KASSI AKA JEAN', 'M', '1992-02-01', 'AFFERE', 'IVOIRIENNE', 'C'),
(46, '12INP00592', 2017, 'tlc', 'kragbe ange harold  kigui', 'm', '1994-04-16', 'yopougon', 'IVOIRIENNE', 'c'),
(47, '12INP00598', 2017, 'tlc', 'MOUIN MONHESIA ISAAC RUBEN', 'M', '1994-08-06', 'TREICHVILLE', 'IVOIRIENNE', 'C'),
(48, '11INP00681', 2017, 'tlc', 'TRAORE FANTA MARIE-AIMEE GRACE', 'F', '1993-02-20', 'YAMOUSSOUKRO', 'IVOIRIENNE', 'C'),
(49, '14INP00051', 2017, 'info', 'ADJOBIA KOUASSI FRANCK YANNICK', 'M', '1989-09-12', 'MARCORY', 'IVOIRIENNE', ''),
(50, '11INP00719', 2017, 'info', 'ADOUBY Durand Fourier Claude', 'M', '1993-04-18', 'COCODY', 'IVOIRIENNE', 'C'),
(51, '07INP00729', 2017, 'info', 'AKA Marie Christelle', 'F', '1988-10-16', 'DIVO', 'IVOIRIENNE', 'C'),
(52, '12INP00529', 2017, 'INFO', '\r\nBEGUHE KAMA HENRY JOEL', 'M', '1992-05-08', 'M\'PODY/ANYAMA', 'IVOIRIENNE', 'C'),
(53, '11INP00721', 2017, 'info', 'COULIBALY Gnossinrou', 'M', '1990-11-06', 'BONDOUKOU', 'IVOIRIENNE', 'C'),
(54, '11INP00274', 2017, 'info', 'COULIBALY SIE EVARISTE', 'M', '1990-04-20', 'TAFIRE', 'IVOIRIENNE', 'C'),
(55, '11INP00655', 2017, 'info', 'COULIBALY Tièlman Mathias', 'M', '1994-06-20', 'KOUTO', 'IVOIRIENNE', 'C'),
(56, '11INP00548', 2017, 'info', 'DABLE LOUIS QUENTIN CEDRIC', 'M', '1993-11-23', 'YOPOUGON', 'IVOIRIENNE', 'F2'),
(57, '11INP00632', 2017, 'info', 'DIAKITE CHEICK MOHAMED', 'M', '1992-08-09', 'LAKOTA', 'IVOIRIENNE', 'C'),
(58, '12INP00548', 2017, 'info', 'ELLOH APHOUET ORSY DIANE  EUPHRASIE', 'F', '1995-09-13', 'TREICHVILLE', 'IVOIRIENNE', 'C'),
(59, '12INP00552', 2017, 'info', 'GBEI HOUONSEGUI HERMANN', 'M', '1993-06-09', 'ABOBO', 'IVOIRIENNE', 'C'),
(60, '11INP00532', 2017, 'info', 'GUEBAE YVES CARMEL', 'M', '1993-09-11', 'YOPOUGON', 'IVOIRIENNE', 'C'),
(61, '12INP00565', 2017, 'info', 'KASSI KOUADIO ANGE DESIRE', 'M', '1994-07-05', 'MARCORY', 'IVOIRIENNE', 'C'),
(62, '11INP00686', 2017, 'info', 'KOFFI Marcel Alla Dorgeles', 'M', '1993-10-23', 'ABOBO', 'IVOIRIENNE', 'B'),
(63, '12INP00584', 2017, 'info', 'KOUAKOU YAO LUFRED', 'M', '1992-12-27', 'BONGOUANOU', 'IVOIRIENNE', 'C'),
(64, '12INP00585', 2017, 'info', 'KOUAME ASSOUMOU MARTIN', 'M', '1993-12-30', 'ANDE', 'IVOIRIENNE', 'C'),
(65, '09INP00761', 2017, 'info', 'N\'GUESSAN Innocent', 'M', '1991-02-12', 'Ahouniansou/Bké/Bouaké', 'IVOIRIENNE', 'C'),
(66, '11INP00609', 2017, 'info', 'OUATTARA ALI', 'M', '1993-11-06', 'GRAND-BEREBY', 'IVOIRIENNE', 'C'),
(67, '12INP00611', 2017, 'info', 'SAWADOGO CHRISTOPHE', 'M', '1994-07-09', 'AKRADJO', 'IVOIRIENNE', 'C'),
(68, '10INP00721', 2017, 'INFO', 'YEBOUA CÉDRIC EUPHREN SOSTHENE', 'M', '1992-09-04', 'ASSUEFRY', 'IVOIRIENNNE', 'C'),
(69, '10INP00215', 2017, 'E2IT', 'ALI KOUAME BILE SEBASTIEN', 'M', '1991-01-20', 'BOROTOU-KORO', 'IVOIRIENNE', 'F2'),
(70, '12INP00518', 2017, 'E2IT', 'ANESSY ESSAN SEKOU', 'M', '1992-01-02', 'PORT-BOUET', 'IVOIRIENNE', 'C'),
(71, '12INP00519', 2017, 'E2IT', 'ANO KOIDJA WILLIAMS', 'M', '1992-08-05', 'SATIKRAN', 'IVOIRIENNE', 'C'),
(72, '10INP05008', 2017, 'E2IT', 'BANDAMA BROU JOEL FABIEN', 'M', '1993-11-10', 'TREICHVILLE', 'IVOIRIENNE', 'C'),
(73, '11INP00700', 2017, 'E2IT', 'BAZIE NEBILA FELIX', 'M', '1991-12-24', 'YAMOUSSOUKRO', 'IVOIRIENNE', 'C'),
(74, '11INP00350', 2017, 'E2IT', 'COULIBALY IBRAHIMA', 'M', '1988-01-11', ' TINDIKAN-DIOULASSO (DABAKALA)', 'IVOIRIENNE', 'D'),
(75, '12INP00536', 2017, 'E2IT', 'COULIBALY KIDJOMITCHIN JEAN-MARC', 'M', '1992-12-12', 'LOUGBONOU', 'IVOIRIENNE', 'C'),
(79, '11INP00742', 2017, 'E2IT', 'DJICKO Bonnai Nouh', 'M', '1990-12-21', 'YAMOUSSOUKRO', 'IVOIRIENNE', 'C'),
(80, '10INP00646', 2017, 'E2IT', 'KONAN KOUAME SERGE-LIONEL', 'M', '1990-05-20', 'DOBRE', 'IVOIRIENNE', 'C'),
(81, '11INP00346', 2017, 'E2IT', 'KOUAME KOFFI INNOCENT', 'M', '1993-03-05', 'M\'BONOUA (ANYAMA)', 'IVOIRIENNE', 'F2'),
(82, '10INP05189', 2017, 'E2IT', 'KOUAME REX EMMANUELLA DJESSE', 'F', '1993-02-20', 'ABOBO', 'IVOIRIENNE', 'C'),
(83, '11INP00365', 2017, 'E2IT', 'MEA Ahoussi Jean-vincent', 'M', '1993-01-05', 'AGNIBILEKROU', 'IVOIRIENNE', 'C'),
(84, '11INP00359', 2017, 'E2IT', 'N\'KON Kigninlman Yves', 'M', '1989-02-20', 'KATIOLA\r\n', 'IVOIRIENNE', 'C'),
(85, '11INP00351', 2017, 'E2IT', 'TRAORE SEKOU BOKARY', 'M', '1993-07-15', 'MARCORY', 'IVOIRIENNE', ''),
(86, '12INP00634', 2017, 'E2IT', 'YAPO ATSE MARC-AURELE  MICHEL', 'M', '1995-09-28', 'ADZOPE', 'IVOIRIENNE', 'C');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
