-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 02:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor_db`
--

CREATE TABLE `donor_db` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(70) NOT NULL,
  `BLOOD_GROUP` varchar(4) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `EMAIL` varchar(70) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `HOS_NO` varchar(93) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `CONTACT` varchar(16) NOT NULL,
  `SAVE_LIFE_DATE` varchar(20) NOT NULL,
  `REDIRECT_URL` varchar(500) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor_db`
--

INSERT INTO `donor_db` (`ID`, `NAME`, `BLOOD_GROUP`, `GENDER`, `EMAIL`, `CITY`, `HOS_NO`, `DOB`, `CONTACT`, `SAVE_LIFE_DATE`, `REDIRECT_URL`, `PASSWORD`) VALUES
(9, 'Anu Halder', 'B+', 'Male', 'jjk@gmail.com', 'Chakdah General Hospital', '03473242500', '1971-09-19', '9925526889', '0', 'https://www.google.com/maps/dir//3GFG%2B7GR+Chakdaha+State+General+Hospital,+Locality:,+Rabindranagar,+Rajbagan,+Chakdaha,+West+Bengal+741222/@23.073233,88.523696,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f8c17195aaaaab:0x26238a122339a6f4!2m2!1d88.5262709!2d23.0732281!3e0?authuser=0&entry=ttu', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'Sankalpa Sarkar', 'AB+', 'Male', 'sankalpasarkar68@gmail.com', 'Chakdah General Hospital', '03473242500', '2005-03-31', '8670707887', '0', 'https://www.google.com/maps/dir//3GFG%2B7GR+Chakdaha+State+General+Hospital,+Locality:,+Rabindranagar,+Rajbagan,+Chakdaha,+West+Bengal+741222/@23.073233,88.523696,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f8c17195aaaaab:0x26238a122339a6f4!2m2!1d88.5262709!2d23.0732281!3e0?authuser=0&entry=ttu', '2e6cc8e163f713ec41cc39d5a867fab5'),
(11, 'sayan', 'O+', 'Male', 'atanu.saha2004@gmail.com', 'ILS Hospital', '03340880000', '1992-02-17', '8697768240', '0', 'https://www.google.com/maps/dir//ILS+Hospitals,+Howrah,+Doctor+Abani+Dutta+Road,+opposite+Golabari,+PS,+Howrah,+West+Bengal/@22.592966,88.3033317,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3a0277c1f2f67309:0x2d4ba68221440468!2m2!1d88.3445316!2d22.592892!3e0?authuser=0&entry=ttu', 'a3d90b5123da91872a5a59c9c33714e7'),
(12, 'XY', 'O+', 'Male', 'xyz@abc.com', 'BMRC Hospital', '03325014947', '1984-01-01', '997232123', '0', 'https://www.google.com/maps/dir//BMRC+Hospital+:+Best+Cardiology+Hospitals+in+Kolkata,+Barrackpore+Trunk+Road,+Talpukur,+Titagarh,+Barrackpore,+West+Bengal/@22.7492131,88.33139,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f89bb207741f73:0x216e28c6b6101513!2m2!1d88.3725899!2d22.7491392!3e0?authuser=0&entry=ttu', 'e10adc3949ba59abbe56e057f20f883e'),
(14, 'Debdutta Pal', 'O-', 'Female', 'debduttapal@gmail.com', 'Narayana Hospital', '8067506907', '30.10.2023', '9856348569', '0', 'https://www.google.com/maps/dir//Narayana+Hospital,+Barasat,+Jessore+Road,+Barasat,+Kolkata,+West+Bengal/@22.7053488,88.4309734,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f8a20931000025:0x3fbae55f12a3238a!2m2!1d88.4721733!2d22.7052749!3e0?authuser=0&entry=ttu', 'abcdef'),
(15, 'Ram Gopal', 'B-', 'Female', 'sahnikibiswas@gmail.com', 'GNRC Hospital', '8100974444', '1971-04-13', '7466953185', '0', 'https://www.google.com/maps/dir//GNRC+Hospitals,+Barasat,+Kolkata,+Kolkata+-+Basirhat+Road,+Koyra,+West+Bengal/@22.7092591,88.4999121,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f8a3e1fb51fae3:0xab43e89f50999e8!2m2!1d88.541112!2d22.7091852!3e0?authuser=0&entry=ttu', 'd203275a0f3782e061e59b0a3914762d'),
(16, 'Sohini Das', 'A-', 'Female', 'sohinidas@gmail.com', 'Charu Hospital', '03473245333', '2004-12-08', '9644857236', '0', 'https://www.google.com/maps/dir//Charu+health+point+nursing+home,+Nikunja+bhavan,+Chakdaha+Bonogram+Rd,+Lalpur,+Chakdaha,+West+Bengal+741222/@23.0766998,88.53169,15.75z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f8c1577a62e475:0x219589b19665e39e!2m2!1d88.5342492!2d23.0796335!3e0?authuser=0&entry=ttu', 'a36ee0a1eb6ddbe82cb387c04bf8b5f0'),
(17, 'Baninda Haldar', 'B+', 'Male', 'banindahaldar@gmail.com', 'Charu Hospital', '03473245333', '2001-11-10', '5488629753', '0', 'https://www.google.com/maps/dir//Charu+health+point+nursing+home,+Nikunja+bhavan,+Chakdaha+Bonogram+Rd,+Lalpur,+Chakdaha,+West+Bengal+741222/@23.0766998,88.53169,15.75z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f8c1577a62e475:0x219589b19665e39e!2m2!1d88.5342492!2d23.0796335!3e0?authuser=0&entry=ttu', '5d91d7fc58e8d6ebc73c8ada072b2e29'),
(18, 'Akash Sarkar', 'A+', 'Male', 'akashsarkar@gmail.com', 'Apollo Hospital', '03344202122', '1972-07-09', '9584112648', '0', 'https://www.google.com/maps/dir//Apollo+Multispeciality+Hospitals,+Kolkata,+58,+Canal+Circular+Rd,+Kadapara,+Phool+Bagan,+Kankurgachi,+Kolkata,+West+Bengal+700054/@22.5747574,88.3990153,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3a0277b5341e8edf:0x620ba314896272e1!2m2!1d88.4015902!2d22.5747525!3e0?authuser=0&entry=ttu', 'd41d8cd98f00b204e9800998ecf8427e'),
(20, 'Wally Hamburg', 'O-', 'Female', 'burgerin@gmail.com', 'Narayana Hospital', '8067506907', '1989-07-11', '8455769215', '0', 'https://www.google.com/maps/dir//Narayana+Hospital,+Barasat,+Jessore+Road,+Barasat,+Kolkata,+West+Bengal/@22.7053488,88.4309734,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f8a20931000025:0x3fbae55f12a3238a!2m2!1d88.4721733!2d22.7052749!3e0?authuser=0&entry=ttu', 'd0f016c23b2f469f5af1775ccc10887d'),
(21, 'Bikrami Karmakar', 'O+', 'Female', 'faaaaeffggh@gmail.com', 'BN Bose Hospital', '03325923676', '1957-05-03', '9423155876', '0', 'https://www.google.com/maps/dir//Dr.+B.N+Basu,+Barrackpore+Trunk+Rd,+Cantonment,+Barrackpore,+West+Bengal+700120/@22.7405883,88.3756594,14z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f89bada8273b8d:0x10e221c0fcace736!2m2!1d88.37052!2d22.7514!3e0?authuser=0&entry=ttu', '8ed430e6168da1fa019ac1ade4be3091'),
(22, 'Hema Mandal', 'AB-', 'Female', 'ubegigfiaif@gmail.com', 'Calcutta Medical Research Institute', '03322551614', '1970-03-15', '856417856', '0', 'https://www.google.com/maps/dir//The+Calcutta+Medical+Research+Institute,+Diamond+Harbour+Road,+New+Alipore,+Kolkata,+West+Bengal/@22.5322438,88.2866025,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3a0277596a6eacc7:0xbf6e76f5b5566257!2m2!1d88.3278024!2d22.5321698!3e0?authuser=0&entry=ttu', '7459015355dd10488cf7cb895eebab43'),
(23, 'Sohani Biswas', 'AB-', 'Female', 'shreyassaha00@gmail.com', 'ILS Hospital', '03340880000', '1963-10-14', '8670495670', '0', 'https://www.google.com/maps/dir//ILS+Hospitals,+Howrah,+Doctor+Abani+Dutta+Road,+opposite+Golabari,+PS,+Howrah,+West+Bengal/@22.592966,88.3033317,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3a0277c1f2f67309:0x2d4ba68221440468!2m2!1d88.3445316!2d22.592892!3e0?authuser=0&entry=ttu', '630058029627ce58e7571e7a5b6ec591'),
(25, 'Tanaya Halder', 'B-', 'Female', 'yiiowyyyuu2@gmail.com', 'GNRC Hospital', '8100974444', '1977-05-09', '8547621548', '0', 'https://www.google.com/maps/dir//GNRC+Hospitals,+Barasat,+Kolkata,+Kolkata+-+Basirhat+Road,+Koyra,+West+Bengal/@22.7092591,88.4999121,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f8a3e1fb51fae3:0xab43e89f50999e8!2m2!1d88.541112!2d22.7091852!3e0?authuser=0&entry=ttu', '019ec3132cdf8ee0f2e2a75cf5d3e459'),
(26, 'Bala Dutta', 'A-', 'Male', 'saefeafgseg@gmail.com', 'Calcutta Medical Research Institute', '03322551614', '1970-11-13', '9644785663', '0', 'https://www.google.com/maps/dir//The+Calcutta+Medical+Research+Institute,+Diamond+Harbour+Road,+New+Alipore,+Kolkata,+West+Bengal/@22.5322438,88.2866025,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3a0277596a6eacc7:0xbf6e76f5b5566257!2m2!1d88.3278024!2d22.5321698!3e0?authuser=0&entry=ttu', '3ee36d4495933fafd01bfbbdb6246838'),
(27, 'tanisha sen', 'B-', 'Male', 'tanisha@gmail.com', 'GNRC Hospital', '8100974444', '1972-01-18', '8956705986', '0', 'https://www.google.com/maps/dir//GNRC+Hospitals,+Barasat,+Kolkata,+Kolkata+-+Basirhat+Road,+Koyra,+West+Bengal/@22.7092591,88.4999121,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f8a3e1fb51fae3:0xab43e89f50999e8!2m2!1d88.541112!2d22.7091852!3e0?authuser=0&entry=ttu', '5e3ec78c56fecbddc8eb9ba033be0010'),
(28, 'angel priya halder', 'AB-', 'Female', 'priyahalder@gmail.com', 'Apollo Hospital', '03344202122', '2004-03-31', '9874563215', '0', 'https://www.google.com/maps/dir//Apollo+Multispeciality+Hospitals,+Kolkata,+58,+Canal+Circular+Rd,+Kadapara,+Phool+Bagan,+Kankurgachi,+Kolkata,+West+Bengal+700054/@22.5747574,88.3990153,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3a0277b5341e8edf:0x620ba314896272e1!2m2!1d88.4015902!2d22.5747525!3e0?authuser=0&entry=ttu', '2e2c76b448d26bb4bf0e74815b6ffdf0'),
(30, 'Prasenjit Das', 'B+', 'Male', 'prasenjitrcciit@gmail.com', 'Apollo Hospital', '03344202122', '1988-06-12', '9903897319', '0', 'https://www.google.com/maps/dir//Apollo+Multispeciality+Hospitals,+Kolkata,+58,+Canal+Circular+Rd,+Kadapara,+Phool+Bagan,+Kankurgachi,+Kolkata,+West+Bengal+700054/@22.5747574,88.3990153,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3a0277b5341e8edf:0x620ba314896272e1!2m2!1d88.4015902!2d22.5747525!3e0?authuser=0&entry=ttu', 'e10adc3949ba59abbe56e057f20f883e'),
(31, 'Prantik Sen', 'B+', 'Male', 'prantiksen@gmail.com', 'ILS Hospital', '03340880000', '1970-03-17', '9800878341', '0', 'https://www.google.com/maps/dir//ILS+Hospitals,+Howrah,+Doctor+Abani+Dutta+Road,+opposite+Golabari,+PS,+Howrah,+West+Bengal/@22.592966,88.3033317,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3a0277c1f2f67309:0x2d4ba68221440468!2m2!1d88.3445316!2d22.592892!3e0?authuser=0&entry=ttu', '61f32d7a064d804d835e7f5a66fbb26d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_db`
--
ALTER TABLE `donor_db`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_db`
--
ALTER TABLE `donor_db`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
