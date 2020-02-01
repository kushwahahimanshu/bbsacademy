-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 30, 2020 at 05:37 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutpages`
--

DROP TABLE IF EXISTS `aboutpages`;
CREATE TABLE IF NOT EXISTS `aboutpages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(20) NOT NULL,
  `content` text,
  `video_link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutpages`
--

INSERT INTO `aboutpages` (`id`, `page_name`, `content`, `video_link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'about', '<p>BBS Academy is one of the best Coaching Institutes of North India with its Head Office at Bathinda in Punjab .The institute was founded in the year 2011 with an objective to provide quality education and coaching in a different, innovative and friendly learning environment in the challenging field of Competitive &amp;Govt.Exams preparation specially for Bank Coaching .</p>', 'https://www.youtube.com/watch?v=foW60RSA1dA', 'upload/upload1560756183.jpeg', '2019-06-12 09:33:22', '2019-06-17 01:53:03'),
(2, 'chairman', '<p>We prepare students for various entrance exams . The practice of innovation and excellence continue with BBS Academy where we teach Students with dedication &amp; devotion towards their success in different competitive examinations. We help our students to prepare for various entrance exams like IBPS,SBI, RRB,RBI Bank PO and Clerical Exams, CTET / PTET, Railway,SSC,FCI,PCS, Insurance and Other State Govt. Job Entrance Exams . A part from a well developed library, B.B.S. Academy is also well equipped with the latest Audio &ndash; Visual aids which are employed for training.</p>', 'https://www.youtube.com/watch?v=foW60RSA1dA', 'upload/upload1560754094.jpeg', '2019-06-12 09:33:22', '2019-06-17 01:18:15'),
(3, 'mission & vision', '<p>BBS Academy is one of the best Coaching Institutes of North India with its Head Office at Bathinda in Punjab .The institute was founded in the year 2011 .</p>', 'https://www.youtube.com/watch?v=foW60RSA1dA', 'upload/upload1560754134.jpeg', '2019-06-13 09:40:25', '2019-06-17 01:18:54'),
(4, 'our team', '<h3>with an objective to provide quality education and coaching in a different, innovative and friendly learning environment in the challenging field of Competitive &amp;Govt.Exams preparation specially for Bank Coaching .</h3>', 'https://www.youtube.com/watch?v=foW60RSA1dA', 'upload/upload1560754193.jpeg', '2019-06-13 09:40:25', '2019-06-17 01:19:53'),
(5, 'Media & Events', '<p>The practice of innovation and excellence continue with BBS Academy where we teach Students with dedication &amp; devotion towards their success in different competitive examinations. We help our students to prepare for various entrance exams like IBPS,SBI, RRB,RBI Bank PO and Clerical Exams, CTET / PTET, Railway,SSC,FCI,PCS, Insurance and Other State Govt. Job Entrance Exams . A part from a well developed library, B.B.S. Academy is also well equipped with the latest Audio &ndash; Visual aids which are employed for training.</p>', 'https://www.youtube.com/watch?v=foW60RSA1dA', 'upload/upload1560754359.jpeg', '2019-06-13 09:41:26', '2019-06-17 01:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `apply_frenchisee`
--

DROP TABLE IF EXISTS `apply_frenchisee`;
CREATE TABLE IF NOT EXISTS `apply_frenchisee` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `frtaken` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `people` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `space` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degcolleges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engcolleges` int(11) NOT NULL,
  `schools` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_frenchisee`
--

INSERT INTO `apply_frenchisee` (`id`, `frtaken`, `people`, `name`, `email`, `mobile`, `city`, `state`, `address1`, `address2`, `space`, `area`, `degcolleges`, `engcolleges`, `schools`, `created_at`, `updated_at`) VALUES
(1, 'Individual', '50', 'Himanshu Kushwaha', 'kushwaha@gmail.com', 9865200445, 'Gwalior', '21', 'Village & Post Talgaon', 'Datia', 'Own', '500-1000', '100', 50, '30', '2019-06-28 04:38:49', '2019-06-28 04:38:49'),
(2, 'Group of Individual', '100', 'hk', 'hk@gmail.com', 65312652, 'Gwalior', '21', 'bhind', 'Datia', 'Rented', '1500-2000', '150', 100, '50', '2019-07-07 13:39:21', '2019-07-07 13:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `center_location`
--

DROP TABLE IF EXISTS `center_location`;
CREATE TABLE IF NOT EXISTS `center_location` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `center_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` bigint(30) NOT NULL,
  `phone2` bigint(30) DEFAULT NULL,
  `email_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `center_location`
--

INSERT INTO `center_location` (`id`, `center_name`, `city`, `address`, `phone1`, `phone2`, `email_1`, `email_2`, `region`, `created_at`, `updated_at`) VALUES
(1, 'MARS', 'Noida', 'Main Ajit Road Opposite Street No. 10 Noida', 987456297, 46545109, 'kushwaha@gmail.com', 'hk@gmail.com', 'north', '2019-06-18 05:15:56', '2019-06-18 05:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Himanshu', 'hk@gmail.com', 9874102563, 'water', 'it is the best institute of the campus.', '2019-06-21 12:31:23', '2019-06-21 12:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL,
  `parent_category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `parent_category`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SBI', 'SBI PO', 'course_img/course1564041772.png', '2019-07-25 02:32:52', '2019-07-25 02:32:52'),
(2, 'SBI Clark', 'SBI PO', 'course_img/course1564046016.png', '2019-07-25 03:43:36', '2019-07-25 03:43:36'),
(3, 'IBPS SO', 'IBPS PO', 'course_img/course1564046341.png', '2019-07-25 03:49:01', '2019-07-25 03:49:01'),
(4, 'ALP 1', 'Tier -1', 'course_img/course1564054933.png', '2019-07-25 06:12:13', '2019-07-25 06:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

DROP TABLE IF EXISTS `course_category`;
CREATE TABLE IF NOT EXISTS `course_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_category` varchar(255) NOT NULL,
  `parent_category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`id`, `course_category`, `parent_category`, `created_at`, `updated_at`) VALUES
(1, 'Bank', NULL, '2019-07-23 00:03:49', '2019-07-23 00:03:49'),
(2, 'IBPS', NULL, '2019-07-23 00:04:45', '2019-07-23 00:04:45'),
(3, 'Railways', NULL, '2019-07-23 00:05:57', '2019-07-23 00:05:57'),
(4, 'SSC', NULL, '2019-07-23 00:07:07', '2019-07-23 00:07:07'),
(5, 'TET/CAT', NULL, '2019-07-23 00:07:27', '2019-07-23 00:07:27'),
(6, 'Bank Of Baroda', 'Bank', '2019-07-23 00:08:54', '2019-07-23 00:08:54'),
(7, 'SBI PO', 'Bank', '2019-07-23 00:09:20', '2019-07-23 00:09:20'),
(8, 'IBPS Clerk', 'IBPS', '2019-07-23 00:10:48', '2019-07-23 00:10:48'),
(9, 'IBPS PO', 'IBPS', '2019-07-23 00:11:11', '2019-07-23 00:11:11'),
(10, 'SSC CHSL', 'SSC', '2019-07-23 00:11:57', '2019-07-23 00:11:57'),
(11, 'SSC CGL', 'SSC', '2019-07-23 00:12:14', '2019-07-23 00:12:14'),
(12, 'SSC GD', 'SSC', '2019-07-23 07:22:28', '2019-07-23 07:22:28'),
(13, 'Tier -1', 'Railways', '2019-07-25 00:16:11', '2019-07-25 00:16:11');

-- --------------------------------------------------------

--
-- Table structure for table `course_contents`
--

DROP TABLE IF EXISTS `course_contents`;
CREATE TABLE IF NOT EXISTS `course_contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(255) NOT NULL,
  `tab_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_contents`
--

INSERT INTO `course_contents` (`id`, `course_id`, `tab_name`, `content`, `created_at`, `updated_at`) VALUES
(1, '1', 'indroduction', '<ul>\r\n	<li>State Bank Of India recently announced the multiple post of SBI PO.</li>\r\n	<li>Last date to apply on this post is 10th of September.&nbsp;</li>\r\n</ul>', '2019-07-23 23:54:08', '2019-07-23 23:54:08'),
(2, '1', 'indroduction2', '<p>No extra curriculam required.</p>', '2019-07-24 00:15:37', '2019-07-24 00:15:37'),
(3, '2', 'indroduction', '<p>Its a good opportunity to work with a good institution. For making a career.&nbsp;</p>', '2019-07-24 00:23:34', '2019-07-24 00:23:34'),
(4, '2', 'indroduction2', '<p>The best institute in the world.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2019-07-24 00:24:10', '2019-07-24 00:24:10'),
(5, '3', 'indroduction', '<p>1.The good in all ssc job</p>', '2019-07-24 00:44:27', '2019-07-24 00:44:27'),
(6, '3', 'indroduction2', '<p>ertfghjk fghjkl rtyuiop fghjkl tyuo fghjkl rtyu idfgh&nbsp;</p>', '2019-07-24 00:44:47', '2019-07-24 00:44:47'),
(7, '1', 'indroduction', '<ol>\r\n	<li>The post is release today.</li>\r\n	<li>The good job.</li>\r\n</ol>', '2019-07-25 02:34:17', '2019-07-25 02:34:17'),
(8, '1', 'indroduction2', '<ul>\r\n	<li>1.ghjkl ghjk hjkl ghjkl&nbsp;</li>\r\n	<li>6&nbsp;</li>\r\n	<li>7</li>\r\n</ul>', '2019-07-25 02:35:33', '2019-07-25 02:35:33'),
(9, '2', 'indroduction', '<p>fghjk sdfghjk dfghj erty rdgfh rythgh .</p>\r\n\r\n<p>yertdfgvrtgftf tty fg gg ftrrt tytrefgvb rg&nbsp; vtffgvbv erd&nbsp; dfd</p>', '2019-07-25 03:44:09', '2019-07-25 03:44:09'),
(10, '2', 'indroduction2', '<p>jhjds hsdj fsdhjd hsd hjshaj jhqwert poiuy asdfg ;lkjh zxcvb.,mn&nbsp;</p>', '2019-07-25 03:44:39', '2019-07-25 03:44:39'),
(11, '3', 'indroduction', '<ul>\r\n	<li>ghj yuhj uhj uhhj uj ui h uhy y b uh huhuy hhjbvj</li>\r\n	<li>5632ghhj</li>\r\n	<li>45rtghuygh</li>\r\n	<li>Write The Notes</li>\r\n</ul>', '2019-07-25 03:49:41', '2019-07-25 03:49:41'),
(12, '3', 'indroduction2', '<ol>\r\n	<li>Write The Notes</li>\r\n	<li>ert rtfg sdf uy bhj nb gjyut jh gf rre gh hk j bv df hj j</li>\r\n	<li>tfghv tfgh erdf rf rtfgh h tg g fgh er rtg tyh rfv xdfc</li>\r\n	<li>54132</li>\r\n	<li>erty 789 gh uihj 67&nbsp;</li>\r\n</ol>', '2019-07-25 03:51:30', '2019-07-25 03:51:30'),
(13, '3', 'indroduction3', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"height:200px; width:500px\" summary=\"rtyh tygh tryfgh tygb\">\r\n	<caption>uhjk hjkm jk</caption>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ol>\r\n				<li>hjmnjkbjhgjhghjghkj</li>\r\n			</ol>\r\n			</td>\r\n			<td>ghyugygyughgjhgjhgjhgh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>yhgjygh</td>\r\n			<td>yghjyhgj</td>\r\n		</tr>\r\n		<tr>\r\n			<td>yhgjuyghj</td>\r\n			<td>yhyuhj</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Write The Notes</p>', '2019-07-25 03:53:27', '2019-07-25 03:53:27'),
(14, '4', 'indroduction', '<ul>\r\n	<li>Write The Notes</li>\r\n	<li>web designing course&nbsp;</li>\r\n	<li>jhk hsjkdjf kjhkdjah fiue iuereyiu dfjf sdjhfu nm riuhfuikjdfj</li>\r\n</ul>', '2019-07-25 06:13:19', '2019-07-25 06:13:19'),
(15, '4', 'indroduction2', '<ol>\r\n	<li>fghjk fghj jtfhh ytghv ytyfgvcx rdtfgh trfy hg</li>\r\n	<li>\r\n	<pre>\r\nfghjkl rtyu dfgh wer sdfgh fghj</pre>\r\n	</li>\r\n	<li>Write The Notes</li>\r\n</ol>', '2019-07-25 06:13:59', '2019-07-25 06:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

DROP TABLE IF EXISTS `ebooks`;
CREATE TABLE IF NOT EXISTS `ebooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `demo` varchar(255) NOT NULL,
  `full` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` (`id`, `title`, `author`, `price`, `description`, `image`, `category`, `demo`, `full`, `created_at`, `updated_at`) VALUES
(1, 'Tense', 'hk', '100', '<p>uhuokf hhdskjhf jhkdjhskj uiewfj hkjdhkj hkjdfhe jkhkh uefjk hiuen hkjhh</p>', 'image1572862620.jpeg', 'English', 'demo1572862621.pdf', 'full1572862621.pdf', '2019-11-04 04:47:01', '2019-11-04 04:47:01'),
(2, 'Alankar', 'rk', '200', '<p>hjhfkj hdjkhfkj kjhdfskj kjdskjfhjf</p>', 'image1572864027.jpeg', 'Hindi', 'demo1572864027.pdf', 'full1572864027.pdf', '2019-11-04 05:10:27', '2019-11-04 05:10:27'),
(3, 'voice', 'rohit', '500', '<p>hasdkjh jshddhf hsdfh sd hkjsdhfjkdkf</p>', 'image1572864190.jpeg', 'English', 'demo1572864190.pdf', 'full1572864190.pdf', '2019-11-04 05:13:10', '2019-11-04 05:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `ebook_categories`
--

DROP TABLE IF EXISTS `ebook_categories`;
CREATE TABLE IF NOT EXISTS `ebook_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebook_categories`
--

INSERT INTO `ebook_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'English', '2019-11-04 03:33:49', '2019-11-04 03:33:49'),
(4, 'Hindi', '2019-11-07 00:33:59', '2019-11-07 00:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `ebook_orders`
--

DROP TABLE IF EXISTS `ebook_orders`;
CREATE TABLE IF NOT EXISTS `ebook_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ebook_id` varchar(100) NOT NULL,
  `payment_req_id` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `event_type` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_type`, `image`, `created_at`, `updated_at`) VALUES
(1, 'academic', 'upload/events1560886190.jpeg', '2019-06-18 19:29:50', '2019-06-18 19:29:50'),
(2, 'non-academic', 'upload/events1560886993.jpeg', '2019-06-18 19:43:13', '2019-06-18 19:43:13'),
(3, 'press', 'upload/events1560887408.jpeg', '2019-06-18 19:50:08', '2019-06-18 19:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `franchise`
--

DROP TABLE IF EXISTS `franchise`;
CREATE TABLE IF NOT EXISTS `franchise` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `franchise`
--

INSERT INTO `franchise` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Introduction', '<p>IBPS is one of the leading banking institutions in India and Getting a job in SBI Banking department is always special, So Just apply and get ready for the exams.The bank has 2000 regular vacancies and 118 vacancies for differently-abled people.The bank will have an online preliminary examination followed by a main examination,&nbsp;group exercises and interview. The prelims will be held on July 1, 7 and 8.The final results will be announced on November 1, 2018.&nbsp;The total compensation per annum will be a minimum of Rs 8.20 lakh and maximum of Rs 13.08 lakh depending on place of posting and other factors.</p>\r\n\r\n\r\n', '2019-06-19 02:01:22', '2019-06-19 02:01:22'),
(2, 'Introduction one', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>', '2019-06-19 03:33:05', '2019-06-19 03:33:05'),
(3, 'Introduction two', '<p>It has survived not only five&nbsp;<strong>centuries</strong>, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum&nbsp;passages, and more recently with desktop publishing software like Aldus PageMaker including versions of&nbsp;Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2019-06-19 04:57:09', '2019-06-19 04:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

DROP TABLE IF EXISTS `job_post`;
CREATE TABLE IF NOT EXISTS `job_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(35) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`id`, `post_name`, `created_at`, `updated_at`) VALUES
(1, 'Administration', '2019-06-18 06:37:08', NULL),
(2, 'Counsellor', '2019-06-18 06:37:08', NULL),
(4, 'Front Desk', '2019-06-18 02:31:18', '2019-06-18 02:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2019_06_05_090637_create_settings_table', 1),
(11, '2019_06_05_093649_create_sliders_table', 1),
(12, '2019_06_13_124112_create_users_update_table', 2),
(14, '2019_06_16_171704_create_news_table', 3),
(15, '2019_06_17_183633_create_resumes_table', 4),
(17, '2019_06_18_101728_create_center_locations_table', 5),
(18, '2019_06_19_050112_create_center_teams_table', 6),
(21, '2019_06_19_124442_create_apply_frenchisee_table', 9),
(20, '2014_10_12_100000_create_password_resets_table', 8),
(22, '2019_06_28_074448_create_std_registrations_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `type`, `content`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'An Interactive session with NDA 02/2018 selected students &quot;जानें जीवन की वास्तविक गंभीरता को &quot; with Saurabh Sir\r\n', 'https://www.bbsacademy.com/', 1, '2019-06-17 04:04:39', '2019-06-17 06:51:37'),
(2, '2', 'SBI PO 2019 New Batch Starts From 15th APRIL 2019', 'https://www.bbsacademy.com/', 1, '2019-06-17 04:06:06', '2019-06-24 03:55:31'),
(3, '1', 'Current Affairs Session is going to be held on Sunday, 2 Dec 2019 at 2:00 PM', '#', 1, '2019-06-17 04:12:50', '2019-06-17 07:03:43'),
(4, '1', 'SBI PO 2019 New Batch Starts From 15th APRIL 2019', 'https://www.bbsacademy.com/', 0, '2019-06-17 05:00:12', '2019-06-27 13:44:25'),
(5, '2', 'SBI PO 2019 New Batch Starts From 15th APRIL 2019', 'https://www.bbsacademy.com/', 1, '2019-06-17 05:01:49', '2019-06-24 03:55:28'),
(6, '2', 'Current Affairs Session is going to be held on Sunday, 2 Dec 2019 at 2:00 PM&nbsp;', 'https://www.bbsacademy.com/', NULL, '2019-06-24 03:53:32', '2019-06-24 03:53:32'),
(7, '3', 'SSC 2019 New Batch Starts From 15th july 2019', 'https://www.google.com', NULL, '2019-06-24 04:31:02', '2019-06-24 04:31:02'),
(9, '1', 'SBI CLERK NOTIFICATION - 2019 | 8653 VACANCIES OUT', 'www.google.com', 0, '2019-06-25 04:31:21', '2019-06-25 04:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(245) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('hk@gmail.com', '$2y$10$NzDLTQj/nMRNxrsDl/jgd.0aYRnN/vzZk6vQaD9r4K/HwCCZOoAsy', '2019-06-26 23:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

DROP TABLE IF EXISTS `resume`;
CREATE TABLE IF NOT EXISTS `resume` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `category`, `resume`, `created_at`, `updated_at`) VALUES
(1, '5', 'upload/career1560837862.jpeg', '2019-06-18 00:34:22', '2019-06-18 00:34:22'),
(2, '1', 'upload/career1560838414.pdf', '2019-06-18 00:43:34', '2019-06-18 00:43:34'),
(3, '2', 'upload/career1560838950.docx', '2019-06-18 00:52:30', '2019-06-18 00:52:30');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'phone1', '98150-03663', NULL, '2019-06-21 05:09:50'),
(2, 'phone2', '98889-20740', NULL, '2019-06-21 05:09:50'),
(3, 'email', 'info@bbsacademy.com', NULL, '2019-06-21 05:09:50'),
(4, 'address1', 'Main Ajit Road Opposite  Street No. 18 BATHINDA', '2019-06-20 12:56:18', '2019-06-21 05:09:50'),
(5, 'address2', 'In front of New Bus Stand,  Gali No. 1 Kotkapura', '2019-06-20 12:58:04', '2019-06-21 05:09:50'),
(6, 'description', 'BBS Academy is the best institute in the city. Any student are simply learn and clear any government examination . So Students are requested To registered itself .', '2019-06-20 12:58:04', '2019-06-21 05:09:50'),
(7, 'facebook-link', 'https://www.facebook.com/', '2019-06-20 13:00:56', '2019-06-21 05:09:50'),
(8, 'twitter', 'https://twitter.com/login?lang=en', '2019-06-20 13:00:56', '2019-06-21 05:09:50'),
(9, 'instagram', 'https://www.instagram.com/?hl=en', '2019-06-20 13:02:38', '2019-06-21 05:09:50'),
(10, 'youtube', 'https://www.youtube.com/', '2019-06-20 13:02:38', '2019-06-21 05:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_clr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle_clr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `btn_txt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_link` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'home',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `subtitle`, `title_clr`, `subtitle_clr`, `order_no`, `btn_txt`, `btn_link`, `image`, `page`, `created_at`, `updated_at`) VALUES
(1, 'Welcome To BBS Academy', 'We prepair condidates for comptetitive entrance examination.', '#ff8000', '#00ff40', '0', 'Start a Cource', 'https://www.bbsacademy.com/', 'splash_logo-1.jpg', 'home', '2019-06-10 04:35:40', '2019-06-10 04:35:40'),
(2, 'Do You Want To Achive 100%', 'We prepair condidates for comptetitive entrance examination.', '#fdd617', '#f5163e', '1', 'Start a Cource', 'https://www.bbsacademy.com/', 'splash_logo-2 (1).jpg', 'home', '2019-06-10 04:40:35', '2019-06-10 04:40:35'),
(3, 'Welcome To BBS Academy', 'We prepair condidates for comptetitive entrance examination.', '#000080', '#e20b6c', '2', 'Start a Cource', 'https://www.bbsacademy.com/', '1-3.jpg', 'home', '2019-06-15 12:55:33', '2019-06-15 12:55:33'),
(4, 'Do You Want To Achive 100%', 'We prepair condidates for comptetitive entrance examination.', '#400040', '#008080', '3', 'Start a Cource', 'https://www.bbsacademy.com/', '4-1.jpg', 'home', '2019-06-16 03:31:52', '2019-06-16 03:31:52'),
(9, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'upload/frachise1560939945.jpeg', 'franchise', '2019-06-19 04:55:45', '2019-06-19 04:55:45'),
(8, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'upload/frachise1560939921.jpeg', 'franchise', '2019-06-19 04:55:21', '2019-06-19 04:55:21');

-- --------------------------------------------------------

--
-- Table structure for table `std_registration`
--

DROP TABLE IF EXISTS `std_registration`;
CREATE TABLE IF NOT EXISTS `std_registration` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `std_registration`
--

INSERT INTO `std_registration` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `confirm_pass`, `created_at`, `updated_at`) VALUES
(1, 'Himanshu', 'Kushwaha', 'hk@gmail.com', '9874563210', '123456', '123456', '2019-06-28 05:00:01', '2019-06-28 05:00:01'),
(2, 'ritik', 'bansal', 'rk@gmail.com', '3210456', '1010', '1010', '2019-06-28 05:12:21', '2019-06-28 05:12:21'),
(3, 'ritik', 'bansal', 'rk@gmail.com', '3210456', '1010', '1010', '2019-06-28 05:12:48', '2019-06-28 05:12:48'),
(4, 'rohit', 'kumar', 'rkk@gmail.com', '985014', '123654', '123654', '2019-06-28 05:15:20', '2019-06-28 05:15:20'),
(5, 'Himanshu', 'Kushwaha', 'himanshu0025kushwaha@gmail.com', '09074200445', '123456', '123456', '2019-06-28 05:45:03', '2019-06-28 05:45:03'),
(6, 'H', 'Kushwaha', 'HK@gmail.com', '8778778', '123456', '123456', '2019-07-07 13:43:05', '2019-07-07 13:43:05');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Swati Kumari', 'Commerce HOD', 'upload/events1560923330.jpeg', '2019-06-19 00:18:50', '2019-06-19 00:18:50'),
(3, 'Himanshu', 'IT HOD', 'upload/events1560923369.jpeg', '2019-06-19 00:19:29', '2019-06-19 00:19:29'),
(4, 'Raveena', 'CSE HOD', 'upload/events1560923412.jpeg', '2019-06-19 00:20:13', '2019-06-19 00:20:13'),
(5, 'Ritik', 'MECH HOD', 'upload/events1560923449.jpeg', '2019-06-19 00:20:50', '2019-06-19 00:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rating` varchar(40) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `content`, `name`, `image`, `rating`, `created_at`, `updated_at`) VALUES
(8, '\r\n<h3>A platform where any one can excel. Can&#39;t wait till the launch. Pretty excited</h3>\r\n\r\n\r\n', 'Himanshu Kushwaha', 'upload/testimonial1560609302.jpeg', '5', '2019-06-15 14:35:02', '2019-06-15 14:35:02'),
(5, '<p>good good good</p>', 'goodman', 'upload/testimonial1560512259.jpeg', '5', '2019-06-14 11:37:39', '2019-06-14 11:37:39'),
(6, '<p>Nice nice nice</p>', 'niceman', 'upload/testimonial1560512502.jpeg', '4', '2019-06-14 11:41:42', '2019-06-14 11:41:42');

-- --------------------------------------------------------

--
-- Table structure for table `toppers`
--

DROP TABLE IF EXISTS `toppers`;
CREATE TABLE IF NOT EXISTS `toppers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `course` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toppers`
--

INSERT INTO `toppers` (`id`, `name`, `course`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Himanshu', 'IBPS Course', 'upload/upload1560666321.jpeg', '2019-06-16 06:25:21', '2019-06-16 06:25:21'),
(4, 'Ram', 'SSC', 'upload/upload1560673424.jpeg', '2019-06-16 08:23:44', '2019-06-16 08:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

DROP TABLE IF EXISTS `upload_files`;
CREATE TABLE IF NOT EXISTS `upload_files` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `f_type` varchar(40) NOT NULL,
  `title` varchar(100) NOT NULL,
  `files` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_files`
--

INSERT INTO `upload_files` (`id`, `f_type`, `title`, `files`, `created_at`, `updated_at`) VALUES
(1, 'monthly', 'G.K. Capsule', 'upload/download1561109989.jpeg', '2019-06-21 04:09:49', '2019-06-21 04:09:49'),
(2, 'newslatter', 'Bank PO Capsule', 'upload/download1561110125.pdf', '2019-06-21 04:12:05', '2019-06-21 04:12:05'),
(3, 'monthly', 'G.A CAPSULE - IBPS PO MAIN EXAM-2019', 'upload/download1561114661.pdf', '2019-06-21 05:27:41', '2019-06-21 05:27:41'),
(4, 'monthly', 'IBPS RRB Main Exam : General Awareness Capsule', 'upload/download1561114743.pdf', '2019-06-21 05:29:03', '2019-06-21 05:29:03'),
(5, 'examcracker', 'COMPUTER CAPSULE- IBPS PO, RRB OFFICER & ASSISTANT Mains - 2019', 'upload/download1561117332.pdf', '2019-06-21 06:12:12', '2019-06-21 06:12:12'),
(6, 'mock', 'COMPUTER CAPSULE- IBPS PO, RRB OFFICER & ASSISTANT', 'upload/download1561117565.pdf', '2019-06-21 06:16:05', '2019-06-21 06:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Himanshu Kushwaha', 0, 'admin@admin.com', '$2y$10$D6FSojkA8EZSIbLkBkFdBef9FwTk7x5Rm52iCA8lWCt63e/7ni2iW', 'pognARPWt7wLX9wTZSZS8nKf7xXgBvut7peYTwCsRJ2itRPyT8opPgnmyTSf', '2019-06-28 04:10:49', '2019-06-28 04:10:49'),
(2, 'ritik', 2, 'rk@gmail.com', '$2y$10$utYvCMRqIpWybSuV2lqqx.mVnFHpqx6iih1QUf/2VIWdf3GkDVtu2', 'lhokAFNBoD3XgHLRxN5jY7aO7vuouMG4xKa2isuvF8E7uHIQ3FzpGjTDh01B', '2019-06-28 05:12:48', '2019-06-28 05:12:48'),
(3, 'rohit', 2, 'rkk@gmail.com', '$2y$10$ib/AjFROosV12z7foTYg8.CPfN6qT4SSXXgqSZRDaqbAGIPJdy8vS', NULL, '2019-06-28 05:15:20', '2019-06-28 05:15:20'),
(4, 'Himanshu', 2, 'himanshu0025kushwaha@gmail.com', '$2y$10$/slhSv7SPB.KCAWV61v.lOOdRVK/8EbDjOyq2S2P..Wmvqo6l9H0u', NULL, '2019-06-28 05:45:03', '2019-06-28 05:45:03'),
(5, 'H', 2, 'HK@gmail.com', '$2y$10$f6ROocFvbpNMz8cxBMAu7e1Uet/u5TxwkotsuXpCJq3auYDe3V7La', NULL, '2019-07-07 13:43:05', '2019-07-07 13:43:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_update`
--

DROP TABLE IF EXISTS `user_update`;
CREATE TABLE IF NOT EXISTS `user_update` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_update`
--

INSERT INTO `user_update` (`id`, `teacher`, `result`, `course`, `user`, `created_at`, `updated_at`) VALUES
(1, '80', '60', '40', '500', '2019-06-13 07:32:23', '2019-06-16 03:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `order_no` int(11) NOT NULL,
  `demo` int(11) NOT NULL DEFAULT '0',
  `course` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `video`, `order_no`, `demo`, `course`, `category`, `created_at`, `updated_at`) VALUES
(2, 'basic video', 'videos/video1573038302.mp4', 1, 0, 1, NULL, '2019-11-06 05:35:02', '2019-11-06 05:35:02'),
(3, 'video2', 'videos/video1573038483.mp4', 1, 1, 1, 'Bank PO', '2019-11-06 05:38:03', '2019-11-06 05:38:03'),
(4, 'video', 'videos/video1573038748.mp4', 2, 0, 1, 'Bank PO', '2019-11-06 05:42:28', '2019-11-06 05:42:28'),
(5, 'video', 'videos/video1573038867.mp4', 1, 0, 3, 'Geomatry', '2019-11-06 05:44:27', '2019-11-06 05:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `video_courses`
--

DROP TABLE IF EXISTS `video_courses`;
CREATE TABLE IF NOT EXISTS `video_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `topic_description` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_courses`
--

INSERT INTO `video_courses` (`id`, `name`, `author`, `price`, `cover`, `topic_description`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Current Affairs November', 'Himanshu', '1100', 'cover1573103999.jpeg', NULL, 'Bank PO', '2019-11-06 01:43:33', '2019-11-06 01:43:33'),
(3, 'Geomatry', 'Abhishek', '100', 'cover1573103999.jpeg', NULL, 'IBPS', '2019-11-06 02:22:50', '2019-11-06 02:22:50'),
(4, 'trignomatry', 'ubed', '2500', 'cover1573103999.jpeg', 'this is about the topic which is include in the video.', 'IBPS', '2019-11-06 07:07:26', '2019-11-06 07:07:26'),
(5, 'finance', 'Rohit', '10', 'cover1573103999.jpeg', 'this is about the topic which is describe in the video tutorials.', 'Bank PO', '2019-11-06 23:31:49', '2019-11-06 23:31:49'),
(6, 'Line', 'Ritik', '150', 'cover1573103999.jpeg', 'this is about the topic which is describe in the video tutorials.', 'Math', '2019-11-06 23:49:59', '2019-11-06 23:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `video_course_categories`
--

DROP TABLE IF EXISTS `video_course_categories`;
CREATE TABLE IF NOT EXISTS `video_course_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_course_categories`
--

INSERT INTO `video_course_categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Bank PO', '<p>hjkhkj jhkjf hjhkjh jkj kjjhjk hjkhdskj hdjkflj</p>', '2019-11-06 00:54:53', '2019-11-06 00:54:53'),
(3, 'IBPS', '<p>jkdf hdskjfh hdskjhf kjshdj fjhsdk hfsdjdhfk hkjshdfkjh hsdjkfhkjhsdjfh</p>', '2019-11-06 00:59:44', '2019-11-06 00:59:44'),
(4, 'Math', '<p>this is about the course.</p>', '2019-11-06 07:05:23', '2019-11-06 07:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `video_orders`
--

DROP TABLE IF EXISTS `video_orders`;
CREATE TABLE IF NOT EXISTS `video_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `payment_request_id` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
