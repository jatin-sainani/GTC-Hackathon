-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 01:40 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `git hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company` text NOT NULL,
  `domain` text NOT NULL,
  `desshort` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companymain`
--

CREATE TABLE `companymain` (
  `name` text NOT NULL,
  `domain` text NOT NULL,
  `desshort` text NOT NULL,
  `deslarge` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ongoing`
--

CREATE TABLE `ongoing` (
  `name` text NOT NULL,
  `domain` text NOT NULL,
  `desshort` text NOT NULL,
  `deslarge` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongoing`
--

INSERT INTO `ongoing` (`name`, `domain`, `desshort`, `deslarge`) VALUES
('Techideate by Anshuman Kalla', 'Web Development', 'Website on php for tech fest', 'Techideate is the annual science and technology festival of Manipal University Jaipur. It also refers to the independent body of students who organize this event along with many other social initiatives and outreach programs around the year. Techideate is known for hosting a variety of events that include competitions, exhibitions, lectures as well as workshops. Started in 1998 with the aim of providing a platform for the Indian student community to develop and showcase their technical prowess, it has now grown into Asia\'s Largest Science and Technology Festival with a footfall of 1.75 lakhs in its latest edition. The activities culminate in a grand three-day festival event in the campus of IIT Bombay which attracts people from all over the World, including students, academia, corporates and the general public.'),
('Marksheet Scanner by Ankit Sharma', 'Internet of Things', 'Uploads the marks of exams directly in one image', 'This is the first step. After you’ve scanned the paper documents, you have their electronic versions existing as a non-text format. Optical character recognition (OCR) – is a method of transforming a scanned image into text. Once the paper has been scanned, an electronic document is created, but the computer interprets the text as a number of white and black dots. In order to make the computer interpret the text from a scanned document as text, the OCR software is used. By examining the lines and curves of an image, it attempts to determine whether a combination is a particular sign, or a letter:'),
('Infogit by Aashis Kumar', 'App Development', 'App which gives all the information on GIT', 'This is the source for tnetstrings.info, a specification for \"tagged netstrings\". It\'s a copy of the spec that was originally at tnetstrings.org, which has since disappeared. The original domain has been squatted on by some company that apparently specializes in such idiocy, so I opted to copy the latest version of the original spec I could find (thanks Internet Archive!) and publish it under a new domain.As the site says, most of the text was written by Zed A. Shaw; I just fixed some mismatched tags, and added some CSS and the links to known implementations. Thanks to him for inventing the protocol in the first place and for this spec.'),
('DroneAid by Pratik Jain', 'Internet of Things', 'Research project for Disaster Management', 'Drone Aid is an innovative service which brings drones to our everyday life. If you suffer from allergies, asthma or you just had an accident, such as a burn, and you don\'t own the medication, don\'t worry. Just with the touch of a button, a first aid kit for your emergency \"lands\" at the exact spot where you are. Your accurate position is being tracked by GPS, and our app informs you about the arrival time of the drone, as well as where it lands, in case you are in indoors and the drone can\'t reach the place.'),
('Smart Energy Rooms by Pratik Jain', 'Internet of Things', 'Research project for energy reduction', 'Distech Controls’ Smart Room Control Solution is a unified system for the control of HVAC room terminal equipment, lighting, and shades/sunblind. This solution allows you to achieve the highest levels of comfort for occupants while increasing operating cost savings, from installation time and wiring/material requirements to energy consumption. It is a unique, modular solution designed for local or room applications, such as offices, open spaces, patient rooms, dorms and military housing.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `skills` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
