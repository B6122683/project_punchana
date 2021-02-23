-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 03:26 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `punchana`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(10) NOT NULL,
  `name_proj` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_id` int(255) DEFAULT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `name_manage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_proj` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_proj` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banking` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name_proj`, `type_id`, `description`, `date`, `name_manage`, `phone_proj`, `email_proj`, `address`, `banking`, `img`) VALUES
(6, 'มูลนิธิบ้านนกขมิ้น', 2, 'บ้านหลังใหม่ของเด็กกำพร้า เด็กเรร่อน เด็กด้อยโอกาส ให้การช่วยเหลือด้วยความรักจากรูปแบบการดูแลระบบครอบครัว', '2021-05-01', 'นายสุรชัย สุขเขียวอ่อน', '02-375-245', 'baannokkamin1-1@hotmail.com', 'การมิชชันนารี', 'ธนาคารกรุงไทย เลขบัญชี 762-0-05459-6', 'p1.jpg'),
(7, 'ใครรักป่ายกมือขึ้น', 4, 'ร่วมขยับจับมือกันดูแลผู้พิทักษ์ป่า ช่วยเหลือเมื่อเกิดเจ็บป่วยบาดเจ็บหรือเสียชีวิต', '2021-05-11', 'ธัญวรรณ', '098-615-58', 'info@taejai.com', '63/32 ชั้น2 อาคารชำนาญเพ็ญชาติ บิสเนสเซ็นเตอร์ ถนนพระราม9 แขวงห้วยขวาง เขตห้วยขวาง กทม 10310', 'ธนาคารไทยพาณิชย์ สาขาเพชรบุรีตัดใหม่ 043-272833-9 ชื่อบัญชี มูลนิธิบูรณะชนบทแห่งประเทศไทยฯ เพื่อโครงการเทใจ', 'p2.jpg'),
(8, 'ผ้าอ้อมเพื่อผู่ป่วยสูงอายุ', 3, 'ช่วยเหลือผู้ป่วยติดเตียงปี 62 จำนวน 260 คน มอบสิ่งของจำเป็นให้ เช่น ผ้าอ้อมผู้ใหญ่ อุปกรณ์การแพทย์ ', '2021-07-07', 'ธัญวรรณ', '098-615-58', 'info@taejai.com', '63/32 ชั้น2 อาคารชำนาญเพ็ญชาติ บิสเนสเซ็นเตอร์ ถนนพระราม9 แขวงห้วยขวาง เขตห้วยขวาง กทม 10310', 'ธนาคารไทยพาณิชย์ สาขาเพชรบุรีตัดใหม่\r\nชื่อบัญชี: มูลนิธิบูรณะชนบทแห่งประเทศไทยฯ เพื่อโครงการเทใจ (TRRM FOR TAEJAI)\r\nเลขบัญชี043-272833-9', 'p3.jpg'),
(9, 'The Voice (เสียงจากเรา)', 1, 'ส่งเสริมสวัสดิภาพสัตว์ในประเทศไทยที่ได้มองเห็นสัตว์ที่ถูกทิ้ง ถูกทำร้าย ประสบอุบัติเหตุ โดยจะช่วยเหลือและรักษาสัตว์ที่ถูกทิ้ง ถูกทำร้าย ได้รับอุบัติเหตุ และจัดหาผู้รับอุปการะ', '2021-08-01', 'ชลลดา เมฆราตรี', '098-878-84', 'the_void@gmail.com', '76/12 ถนนเสนานิคม1 ซอย110/3 (หมู่บ้านเสนานิเวศน์1) แขวงจระเข้บัว เขตลาดพร้าว กรุงเทพมหานคร 10230', 'บัญชีธนาคารกสิกรไทย ชื่อบัญชี มูลนิธิเดอะวอยซ์(เสียงจากเรา)\r\nเลขที่บัญชี : 617-2-12333-1 ออมทรัพย์ สาขา ออลซีซั่นเพลส', 'p4.jpg'),
(10, 'วันละบาทต่อชีวิตหมาแมว', 1, 'ท่านสามารถเข้าร่วมโครงการโดยการร่วมบริจาคต่อเนื่อง ขั้นต่ำ วันละ 1 บาท เดือนละ 30 บาท ทุนทรัพย์ที่ทุกท่านร่วมบริจาค เพื่อนำมาดูแลสัตว์พิการ และ สัตว์ทุพลภาพ หากท่านมีความประสงค์สมัครโครงการ', '2021-03-31', 'พิมพ์กุล โอฬารศิรโรจน์', '02-961-536', 'home4animals@hotmail.com', '15/1 หมู่ 1 ซ.พระมหาการุณย์ 25 ถ.ติวานนท์ -ปากเกร็ด 56\r\nต.บ้านใหม่ อ.ปากเกร็ด จ.นนทบุรี 11120', 'นางพิมพ์กุล โอฬารศิรโรจน์ ประเภทออมทรัพย์\r\nสาขาสรงประภา ธ.กรุงเทพ  เลขที่ 059-0-09071-8', 'p5.jpg'),
(11, 'ฟื้นฟูป่าเชียงดาว', 4, 'มุ่งเน้นการแก้ปัญหาไฟป่า ดูแลไม่ให้เกิดไฟลุกไหม้ขึ้นอีก รวมทั้งฟื้นฟูป่าในระยะเบื้องต้น \r\nป้องกันและแก้ไขปัญหาไฟป่าด้วยการร่วมมือกับชาวบ้านรอบๆ ดอยหลวง 20 หมู่บ้าน เพื่อควบคุมไฟป่าเชียงดาว (ห่อข้าววันละ 100 ห่อ)', '2021-03-30', 'ชนัตฎา ดำเงิน', '093-983305', 'Urbantreecare2014@gmail.com', 'องค์การบริหารส่วนตำบลเมืองคอง 135 หมู่ 4 ต.เมืองคอง อ.เชียงดาว จ.เชียงใหม่ 50170 โทร.086-0577881', 'เลขบัญชี 516-1-30940-7 ธ.กรุงไทย สาขาเชียงดาว', 'p6.jpg'),
(12, 'โครงการเครือข่ายครูดีของแผ่นดิน', 2, 'พัฒนาครูและบุคลากรทางการศึกษาให้ประพฤติตนเป็นครูดีของแผ่นดิน มีศีลธรรม อุดมด้วยจิตวิญญาณความเป็นครู ตามหลักปรัชญาเศรษฐกิจพอเพียง ให้ครูรักนักเรียน นักเรียนรักครูให้ครูสอนเด็กมีน้ำใจต่อเพื่อน ไม่ให้แข่งขันกัน ให้แข่งกับตนเอง ให้เด็กเก่งกว่าช่วยสอนเพื่อนที่ช้ากว่า ให้ครูจัดกิจกรรมให้เด็กทำ ร่วมกันเพื่อให้เกิดความสามัคคี', '2021-01-24', 'พลเอกเอกชัย ศรีวิลาศ', '02-001-151', 'thaisuprateacher@gmail.com', '103 ถนน วิสุทธิกษัตริย์ แขวง บางขุนพรหม เขตพระนคร กรุงเทพมหานคร 10200', 'มูลนิธิครูดีของแผ่นดิน(บำรุงสมาชิก-บริจาค) ธนาคารกรุงไทย สาขาถนนวิสุทธิกษัตริย์ เลขที่บัญชี 0060215763', 'p7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project_type`
--

CREATE TABLE `project_type` (
  `type_id` int(20) NOT NULL,
  `type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_type`
--

INSERT INTO `project_type` (`type_id`, `type_name`) VALUES
(1, 'สัตว์'),
(2, 'เด็ก'),
(3, 'ผู้สูงอายุ'),
(4, 'สิ่งแวดล้อม');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone`, `email`, `password`, `user_type`) VALUES
(1, 'yeri', '0233125325', 'yeri@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(2, 'nara', '0226546432', 'nara11@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(3, 'sirinapa', '0933562174', 'thangtham_19@hotmail.com', 'eb02fde9e9b30c863de4e281aae83081', ''),
(4, 'top', '0862145321', 'top.t@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(5, 'gate', '0955232323', 'ga_te@testy.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(6, 'mark', '0576321525', 'ma_rk@gmail.com', '984cefd6d27eb0471fc401a493a4fdff', ''),
(7, 'got7', '0855621355', 'got@gmail.com', 'ec2d752ed0d0652254087040bced0247', ''),
(8, 'wolf45', '0984523633', 'awolf.12@gmail.com', '7adaa756553ba9eb6a235080f6263b5b', ''),
(9, 'wonty', '0865263323', 'won.d@office365.ac.th', 'c6713e8a3f0987cecbd7b294024caa18', ''),
(11, 'kun', '0532632632', 'kun@gmail.com', '2c95c17bcd6b0495082ba67cf1e5b7a5', ''),
(55, 'mum', '0235556556', 'mum@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(68, 'toy', '0226546432', 'toy@gmail.com', '6eab6d656653478804fbc710ca538fdf', 'user'),
(69, 'win', '0955235622', 'win@gmail.com', '3437bbb5f635a5360fa110c1a1437059', 'user'),
(70, 'run', '0955235622', 'run@gmail.com', '566b6c1b3aa03f11224a256d173a20db', 'user'),
(71, 'han', '0226546432', 'han@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(72, 'nancy', '0226546432', 'nancy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(73, 'tawan', '0622543254', 'tawan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(74, 'num', '0622543211', 'num@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(75, 'time', '0622543253', 'time@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `typeId` (`type_id`);

--
-- Indexes for table `project_type`
--
ALTER TABLE `project_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `project_type`
--
ALTER TABLE `project_type`
  MODIFY `type_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `typeId` FOREIGN KEY (`type_id`) REFERENCES `project_type` (`type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
