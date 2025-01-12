-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2025 at 03:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `body` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `body`, `image`) VALUES
(1, 'Introduction to Salesforce', 'A beginner\'s guide to understanding Salesforce and its ecosystem.', 'Salesforce is a cloud-based CRM platform that helps businesses connect with customers, streamline operations, and boost sales performance. In this article, we explore the basics of Salesforce and how it can be leveraged to improve business processes and customer engagement.', 'images/blog1.jpg'),
(2, 'Top Salesforce Features for Sales Teams', 'Explore the best features Salesforce offers to help sales teams succeed.', 'Salesforce offers a wide range of tools designed to enhance the efficiency of sales teams. From automated workflows to advanced reporting, Salesforce helps your sales team stay on track and close more deals. Learn about the top features that make Salesforce an invaluable tool for sales professionals.', 'images/blog2.jpg'),
(3, 'How to Customize Salesforce for Your Business', 'Learn how to tailor Salesforce to suit your business needs.', 'One of the greatest strengths of Salesforce is its flexibility. Whether you are a small business or a large enterprise, you can customize Salesforce to fit your unique requirements. In this blog post, we cover the steps involved in customizing Salesforce to align with your business processes.', 'images/blog3.jpg'),
(4, 'Salesforce Lightning Experience: An Overview', 'A detailed guide on Salesforce Lightning Experience and its benefits.', 'Salesforce Lightning is a modern, intuitive user interface that enhances the overall user experience. The Lightning Experience provides improved navigation, better productivity tools, and customizable dashboards. This post takes a closer look at the features of Salesforce Lightning and how it can boost your business\'s performance.', 'images/blog4.jpg'),
(5, 'Salesforce for Marketing Automation', 'How to integrate Salesforce with marketing automation tools.', 'Salesforce offers a robust suite of marketing automation features, allowing businesses to streamline their marketing efforts. From personalized email campaigns to lead nurturing, this blog explores how Salesforce can integrate with your marketing strategy and automate many processes, saving time and improving ROI.', 'images/blog5.jpg'),
(6, 'The Role of Salesforce in Customer Service', 'Why Salesforce is a powerful tool for customer service teams.', 'Customer service is at the heart of every business, and Salesforce can help your team deliver exceptional service. With tools like Service Cloud and knowledge bases, Salesforce enables your team to respond quickly and efficiently to customer inquiries. This article explains how Salesforce enhances customer support and satisfaction.', 'images/blog6.jpg'),
(7, 'Integrating Third-Party Apps with Salesforce', 'How to connect external applications with Salesforce.', 'Salesforce offers powerful integration capabilities that allow businesses to connect third-party apps and tools to their Salesforce environment. In this post, we walk through how to integrate popular apps with Salesforce and the benefits of having a unified platform for your business operations.', 'images/blog7.jpg'),
(8, 'Salesforce for Small Businesses: Is It Worth It?', 'A guide for small businesses considering Salesforce adoption.', 'Many small businesses hesitate to adopt Salesforce due to its perceived complexity or cost. However, Salesforce offers scalable solutions that are highly beneficial even for small businesses. This blog discusses why Salesforce is a valuable tool for small businesses and how it can streamline operations and boost growth.', 'images/blog8.jpg'),
(9, 'The Future of Salesforce: What to Expect in 2025', 'A look ahead at the future of Salesforce and upcoming innovations.', 'Salesforce is constantly evolving to meet the needs of businesses and their customers. In this article, we explore the future of Salesforce, including the introduction of new features, updates to existing products, and how the platform will continue to lead in the CRM space.', 'images/blog9.jpg'),
(10, 'Salesforce AI: Revolutionizing Customer Relationships', 'How Salesforce is integrating AI to improve customer relationships.', 'Artificial intelligence is transforming the way businesses interact with their customers, and Salesforce is at the forefront of this innovation. With AI-powered tools like Einstein, Salesforce helps businesses deliver personalized experiences to customers. This blog delves into the role of AI in Salesforce and its impact on customer relationships.', 'images/blog10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `phone`, `email`, `query`) VALUES
(1, 'Neha Gupta', '9899999999', 'neha@gmail.com', 'More Details');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
