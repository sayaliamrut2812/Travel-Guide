-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2019 at 05:27 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(4) NOT NULL AUTO_INCREMENT,
  `admin_email` text NOT NULL,
  `admin_pass` text NOT NULL,
  `isactive` tinyint(4) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attractions`
--

CREATE TABLE IF NOT EXISTS `tbl_attractions` (
  `a_id` int(4) NOT NULL AUTO_INCREMENT,
  `city_id` int(4) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_address` text NOT NULL,
  `a_timings` text NOT NULL,
  `a_desc` text NOT NULL,
  `t_id` int(4) NOT NULL,
  `a_image` text NOT NULL,
  PRIMARY KEY (`a_id`),
  KEY `city_id` (`city_id`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_attractions`
--

INSERT INTO `tbl_attractions` (`a_id`, `city_id`, `a_name`, `a_address`, `a_timings`, `a_desc`, `t_id`, `a_image`) VALUES
(1, 1, 'Elephanta Caves', ' Gharapuri, Maharashtra 400094', '9:00 am to 5:30 pm ', 'Elephanta Caves are a UNESCO World Heritage Site and a collection of cave temples predominantly dedicated to the Hindu god Shiva.', 10, 'images/Attractions/Elephanta_caves.jpg'),
(2, 3, 'Pandulena caves', ' Pandav Lene Rd, Buddha Vihar, Pathardi Phata, Nashik, Maharashtra 422010', '8:30 am to 5:30 pm', 'The Nashik Caves, or sometimes Pandavleni Caves, are a group of 24 caves carved between the 1st century BCE and the 3nd century CE', 10, 'images/Attractions/Pandavleni_caves.jpg'),
(3, 2, 'Aga Khan Palace', 'Nagar Road, Samrat Ashok Rd, Pune, Maharashtra 411006', '9:00 am to 5:30 pm', 'The Aga Khan Palace was built by Sultan Muhammed Shah Aga Khan III in Pune, India. Built in 1892, it is one of important landmarks in Indian history', 9, 'images/Attractions/Aga_Khan_Palace.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE IF NOT EXISTS `tbl_city` (
  `city_id` int(4) NOT NULL AUTO_INCREMENT,
  `state_id` int(4) DEFAULT NULL,
  `city_name` varchar(50) NOT NULL,
  `city_image` text,
  `city_desc` text,
  `city_about_us` text NOT NULL,
  `city_history` text NOT NULL,
  PRIMARY KEY (`city_id`),
  KEY `state_id` (`state_id`),
  KEY `state_id_2` (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `state_id`, `city_name`, `city_image`, `city_desc`, `city_about_us`, `city_history`) VALUES
(1, 1, 'Mumbai', 'images/bandra.jpg', 'The city of Dreams', 'Mumbai (formerly known as Bombay) is the city of dreams and the land of opportunities. The capital of Maharashtra, Mumbai is also a vital sea port. It is the financial and industrial capital of India and one of the most densely populated cities in the world. However, there’s another reason why the world knows Mumbai, and that’s because it is the prime hub of the Indian Film Industry - Bollywood. It is not unusual to spot your favorite star walking down the street or enjoying a burger at a local café. More than the promise of seeing a celebrity, it’s the numerous tourist attractions that draw in thousands of visitors from around the world. The most popular of these are the Elephanta Caves and the Gateway of India. There are also gardens, theme parks, and beautiful beaches. Those who like a good bargain can head to Fashion Street or Chor Bazaar for the latest in clothing and accessories. Though Mumbai is famous for its street foods (especially the Vada Pav), it also offers various dining options from quaint coffee shops to award-winning restaurants. Home to people from various cultures, Mumbai is a true representation of the phrase ‘unity in diversity.', 'Human habitation of Mumbai existed since the Stone Age, the Kolis and Aagri(a Marathi fishing community[1]) were the earliest known settlers of the islands. The Maurya Empire gained control of the islands during the 3rd century BCE and transformed it into a centre of Buddhist culture and religion. Later, between the 2nd century BCE and 9th century BCE, the islands came under the control of successive indigenous dynasties: Satavahanas, Abhiras, Vakatakas, Kalachuris, Konkan Mauryas, Chalukyas and Rashtrakutas, before being ruled by the Silharas from 810 to 1260. King Bhimdev established his kingdom in the region in the late 13th century, and brought many settlers to the islands. The Muslim rulers of Gujarat captured the islands in 1348, and they were later governed by the Gujarat Sultanate from 1391 to 1534. The Treaty of Bassein between the Portuguese viceroy Nuno da Cunha and Bahadur Shah of the Gujarat Sultanate placed the islands into Portuguese possession in 1534.'),
(2, 1, 'Pune', 'images/pune.jpg', 'The city where dreams are born', '', ''),
(3, 1, 'Nashik', 'images/nashik.jpg', 'An ancient holy city in the northern region of the Indian state of Maharashtra. Situated on the banks of river Godavari', '', ''),
(6, 1, 'Mahabaleshwar', 'images/mahabaleshwar.jpg', 'It is a hillstation in India''s forested Western Ghats range, south of Mumbai.', '', ''),
(7, 1, 'Kolhapur', 'images/kolhapur.jpg', 'Kolhapur is a city on the banks of the Panchaganga River, in the west Indian state of Maharashtra.', '', ''),
(8, 1, 'Aurangabad', 'images/aurangabad.jpg', 'It is a city in Maharashtra state, in India. It’s known for the 17th-century marble Bibi ka Maqbara shrine, styled on the Taj Mahal.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_college`
--

CREATE TABLE IF NOT EXISTS `tbl_college` (
  `s_id` int(4) NOT NULL AUTO_INCREMENT,
  `city_id` int(4) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_desc` text NOT NULL,
  `s_address` text NOT NULL,
  `s_image` text NOT NULL,
  `s_contact` int(10) NOT NULL,
  `s_website` text NOT NULL,
  PRIMARY KEY (`s_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_college`
--

INSERT INTO `tbl_college` (`s_id`, `city_id`, `s_name`, `s_desc`, `s_address`, `s_image`, `s_contact`, `s_website`) VALUES
(1, 1, 'Dhirubhai Ambani International School', 'The Dhirubhai Ambani International School is a private co-educational LKG-12 day school in Mumbai, Maharashtra, India, built by Reliance Industries, named after the late patriarch of the conglomerate, Dhirubhai Ambani.', ' g block, 46, Trident Road, G Block BKC, Bandra Kurla Complex, Bandra East, Mumbai, Maharashtra 400098', 'images/Schools/ambani.jpg', 204061, 'da-is.org');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE IF NOT EXISTS `tbl_enquiry` (
  `enq_id` int(4) NOT NULL AUTO_INCREMENT,
  `enq_name` varchar(50) NOT NULL,
  `enq_contact` int(10) NOT NULL,
  `enq_email` text NOT NULL,
  `enq_subject` text NOT NULL,
  `enq_details` text NOT NULL,
  PRIMARY KEY (`enq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`enq_id`, `enq_name`, `enq_contact`, `enq_email`, `enq_subject`, `enq_details`) VALUES
(1, 'Sayali Patil', 2147483647, 'patilsayali1505@gmail.com', 'Enquiry', 'Pune city details'),
(2, 'Sayali Amrutkar', 786556789, 'sayali_amrut@gmail.com', 'Enquiry', 'Best places to vist in summer'),
(3, '', 0, '', '', ''),
(4, '', 0, '', '', ''),
(5, '', 0, '', '', ''),
(6, '', 0, '', '', ''),
(7, '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_facts`
--

CREATE TABLE IF NOT EXISTS `tbl_facts` (
  `f_id` int(4) NOT NULL AUTO_INCREMENT,
  `city_id` int(4) NOT NULL,
  `f_best_time` text NOT NULL,
  `f_how_to_reach` text NOT NULL,
  `f_transport` text NOT NULL,
  `f_people` text NOT NULL,
  `f_language` text NOT NULL,
  `f_history` text NOT NULL,
  `f_culture` text NOT NULL,
  `f_weather` text NOT NULL,
  `f_map` text NOT NULL,
  PRIMARY KEY (`f_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `feed_id` int(4) NOT NULL AUTO_INCREMENT,
  `r_id` int(4) NOT NULL,
  `feedback` text NOT NULL,
  PRIMARY KEY (`feed_id`),
  KEY `r_id` (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feed_id`, `r_id`, `feedback`) VALUES
(3, 1, 'It was nice experience while exploring new places'),
(4, 3, 'Nice Experience');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(4) NOT NULL,
  `city_image` text NOT NULL,
  PRIMARY KEY (`g_id`),
  KEY `city_id` (`city_id`),
  KEY `city_id_2` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`g_id`, `city_id`, `city_image`) VALUES
(2, 1, 'images/mumbai.jpg'),
(3, 1, 'images/mumbai/hajiali-1.jpg'),
(4, 1, 'images\\mumbai\\bandra1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hospital`
--

CREATE TABLE IF NOT EXISTS `tbl_hospital` (
  `h_id` int(4) NOT NULL AUTO_INCREMENT,
  `city_id` int(4) NOT NULL,
  `h_name` varchar(50) NOT NULL,
  `h_address` text NOT NULL,
  `h_contact` int(10) NOT NULL,
  `h_desc` text NOT NULL,
  `h_ratings` text NOT NULL,
  `h_timings` text NOT NULL,
  `h_website` text NOT NULL,
  `h_image` text NOT NULL,
  PRIMARY KEY (`h_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_hospital`
--

INSERT INTO `tbl_hospital` (`h_id`, `city_id`, `h_name`, `h_address`, `h_contact`, `h_desc`, `h_ratings`, `h_timings`, `h_website`, `h_image`) VALUES
(1, 1, 'Global Hospital', '35, Dr. E, Dr Ernest Borges Rd, opp. Shirodkar High School, Parel, Mumbai, Maharashtra 400012', 226767, 'Well maintained hospital infrastructure. Clean n hygienic food. Well experienced doctors', '5', 'Open 24 hours', 'www.globalhosp.com', 'images/Hospitals/global-hospital.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `l_id` int(4) NOT NULL AUTO_INCREMENT,
  `l_email` text NOT NULL,
  `l_password` text NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotes`
--

CREATE TABLE IF NOT EXISTS `tbl_quotes` (
  `q_id` int(4) NOT NULL AUTO_INCREMENT,
  `q_name` varchar(50) NOT NULL,
  `q_contact` int(10) NOT NULL,
  `q_email` text NOT NULL,
  `q_city` varchar(50) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `reg_id` int(4) NOT NULL AUTO_INCREMENT,
  `reg_name` varchar(50) NOT NULL,
  `reg_contact` text NOT NULL,
  `reg_email` text NOT NULL,
  `reg_password` text NOT NULL,
  `reg_confirm_pass` text NOT NULL,
  `reg_city` varchar(50) NOT NULL,
  `reg_zipcode` int(6) NOT NULL,
  `reg_state` varchar(50) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`reg_id`, `reg_name`, `reg_contact`, `reg_email`, `reg_password`, `reg_confirm_pass`, `reg_city`, `reg_zipcode`, `reg_state`) VALUES
(1, 'Sayali Patil', '', 'patilsayali1505@gmail.com', '567', '567', '', 0, ''),
(3, 'Sayali Patil', 'NULL', 'patilsayali@gmail.com', 'sayali123', 'sayali123', 'NULL', 0, 'NULL'),
(4, 'Abhilasha Kumari', 'NULL', 'abhilashak@gmail.com', 'abhi12', 'abhi12', 'NULL', 0, 'NULL'),
(5, 'Sayali Amrutkar', 'NULL', 'sayali_amrut@gmail.com', 'sayaliamrut', 'sayaliamrut', 'NULL', 0, 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restaurant`
--

CREATE TABLE IF NOT EXISTS `tbl_restaurant` (
  `r_id` int(4) NOT NULL AUTO_INCREMENT,
  `city_id` int(4) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `r_image` text NOT NULL,
  `r_address` text NOT NULL,
  `r_desc` text NOT NULL,
  `r_timing` text NOT NULL,
  `r_speciality` text NOT NULL,
  `r_ratings` text NOT NULL,
  `r_approxcost` double NOT NULL,
  `r_website` text NOT NULL,
  `r_contact` int(10) NOT NULL,
  PRIMARY KEY (`r_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_restaurant`
--

INSERT INTO `tbl_restaurant` (`r_id`, `city_id`, `r_name`, `r_image`, `r_address`, `r_desc`, `r_timing`, `r_speciality`, `r_ratings`, `r_approxcost`, `r_website`, `r_contact`) VALUES
(1, 1, 'The Taj Mahal Palace', 'images/Hotels/taj_hotel.jpg', 'Apollo Bandar, Colaba, Mumbai, Maharashtra 400001', 'The Taj Mahal Palace opened in Mumbai, then Bombay, in 1903, giving birth to the country’s first harbour landmark. The recently trademarked flagship hotel overlooks the majestic Gateway of India.', '2:00 pm to 12:00 pm', 'India''s First Luxury Hotel', '4.7', 15000, 'tmhbc.bom@tajhotels.com', 912266653),
(2, 1, 'ITC Grand central', 'images/Hotels/itc_hotel.jpg', '287, Dr, Dr Baba Saheb Ambedkar Rd, Parel, Mumbai, Maharashtra 400012', 'This polished hotel with British Colonial-inspired architecture is 3 km from the gold roof at the Hindu Siddhivinayak Temple and 10 km from the ornate Gateway of India triumphal arch.', '2:00 pm to 12:00 pm', 'Popular with business travelers', '4', 15000, 'granditc@gmail.com', 222410);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shopping`
--

CREATE TABLE IF NOT EXISTS `tbl_shopping` (
  `shop_id` int(4) NOT NULL AUTO_INCREMENT,
  `city_id` int(4) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `shop_desc` text NOT NULL,
  `shop_image` text NOT NULL,
  `shop_address` text NOT NULL,
  `shop_timings` text NOT NULL,
  PRIMARY KEY (`shop_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_shopping`
--

INSERT INTO `tbl_shopping` (`shop_id`, `city_id`, `shop_name`, `shop_desc`, `shop_image`, `shop_address`, `shop_timings`) VALUES
(1, 1, 'Phoenix Marketcity', 'Phoenix Marketcity is the largest shopping mall in India, situated in Kurla, Mumbai. It is developed by The Phoenix Mills Co. Ltd. Spread across 4.1 million sq ft the mall includes 2.1 million sq ft of retail space', 'images/Shop/phoenix.jpg', ' LBS Rd, Kamani, Kurla West, Kurla, Mumbai, Maharashtra 400070', '11:00 am to 11:00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE IF NOT EXISTS `tbl_state` (
  `state_id` int(4) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(50) DEFAULT NULL,
  `state_desc` text,
  `state_image` text,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `state_name`, `state_desc`, `state_image`) VALUES
(1, 'Maharashtra', 'yfkjh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type_of_place`
--

CREATE TABLE IF NOT EXISTS `tbl_type_of_place` (
  `t_id` int(4) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(50) NOT NULL,
  `t_image` text NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_type_of_place`
--

INSERT INTO `tbl_type_of_place` (`t_id`, `t_name`, `t_image`) VALUES
(1, 'Religious', 'images/Types/religious-1.jpg'),
(2, 'Heritage', 'images/Types/heritage-1.jpg'),
(3, 'Water Adventure', 'images/Types/wateradventure.jpg'),
(4, 'Nature & Wildlife', 'images/Types/wildlife-1.jpg'),
(5, 'Garden Woods', 'images/Types/gardens.jpg'),
(6, 'View-Point', 'images/Types/veiwpoint-1.jpg'),
(7, 'Amuzement Park', 'images/Types/amusement-1.jpg'),
(8, 'Cultural-Sport Center', 'images/Types/culturalcenter.jpg'),
(9, 'Monuments', 'images/Types/monuments.jpg'),
(10, 'Caves & Landmarks', 'images/Types/caves-1.jpg'),
(11, 'Beaches', 'images/Types/beaches.jpg'),
(12, 'Science Center', 'images/Types/sciencecenter.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_attractions`
--
ALTER TABLE `tbl_attractions`
  ADD CONSTRAINT `city_id` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`),
  ADD CONSTRAINT `tbl_attractions_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `tbl_type_of_place` (`t_id`);

--
-- Constraints for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD CONSTRAINT `tbl_city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `tbl_state` (`state_id`);

--
-- Constraints for table `tbl_college`
--
ALTER TABLE `tbl_college`
  ADD CONSTRAINT `tbl_college_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`);

--
-- Constraints for table `tbl_facts`
--
ALTER TABLE `tbl_facts`
  ADD CONSTRAINT `tbl_facts_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`);

--
-- Constraints for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD CONSTRAINT `tbl_feedback_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `tbl_registration` (`reg_id`);

--
-- Constraints for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD CONSTRAINT `tbl_gallery_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`);

--
-- Constraints for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  ADD CONSTRAINT `tbl_hospital_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`);

--
-- Constraints for table `tbl_restaurant`
--
ALTER TABLE `tbl_restaurant`
  ADD CONSTRAINT `tbl_restaurant_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`);

--
-- Constraints for table `tbl_shopping`
--
ALTER TABLE `tbl_shopping`
  ADD CONSTRAINT `tbl_shopping_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
