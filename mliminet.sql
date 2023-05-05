-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 10:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mliminet`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `id_advisor` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `images` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password_advisor` text NOT NULL,
  `field` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`id_advisor`, `firstname`, `surname`, `images`, `email`, `password_advisor`, `field`) VALUES
(1, 'Steven', 'Kamwaza ', '', 'kabesewa@gmail.com', '1f32aa4c9a1d2ea010adcf2348166a04', 'nyama nyama'),
(2, 'Cathy', 'Kwanthe', '', 'stekamwaza@gmail.com', 'c8b2f17833a4c73bb20f88876219ddcd', 'Nkhuku'),
(3, 'Steven', 'kamwaza', '', 'selo@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'Nsawa'),
(4, 'Cathy', 'Kwanthe', '', 'cathy@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'Advisor');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `email`, `message`) VALUES
(10, 'chesteve@gmail.com', '7i57olo8plp');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id_farmer` int(11) NOT NULL,
  `farmer_email` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `field` tinytext NOT NULL,
  `location` varchar(30) NOT NULL,
  `password_farmer` tinytext NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='farmer profile table';

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id_farmer`, `farmer_email`, `firstname`, `surname`, `field`, `location`, `password_farmer`, `image`) VALUES
(1, 'chesteve@gmail.com', 'steven', 'Kamwaza ', 'hotl', '', '1f32aa4c9a1d2ea010adcf2348166a04', ''),
(2, 'stevenkamwaza@gmail.com', 'Steven', 'kamwaza', 'Nkhuku', 'Lilongwe', '550e1bafe077ff0b0b67f4e32f29d751', ''),
(5, 'malosa@gmail.com', 'Malosa', 'Kabota', 'Nsawa', 'Dowa', 'c8b2f17833a4c73bb20f88876219ddcd', ''),
(7, 'kaphiri@gmail.com', 'Kamtengo', 'Phirilanjonvu', 'Mitengo', 'Dedza', '1f32aa4c9a1d2ea010adcf2348166a04', ''),
(8, 'matolae32@gmail.com', 'edo', 'ali', 'tomatoes', 'chimwankhunda', 'd377c097913101497ab9eecdfe244008', ''),
(9, 'chesteve@gmail.com', 'Steven', 'kamwaza', 'Ulimi Wa Njuchi', 'Lilongwe', '1f32aa4c9a1d2ea010adcf2348166a04', '');

-- --------------------------------------------------------

--
-- Table structure for table `homearticles`
--

CREATE TABLE `homearticles` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `post` text NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `time` int(11) NOT NULL DEFAULT current_timestamp(),
  `image` varchar(20) NOT NULL,
  `id_advisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homearticles`
--

INSERT INTO `homearticles` (`id`, `title`, `post`, `subtitle`, `time`, `image`, `id_advisor`) VALUES
(0, 'Apples  New  Hybrid ', 'ANSI style: JOIN ... ON ...\r\nmysql> SELECT products.name, price, suppliers.name \r\n       FROM products \r\n          JOIN suppliers ON products.supplierID = suppliers.supplierID\r\n       WHERE price < 0.6;\r\n+-----------+-------+-------------+\r\n| name      | ', 'Ulimi watsopano wa  ma apples', 0, 'apple.JPG', 1),
(1, 'Ulimi Wa Ntchochi', 'Visual Programming Languages (such as Visual Basic and Delphi) have been very popular in building GUI applications. In visual programming, you can drag and drop a visual component into a Application Builder and attach event handler to the component. Visua', 'Ulimi wa ntchochi ndi ulimi wa bwino komanso wa ndalama.Mmene tingalimile ntchochi zanthu', 0, 'banana.JPG', 1),
(11, 'MPUNGA Wa Kilombero', 'Visual Programming Languages (such as Visual Basic and Delphi) have been very popular in building GUI applications. In visual programming, you can drag and drop a visual component into a Application Builder and attach event handler to the component. Visual programming is ideal for rapid prototyping of GUI applications. Visual programming relies on component and event-driven technology. Components are reusable software units that can be assembled into an application via an application building tool (e.g., Visual Studio, JBuilder, NetBeans, Eclipse).\r\n\r\nIn Java, visual programming is supported via the \"Javabean\" API. The application builder tool loads the beans into a \"toolbox\" or \"palette\". You can select a bean from the toolbox, drop it into a \"form\", modify its appearance or properties, and define its interaction with other beans. Using the JavaBeans component technology, you can compose (or assemble) an application with just a few lines of codes.\r\n\r\n\"A Javabean is a reusable software component that can be manipulated visually in an application builder tool.\"\r\n\r\n\"A Javabean is an independent, reusable software component. Beans may be visual object, like Swing components (e.g. JButton, JTextField) that you can drag and drop using a GUI builder tool to assemble your GUI application. Beans may also be invisible object, like queues or stacks. Again, you can use these components to assemble your application using a builder tool.\"', 'Kulima kwamakono kwampunga kukumathandiza kupewa matenda ambiri kungakhaleso kukulora mpunga wabwino', 0, 'rice1.JPG', 4),
(15, 'New article on the page', 'fdthgi', 'fyhghjkhjk', 2147483647, 'brinjal.JPG', 1),
(16, '2020 Vision of MOEST', 'kkk', 'we here', 2147483647, 'chikoo.JPG', 1),
(18, 'LadyFinger ', 'How to grow ladyfinger? where to grow ? when togrow? What kind of recommends do i need?\r\nr', 'How to grow ladyfinger? where to grow ? when togrow? What kind of recommends do i need?\r\nr', 2147483647, 'ladyFinger.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `image`) VALUES
(10, '1579721303723.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `mblog`
--

CREATE TABLE `mblog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `post` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `subtitle` tinytext NOT NULL,
  `id_advisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mblog`
--

INSERT INTO `mblog` (`id`, `title`, `post`, `image`, `subtitle`, `id_advisor`) VALUES
(1, 'Introduction to Java Programming', 'JDK\r\nYou should have already installed Java Development Kit (JDK) and written a \"Hello-world\" program. Otherwise, Read \"How to Install JDK\".\r\n\r\nProgramming Text Editor\r\nDo NOT use Notepad (Windows) or TextEdit (Mac) for programming. Install a programming text editor, which does syntax color highlighting. For example,\r\n\r\nFor Windows: Sublime Text, Atom, NotePad++, TextPad.\r\nFor Mac: Sublime Text, Atom, jEdit, gEdit.\r\nFor Ubuntu: gEdit.\r\n1.  Getting Started - Your First Java Program\r\nLet us revisit the \"Hello-world\" program that prints a message \"Hello, world!\" to the display console.\r\n\r\nStep 1: Write the Source Code: Enter the following source codes, which defines a class called \"Hello\", using a programming text editor. Do not enter the line numbers (on the left pane), which were added to aid in the explanation.\r\n\r\nSave the source file as \"Hello.java\". A Java source file should be saved with a file extension of \".java\". The filename shall be the same as the classname - in this case \"Hello\". Filename and classname are case-sensitive.\r\n\r\n1\r\n2\r\n3\r\n4\r\n5\r\n6\r\n7\r\n8\r\n/*\r\n * First Java program, which says hello.\r\n */\r\npublic class Hello {   // Save as \"Hello.java\"\r\n   public static void main(String[] args) {  // Program entry point\r\n      System.out.println(\"Hello, world!\");   // Print text message\r\n   }\r\n}\r\nStep 2: Compile the Source Code: Compile the source code \"Hello.java\" into Java bytecode (or machine code) \"Hello.class\" using JDK\'s Java Compiler \"javac\".\r\n\r\nStart a CMD Shell (Windows) or Terminal (UNIX/Linux/Mac OS X) and issue these commands:\r\n\r\n// Change directory (cd) to the directory (folder) containing the source file \"Hello.java\"\r\njavac Hello.java\r\nStep 3: Run the Program: Run the machine code using JDK\'s Java Runtime \"java\", by issuing this command:\r\n\r\njava Hello', '', 'You should have already installed Java Development Kit (JDK) and written a \"Hello-world\" program. Otherwise, Read \"How to Install JDK\".', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`id_advisor`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id_farmer`);

--
-- Indexes for table `homearticles`
--
ALTER TABLE `homearticles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_advisor` (`id_advisor`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mblog`
--
ALTER TABLE `mblog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_advisor` (`id_advisor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisor`
--
ALTER TABLE `advisor`
  MODIFY `id_advisor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id_farmer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `homearticles`
--
ALTER TABLE `homearticles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mblog`
--
ALTER TABLE `mblog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `homearticles`
--
ALTER TABLE `homearticles`
  ADD CONSTRAINT `homearticles_ibfk_1` FOREIGN KEY (`id_advisor`) REFERENCES `advisor` (`id_advisor`);

--
-- Constraints for table `mblog`
--
ALTER TABLE `mblog`
  ADD CONSTRAINT `mblog_ibfk_1` FOREIGN KEY (`id_advisor`) REFERENCES `advisor` (`id_advisor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
