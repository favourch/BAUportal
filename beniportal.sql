-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: hostingdb.limedomains.com
-- Generation Time: Jul 23, 2014 at 09:19 PM
-- Server version: 5.0.77
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `beniportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `total`, `balance`) VALUES
(0, 45, 0),
(11, 500, 0),
(123, 1200, 0),
(1001012, 1500, 0),
(1001019, 0, 0),
(1001027, 2500, 0),
(1001028, 1000, 0),
(1001118, 400, 0),
(1001145, 200, 0),
(1001147, 400, 0),
(1001174, 600, 0),
(1001198, 400, 0);

-- --------------------------------------------------------

--
-- Table structure for table `accs`
--

CREATE TABLE IF NOT EXISTS `accs` (
  `id` varchar(20) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accs`
--

INSERT INTO `accs` (`id`, `first`, `last`, `password`, `role`, `department`) VALUES
('accountant', 'Mike', 'Phelps', '123456', 'Accounting Manager', 'Accounts');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `first`, `last`, `role`, `department`) VALUES
('gossyomega', '123456', 'Gossy', 'Ukanwoke', 'President', 'Management');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `Code` varchar(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Instructor` varchar(50) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Schedule` varchar(50) NOT NULL,
  PRIMARY KEY  (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Code`, `Name`, `Instructor`, `Class`, `Schedule`) VALUES
('DGP 450', 'Digital Journalism', 'BAU Team', 'Online', 'Specified by Instructor'),
('ENI 120', 'Entrepreneurship and Innovation', 'Yamikani Chinamale', 'Online', 'Specified by Instructor'),
('GEC 001', 'Introduction to Online Learning', 'The BAU Team', 'Online', 'Specified by Instructor'),
('GLM 100', 'Global Marketing', 'Jack Welch', 'Online', 'Specified by Instructor'),
('LAM 100', 'Leadership and Management', 'Jack Welch', 'Online', 'Specified by Instructor'),
('PMG 100', 'Project Management', 'Kelechi Nelson', 'Online', 'Specified by Instructor'),
('SM100', 'Strategic Management', 'Jack Welch', 'Online', 'Specified by Instructor');

-- --------------------------------------------------------

--
-- Table structure for table `issued`
--

CREATE TABLE IF NOT EXISTS `issued` (
  `student` int(11) NOT NULL,
  `course1` varchar(8) NOT NULL,
  `course2` varchar(8) NOT NULL,
  `course3` varchar(8) NOT NULL,
  `course4` varchar(8) NOT NULL,
  `course5` varchar(8) NOT NULL,
  PRIMARY KEY  (`student`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issued`
--

INSERT INTO `issued` (`student`, `course1`, `course2`, `course3`, `course4`, `course5`) VALUES
(11, 'BUS 101 ', 'CIS 101 ', 'ECON 101', '', ''),
(123, 'ENG 101 ', 'ECON 101', 'POLS 101', 'BUS 101 ', 'CIS 101 '),
(1001012, 'POLS 101', 'ECON 101', 'BUS 101 ', 'ENG 101 ', 'CIS 101 '),
(1001027, 'BUS 101 ', 'ECON 101', 'CIS 101 ', 'ENG 101 ', 'POLS 101'),
(1001028, 'BUS 101 ', 'CIS 101 ', 'ECON 101', 'ENG 101 ', 'POLS 101'),
(1001118, 'GEC 001 ', 'ENI 120 ', '', '', ''),
(1001145, 'GEC 001 ', 'PMG 100 ', '', '', ''),
(1001147, 'GEC 001 ', 'ENI 120 ', '', '', ''),
(1001198, 'GEC 001 ', 'PMG 100 ', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL auto_increment,
  `content` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `content`) VALUES
(1, 'We are Young'),
(2, '<b>The Beni American University</b> Student Portal serves the purpose to update students on their progress, general information and activities related to them as they are in BAU. \r\n<br /><br />\r\nStudents can also access copies of their transcripts, academic records, financial statements and personal information.'),
(3, '<b>Welcome Back and Happy New Year</b>\r\n<br />\r\nThis is the beginning of a new semester and a new year. Please check with the admissions office, students services and accounts to ensure that all details for this semester are in place.\r\n<br />\r\nOnce again welcome back to school.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL auto_increment,
  `password` varchar(50) NOT NULL,
  `first` varchar(50) NOT NULL,
  `middle` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `passport` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `faculty` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL,
  `program` varchar(50) NOT NULL,
  `advisor` varchar(50) NOT NULL,
  `doc4` varchar(60) NOT NULL,
  `doc5` varchar(60) NOT NULL,
  `doc3` varchar(50) NOT NULL,
  `doc2` varchar(50) NOT NULL,
  `doc1` varchar(50) NOT NULL,
  `kinname` varchar(50) NOT NULL,
  `kinnum` varchar(50) NOT NULL,
  `joinyear` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `officer` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1001241 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `password`, `first`, `middle`, `last`, `dob`, `gender`, `nationality`, `passport`, `email`, `address`, `phone`, `faculty`, `department`, `program`, `advisor`, `doc4`, `doc5`, `doc3`, `doc2`, `doc1`, `kinname`, `kinnum`, `joinyear`, `semester`, `officer`) VALUES
(1001019, 'qwerty01$', 'Oluwapelumi', '', 'Oyetimein', '08/03/1986', 'Male', 'Nigerian', 'Passport Number', 'pelumi@pelumionline.net', '294, Herbert Macauley Road, Sabo, Yaba, Lagos.', '', 'Technology', 'Management Information Systems', 'Bachelors of Science', '', '', '', '', '', '', 'Abimbola Oyetimein', '08033554258', 2013, 'Summer', 'gossyomega'),
(1001020, '1001020', ' Stephen', ' Stephen', ' Ndukwe', '26-04-1984', 'Male', ' Nigerian', ' ', 'ndukwestephenc@gmail.com', ' House 7 Zone A, Apo Resettlement Area, Abuja', ' 08033657227', '', 'Project Management', 'Bachelors of Science', '', '', '', '', '', '', ' ', ' ', 2013, 'Spring', 'gossyomega'),
(1001023, 'changeme01', 'OLUWABUSAYO', 'OLADELE', 'OGUNLOWO', '18/02/1986', 'Male', 'NIGERIAN', ' ', 'busayor@gmail.com', '48,IWAYA ROAD,ONIKE-YABA,LAGOS', '+234 802 748 4562', 'Technology', 'Management Information Systems', 'Bachelors of Science', '', '', '', '', '', '', ' OGUNLOWO FOLANRANMI', '+234 803 786 8554', 2013, 'Fall', 'gossyomega'),
(1001024, 'changeme01', ' Adegaye', 'Ademuyiwa', 'Solomon', '04/08/1988', 'Male', 'Nigerian', ' ', 'muyiwa.solomon@gmail.com', '2, Adeniji Street Oworonshoki Lagos. ', '234 8082084969', '', 'Business Management', 'Bachelors of Science', '', '', '', '', '', '', ' Adegaye Adedimeji Felix ', '2340838053617', 2013, 'Spring', 'gossyomega'),
(1001025, 'changeme01', ' Abubakar', ' Ahmed', ' Bachaka', '28/12/1982', 'Male', ' Nigerian', ' A02960528', ' bachaka11@hotmail.com', ' 114 kanta RD. P O Box 13 Argungu, Kebbi State.', ' +2348035043575', '', 'Management Information Systems', 'Bachelors of Science', '', '', '', '', '', '', 'Abubakar Sule', ' +2348067572417', 2013, 'Spring', 'gossyomega'),
(1001026, 'remolu87', ' Olufolarin', 'Adeyemi', 'Adejinmi', '08/03/1985', 'Male', ' Nigerian', ' A00429950', ' diisa2002@yahoo.com', 'Number 1, Engr Remi Adejinmi Close. Adegbayi Alakia, Ibadan', '  08157497489', '', 'Management Information Systems', 'Bachelors of Science', '', '', '', '', '', '', ' Mr Aremu Adejinmi', ' 08165689716', 2013, 'Spring', 'gossyomega'),
(1001029, 'changeme01', ' Timothy', ' Ogbemudia', ' Okundaye', '03/09/1984', 'Male', ' Nigerian', ' ', 'timothyokundaye@yahoo.com', ' OQ 2/11 Mambilla Barracks Officers Quarters Abuja', '+234 802 358 0700', 'Technology', 'Management Information Systems', 'Masters of Science', '', '', '', '', '', '', 'EU Okundaye ', ' 08034752156', 2013, 'Summer', 'gossyomega'),
(1001031, 'changeme01', ' Jimoh', ' Al-ameen', ' Damilola', '20/2/1993', 'Male', ' Nigerian', ' ', ' lashawndajmilton@yahoo.com', ' 79,okota road,Off Ago-okota roundabout.Isolo,Lagos.', ' +2348069681840', '', 'Management Information Systems', 'Bachelor of Science', '', '', '', '', '', '', ' Modupe Jimoh', ' 08103576854', 2013, 'Fall', 'gossyomega'),
(1001032, '', 'Chidubem', 'Charles', 'Okoye', '07/05/1995', 'Male', 'Nigeria', ' ', 'Charlesokoye95@gmail.com', 'P.O.Box 2598, Awka, Anambra state, Nigeria', ' 234 813 428 8723', '', 'Entrepreneurship & Innovation', 'Bachelor of Science', '', '', '', '', '', '', 'Mrs. Mabel Okoye', ' 234 803 948 0347', 2013, 'Spring', ''),
(1001033, '', ' adewumi', ' samuel ', ' adedeji', '12/07/1985', 'Male', ' nigeria', ' ', ' ', ' 18 ondo road kulende estate ilorin', ' +2347035468006', '', 'Business Management', 'Professional Certificate', '', '', '', '', '', '', ' pastor samson obembe', ' +2348032251515', 2013, 'Spring', ''),
(1001035, '', ' AyoDeji', ' O', ' Okanlawon', '24/10/1985', 'Male', ' Nigerian', ' ', ' danforster2k1@hotmail.co.uk', ' 217a Eti-Osa , Dolphin Estate, Ikoyi, Island, Lagos. Lagos Stae', ' +234 7064337113', '', 'Management Information Systems', 'Bachelor of Science', '', '', '', '', '', '', ' Shola Okanlawon', ' +234 8033051142', 2013, 'Spring', ''),
(1001036, '', ' Goldmay', 'Daniel', 'Okpukpan', '24/July/1983', 'Male', ' Nigeria', ' A1635255', ' ogoldmay@yahoo.com', ' 21 Mystic Fellowship Avenue, U-turn, Abule Egba , Lagos', ' +234 803 444 1989', '', 'Entrepreneurship & Innovation', 'Bachelor of Science', '', '', '', '', '', '', 'Mercy Okpukpan', '2348030945738 ', 2013, 'Spring', ''),
(1001037, '', ' Blessing', ' Onyeje', ' Uloko', '1987/july/27', 'Female', ' Nigerial', 'VWL-SNO-006 ', ' BlessingJunior90@yahoo.com', ' maitama OAU qter block39 flat4 Abuj', ' 07067618692', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', ' Mr Uloko', ' 08186090744', 2013, 'Spring', ''),
(1001038, '', ' YUSUF', 'BILEWU', 'OLAMILEKAN', '6/NOV/1989', 'Male', ' NIGERIA', ' ', ' olasco210@yahoo.com', '20,lawrence street, agodo-egbe, lagos.', '+2347056182694', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', ' MR/MRS YUSUF', '+2348154060351', 2013, 'Spring', ''),
(1001039, '', ' Adetunji', ' Emmanuel', ' Olumide', '16/08/1982', 'Male', ' Nigeria', ' ', ' adetolu1882@gmail.com', ' Eleyele Ib.', ' +2348165373445', '', 'Entrepreneurship & Innovation', 'Bachelor of Science', '', '', '', '', '', '', ' Adetunji Fisoye', '+2348165373445', 2013, 'Summer', ''),
(1001040, '', ' chimemezie', ' flourish', ' iheanacho', '8 june 1995', 'Male', ' nigeria', ' ', ' coolchimez@yahoo.com', ' 4 alhaji jimoh street ilasamaja isolo', ' +2348105697805', '', 'Entrepreneurship & Innovation', 'Bachelor of Science', '', '', '', '', '', '', ' nkem chijiuba alilonu', ' +23432161631', 2013, 'Spring', ''),
(1001042, '', ' Adeleke', ' Adekola', ' Emmanuel', '17/08/1992', 'Male', ' Nigerian', ' ', ' adelekeadekola20@yahoo.com', ' Ado Ekiti, Ekiti State, Nigeria', ' +2348168492291', '', 'Management Information Systems', 'Bachelor of Science', '', '', '', '', '', '', ' Adeleke Benson', ' +2348039267937', 2013, 'Spring', ''),
(1001043, '', ' Enwerem', ' Prince', ' Okechukwu', '13/10/1995', 'Male', ' Nigeria', ' N/A', 'okechukwuprince25@yahoo.com', ' st james anglican church uzii,owerri.', '+234 813 604 5741', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', 'Mrs.Anthonia Nwachukwu ', ' +234 806 389 3224', 2013, 'Summer', ''),
(1001045, '', ' kamaluddeen', ' ', 'aliyu', '15/12/92', 'Male', ' nigerian', ' 002', ' ', ' kamalaliyu@gmail.com', ' +2348032364652', '', 'Management Information Systems', 'Bachelor of Science', '', '', '', '', '', '', ' aliyu m hassan', ' 2348032873486', 2013, 'Spring', ''),
(1001046, '', 'Adegorite ', 'Ayodeji ', 'Olusegun ', '31/10/1994', 'Male', 'Nigeria', '005806', 'adegoritesegun@yahoo.com', '10,nurat soetan,ajasa comm.ipaja lagos', '08189021465', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', 'Adegorite Alani Sunday ', '08034294271', 2013, 'Summer', ''),
(1001047, '', ' Abubakar', ' Adamu ', ' Saraki', '23/11/1990', 'Male', '  Nigerian', ' Nil', 'abubakarsarakee@yahoo.com', ' dawaki quarters gombe,gombe state of nigeria', ' +2348088204095', '', 'Strategic Management', 'Bachelor of Science', '', '', '', '', '', '', ' Yakubu Bala', ' +2348025508450', 2013, 'Spring', ''),
(1001048, '', ' KO', 'JAMES', 'OLUWASEUN', '13/09/1984', 'Male', ' NIGERIAN', ' ', 'blackheromen@gmail.com', '8, ONAYADE STREET, JIBOWU, LAGOS. NIGERIA.', '2348023289301', '', 'Management Information Systems', 'Bachelor of Science', '', '', '', '', '', '', ' KOKOH JONATHAN', '2348037121441', 2014, 'Summer', ''),
(1001049, '', ' ABIOYE', 'OYENIYI', 'OLUSEYE', '24/07/1985', 'Male', 'NIGERIAN', ' ', 'seye_niyi2001@yahoo.com', ' 4,ALHAJI FATAI STREET,OFF HIGH COURT ROAD,SAGAMU,OGUN STATE.', ' 2348062596078222222', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', 'MRS O.O BHADMUS', '2348069418134', 2015, 'Spring', ''),
(1001051, '', ' dorcas', ' olaide', ' olaoluwa', '05/08/1991', 'Female', ' nigerian', '  ', 'loladedorcas@yahoo.com', ' sango ota,ogun state', ' +234 7063372668', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', ' pastor and mrs idunnuoluwa', ' +234 8026688390', 2013, 'Spring', ''),
(1001052, '', ' shofola', 'kamorudin', ' oadimeji', '27/2/1987', 'Male', ' nigeria', ' ', ' kshoboy@hotmail.com', ' km 47 plot 6,block 3 elemoro palace b/stop ajah,lagos.', ' 2348130500785', '', 'Project Management', 'Bachelor of Science', '', '', '', '', '', '', ' olayinka shofola', ' 07026891578', 2013, 'Spring', ''),
(1001054, '', ' mohamed', ' ', ' salibaka', '08/10/1993', 'Male', ' cameroonian', ' ', ' moresky@rocketmail.com', ' adamawa, yola', ' +2348168531792', '', 'Entrepreneurship & Innovation', 'Bachelor of Science', '', '', '', '', '', '', ' bashirou', ' 08100700387', 2013, 'Spring', ''),
(1001055, '', 'Nigeria', 'Ursulla david', ' Udoka', 'Ursulla', 'Female', ' Female', ' Nigeria', ' ', 'Davidursulla@gmail.com', ' No21 lumi fari st k', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', ' Nigeria', 'David', 2013, 'Spring', ''),
(1001056, '', 'Abdullahi ibrahim  ', 'Ilamipe ', 'Ibrahim ', '14/10/1994', 'Male', 'Nigerian ', ' ', 'Abdullah201047@yahoo.com ', 'No. 30, bishop oluwole street, victoria island, lagos ', '+2348106395732 ', '', 'Strategic Management', 'Bachelor of Science', '', '', '', '', '', '', 'Abu ibrahim ', '+2348022659589 ', 2013, 'Spring', ''),
(1001058, '', 'Raphael ', 'Oredia ', 'Eninlejie ', '10/10/1992', 'Male', 'Nigeria ', ' ', 'eninlejieralphlauren@yahoo.com ', 'No 1 ogbokpa street esan south east local govt. Area Edo state nigeria. ', '08066493659 ', '', 'Entrepreneurship & Innovation', 'Professional Certificate', '', '', '', '', '', '', 'B. I Eninlejie ', '08060764369 ', 2013, 'Summer', ''),
(1001059, '', ' Emmanuel', ' Chuks', ' Osayi', '01/07/1982', 'Male', ' Nigerian', ' A00611519', 'emma4fenway@yahoo.com', ' Twin 2b Good homes estate isheri olofin lasu road lagos', ' +2347030466439', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', ' Samson Osayi', ' +2348080889160', 2013, 'Spring', ''),
(1001060, '', ' John', 'Oluwagbenga', 'Bello', '15/10/1992', 'Male', ' Nigerian', '', ' Oluwagbenagbell@gmail.com', ' 18,osoro street mushin lagos', ' 2347038710161', '', 'Strategic Management', 'Bachelor of Science', '', '', '', '', '', '', ' Bello John', '07038710161', 2013, 'Spring', ''),
(1001061, '', ' Joel', ' Salome', ' Wakabul', '2/10/1984', 'Female', ' Female', ' Nigerian', ' ', ' salomejeol@yahoo.com', ' Cocin Nassarawa Gwo', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', ' Jehaziel Joel', ' 07039831282', 2013, 'Spring', ''),
(1001062, '', ' mr okoroafor', 'chibunna', 'andrew', '07/01/1982', 'Male', ' nigeria', ' AB1454439613', ' okchibueze@yahoo.com', '40,ogundana street off allen avenue ikeja-lagos', ' +2348033841412', '', 'Project Management', 'Bachelor of Science', '', '', '', '', '', '', ' mr bob e ugochukwe', ' 08033841412', 2013, 'Summer', ''),
(1001063, '', ' Jean-Claude', ' GANYWAMULUME', ' NFUNDIKO', '10/03/1971', 'Male', ' CONGOLESE', ' OB0241095', 'nfundikojc@yahoo.fr', ' Av.KINSHASA ,119,GOMA', ' +243 997 714 672', '', 'Management Information Systems', 'Bachelor of Science', '', '', '', '', '', '', ' Jean-Claude GANYWAMULUME NFUNDIKO', ' +243 997 714 672', 2013, 'Spring', ''),
(1001068, '', ' ANIMASHAUN ', 'QUDUS', 'ABIODUN', '15/06/1991', 'Male', 'NIGERIAN', ' ', 'PROFESSOR4LUV2006@YAHOO.CO.UK', 'BLOCK 40 FLAT 2 ALHAJI MASHA ROAD SURULERE LAGOS', '+2348103847252', '', 'Management Information Systems', 'Associate of Science', '', '', '', '', '', '', 'MRS ANIMASHAUN ', '2348023535623', 2013, 'Summer', ''),
(1001072, '', ' baiyeshea', ' emmanuel', ' moyinoluwa', 'may 3rd 1995', 'Male', ' nigerian', ' ', ' ebaiyeshea@yahoo.com', ' behind labamba beger quary road mpape abuja', '+234 894842984', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', ' baiyeshea solomon', ' +234 894842984', 2013, 'Spring', ''),
(1001073, '', ' olayemi', ' habdoul-quadri', ' olaniyi', '16/08/1994', 'Male', ' nigeria', ' ', ' laniyilayemi@yahoo.com', ' gwako/gwagwalada F.C.T Abuja', ' +2348163430974', '', 'Management Information Systems', 'Bachelor of Science', '', '', '', '', '', '', ' olaniyi abiola', ' +2348026351909', 2013, 'Spring', ''),
(1001075, '', ' Landing', ' ', ' Ndow', '25/10/1993', 'Male', ' Gambian', ' ', 'landing2009@yahoo.com', ' 28 Nema-su layout, western region.', ' +220 3139105', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', ' Gass cham', ' +220 3665924', 2013, 'Summer', ''),
(1001076, '', ' Osoimuagbonrie', ' Ambrose', ' Okokhere', '14/12/1982', 'Male', ' Nigerian', ' ', 'sonsofbenevolence@yahoo.com', ' Expenditure control,rm 24,bursary department,university of benin,benin city,edo state,Nigeria', ' 2348066527129', '', 'Business Management', 'Associate of Science', '', '', '', '', '', '', ' mrs monica okokhere', ' 2348025844241', 2014, 'Fall', ''),
(1001077, '', ' OLUWATOSIN', 'MAY', ' AREGBESOLA', '18/05/1982', 'Female', ' NIGERIAN', ' ', ' maycabral18@yahoo.com', ' 10 segun aregbe st, off agbe rd, abule egba, lagos.', ' +234 708 176 0601', '', 'Strategic Management', 'Professional Certificate', '', '', '', '', '', '', ' korede ajayi', ' +234 813 114 4601', 2013, 'Spring', ''),
(1001080, '', ' Akhimien', ' Olanrewaju', ' Ighalo', '20/06/1985', 'Male', ' Nigerian', ' ', ' Igloknight@gmail.com', ' 4,Oboh lane off afua street,Eguare,Ekpoma.Edo state', ' +2348094298185', '', 'Entrepreneurship & Innovation', 'Bachelor of Science', '', '', '', '', '', '', ' Evang J.I Akhimien', ' +2348035624105', 2013, 'Spring', ''),
(1001083, '', ' Pius', ' Yaw', ' Boachie', '18/11/1993', 'Female', ' Nigerian', ' ', 'boachie.pius.ryan@gmail.com', 'km 47,lekki,lagos', '+2348169969686', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', ' Ayo Asaolu', ' +2347067972316', 2013, 'Spring', ''),
(1001094, '', 'Abraham', 'Sadiq', 'Danbaba', '02/10/1995', 'Male', 'Nigerian', '', 'abraham_sadiqdanbaba@yahoo.com', 'Ecwa Goodnews Church G.r.a ,p.o.box 764 .gombe ,gombe State', '+2347065714141 Churc', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', 'Ruth Sadiq Danbaba', '+2348080281023', 2013, 'Spring', ''),
(1001099, '', ' Okute', ' Onuche', ' Lawal', '21/07/1984', 'Female', ' ', ' ', ' ', ' ', ' ', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', ' ', ' ', 2013, 'Spring', ''),
(1001106, '', ' Oluwatoyin', 'Ibrahim ', 'Toyin', '10/07/1981', 'Male', ' Nigerian', ' ', ' sulebramms@yahoo.co.uk', ' sa3 flat3 nnpc qrts. area 11 garki abuja', ' 2347036799122', '', 'Management Information Systems', 'Bachelor of Science', '', '', '', '', '', '', '', '', 2013, 'Spring', ''),
(1001107, '', 'LAWAL', 'ONUCHE', 'OKUTE', '21/07/1984', 'Male', 'NIGERIAN', ' ', 'Lawkutex@gmail.com', 'No.1 Okute Close Udaba Dekina, Kogi State, Nigeria. ', '08051082511', '', 'Management Information Systems', 'Bachelor of Science', '', '', '', '', '', '', 'Mrs. Rabietu Okute', '08051083490', 2013, 'Spring', ''),
(1001108, '', ' OLAOLUWA ', 'KEHINDE', 'OLAKUNLE', '22/07/1992', 'Male', 'NIGERIAN', ' ', 'olaoluwakolakunle@gmail.com', 'CB 51, Abiola Avenue, Ilesa, Osun state Nigeria', '2347061119071', '', 'Entrepreneurship & Innovation', 'Bachelor of Science', '', '', '', '', '', '', ' Mr. F.O. Olaoluwa', ' 2348052078276', 2014, 'Summer', ''),
(1001109, '', 'Abraham', 'Sadiq', 'Danbaba', '02/10/1995', 'Male', 'Nigerian', '52406', 'abraham_sadiqdanbaba@yahoo.com', 'Ecwa Goodnews Gra Gombe P.o.box 764 ,gombe State', '+2347065714141', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', 'Ruth', '+2348184518166', 2013, 'Spring', ''),
(1001110, '', 'Ayo ', 'Augustine ', 'Obi ', '13/10/1988', 'Male', 'Nigerian ', ' ', ' ', 'PLOT 93, BLOCK 216, FLAT 4, ZONE D2, IBA ESTATE, OJO, LAGOS ', ' ', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', 'Mr Peter Obi ', ' ', 2013, 'Spring', ''),
(1001113, '', 'clement', 'onyinye', 'ilodigwe', '28/sep/1982', 'Male', ' nigerian', ' ', 'onyi_57@yahoo.com', ' no 11 goodwill estate ojodu berger lagos nigerian', '97932217190 ', '', 'Entrepreneurship & Innovation', 'Professional Certificate', '', '', '', '', '', '', ' ', ' ', 2013, 'Summer', ''),
(1001114, '', ' lawal', ' onuche', ' Okute', '21/7/1984', 'Male', ' male', ' nigeria', ' ', ' lawkutex@gmail.com', ' no 1. Okute close u', '', 'Management Information Systems', 'Bachelor of Science', '', '', '', '', '', '', ' Hajia Rabietu Okute ', ' 08051083490', 2013, 'Spring', ''),
(1001115, '', ' Duy', 'Duc ', 'Tran', '09/06/1994', 'Male', ' Vietnamese', 'B6363947', 'ducduy78696@gmail.com', '8250 Park place BLVD APT#710 Houston TEXAS USA', ' 01 8325640526', '', 'Management Information Systems', 'Bachelor of Science', '', '', '', '', '', '', ' Tho Tran', '84913190281', 2013, 'Spring', ''),
(1001116, '', ' adaku', 'theodora', 'ikpa', '23/10/1989', 'Female', 'nigeria', ' ', 'theodora.ikpa@gmail.com', '23 james oni street,off kogberegbe street,off isolo general hospital,isolo.lagos.nigeria', ' +2348156810611', '', 'Entrepreneurship & Innovation', 'Bachelor of Science', '', '', '', '', '', '', ' ikpa stephie', '+2348061237837', 2013, 'Fall', ''),
(1001117, '', ' LAWAL', ' ONUCHE', ' OKUTE', '21/7/1984', 'Male', ' NIGERIAN', ' ', ' lawkutex@gmail.com', ' Lokoja', ' +2348031908718', '', 'Management Information Systems', 'Bachelor of Science', '', '', '', '', '', '', ' Mrs Rabietu Okute', ' +2338051083490', 2013, 'Spring', ''),
(1001118, 'godbless', ' Dr Shambhavi', ' ', 'V.Murthy Gopalkrishna', 'Shambhavi', 'Female', '19/05/1968', ' L1520280', ' gopalshambhavi@yahoo.com', 'Indian', ' +234-8148690994', '', 'Entrepreneurship & Innovation', 'Professional Certificate', 'Yamikani Chinamale', '', '', '', '', '', ' Venkat Gopalkrishna', '08068848598', 2013, 'Spring', 'gossyomega'),
(1001119, '', ' Duy', 'Duc', 'Tran', '09/06/1994', 'Male', ' Vietnamese', 'B6363947', 'ducduy78696@gmail.com', '8250 Park place Blvd APT#710 Houston TX 77017', '832 564 0526', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', '', ' ', 2014, 'Spring', ''),
(1001120, '', 'Rick', ' ', 'Bartlett', '09/27/1974', 'Male', ' U.S.', ' ', 'rick@engineering.com', ' ', ' ', '', 'Management Information Systems', 'Bachelor of Science', '', '', '', '', '', '', ' ', ' ', 2013, 'Fall', ''),
(1001121, '', ' Ugochukwu', ' ', ' ', 'Akujobi', 'Female', ' 10/07/1994', ' ', ' ', '155 Chief Okechukwu Nwankwo Drive,Aba-Abia state, Nigeria ', ' ', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', ' P.0 Akujobi', ' ', 2013, 'Spring', ''),
(1001122, '', ' HAMMED', 'ADESOJI', 'OGUNLANA', '28/06/1981', 'Female', ' NIGEERIA', ' ', ' sojiogunlana@yahoo.com', '8 Uwagboe Close, Two-Storey, Baruwa, Ipaja, Lagos', ' 2348107068805', '', 'Management Information Systems', 'Associate of Science', '', '', '', '', '', '', ' HAMMED OGUNLANA', '2348107068805', 2013, 'Spring', ''),
(1001123, '', ' Emmanuel', 'Ibu', 'Ugor', '22/05/1987', 'Male', ' Nigerian', ' ', ' emmaugor@gmail.com', ' C/O Alhaji Lukman Abdul-Azeez No. 2 Lautai Road Off club road, Kano Nigeria', ' +2348051733922', '', 'Management Information Systems', 'Bachelor of Science', '', '', '', '', '', '', ' Ben Ugor', '08034531483', 2014, 'Spring', ''),
(1001124, '', ' aysha', ' ', 'abdullahi ', '13/04/1987', 'Female', 'nigerian', ' ', 'abatoza@gmail.com', 'no 3 youkou street,off parakou crescent wuse 2 abuja', '+2348065290909', '', 'Entrepreneurship & Innovation', 'Bachelor of Science', '', '', '', '', '', '', 'abdulbaki abdullahi', ' +2348033858890', 2013, 'Fall', ''),
(1001125, '', ' MOSES', 'OLALEKAN', ' BAMIDELE', '23/23/1989', 'Male', ' NIGERIAN', ' ', 'egoc.ng@gmail.com', 'NEW GRA, BEHIND ECWA THEOLOGICAL SEMINARY, JOS, PLATEAU STATE', '234 703 693 5026', '', 'Entrepreneurship & Innovation', 'Professional Certificate', '', '', '', '', '', '', ' REV. EDWARD BAMIDELE', ' 08036333659', 2013, 'Spring', ''),
(1001126, '', 'Alamu ', 'Ibrahim ', 'Olamilekan ', '14/08/1991', 'Male', 'Nigeria', ' ', 'Lakisky22@gmail.com ', '12,Craig Street O.g.b.c,Abeokuta Ogun State,Nigeria. ', '+2347065925916 ', '', 'Entrepreneurship & Innovation', 'Bachelor of Science', '', '', '', '', '', '', 'Mr Alamu Abdul-Semiu ', '+2348024609992 ', 2013, 'Spring', ''),
(1001128, '', 'YUSUF ', 'ADETOLA ', 'KAREEM ', '23/09/1984', 'Male', 'NIGERIA ', 'AWAITING ', 'Kareem.adetola.y@hotmail.com ', '3,OBA-AMUSA AVENUE , SUBOL B/STOP,IKOTUN ROAD,IDIMU ', '+2348182299703 ', '', 'Business Management', 'Bachelor of Science', '', '', '', '', '', '', 'ODUSANYA TOPE ', ' +2348027387845. ', 2013, 'Summer', ''),
(1001131, '', ' Alo', 'Moses', 'Ekpeme', '12/01/1988', 'Male', ' Nigeria', ' ', 'm2moblitz@yahoo.com', ' 18 Zaki-biam street Wadata makurdi benue state nigeria', ' +2348062780941', '', 'Entrepreneurship & Innovation', 'Professional Certificate', '', '', '', '', '', '', ' Ekpeme Gabriel', '+2347037156954', 2013, 'Spring', ''),
(1001132, '', ' TARO ', 'SAMUEL', 'MAGAJI', '27/05/1986', 'Male', 'NIGERIAN', ' ', 'samuelmag@yahoo.com', ' suite B2 Indomie Plaza Sharp Corner Mararaba Karu,Nasarawa state', '2348137186721', '', 'Management Information Systems', 'Bachelor of Science', '', '', '', '', '', '', ' Lt. MC CHAGGA', '2348032152383', 2013, 'Spring', ''),
(1001133, '', ' Adedamola', 'Adegoke', 'Abraham', '13/06/1986', 'Male', ' Nigerian', ' ', ' goke_abraham@yahoo.com', ' Plot 27, Alamutu estate, Off Station bus-stop, Iju Ifako, lagos.', ' +2348099224806', '', 'Strategic Management', 'Professional Certificate', '', '', '', '', '', '', 'Mr Adedamola Adegbola', ' +2348023419488', 2013, 'Spring', ''),
(1001137, '', 'David ', 'Savalga ', ' Ganu', '04/05/1988', 'Male', ' Nigeria', ' A 01385694', ' davidsvlg@gmail.com', 'Opp Fatima Church, Jos Plateau Nigeria', '+2347036421687', '', 'Project Management', 'Bachelor of Science', '', '', '', '', '', '', ' David Ganu Ali', '+2348169105675                          ', 2013, 'Spring', ''),
(1001138, '', ' Ololade', 'Olatunbosun', 'Talabi', '5/08/1985', 'Male', ' Nigerian', ' ', ' talabi.ololade@gmail.com', ' 10, Adepele Street, Ikeja, Lagos.', '+2348061665537', '', 'Entrepreneurship & Innovation', 'Professional Certificate', '', '', '', '', '', '', ' Mr L.O Talabi', ' +2348059575928', 2014, 'Fall', ''),
(1001139, '', ' Chimezie', 'ikpo', 'ukpai', '24/05/1989', 'Male', 'nigeria', ' ', 'ukpaichimezie@gmail.com', '6, omobola street, tejumola estate, egbeda, alimosho, lagos, nigeria', '+2348162467705', '', 'Project Management', 'Professional Certificate', '', '', '', '', '', '', '', ' ', 2015, 'Fall', ''),
(1001140, '', ' ANIMASHAUN ', 'QUDUS', 'ABIODUN', '15/06/1991', 'Male', 'NIGERIAN', ' ', 'professor4luv2006@yahoo.co.uk', 'BLOCK 40 FLAT 2 ALHAJI MASHA ROAD SURULERE LAGOS', '+2348103847252', '', 'Business Management', 'Professional Certificate', '', '', '', '', '', '', 'MRS S.A aNIMASHAUN', '+2348021221340', 2013, 'Fall', ''),
(1001141, '', ' ANIMASHAUN ', 'QUDUS', 'ABIODUN', '15/06/1991', 'Male', 'NIGERIAN', ' ', 'professor4luv2006@yahoo.co.uk', 'BLOCK 40 FLAT 2 ALHAJI MASHA ROAD SURULERE LAGOS', '+2348103847252', '', 'Entrepreneurship & Innovation', 'Professional Certificate', '', '', '', '', '', '', 'MRS S.A aNIMASHAUN', '+2348021221340', 2013, 'Fall', ''),
(1001142, '', 'Olajumoke', ' Elizabeth', 'Akintelure ', '', 'Female', ' nigeria', '', 'jummylizzy2011@yahoo.com', '', ' ', '', 'Strategic Management', 'Professional Certificate', '', '', '', '', '', '', 'Mr Akintelure', ' ', 2013, 'Spring', 'gossyomega'),
(1001143, '', ' Duy', 'Duc', 'Tran', '09/06/1994', 'Male', 'USA', '', 'ducduy78696@gmail.com', '8250 Park place Blvd APT#710', '832 564 0526', '', 'Entrepreneurship and Innovation', 'Professional Certificate', '', '', '', '', '', '', ' ', ' ', 2014, 'Spring', ''),
(1001144, '', ' Mohammed sule sarki', ' ', ' ', '', 'Female', ' ', '', ' mssarki21@yahoo.com ', ' kpakungu Minna Niger State', ' ', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' Alhaji sule sarki,  ', ' ', 2013, 'Spring', ''),
(1001145, 'onyeijjjebau', ' Onyeije', ' ', ' Onwukwe', '01/08/1967', 'Male', ' Nigeria', '', ' onyeijeo@gmail.com', ' 22 Elder Marcus Wike Street, Off Iwofe Road, PortHarcourt. Rivers State', ' +2348022224621', '', 'Project Management', 'Professional Certificate', 'Kelechi Anumaka', '', '', '', 'IDENTIFICATION', 'PAYMENT DEPOSIT', ' Chukwuemeka Onwukwe', ' +2348065397363', 2013, 'Fall', 'gossyomega'),
(1001146, '', 'HABEEB', 'OLASUNKANMI', 'KEHINDE', '18/07/1989', 'Male', ' NIGERIA', '', 'hok4u@yahoo.com', '7,Akinbile close,Obantoko.', ' +2348157560707', '', 'Project Management', 'Professional Certificate', '', '', '', '', '', '', ' KEHINDE OLAOSEBIKAN', '+2348034240050', 2014, 'Spring', ''),
(1001147, 'abiribA12', ' Johnson', ' ', ' Asi', '28/12/1989', 'Male', ' USA', '', ' johnson.asi@gmail.com', '1201 Moore Ave, apt 412. Portland, TX 78374', ' +19193496742', '', 'Entrepreneurship and Innovation', 'Professional Certificate', '', '', '', '', 'IDENTIFICATION', 'PAYMENT', ' Agwu Asi', ' +2348037097974', 2013, 'Fall', 'gossyomega'),
(1001148, '', 'George', 'Chinomso', 'Nwokoro ', '16 sept 1994', 'Male', 'Nigeria ', '', 'nwokorogeorge2@gmail.com ', 'St.judes anglican church atta.ikeduru imo_state nigeria', '+2347063353542 ', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', 'Mr/mrs nwokoro ', '+2348069176785 ', 2013, 'Summer', ''),
(1001150, '', 'Adewale', ' John', ' Jegede', '19/07/1989', 'Male', ' Nigeria', '', ' odunsing2001@yahoo.com', ' Plot 2 dawaki layout, Abuja', ' +2348032426485', '', 'Project Management', 'Professional Certificate', '', '', '', '', '', '', ' Mr Jegede', ' 08174209954', 2013, 'Fall', ''),
(1001151, '', ' Daniels', ' ', ' ', '', 'Female', ' ', '', ' rawfabulous@yahoo.com', ' Ibadan', ' ', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' Nwaigwe', ' ', 2013, 'Spring', ''),
(1001152, '', ' Mohammed', ' Abdulsalam', ' Al-Salafi', '18/07/1992', 'Male', ' Germany', '', ' maalsalafi@gmail.com', ' Frankfurt am main', ' +4915166512337', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' Abdulsalam', '+967777119977 ', 2013, 'Spring', ''),
(1001154, '', ' Ibrahim', ' ', ' Muhammad', '17/08/1990', 'Male', ' Nigeria', '', ' iblood99@yahoo.com', ' Air force base Jos', ' +2348133331781', '', 'Strategic Management', 'Professional Certificate', '', '', '', '', '', '', ' Muhammad Yusuf', ' +2347068949769', 2013, 'Fall', ''),
(1001155, '', 'Favour ', ' ', 'Isodje ', '13/06/1992', 'Female', 'Nigeria ', '', 'Prettykere@yahoo.com ', 'No 11 ghawan street', '+23408183760394 ', '', 'Global Marketing', 'Professional Certificate', '', '', '', '', '', '', 'Linda isodje ', '08023390822 ', 2014, 'Spring', ''),
(1001156, '', ' IKEH', 'KENNETH', 'OBINNA', '07/01/1981', 'Male', ' NIGERIA', '', ' ikehkenneth666@gmail.com', ' 91, ADESHINA ROAD, IJESHATEDO SURULERE LAGOS', ' +2348107298844', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' MRS. IKEH NWABUOGO', ' +2348181507121', 2013, 'Spring', ''),
(1001157, '', ' chioma', ' esther', ' enete', '25 june 1994', 'Female', ' nigeria', '', ' eneteechioma@yahoo.com', ' 41 dauda ilo ejigbo lagos', ' 07030900392', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' enete judith ', ' 08033509862', 2013, 'Fall', ''),
(1001158, '', ' Godspower', ' precious-ruby', ' ', '', 'Female', ' Nigeria', '', ' precious-ruby@yahoo.com', ' Isale-agbara,lagere osun state', ' ', '', 'Digital Journalism', 'Professional Certificate', '', '', '', '', '', '', ' Mr Godspower macaulay ogbobula', ' ', 2013, 'Spring', ''),
(1001159, '', 'Olofinghaka', 'Evelyn', 'Olubunmi', 'october  5,1990', 'Female', 'Nigeria', '', 'bummex11@gmail.com', 'no 5,moferere street,Alade Idanre', ' 2347063836325', '', 'Entrepreneurship and Innovation', 'Professional Certificate', '', '', '', '', '', '', 'Olofin Mary', ' 2348177791379', 2014, 'Spring', ''),
(1001160, '', 'Godspower', 'precious-ruby', ' ', '', 'Female', 'Nigeria', '', ' precious.ruby.374@facebook.com', 'Isale-agbara,lagere osun state', ' ', '', 'Digital Journalism', 'Professional Certificate', '', '', '', '', '', '', 'Mr Godspower macaulay ogbobula', ' 08065659122', 2013, 'Spring', ''),
(1001162, '', ' Babatunde', ' Peter', ' ', '', 'Male', ' Nigeria', '', ' pboi4luv@yahoo.com', ' 5, Patience street eb, lagos', ' ', '', 'Entrepreneurship and Innovation', 'Professional Certificate', '', '', '', '', '', '', ' Mrs Amosu', ' ', 2013, 'Spring', ''),
(1001163, '', ' Oyebola ', 'Samuel', ' Gbemi', '29/05/2013', 'Male', ' Nigeria ', '', ' oyebolasam@yahoo.com', ' 20, Oluwabi Temitipe Street, Ayetoro, Ogun State.', ' +234 805 610 3064', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', 'Mr. Oyebola Samuel Segun', '+234 802 811 2306', 2013, 'Spring', ''),
(1001164, '', ' Godspower', ' precious-ruby', ' ', '', 'Female', 'Nigeria', '', ' godspower macaulay@yahoo.com ', ' off minna road kwamba suleja Abuja,nigeria. ', ' ', '', 'Digital Journalism', 'Professional Certificate', '', '', '', '', '', '', 'Mr Godspower macaulay ogbobula', '08065659122', 2013, 'Spring', ''),
(1001165, '', ' Adesomoju', ' samson', ' ', '', 'Male', ' nigeria', '', ' Hardeysirmo4money@gmail.com', ' Ado Ekiti ,Ekiti state', ' ', '', 'Entrepreneurship and Innovation', 'Professional Certificate', '', '', '', '', '', '', 'oluwole Adesomoju', ' ', 2013, 'Spring', ''),
(1001167, '', ' Ladi', ' ', 'Omotade', '18/09/1974', 'Male', ' Nigeria', '', 'lomotade@unitykapital.com', 'Plot 497 Abogo Largema Street, Off Constitution Avenue, Central Business District, Abuja, FCT. ', '+234 802 686 8106 ', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' Olajumoke Omotade', '+234 703 742 3702', 2014, 'Summer', ''),
(1001168, '', ' Oladipo', ' ', 'Omotade', '18/09/1974', 'Male', 'Nigeria', '', ' oladipoomotade@yahoo.com', 'Plot 497 Abogo Largema Street, Off Constitution Avenue, Central Business District, Abuja, FCT.', '+234 802 686 8106', '', 'Global Marketing', 'Professional Certificate', '', '', '', '', '', '', 'Olajumoke Omotade', '+234 703 742 3702', 2014, 'Summer', ''),
(1001169, '', ' Landing', ' ', ' Ndow', '25/10/1993', 'Male', ' The Gambia', '', 'landing2009@yahoo.com', ' 28 Nemasu layout, sukuta. Western Region', ' 00220 3139105', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' Gass cham', ' 00220 9904939', 2014, 'Summer', ''),
(1001170, '', 'Onuiri Tobechukwu', ' ', ' ', '', 'Female', ' ', '', ' teenoll@yahoo.com ', ' 21,Adeola street, Ifako-ijaye', ' ', '', 'Entrepreneurship and Innovation', 'Professional Certificate', '', '', '', '', '', '', ' Chuks Udi ', ' ', 2013, 'Spring', ''),
(1001171, '', 'Antonia ', 'Chibuzor', 'Arinze ', '03/08/1980', 'Female', 'Nigeria ', '', 'arinze.chibuzor@gmail.com ', 'Plot 14 Kolawole Adekunle Street, Ajah, Lagos ', '+2348032596765 ', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' ', ' ', 2013, 'Spring', 'gossyomega'),
(1001172, '', 'Sunday  ', ' ', ' ', '', 'Female', ' ', '', ' s_sides2010@yahoo.com', '18 oZUITEM ROAD ABA ABIA STATE NIGERIA ', ' ', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' ', ' ', 2013, 'Spring', ''),
(1001173, '', ' omoyele', ' Adebayo', ' benjamin', '7/7/76', 'Male', ' nigeria', '', ' benlight1920@yahoo.com', ' 9,aboderin st. orita challenge ibadan', ' +2348064356324', '', 'Global Marketing', 'Professional Certificate', '', '', '', '', '', '', ' ', ' ', 2013, 'Spring', ''),
(1001174, '1996', ' Adaugo', 'Darlingtina', ' Opah', '29/02/1996', 'Female', ' Nigeria', '', ' xpensiveprada@gmail.com', ' 4 Ogunfowora Estate,ikotun lagos', '+234 808 485 7791 ', '', 'Leadership and Management', 'Professional Certificate', 'Precious Ogbomo', '', '', '', '', 'PAYMENT', ' Uloma Opah', ' +234 803 407 5564', 2013, 'Spring', 'gossyomega'),
(1001175, '', ' Tolulope', ' ', ' Demuren', '15/01/1985', 'Female', ' UK', '', ' demurent@gmail.com', ' 19 Laxfield Drive, Broughton, Milton Keynes MK10 9NQ', ' +447872568539', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' ', ' ', 2013, 'Fall', ''),
(1001176, '', 'STANLEY', ' DAVID', 'JOSHUA ', '01/10/1989', 'Male', 'NIGERIA ', '', ' stanleyjsh@yahoo.com', 'ECWA 2 CHURCH KAFANCHAN KADUNA STATE NIGERIA', '+2348082058969 ', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' MR. & MRS. JOSHUA TANKO', ' +2348082058969', 2013, 'Fall', ''),
(1001177, '', ' Lawal', ' ', ' ', '', 'Female', ' ', '', ' lawkutex@gmail.com', ' ', ' ', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' ', ' ', 2013, 'Spring', ''),
(1001178, '1001178', 'Roseblossom', ' Ogechi', ' Nnodim', '26/12/1981', 'Female', ' Nigeria', '', 'blcompere@gmail. com ', ' ', ' +234803341323', '', 'Digital Journalism', 'Professional Certificate', '', '', '', '', '', '', 'Self ', ' +2358033413213', 2013, 'Fall', 'gossyomega'),
(1001180, '', 'Samir', ' ', 'Lamara ', '10/11/1994', 'Male', 'Nigeria ', '', 'Samirlamara@yahoo.com', 'Samirlamara@yahoo.com ', '+2347037871986 ', '', 'Digital Journalism', 'Professional Certificate', '', '', '', '', '', '', 'Lamara Ibrahim ', '+2348123778512 ', 2013, 'Spring', ''),
(1001183, '', ' muhammad', ' zayyad', ' Hussein', '20/12/1991', 'Male', ' Nigeria', '', ' Ziedibnhussein@gmail.com', ' Nassarawa jahun isah yuguda creasent bauchi', ' +2348167993625', '', 'Digital Journalism', 'Professional Certificate', '', '', '', '', '', '', ' Rakiya T yunusa', ' +2348029432844', 2014, 'Spring', ''),
(1001184, '', 'Olumide', 'Emmanuel', 'Idowu', '21/08/1987', 'Male', 'Nigeria', '', 'olumide.aiesec@gmail.com', 'Lagos', '+2348133451818', '', 'Digital Journalism', 'Professional Certificate', '', '', '', '', '', '', ' Femi Idowu', '+2348034381926', 2014, 'Spring', ''),
(1001185, '', ' Kehinde', 'Paul', 'Jolasun', '19/04/1987', 'Male', ' Nigeria', '', 'kehindejolasun@yahoo.com', '40 Olori str., shogunle, oshodi', ' +234 706 820 3896', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' Hammed Jolasun', '+234 808 053 8931', 2013, 'Spring', ''),
(1001186, '', ' ', ' temple', ' ahamefula', '', 'Male', ' kaduna', '', ' oparaocha', ' 28/5/93', ' kaduna', '', 'Global Marketing', 'Professional Certificate', '', '', '', '', '', '', ' he is a deligent and trustworthy person', ' eucharia oparaocha', 2014, 'Spring', ''),
(1001187, '', ' Blessing', 'Festus', ' ', '11-06-1991', 'Male', ' Nigeria', '', ' blessing.festus@outlook.com', ' 1  joe akin strt, alasia,lagos', ' +2348067917893', '', 'Digital Journalism', 'Professional Certificate', '', '', '', '', '', '', ' Blessing Ndi', '+2348162198801', 2014, 'Spring', ''),
(1001188, '', ' Kamil', ' Titilade', ' Alebiosu', '14/03/1986', 'Male', ' Nigeria', '', ' kameel.alebiosu@yahoo.com', ' House 331 Phase one Gwagwalada FCT Abuja', ' +2348063352089', '', 'Project Management', 'Professional Certificate', '', '', '', '', '', '', ' Alebiosu Saheed', ' +2348054224162', 2014, 'Spring', ''),
(1001190, '', ' Ayo', ' ', ' ', '', 'Female', ' ', '', ' kolapoayo@gmail.com', ' 5, queen Elizabeth road mokola roundabout, ibadan', ' ', '', 'Entrepreneurship and Innovation', 'Professional Certificate', '', '', '', '', '', '', ' Mr Kolapo', ' ', 2013, 'Spring', ''),
(1001191, '', ' damilare', ' emmanuel', ' adefowope', '09/07/1994', 'Male', ' Nigeria', '', ' damilareadefowope@gmail.com', ' imoru. ogun state', ' +2348092205634', '', 'Entrepreneurship and Innovation', 'Professional Certificate', '', '', '', '', '', '', ' Mr Adefowope', ' +2347081360109', 2013, 'Fall', ''),
(1001192, '', ' Ikenna', 'Onyeyirichi', 'Igbokwe', '11/01/1988', 'Male', 'Nigeria', '', 'kleflix@yahoo.com', 'World Bank Housing Estate Umuahia Abia State', '+2348033196207', '', 'Project Management', 'Professional Certificate', '', '', '', '', '', '', ' Wokocha Adannaya', ' +2348032577090', 2014, 'Summer', ''),
(1001197, '', ' John-Anthony', 'Akinola', 'Oyewobi', '30/08/1988', 'Male', 'Nigeria', '', 'johntousin@gmail.com', 'Plot 113, Zone A, Apo Resettlement, Abuja', '+2348131804227', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' Richard Oyewobi', '+2348023155088', 2013, 'Summer', ''),
(1001198, '1001198', ' Francois-Xavier Bryan', ' ', 'Ada Affana', '26/06/1994', 'Male', 'Cyprus', '', 'adabfx@yahoo.fr', 'The American University, University Drive - Girne via Mersin 10 - Turkey', '+90 533 849 0442', '', 'Project Management', 'Professional Certificate', '', '', '', '', '', '', ' Dr. Gislaine Ada Ngaska', '+221 766 318776', 2013, 'Fall', 'gossyomega'),
(1001199, '', ' murjanatu', ' abdullahi', ' tukur', '14-05-1987', 'Female', ' nigerian', '', ' tukurmurja@hotmail.com', ' no 36 zoo road kano', ' 07067449442', '', 'Entrepreneurship and Innovation', 'Professional Certificate', '', '', '', '', '', '', ' abdullahi tukur', ' 070666889970', 2014, 'Spring', ''),
(1001207, '1001207', ' nkechi chukura ', ' ', ' ', '', 'Female', ' ', '', ' zeekah929@gmail.com', ' Asaba', ' ', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' Ngozi Chukura ESQ ', ' ', 2013, 'Spring', 'gossyomega'),
(1001209, '', ' kore', 'indime', 'tobi', '12/6/1989', 'Female', 'nigeria', '', 'koretobi@yahoo.com', ' 12 adetola str lagos', '+234 803 376 4235', '', 'Entrepreneurship and Innovation', 'Professional Certificate', '', '', '', '', '', '', ' mr indime', '+234 803 342 3764', 2014, 'Spring', ''),
(1001210, '', ' Ololade ', ' Abosede', ' Ogunsanlu', '13/12/1987', 'Female', ' ', '', ' saintlolstudioz@gmail.com', ' 3, CA Street, FHA, Ipaja Lagos, Nigeria', '+2348025927398', '', 'Digital Journalism', 'Professional Certificate', '', '', '', '', '', '', 'Ibironke Flourish Adufe', '08152626379 ', 2014, 'Spring', ''),
(1001211, '', ' Ante', '', 'Ante', '13/09/1987', 'Male', 'Nigeria', '', 'talk2ante@yahoo.com', '1, Otuyelu street, Off Agunbiade street, Itupate, Ikorodu, Lagos', '+234 708 145 9747', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', 'Nene Ante', ' +234 706 067 7757', 2013, 'Fall', ''),
(1001212, '', ' Andrew', ' ', ' Sule', '6/10/1993', 'Male', ' Nigeria', '', ' Andrewsule8@gmail.com', ' shagari housing estate potiskum,yobe state,Nigeria', ' +2348107419457', '', 'Global Marketing', 'Professional Certificate', '', '', '', '', '', '', ' Sule Alambazam', ' +2347030473137', 2014, 'Spring', ''),
(1001213, '', ' Chioma', ' Sylvia', ' Okoye', '22/03/1985', 'Female', ' Nigeria', '', ' chisylvie@gmail.com', ' No 41, Olabisi street, Roju Avenue, Ojota, Lagos state.', ' +234 803 430 6019', '', 'Entrepreneurship and Innovation', 'Professional Certificate', '', '', '', '', '', '', ' Mrs Lilian Opiegbe', '+234 803 383 5855', 2014, 'Spring', ''),
(1001217, '', ' Tofunmi', 'Opeyemi', 'Oguntibeju', '07/06/1991', 'Male', 'Nigerai', '', 'tofunmi.og@gmail.com', 'Ikorodu road, Maryland, Lagos', '2348166071422', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' ', ' ', 2013, 'Spring', ''),
(1001218, '', ' taoheed', ' ayankojo', ' lamidi', '30/03/1969', 'Male', ' nig', '', ' ayankojololade@yahoo.com', ' 68 nig army complex eleyele ibadan', '+ 2348064702277', '', 'Global Marketing', 'Professional Certificate', '', '', '', '', '', '', ' ', ' ', 2014, 'Spring', ''),
(1001219, '', ' Akpa ', ' Samuel ', ' Chukwuemeka ', '27/05/1986 ', 'Male', ' Nigeria ', '', ' akpasamuelc@gmail.com ', ' No 15 Awolowo Street Abakaliki ', ' +2347033086047 ', '', 'Project Management', 'Professional Certificate', '', '', '', '', '', '', ' Akpa Sunday Egbe ', ' +2348062309471 ', 2013, 'Spring', ''),
(1001220, '', ' Samuel', ' John', ' Ameh', '17/03/1976', 'Male', 'Nigeria ', '', ' esjay76@yahoo.com', ' ', '+234 803 323 3780 ', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' John Ameh', ' +2348069552343', 2014, 'Spring', ''),
(1001222, '', 'Onyinye ', ' ', 'Solu ', '26/06/1994', 'Female', 'Nigeria ', '', 'Angel.kayla45@yahoo.com ', 'No1 charles stella igbariam ', '08173910608 ', '', 'Entrepreneurship and Innovation', 'Professional Certificate', '', '', '', '', '', '', 'Solu ifeanyi ', '08036694005 ', 2013, 'Spring', ''),
(1001227, '', ' Ayodeji', 'Oluwaseun', 'Falaiye', '08/11/1989', 'Male', ' Nigeria', '', ' Falaiyeayo@yahoo.com', ' No 11, Sunmonu street, Pen Cinema, Agege, Lagos', ' +234 8038940008', '', 'Project Management', 'Professional Certificate', '', '', '', '', '', '', ' Mr Adeniyan', ' 08175909426', 2014, 'Spring', ''),
(1001229, '', ' gideon', 'manfa ', 'zwalmak', '06/07/1987', 'Male', ' nigeria', '', 'zwalmakgideon@yahoo.com', ' block d16 flat 12 maxwel khobe cantonment jos', '+234 8133620514 ', '', 'Digital Journalism', 'Professional Certificate', '', '', '', '', '', '', ' mr nanjul  zwalmak', ' 08036165535', 2015, 'Summer', ''),
(1001232, '', 'Goodness', 'RITA ', 'NWOSU ', '22 08 1983', 'Female', 'NIGERIA ', '', ' GOODNESSRIRA@YAHOO.COM', ' 56,AKOBERU STREET OFF SABO ROAD OKOKMAILKO LAGOS', '8033329055 ', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', 'REV.DR.VICTOR IHUOMA ', '08034137240 ', 2013, 'Spring', ''),
(1001233, '', ' AYOMIDE', ' ADEMUYIWA', 'ALAO', '35/04/1991', 'Male', 'Nigeria', '', 'prudentay@gmail.com', 'PLOT 7, FLAT 4, ADAMOLEKUN ESTATE, ADEBAYO, ADO-EKITI, EKITI STATE, NIGERIA', '+2348163591677', '', 'Leadership and Management', 'Professional Certificate', '', '', '', '', '', '', ' DAVID OLUSEGUN OKE', '+2348055225301', 2014, 'Spring', ''),
(1001234, '', 'Samuel', ' Anele', ' Okocha', '22/04/1985', 'Male', ' Nigeria', '', 'samuel.okocha@yahoo.com ', '#21 Omoi/Orosi rd., Rumuigbo, Port Harcourt, Rivers State ', ' +234 803 676 9794', '', 'Entrepreneurship and Innovation', 'Professional Certificate', '', '', '', '', '', '', ' ', ' ', 2014, 'Spring', ''),
(1001239, '', ' Lily', 'Ngozi', 'Idu- Charles', '09/01/1987', 'Female', 'Nigeria', '', 'Lcharles382@gmail.com', 'Plot 1, Adeola Odeku, Victoria Island, Lagos', '+2347017365637', '', 'Project Management', 'Professional Certificate', '', '', '', '', '', '', ' Dr. Charles', ' +2348039289801', 2014, 'Spring', ''),
(1001240, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `tid` int(11) NOT NULL auto_increment,
  `amount` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `part` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `sid` int(11) NOT NULL,
  `officer` varchar(50) NOT NULL,
  PRIMARY KEY  (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`tid`, `amount`, `type`, `part`, `description`, `sid`, `officer`) VALUES
(1, 750, 'Deposit', 'Fall 2012', 'Semester Tuition for 5 Courses with no Scholarship', 1001012, 'enohanson'),
(2, 200, 'Deposit', 'Fall 2012', 'One Off Registration Fee ', 1001012, 'enohanson'),
(5, 300, 'Deposit', 'Spring 2012', 'Graduation Fee for the Final semester and year', 1001012, 'accountant'),
(6, 250, 'Withdrawal', 'Spring 2012', 'Return is collected Fees that should be billed to the student', 1001012, 'accountant'),
(7, 500, 'Deposit', 'Spring 2012', 'Initial Deposit', 11, 'accountant'),
(8, 1200, 'Deposit', 'Spring 2012', 'Initial Deposit', 123, 'accountant'),
(9, 500, 'Deposit', 'Spring 2013', 'New Semester Fees', 1001012, 'accountant'),
(11, 45, 'Deposit', 'Spring 2012', 'ok', 0, 'accountant'),
(12, 2500, 'Deposit', 'Spring 2012', 'Initial Deposit Prior to issuing the Provisional student letter.', 1001027, 'accountant'),
(13, 1000, 'Deposit', 'Spring 2012', 'Payment for 5 courses', 1001028, 'accountant'),
(14, 400, 'Deposit', 'Fall 2013', 'Scholarship / Pay for the Fall 2013 Entrepreneurship and Innovation Program', 1001147, 'accountant'),
(15, 400, 'Deposit', 'Fall 2013', 'Scholarship / Pay for the Fall 2013 Entrepreneurship and Innovation Program', 1001118, 'accountant'),
(16, 200, 'Deposit', 'Fall 2013', '50% Deposit for the Project Management Course starting October 2013.', 1001145, 'accountant'),
(17, 600, 'Deposit', 'Spring 2013', '100% Scholarship for Professional Program', 1001174, 'accountant'),
(18, 400, 'Deposit', 'Spring 2013', '100% Scholarship for the Project Management Program at BAU', 1001198, 'accountant');
