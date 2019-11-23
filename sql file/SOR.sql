SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
);



INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2019-10-31 10:38:49');



CREATE TABLE `tblclasses` (
  `id` int(11) NOT NULL,
  `ClassName` varchar(80) DEFAULT NULL,
  `ClassNameNumeric` int(4) DEFAULT NULL,
  `Section` varchar(5) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
);



INSERT INTO `tblclasses` (`id`, `ClassName`, `ClassNameNumeric`, `Section`, `CreationDate`, `UpdationDate`) VALUES
(1, 'First', 1, 'C', '2019-10-31 16:52:33', '2019-10-31 05:53:47'),
(2, 'Second', 2, 'A', '2019-10-31 17:21:20', '2019-10-31 17:21:38'),
(3, 'Third', 3, 'A', '2019-10-31 19:21:05', '2019-10-31 23:21:24'),  
(4, 'Fourth', 4, 'C', '2019-10-31 09:24:23', '0000-00-00 00:00:00'),
(5, 'Sixth', 6, 'A', '2019-10-31 09:35:08', '0000-00-00 00:00:00'),
(6, 'Sixth', 6, 'B', '2019-10-31 18:42:41', '2019-10-31 18:43:02'),
(7, 'Seventh', 7, 'B', '2019-10-31 18:52:00', '2019-10-31 18:52:15'),
(8, 'Eight', 8, 'A', '2019-10-31 19:21:05', '2019-10-31 19:21:24');



CREATE TABLE `tblsubjects` (
  `id` int(11) NOT NULL,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
);



INSERT INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `Creationdate`, `UpdationDate`) VALUES
(1, 'Maths', 'Mth101', '2019-10-31 09:23:57', '2019-10-31 09:46:54'),
(2, 'English', 'Eng11', '2019-10-31 09:24:25', '0000-00-00 00:00:00'),
(4, 'Science', 'SC1', '2019-10-31 09:36:15', '0000-00-00 00:00:00'),
(5, 'Music', 'Mc101', '2019-10-31 09:37:23', '0000-00-00 00:00:00'),
(6, 'Social Studies', 'Ss08', '2019-10-31 18:43:29', '2019-10-31 18:43:45'),
(7, 'Physics', 'Ph03', '2019-10-31 18:52:41', '2019-10-31 18:52:55'),
(8, 'Chemistry', 'Ch65', '2019-10-31 19:21:46', '2019-10-31 19:22:14');


CREATE TABLE `tblsubjectcombination` (
  `id` int(11) NOT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `Updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
);


INSERT INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`, `Updationdate`) VALUES
(3, 2, 5, 1, '2019-11-04 09:05:40', '2019-11-04 10:00:56'),
(4, 1, 2, 1, '2019-11-04 09:10:10', '2019-11-04 10:05:19'),
(5, 1, 4, 1, '2019-11-04 09:10:15', '2019-11-04 10:05:22'),
(6, 1, 5, 1, '2019-11-04 09:10:20', '2019-11-04 10:06:25'),
(8, 4, 4, 1, '2019-11-04 09:10:25', '2019-11-04 10:07:03'),
(10, 4, 1, 1, '2019-11-04 09:10:35', '2019-11-04 10:20:05'),
(12, 4, 2, 1, '2019-11-04 09:20:01', '2019-11-04 10:20:11'),
(13, 4, 5, 1, '2019-11-04 09:22:05', '2019-11-04 10:22:20'),
(14, 6, 1, 1, '2019-11-04 09:25:09', '2019-11-04 10:44:06'),
(15, 6, 2, 1, '2019-11-04 09:25:12', '2019-11-04 10:44:12'),
(16, 6, 4, 1, '2019-11-04 09:25:16', '2019-11-04 10:44:18'),
(17, 6, 6, 1, '2019-11-04 09:32:18', '2019-11-04 10:44:23'),
(18, 7, 1, 1, '2019-11-04 09:32:25', '2019-11-04 10:53:12'),
(19, 7, 7, 1, '2019-11-04 09:34:19', '2019-11-04 10:53:19'),
(20, 7, 2, 1, '2019-11-04 09:35:28', '2019-11-04 10:53:38'),
(21, 7, 6, 1, '2019-11-04 09:36:30', '2019-11-04 10:53:44'),
(22, 7, 5, 0, '2019-11-04 09:37:32', '2019-11-04 10:53:50'),
(23, 8, 1, 1, '2019-11-04 09:38:33', '2019-11-04 11:10:25'),
(24, 8, 2, 1, '2019-11-04 09:38:34', '2019-11-04 11:10:31'),
(25, 8, 4, 1, '2019-11-04 09:39:36', '2019-11-04 11:10:36'),
(26, 8, 6, 1, '2019-11-04 09:41:10', '2019-11-04 11:10:42'),
(27, 8, 5, 0, '2019-11-04 09:43:11', '2019-11-04 11:10:47');



CREATE TABLE `tblstudents` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(100) DEFAULT NULL,
  `RollId` varchar(100) DEFAULT NULL,
  `StudentEmail` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` varchar(100) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Status` int(1) DEFAULT NULL
);


INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`) VALUES
(1, 'TG Man', '001', 'tg@gmail.com', 'Male', '1995-03-03', 1, '2019-11-04 10:30:57', '2019-11-05 10:05:37', 1),
(2, 'Devo Bero', '002', 'ben@gmail.co', 'Male', '1995-02-02', 4, '2019-11-04 17:18:28', '2019-11-05 10:08:17', 0),
(3, 'Bero Promise', '003', 'pro@gmail.com', 'Male', '1996-08-06', 6, '2019-11-04 17:45:31', '2019-11-05 10:12:02', 1),
(4, 'Bero Hope', '004', 'hope@gmail.com', 'Female', '1996-02-03', 7, '2019-11-04 17:54:58', '2019-11-05 10:15:20', 1),
(5, 'Tobi Ishola', '005', 'ti@gmail.com', 'Male', '1995-02-03', 8, '2019-11-04 18:23:53', '2019-11-05 10:24:15', 1);



CREATE TABLE `tblresult` (
  `id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
);


INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
(2, 1, 1, 2, 100, '2019-11-05 09:10:09', '2019-11-05 12:10:14'),
(3, 1, 1, 1, 80, '2019-11-05 09:18:11', '2019-11-05 12:11:25'),
(4, 1, 1, 5, 78, '2019-11-05 09:24:08', '2019-11-05 12:13:26'),
(5, 1, 1, 4, 60, '2019-11-05 09:30:09', '2019-11-05 12:20:01'),
(6, 2, 4, 2, 90, '2019-11-05 09:40:18', NULL),
(7, 2, 4, 1, 75, '2019-11-05 10:00:03', NULL),
(8, 2, 4, 5, 56, '2019-11-05 10:04:13', '2019-11-05 12:22:42'),
(9, 2, 4, 4, 80, '2019-11-05 10:09:10', '2019-11-05 12:24:09'),
(10, 4, 7, 2, 54, '2019-11-05 10:20:18', '2019-11-05 12:29:10'),
(11, 4, 7, 1, 85, '2019-11-05 10:25:20', NULL),
(12, 4, 7, 5, 55, '2019-11-05 11:10:00', '2019-11-05 12:32:11'),
(13, 4, 7, 7, 65, '2019-11-05 11:15:01', '2019-11-05 12:40:19'),
(14, 5, 8, 2, 75, '2019-11-05 11:20:07', NULL),
(15, 5, 8, 1, 56, '2019-11-05 11:25:00', NULL),
(16, 5, 8, 5, 52, '2019-11-05 11:28:10', NULL),
(17, 5, 8, 4, 80, '2019-11-05 11:30:07', NULL);



ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tblsubjectcombination`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`StudentId`);


ALTER TABLE `tblresult`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `tblclasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


ALTER TABLE `tblsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `tblsubjectcombination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

ALTER TABLE `tblstudents`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE `tblresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
