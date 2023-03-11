-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2021 at 02:02 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atestat`
--
CREATE DATABASE atestat;
-- --------------------------------------------------------

--
-- Table structure for table `books`
--

USE atestat;

CREATE TABLE `books` (
  `bookId` int(11) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `bookAuthor` varchar(255) NOT NULL,
  `bookPubDate` varchar(4) NOT NULL,
  `bookCover` varchar(255) NOT NULL DEFAULT 'img/books/default.jpg',
  `bookDescription` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookId`, `bookName`, `bookAuthor`, `bookPubDate`, `bookCover`, `bookDescription`) VALUES
(1, 'Metamorfoza', 'Franz Kafka', '1915', 'img/books/metamorphosis.jpg', 'Metamorfoza este povestea lui Gregor Samsa, un simplu comis-voiajor, care se trezește transformat peste noapte, fără nicio cauză aparentă, într-un gândac de mărime umană. Gândac - da, ați citit bine. Această metamorfoză nu este explicată pe parcursul nuvelei, nimeni nu încearcă să-i afle cauza, este doar un fond pe care se vor desfăşura acţiunile ulterioare.'),
(2, 'Inventiile mele', 'Nikola Tesla', '1919', 'img/books/inventiilemele.jpg', 'Daca geniul ar avea o definitie, aceasta ar fi persoana lui Nikola Tesla si realizarile sale. Lumea datoreaza atat de multe inovatii tehnice unui om despre care stie atat de putine! Volumul autobiografic Inventiile mele vine sa compenseze intru catva aceasta nedreptate - de altfel, una dintre numeroasele nedreptati care l-au urmarit pe Tesla de-a lungul intregii vieti.'),
(3, 'Strainul', 'Albert Camus', '1942', 'img/books/strainul.jpg', 'Personajul principal este Meursault, un franco-algerian indiferent, care, după ce a participat la înmormântarea mamei sale, ucide apatic un bărbat arab pe care el îl cunoscuse la Alger. Povestea este împărțită în două părți: punctul de vedere al lui Meursault (narat la persoana I) înainte și, respectiv, după crimă.'),
(4, 'Republica', 'Platon', '360', 'img/books/republica.jpg', 'Republica lui Platon se concentreaza asupra unei intrebari in aparenta simple: este intotdeauna mai bine sa fii drept decat nedrept? Cu certitudine, lucrarea reprezinta o contributie etica: o discutie despre dreptate si politica.'),
(5, 'La cafeneaua Existentialista', 'Sarah Bakewell', '2016', 'img/books/exists.jpg', 'Sarah Bakewell ne introduce in spiritul marilor filosofi existentialisti, relatandu-ne intamplarile si (mai important) gandurile acestora, intr-un mod savuros: Albert Camus, Jean-Paul Sartre, Simone de Beauvoire si multi altii.'),
(6, 'Micul print', 'Antoine de Saint-Exupery', '1943', 'img/books/miculprint.jpg', 'De ce o povestioara ilustrata (de insusi Exupery) pentru copii captiveaza si azi, trezeste emotie egala in randul oamenilor mari si al copiilor ce deprind cititul? Atatea raspunsuri posibile si unul singur care sper sa ne aduca impreuna intr-o noua lectura a aceste capodopere:  Literatura este o forma de salvare... Refugiu... Evadare... Ascensiune... si alte cuvinte grele. Poate va amintiti de acel Intermundiu al zeilor, un teritoriu fericit si netulburat. De pe aceasta planeta vine si personajul lui Exupery si in aceasta lume ne initiaza. Lucian Pricop');

-- --------------------------------------------------------

--
-- Table structure for table `books_comments`
--

CREATE TABLE `books_comments` (
  `usersId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL,
  `com` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_comments`
--

INSERT INTO `books_comments` (`usersId`, `bookId`, `com`) VALUES
(1, 1, 'E cartea mea preferata! :)'),
(1, 2, 'wow'),
(2, 1, 'Mie simcer nu mi-a placut..'),
(2, 2, 'uau'),
(2, 3, 'nu ma asteptam la acel final'),
(3, 4, 'hmm'),
(3, 1, 'Super cartea, te pune pe ganduri si in acelasi timp nu te plictiseste'),
(4, 5, '10/10 cartea asta m-a facut sa-mi doresc sa invat franceza'),
(4, 6, ':)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `userImg` varchar(128) DEFAULT 'img/users/default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `userImg`) VALUES
(1, 'Test', 'test@yahoo.com', 'test', '$2y$10$IpMCqqiQFga9doRNsl/x9.IPC.CKFiCIjDHYFNC2NM29OpPsu8n66', 'img/users/cat.jpg'),
(2, 'Haha', 'haha@yahoo.com', 'test2', '$2y$10$FSK.Ro4dma5sbkQUEZNCJu6yJzn3m5ttimBbbTo31Du.KN83iQokC', 'img/users/strosborg.jpg'),
(3, 'Hmm', 'hmm@yahoo.com', 'test3', '$2y$10$x2c5IlR04B4hqi2n6LReTOjenvhA19vfi0GWPE9twd7tBch6QVds.', 'img/users/hmm.jpg'),
(4, 'Testulescu', 'testulescu@yahoo.com', 'testulescu', '$2y$10$jMRRgU3120yyjOHWLw5iIu1IJ8AeS3Tsm7rIj9gFMbE2c7IEjXy7C', 'img/users/codrin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
