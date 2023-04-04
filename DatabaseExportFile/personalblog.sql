-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2023 at 01:00 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personalblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `tittle` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `tittle`, `category`, `author`, `image`, `text`, `dateTime`) VALUES
(1, '5 data management strategies for surviving an uncertain economy', ' Tech,AI ', 'Jobaed Bhuiyan', 'blog01webp.webp', 'We’re in for a rough couple of quarters. Or maybe we’re not. This encapsulates the sentiment from just about every economist, business analyst, investor, talking head and armchair advisor over the last few months. When it comes to our macroeconomic outlook, it depends on who you ask.\nMake no mistake; <br><br> there are plenty of concerning signs to suggest an ailing economy: inflation, widespread layoffs, slashed revenues, devaluations, sluggish investment and volatile geopolitics. But whether we experience the eyewall of another full-blown global recession or just gusts of regional economic headwinds, enterprises of all sizes and sectors have proactively begun to batten down the hatches.During these times of protracted fiscal uncertainty, a question I regularly receive from customers, potential clients, and business leaders whose digital transformation journeys are underway or about to be is, “What should we do about our data strategy?”\n<br><br>\nI’m glad you asked.', '2023-04-03 16:35:24'),
(2, 'How microservices have transformed enterprise security', 'Security', 'Jobaed Bhuiyan', 'blog02webp.webp', 'The microservices revolution has swept across the IT world over the past several years, with 71% of organizations reporting adopting the architecture by 2021. When discussing microservices, we often hear their advantages framed in terms of agility and flexibility in delivering innovations to customers. But one angle that’s not spoken about as much are enterprise security concerns.In the age of monolithic applications, a single security problem could mean hundreds or thousands of man-hours spent rebuilding an application from scratch. Along with having to patch out a security flaw itself, this also meant that DevOps and security teams would have to review and reconstruct the application to tweak dependencies — sometimes having to effectively reverse engineer entire applications.\n<br><br>\nMicroservices have upended this paradigm. They allow DevOps to ring-fence security flaws or concerns and address them without worrying about breaking their entire application stack. This doesn’t just mean a quicker turnaround for security patches, but more resilient and efficient DevOps teams and IT stacks overall.', '2023-04-03 16:35:24'),
(3, 'AI chatbot frenzy: Everything everywhere (all at once)', 'AI', 'Jobaed Bhuiyan', 'blog3.webp', 'The Academy Award-winning film Everything Everywhere All at Once demonstrates that life is messy and unpredictable, implying — perhaps — that we should embrace chaos, find joy, learn to let go of our expectations and trust that everything will work out in the end. \nThis approach echoes the way in which many are currently approaching AI. That said, experts are split on whether this technology will provide unlimited benefits and a golden era or lead to our destruction. Bill Gates, for one, focuses mostly on the hopeful message in his recent Age of AI letter.\n<br><br>\nThere is little doubt now that AI is hugely disruptive. Craig Mundie, the former chief research and strategy officer for Microsoft, knows a lot about technical breakthroughs. When Gates stepped down from his daily involvement with Microsoft in 2008, Mundie was tapped to fulfill his role as technological visionary.\n<br><br>\nMundie said recently of the freshly launched GPT-4 and the updated ChatGPT: “This is going to change everything about how we do everything. I think that it represents mankind’s greatest invention to date. It is qualitatively different — and it will be transformational.”', '2023-04-03 16:37:54'),
(4, 'Automation does not mean elimination: AI’s role in job security', 'AI,Tech', 'Jobaed Bhuiyan', 'GettyImages-1150416246.webp', 'Even as technologies such as video conferencing and messaging platforms adopted during forced remote work are now widely accepted, some workers still remain wary of technology in the workforce. New research shows us that only 50% of employees see technology as a strong asset for efficiency. IT teams are currently drivers of technology innovation implementation for their organizations, and IT optimization is slated to be the third largest AI use case by 2025, with an annual growth rate of 29.7%. However, with pop culture spreading doom and gloom over AI’s role in taking jobs, does this mean IT teams should be concerned about their job security? Will they be another casualty of obsolescence due to AI?\n<br><br>\nA knee-jerk reaction to AI in the workforce is that the need for IT teams is eliminated as machine learning (ML) can more efficiently and cost-effectively serve the team’s core purpose. Fear of automation is not a new concept: Today, 37% of workers are worried about losing their jobs due to automation. ', '2023-04-03 16:37:54'),
(5, '5 reasons MLops teams are using more edge ML', 'ML', 'Admin', 'shutterstock_514013068-e1676504175820.webp', 'As the number of machine learning (ML) use cases grows and evolves, an increasing number of MLops organizations are using more ML at the edge — that is, they are investing in running ML models on devices at the periphery of a network, including smart cameras, IoT computing devices, mobile devices or embedded systems. ABI Research, a global technology intelligence firm, recently forecast that the edge ML enablement market will exceed $5 billion by 2027. While the market is still in a “nascent stage,” according to Lian Jye Su, research director at ABI Research, companies looking to ease the challenges of edge ML applications are turning to a variety of platforms, tools and solutions to boost an end-to-end MLops workflow. \n<br> <br>\n“We are absolutely seeing MLops organizations increase the use of edge ML,” said Lou Flynn, senior product manager for AI and analytics at SAS. “Enterprises big and small are running to the cloud for various reasons, but the cloud doesn’t lend itself to every use case. So organizations from nearly every industry, including aerospace, manufacturing, energy and automotive, leverage edge AI to gain competitive advantage.”\n<br> <br>\nHere are five reasons MLops teams are giving edge ML a thumbs-up: ', '2023-04-03 16:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `created`) VALUES
(1, 'Jobaed Bhuiyan', 'jobaedbhuiyan34@gmail.com', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate, recusandae eius, quis quasi voluptatum pariatur cumque maxime numquam molestiae, consectetur alias fuga blanditiis', '2023-04-03 18:21:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
