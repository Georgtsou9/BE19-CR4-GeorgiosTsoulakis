-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 10:58 AM
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
-- Database: `be19_cr4_georgiostsoulakis_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be19_cr4_georgiostsoulakis_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be19_cr4_georgiostsoulakis_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(200) NOT NULL,
  `title` varchar(300) NOT NULL,
  `image` varchar(500) NOT NULL,
  `isbn` bigint(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `author_fn` varchar(100) NOT NULL,
  `author_ln` varchar(100) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `publisher_adress` varchar(100) NOT NULL,
  `publish_date` date NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `isbn`, `description`, `author_fn`, `author_ln`, `publisher_name`, `publisher_adress`, `publish_date`, `type`) VALUES
(13, 'Harry Potter and the Philosophers Stone', '64ba94d2dba7b.jpg', 9780545069670, 'The book is about 11 year old Harry Potter, who receives a letter saying that he is invited to attend Hogwarts, school of witchcraft and wizardry. He then learns that a powerful wizard and his minions are after the sorcerer s stone that will make this evil wizard immortal and undefeatable.', 'Joanna', 'Rowlling', 'Bloomsbury', '50 Bedford Square, London WC1B', '1997-06-26', 'Book'),
(14, 'Pride and Prejudice', '64ba9656c3b5c.jpg', 9783988288882, 'Pride and Prejudice follows the turbulent relationship between Elizabeth Bennet, the daughter of a country gentleman, and Fitzwilliam Darcy, a rich aristocratic landowner. They must overcome the titular sins of pride and prejudice in order to fall in love and marry.', 'Jane', 'Austen', 'T. Egerton, Whitehall', 'none', '1813-01-28', 'Book'),
(15, 'Eight', '64ba98301dcce.jpg', 9780345351371, 'It is an adventure/quest novel in which the heroine, computer whiz Catherine Velis, must enter into a cryptic world of danger and conspiracy in order to recover the pieces of a legendary chess set once owned by Charlemagne and buried for one thousand years.', 'Katherine', 'Nevil', 'Ballantine Books', '1745 Broadway, New York', '1988-12-27', 'Book'),
(16, 'Hercules Disney', '64ba9a528fcdb.jpeg', 9780717287857, 'Featuring the voices of Tate Donovan, Danny DeVito, James Woods, and Susan Egan, the film follows the titular Hercules, a demigod with super-strength raised among mortals, who must learn to become a true hero in order to earn back his godhood and place in Mount Olympus, while his evil uncle Hades plots his downfall.', 'Ron ', 'Clements ', 'Walt Disney Pictures', '500 South Buena Vista Street, Burbank', '1997-06-13', 'DVD'),
(17, 'The Lion King', '64ba9b8956968.jpeg', 1570820872, 'Disney s The Lion King is about a young lion prince named Simba who, after losing his father in a staged accident which he feels he caused, must face his fear of responsibility and take his rightful place on the throne.', 'Irene ', 'Mecchi', 'Walt Disney Pictures', '500 South Buena Vista Street, Burbank', '1994-06-15', 'DVD'),
(18, 'Harry Potter and the Order of the Phoenix', '64ba9cac2e164.jpg', 9780439358064, 'It follows Harry Potter s struggles through his fifth year at Hogwarts School of Witchcraft and Wizardry, including the surreptitious return of the antagonist Lord Voldemort, O.W.L. exams, and an obstructive Ministry of Magic.', 'Joanna', 'Rowlling', 'Bloomsbury', '50 Bedford Square, London WC1B', '2007-07-11', 'DVD'),
(19, 'Spiderman', '64ba9ed23fe3a.jpeg', 345450050, 'After being bitten by a genetically-modified spider, a shy teenager gains spider-like abilities that he uses to fight injustice as a masked superhero and face a vengeful enemy.', 'David ', 'Koepp', 'Columbia Pictures', '10202 West Washington Boulevard, Culver City, California, U.S.', '2002-04-29', 'DVD'),
(20, 'Abba Gold: Greatest Hits', '64baa11b15f82.jpg', 777499003811, 'Gold (Greatest Hits) CD Polydor, 517 007-2, 1992, 19 Track', 'Abba', 'Abba', 'PolyGram Records', 'none', '1992-09-21', 'CD'),
(21, 'Essential Mozart', '64baa2ba0b2b6.jpeg', 1673935, 'Discover our selection of the best Mozart works including opera, symphony, concerto, and sonata masterpieces.', 'Wolfgang Amadeus', 'Mozart', 'Presto Music', '23-25 Regent Grove, Leamington Spa CV32 4NN, UK', '2007-12-12', 'CD'),
(22, 'Nirvana in Utero', '64baa4ca70c1e.jpg', 826417760, 'In Utero is the third and final studio album by the American rock band Nirvana.', 'Nirvana', 'Nirvana', 'DGC Records', 'Santa Monica, California', '1993-09-21', 'CD'),
(23, 'Benny Goodman - Sing Sing Sing', '64baa65bb398b.jpg', 9780810820951, 'Bristles with energy and reckless abandon, all powered by Krupa. There isn t much organization or development of themes at all, but it was capable of whipping crowds into a frenzy every time it was played. The record begins with the tom-tom drumming of Krupa that forms the bedrock of the piece', 'Louis', 'Prima', 'Unknown', 'none', '1936-02-28', 'CD'),
(31, 'Test', 'default.jpg', 0, '', '', '', '', '', '0000-00-00', 'Book');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
