-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2026 at 02:13 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `title`, `image`) VALUES
(1, 'Anggota Divisi Keamanan & Humas - APLIKASI 2025', 'assets/cert1.jpg'),
(2, 'Anggota Konsumsi - Kegiatan TAROT 2024', 'assets/cert2.png'),
(3, 'Anggota Departemen Human Resource Development - Kepengurusan INFORSA 2025', 'assets/cert6.png'),
(4, 'Peserta Study Club - Program Kreativitas Mahasiswa', 'assets/cert3.png'),
(5, 'Peserta Study Club - Soft Skill', 'assets/cert4.png'),
(6, 'Peserta Upgrading - Kepengurusan INFORSA 2025', 'assets/cert5.jpg'),
(7, 'Peserta - Pelatihan Aplikasi Autopsy', 'assets/cert7.jpg'),
(8, 'Peserta - Webinar Persiapan dan Peluang Kerja', 'assets/cert8.jpg'),
(9, 'Peserta - Webinar Cyber Security', 'assets/cert9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` varchar(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `title`, `year`, `description`) VALUES
(1, 'Personal Portfolio Website Development - Mini Project', '2026', 'Designed and developed a responsive portfolio website using HTML, CSS, and Bootstrap, focusing on modern UI design and user-friendly experience'),
(2, 'Anggota Divisi Keamanan & Humas', '2025', 'Responsible for coordinating event security and managing communication during APLIKASI 2025'),
(3, 'Anggota Konsumsi - Kegiatan TAROT', '2024', 'Managed food distribution and ensured smooth logistical support throughout the event'),
(4, 'Peserta Study Club', '2024', 'Participated in academic and soft skill development programs to enhance professional growth'),
(5, 'Departemen Human Resource Development', '2025', 'Contributed to developing programs aimed at improving the quality and performance of organization members');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `description`) VALUES
(1, 'Information Systems student interested in Web Development, UI/ UX, and becoming a Software Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `level`) VALUES
(1, 'HTML', 90),
(2, 'CSS', 85),
(3, 'JavaScript', 75),
(4, 'Bootstrap', 80),
(5, 'Python', 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
