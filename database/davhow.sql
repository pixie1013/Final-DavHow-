-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 12:38 AM
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
-- Database: `davhow`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `comment_text` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `username`, `comment_text`, `timestamp`, `is_admin`) VALUES
(41, 249, 'trixiencl', 'Hello, thank you for welcoming me!', '2024-05-27 21:34:17', 0),
(43, 253, 'art_solutions', 'Please check your email.', '2024-05-28 02:53:54', 1),
(44, 255, 'roslyn_user', 'Wow! So excited.', '2024-05-28 02:54:20', 0),
(45, 253, 'apple_user', 'Hello same concern here.', '2024-05-28 02:55:13', 0),
(46, 250, 'apple_user', 'Hmm, I think you should check the pages.', '2024-05-28 02:55:41', 0),
(49, 260, 'trixiencl', 'Hi', '2024-05-28 06:27:06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `document_list`
--

CREATE TABLE `document_list` (
  `id` int(11) NOT NULL,
  `documents` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document_list`
--

INSERT INTO `document_list` (`id`, `documents`) VALUES
(1, 'Affidavit to Use Surname of Father'),
(2, 'Annual Income Tax for Individuals Earning Solely From Compensation (Including Non-Business and Non-Profession Related)'),
(3, 'Annual Income Tax for Individuals, Estates, and Trusts'),
(4, 'Annual Income Tax for Partnerships and Corporations'),
(5, 'Barangay Certificate'),
(6, 'Business Permit - Issuance'),
(7, 'Business Permit - Renewal'),
(8, 'Certificate of Death - Delayed Registration'),
(9, 'Certificate of Death - Timely Registration'),
(10, 'Certificate of Death (PSA)'),
(11, 'Certificate of Indigency'),
(12, 'Certificate of Live Birth - Delayed Registration'),
(13, 'Certificate of Live Birth - Out of Town Registration'),
(14, 'Certificate of Live Birth - Timely Registration'),
(15, 'Certificate of Live Birth (PSA)'),
(16, 'Certificate of Marriage - Delayed Registration'),
(17, 'Certificate of Marriage (PSA)'),
(18, 'Certificate of Marriage - Timely Registration'),
(19, 'Certificate of No Marriage Record (CENOMAR)'),
(20, 'Certificate of Residency'),
(21, 'Certificate of Tax Exemption'),
(22, 'Community Tax Certificate (CEDULA)'),
(23, 'Full Retirement of Business Permit'),
(24, 'Legal Instruments for Legitimation'),
(25, 'Manual Tax Declaration'),
(26, 'Marriage License'),
(27, 'NBI Clearance'),
(28, 'Occupational Permit'),
(29, 'Police Clearance Certificate'),
(30, 'Tax Clearance Certificate'),
(31, 'Barangay ID'),
(32, 'GSIS Unified Multi-Purpose ID'),
(33, 'Integrated Bar of the Philippines ID (IBP)'),
(34, 'License to Own and Possess Firearms (LTOPF)'),
(35, 'Non-Professional Driver\'s License'),
(36, 'Overseas Workers Welfare Administration Card (OWWA)'),
(37, 'Pantawid Pamilyang Pilipino Program I (4Ps)'),
(38, 'Passport ID'),
(39, 'Persons with Disabilities ID (PWD)'),
(40, 'PhilHealth ID'),
(41, 'Philippine Regulation Commission ID (PRC)'),
(42, 'Philippine System ID'),
(43, 'Postal ID'),
(44, 'Professional Driver\'s License'),
(45, 'Senior Citizen ID'),
(46, 'Solo Parent ID'),
(47, 'Student Driver\'s Permit'),
(48, 'Taxpayer Identification Number ID (TIN)');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `specified_concern` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `comments` text DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `specified_concern`, `username`, `content`, `timestamp`, `time`, `comments`, `is_admin`) VALUES
(249, 'General', 'trixieadmin', 'Welcome to DavHow, @users! This section is intended for your queries that aren\'t available on our website. You may also post your concerns concerning your user experience while browsing our website. Best regards from ART Solutions!', '2024-05-27', '20:33:49', NULL, 1),
(250, 'Professional Driver\'s License', 'trixiencl', 'Hello, I have a concern about my ID. It was already expired and I want to get another one because I need it. However, I do not know where to go. HEHEHE', '2024-05-27', '20:35:02', NULL, 0),
(252, 'Marriage License', 'apple_user', 'What are the specific requirements and steps to obtain a marriage license in the Philippines, and how can I ensure that the license addresses any potential concerns about prior marriages or legal impediments?', '2024-05-28', '10:32:24', 'NULL', 0),
(253, 'Barangay Certificate', 'roslyn_user', 'What specific information should be included in a Barangay Certificate if I need it for a job application to verify my residency and confirm that I have no pending legal issues or derogatory records?', '2024-05-28', '10:33:06', 'NULL', 0),
(255, 'Professional Driver\'s License', 'trixieadmin', 'We are excited to announce the launch of two new features on our platform: the Comment Section and the Discussion Forum. These additions are designed to enhance user interaction and foster a more engaging and collaborative environment. Hello test1', '2024-05-28', '10:47:25', 'NULL', 1),
(260, 'Barangay Certificate', 'trixiencl', 'How do I get this?', '2024-05-28', '14:26:53', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(10) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`, `is_admin`) VALUES
(2, 15318, 'trixiencl', 'admin123', '2024-05-27 08:00:34', 0),
(3, 808331, 'trixieadmin', 'admin123', '2024-05-27 08:40:35', 1),
(15, 26172687, 'john_doe', 'password123', '2024-05-28 02:50:09', 0),
(16, 46959, 'apple_user', 'password123', '2024-05-28 02:50:29', 0),
(17, 3354100, 'roslyn_user', 'password123', '2024-05-28 02:51:13', 0),
(18, 25195, 'art_solutions', 'admin123', '2024-05-28 02:51:41', 1),
(20, 811273, 'stephanie', 'hello123', '2024-05-28 06:27:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `message_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_read` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`message_id`, `first_name`, `last_name`, `email`, `mobile_number`, `title`, `message`, `created_at`, `is_read`) VALUES
(4, 'Trixie', 'Organiza', 'treeckseenicole1013@gmail.com', '09505153734', 'VALID ID CONCERN', 'I would like to ask about the privilege of my barangay ID, is it true that there is only few?', '2024-05-28 03:01:16', 1),
(5, 'Celes', 'Sangria', 'celes13@gmail.com', '0912345698', 'A Heartfelt Thank You to ART Solutions\' Web Developer', 'Dear ART Solutions Web Developer,\r\n\r\nWe want to take a moment to express our sincere gratitude for the incredible work you\'ve done in crafting and maintaining the ART Solutions website. Your dedication to excellence and attention to detail have not gone unnoticed.\r\n\r\nThe ART Solutions website serves as a vital hub for our community, providing valuable resources, information, and support to all our users. Your expertise in web development has transformed our online presence, making it not only visually appealing but also user-friendly and intuitive to navigate.\r\n\r\nYour commitment to ensuring that the website meets the needs of our users, from seamless functionality to beautiful design, has made a significant impact on our organization. Your hard work and talent have played a crucial role in helping us achieve our goals and serve our community better.\r\n\r\nWe are truly grateful for your contributions and the passion you bring to your work every day. Thank you for being an invaluable member of the ART Solutions team and for your dedication to excellence in web development.\r\n\r\nWith heartfelt thanks,\r\n\r\nCeles\r\nDavaoeno\r\nART Solutions User', '2024-05-28 03:02:06', 0),
(6, 'Roslyn', 'Guillermo', 'ruguillermo@up.edu.ph', '09505155735', 'post concern', 'I have a problem with deleting my post. ', '2024-05-28 03:02:58', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `document_list`
--
ALTER TABLE `document_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_user_id` (`user_id`),
  ADD UNIQUE KEY `unique_user_name` (`user_name`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `document_list`
--
ALTER TABLE `document_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
