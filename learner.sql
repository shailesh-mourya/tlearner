-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 12:37 PM
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
-- Database: `learner`
--

-- --------------------------------------------------------

--
-- Table structure for table `bc_data`
--

CREATE TABLE `bc_data` (
  `id` int(11) NOT NULL,
  `bc_topic` varchar(100) NOT NULL,
  `bc_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bc_data`
--

INSERT INTO `bc_data` (`id`, `bc_topic`, `bc_content`) VALUES
(1, 'Even Number', '<p>Even number : the which divided by 2 and itself is called even number.</p>'),
(2, 'About Shailesh sir', '<p><span style=\"font-size:18px;\"><mark class=\"marker-green\">Shailesh sir </mark></span>, from nallasopara east&nbsp;</p>'),
(13, 'Rational and Irrational number', '<p><meta charset=\"utf-8\"></p><p style=\"background-color:#ffffff;line-height:1.7999999999999998;margin-bottom:0pt;margin-top:0pt;padding:0pt 0pt 12pt;\" dir=\"ltr\"><span style=\"background-color:transparent;color:#444444;font-family:Arial,sans-serif;font-size:12pt;\"><span style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\"><strong>What is a Rational number?</strong></span></span></p><p style=\"background-color:#ffffff;line-height:1.7999999999999998;margin-bottom:0pt;margin-top:0pt;padding:0pt 0pt 12pt;\" dir=\"ltr\"><span style=\"background-color:transparent;color:#444444;font-family:Arial,sans-serif;font-size:12pt;\"><span style=\"font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\">Rational numbers are numbers which can be expressed as a fraction and also as positive numbers, negative numbers and zero. It can be written as p/q, where q is not equal to zero.</span></span></p><p style=\"background-color:#ffffff;line-height:1.7999999999999998;margin-bottom:0pt;margin-top:0pt;padding:0pt 0pt 12pt;\" dir=\"ltr\"><span style=\"background-color:#ffffff;color:#444444;font-family:Arial,sans-serif;font-size:12pt;\"><span style=\"font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\">Example: 3/2</span></span></p><p style=\"background-color:#ffffff;line-height:1.7999999999999998;margin-bottom:0pt;margin-top:0pt;padding:0pt 0pt 12pt;\" dir=\"ltr\"><span style=\"background-color:transparent;color:#444444;font-family:Arial,sans-serif;font-size:12pt;\"><span style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\"><strong>What is an Irrational Number?</strong></span></span></p><p style=\"background-color:#ffffff;line-height:1.7999999999999998;margin-bottom:0pt;margin-top:0pt;padding:0pt 0pt 12pt;\" dir=\"ltr\"><span style=\"background-color:transparent;color:#444444;font-family:Arial,sans-serif;font-size:12pt;\"><span style=\"font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\">The numbers which are not rational numbers are called irrational numbers. irrational numbers could be written in decimals but not in the form of fractions, which means they cannot be written as the ratio of two integers.</span></span></p><p style=\"line-height:1.38;margin-bottom:0pt;margin-top:0pt;\" dir=\"ltr\"><span style=\"background-color:#ffffff;color:#444444;font-family:Arial,sans-serif;font-size:12pt;\"><span style=\"font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\">Example: √8 = 2.828…</span></span></p><p>&nbsp;</p><p style=\"line-height:1.38;margin-bottom:0pt;margin-top:0pt;\" dir=\"ltr\"><span style=\"background-color:#ffffff;color:#444444;font-family:Arial,sans-serif;font-size:12pt;\"><span style=\"border-style:none;display:inline-block;font-style:normal;font-variant:normal;font-weight:400;height:346px;overflow:hidden;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;width:600px;\"><img style=\"margin-left:-17px;margin-top:-40.30232512271908px;\" src=\"https://lh7-us.googleusercontent.com/-EW7K0d-4QLD7xzsoNC9XRsHB1vuXcWuD-B73BeWh0ITktqR_WwrRvoIu6lvKfi4ST0JlA8lIdZvmJuoKiT0rqUoSTruiPS_kY0QyrAPTnJST2VO8v7nC5FSqcN_rz6IgQVKigwXWahP-tdiKEMa7_A\" width=\"624\" height=\"410.9759100709447\"></span></span></p>'),
(19, 'mode', '<p><meta charset=\"utf-8\"></p><p style=\"line-height:1.38;margin-bottom:0pt;margin-top:0pt;\" dir=\"ltr\"><span style=\"background-color:transparent;color:#000000;font-family:Arial,sans-serif;font-size:17pt;\"><span style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\"><strong>&nbsp;3.What are the</strong></span></span><span style=\"background-color:transparent;color:#000000;font-family:Arial,sans-serif;font-size:12pt;\"><span style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\"><strong>&nbsp;</strong></span></span><span style=\"background-color:transparent;color:#000000;font-family:Roboto,sans-serif;font-size:17pt;\"><span style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\"><strong>mode of nutrition?</strong></span></span></p><p style=\"line-height:1.9714285714285713;margin-bottom:15pt;margin-top:8pt;\" dir=\"ltr\"><span style=\"background-color:transparent;color:#000000;font-family:Roboto,sans-serif;font-size:10.5pt;\"><span style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\"><strong>&nbsp;</strong></span><span class=\"Apple-tab-span\" style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><strong> </strong></span><span style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\"><strong>The organisms can be classified into two broad categories on the basis of their mode of&nbsp; nutrition as follows:</strong></span></span></p><ol><li style=\"background-color:transparent;color:#000000;font-family:Roboto,sans-serif;font-size:11pt;font-style:normal;font-variant:normal;font-weight:400;list-style-type:decimal;text-decoration:none;vertical-align:baseline;white-space:pre;\" dir=\"ltr\" aria-level=\"1\"><span style=\"background-color:transparent;color:#000000;font-family:Roboto,sans-serif;font-size:11.5pt;\"><span style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\"><strong>&nbsp;Autotrophic mode of nutrition:</strong></span></span><span style=\"background-color:#ffffff;color:#333333;font-family:Roboto,sans-serif;font-size:10.5pt;\"><span style=\"font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\">The organisms which produce food on their own and&nbsp; not depend on other sources/organisms are called autotrophs. This mode of nutrition is known as autotrophic nutrition.</span></span></li></ol><p style=\"line-height:1.7999999999999998;margin-bottom:15pt;margin-left:36pt;margin-top:4pt;padding:3pt 0pt;\" dir=\"ltr\"><img class=\"img-fluid\" src=\"https://lh7-us.googleusercontent.com/YqR-TkHGr1p5qu8gw_8FNCtAKnAOyMz1YWfjYWB_2LMT7WKUZG72l4NRHccAFqTEHFlZcJhKbQHwFYPD_TdQ2dxNFJZiwYVhpL1UOdkO32Wj2qTykJDV12hZMQcdzu4f-MNWZCaYshIpzREwXyUOvIc\" alt=\"Responsive image\"></p>'),
(25, 'hr', '<p><meta charset=\"utf-8\"></p><ol><li style=\"background-color:transparent;color:#000000;font-family:Roboto,sans-serif;font-size:11.5pt;font-style:normal;font-variant:normal;list-style-type:decimal;text-decoration:none;vertical-align:baseline;white-space:pre;\" dir=\"ltr\" aria-level=\"1\"><strong>Heterotrophic mode of nutrition:</strong></li></ol><p style=\"margin-left:40px;\"><span style=\"background-color:#ffffff;color:#333333;font-family:Roboto,sans-serif;font-size:10.5pt;\"><span style=\"font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\"><strong>The organisms which cannot produce food on their own and &nbsp; depend on other sources/organisms are called heterotrophs. This mode of nutrition is known as heterotrophic nutrition.</strong></span></span></p><p><img class=\"img-fluid\" src=\"https://lh7-us.googleusercontent.com/UJSO_zTMhJ3zeS96ZiU-HoONdQrQUtAKX6Z6nHZi411jI7SE5JSmYBOR7NpXSBebedFZmADOMB1OIuEw48LIY4jnPKV1m3H770PvoQAgNpzjR9wu9iGbcc5Avabp27ZTD4XJcs1cOZ2bP-Plii1N5GE\"></p>'),
(26, 'nnn', '<p><meta charset=\"utf-8\"></p><p style=\"line-height:1.38;margin-bottom:0pt;margin-top:0pt;\" dir=\"ltr\"><span style=\"background-color:transparent;color:#000000;font-family:Arial,sans-serif;font-size:17pt;\"><span style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\"><strong>&nbsp;3.What are the</strong></span></span><span style=\"background-color:transparent;color:#000000;font-family:Arial,sans-serif;font-size:12pt;\"><span style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\"><strong>&nbsp;</strong></span></span><span style=\"background-color:transparent;color:#000000;font-family:Roboto,sans-serif;font-size:17pt;\"><span style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\"><strong>mode of nutrition?</strong></span></span></p><p style=\"line-height:1.9714285714285713;margin-bottom:15pt;margin-top:8pt;\" dir=\"ltr\"><span style=\"background-color:transparent;color:#000000;font-family:Roboto,sans-serif;font-size:10.5pt;\"><span style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\"><strong>&nbsp;</strong></span><span class=\"Apple-tab-span\" style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><strong> </strong></span><span style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\"><strong>The organisms can be classified into two broad categories on the basis of their mode of&nbsp; nutrition as follows:</strong></span></span></p><ol><li style=\"background-color:transparent;color:#000000;font-family:Roboto,sans-serif;font-size:11pt;font-style:normal;font-variant:normal;font-weight:400;list-style-type:decimal;text-decoration:none;vertical-align:baseline;white-space:pre;\" dir=\"ltr\" aria-level=\"1\"><span style=\"background-color:transparent;color:#000000;font-family:Roboto,sans-serif;font-size:11.5pt;\"><span style=\"font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\"><strong>&nbsp;Autotrophic mode of nutrition:</strong></span></span><span style=\"background-color:#ffffff;color:#333333;font-family:Roboto,sans-serif;font-size:10.5pt;\"><span style=\"font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;\">The organisms which produce food on their own and&nbsp; not depend on other sources/organisms are called autotrophs. This mode of nutrition is known as autotrophic nutrition.</span></span></li></ol><p style=\"line-height:1.7999999999999998;margin-bottom:15pt;margin-left:36pt;margin-top:4pt;padding:3pt 0pt;\" dir=\"ltr\"><img class=\"img-fluid\" src=\"https://lh7-us.googleusercontent.com/YqR-TkHGr1p5qu8gw_8FNCtAKnAOyMz1YWfjYWB_2LMT7WKUZG72l4NRHccAFqTEHFlZcJhKbQHwFYPD_TdQ2dxNFJZiwYVhpL1UOdkO32Wj2qTykJDV12hZMQcdzu4f-MNWZCaYshIpzREwXyUOvIc\"></p>'),
(27, 'daily english words', '<p>Sure, here are some daily English words along with their Hindi translations:</p><p>1. Hello - नमस्ते (Namaste)<br>2. Goodbye - अलविदा (Alvida)<br>3. Thank you - धन्यवाद (Dhanyavaad)<br>4. Please - कृपया (Kripya)<br>5. Yes - हाँ (Haan)<br>6. No - नहीं (Nahi)<br>7. Food - भोजन (Bhojan)<br>8. Water - पानी (Paani)<br>9. Home - घर (Ghar)<br>10. Love - प्यार (Pyar)<br>11. Time - समय (Samay)<br>12. Day - दिन (Din)<br>13. Night - रात (Raat)<br>14. Happy - खुश (Khush)<br>15. Sad - उदास (Udaas)</p>'),
(28, 'english story', '<figure class=\"image\"><img style=\"aspect-ratio:400/600;\" src=\"https://i.pinimg.com/474x/14/ae/a1/14aea180304157d9bc8afa06be440e0a.jpg\" alt=\"Grasshopet | English Stories For Kids, Moral Stories For ...\" width=\"400\" height=\"600\"></figure>');

-- --------------------------------------------------------

--
-- Table structure for table `gk_test`
--

CREATE TABLE `gk_test` (
  `id` int(30) NOT NULL,
  `topic_name` varchar(50) NOT NULL,
  `gk_question` varchar(100) NOT NULL,
  `gk_option1` varchar(100) NOT NULL,
  `gk_option2` varchar(100) NOT NULL,
  `gk_option3` varchar(100) NOT NULL,
  `gk_option4` varchar(100) NOT NULL,
  `gk_answer` varchar(100) NOT NULL,
  `gk_explanation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gk_test`
--

INSERT INTO `gk_test` (`id`, `topic_name`, `gk_question`, `gk_option1`, `gk_option2`, `gk_option3`, `gk_option4`, `gk_answer`, `gk_explanation`) VALUES
(1, 'solar system', 'Which planet is closest to the sun?', 'Earth', 'Mercury', 'Jupiter', 'Saturn', 'Mercury', 'Mercury is the closest planet to the sun and orbits it in the shortest period of time.'),
(2, 'solar system', 'Which planet is known as the \"Red Planet\"?', 'Venus', 'Mars', 'Neptune', 'Uranus', 'Mars', 'Mars is often called the \"Red Planet\" due to its reddish appearance.'),
(3, 'solar system', 'Which planet is the largest in our solar system?', 'Saturn', 'Jupiter', 'Uranus', 'Neptune', 'Jupiter', 'Jupiter is the largest planet in our solar system, known for its massive size and distinctive bands of clouds.'),
(4, 'solar system', 'What is the hottest planet in our solar system?', 'Venus', 'Mercury', 'Mars', 'Earth', 'Venus', 'Venus has the hottest surface temperature of any planet in our solar system due to its thick atmosphere.'),
(5, 'solar system', 'Which planet has the most moons?', 'Neptune', 'Saturn', 'Jupiter', 'Uranus', 'Jupiter', 'Jupiter has the most known moons of any planet in our solar system, with over 79 confirmed moons.'),
(6, 'solar system', 'What is the smallest planet in our solar system?', 'Earth', 'Mercury', 'Mars', 'Venus', 'Mercury', 'Mercury is the smallest planet in our solar system.'),
(7, 'solar system', 'Which planet has rings that are easily visible from Earth?', 'Uranus', 'Jupiter', 'Saturn', 'Neptune', 'Saturn', 'Saturn has prominent rings that are easily visible through telescopes from Earth.'),
(8, 'solar system', 'Which planet is the farthest from the sun?', 'Neptune', 'Saturn', 'Uranus', 'Jupiter', 'Neptune', 'Neptune is the farthest planet from the sun in our solar system.'),
(9, 'solar system', 'Which planet has a unique rotation, where it rotates on its side?', 'Mars', 'Venus', 'Uranus', 'Jupiter', 'Uranus', 'Uranus rotates on its side compared to the other planets in our solar system.'),
(10, 'solar system', 'Which planet was named after the Roman god of the sea?', 'Venus', 'Mercury', 'Neptune', 'Mars', 'Neptune', 'Neptune was named after the Roman god of the sea.'),
(11, 'solar system', 'Which planet is often referred to as the \"evening star\" or \"morning star\"?', 'Mars', 'Venus', 'Mercury', 'Jupiter', 'Venus', 'Venus is often referred to as the \"evening star\" when visible after sunset or the \"morning star\" when visible before sunrise.'),
(12, 'solar system', 'What is the second smallest planet in our solar system?', 'Venus', 'Mercury', 'Mars', 'Earth', 'Mars', 'Mars is the second smallest planet in our solar system after Mercury.'),
(13, 'solar system', 'Which planet has the longest day?', 'Venus', 'Jupiter', 'Mars', 'Saturn', 'Venus', 'Venus has the longest day of any planet in our solar system, longer than its year.'),
(14, 'solar system', 'What is the Great Red Spot on this planet?', 'Jupiter', 'Saturn', 'Uranus', 'Neptune', 'Jupiter', 'The Great Red Spot is a giant storm on Jupiter that has been observed for centuries.'),
(15, 'solar system', 'Which planet has the most elliptical orbit around the sun?', 'Earth', 'Mars', 'Venus', 'Mercury', 'Mercury', 'Mercury has the most elliptical orbit of all the planets in our solar system.'),
(16, 'Invention', 'Who invented the light bulb?', 'Thomas Edison', 'Benjamin Franklin', 'Isaac Newton', 'Nikola Tesla', 'Thomas Edison', 'Thomas Edison invented the first practical incandescent light bulb.'),
(17, 'Invention', 'Who is known for inventing the telephone?', 'Alexander Graham Bell', 'Thomas Edison', 'Nikola Tesla', 'Guglielmo Marconi', 'Alexander Graham Bell', 'Alexander Graham Bell is credited with inventing the telephone.'),
(18, 'Invention', 'What was the first patented invention of Thomas Edison?', 'Electric Vote Recorder', 'Phonograph', 'Incandescent Lamp', 'Stock Ticker', 'Electric Vote Recorder', 'Thomas Edison\'s first patented invention was an Electric Vote Recorder.'),
(19, 'Invention', 'Who invented the printing press?', 'Johannes Gutenberg', 'Leonardo da Vinci', 'Galileo Galilei', 'Isaac Newton', 'Johannes Gutenberg', 'Johannes Gutenberg invented the printing press.'),
(20, 'Invention', 'What did the Wright brothers invent?', 'Airplane', 'Submarine', 'Rocket', 'Helicopter', 'Airplane', 'The Wright brothers invented the first successful airplane.'),
(21, 'Invention', 'Who is credited with the invention of the computer?', 'Charles Babbage', 'Alan Turing', 'Steve Jobs', 'Bill Gates', 'Charles Babbage', 'Charles Babbage is considered the \"father of the computer\" for his work on the Analytical Engine.'),
(22, 'Invention', 'What did James Watt invent?', 'Steam Engine', 'Electric Motor', 'Telephone', 'Light Bulb', 'Steam Engine', 'James Watt improved the steam engine, leading to significant advancements in the Industrial Revolution.'),
(23, 'Invention', 'Who invented the electric battery?', 'Alessandro Volta', 'Michael Faraday', 'Thomas Edison', 'Nikola Tesla', 'Alessandro Volta', 'Alessandro Volta invented the electric battery.'),
(24, 'Invention', 'What was the first commercially successful typewriter called?', 'Sholes and Glidden Type-Writer', 'Remington Type-Writer', 'Underwood Type-Writer', 'Smith-Premier Type-Writer', 'Sholes and Glidden Type-Writer', 'The first commercially successful typewriter was the Sholes and Glidden Type-Writer.'),
(25, 'Invention', 'Who is credited with inventing the first practical photographic process?', 'Louis Daguerre', 'Thomas Edison', 'George Eastman', 'Eadweard Muybridge', 'Louis Daguerre', 'Louis Daguerre invented the first practical photographic process known as the daguerreotype.'),
(26, 'Invention', 'Who invented the first successful helicopter?', 'Igor Sikorsky', 'Leonardo da Vinci', 'Wilbur Wright', 'Orville Wright', 'Igor Sikorsky', 'Igor Sikorsky is credited with inventing the first successful helicopter.'),
(27, 'Invention', 'What was the first mass-produced vehicle called?', 'Model T', 'Model A', 'Model B', 'Model S', 'Model T', 'The first mass-produced vehicle was the Ford Model T.'),
(28, 'Invention', 'Who invented the first practical steamboat?', 'Robert Fulton', 'James Watt', 'George Stephenson', 'Isambard Kingdom Brunel', 'Robert Fulton', 'Robert Fulton invented the first practical steamboat.'),
(29, 'Invention', 'Who invented the first successful electric telegraph?', 'Samuel Morse', 'Nikola Tesla', 'Thomas Edison', 'Guglielmo Marconi', 'Samuel Morse', 'Samuel Morse invented the first successful electric telegraph.'),
(30, 'Invention', 'What did the Bessemer process contribute to?', 'Steel Production', 'Electricity Generation', 'Oil Refining', 'Textile Manufacturing', 'Steel Production', 'The Bessemer process revolutionized steel production.'),
(31, 'Invention', 'Who is known for inventing the World Wide Web?', 'Tim Berners-Lee', 'Steve Jobs', 'Bill Gates', 'Larry Page', 'Tim Berners-Lee', 'Tim Berners-Lee invented the World Wide Web.'),
(32, 'Invention', 'Who invented the first practical revolver?', 'Samuel Colt', 'John Browning', 'Elisha Collier', 'Daniel Wesson', 'Samuel Colt', 'Samuel Colt invented the first practical revolver.'),
(33, 'Invention', 'What did Johannes Gutenberg invent in the 15th century?', 'Printing Press', 'Electricity', 'Steam Engine', 'Telephone', 'Printing Press', 'Johannes Gutenberg invented the printing press in the 15th century.'),
(34, 'Invention', 'Who is credited with inventing the cotton gin?', 'Eli Whitney', 'Thomas Edison', 'Nikola Tesla', 'Guglielmo Marconi', 'Eli Whitney', 'Eli Whitney invented the cotton gin.'),
(35, 'Invention', 'Who invented the first electric telegraph?', 'Samuel Morse', 'Nikola Tesla', 'Thomas Edison', 'Guglielmo Marconi', 'Samuel Morse', 'Samuel Morse invented the first electric telegraph.'),
(36, 'Shivaji Maharaj', 'What was Shivaji Maharaj\'s birth name?', 'Shivaji Bhosale', 'Shivaji Chhatrapati', 'Shivaji Raje', 'Shivaji Maloji', 'Shivaji Bhosale', 'Shivaji Maharaj was born as Shivaji Bhosale.'),
(37, 'Shivaji Maharaj', 'Where was Shivaji Maharaj born?', 'Raigad', 'Pune', 'Mumbai', 'Shivneri Fort', 'Shivneri Fort', 'Shivaji Maharaj was born at the Shivneri Fort near Pune.'),
(38, 'Shivaji Maharaj', 'What was the name of Shivaji Maharaj\'s mother?', 'Jijabai', 'Ahilyabai', 'Tarabai', 'Sakvarbai', 'Jijabai', 'Shivaji Maharaj\'s mother was named Jijabai.'),
(39, 'Shivaji Maharaj', 'Which fort did Shivaji Maharaj capture at the age of 16?', 'Raigad Fort', 'Pratapgad Fort', 'Rajgad Fort', 'Torna Fort', 'Torna Fort', 'Shivaji Maharaj captured the Torna Fort at the age of 16.'),
(40, 'Shivaji Maharaj', 'What was the coronation name of Shivaji Maharaj?', 'Shivaji Chhatrapati', 'Shivaji Raje', 'Shivaji Bhosale', 'Shivaji Maloji', 'Shivaji Chhatrapati', 'Shivaji Maharaj was coronated as Shivaji Chhatrapati.'),
(41, 'Shivaji Maharaj', 'Which sea fort was built by Shivaji Maharaj?', 'Vijaydurg Fort', 'Murud Janjira Fort', 'Sindhudurg Fort', 'Alibaug Fort', 'Sindhudurg Fort', 'Shivaji Maharaj built the Sindhudurg Fort.'),
(42, 'Shivaji Maharaj', 'Who was Shivaji Maharaj\'s prime minister?', 'Balaji Vishwanath', 'Peshwa Baji Rao I', 'Tanaji Malusare', 'Raja Ram Mohan Roy', 'Peshwa Baji Rao I', 'Peshwa Baji Rao I served as Shivaji Maharaj\'s prime minister.'),
(43, 'Shivaji Maharaj', 'What was the title given to Shivaji Maharaj by the Sultan of Bijapur?', 'Jai Singh', 'Chatrapati', 'Raja', 'Sultan', 'Chatrapati', 'The Sultan of Bijapur conferred the title of Chatrapati upon Shivaji Maharaj.'),
(44, 'Shivaji Maharaj', 'Which famous battle did Shivaji Maharaj fight using the guerrilla warfare technique?', 'Battle of Pratapgad', 'Battle of Kolhapur', 'Battle of Sinhagad', 'Battle of Panhala', 'Battle of Sinhagad', 'Shivaji Maharaj used guerrilla warfare tactics in the Battle of Sinhagad.'),
(45, 'Shivaji Maharaj', 'Who was Shivaji Maharaj\'s mentor and teacher?', 'Dadoji Konddeo', 'Baji Rao I', 'Sambhaji Bhosale', 'Balaji Vishwanath', 'Dadoji Konddeo', 'Dadoji Konddeo was Shivaji Maharaj\'s mentor and teacher.'),
(46, 'Shivaji Maharaj', 'What was Shivaji Maharaj\'s administrative system called?', 'Ashtapradhan Mandal', 'Mughal Sultanate', 'Maratha Confederacy', 'British Raj', 'Ashtapradhan Mandal', 'Shivaji Maharaj\'s administrative system was known as the Ashtapradhan Mandal.'),
(47, 'Shivaji Maharaj', 'Which was the capital of Shivaji Maharaj\'s kingdom?', 'Raigad', 'Pune', 'Mumbai', 'Kolhapur', 'Raigad', 'Raigad served as the capital of Shivaji Maharaj\'s kingdom.'),
(48, 'Shivaji Maharaj', 'Which fort was famously won by Shivaji Maharaj in a daring night attack?', 'Raigad Fort', 'Pratapgad Fort', 'Rajgad Fort', 'Sinhagad Fort', 'Sinhagad Fort', 'Shivaji Maharaj won the Sinhagad Fort in a daring night attack.'),
(49, 'Shivaji Maharaj', 'Who was Shivaji Maharaj\'s brave warrior, known for the Battle of Singhagad?', 'Tanaji Malusare', 'Baji Rao I', 'Jijabai', 'Shivaji Bhosale', 'Tanaji Malusare', 'Tanaji Malusare was a brave warrior known for the Battle of Singhagad.'),
(50, 'Shivaji Maharaj', 'What was the name of Shivaji Maharaj\'s naval force?', 'Maratha Navy', 'Chhatrapati Navy', 'Shivaji Navy', 'Maratha Swarajya', 'Maratha Navy', 'Shivaji Maharaj\'s naval force was known as the Maratha Navy.'),
(51, 'Shivaji Maharaj', 'Which treaty did Shivaji Maharaj sign with the Mughals?', 'Treaty of Purandar', 'Treaty of Bassein', 'Treaty of Salbai', 'Treaty of Raghunathgarh', 'Treaty of Purandar', 'Shivaji Maharaj signed the Treaty of Purandar with the Mughals.'),
(52, 'Shivaji Maharaj', 'What was the name of Shivaji Maharaj\'s cavalry?', 'Mavala', 'Peshwa', 'Maratha Cavalry', 'Chauthai', 'Mavala', 'Shivaji Maharaj\'s cavalry was known as Mavala.'),
(53, 'Shivaji Maharaj', 'Who was Shivaji Maharaj\'s eldest son and successor?', 'Sambhaji', 'Rajaram', 'Shahu I', 'Baji Rao I', 'Sambhaji', 'Sambhaji was Shivaji Maharaj\'s eldest son and successor.'),
(54, 'Shivaji Maharaj', 'Which architectural marvel did Shivaji Maharaj construct near Raigad?', 'Hirakani Buruj', 'Shaniwar Wada', 'Pratapgad Fort', 'Sinhagad Fort', 'Hirakani Buruj', 'Shivaji Maharaj constructed Hirakani Buruj near Raigad.'),
(55, 'Shivaji Maharaj', 'Who was Shivaji Maharaj\'s spiritual guru?', 'Samarth Ramdas', 'Tukaram', 'Nanak', 'Kabir', 'Samarth Ramdas', 'Samarth Ramdas was Shivaji Maharaj\'s spiritual guru.'),
(58, 'Birds', 'Which bird is known for its ability to mimic human speech?', 'Parrot', 'Crow', 'Sparrow', 'Pigeon', 'Parrot', 'Parrots, especially species like the African Grey Parrot, are known for their ability to mimic human speech.'),
(59, 'Birds', 'Which bird is the national symbol of the United States?', 'Bald Eagle', 'Golden Eagle', 'Osprey', 'Hawk', 'Bald Eagle', 'The Bald Eagle is the national symbol of the United States.'),
(60, 'Birds', 'Which bird is the fastest animal in level flight?', 'Peregrine Falcon', 'Golden Eagle', 'Hummingbird', 'Albatross', 'Peregrine Falcon', 'The Peregrine Falcon is the fastest animal in level flight, reaching incredible speeds.'),
(61, 'Birds', 'Which bird is known for its long annual migration from the Arctic to Antarctica?', 'Arctic Tern', 'Swallow', 'Sandpiper', 'Stork', 'Arctic Tern', 'The Arctic Tern undertakes the longest migration, traveling from the Arctic to Antarctica and back each year.'),
(62, 'Birds', 'Which bird is the largest flightless bird?', 'Ostrich', 'Emu', 'Cassowary', 'Rhea', 'Ostrich', 'The Ostrich is the largest flightless bird in the world.'),
(63, 'Birds', 'Which bird species is famous for its colorful plumage and dancing courtship rituals?', 'Peacock', 'Flamingo', 'Parrot', 'Pheasant', 'Peacock', 'Peacocks are known for their vibrant plumage and distinctive courtship displays.'),
(64, 'Birds', 'Which bird has the longest wingspan?', 'Wandering Albatross', 'Condor', 'Pelican', 'Swan', 'Wandering Albatross', 'The Wandering Albatross has the longest wingspan of any living bird species.'),
(65, 'Birds', 'Which bird is known for its ability to imitate a chainsaw?', 'Lyrebird', 'Mockingbird', 'Starling', 'Thrasher', 'Lyrebird', 'The Lyrebird can mimic various sounds, including the sound of a chainsaw.'),
(66, 'Birds', 'Which bird has the largest brain size in relation to its body?', 'Raven', 'Owl', 'Crow', 'Pigeon', 'Raven', 'The Raven has a relatively large brain size compared to its body size among birds.'),
(67, 'Birds', 'Which bird is the symbol of peace?', 'Dove', 'Sparrow', 'Swallow', 'Hawk', 'Dove', 'The Dove is often considered a symbol of peace and tranquility.'),
(68, 'Birds', 'Which bird is known for its distinctive call that sounds like \"laughing\"?', 'Kookaburra', 'Woodpecker', 'Cuckoo', 'Jay', 'Kookaburra', 'The Kookaburra has a call that sounds like human laughter.'),
(69, 'Birds', 'Which bird is known for its ability to hover in mid-air?', 'Hummingbird', 'Kingfisher', 'Sparrow', 'Swallow', 'Hummingbird', 'Hummingbirds have the unique ability to hover in mid-air due to their rapid wing movements.'),
(70, 'Birds', 'Which bird is the national bird of India?', 'Indian Peafowl', 'Indian Roller', 'Sarus Crane', 'Vulture', 'Indian Peafowl', 'The Indian Peafowl, also known as the peacock, is the national bird of India.'),
(71, 'Birds', 'Which bird is known for its nocturnal hunting ability?', 'Owl', 'Eagle', 'Falcon', 'Hawk', 'Owl', 'Owls are known for their exceptional nocturnal hunting abilities.'),
(72, 'Birds', 'Which bird is considered a symbol of wisdom?', 'Owl', 'Crow', 'Eagle', 'Falcon', 'Owl', 'The Owl is often considered a symbol of wisdom in many cultures.'),
(73, 'Birds', 'Which bird is known for its ability to dive at high speeds into the water to catch fish?', 'Osprey', 'Heron', 'Pelican', 'Cormorant', 'Osprey', 'Ospreys are skilled at diving from heights to catch fish.'),
(74, 'Birds', 'Which bird is associated with delivering babies in folklore?', 'Stork', 'Pelican', 'Swan', 'Albatross', 'Stork', 'In folklore, storks are often associated with delivering babies.'),
(75, 'Birds', 'Which bird species is famous for its dance performed during courtship on leks?', 'Sage Grouse', 'Ruff', 'Manakin', 'Peafowl', 'Sage Grouse', 'Sage Grouse perform intricate dances during courtship on leks.'),
(76, 'Birds', 'Which bird species has the most documented number of species?', 'Passerines', 'Waterfowl', 'Raptors', 'Galliformes', 'Passerines', 'Passerines, also known as perching birds, have the most documented species among birds.'),
(77, 'Birds', 'Which bird is known for its long, curved bill used to extract insects from trees?', 'Woodpecker', 'Hoopoe', 'Hummingbird', 'Sparrow', 'Hoopoe', 'Hoopoes have long, curved bills used to extract insects from trees.'),
(78, 'Birds', 'Which bird is known for its ability to mimic various sounds, including car alarms?', 'European Starling', 'Common Myna', 'Northern Mockingbird', 'Bulbul', 'European Starling', 'European Starlings can mimic various sounds, including car alarms and other bird calls.'),
(79, 'Capital of Country', 'What is the capital of France?', 'Paris', 'Berlin', 'Rome', 'Madrid', 'Paris', 'Paris is the capital of France.'),
(80, 'Capital of Country', 'What is the capital of Japan?', 'Tokyo', 'Beijing', 'Seoul', 'Bangkok', 'Tokyo', 'Tokyo is the capital of Japan.'),
(81, 'Capital of Country', 'What is the capital of India?', 'New Delhi', 'Mumbai', 'Bangalore', 'Kolkata', 'New Delhi', 'New Delhi is the capital of India.'),
(82, 'Capital of Country', 'What is the capital of Brazil?', 'Brasília', 'Rio de Janeiro', 'São Paulo', 'Buenos Aires', 'Brasília', 'Brasília is the capital of Brazil.'),
(83, 'Capital of Country', 'What is the capital of Australia?', 'Canberra', 'Sydney', 'Melbourne', 'Brisbane', 'Canberra', 'Canberra is the capital of Australia.'),
(84, 'Capital of Country', 'What is the capital of South Africa?', 'Pretoria', 'Johannesburg', 'Cape Town', 'Durban', 'Pretoria', 'Pretoria is one of the three capital cities of South Africa.'),
(85, 'Capital of Country', 'What is the capital of Egypt?', 'Cairo', 'Alexandria', 'Luxor', 'Giza', 'Cairo', 'Cairo is the capital of Egypt.'),
(86, 'Capital of Country', 'What is the capital of Russia?', 'Moscow', 'Saint Petersburg', 'Novosibirsk', 'Yekaterinburg', 'Moscow', 'Moscow is the capital of Russia.'),
(87, 'Capital of Country', 'What is the capital of Canada?', 'Ottawa', 'Toronto', 'Vancouver', 'Montreal', 'Ottawa', 'Ottawa is the capital of Canada.'),
(88, 'Capital of Country', 'What is the capital of Argentina?', 'Buenos Aires', 'Cordoba', 'Rosario', 'Mendoza', 'Buenos Aires', 'Buenos Aires is the capital of Argentina.'),
(89, 'Capital of Country', 'What is the capital of Germany?', 'Berlin', 'Munich', 'Hamburg', 'Frankfurt', 'Berlin', 'Berlin is the capital of Germany.'),
(90, 'Capital of Country', 'What is the capital of China?', 'Beijing', 'Shanghai', 'Guangzhou', 'Shenzhen', 'Beijing', 'Beijing is the capital of China.'),
(91, 'Capital of Country', 'What is the capital of Italy?', 'Rome', 'Milan', 'Florence', 'Venice', 'Rome', 'Rome is the capital of Italy.'),
(92, 'Capital of Country', 'What is the capital of Spain?', 'Madrid', 'Barcelona', 'Valencia', 'Seville', 'Madrid', 'Madrid is the capital of Spain.'),
(93, 'Capital of Country', 'What is the capital of South Korea?', 'Seoul', 'Busan', 'Incheon', 'Daegu', 'Seoul', 'Seoul is the capital of South Korea.'),
(94, 'Capital of Country', 'What is the capital of Thailand?', 'Bangkok', 'Phuket', 'Chiang Mai', 'Pattaya', 'Bangkok', 'Bangkok is the capital of Thailand.'),
(95, 'Capital of Country', 'What is the capital of United Kingdom?', 'London', 'Manchester', 'Birmingham', 'Edinburgh', 'London', 'London is the capital of the United Kingdom.'),
(96, 'Capital of Country', 'What is the capital of Mexico?', 'Mexico City', 'Guadalajara', 'Monterrey', 'Cancun', 'Mexico City', 'Mexico City is the capital of Mexico.'),
(97, 'Capital of Country', 'What is the capital of Nigeria?', 'Abuja', 'Lagos', 'Kano', 'Ibadan', 'Abuja', 'Abuja is the capital of Nigeria.'),
(98, 'Capital of Country', 'What is the capital of Saudi Arabia?', 'Riyadh', 'Jeddah', 'Mecca', 'Medina', 'Riyadh', 'Riyadh is the capital of Saudi Arabia.'),
(99, 'Capital of Country', 'What is the capital of Turkey?', 'Ankara', 'Istanbul', 'Izmir', 'Antalya', 'Ankara', 'Ankara is the capital of Turkey.'),
(100, 'Capital of Country', 'What is the capital of Pakistan?', 'Islamabad', 'Karachi', 'Lahore', 'Rawalpindi', 'Islamabad', 'Islamabad is the capital of Pakistan.'),
(101, 'Capital of Country', 'What is the capital of Greece?', 'Athens', 'Thessaloniki', 'Heraklion', 'Patras', 'Athens', 'Athens is the capital of Greece.'),
(102, 'Capital of Country', 'What is the capital of Sweden?', 'Stockholm', 'Gothenburg', 'Malmo', 'Uppsala', 'Stockholm', 'Stockholm is the capital of Sweden.'),
(103, 'Capital of Country', 'What is the capital of Canada?', 'Ottawa', 'Toronto', 'Vancouver', 'Montreal', 'Ottawa', 'Ottawa is the capital of Canada.'),
(104, 'Capital of Country', 'What is the capital of Norway?', 'Oslo', 'Bergen', 'Trondheim', 'Stavanger', 'Oslo', 'Oslo is the capital of Norway.'),
(105, 'Capital of Country', 'What is the capital of Netherlands?', 'Amsterdam', 'Rotterdam', 'The Hague', 'Utrecht', 'Amsterdam', 'Amsterdam is the capital of the Netherlands.'),
(106, 'Capital of Country', 'What is the capital of New Zealand?', 'Wellington', 'Auckland', 'Christchurch', 'Hamilton', 'Wellington', 'Wellington is the capital of New Zealand.'),
(107, 'Capital of Country', 'What is the capital of Switzerland?', 'Bern', 'Geneva', 'Zurich', 'Basel', 'Bern', 'Bern is the capital of Switzerland.'),
(108, 'Capital of Country', 'What is the capital of Belgium?', 'Brussels', 'Antwerp', 'Ghent', 'Bruges', 'Brussels', 'Brussels is the capital of Belgium.'),
(109, 'Capital of Country', 'What is the capital of Portugal?', 'Lisbon', 'Porto', 'Faro', 'Coimbra', 'Lisbon', 'Lisbon is the capital of Portugal.'),
(110, 'Capital of Country', 'What is the capital of Denmark?', 'Copenhagen', 'Aarhus', 'Odense', 'Aalborg', 'Copenhagen', 'Copenhagen is the capital of Denmark.'),
(111, 'Capital of Country', 'What is the capital of Afghanistan?', 'Kabul', 'Option2', 'Option3', 'Option4', 'Kabul', 'Kabul is the capital of Afghanistan.'),
(112, 'Capital of Country', 'What is the capital of Albania?', 'Tirana', 'Option2', 'Option3', 'Option4', 'Tirana', 'Tirana is the capital of Albania.'),
(113, 'Capital of Country', 'What is the capital of Algeria?', 'Algiers', 'Option2', 'Option3', 'Option4', 'Algiers', 'Algiers is the capital of Algeria.'),
(114, 'Capital of Country', 'What is the capital of Andorra?', 'Andorra la Vella', 'Option2', 'Option3', 'Option4', 'Andorra la Vella', 'Andorra la Vella is the capital of Andorra.'),
(115, 'Capital of Country', 'What is the capital of Angola?', 'Luanda', 'Option2', 'Option3', 'Option4', 'Luanda', 'Luanda is the capital of Angola.'),
(116, 'Capital of Country', 'What is the capital of Antigua and Barbuda?', 'Saint John\'s', 'Option2', 'Option3', 'Option4', 'Saint John\'s', 'Saint John\'s is the capital of Antigua and Barbuda.'),
(117, 'Aquatic Animal', 'Which mammal is known as the \"gentle giant\" of the sea?', 'Whale Shark', 'Blue Whale', 'Humpback Whale', 'Beluga Whale', 'Blue Whale', 'The Blue Whale is often referred to as the \"gentle giant\" of the sea due to its massive size and peaceful nature.'),
(118, 'Aquatic Animal', 'What is the largest species of turtle?', 'Leatherback Sea Turtle', 'Hawksbill Sea Turtle', 'Green Sea Turtle', 'Loggerhead Sea Turtle', 'Leatherback Sea Turtle', 'The Leatherback Sea Turtle is the largest species of turtle.'),
(119, 'Aquatic Animal', 'Which fish is known for its ability to produce electric shocks?', 'Electric Eel', 'Stingray', 'Black Ghost Knifefish', 'Electric Catfish', 'Electric Eel', 'The Electric Eel is capable of generating electric shocks.'),
(120, 'Aquatic Animal', 'Which marine animal has the largest brain?', 'Sperm Whale', 'Orca', 'Bottlenose Dolphin', 'Elephant Seal', 'Sperm Whale', 'The Sperm Whale has the largest brain of any animal known to have lived on Earth.'),
(121, 'Aquatic Animal', 'What is the fastest fish in the ocean?', 'Sailfish', 'Marlin', 'Tuna', 'Swordfish', 'Sailfish', 'The Sailfish is considered the fastest fish in the ocean.'),
(122, 'Aquatic Animal', 'Which creature is known for its ability to change color to blend with its surroundings?', 'Cuttlefish', 'Octopus', 'Squid', 'Chameleon', 'Cuttlefish', 'Cuttlefish have the ability to change color to camouflage and blend with their environment.'),
(123, 'Aquatic Animal', 'What is the largest living fish species?', 'Whale Shark', 'Basking Shark', 'Great White Shark', 'Manta Ray', 'Whale Shark', 'The Whale Shark is the largest living fish species.'),
(124, 'Aquatic Animal', 'Which aquatic animal is capable of bioluminescence?', 'Firefly Squid', 'Glowing Jellyfish', 'Lanternfish', 'Bioluminescent Octopus', 'Firefly Squid', 'The Firefly Squid is known for its bioluminescence.'),
(125, 'Aquatic Animal', 'Which creature is often referred to as the \"clown of the sea\"?', 'Clownfish', 'Triggerfish', 'Pufferfish', 'Parrotfish', 'Clownfish', 'Clownfish are often called the \"clown of the sea\" due to their colorful appearance.'),
(126, 'Aquatic Animal', 'What is the largest species of ray?', 'Manta Ray', 'Stingray', 'Electric Ray', 'Eagle Ray', 'Manta Ray', 'The Manta Ray is the largest species of ray.'),
(127, 'Aquatic Animal', 'Which marine mammal is known for its tusk-like teeth?', 'Narwhal', 'Beluga Whale', 'Sperm Whale', 'Orca', 'Narwhal', 'The Narwhal is known for its long tusk-like tooth, which can grow up to several feet in length.'),
(128, 'Aquatic Animal', 'What is the smallest species of dolphin?', 'Maui Dolphin', 'Heaviside\'s Dolphin', 'Commerson\'s Dolphin', 'Tucuxi Dolphin', 'Maui Dolphin', 'The Maui Dolphin is the smallest species of dolphin.'),
(129, 'Aquatic Animal', 'Which creature is known as the \"king of camouflage\"?', 'Octopus', 'Cuttlefish', 'Squid', 'Chameleon', 'Octopus', 'The Octopus is often referred to as the \"king of camouflage\" due to its remarkable ability to blend with its surroundings.'),
(130, 'Aquatic Animal', 'Which animal has the longest migration route of any mammal?', 'Gray Whale', 'Humpback Whale', 'Sperm Whale', 'Blue Whale', 'Gray Whale', 'The Gray Whale has the longest migration route of any mammal, covering thousands of miles annually.'),
(131, 'Aquatic Animal', 'Which species of shark is known for its distinctive hammer-shaped head?', 'Hammerhead Shark', 'Great White Shark', 'Tiger Shark', 'Bull Shark', 'Hammerhead Shark', 'The Hammerhead Shark is recognized for its unique hammer-shaped head.'),
(132, 'Aquatic Animal', 'What is the world\'s largest living turtle?', 'Leatherback Sea Turtle', 'Green Sea Turtle', 'Hawksbill Sea Turtle', 'Loggerhead Sea Turtle', 'Leatherback Sea Turtle', 'The Leatherback Sea Turtle is the largest living turtle species.'),
(133, 'Aquatic Animal', 'Which aquatic creature has the ability to change its sex?', 'Clownfish', 'Moray Eel', 'Parrotfish', 'Goby Fish', 'Clownfish', 'Clownfish are known to change their sex, with dominant females transforming into males.'),
(134, 'Aquatic Animal', 'Which species of jellyfish is considered immortal?', 'Turritopsis dohrnii (Immortal Jellyfish)', 'Moon Jellyfish', 'Box Jellyfish', 'Lion\'s Mane Jellyfish', 'Turritopsis dohrnii (Immortal Jellyfish)', 'The Turritopsis dohrnii jellyfish is often referred to as immortal due to its ability to revert to its immature form after reaching adulthood.'),
(135, 'Aquatic Animal', 'Which animal has the longest migration route of any mammal?', 'Gray Whale', 'Humpback Whale', 'Sperm Whale', 'Blue Whale', 'Gray Whale', 'The Gray Whale has the longest migration route of any mammal, covering thousands of miles annually.'),
(136, 'Aquatic Animal', 'What is the fastest marine creature?', 'Sailfish', 'Marlin', 'Tuna', 'Swordfish', 'Sailfish', 'The Sailfish is considered the fastest marine creature, reaching speeds up to 68 miles per hour.'),
(137, 'Aquatic Animal', 'Which creature is known as the \"sea cow\"?', 'Manatee', 'Dugong', 'Walrus', 'Seal', 'Manatee', 'The Manatee is often referred to as the \"sea cow\" due to its herbivorous nature and slow-moving behavior.'),
(138, 'Discoveries', 'Who is credited with the discovery of penicillin?', 'Alexander Fleming', 'Louis Pasteur', 'Robert Koch', 'Edward Jenner', 'Alexander Fleming', 'Alexander Fleming is credited with the discovery of penicillin in 1928.'),
(139, 'Discoveries', 'What did Isaac Newton discover due to an apple falling from a tree?', 'Law of Universal Gravitation', 'Law of Motion', 'Theory of Relativity', 'Law of Thermodynamics', 'Law of Universal Gravitation', 'Isaac Newton\'s observation of an apple falling from a tree led to his discovery of the Law of Universal Gravitation.'),
(140, 'Discoveries', 'Who discovered the theory of general relativity?', 'Albert Einstein', 'Isaac Newton', 'Galileo Galilei', 'Stephen Hawking', 'Albert Einstein', 'Albert Einstein formulated the theory of general relativity.'),
(141, 'Discoveries', 'Which scientist discovered the existence of radio waves?', 'Heinrich Hertz', 'Guglielmo Marconi', 'Nikola Tesla', 'Thomas Edison', 'Heinrich Hertz', 'Heinrich Hertz discovered the existence of radio waves in the late 19th century.'),
(142, 'Discoveries', 'Who discovered the structure of the DNA molecule?', 'James Watson and Francis Crick', 'Rosalind Franklin', 'Gregor Mendel', 'Linus Pauling', 'James Watson and Francis Crick', 'James Watson and Francis Crick are credited with discovering the double helix structure of DNA.'),
(143, 'Discoveries', 'What did Marie Curie discover?', 'Radium and Polonium', 'X-rays', 'Penicillin', 'The Electron', 'Radium and Polonium', 'Marie Curie discovered the elements Radium and Polonium.'),
(144, 'Discoveries', 'Who is known for the discovery of electricity?', 'Benjamin Franklin', 'Thomas Edison', 'Nikola Tesla', 'Michael Faraday', 'Benjamin Franklin', 'Benjamin Franklin is known for his experiments and discoveries related to electricity.'),
(145, 'Discoveries', 'Who discovered the laws of planetary motion?', 'Johannes Kepler', 'Galileo Galilei', 'Nicolaus Copernicus', 'Isaac Newton', 'Johannes Kepler', 'Johannes Kepler discovered the laws of planetary motion.'),
(146, 'Discoveries', 'Who discovered the process of vaccination?', 'Edward Jenner', 'Louis Pasteur', 'Robert Koch', 'Alexander Fleming', 'Edward Jenner', 'Edward Jenner is known for discovering the process of vaccination against smallpox.'),
(147, 'Discoveries', 'Who discovered the principles of genetics?', 'Gregor Mendel', 'Charles Darwin', 'Thomas Hunt Morgan', 'Alfred Russel Wallace', 'Gregor Mendel', 'Gregor Mendel discovered the principles of genetics through his work on pea plants.'),
(148, 'Discoveries', 'Who discovered the circulation of blood?', 'William Harvey', 'Hippocrates', 'Galileo Galilei', 'Andreas Vesalius', 'William Harvey', 'William Harvey discovered the circulation of blood in the human body.'),
(149, 'Discoveries', 'Who discovered the law of conservation of mass?', 'Antoine Lavoisier', 'John Dalton', 'Joseph Priestley', 'Amedeo Avogadro', 'Antoine Lavoisier', 'Antoine Lavoisier discovered the law of conservation of mass.'),
(150, 'Discoveries', 'Who discovered the existence of the New World (America)?', 'Christopher Columbus', 'Amerigo Vespucci', 'Ferdinand Magellan', 'Vasco da Gama', 'Christopher Columbus', 'Christopher Columbus is credited with discovering the existence of the New World (America).'),
(151, 'Discoveries', 'Who discovered the first antibiotic?', 'Alexander Fleming', 'Louis Pasteur', 'Robert Koch', 'Edward Jenner', 'Alexander Fleming', 'Alexander Fleming discovered the first antibiotic, penicillin.'),
(152, 'Discoveries', 'Who discovered the theory of evolution by natural selection?', 'Charles Darwin', 'Gregor Mendel', 'Alfred Russel Wallace', 'Thomas Hunt Morgan', 'Charles Darwin', 'Charles Darwin proposed the theory of evolution by natural selection.'),
(153, 'Discoveries', 'Who discovered the theory of the Big Bang?', 'Georges Lemaître', 'Albert Einstein', 'Stephen Hawking', 'Edwin Hubble', 'Georges Lemaître', 'Georges Lemaître is known for proposing the theory of the Big Bang.'),
(154, 'Discoveries', 'Who discovered the theory of special relativity?', 'Albert Einstein', 'Isaac Newton', 'Galileo Galilei', 'Stephen Hawking', 'Albert Einstein', 'Albert Einstein formulated the theory of special relativity.'),
(155, 'Discoveries', 'Who discovered the first exoplanet?', 'Michel Mayor and Didier Queloz', 'Edmond Halley', 'William Herschel', 'Johannes Kepler', 'Michel Mayor and Didier Queloz', 'Michel Mayor and Didier Queloz discovered the first confirmed exoplanet orbiting a Sun-like star.'),
(156, 'Discoveries', 'Who discovered the process of pasteurization?', 'Louis Pasteur', 'Joseph Lister', 'Alexander Fleming', 'Robert Koch', 'Louis Pasteur', 'Louis Pasteur discovered and developed the process of pasteurization.'),
(157, 'Discoveries', 'Who discovered the law of gravity?', 'Isaac Newton', 'Galileo Galilei', 'Johannes Kepler', 'Albert Einstein', 'Isaac Newton', 'Isaac Newton discovered the law of gravity.'),
(158, 'Discoveries', 'Who discovered the first radio transmission?', 'Guglielmo Marconi', 'Heinrich Hertz', 'Nikola Tesla', 'Thomas Edison', 'Guglielmo Marconi', 'Guglielmo Marconi is credited with the first successful radio transmission.'),
(159, 'Political of India', 'Who was the first Prime Minister of India?', 'Jawaharlal Nehru', 'Indira Gandhi', 'Sardar Vallabhbhai Patel', 'Lal Bahadur Shastri', 'Jawaharlal Nehru', 'Jawaharlal Nehru served as the first Prime Minister of India from 1947 to 1964.'),
(160, 'Political of India', 'What is the upper house of the Indian Parliament called?', 'Rajya Sabha', 'Lok Sabha', 'Vidhan Sabha', 'Sansad Bhavan', 'Rajya Sabha', 'The Rajya Sabha is the upper house of the Indian Parliament.'),
(161, 'Political of India', 'Who is known as the \"Iron Man of India\"?', 'Sardar Vallabhbhai Patel', 'Jawaharlal Nehru', 'B.R. Ambedkar', 'Mahatma Gandhi', 'Sardar Vallabhbhai Patel', 'Sardar Vallabhbhai Patel is known as the \"Iron Man of India\" for his efforts in unifying the country.'),
(162, 'Political of India', 'Which political party did Mahatma Gandhi lead?', 'Indian National Congress', 'Bharatiya Janata Party', 'Bahujan Samaj Party', 'Communist Party of India', 'Indian National Congress', 'Mahatma Gandhi was associated with the Indian National Congress.'),
(163, 'Political of India', 'Who was the first President of independent India?', 'Dr. Rajendra Prasad', 'Dr. B.R. Ambedkar', 'Dr. S. Radhakrishnan', 'Dr. Zakir Hussain', 'Dr. Rajendra Prasad', 'Dr. Rajendra Prasad served as the first President of India from 1950 to 1962.'),
(164, 'Political of India', 'Which year was the Indian Constitution adopted?', '1950', '1947', '1949', '1952', '1950', 'The Indian Constitution was adopted on January 26, 1950.'),
(165, 'Political of India', 'Who was the first female Prime Minister of India?', 'Indira Gandhi', 'Sonia Gandhi', 'Sushma Swaraj', 'Pratibha Patil', 'Indira Gandhi', 'Indira Gandhi was the first female Prime Minister of India, serving from 1966 to 1977 and then from 1980 until her assassination in 1984.'),
(166, 'Political of India', 'Which city is known as the political capital of India?', 'New Delhi', 'Mumbai', 'Kolkata', 'Chennai', 'New Delhi', 'New Delhi is regarded as the political capital of India, housing the country\'s government institutions.'),
(167, 'Political of India', 'What is the maximum number of members that can be appointed to the Rajya Sabha?', '250', '238', '245', '252', '250', 'The Rajya Sabha can have a maximum of 250 members.'),
(168, 'Political of India', 'Which amendment lowered the voting age in India from 21 to 18?', '61st Amendment', '68th Amendment', '74th Amendment', '84th Amendment', '61st Amendment', 'The 61st Amendment Act of 1988 lowered the voting age from 21 to 18 in India.'),
(169, 'Political of India', 'Who is the current Prime Minister of India?', 'Narendra Modi', 'Rahul Gandhi', 'Amit Shah', 'Manmohan Singh', 'Narendra Modi', 'As of the latest data, Narendra Modi is the Prime Minister of India.'),
(170, 'Political of India', 'Which document serves as the supreme law of India?', 'Constitution of India', 'Indian Penal Code', 'Citizenship Act', 'Election Commission Rules', 'Constitution of India', 'The Constitution of India is considered the supreme law of the country.'),
(171, 'Political of India', 'Who is known as the \"Architect of the Indian Constitution\"?', 'Dr. B.R. Ambedkar', 'Jawaharlal Nehru', 'Sardar Vallabhbhai Patel', 'Maulana Abul Kalam Azad', 'Dr. B.R. Ambedkar', 'Dr. B.R. Ambedkar is recognized as the \"Architect of the Indian Constitution.\"'),
(172, 'Political of India', 'Which Indian political leader was known as the \"Missile Man of India\"?', 'APJ Abdul Kalam', 'Jawaharlal Nehru', 'Indira Gandhi', 'Rajiv Gandhi', 'APJ Abdul Kalam', 'APJ Abdul Kalam earned the title of \"Missile Man of India\" for his contributions to India\'s missile technology.'),
(173, 'Political of India', 'Which Indian state has the maximum number of seats in the Lok Sabha?', 'Uttar Pradesh', 'Maharashtra', 'Bihar', 'West Bengal', 'Uttar Pradesh', 'Uttar Pradesh has the highest number of seats in the Lok Sabha.'),
(174, 'Political of India', 'Who was the first Deputy Prime Minister of India?', 'Sardar Vallabhbhai Patel', 'Jawaharlal Nehru', 'Indira Gandhi', 'Lal Bahadur Shastri', 'Sardar Vallabhbhai Patel', 'Sardar Vallabhbhai Patel served as the first Deputy Prime Minister of India.'),
(175, 'Political of India', 'Which Indian political party was founded by Syama Prasad Mookerjee?', 'Bharatiya Jana Sangh', 'Indian National Congress', 'Bahujan Samaj Party', 'Communist Party of India', 'Bharatiya Jana Sangh', 'Syama Prasad Mookerjee founded the Bharatiya Jana Sangh, which later evolved into the Bharatiya Janata Party (BJP).'),
(176, 'Political of India', 'Who is the current President of India?', 'Ram Nath Kovind', 'Pranab Mukherjee', 'Venkaiah Naidu', 'K. R. Narayanan', 'Ram Nath Kovind', 'As of the latest data, Ram Nath Kovind is the President of India.'),
(177, 'Political of India', 'Which article of the Indian Constitution deals with the Governor of states?', 'Article 153', 'Article 356', 'Article 239', 'Article 370', 'Article 153', 'Article 153 of the Indian Constitution deals with the Governor of states.'),
(178, 'Political of India', 'Which Indian Prime Minister was awarded the Bharat Ratna posthumously?', 'Lal Bahadur Shastri', 'Rajiv Gandhi', 'Indira Gandhi', 'Atal Bihari Vajpayee', 'Lal Bahadur Shastri', 'Lal Bahadur Shastri was posthumously awarded the Bharat Ratna, India\'s highest civilian award.'),
(179, 'Political of India', 'Which Indian state was the first to implement the Panchayati Raj system?', 'Rajasthan', 'Maharashtra', 'West Bengal', 'Kerala', 'Rajasthan', 'Rajasthan was the first state to implement the Panchayati Raj system in India.'),
(180, 'Political of India', 'Who was the first female President of India?', 'Pratibha Patil', 'Indira Gandhi', 'Sonia Gandhi', 'Sheila Dikshit', 'Pratibha Patil', 'Pratibha Patil was the first female President of India, serving from 2007 to 2012.'),
(181, 'Political of India', 'Which Indian political leader is known for the slogan \"Jai Jawan Jai Kisan\"?', 'Lal Bahadur Shastri', 'Indira Gandhi', 'Atal Bihari Vajpayee', 'Morarji Desai', 'Lal Bahadur Shastri', 'Lal Bahadur Shastri is known for the slogan \"Jai Jawan Jai Kisan,\" emphasizing the importance of soldiers and farmers.'),
(182, 'Political of India', 'Which year was the Indian National Congress founded?', '1885', '1905', '1920', '1942', '1885', 'The Indian National Congress was founded in 1885.'),
(183, 'Political of India', 'Who was the first Chief Minister of independent India?', 'Jawaharlal Nehru', 'Sardar Vallabhbhai Patel', 'Dr. Rajendra Prasad', 'Govind Ballabh Pant', 'Govind Ballabh Pant', 'Govind Ballabh Pant served as the first Chief Minister of independent India for the United Provinces (now Uttar Pradesh).'),
(184, 'Political of India', 'Which Indian state has a bicameral legislature?', 'Maharashtra', 'Karnataka', 'Tamil Nadu', 'Uttar Pradesh', 'Karnataka', 'Karnataka is one of the Indian states with a bicameral legislature, consisting of the Vidhana Sabha (Legislative Assembly) and the Vidhana Parishad (Legislative Council).'),
(185, 'Political of India', 'Who introduced the concept of \"Panchsheel\" in India\'s foreign policy?', 'Jawaharlal Nehru', 'Indira Gandhi', 'Atal Bihari Vajpayee', 'Morarji Desai', 'Jawaharlal Nehru', 'Jawaharlal Nehru introduced the \"Panchsheel\" or Five Principles of Peaceful Coexistence in India\'s foreign policy.'),
(186, 'Political of India', 'Which Indian state was the first to implement the Right to Information (RTI) Act?', 'Rajasthan', 'Maharashtra', 'Uttar Pradesh', 'Kerala', 'Rajasthan', 'Rajasthan was the first state in India to implement the Right to Information (RTI) Act.'),
(187, 'Political of India', 'Who was the first Deputy Prime Minister of India?', 'Sardar Vallabhbhai Patel', 'Jawaharlal Nehru', 'Indira Gandhi', 'Lal Bahadur Shastri', 'Sardar Vallabhbhai Patel', 'Sardar Vallabhbhai Patel served as the first Deputy Prime Minister of India.'),
(188, 'Political of India', 'Which Indian state was the first to achieve 100% primary education?', 'Kerala', 'Tamil Nadu', 'Karnataka', 'Andhra Pradesh', 'Kerala', 'Kerala was the first Indian state to achieve 100% primary education.'),
(189, 'Political of India', 'Which Indian leader is known for the slogan \"Swaraj is my birthright and I shall have it\"?', 'Bal Gangadhar Tilak', 'Mahatma Gandhi', 'Gopal Krishna Gokhale', 'Jawaharlal Nehru', 'Bal Gangadhar Tilak', 'Bal Gangadhar Tilak coined the slogan \"Swaraj is my birthright and I shall have it\" during the Indian independence movement.'),
(190, 'Political of India', 'Which Indian political party formed the government after India gained independence in 1947?', 'Indian National Congress', 'Bharatiya Jana Sangh', 'Communist Party of India', 'All India Forward Bloc', 'Indian National Congress', 'The Indian National Congress formed the government after India gained independence in 1947.'),
(191, 'Political of India', 'Who was the first woman Speaker of the Lok Sabha?', 'Meira Kumar', 'Sumitra Mahajan', 'Sushma Swaraj', 'Indira Gandhi', 'Meira Kumar', 'Meira Kumar was the first woman Speaker of the Lok Sabha, serving from 2009 to 2014.'),
(192, 'Political of India', 'Which Indian state has the highest number of seats in the Rajya Sabha?', 'Uttar Pradesh', 'Maharashtra', 'Bihar', 'West Bengal', 'Uttar Pradesh', 'Uttar Pradesh has the highest number of seats in the Rajya Sabha.'),
(193, 'Political of India', 'Who was the first Chief Justice of India?', 'Harilal Jekisundas Kania', 'Mehr Chand Mahajan', 'Bijan Kumar Mukherjea', 'Patanjali Sastri', 'Harilal Jekisundas Kania', 'Harilal Jekisundas Kania served as the first Chief Justice of India.'),
(194, 'Political of India', 'Which Indian political leader is known for the slogan \"Aaram Haram Hai\"?', 'Atal Bihari Vajpayee', 'Lal Bahadur Shastri', 'Indira Gandhi', 'Morarji Desai', 'Lal Bahadur Shastri', 'Lal Bahadur Shastri coined the slogan \"Aaram Haram Hai\" to promote hard work and productivity.'),
(195, 'Political of India', 'Which Indian state has the highest number of Lok Sabha seats?', 'Uttar Pradesh', 'Maharashtra', 'West Bengal', 'Bihar', 'Uttar Pradesh', 'Uttar Pradesh has the highest number of Lok Sabha seats.'),
(196, 'Political of India', 'Who is known as the \"Lion of Punjab\"?', 'Lala Lajpat Rai', 'Bhagat Singh', 'Dadabhai Naoroji', 'Raja Ram Mohan Roy', 'Lala Lajpat Rai', 'Lala Lajpat Rai is known as the \"Lion of Punjab\" for his contributions to the Indian independence movement.'),
(197, 'Political of India', 'Which Indian Prime Minister introduced the economic liberalization policy in 1991?', 'P.V. Narasimha Rao', 'Rajiv Gandhi', 'Indira Gandhi', 'Atal Bihari Vajpayee', 'P.V. Narasimha Rao', 'P.V. Narasimha Rao initiated the economic liberalization policy in 1991 as Prime Minister of India.'),
(198, 'Political of India', 'Who is the first and only female Chief Minister of Delhi?', 'Sheila Dikshit', 'Sushma Swaraj', 'Mayawati', 'Mamata Banerjee', 'Sheila Dikshit', 'Sheila Dikshit was the first and only female Chief Minister of Delhi, serving for three consecutive terms.'),
(199, 'Political of India', 'Which Indian state has the highest number of Rajya Sabha seats?', 'Uttar Pradesh', 'Maharashtra', 'West Bengal', 'Bihar', 'Uttar Pradesh', 'Uttar Pradesh has the highest number of Rajya Sabha seats.'),
(200, 'keyboard', 'how many keys are there in keyboard', '101', '102', '103', '104', '102', 'yudtyjfghfg'),
(201, 'keyboard', 'how many navigation key are there in keyboard', '4', '3', '2', '1', '4', 'sdfsfsdfsdfsdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `q_paper`
--

CREATE TABLE `q_paper` (
  `id` int(30) NOT NULL,
  `board` varchar(30) NOT NULL,
  `standard` varchar(30) NOT NULL,
  `year` int(30) NOT NULL,
  `month` varchar(40) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `q_paper`
--

INSERT INTO `q_paper` (`id`, `board`, `standard`, `year`, `month`, `subject`, `pdf`, `description`) VALUES
(1, '', '10th std maharashtra board', 2023, '', 'English', '2023english.pdf', 'Maharashtra 10th SSC Board English Question Paper 2023'),
(2, '', '10th std maharashtra board', 2023, '', 'Hindi', '2023hindi.pdf', 'Maharashtra 10th SSC Board Hindi Question Paper 2023'),
(3, '', '10th std maharashtra board', 2023, '', 'Marathi', '2023marathi.pdf', 'Maharashtra 10th SSC Board Marathi Question Paper 2023'),
(4, '', '10th std maharashtra board', 2023, '', 'Math part1', '2023mathpart1.pdf', 'Maharashtra 10th SSC Board Math part1 Question Paper 2023'),
(5, '', '10th std maharashtra board', 2023, '', 'Math part2', '2023mathpart2.pdf', 'Maharashtra 10th SSC Board Math part2 Question Paper 2023'),
(6, '', '10th std maharashtra board', 2023, '', 'Science part1', '2023sciencepart1.pdf', 'Maharashtra 10th SSC Board Science part1 Question Paper 2023'),
(7, '', '10th std maharashtra board', 2023, '', 'Science part2', '2023sciencepart2.pdf', 'Maharashtra 10th SSC Board Science part2 Question Paper 2023'),
(8, '', '10th std maharashtra board', 2023, '', 'History and political', '2023historyandpolitical.pdf', 'Maharashtra 10th SSC Board History and Political Question Paper 2023'),
(9, '', '10th std maharashtra board', 2023, '', 'Geography', '2023geography.pdf', 'Maharashtra 10th SSC Board Geography Question Paper 2023'),
(10, '', '10th std maharashtra board', 2022, '', 'English', '2022english.pdf', 'Maharashtra 10th SSC Board English Question Paper 2022'),
(11, '', '10th std maharashtra board', 2022, '', 'Hindi', '2022hindi.pdf', 'Maharashtra 10th SSC Board Hindi Question Paper 2022'),
(12, '', '10th std maharashtra board', 2022, '', 'Marathi', '2022marathi.pdf', 'Maharashtra 10th SSC Board Marathi Question Paper 2022'),
(13, '', '10th std maharashtra board', 2022, '', 'Math part1', '2022mathpart1.pdf', 'Maharashtra 10th SSC Board Math part1 Question Paper 2022'),
(14, '', '10th std maharashtra board', 2022, '', 'Math part2', '2022mathpart2.pdf', 'Maharashtra 10th SSC Board Math part2 Question Paper 2022'),
(15, '', '10th std maharashtra board', 2022, '', 'Science part1', '2022sciencepart1.pdf', 'Maharashtra 10th SSC Board Science part1 Question Paper 2022'),
(16, '', '10th std maharashtra board', 2022, '', 'Science part2', '2022sciencepart2.pdf', 'Maharashtra 10th SSC Board Science part2 Question Paper 2022'),
(17, '', '10th std maharashtra board', 2022, '', 'History and political', '2022historyandpolitical.pdf', 'Maharashtra 10th SSC Board History and Political Question Paper 2022'),
(18, '', '10th std maharashtra board', 2022, '', 'Geography', '2022geography.pdf', 'Maharashtra 10th SSC Board Geography Question Paper 2022'),
(19, '', '10th std maharashtra board', 2021, '', 'English', '2021english.pdf', 'Maharashtra 10th SSC Board English Question Paper 2021'),
(20, '', '10th std maharashtra board', 2021, '', 'Hindi', '2021hindi.pdf', 'Maharashtra 10th SSC Board Hindi Question Paper 2021'),
(21, '', '10th std maharashtra board', 2021, '', 'Marathi', '2021marathi.pdf', 'Maharashtra 10th SSC Board Marathi Question Paper 2021'),
(22, '', '10th std maharashtra board', 2021, '', 'Math part1', '2021mathpart1.pdf', 'Maharashtra 10th SSC Board Math part1 Question Paper 2021'),
(23, '', '10th std maharashtra board', 2021, '', 'Math part2', '2021mathpart2.pdf', 'Maharashtra 10th SSC Board Math part2 Question Paper 2021'),
(24, '', '10th std maharashtra board', 2021, '', 'Science part1', '2021sciencepart1.pdf', 'Maharashtra 10th SSC Board Science part1 Question Paper 2021'),
(25, '', '10th std maharashtra board', 2021, '', 'Science part2', '2021sciencepart2.pdf', 'Maharashtra 10th SSC Board Science part2 Question Paper 2021'),
(26, '', '10th std maharashtra board', 2021, '', 'History and political', '2021historyandpolitical.pdf', 'Maharashtra 10th SSC Board History and Political Question Paper 2021'),
(27, '', '10th std maharashtra board', 2021, '', 'Geography', '2021geography.pdf', 'Maharashtra 10th SSC Board Geography Question Paper 2021'),
(28, '', '10th std maharashtra board', 2020, '', 'English', '2020english.pdf', 'Maharashtra 10th SSC Board English Question Paper 2020'),
(29, '', '10th std maharashtra board', 2020, '', 'Hindi', '2020hindi.pdf', 'Maharashtra 10th SSC Board Hindi Question Paper 2020'),
(30, '', '10th std maharashtra board', 2020, '', 'Marathi', '2020marathi.pdf', 'Maharashtra 10th SSC Board Marathi Question Paper 2020'),
(31, '', '10th std maharashtra board', 2020, '', 'Math part1', '2020mathpart1.pdf', 'Maharashtra 10th SSC Board Math part1 Question Paper 2020'),
(32, '', '10th std maharashtra board', 2020, '', 'Math part2', '2020mathpart2.pdf', 'Maharashtra 10th SSC Board Math part2 Question Paper 2020'),
(33, '', '10th std maharashtra board', 2020, '', 'Science part1', '2020sciencepart1.pdf', 'Maharashtra 10th SSC Board Science part1 Question Paper 2020'),
(34, '', '10th std maharashtra board', 2020, '', 'Science part2', '2020sciencepart2.pdf', 'Maharashtra 10th SSC Board Science part2 Question Paper 2020'),
(35, '', '10th std maharashtra board', 2020, '', 'History and political', '2020historyandpolitical.pdf', 'Maharashtra 10th SSC Board History and Political Question Paper 2020'),
(36, '', '10th std maharashtra board', 2020, '', 'Geography', '2020geography.pdf', 'Maharashtra 10th SSC Board Geography Question Paper 2020'),
(37, '', '10th std maharashtra board', 2019, '', 'English', '2019english.pdf', 'Maharashtra 10th SSC Board English Question Paper 2019'),
(38, '', '10th std maharashtra board', 2019, '', 'Hindi', '2019hindi.pdf', 'Maharashtra 10th SSC Board Hindi Question Paper 2019'),
(39, '', '10th std maharashtra board', 2019, '', 'Marathi', '2019marathi.pdf', 'Maharashtra 10th SSC Board Marathi Question Paper 2019'),
(40, '', '10th std maharashtra board', 2019, '', 'Math part1', '2019mathpart1.pdf', 'Maharashtra 10th SSC Board Math part1 Question Paper 2019'),
(41, '', '10th std maharashtra board', 2019, '', 'Math part2', '2019mathpart2.pdf', 'Maharashtra 10th SSC Board Math part2 Question Paper 2019'),
(42, '', '10th std maharashtra board', 2019, '', 'Science part1', '2019sciencepart1.pdf', 'Maharashtra 10th SSC Board Science part1 Question Paper 2019'),
(43, '', '10th std maharashtra board', 2019, '', 'Science part2', '2019sciencepart2.pdf', 'Maharashtra 10th SSC Board Science part2 Question Paper 2019'),
(44, '', '10th std maharashtra board', 2019, '', 'History and political', '2019historyandpolitical.pdf', 'Maharashtra 10th SSC Board History and Political Question Paper 2019'),
(45, '', '10th std maharashtra board', 2019, '', 'Geography', '2019geography.pdf', 'Maharashtra 10th SSC Board Geography Question Paper 2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bc_data`
--
ALTER TABLE `bc_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gk_test`
--
ALTER TABLE `gk_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `q_paper`
--
ALTER TABLE `q_paper`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bc_data`
--
ALTER TABLE `bc_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `gk_test`
--
ALTER TABLE `gk_test`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `q_paper`
--
ALTER TABLE `q_paper`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
