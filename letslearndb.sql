-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 10:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letslearndb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminName`, `email`, `phoneNumber`, `password`) VALUES
(40001, 'admin', 'admin@gmail.com', 1900000002, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(1000) NOT NULL,
  `replies` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'How can I enroll into a course? | enroll into a course | enroll course | enrollment process | enrollment | enroll |', 'Tap the \"View Course\" button on a desired course from Courses page and you can purchase the course.'),
(2, 'How much does it cost to enroll in a course? | cost of a course | cost course | purchase course | cost enrollment | cost enrollment course |  price range of courses | price of course | course price | price ', 'Our courses range from BDT999 - BDT1500'),
(3, 'How can I access the lecture material and videos? |access lecture material | access material | access lecture | see videos | see lectures | watch lecture and videos | how can i watch the lecture videos? | how can i view materials', 'From our courses page, select the desired course and you can find free videos. You can also Purchase the full course to view all the lectures and videos.'),
(4, 'How can I track my progress in a course? | track my progress in course | track course progress ', 'Click Achievements from your sidebar to find out about your progress.'),
(5, 'What is the tuition fee for a particular program? |tuition fee | tuition fee program | program tuition fee |program cost |cost of program', 'Our courses range from BDT999 - BDT1500'),
(6, 'Can I get a refund if I am not satisfied with a course? |any refund policy? |refund policy | any refund policy | what do i do if i am not satisfied with service | what if service is not up to the mark ', 'Sure! Refunds are valid upto 7 days from purchasing the course. Just use the contact us form from Homepage.'),
(7, 'Can you provide me with a certificate of completion for a course? | any certificate? | do i get any certificate upon completion? ', 'Yes! Upon completion of a course and related coursework, a student can receive certification.'),
(8, 'How long does it take to complete a course?|time of completion |course completion |course duration | course period', 'It depends on the course. Usually you can get a rough estimate by looking at the length of the videos in a particular course.'),
(9, 'How can I reset my password? | forgot password | i forgot my password | reset password', 'In such a case contact the Admin using Contact Us form on the Homepage.'),
(10, 'How can I cancel my enrollment in a course? | cancel enrollment | cancellation of a course | course cancellation | i do not want to continue with the course what do i do', 'Sure! Contact the Admin using Contact Us form on the Homepage.'),
(11, 'Can I enroll in multiple courses at the same time? | multiple enrollment |  multiple course enrollment | many course enrollment | is it possible to enroll into multiple courses?', 'Yes! Happy Learning!'),
(12, 'How can I access technical support if I have problems with the website? | problem with website | need technical support |website is down | technical problem', 'You can contact the Admin using Contact Us form on the Homepage');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `yourname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `messages` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseID` int(11) NOT NULL,
  `courseName` varchar(40) NOT NULL,
  `courseLevel` varchar(10) NOT NULL,
  `courseBoard` varchar(20) NOT NULL,
  `vidLink` varchar(1000) NOT NULL,
  `unit` varchar(5) NOT NULL,
  `teacherID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `courseName`, `courseLevel`, `courseBoard`, `vidLink`, `unit`, `teacherID`) VALUES
(10001, 'Economics', 'AS', 'Edexcel', 'https://www.youtube.com/embed/iW6ZwsOkCpE', 'U2', 30001),
(10002, 'Accounting', 'A2', 'CAIE', 'https://www.youtube.com/embed/jKHc9dwn4Jw?list=PL4JbinZgBwrluqFqNy9O3V48bQrroNPNs ', 'U2', 30002),
(10003, 'Bangladesh Studies', 'O\' Level', 'CAIE', 'https://www.youtube.com/embed/wI9uT0Hhk74', 'P1', 30003),
(10004, 'English', 'O\' Level', 'Edexcel', 'https://www.youtube.com/embed/hsyVDG8o4n0?list=PLi9I8UD2qNzQxBDGK24t_DBWqrAgecBGX ', 'P1', 30004),
(10005, 'Law', 'AS', 'CAIE', 'https://www.youtube.com/embed/H4CYnz9LlT0?list=PLaQBxdrnmtNxyAAfH0K3t8D10UYj0W_RS', 'P2', 30005),
(10006, 'Chemistry', 'A2', 'Edexcel', 'https://www.youtube.com/embed/qZ3INba16v0?list=PLkocNW0BSuEG6bdvwmLbUDMLLOg48D1NA', 'U5', 30001),
(10007, 'Physics', 'O\' Level', 'CAIE', 'https://www.youtube.com/embed/dQw4w9WgXcQ', 'P2', 30002),
(10008, 'History', 'A2', 'Edexcel', 'https://www.youtube.com/embed/WcIcVapfqXw', 'U6', 30003),
(10009, 'Commerce', 'AS', 'CAIE', 'https://www.youtube.com/embed/J4ZME5KOB-s', 'U2', 30004),
(10010, 'Maths B', 'O\' Level', 'Edexcel', 'https://www.youtube.com/embed/j7VU5A8ajSA', 'P1', 30005);

-- --------------------------------------------------------

--
-- Table structure for table `courserequest`
--

CREATE TABLE `courserequest` (
  `requestID` int(11) NOT NULL,
  `teacherID` int(11) NOT NULL,
  `courseName` varchar(40) NOT NULL,
  `courseLevel` varchar(15) NOT NULL,
  `courseBoard` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `studentID` int(11) NOT NULL,
  `courseID` int(11) NOT NULL,
  `enrollmentDate` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`studentID`, `courseID`, `enrollmentDate`) VALUES
(20001, 10001, '10/03/2023'),
(20001, 10010, '10/03/2028'),
(20002, 10002, '11/03/2023'),
(20002, 10009, '11/03/2028'),
(20003, 10003, '10/03/2023'),
(20003, 10008, '10/03/2029'),
(20004, 10004, '11/03/2024'),
(20004, 10007, '11/03/2029'),
(20005, 10005, '10/03/2025'),
(20005, 10006, '10/03/2030'),
(20006, 10005, '11/03/2030'),
(20006, 10006, '11/03/2025'),
(20007, 10004, '10/03/2031'),
(20007, 10007, '10/03/2026'),
(20008, 10003, '11/03/2031'),
(20008, 10008, '11/03/2026'),
(20009, 10002, '10/03/2032'),
(20009, 10009, '10/03/2027'),
(20010, 10001, '11/03/2032'),
(20010, 10010, '11/03/2027');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` int(11) NOT NULL,
  `studentName` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `eduLevel` varchar(20) NOT NULL,
  `eduBoard` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `studentName`, `email`, `address`, `dob`, `phoneNumber`, `eduLevel`, `eduBoard`, `password`) VALUES
(20001, 'Fariha Akhter', '2020011@iub.edu.bd', 'House No. 58, Sonaimuri Road, Hathazari, Chittagong', '1/2/2002', 1700000001, 'O\' Level', 'Edexcel', 'fariha'),
(20002, 'Anannya Preeta', '2020012@iub.edu.bd', 'House No. 76, Sujanagar Road, Sujanagar, Pabna', '11/2/2002', 1700000002, 'AS', 'CAIE', 'anannya'),
(20003, 'Ayesha Begum', '2020013@iub.edu.bd', 'House No. 8, Shantinagar Road, Nobabgonj, Dhaka', '6/1/2000', 1700000003, 'A2', 'Edexcel', 'ayesha'),
(20004, 'Marufa Akter', '2020014@iub.edu.bd', 'House No. 14, Station Road, Sadar Bazar, Narayanganj', '6/1/2002', 1700000004, 'O\' Level', 'CAIE', 'marufa'),
(20005, 'Sabina Akter', '2020015@iub.edu.bd', 'House No. 11, BRTC Road, Basundhara, Rangpur', '16/01/2002', 1700000005, 'AS', 'Edexcel', 'sabina'),
(20006, 'Afrin Akter', '2020016@iub.edu.bd', 'House No. 43, Amborkhana Road, Amborkhana, Sylhet', '26/01/2002', 1700000006, 'A2', 'CAIE', 'afrin'),
(20007, 'Tanjina Akter', '2020017@iub.edu.bd', 'House No. 67, Chandgaon Road, Chandgaon, Dhaka', '5/2/2002', 1700000007, 'O\' Level', 'Edexcel', 'tanjina'),
(20008, 'Fardin Afsan Shafi', '2020018@iub.edu.bd', 'House No. 67, Chandgaon Road, Chandgaon, Dhaka', '15/02/2002', 1700000008, 'AS', 'CAIE', 'fardin'),
(20009, 'Md. Saiful Islam', '2020019@iub.edu.bd', 'House No. 15, Sonadanga Road, Sonadanga, Khulna', '2/1/2000', 1700000009, 'A2', 'Edexcel', 'saiful'),
(20010, 'Md. Ashraful Haque', '2020020@iub.edu.bd', 'House No. 23, Nai Sarak Road, Nai Sarak, Mymensingh', '10/1/2002', 1700000010, 'O\' Level', 'CAIE', 'ashraful');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherID` int(11) NOT NULL,
  `teacherName` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `phoneNumber` int(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherID`, `teacherName`, `email`, `address`, `qualification`, `phoneNumber`, `password`) VALUES
(30001, 'Bijoy Arif Rahman', 'bar@gmail.com', 'House No. 58, Sonaimuri Road, Hathazari, Chittagong', 'PhD in Physics from ', 1800000001, 'bijoy'),
(30002, 'Mahady Hassan', 'mh@gmail.com', 'House No. 76, Sujanagar Road, Sujanagar, Pabna', 'JD from Yale Law Sch', 1800000002, 'mahady'),
(30003, 'Ajmiri Sultana', 'as@gmail.com', 'House No. 8, Shantinagar Road, Nobabgonj, Dhaka', 'MD from Harvard Medi', 1800000003, 'ajmiri'),
(30004, 'Sanzar Adnan', 'sa@gmail.com', 'House No. 14, Station Road, Sadar Bazar, Narayanganj', 'PhD in English from ', 1800000004, 'sanzar'),
(30005, 'Sabrina Alam', 'sab@gmail.com', 'House No. 11, BRTC Road, Basundhara, Rangpur', 'PhD in Economics fro', 1800000005, 'sabrina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseID`),
  ADD KEY `teacherID` (`teacherID`);

--
-- Indexes for table `courserequest`
--
ALTER TABLE `courserequest`
  ADD PRIMARY KEY (`requestID`),
  ADD KEY `fk_courserequest_teacher` (`teacherID`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`studentID`,`courseID`),
  ADD KEY `courseID` (`courseID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40002;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10011;

--
-- AUTO_INCREMENT for table `courserequest`
--
ALTER TABLE `courserequest`
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6001;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20011;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacherID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30006;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`teacherID`) REFERENCES `teacher` (`teacherID`);

--
-- Constraints for table `courserequest`
--
ALTER TABLE `courserequest`
  ADD CONSTRAINT `fk_courserequest_teacher` FOREIGN KEY (`teacherID`) REFERENCES `teacher` (`teacherID`);

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`courseID`) REFERENCES `course` (`courseID`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
