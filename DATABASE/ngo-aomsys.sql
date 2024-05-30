-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 مايو 2024 الساعة 07:42
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo-aomsys`
--

-- --------------------------------------------------------

--
-- بنية الجدول `ddonations`
--

CREATE TABLE `ddonations` (
  `id` int(11) NOT NULL,
  `The_poor_recipient` varchar(255) NOT NULL,
  `donation_type` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `ddonations`
--

INSERT INTO `ddonations` (`id`, `The_poor_recipient`, `donation_type`, `quantity`) VALUES
(1, 'mostafa', 'Money', 500);

-- --------------------------------------------------------

--
-- بنية الجدول `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `donor_name` varchar(255) NOT NULL,
  `donation_type` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `donations`
--

INSERT INTO `donations` (`id`, `donor_name`, `donation_type`, `quantity`) VALUES
(1, 'taha irshaid', 'Money', 1000);

-- --------------------------------------------------------

--
-- بنية الجدول `donationss`
--

CREATE TABLE `donationss` (
  `id` int(11) NOT NULL,
  `name_of_the_donation_outlet` varchar(255) NOT NULL,
  `donation_type` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `donationss`
--

INSERT INTO `donationss` (`id`, `name_of_the_donation_outlet`, `donation_type`, `quantity`) VALUES
(1, 'mohamad', 'Money', 500);

-- --------------------------------------------------------

--
-- بنية الجدول `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `donors`
--

INSERT INTO `donors` (`id`, `first_name`, `last_name`, `phone`, `phone_number`, `email`, `address`, `city`, `comment`, `password`) VALUES
(1, 'taha', 'irshaid', '+90', '0778580979', 'Taha.irshaid15@gmail.com', 'jordan,amman', 'الزرقاء', '', 'TA233605@'),
(5, 'taha', 'irshaid', '+90', '0778580979', 'Taha.irshaid1@gmail.com', 'jordan,amman', 'الزرقاء', '', 'Ta233605!');

-- --------------------------------------------------------

--
-- بنية الجدول `donors_form`
--

CREATE TABLE `donors_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `donation_type` varchar(100) NOT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `donors_form`
--

INSERT INTO `donors_form` (`id`, `first_name`, `last_name`, `phone`, `email`, `donation_type`, `occupation`, `address`, `notes`) VALUES
(1, 'taha', 'irshaid', '0778580979', 'Taha.irshaid15@gmail.com', 'clothes', 'مبرمج', 'jordan,amman', ''),
(2, 'taha', 'irshaid', '0778580979', 'Taha.irshaid15@gmail.com', 'clothes', 'programming', 'jordan,amman', '');

-- --------------------------------------------------------

--
-- بنية الجدول `needy`
--

CREATE TABLE `needy` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `comment` text DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `needy`
--

INSERT INTO `needy` (`id`, `first_name`, `last_name`, `phone`, `phone_number`, `email`, `address`, `city`, `comment`, `password`, `created_at`) VALUES
(1, 'taha', 'ali', '+90', '0778580979', 'Taha.irshaid15@gmail.com', 'jordan,amman', 'الزرقاء', '', 'TA233605@', '2024-05-19 19:16:00');

-- --------------------------------------------------------

--
-- بنية الجدول `needy_form`
--

CREATE TABLE `needy_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `needy_form`
--

INSERT INTO `needy_form` (`id`, `first_name`, `last_name`, `phone`, `email`, `occupation`, `address`, `notes`, `created_at`) VALUES
(1, 'taha', 'irshaid', '0778580979', 'Taha.irshaid15@gmail.com', 'programming', 'jordan,amman', '', '2024-05-19 19:21:03');

-- --------------------------------------------------------

--
-- بنية الجدول `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `comment` text DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `volunteer`
--

INSERT INTO `volunteer` (`id`, `first_name`, `last_name`, `phone`, `phone_number`, `email`, `address`, `city`, `comment`, `password`) VALUES
(1, 'taha', 'irshaid', '+90', '0778580979', 'Taha.irshaid15@gmail.com', 'jordan,amman', 'الزرقاء', '', 'TA233605@');

-- --------------------------------------------------------

--
-- بنية الجدول `volunteer_form`
--

CREATE TABLE `volunteer_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `volunteer_form`
--

INSERT INTO `volunteer_form` (`id`, `first_name`, `last_name`, `phone`, `email`, `occupation`, `address`, `notes`, `created_at`) VALUES
(1, 'taha', 'irshaid', '0778580979', 'Taha.irshaid15@gmail.com', 'programming', 'jordan,amman', 'tasting', '2024-05-19 19:10:15');

-- --------------------------------------------------------

--
-- بنية الجدول `your_table_name`
--

CREATE TABLE `your_table_name` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `your_table_name`
--

INSERT INTO `your_table_name` (`id`, `name`, `email`, `website`, `subject`, `comment`, `created_at`) VALUES
(1, 'taha irshaid', 'Taha.irshaid15@gmail.com', '', 'السلام عليكم', 'تست', '2024-05-15 12:51:41'),
(2, 'taha irshaid', 'Taha.irshaid15@gmail.com', '', 'السلام عليكم', 'test', '2024-05-15 19:25:48'),
(3, 'taha irshaid', 'Taha.irshaid15@gmail.com', 'http://be-fashionista.com/', 'coder taha', 'test', '2024-05-16 18:30:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ddonations`
--
ALTER TABLE `ddonations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donationss`
--
ALTER TABLE `donationss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `donors_form`
--
ALTER TABLE `donors_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `needy`
--
ALTER TABLE `needy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `needy_form`
--
ALTER TABLE `needy_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `volunteer_form`
--
ALTER TABLE `volunteer_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `your_table_name`
--
ALTER TABLE `your_table_name`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ddonations`
--
ALTER TABLE `ddonations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donationss`
--
ALTER TABLE `donationss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donors_form`
--
ALTER TABLE `donors_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `needy`
--
ALTER TABLE `needy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `needy_form`
--
ALTER TABLE `needy_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteer_form`
--
ALTER TABLE `volunteer_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `your_table_name`
--
ALTER TABLE `your_table_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
