-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 08:22 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `S_NO` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Email` varchar(500) DEFAULT NULL,
  `Password` varchar(10000) DEFAULT NULL,
  `Category` varchar(100) DEFAULT NULL,
  `random_string` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`S_NO`, `Name`, `Username`, `Email`, `Password`, `Category`, `random_string`) VALUES
(1, 'Jaskaran Singh', 'realkaran', 'jkssingh1997@gmail.com', 'Richie97@', 'Super', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `S_NO` int(11) NOT NULL,
  `Name` varchar(1000) DEFAULT NULL,
  `option1` varchar(1000) DEFAULT NULL,
  `option2` varchar(1000) DEFAULT NULL,
  `option3` varchar(1000) DEFAULT NULL,
  `option4` varchar(1000) DEFAULT NULL,
  `ans` varchar(1000) DEFAULT NULL,
  `subject` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`S_NO`, `Name`, `option1`, `option2`, `option3`, `option4`, `ans`, `subject`) VALUES
(1, 'An Attribute that is not part of any candidate key is known as', 'sub-prime attribute ', 'non-prime attribute', 'sub-candidate key', 'non-candidate key', 'option1', 'DBMS'),
(2, 'Which of the follow is not the degree of relationship?', 'Single', 'Binary', 'Ternary', 'n-ary', 'option1', 'DBMS'),
(3, 'The degree of the relationship is', 'number of Tables in a relationship', 'number of entities in a relationship', 'number of Row & Columns in a relationship', 'number of participating entities in a relationship', 'option4', 'DBMS'),
(4, 'How many rules in â€œCODDâ€™S RULESâ€ of Relational Model of database systems?', '11', '12', '13', '14', 'option2', 'DBMS'),
(5, 'Every attribute has some predefined value scope that is called', 'Tuple', 'Tables', 'Attribute domain', 'Relation schema', 'option3', 'DBMS'),
(6, 'An attribute of a table cannot hold multiple values is the property of', 'First normal form (1NF)', 'Second normal form (2NF)', 'Third normal form (3NF)', 'Fourth normal form (4NF)', 'option1', 'DBMS'),
(7, 'A key that consists of more than one attribute to uniquely identify rows in a table is called', 'Candidate key ', 'Foreign key', 'Primary key', 'Composite key ', 'option4', 'DBMS'),
(8, 'In hierarchical model, data is organized into', 'logical structure', 'physical structure', 'tree like structure', 'none of them', 'option3', 'DBMS'),
(9, 'The key selected from the sets of candidate keys by database designer is called', 'Super Key', 'Foreign key ', 'Secondary Key', 'Primary key ', 'option4', 'DBMS'),
(10, 'In an Entity-Relationship diagram â€œDouble Rectanglesâ€ represents', 'Relationship Set', 'Weak Entity Sets', 'Derived Attributes', 'Multi-valued Attributes', 'option2', 'DBMS'),
(11, 'The minimal set of super key is called', 'Candidate key', 'Foreign key', 'Primary key', 'Secondary key', 'option1', 'DBMS'),
(12, 'A relation that has no partial dependencies is in which normal form', ' First', 'Second ', 'Third', 'BCNF', 'option2', 'DBMS'),
(13, 'A functional dependency between two or more non-key attributes is called', 'Transitive dependency', 'Partial transitive dependency', 'Functional dependency', 'Partial functional dependency', 'option1', 'DBMS'),
(14, 'A logical description of some portion of database that is required by a user to perform task is called as', 'System View', 'User View', 'Logical View', 'Data View', 'option2', 'DBMS'),
(15, '______________ is a classical approach to database design?', 'Left â€“ Right approach', 'Right â€“ Left approach', 'Top â€“ Down approach', 'Bottom â€“ Up approach', 'option3', 'DBMS'),
(16, '_____________ refers to the correctness and completeness of the data in a database?', 'Data security', 'Data integrity', 'Data constraint', 'Data independence', 'option2', 'DBMS'),
(17, 'A table that displays data redundancies yields ____________ anomalies', 'Insertion', 'Deletion', 'Update', 'All of the above', 'option4', 'DBMS'),
(18, 'A lock that allows concurrent transactions to access different rows of the same table is known as a', 'Field-level lock', 'Row-level lock', 'Table-level lock', 'Database-level lock', 'option1', 'DBMS'),
(19, 'A type of query that is placed within a WHERE or HAVING clause of another query is called', 'Super query', 'Sub query', 'Master query', 'Multi-query', 'option2', 'DBMS'),
(20, 'A transaction completes its execution is said to be', 'Saved', 'Loaded', 'Rolled', 'Committed', 'option4', 'DBMS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `S_NO` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Email` varchar(500) DEFAULT NULL,
  `Password` varchar(10000) DEFAULT NULL,
  `random_string` mediumtext,
  `rd` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`S_NO`, `Name`, `Username`, `Email`, `Password`, `random_string`, `rd`) VALUES
(1, 'Jaskaran Singh', 'realkaran', 'jkssingh1997@gmail.com', 'Richie97@', 'NULL', NULL),
(3, 'Jaskaran Singh', 'lovejas', 'jkssachdeva43@gmail.com', 'Richie97@', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`S_NO`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`S_NO`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `S_NO` (`S_NO`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `S_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `S_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `S_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
