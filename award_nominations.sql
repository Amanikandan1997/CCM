-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2024 at 04:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `award_nominations`
--

-- --------------------------------------------------------

--
-- Table structure for table `nominations`
--

CREATE TABLE `nominations` (
  `id` int(11) NOT NULL,
  `nominee_for` varchar(50) NOT NULL,
  `your_name` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `nominee_name` varchar(100) NOT NULL,
  `nominee_native` varchar(50) NOT NULL,
  `nominee_address` text NOT NULL,
  `nominee_whatsapp` varchar(20) NOT NULL,
  `nominee_alternate` varchar(20) DEFAULT NULL,
  `nominee_youtube` varchar(100) NOT NULL,
  `nominee_instagram_id` varchar(100) NOT NULL,
  `nominee_other_platform_id` text DEFAULT NULL,
  `instagram_url` varchar(255) NOT NULL,
  `youtube_url` varchar(255) NOT NULL,
  `other_platform_url` varchar(255) DEFAULT NULL,
  `award_category` varchar(100) NOT NULL,
  `reason_for_nomination` text NOT NULL,
  `achievements` text NOT NULL,
  `nominee_image` varchar(255) NOT NULL,
  `recent_video_link` varchar(255) NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nominations`
--

INSERT INTO `nominations` (`id`, `nominee_for`, `your_name`, `phone_number`, `nominee_name`, `nominee_native`, `nominee_address`, `nominee_whatsapp`, `nominee_alternate`, `nominee_youtube`, `nominee_instagram_id`, `nominee_other_platform_id`, `instagram_url`, `youtube_url`, `other_platform_url`, `award_category`, `reason_for_nomination`, `achievements`, `nominee_image`, `recent_video_link`, `submission_date`) VALUES
(14, 'Someone else', 'Manikandan', '123456789', 'Manikandan A', 'Kanniyakumari', 'UK', '22424035', '3434565', 'mk channel', 'mkinsta', 'other digital', 'http://insta/ccm-main/Register.php', 'http://youtube/ccm-main/Register.php', 'http://other/ccm-main/Register.php', 'Cartoon', 'reason', 'contribu', '', 'http://lrecentt/ccm-main/Register.php', '2024-11-14 14:14:53'),
(15, 'Someone else', 'Manikandan', '9345943063', 'Manikandan Arunachalam', 'Kanniyakumari', 'Marthandam', '9835934556', '4456547878', 'Manikandan U K I', 'manikandan_uki', 'mk', 'https://www.instagram.com/manikandan_uki/?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D', 'https://www.youtube.com/@manikandanuki', 'https://www.youtube.com/@manikandanuki', 'Cartoon', 'trail', 'no', '', 'https://www.youtube.com/@manikandanuki', '2024-11-14 14:18:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nominations`
--
ALTER TABLE `nominations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nominations`
--
ALTER TABLE `nominations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
