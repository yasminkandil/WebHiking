-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 11:09 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hikingpr`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminresponse`
--

CREATE TABLE `adminresponse` (
  `ID` int(20) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminresponse`
--

INSERT INTO `adminresponse` (`ID`, `Email`, `Message`) VALUES
(3, 'Yassoo@gmail.com', 'aaaaaaaaaaaa'),
(6, 'Sara@gmail.com', 'aaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `Group_ID` int(11) NOT NULL,
  `GroupName` varchar(20) NOT NULL,
  `GroupLocation` varchar(20) NOT NULL,
  `Participants` int(50) NOT NULL,
  `DestinationLink` varchar(100) NOT NULL,
  `mainphoto` varchar(500) NOT NULL,
  `Photo1` varchar(350) NOT NULL,
  `Photo2` varchar(350) NOT NULL,
  `Photo3` varchar(350) NOT NULL,
  `Photo4` varchar(350) NOT NULL,
  `Describtion` varchar(1000) NOT NULL,
  `PlaceName` varchar(250) NOT NULL,
  `TripStart` date NOT NULL,
  `TripEnd` date NOT NULL,
  `Price` int(100) NOT NULL,
  `Guided` varchar(100) NOT NULL,
  `included` varchar(200) NOT NULL,
  `notIncluded` varchar(200) NOT NULL,
  `otherTips` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`Group_ID`, `GroupName`, `GroupLocation`, `Participants`, `DestinationLink`, `mainphoto`, `Photo1`, `Photo2`, `Photo3`, `Photo4`, `Describtion`, `PlaceName`, `TripStart`, `TripEnd`, `Price`, `Guided`, `included`, `notIncluded`, `otherTips`) VALUES
(1, 'Blue Lagoon Trip', 'Blue Lagoon,Dahab', 5, 'https://goo.gl/maps/qS7RdH7Nqs74TdYM7', 'BlueLagoonnn.jpg', 'blue-lagoonn1.jpg', 'blue-lagoonn2.jpg', 'blue-lagoonn3.jpg', 'blue-lagoonn4.jpg', '\nThe Blue Lagoon is not located near any popular tourist destinations in a natural park which is how I imagine Dahab was decades ago before the area became as popular as it is today – when there was nothing but small Hushas, Beduin families, animals, and some hippies. Since the Blue Lagoon is about an hour north of the Dahab center, it’s an oasis of tranquility.Between the orange and brown Sinai Mountains, the wild sea, and the magical, turquoise-blue Lagoon, you can rest your soul and gain new energy. Additionally, when the sun rises and sets, the Sinai Mountains are illuminated in a golden-red color and are reflected in the crystal-clear water.\n\n', 'Blue Lagoon Trip Group', '2022-01-12', '2022-01-17', 600, 'Guided', 'Buses for transportation \nBottled water \nQualified Egyptologist guide\nEntry Fees\n30 min Horse carriage', 'Lunch (Optional)\r\nGratuities\r\nAny Optional Tours', '\r\nLet someone know of your hiking plans.\r\n Only take what\'s necessary for a safe, enjoyable hike to avoid carrying too much weight. \r\n Always bring enough water.\r\n Choose a trail you can handle and give yourself time to build up to more difficult levels. \r\n Hike with a companion.'),
(2, 'Wadi Degla', 'Maadi, Qattamiya, Ai', 2, 'https://goo.gl/maps/yAcfrX1bgWMuLUQm9', 'Wadi_Degla.jpg', 'degla.jpg', 'degla2.jpg', 'deglaa.png', 'hike.png', 'Wadi Degla is one of the important valleys, which extend from east to west with a length of 30 km. It passes through the limestone rocks that had remained in the marine environment during the Eocene Epoch in the eastern', 'Wadi Degla Trip Group', '2022-01-19', '2022-01-19', 600, 'not guided', 'Buses for transportation Bottled water,Qualified Egyptologist guide,Entry Fees,30 min Horse carriage', 'Lunch (Optional) Gratuities Any Optional Tours', 'Let someone know of your hiking plans. Only take what\'s necessary for a safe, enjoyable hike to avoid carrying too much weight. Always bring enough water. Choose a trail you can handle and give yourself time to build up to more difficult levels. Hike with a companion.'),
(3, 'Saint Catherine Grou', 'St Catherine Qesm Sh', 7, 'https://goo.gl/maps/kUcG3kVEZbMxgob77', 'saintcath.jpg', 'saint1.jpg', 'saint2.jpg', 'saint3.jpg', 'saint4.jpg', '\n\nSt. Catherine is distinguished by its high mountains and its valleys,  nature lovers come toenjoy it and to enjoy hiking all days of the year as in summer the temperature is less than Cairo for example by 10 degrees, due to the rise of St. Catherine above sea level, and in winter it is covered with snow in a wonderful view that is rarely is in Egypt.\n\nSaint Catherine has some eco-friendly lodges that you can stay over and enjoy.\n\nFrom the mountains of Saint Catherine, Mount Safsafah, Mount Abbas, Jabal al-Rabah, Mount Saint Catherine, Jabal Musa and Jabal al-Dak, Mount Girls, Mount Na\'aga, Black Mountain, Umm Shomer Mountain, and Red Mountain\n\n\n\n', 'Saint Catherine Trip Group', '2022-01-26', '2022-01-30', 1500, 'Guided', 'Buses for transportation Bottled water,Qualified Egyptologist guide,Entry Fees,30 min Horse carriage', 'Lunch (Optional) Gratuities Any Optional Tours', 'Let someone know of your hiking plans. Only take what\'s necessary for a safe, enjoyable hike to avoid carrying too much weight. Always bring enough water. Choose a trail you can handle and give yourself time to build up to more difficult levels. Hike with a companion.'),
(4, 'Mousa Group', 'Jabal MousaSaint Cat', 8, 'https://www.google.com/maps/place/Jabal+Mousa/@28.5395147,33.9709379,16z/data=!3m1!4b1!4m5!3m4!1s0x1', 'Mount_Moses.jpg', 'mousa 2.jpg', 'mousa 3.jpg', 'mousa 4.jpg', 'mont-sinai-montagne-de.jpg', 'Both tourists and pilgrims can hike to the top of the mountain, especially in winter. Most tourists start their trek at 2 a.m. so that they can reach the top during the night when it is still dark and see the breathtaking spectacle of dawn from the summit. ”', 'Mousa Trip Group', '2022-01-16', '2022-01-17', 1000, 'not guided', 'Buses for transportation Bottled water,Qualified Egyptologist guide,Entry Fees,30 min Horse carriage', 'Lunch (Optional) Gratuities Any Optional Tours', 'Let someone know of your hiking plans. Only take what\'s necessary for a safe, enjoyable hike to avoid carrying too much weight. Always bring enough water. Choose a trail you can handle and give yourself time to build up to more difficult levels. Hike with a companion.'),
(5, 'Sinai Desert', 'Nuweiba, South Sinai', 10, 'https://www.google.com/maps?q=sinai+mountain&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjHisCQy6X1AhXU8eAKHc_RDUM', 'sinaidesert.jpg', 'sinai 1.jpg', 'sinai 2.jpg', 'sinai 3.jpg', 'sinai 4.jpg', 'Mount Sinai, also known as Mount Moses or Mount Horeb, is a mountain in the South Sinai region of Egypt. Standing 7497ft (2285m) tall, the peak is best known as the possible location of the biblical Mount Sinai, where according to the both the Bible and the Quran, God told Moses the Ten Commandments.', 'Sinai Trip Group', '2022-02-09', '2022-01-11', 900, 'Guided', 'Buses for transportation Bottled water,Qualified Egyptologist guide,Entry Fees,30 min Horse carriage', 'Lunch (Optional) Gratuities Any Optional Tours', 'Let someone know of your hiking plans. Only take what\'s necessary for a safe, enjoyable hike to avoid carrying too much weight. Always bring enough water. Choose a trail you can handle and give yourself time to build up to more difficult levels. Hike with a companion.'),
(6, 'Red Sea Group', '', 0, 'https://www.google.com/maps/place/Red+Sea+Mountains/@22.9999986,34.9824904,14z/data=!3m1!4b1!4m5!3m4', 'RedSea.jpg', 'red sea 1.jpg', 'red sea 2.jpg', 'red sea 3.jpg', 'red sea .jpg', 'The Red Sea Hills are composed of the exposed Neoproterozoic volcano-sedimentary rock of the Arabian-Nubian Shield. Although the rock itself is 550–900 million years old, the mountains were created by uplift when the Red Sea itself was formed in the Oligocene, only some 23–34 million years ago.', 'Red Sea Trip Group', '2022-03-14', '2022-03-16', 1100, 'Guided', 'Buses for transportation Bottled water,Qualified Egyptologist guide,Entry Fees,30 min Horse carriage', 'Lunch (Optional) Gratuities Any Optional Tours', 'Let someone know of your hiking plans. Only take what\'s necessary for a safe, enjoyable hike to avoid carrying too much weight. Always bring enough water. Choose a trail you can handle and give yourself time to build up to more difficult levels. Hike with a companion.'),
(11, 'waha', 'waha', 4, 'hhjjjj', 'Lava_bk.jpg', 'Lava_dn.jpg', 'Lava_ft.jpg', 'Lava_lf.jpg', 'Lava_rt.jpg', ' kk', 'jj', '2022-01-14', '2022-01-29', 750, 'on', ' l', ' m', ' x');

-- --------------------------------------------------------

--
-- Table structure for table `groupssuggestions`
--

CREATE TABLE `groupssuggestions` (
  `ID` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `GroupName` varchar(500) NOT NULL,
  `GroupLocation` varchar(500) NOT NULL,
  `Photo` varchar(300) NOT NULL,
  `Describtion` varchar(500) NOT NULL,
  `ActivitiesIdeas` varchar(500) NOT NULL,
  `CheckinDate` date NOT NULL,
  `CheckoutDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupssuggestions`
--

INSERT INTO `groupssuggestions` (`ID`, `Email`, `GroupName`, `GroupLocation`, `Photo`, `Describtion`, `ActivitiesIdeas`, `CheckinDate`, `CheckoutDate`) VALUES
(15, 'nour@gmail.com', 'sharm el sheikh', 'serenity', '8.jpg', 'nice place', 'aqua', '2022-01-25', '2022-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `investigations`
--

CREATE TABLE `investigations` (
  `id` int(11) NOT NULL,
  `FName` varchar(100) NOT NULL,
  `LName` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Penalty` varchar(100) NOT NULL,
  `Reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investigations`
--

INSERT INTO `investigations` (`id`, `FName`, `LName`, `Email`, `Penalty`, `Reason`) VALUES
(1, 'Yasmin', 'kandil', 'yassoo@gmail.com', 'Pay', 'Rude'),
(3, 'yara', 'sherief', 'yara@gmail.com', 'Pay', 'not comitted'),
(4, 'Amira', 'Mohamed', 'amira@gmail.com', 'Pay', 'delayed work'),
(5, 'yassin', 'Kandil', 'Yassin@gmail.com', 'Pay', 'Rude');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(11) NOT NULL,
  `outgoing_msg_id` int(11) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `Comments` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `Comments`) VALUES
(43, 911660828, 1638941491, 'Salma', ''),
(44, 911660828, 1638941491, 'Salma', ''),
(45, 814785226, 1638941491, 'Salmaa', ''),
(46, 911660828, 1638941491, 'Hello', ''),
(47, 911660828, 1638941491, 'Hii', ''),
(48, 1638941491, 911660828, 'Md', ''),
(49, 911660828, 1638941491, 'hellooo', ''),
(50, 911660828, 1638941491, '.............................................', ''),
(51, 1638941491, 814785226, 'aaaaaaaaaaa', ''),
(53, 1230634989, 1240722163, 'hi', ''),
(54, 1240722163, 1230634989, 'hello', ''),
(55, 1230634989, 1240722163, 'how are you?', ''),
(56, 1137003672, 1230634989, 'Hello', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `UserMail` varchar(100) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `PriceOfOneItem` int(100) NOT NULL,
  `Total` int(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Zip` int(100) NOT NULL,
  `CardName` varchar(100) NOT NULL,
  `CreditCardNum` int(100) NOT NULL,
  `ExpMonth` varchar(100) NOT NULL,
  `ExpYear` int(100) NOT NULL,
  `CVV` int(100) NOT NULL,
  `DateOfOrder` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `user_id`, `UserMail`, `ProductName`, `Quantity`, `PriceOfOneItem`, `Total`, `Address`, `City`, `State`, `Zip`, `CardName`, `CreditCardNum`, `ExpMonth`, `ExpYear`, `CVV`, `DateOfOrder`) VALUES
(7, 1, 'yassoo@gmail.com', 'Hiking boots', 1, 450, 450, 'tagamoa', '0', '0', 10001, 'yasmin', 2147483647, 'sept', 4, 7, '2022-01-21'),
(8, 1, 'yassoo@gmail.com', 'Hiking Bag', 1, 500, 950, 'tagamoa', '0', '0', 10001, 'yasmin', 2147483647, 'sept', 4, 7, '2022-01-21'),
(9, 8, 'youssef@gmail.com', 'Trekking Pole', 1, 235, 235, 'nasr city', 'cairo', 'Egypt', 11111, 'Youssef', 2147483647, 'september', 2019, 6, '2022-01-21'),
(10, 8, 'youssef@gmail.com', 'Hiking Tent', 1, 440, 675, 'nasr city', 'cairo', 'Egypt', 11111, 'Youssef', 2147483647, 'september', 2019, 6, '2022-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `review_aid`
--

CREATE TABLE `review_aid` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_aid`
--

INSERT INTO `review_aid` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'best product', 1621935691),
(7, 'Peter Parker', 5, 'it was really helpful', 1621939888),
(8, 'Donna Hubber', 1, 'just like the picture', 1621940010),
(9, 'yasmin', 3, 'great', 1642120481);

-- --------------------------------------------------------

--
-- Table structure for table `review_bag`
--

CREATE TABLE `review_bag` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_bag`
--

INSERT INTO `review_bag` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'best bag', 1621935691),
(7, 'Peter Parker', 5, 'love itttt', 1621939888),
(8, 'emily', 1, 'must try.', 1621940010),
(9, 'mohamed', 3, 'best product here', 1642120481);

-- --------------------------------------------------------

--
-- Table structure for table `review_bottle`
--

CREATE TABLE `review_bottle` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_bottle`
--

INSERT INTO `review_bottle` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'preserve hot and cold water', 1621935691),
(7, 'Peter Parker', 5, 'i love it', 1621939888),
(8, 'Donna Hubber', 1, 'just like the picture', 1621940010),
(9, 'yasmin', 3, 'great', 1642120481);

-- --------------------------------------------------------

--
-- Table structure for table `review_hiking`
--

CREATE TABLE `review_hiking` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_hiking`
--

INSERT INTO `review_hiking` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'Nice Product, Value for money', 1621935691),
(7, 'Peter Parker', 5, 'Nice Product with Good Feature.', 1621939888),
(8, 'Donna Hubber', 1, 'Worst Product, lost my money.', 1621940010),
(9, 'yasmin', 3, 'gggg', 1642120481),
(10, 'rogina', 4, 'very good product', 1642121704),
(11, 'Amir', 5, 'very good', 1642294057),
(12, 'mohamed', 2, 'nice', 1642884698);

-- --------------------------------------------------------

--
-- Table structure for table `review_jack`
--

CREATE TABLE `review_jack` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_jack`
--

INSERT INTO `review_jack` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'great for cold weather', 1621935691),
(7, 'Peter Parker', 5, 'waterproof', 1621939888),
(8, 'Donna Hubber', 1, 'just like the picture', 1621940010),
(9, 'yasmin', 3, 'great', 1642120481);

-- --------------------------------------------------------

--
-- Table structure for table `review_lamp`
--

CREATE TABLE `review_lamp` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_lamp`
--

INSERT INTO `review_lamp` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'great batteries', 1621935691),
(7, 'Peter Parker', 5, 'best light', 1621939888),
(8, 'Donna Hubber', 1, 'just like the picture', 1621940010),
(9, 'yasmin', 3, 'great', 1642120481);

-- --------------------------------------------------------

--
-- Table structure for table `review_pole`
--

CREATE TABLE `review_pole` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_pole`
--

INSERT INTO `review_pole` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, ' ahmed', 4, 'Nice quality', 1621935691),
(7, 'Peter ', 5, 'Nice pole', 1621939888),
(8, 'Donna ', 1, 'great.', 1621940010),
(9, 'yasmin', 3, 'will try again', 1642120481);

-- --------------------------------------------------------

--
-- Table structure for table `review_sleep`
--

CREATE TABLE `review_sleep` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_sleep`
--

INSERT INTO `review_sleep` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'comfortable', 1621935691),
(7, 'Peter Parker', 5, 'havent slept like this in ages', 1621939888),
(8, 'Donna Hubber', 1, 'luvv it', 1621940010),
(9, 'yasmin', 3, 'the best', 1642120481);

-- --------------------------------------------------------

--
-- Table structure for table `review_tent`
--

CREATE TABLE `review_tent` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_tent`
--

INSERT INTO `review_tent` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'great for cold weather', 1621935691),
(7, 'Peter Parker', 5, 'perfect protection', 1621939888),
(8, 'Donna Hubber', 1, 'just like the picture', 1621940010),
(9, 'yasmin', 3, 'great', 1642120481);

-- --------------------------------------------------------

--
-- Table structure for table `review_tools`
--

CREATE TABLE `review_tools` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_tools`
--

INSERT INTO `review_tools` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'salma osama', 4, 'Nice Product, Value for money', 1621935691),
(7, 'mona', 5, 'Nice Product ', 1621939888),
(8, 'mostafa', 1, 'not bad', 1621940010),
(9, 'yaso', 3, 'will buy again', 1642120481);

-- --------------------------------------------------------

--
-- Table structure for table `surveyquestions`
--

CREATE TABLE `surveyquestions` (
  `ID` int(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `First` varchar(200) NOT NULL,
  `Second` varchar(200) NOT NULL,
  `Third` varchar(200) NOT NULL,
  `Fourth` varchar(200) NOT NULL,
  `Fifth` varchar(200) NOT NULL,
  `Comments` varchar(200) NOT NULL,
  `Ratesc` int(3) NOT NULL,
  `Ratebl` int(2) NOT NULL,
  `Raters` int(2) NOT NULL,
  `Ratem` int(2) NOT NULL,
  `Ratesd` int(2) NOT NULL,
  `Ratewd` int(2) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surveyquestions`
--

INSERT INTO `surveyquestions` (`ID`, `Email`, `First`, `Second`, `Third`, `Fourth`, `Fifth`, `Comments`, `Ratesc`, `Ratebl`, `Raters`, `Ratem`, `Ratesd`, `Ratewd`, `type`) VALUES
(14, 'Yasoo@gmail.com', 'Twice', 'A through hiker who is doing the entire\r\n                        Appalachian trail this year ', 'Mostly, we did our best', 'No', 'Social media', '			ddd', 5, 0, 0, 0, 0, 0, 'Saint Catherine'),
(15, 'Yas@gmail.com', 'Twice', 'An overnight backpacker (maximum 4 nights)', 'No, we were a couple in a relationship and we are no longer', '', 'Social media', '			', 0, 0, 0, 4, 0, 0, 'Mousa'),
(26, 'yassoo@gmail.com', 'Twice', 'A through hiker who is doing the entire\r\n                        Appalachian trail this year ', 'Yes', 'No', 'Recommended by Friends', '			', 0, 0, 0, 0, 0, 5, 'Wadi Degla'),
(27, 'ahmed@gmail.com', 'Twice', 'A through hiker who is doing the entire\r\n                        Appalachian trail this year ', 'Other', 'No', 'Recommended by Friends', '			', 0, 0, 0, 0, 3, 0, 'Sinai Desert'),
(28, 'Amir@gmail.com', 'Once', 'A long distance hiker (5 or more nights)', 'Yes', 'No', 'Recommended by Friends', '	no		', 0, 3, 0, 0, 0, 0, 'Blue Lagoon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `desc`, `image`, `price`) VALUES
(1, 'Hiking boots', ' offer better ankle coverage, which helps prevent ankle sprains, and much stiffer midsoles, which provide better support', '1.jpg', 450.00),
(2, 'Hiking tool kit', ' It’s perfect for campers, hikers, or outdoors bound excursions and sized to fit in your backpack or any small vehicle compartment.', '2.jpg', 650.00),
(3, 'Hiking Bag', 'CUSTOMIZABLE COMFORT: Backpack for men, women, and youth; Adjusts to fit all frames comfortably; Notched foam stabilizer and mesh covering means you can wear this pack for hours', '3.jpg', 500.00),
(4, 'Trekking Pole', 'Built to last, these walking sticks for hiking are crafted from aircraft-grade aluminum yet weigh almost 4oz less than your average batons.Ideal for use with gloves & in wet weather!', '4.jpg', 235.00),
(5, 'Sleeping bag', 'sleeping bags for camping include a convenient internal stuff pocket on liner for storing your belongings and an external compressed oxford sack.', '5.jpg', 359.00),
(6, ' Our Unique jackets', 'Crafted of a waterproof 100% nylon shell, this rain jacket is lightweight while remaining protective. It also packs into your hand pocket.', '6.jpg', 170.00),
(7, 'Head lamp', ' Illuminates up to 80 meters with a 260-lumen beam of LED light in high mode - This head lamp can light up the room, or the campsite, with ease.', '7.jpg', 200.00),
(8, 'Hiking Tent', ' EASY TO SET UP - 1 pole with Clip-pole attachment for lighter weight, easier set up and better breath-ability. Perfect for 3 season backpacking trips', '8.jpg', 440.00),
(9, 'First Aid-kit', ' hiking first aid kit for car,travel and home,fully packed with 195-pieces complete all-purpose first aid supplies and additional 35-piece small first aid kit', '9.jpg', 150.00),
(10, ' Monument water bottle', 'The Monument water bottle offers a flexible yet sturdy design that enables it to fold into 1/3rd it’s size without compromising it’s integrity when in use', '10.jpg', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `tripforhiker`
--

CREATE TABLE `tripforhiker` (
  `user_id` int(11) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `GroupSelected` int(6) NOT NULL,
  `Comments` varchar(300) NOT NULL,
  `ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tripforhiker`
--

INSERT INTO `tripforhiker` (`user_id`, `Username`, `GroupSelected`, `Comments`, `ID`) VALUES
(8, 'youssef@gmail.com', 2, '', 12),
(1, 'yassoo@gmail.com', 1, '', 13);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(200) NOT NULL,
  `unique_id` int(30) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `PhoneNumber` int(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Age` int(200) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  `AddPenalty` varchar(200) NOT NULL,
  `InvRequest` varchar(200) NOT NULL,
  `AddComment` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `unique_id`, `FirstName`, `LastName`, `Email`, `Password`, `PhoneNumber`, `Address`, `Gender`, `Age`, `Photo`, `AddPenalty`, `InvRequest`, `AddComment`, `Type`, `status`) VALUES
(1, 1340722163, 'Yasmin', 'kandil', 'yassoo@gmail.com', 'YasminKandil123', 1010, 'tagamoa', 'Female', 47, 'Blue-Lagoonn2.jpg', '', '', '', 'hiker', 'Offline now'),
(8, 1240782163, 'Youssef', 'kandil', 'yousseff@gmail.com', 'Youssef2000?', 100, 'tagamoa', 'Male', 26, 'Cesare_Beccaria.jpg', '', '', '', 'hiker', 'Offline now'),
(19, 1240722163, 'Nour', 'waleed', 'nour@gmail.com', 'Nour123?', 1010, 'masrelgedida', 'Female', 47, 'WhatsApp Image 2022-01-07 at 11.14.59 AM.jpeg', '', '', '', 'hiker', 'Active now'),
(20, 1230634989, 'Nada', 'Kandil', 'Nada@gmail.com', 'Nada123?', 1010, 'masrelgedeeda', 'Female', 47, 'Lava_ft.jpg', '', '', '', 'hiker', 'Offline now'),
(21, 1250634989, 'Mohamed', 'Kandil', 'Kandil@gmail.com', 'Mohamed123?', 1010, 'masrelgedeeda', 'Male', 47, 'Lava_up.jpg', '', '', '', 'admin', 'Active now'),
(22, 1086430702, 'Rogina', 'Michelle', 'Rogina@gmail.com', 'Rogina123?', 1010, 'masrelgedeeda', 'Female', 31, 'IMG-20181111-WA0018.jpg', '', '', '', 'auditor', 'Active now'),
(23, 488818070, 'Salma', 'Osama', 'Salma@gmail.com', 'SalmaOsama123?', 1010, 'masrelgedeeda', 'Female', 29, 'IMG-20181111-WA0011.jpg', '', '', '', 'HR', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminresponse`
--
ALTER TABLE `adminresponse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`Group_ID`);

--
-- Indexes for table `groupssuggestions`
--
ALTER TABLE `groupssuggestions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `investigations`
--
ALTER TABLE `investigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `sent_by` (`incoming_msg_id`),
  ADD KEY `received_by` (`outgoing_msg_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `review_aid`
--
ALTER TABLE `review_aid`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `review_bag`
--
ALTER TABLE `review_bag`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `review_bottle`
--
ALTER TABLE `review_bottle`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `review_hiking`
--
ALTER TABLE `review_hiking`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `review_jack`
--
ALTER TABLE `review_jack`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `review_lamp`
--
ALTER TABLE `review_lamp`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `review_pole`
--
ALTER TABLE `review_pole`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `review_sleep`
--
ALTER TABLE `review_sleep`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `review_tent`
--
ALTER TABLE `review_tent`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `review_tools`
--
ALTER TABLE `review_tools`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `surveyquestions`
--
ALTER TABLE `surveyquestions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tripforhiker`
--
ALTER TABLE `tripforhiker`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `GroupSelected` (`GroupSelected`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminresponse`
--
ALTER TABLE `adminresponse`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `Group_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `groupssuggestions`
--
ALTER TABLE `groupssuggestions`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `investigations`
--
ALTER TABLE `investigations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review_aid`
--
ALTER TABLE `review_aid`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review_bag`
--
ALTER TABLE `review_bag`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review_bottle`
--
ALTER TABLE `review_bottle`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review_hiking`
--
ALTER TABLE `review_hiking`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `review_jack`
--
ALTER TABLE `review_jack`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review_lamp`
--
ALTER TABLE `review_lamp`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review_pole`
--
ALTER TABLE `review_pole`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review_sleep`
--
ALTER TABLE `review_sleep`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review_tent`
--
ALTER TABLE `review_tent`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review_tools`
--
ALTER TABLE `review_tools`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `surveyquestions`
--
ALTER TABLE `surveyquestions`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tripforhiker`
--
ALTER TABLE `tripforhiker`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`ID`);

--
-- Constraints for table `tripforhiker`
--
ALTER TABLE `tripforhiker`
  ADD CONSTRAINT `tripforhiker_ibfk_1` FOREIGN KEY (`GroupSelected`) REFERENCES `groups` (`Group_ID`),
  ADD CONSTRAINT `tripforhiker_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
