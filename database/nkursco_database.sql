-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2022 at 09:33 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nkursco_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int(2) UNSIGNED NOT NULL,
  `username` varchar(25) NOT NULL,
  `adminPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `username`, `adminPassword`) VALUES
(1, 'katakuri', '$2y$10$CD44U0uM0mdprPxWxrXOWuuzF/kdQP.zmR1j/UDUoVWPL5rCAoPa2');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cityId` int(11) NOT NULL,
  `cityName` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cityId`, `cityName`) VALUES
(2, 'Online'),
(1, 'Prishtinë');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseId` int(7) UNSIGNED NOT NULL,
  `courseName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coursePriceFrom` int(4) DEFAULT NULL,
  `coursePriceTo` int(4) DEFAULT NULL,
  `courseCity` text COLLATE utf8_unicode_ci,
  `courseLocation1` text COLLATE utf8_unicode_ci,
  `courseLocation2` text COLLATE utf8_unicode_ci,
  `courseLocation3` text COLLATE utf8_unicode_ci,
  `courseLocation4` text COLLATE utf8_unicode_ci,
  `courseLocation5` text COLLATE utf8_unicode_ci,
  `courseLocation6` text COLLATE utf8_unicode_ci,
  `courseLocationLink1` text COLLATE utf8_unicode_ci,
  `courseLocationLink2` text COLLATE utf8_unicode_ci,
  `courseLocationLink3` text COLLATE utf8_unicode_ci,
  `courseLocationLink4` text COLLATE utf8_unicode_ci,
  `courseLocationLink5` text COLLATE utf8_unicode_ci,
  `courseLocationLink6` text COLLATE utf8_unicode_ci,
  `courseLocationsAmount` text COLLATE utf8_unicode_ci,
  `courseNumber1` text COLLATE utf8_unicode_ci,
  `courseNumber2` text COLLATE utf8_unicode_ci,
  `courseNumber3` text COLLATE utf8_unicode_ci,
  `courseNumber4` text COLLATE utf8_unicode_ci,
  `courseNumber5` text COLLATE utf8_unicode_ci,
  `courseNumber6` text COLLATE utf8_unicode_ci,
  `courseNumberLocation1` text COLLATE utf8_unicode_ci,
  `courseNumberLocation2` text COLLATE utf8_unicode_ci,
  `courseNumberLocation3` text COLLATE utf8_unicode_ci,
  `courseNumberLocation4` text COLLATE utf8_unicode_ci,
  `courseNumberLocation5` text COLLATE utf8_unicode_ci,
  `courseNumberLocation6` text COLLATE utf8_unicode_ci,
  `courseScheduleOpen1` text COLLATE utf8_unicode_ci,
  `courseScheduleOpen2` text COLLATE utf8_unicode_ci,
  `courseScheduleOpen3` text COLLATE utf8_unicode_ci,
  `courseScheduleOpen4` text COLLATE utf8_unicode_ci,
  `courseScheduleOpen5` text COLLATE utf8_unicode_ci,
  `courseScheduleOpen6` text COLLATE utf8_unicode_ci,
  `courseScheduleOpen7` text COLLATE utf8_unicode_ci,
  `courseScheduleClose1` text COLLATE utf8_unicode_ci,
  `courseScheduleClose2` text COLLATE utf8_unicode_ci,
  `courseScheduleClose3` text COLLATE utf8_unicode_ci,
  `courseScheduleClose4` text COLLATE utf8_unicode_ci,
  `courseScheduleClose5` text COLLATE utf8_unicode_ci,
  `courseScheduleClose6` text COLLATE utf8_unicode_ci,
  `courseScheduleClose7` text COLLATE utf8_unicode_ci,
  `courseEmail` text COLLATE utf8_unicode_ci,
  `courseWebsite` text COLLATE utf8_unicode_ci,
  `courseWebsiteLink` text COLLATE utf8_unicode_ci,
  `courseFb` text COLLATE utf8_unicode_ci,
  `courseFbLink` text COLLATE utf8_unicode_ci,
  `courseInsta` text COLLATE utf8_unicode_ci,
  `courseInstaLink` text COLLATE utf8_unicode_ci,
  `courseInfo` text COLLATE utf8_unicode_ci,
  `courseService1` text COLLATE utf8_unicode_ci,
  `courseService2` text COLLATE utf8_unicode_ci,
  `courseService3` text COLLATE utf8_unicode_ci,
  `courseService4` text COLLATE utf8_unicode_ci,
  `courseService5` text COLLATE utf8_unicode_ci,
  `courseService6` text COLLATE utf8_unicode_ci,
  `courseService7` text COLLATE utf8_unicode_ci,
  `courseService8` text COLLATE utf8_unicode_ci,
  `courseService9` text COLLATE utf8_unicode_ci,
  `courseService10` text COLLATE utf8_unicode_ci,
  `courseService11` text COLLATE utf8_unicode_ci,
  `courseService12` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseId`, `courseName`, `coursePriceFrom`, `coursePriceTo`, `courseCity`, `courseLocation1`, `courseLocation2`, `courseLocation3`, `courseLocation4`, `courseLocation5`, `courseLocation6`, `courseLocationLink1`, `courseLocationLink2`, `courseLocationLink3`, `courseLocationLink4`, `courseLocationLink5`, `courseLocationLink6`, `courseLocationsAmount`, `courseNumber1`, `courseNumber2`, `courseNumber3`, `courseNumber4`, `courseNumber5`, `courseNumber6`, `courseNumberLocation1`, `courseNumberLocation2`, `courseNumberLocation3`, `courseNumberLocation4`, `courseNumberLocation5`, `courseNumberLocation6`, `courseScheduleOpen1`, `courseScheduleOpen2`, `courseScheduleOpen3`, `courseScheduleOpen4`, `courseScheduleOpen5`, `courseScheduleOpen6`, `courseScheduleOpen7`, `courseScheduleClose1`, `courseScheduleClose2`, `courseScheduleClose3`, `courseScheduleClose4`, `courseScheduleClose5`, `courseScheduleClose6`, `courseScheduleClose7`, `courseEmail`, `courseWebsite`, `courseWebsiteLink`, `courseFb`, `courseFbLink`, `courseInsta`, `courseInstaLink`, `courseInfo`, `courseService1`, `courseService2`, `courseService3`, `courseService4`, `courseService5`, `courseService6`, `courseService7`, `courseService8`, `courseService9`, `courseService10`, `courseService11`, `courseService12`) VALUES
(1, 'Ferid Morina', 0, 0, 'Prishtinë', 'Nazim Gafurri, Nr. 44, afër Gjimnazit \"Sami Frashëri\"', '', '', '', '', '', 'https://goo.gl/maps/Nam2Ci19vx7RCEk28', '', '', '', '', '', '1 Pikë', '383 44 199 517', '', '', '', '', '', 'Ferid Morina', '', '', '', '', '', '08:00', '08:00', '08:00', '08:00', '08:00', '', '', '20:00', '20:00', '20:00', '20:00', '20:00', '', '', 'artmorina_12@outlook.com', '', '', 'Kurse Për Arkitekturë', 'https://www.facebook.com/Kurse-P%C3%ABr-Arkitektur%C3%AB-374870695954256', 'Ferid Morina', 'https://www.instagram.com/kurs.per.arkitekture/', 'Kurse përgaditor për provimin pranues në Fakultetin e Arkitekturës Prof.Ferid Morina.', 'Arkitekturë', 'Art', '', '', '', '', '', '', '', '', '', ''),
(4, 'Bedmas', 10, 50, 'Prishtinë', 'Hilmi Rakovica, Nr. 4, Bregu i Diellit', '', '', '', '', '', 'https://goo.gl/maps/ZXqXtDARfZM7wVLT7', '', '', '', '', '', '1 Pikë', '383 49 138 560', '', '', '', '', '', 'Bregu i Diellit', '', '', '', '', '', '08:00', '08:00', '08:00', '08:00', '08:00', '08:00', '08:00', '22:00', '22:00', '22:00', '22:00', '22:00', '14:00', '14:00', 'bedmascourse@gmail.com', '', '', 'Bedmas Bedmas', 'https://www.facebook.com/Bedmasmath', 'BEDMAS', 'https://www.instagram.com/bedmasmath/?utm_medium=copy_link', 'Shkolla e kurseve BEDMAS ofron kurse nga Matematika, Gjuha Shqipe, Fizika dhe Kimia. Për nxënës nga klasa 1-5 ofrojmë qëndrim gjysëmditorë, ku nxënësit përfundojnë detyrat e shtepisë dhe përsërisin mësimet.', 'Matematikë', 'Gjuhë Shqipe', 'Fizikë', 'Kimi', '', '', '', '', '', '', '', ''),
(5, 'British School of Kosova', 15, 200, 'Prishtinë', 'Imzot Nikëprela, Nr. 53, Ulpianë', 'Muharrem Fejza, Nr. 2, Rruga B', '', '', '', '', 'https://goo.gl/maps/jp5W5qq8w55Ts1Wn6', 'https://goo.gl/maps/w535TGtiMvCyxeNQ6', '', '', '', '', '2 Pika', '383 44 888 361', '383 44 353 471', '383 49 353 741', '', '', '', 'Ulpianë', 'Rruga B', 'Rruga B', '', '', '', '08:00', '08:00', '08:00', '08:00', '08:00', '09:00', '', '21:00', '21:00', '21:00', '21:00', '21:00', '14:00', '', 'britishschoolofkosova@gmail.com', '', '', 'British School of Kosova', 'https://www.facebook.com/britishschoolofkosova', 'British School Of Kosova', 'https://www.instagram.com/britishschoolofkosovaa/', 'Shkollë profesionale e mësimdhënies dhe mësimenxënies së gjuhëve te huaja.', 'Anglisht', 'Gjuhë Shqipe', 'Gjermanisht', 'Frëngjisht', 'Italisht', 'Matematikë', 'Fizikë, Kimi, Biologji', 'Informatikë', 'Kontabilitet', 'Balet', 'Pikturë', 'Violinë, Piano, Kitarë'),
(6, 'British Academy of Kosova', 20, 180, 'Prishtinë', 'Enver Maloku, Nr. 116, Bregu i Diellit', '', '', '', '', '', 'https://goo.gl/maps/CqQNwxBn6W22ZUEu5', '', '', '', '', '', '1 Pikë', '383 49 702 222', '383 45 644 244', '', '', '', '', 'Bregu i Diellit', 'Bregu i Diellit', '', '', '', '', '07:00', '07:00', '07:00', '07:00', '07:00', '', '', '20:00', '20:00', '20:00', '20:00', '20:00', '', '', 'info@britishacademy.eu', 'www.britishacademy.eu', 'https://britishacademy.eu/', 'British Academy of Kosova', 'https://www.facebook.com/BritishAcademyofKosova/', 'British Academy of Kosova', 'https://www.instagram.com/britishacademyofkosova/', 'British Academy of Kosova ofron kurse për të gjitha moshat.', 'Anglisht', 'Gjermanisht', 'Frëngjisht', 'Piano', 'Violinë', 'Kitarë', 'Balet', 'Matematikë', 'Mësim Plotësues', '', '', ''),
(7, 'Mëso Prej Shtepisë', 5, 10, 'Online', '', '', '', '', '', '', '', '', '', '', '', '', '', '383 49 138 560', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'info@mesoprejshtepise.com', 'www.mesoprejshtepise.com', 'https://www.mesoprejshtepise.com/', 'Mesoprejshtepise', 'https://www.facebook.com/Mesoprejshtepise/', 'Mesoprejshtepise', 'https://www.instagram.com/mesoprejshtepise/', 'Mëso prej shtëpisë ofron ndihmë në zgjidhjen e detyrave nga klasa I - XII', 'Matematikë', 'Gjuhë Shqipe', 'Fizikë', 'Kimi', 'Biologji', 'Gjeografi', 'Histori', 'Njeriu dhe Natyra', '', '', '', ''),
(8, '916 Academy', 1, 1, 'Prishtinë', 'Holger Petersen, Nr. 89, Lagjja e Spitalit', '', '', '', '', '', 'https://goo.gl/maps/Ru7VZsSP3VQU7Vg57', '', '', '', '', '', '1 Pikë', '383 49 455 121', '', '', '', '', '', 'Lagjja e Spitalit', '', '', '', '', '', '09:00', '09:00', '09:00', '09:00', '09:00', '09:00', '', '17:00', '17:00', '17:00', '17:00', '17:00', '17:00', '', '916academy@gmail.com', '', '', '916 Academy', 'https://www.facebook.com/916academy/', '916 Academy', 'https://www.instagram.com/916academy/', 'Kurs për provim pranues në Arkitekturë.', 'Arkitekturë', 'Art', '', '', '', '', '', '', '', '', '', ''),
(9, '916 Training Center', 1, 1, 'Prishtinë', 'Holger Petersen, Nr. 89, Lagjja e Spitalit', '', '', '', '', '', 'https://goo.gl/maps/TjXDMGmDdkqqZyX9A', '', '', '', '', '', '1 Pikë', '383 49 455 121', '', '', '', '', '', 'Lagjja e Spitalit', '', '', '', '', '', '09:00', '09:00', '09:00', '09:00', '09:00', '09:00', '', '17:00', '17:00', '17:00', '17:00', '17:00', '17:00', '', '916trainingcenter@gmail.com', '', '', '916 Training Center', 'https://www.facebook.com/916group/', '916 Training Center', 'https://www.instagram.com/916trainingcenter/', 'Qendër trajnuese për Arkitekturë.', 'ArchiCAD', 'Autodesk Revit', 'Lumion', 'Adobe Photoshop', 'Autodesk 3ds Max', 'SketchUp', 'AutoCAD Civil 2D 3D', 'Tower', 'ArmCAD', '', '', ''),
(10, 'English World School', 10, 30, 'Prishtinë', 'Dervish Hima, Nr. 104, Kalabri (Emshir)', 'Ali Pashë Gucia, Nr. 103, Kolovicë', '', '', '', '', 'https://goo.gl/maps/FULRTmqQECRApzjw9', 'https://goo.gl/maps/nX97jJHQToVLRkd57', '', '', '', '', '2 Pika', '383 44 689 345', '', '', '', '', '', '', '', '', '', '', '', '08:00', '08:00', '08:00', '08:00', '08:00', '', '', '17:00', '17:00', '17:00', '17:00', '17:00', '', '', 'englishworldschool1@hotmail.com', '', '', 'English World School', 'https://www.facebook.com/English-World-School-583484845009800/', 'EnglishWorldSchool', 'https://www.instagram.com/englishworld_school/', 'English World School është institucion privat arsimorë i cili ofron kurse të gjuhës angleze. Është themeluar në vitin 2011 me qëllim që të ofroj hapësira mësimore për femijë dhe të rritur/indivdual. Përgatitje për teste TOEFL.', 'Anglisht', 'Mësim Plotësues', '', '', '', '', '', '', '', '', '', ''),
(11, 'ProEd', 44, 79, 'Prishtinë', 'Sylejman Vuçiterrna, Nr. 33, Kalabri (Emshir)', '', '', '', '', '', 'https://g.page/Proedacademy?share', '', '', '', '', '', '1 Pikë', '383 49 127 200', '', '', '', '', '', 'Kalabri', '', '', '', '', '', '09:00', '09:00', '09:00', '09:00', '09:00', '', '', '17:00', '17:00', '17:00', '17:00', '17:00', '', '', 'info@proedacademy.com', 'www.proedacademy.com', 'https://www.proedacademy.com/', 'Proed', 'https://www.facebook.com/proedacademy/', 'Proed Academy', 'https://www.instagram.com/proedks/', 'Shkollë e lartë profesionale e programimit e certifikuar nga MASHT dhe e akredituar nga AKK, niveli i 5-të sipas KKK', 'Python', 'Siguria Kibernetike', 'Web Development - Full Stack', 'Scratch', 'Zhvillim i Aplikacioneve Mobile', 'Administrim dhe mirëmbajtje rrjeti', 'Zhvillimi dhe Administrimi i bazave së të dhënave', '', '', '', '', ''),
(12, 'Vivienne Academy', 1, 1, 'Prishtinë', 'Sicilia, Kalabri (Emshir)', '', '', '', '', '', 'https://goo.gl/maps/Rpk4xkxBJc4zUndF6', '', '', '', '', '', '1 Pikë', '383 45 197 114', '', '', '', '', '', '', '', '', '', '', '', '08:30', '08:30', '08:30', '08:30', '08:30', '', '', '16:30', '16:30', '16:30', '16:30', '16:30', '', '', 'vivienne.academy@gmail.com', '', '', 'Vivienne Academy', 'https://facebook.com/vivienneacademy/', 'Vivienne Academy', 'https://www.instagram.com/vivienneacademy/', 'Vivienne Academy - është shkollë profesionale e bukurisë e cila ofron programe të avancuara për Grim, Parukeri, Dizajn Mode, Rrobaqepësi dhe Patronist.', 'Stilim nga Fjolla Selmani', 'Grim nga Sellma Kasumoviq', 'Parukeri nga Kaci Lleshi', '', '', '', '', '', '', '', '', ''),
(13, 'Target.Kurs', 0, 0, 'Prishtinë', '28 Nëntori, Dardani', '', '', '', '', '', 'https://goo.gl/maps/Ckfr8hnQ7DdTMXwV6', '', '', '', '', '', '1 Pikë', '383 49 100 066', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'traget.kurs@gmail.com', '', '', 'Target.kurs', 'https://www.facebook.com/target.kurs/', 'Target.kurs', 'https://www.instagram.com/target.kurs/', 'Organizojmë kurse dhe trajnime në drejtime të ndryshme.', 'Ekonomi', 'Anglisht', 'Gjermanisht', 'Serbisht', 'Turqisht', 'Trajnime për Kompani (Burimet Njerëzore)', 'Konsulta për Punime Shkencore', '', '', '', '', ''),
(14, 'Sprachzentrum Berlin', 135, 170, 'Prishtinë', 'Musine Kokalari, Nr. 25, Dardani', '', '', '', '', '', 'https://goo.gl/maps/7kh5Cspkj4tcCSYP7', '', '', '', '', '', '1 Pikë', '383 48 161 618', '', '', '', '', '', '', '', '', '', '', '', '08:00', '08:00', '08:00', '08:00', '08:00', '', '', '20:00', '20:00', '20:00', '20:00', '20:00', '', '', 'info@berlin-ks.com', 'www.berlin-ks.com', 'http://berlin-ks.com/', 'Qendra e Gjuhes Gjermane \"Berlin\"', 'https://www.facebook.com/QendraeGjuhesGjermaneBERLIN/', 'Sprachzentrum \'BERLIN\'', 'https://www.instagram.com/berlin.sprachzentrum/', '-Kurse intenzive për nivelet A1-C1 për: </br>\r\n-Ndërmjetësim për Punë në Gjermani për Mjek, Infermier... </br>\r\n-Përkthime Gjyqësore (Gjermanisht, Anglisht)</br>', 'Gjermanisht', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'MORE', 300, 0, 'Prishtinë', 'Bashkim Fehmiu, Arbëri (Dragodan) ', '', '', '', '', '', 'https://goo.gl/maps/2MEjUqcySoxQh4tr5', '', '', '', '', '', '1 Pikë', '383 49 844 174', '', '', '', '', '', 'Arbëri', '', '', '', '', '', '09:00', '09:00', '09:00', '09:00', '09:00', '', '', '19:30', '19:30', '19:30', '19:30', '19:30', '', '', 'tauran_kuqi@hotmail.com', 'www.more-cgi.com', ' https://more-cgi.com/', 'MORE', 'https://www.facebook.com/MORE-353652601923097/', 'MORE-cgi', 'https://www.instagram.com/more_cgi/', 'MO - If you want to know more about creating precise 2D and 3D drawings, join our community of learning from beginning to advance. </br>\r\nRE - If you want to know more about the visualizing and rendering, join our community of learning from beginning to advance.', 'Autodesk 3ds Max', 'V-Ray', 'Adobe Photoshop', '', '', '', '', '', '', '', '', ''),
(16, 'Exclusive Academy', 50, 600, 'Prishtinë', 'Mbi Kurriz, Dardani', '', '', '', '', '', 'https://goo.gl/maps/6Mb7HMNzBRScR2kQ6', '', '', '', '', '', '1 Pikë', '383 44 383 894', '383 49 383 894', '', '', '', '', 'Dardani', 'Dardani', '', '', '', '', '10:00', '10:00', '10:00', '10:00', '10:00', '', '', '16:00', '16:00', '16:00', '16:00', '16:00', '', '', 'exclusiveacademy11@gmail.com', '', '', 'Shkolla Per Frizer ExclusiveAcademy', 'https://www.facebook.com/Shkolla-Per-Frizer-ExclusiveAcademy-230108837320759/', 'Shkolla Exclusive Academy', 'https://www.instagram.com/exclusiveacademy/', 'Shkolla profesionale Exclusive Academy është hapur qe 13 vite.', 'Parukeri (Rregullimi i flokëve)', 'Estetikë', 'Grim', 'Berber', 'Manikyr Pedikyr', '', '', '', '', '', '', ''),
(17, 'HB-Atelier', 0, 0, 'Prishtinë', '28 Nëntori, Dardani', '', '', '', '', '', 'https://goo.gl/maps/kySm3UaqQMBbfiN76', '', '', '', '', '', '1 Pikë', '383 45 480 470', '', '', '', '', '', 'Dardani', '', '', '', '', '', '15:00', '15:00', '15:00', '15:00', '15:00', '', '', '21:00', '21:00', '21:00', '21:00', '21:00', '', '', 'shaqirihyrie@gmail.com', '', '', 'HB-Atelier', 'https://www.facebook.com/HB.Atelier1/', 'Kurs i Artit Figurativ -Galeri', 'https://www.instagram.com/hbatelier_gallery/', 'HB-Atelier ofron kurse profesionale të Artit pamor për fëmijë dhe të rritur.\r\nHB-Atelier offers professional visual arts courses for children and adults.\r\nArt, Art school, Galery, Humanitarian activities, Education', 'Art', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'Star Nails Academy', 0, 0, 'Prishtinë', '28 Nëntori, Nr. 64, Dardani', '', '', '', '', '', 'https://goo.gl/maps/SjivnCfvERZfbwEK8', '', '', '', '', '', '1 Pikë', '383 44 186 300', '', '', '', '', '', 'Dardani', '', '', '', '', '', '10:00', '10:00', '10:00', '10:00', '10:00', '10:00', '', '20:00', '20:00', '20:00', '20:00', '20:00', '16:00', '', '', '', '', 'Buqe Mala', 'https://www.facebook.com/profile.php?id=100000844144534', 'Star Nails Academy', 'https://www.instagram.com/buqemala/', 'E akredituar nga AKK, Trajnime Profesionale Për Thonjë,  Manikyr, Pedikyr, Depilim, Tretmane të fytyrës.', 'Manikyr', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'Giga Math', 6, 80, 'Prishtinë', 'Xhabir Toqani, Nr. 112, Dardani', '', '', '', '', '', 'https://goo.gl/maps/89DqNXWWRaDN4uPH6', '', '', '', '', '', '1 Pikë', '383 49 645 460', '383 44 645 460', '', '', '', '', 'Viber, Whatsapp', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ibrahimleskovica@gmail.com', '', '', 'Kurse Te Matematikes', 'https://www.facebook.com/Kurse-Te-Matematikes-663344890448352/', 'Ibrahim Leskovica', 'https://www.instagram.com/ibrahimleskovica/', 'Kurse të përgjithshme nga Matematika.', 'Matematikë', '', '', '', '', '', '', '', '', '', '', ''),
(20, 'Shkolla Informatika', 30, 150, 'Prishtinë', 'Xhabir Toqani, Nr. 112, Dardani', '', '', '', '', '', 'https://goo.gl/maps/ge51AYp3W4xYhmPVA', '', '', '', '', '', '1 Pikë', '383 44 213 937', '', '', '', '', '', 'Dardani', '', '', '', '', '', '16:00', '16:00', '16:00', '16:00', '16:00', '', '', '20:00', '20:00', '20:00', '20:00', '20:00', '', '', 'shkollainformatika@gmail.com', 'www.shkollainformatika.com', 'https://www.shkollainformatika.com/', 'Informatika', 'https://www.facebook.com/shkollainformatika/', 'shkollainformatika', 'https://www.instagram.com/shkollainformatika/', 'Shkolla për Kompjuterë INFORMATIKA ofron kurse dhe trajnime profesionale për Teknologjin Informative.  Me 37 libra te botuara per Teknologjin Informative si dhe me 21+ vite  pervoje.', 'Windows', 'Microsoft Word', 'Microsoft Excel', 'Microsoft Access', 'Microsoft PowerPoint', 'CorelDRAW', 'Autodesk AutoCAD', 'Rrjetat Kopjuterike', 'Servisimin e kompjuterve', '', '', ''),
(21, 'Ré nao', 25, 180, 'Online', '', '', '', '', '', '', '', '', '', '', '', '', '', '383 49 613 132', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'renaocourse@gmail.com', 'renaocourse.wixsite.com', 'https://renaocourse.wixsite.com/renaoonlinecourse', 'Ré nao', 'https://www.facebook.com/renaoonlinecourse/', 'Ré nao', 'https://www.instagram.com/renaocourse/', 'Kursi Ré nao ka filluar punën në vitin 2019. Ofrojmë mësim me kualitet të lartë nga mësimdhënës me përvojë, duke përdorur metodat moderne të mësimdhënies. Ne mësojmë me librat më të mirë në treg për të avancuar aftësitë e studentëve.', 'Gjuhë Shqipe', 'Anglisht', 'Gjermanisht', 'Frëngjisht', 'Turqisht', '', '', '', '', '', '', ''),
(22, 'Lisian Bajri 3D Mentorship', 250, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '383 49 640 693', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'fraksillo@gmail.com', '', '', '', '', 'Lisian Bajri Fraksillo', 'https://www.instagram.com/fraksillo3d/', 'Kursi ofron trajnimin e individit në 3d, në fushat si 3d modeling, 3d sculpting, character design, anatomy study etj.', '3d Modeling', '3d Sculpting', 'Anatomy Study', 'Character Design', '', '', '', '', '', '', '', ''),
(23, 'Bota e Dizajnit', 35, 50, 'Online', '', '', '', '', '', '', '', '', '', '', '', '', '', '383 45 698 598', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'bota.dizajnit@gmail.com', 'sites.google.com', 'https://sites.google.com/view/botadizajnit', 'Bota e Dizajnit', 'https://www.facebook.com/botaedizajnit', 'Bota e Dizajnit', 'https://www.instagram.com/botaedizajnit/', 'Mësime me video shqip për Adobe Photoshop, Illustrator, CorelDraw & Premiere Pro.', 'Dizajn Grafik', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'Tandem Sprachzentrum', 0, 0, 'Prishtinë', 'Rexhep Krasniqi, Nr. 38, Kalabri (Emshir)', '', '', '', '', '', 'https://goo.gl/maps/a2kFBSpZBKxQLECDA', '', '', '', '', '', '1 Pikë', '383 44 888 044', '', '', '', '', '', 'Kalabri (Emshir)', '', '', '', '', '', '09:00', '09:00', '09:00', '09:00', '09:00', '09:00', '09:00', '20:30', '20:30', '20:30', '20:30', '20:30', '20:30', '20:30', 'tandemprishtina@gmail.com', '', '', 'Tandem Sprachzentrum', 'https://www.facebook.com/tandemsprachzentrumprishtina', 'Tandem Sprachzentrum', 'https://www.instagram.com/tandemsprachzentrum/', 'Kurs i gjuhes gjermane, me ekzaminere te diplomuar dhe te licensuar nga ÖSD', 'Gjermanisht', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'GenZ Academy', 180, 280, 'Prishtinë', 'Behar Begolli, Nr. 52 (mbrapa Spitalit Amerikan)', '', '', '', '', '', 'https://goo.gl/maps/ybhVubtCab4zHvVX6', '', '', '', '', '', '1 Pikë', '383 48 550 570', '', '', '', '', '', '', '', '', '', '', '', '09:00', '09:00', '09:00', '09:00', '09:00', '', '', '18:00', '18:00', '18:00', '18:00', '18:00', '', '', 'info@generationz.academy', 'generationz.academy', 'https://generationz.academy/', 'GenZ Academy', 'https://www.facebook.com/genz.trainings', 'GenZ Academy', 'https://www.instagram.com/genz.trainings/?fbclid=IwAR3L27tfhLQcwzIPPj0f0kwLbmdeqPHvMXqvw2vx8jvtf069L_APksb5Pv4', 'Më shumë se thjesht ‘mësime’, Gen Z jemi kujdeset që të bëjnë një përzgjedhje interaktive të formateve unike të të mësuarit, të ofruara përmes mjeteve praktike, videove, podkesteve, webinareve dhe praktikës profesionale.', 'Marketing Digjital', 'Dizajn Grafik', 'Social Media Management', 'SEO', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `coursesimage`
--

CREATE TABLE `coursesimage` (
  `imageId` int(11) NOT NULL,
  `theCourseId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imageName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imageStatus` enum('1','0') COLLATE utf8_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coursesimage`
--

INSERT INTO `coursesimage` (`imageId`, `theCourseId`, `imageName`, `imageStatus`) VALUES
(1, '1', 'feridmorina.png', '1'),
(8, '4', 'bedmas.png', '1'),
(9, '5', 'britishschoolofkosovo.png', '1'),
(10, '6', 'britishacademyofkosova.png', '1'),
(12, '7', 'mesoprejshtepise.png', '1'),
(13, '8', '916academy.png', '1'),
(14, '9', '916trainingcenter.png', '1'),
(15, '10', 'englishworldschool.png', '1'),
(16, '11', 'proed.png', '1'),
(17, '12', 'vivienneacademy.png', '1'),
(19, '13', 'target.kurs.png', '1'),
(20, '14', 'sprachzentrumberlin.png', '1'),
(21, '15', 'more.png', '1'),
(22, '16', 'exclusiveacademy.png', '1'),
(23, '17', 'hbatelier.png', '1'),
(24, '18', 'starnailsacademy.png', '1'),
(25, '19', 'gigamath.png', '1'),
(26, '20', 'shkollainformatika.png', '1'),
(27, '21', 'renao.png', '1'),
(28, '22', 'lisianbajri.png', '1'),
(29, '23', 'botaedizajnit.png', '1'),
(30, '24', 'tandemsprachzentrum.png', '1'),
(32, '25', 'genzacademy.png', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cityId`),
  ADD UNIQUE KEY `cityName` (`cityName`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseId`),
  ADD UNIQUE KEY `courseName` (`courseName`);

--
-- Indexes for table `coursesimage`
--
ALTER TABLE `coursesimage`
  ADD PRIMARY KEY (`imageId`),
  ADD UNIQUE KEY `theCourseId` (`theCourseId`),
  ADD UNIQUE KEY `imageName` (`imageName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `cityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseId` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `coursesimage`
--
ALTER TABLE `coursesimage`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
