-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 04:52 PM
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
-- Database: `lawyer_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass`) VALUES
('faizan', 'faizan2301f@aptechorangi.com'),
('faizan2301f@aptechorangi.com', 'fazian1234'),
('faizan2301f@aptechorangi.com', '12345'),
('faizan2301f@aptechorangi.com', '12345'),
('faizanshah03112557031@gmail.com', '12345\r\n'),
('admin1234@gmail.com', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `case_field` varchar(255) NOT NULL,
  `date` text NOT NULL,
  `time` time NOT NULL,
  `lawyer` varchar(255) NOT NULL,
  `lawyer_fee` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `city`, `email`, `contact`, `case_field`, `date`, `time`, `lawyer`, `lawyer_fee`, `status`) VALUES
(28, 'asad', 'lahore', 'faizanshah03112557031@gmail.com', '03191826708', 'criminal law', '2023-12-22', '05:35:00', 'bakar', '400$', 'true'),
(34, 'Faizan ', 'multan', 'faizanshah03112557031@gmail.com', '03112557031', 'Business Law', '24 November 2023', '12:37:00', 'Faizan ', '100$', 'true'),
(35, 'owais', 'karachi', 'faizanshah03112557031@gmail.com', '03191826708', 'Business Law', '2023-12-16', '06:12:00', 'Faizan ', '300$', 'true'),
(36, 'hassan', 'lahore', 'faizanshah03112557031@gmail.com', '03191826708', 'Cyber Law', '2023-12-26', '05:35:00', 'hassan', '200$', 'true'),
(38, 'hassan', 'lahore', 'faizanshah03112557031@gmail.com', '03191826708', 'Cyber Law', '2023-12-26', '05:35:00', 'hassan', '200$', 'true'),
(40, 'hassan', 'lahore', 'faizanshah03112557031@gmail.com', '03191826708', 'Cyber Law', '2023-12-26', '05:35:00', 'hassan', '200$', 'true'),
(51, 'hassan', 'lahore', 'faizanshah03112557031@gmail.com', '03191826708', 'Cyber Law', '2023-12-26', '05:35:00', 'hassan', '200$', 'true'),
(52, 'hassan', 'lahore', 'faizanshah03112557031@gmail.com', '03191826708', 'Cyber Law', '2023-12-26', '05:35:00', 'hassan', '200$', 'true'),
(53, 'hassan', 'lahore', 'faizanshah03112557031@gmail.com', '03191826708', 'Cyber Law', '2023-12-26', '05:35:00', 'hassan', '200$', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bar_council_id` varchar(255) NOT NULL,
  `practice_field` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `licenseNumber` varchar(255) NOT NULL,
  `yearOfAdmission` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `lawyer_fee` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`Id`, `name`, `email`, `image`, `phone`, `address`, `bar_council_id`, `practice_field`, `education`, `licenseNumber`, `yearOfAdmission`, `experience`, `lawyer_fee`, `status`) VALUES
(17, 'Hunain Shah', 'Hunainm99@gmail.com', 'lawyer4.jpg', '0322342552', 'alsadaf colony orangi-town karachi ', '342252', 'Business Law', 'LLM', '40041-3425436-5', '2023-11-12', '5', '100$', 'approved'),
(19, 'Faizan ', 'faizanshah03112557031@gmail.co', 'lawyer2.jpg', '03262383020', 'alsadaf colony orangi-town karachi ', '342252', 'Business Law', 'LLM', '42401-8081262-3', '2023-12-22', '5', '300$', 'approved'),
(20, 'hassan', 'hassanshah034@gmail.com', 'lawyer3.jpg', '03162735428', 'alsadaf colony orangi-town karachi ', '1440991', 'Cyber Law', 'PH.D.in LAW', '42401-8081262-3', '2023-12-09', '3', '200$', 'approved'),
(21, 'bakar', 'bakarsda231@gmail.com', 'lawyer1.jpg', '0322342552', 'alsadaasdf colony orangi-town karachi asdad', '234234', 'criminal law', 'PH.D.in LAW', '42401-8081262-3', '2023-12-16', '6', '400$', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers_blog`
--

CREATE TABLE `lawyers_blog` (
  `id` int(11) NOT NULL,
  `lawyer_name` varchar(255) NOT NULL,
  `lawyer_img` varchar(255) NOT NULL,
  `lawyer_field` varchar(255) NOT NULL,
  `blog_content` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lawyers_blog`
--

INSERT INTO `lawyers_blog` (`id`, `lawyer_name`, `lawyer_img`, `lawyer_field`, `blog_content`, `date`) VALUES
(6, 'Hunain Shah', '../image/lawyer4.jpg', 'Business Law', ' \"The Art of Negotiation in Business Law\"\r\n                    James Rodriguez, a seasoned business attorney, discusses effective negotiation strategies in the\r\n                    realm of business law and contract disputes', '2023-12-05 18:55:54'),
(8, 'Faizan ', '../image/lawyer2.jpg', 'Business Law', '  \"Family Matters: Legal Insights into Divorce and Custody\"\r\n                    Olivia Manning, a family law expert, provides advice on handling divorce, child custody, and related\r\n                    family law matters.', '2023-12-05 18:58:23'),
(9, 'bakar', '../image/lawyer1.jpg', 'criminal law', ' Criminal Defense Demystified: Understanding Your Rights\"\r\n                    Sophia Chang, a criminal defense attorney, educates readers on their rights when facing criminal\r\n                    charges and offers insights into the legal process.', '2023-12-05 18:59:16'),
(10, 'hassan', '../image/lawyer3.jpg', 'Cyber Law', '\"Cybersecurity in the Legal World: Protecting Client Data\"\r\n                    Grace Mitchell, a legal expert specializing in cybersecurity, shares insights into safeguarding\r\n                    sensitive client information, the latest cyber threats, an', '2023-12-05 18:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `laywer_category`
--

CREATE TABLE `laywer_category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laywer_category`
--

INSERT INTO `laywer_category` (`Id`, `Name`) VALUES
(1, 'civil law'),
(2, 'criminal law'),
(3, 'Family Law'),
(4, 'Business Law'),
(5, 'Education Law'),
(6, 'Cyber Law'),
(7, 'immigiration Law');

-- --------------------------------------------------------

--
-- Table structure for table `laywer_education`
--

CREATE TABLE `laywer_education` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laywer_education`
--

INSERT INTO `laywer_education` (`Id`, `Name`) VALUES
(1, 'LLB'),
(2, 'LLM'),
(3, 'PH.D.in LAW');

-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

CREATE TABLE `qa` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qa`
--

INSERT INTO `qa` (`id`, `question`, `answer`, `status`) VALUES
(27, 'How much do you charge for your legal services?', 'Our legal fees vary depending on the complexity of the case. We offer an initial consultation to assess your situation and provide a customized quote based on your needs.', 'true'),
(28, 'How can I schedule a consultation with your firm?', 'Scheduling a consultation is easy. You can [Call us/Submit an online form/Visit our office] to set up an appointment. During the consultation, we\\ll discuss your case and provide guidance on the next steps.', 'true'),
(29, 'How long does the legal process typically take?', 'The duration of a legal case varies depending on factors like complexity, court schedules, and negotiation timelines. We strive to efficiently move your case forward while ensuring a thorough and effective legal strategy.', 'true'),
(30, 'What sets your law firm apart from others?', 'Our law firm distinguishes itself through a commitment to [Quality/Personalized Service/Expertise]. We prioritize client needs, and our team works tirelessly to achieve the best possible outcomes.', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`) VALUES
(1, 'civil law', 'At our law firm, we understand the intricate nuances of civil law and are committed to providing comprehensive legal support to individuals and businesses alike. Our seasoned team of civil law experts excels in a wide range of areas, including contract disputes, property matters, personal injury claims, and more. With a focus on meticulous research, strategic planning, and effective advocacy, we navigate the complexities of civil litigation to ensure our clients receive the justice they deserve.  In the realm of civil law, our attorneys work closely with clients to understand their unique situations and goals. Whether youre seeking compensation for damages, resolution of a contractual dispute, or legal guidance for a property-related matter, we are here to guide you through the legal process. Our commitment to client success is evident in our proactive approach, attention to detail, and unwavering dedication to protecting your rights.  Our civil law practice extends beyond litigation. We offer proactive legal advice to help clients avoid potential legal pitfalls, draft and review contracts to mitigate risks, and provide guidance on navigating complex regulatory frameworks. By combining our legal expertise with a client-centered approach, we strive to achieve optimal outcomes and build lasting relationships with those we serve.  If you find yourself entangled in a civil matter or require legal counsel for preventive measures, our team is ready to stand by your side. Trust us to provide the diligent and effective representation you need in the realm of civil law.'),
(4, 'criminal law', 'Welcome to our Criminal Law practice where we believe in a relentless pursuit of justice and unwavering commitment to protecting the rights of our clients. Our team of experienced criminal defense attorneys is dedicated to providing comprehensive legal representation for individuals facing a spectrum of criminal charges.  In the complex landscape of criminal law, we understand the profound impact legal issues can have on your life. From minor infractions to serious offenses, our attorneys bring a wealth of experience and a strategic approach to every case. We meticulously investigate each matter, building a robust defense tailored to the unique circumstances surrounding your situation.  Our criminal defense practice spans a wide array of areas, including but not limited to assault, theft, drug offenses, white-collar crimes, and more. We recognize the stress and uncertainty that accompanies criminal charges, and we prioritize transparent communication to keep you informed at every stage of the legal process.  What sets us apart is our unwavering advocacy for your rights. We believe in the presumption of innocence, and our attorneys work tirelessly to challenge evidence, explore legal precedents, and present compelling arguments in your defense. We understand that every case is different, and our personalized approach ensures that your voice is heard and your unique circumstances are taken into account.  Beyond courtroom representation, we provide support and guidance, helping you navigate the complexities of the legal system. Our goal is not only to secure the best possible outcome for your case but also to minimize the impact on your life. We are here to stand by your side, offering the legal expertise and compassionate representation you need during challenging times.  If youre facing criminal charges or are under investigation, dont face it alone. Our Criminal Law team is ready to mount a robust defense on your behalf. Contact us today for a confidential consultation to discuss your case and explore the legal options available to you.'),
(5, 'Family Law', 'Navigating the delicate terrain of family law requires a compassionate and experienced legal team, and thats exactly what we offer. Our family law experts recognize that each family is unique, and we approach every case with sensitivity and personalized attention. Whether you\re dealing with issues related to divorce, child custody, spousal support, or any other family matter, we provide comprehensive legal counsel. Our goal is not only to resolve legal disputes but also to minimize the emotional toll on our clients. With a focus on open communication and strategic advocacy, we strive to achieve the best possible outcomes for you and your loved ones.'),
(6, 'Business Law', 'In the dynamic landscape of commerce, our Business Law practice stands as a beacon of comprehensive legal support for businesses of all sizes. At our firm, we recognize that navigating the intricacies of business transactions, contracts, and regulatory compliance requires a sophisticated understanding of both legal frameworks and industry nuances. Our team of dedicated business attorneys is committed to providing strategic guidance and proactive legal solutions to help your business thrive.  From startups to established enterprises, we offer a full spectrum of business law services. Our attorneys specialize in structuring and negotiating contracts, handling mergers and acquisitions, ensuring regulatory compliance, and resolving disputes through alternative dispute resolution or litigation when necessary.  We understand that every business is unique, and our approach is tailored to address the specific challenges and opportunities you face. Whether youre launching a new venture, expanding your operations, or dealing with a complex legal issue, our team is equipped with the knowledge and experience to provide sound legal advice.  Our commitment to fostering long-term client relationships extends beyond resolving immediate legal concerns. We proactively assess potential risks, draft and review contracts, and provide ongoing legal counsel to safeguard your business interests. Our goal is to empower you with the legal insights needed to make informed decisions that contribute to the growth and success of your enterprise.  In an ever-evolving business landscape, having a trusted legal  crucial. Our Business Law practice is dedicated to being that partner for your business. Whether you require assistance  legal matters or strategic guidance for complex transactions, we are here to help you navigate the legal complexities of the business world.  Discover the difference that experienced and proactive legal counsel can make for your business. Contact us today to schedule a consultation and explore how our Business Law team can contribute to the success and longevity of your enterprise.'),
(7, 'Education Law', 'Welcome to our Education Law practice, where we are dedicated to advocating for the rights of students, parents, and educational institutions. In the complex landscape of education, legal issues can have a profound impact on the academic experience and future prospects of individuals. Our experienced education law attorneys are committed to navigating the legal complexities to ensure fair and equitable outcomes for all.  Our practice encompasses a broad range of education-related matters, including student rights, special education, school discipline, higher education issues, and more. We understand the unique challenges faced by students and educational institutions alike, and our attorneys bring a wealth of knowledge to address these challenges with a focus on preserving the educational rights of all parties involved.  For students and their families, we provide comprehensive legal support in matters such as school discipline, bullying, discrimination, and access to special education services. We are committed to ensuring that every student has the opportunity to thrive in a safe and inclusive educational environment. Our attorneys work closely with families to understand their concerns and craft effective legal strategies tailored to the unique needs of each case.  For educational institutions, we offer proactive legal counsel to navigate compliance issues, policy development, and dispute resolution. Whether you are a school district, university, or private institution, our goal is to help you create a positive and legally sound educational environment.  What sets our Education Law practice apart is our commitment to the principles of fairness, inclusivity, and access to quality education. We believe in the transformative power of education, and our legal expertise is dedicated to safeguarding the rights and opportunities of all individuals within the education system.  If you are facing legal challenges in the realm of education, our team is ready to provide the guidance and advocacy you need. Contact us today for a consultation to discuss your specific situation and explore how our Education Law practice can make a positive impact on your educational experience.'),
(8, 'Cyber Law', 'In the ever-evolving digital landscape, our Cyber Law practice stands at the forefront of legal advocacy for individuals, businesses, and organizations navigating the complexities of the virtual world. As technology continues to shape our daily lives, legal issues related to cyberspace, data security, and digital transactions require a specialized understanding. Our team of dedicated cyber law attorneys is committed to providing proactive legal solutions to safeguard your digital assets and address the unique challenges posed by the online realm.  Our comprehensive cyber law services cover a broad spectrum of issues, including data breaches, cybercrime investigations, online privacy, intellectual property in the digital sphere, e-commerce, and compliance with cyber regulations. We recognize that the stakes in cyberspace are high, and our attorneys leverage their expertise to help clients proactively manage risks and respond effectively to legal challenges.  For businesses operating in the digital domain, we offer strategic legal counsel to ensure compliance with data protection laws, mitigate the risk of cyber threats, and navigate the legal intricacies of e-commerce. Our goal is to empower businesses to harness the power of technology while maintaining a secure and legally sound digital presence.  For individuals, we provide guidance on protecting personal information, understanding online rights, and seeking legal recourse in the event of cybercrimes or privacy breaches. Our team is committed to demystifying the legal aspects of the digital world and providing actionable advice to safeguard your online presence.  What sets our Cyber Law practice apart is a proactive approach to staying abreast of the latest developments in technology and cyber regulations. We believe in building resilience in the face of digital challenges and offer tailored legal solutions to navigate the fast-paced and ever-changing landscape of cyberspace.  If you find yourself grappling with legal issues in the digital realm or seeking proactive guidance to protect your online interests, our Cyber Law team is ready to assist. Contact us today for a consultation to explore how our expertise can help you navigate the legal intricacies of the digital age.'),
(13, 'immigiration Law', ' Embarking on a journey through the complex landscape of immigration requires the guidance of experienced legal professionals who understand the nuances and challenges of the process. Our Immigration Law practice is dedicated to providing comprehensive legal support to individuals, families, and businesses navigating the intricacies of immigration law. Whether you are seeking to reunite with loved ones, pursuing employment opportunities, or facing immigration challenges, our team of immigration attorneys is here to guide you at every step.\r\n\r\nOur practice encompasses a wide range of immigration services, including family-based immigration, employment-based immigration, visa applications, green card petitions, asylum, and deportation defense. We understand the profound impact immigration decisions can have on the lives of individuals and their families, and we approach each case with a commitment to compassion, thoroughness, and advocacy.\r\n\r\nFor families seeking to unite across borders, we offer legal support in the preparation and submission of family-based immigration petitions. We recognize the importance of keeping families together and work diligently to navigate the immigration process with efficiency and care.\r\n\r\nFor businesses and individuals seeking employment opportunities in a new country, our attorneys provide strategic guidance on visa applications, employment-based immigration, and compliance with immigration regulations. We understand the crucial role immigration plays in shaping the workforce and work to ensure a smooth and legally compliant transition.\r\n\r\nIn cases involving asylum and deportation defense, we provide empathetic and vigorous legal representation to individuals facing persecution or removal from the country. Our attorneys are committed to upholding the rights of those seeking refuge and protection under the law.\r\n\r\nWhat sets our Immigration Law practice apart is our commitment to personalized attention and a deep understanding of the cultural and emotional dimensions of immigration. We recognize that each case is unique, and our attorneys tailor their approach to address the specific needs and goals of our clients.\r\n\r\nIf you are navigating the complex journey of immigration, our Immigration Law team is ready to be your legal ally. Contact us today for a consultation to discuss your specific situation and explore how our expertise can make a positive impact on your immigration experience.');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`) VALUES
(1, 'hassanshah034@gmail.com'),
(8, 'farad@gmail.com'),
(9, 'farad@gmail.com'),
(10, 'farad@gmail.com'),
(11, 'farad@gmail.com'),
(37, ''),
(38, 'faizan2301f@aptechorangi.com'),
(39, 'faizan2301f@aptechorangi.com'),
(40, 'faizan2301f@aptechorangi.com'),
(41, 'faizanf@aptechorangi.com'),
(42, 'faizanf@aptechorangi.com'),
(43, 'faizanf@aptechorangi.com'),
(44, 'faizanf@aptechorangi.com'),
(45, 'faizanf@aptechorangi.com'),
(46, 'faizanf@aptechorangi.com'),
(47, 'faizanf@aptechorangi.com'),
(48, 'faizanf@aptechorangi.com'),
(49, 'faizanf@aptechorangi.com'),
(50, 'faizanshah03112557031@gmail.com'),
(51, 'faizan2301f@aptechorangi.com'),
(52, 'faizanshah03112557031@gmail.com'),
(53, 'faizanshah03112557031@gmail.com'),
(54, 'faizanshah03112557031@gmail.com'),
(55, 'faizanshah03112557031@gmail.com'),
(56, 'faizanshah03112557031@gmail.com'),
(57, ''),
(58, ''),
(59, ''),
(60, ''),
(61, ''),
(62, ''),
(63, ''),
(64, ''),
(65, ''),
(66, ''),
(67, ''),
(68, ''),
(69, ''),
(70, '$useremail'),
(71, ''),
(72, ''),
(73, ''),
(74, ''),
(75, ''),
(76, ''),
(77, ''),
(78, 'faizanshah03112557031@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, 'faozan', 'shah@gmail.com', '', ''),
(4, 'faizan', 'faizan2301F@aptechorangi.com', '', ''),
(5, 'faizan', 'faizan2301F@aptechorangi.com', '', ''),
(6, 'rahman', 'rahmna2301f@aptechorani.php', '', ''),
(7, 'faizan', 'faizan2301f@aptechorangi.com', '', ''),
(8, 'farooq', 'faroq23@aptech.com', '', ''),
(9, 'faizan', 'faizan2301F@aptech.com', '', ''),
(10, 'asdad', 'dadadd@gmail.com', '', ''),
(11, 'fhfhf', 'sdfsf@g.com', '', ''),
(12, 'fssfs', 'adada@g.com', '', ''),
(13, 'hasdad', 'faizan2301f@gmail.com', '', ''),
(14, 'daiaam', 'faizan2301F@aptech.com', '', ''),
(15, 'daiaam', 'faizan2301F@aptech.com', '', ''),
(16, 'faizan', 'faizanshah03112557031@gmail.com', '03262383020', 'faizan'),
(17, 'faizan', 'faizanshah03112557031@gmail.com', 'faizan', 'faizan'),
(18, 'faizan', 'faizanshah03112557031@gmail.com', 'faizan', 'faizan'),
(19, 'faizan', 'faizanshah03112557031@gmail.com', 'faizan', 'faizan'),
(20, 'makhdoom', 'faizanshah03112557031@gmail.com', '03262383020', 'faiz'),
(21, 'faizan', 'faizanshah03112557031@gmail.com', '03262383020', 'faizan'),
(22, 'faizan', 'faizanshah03112557031@gmail.com', 'faizan', 'faizan'),
(23, 'rahman', 'rahman23@gmail.com', '0311253625', '54321'),
(24, 'hassan', 'hassan@gmail.com', '03262383020', 'hassan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `lawyers_blog`
--
ALTER TABLE `lawyers_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laywer_category`
--
ALTER TABLE `laywer_category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `laywer_education`
--
ALTER TABLE `laywer_education`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `lawyers_blog`
--
ALTER TABLE `lawyers_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `laywer_category`
--
ALTER TABLE `laywer_category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laywer_education`
--
ALTER TABLE `laywer_education`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `qa`
--
ALTER TABLE `qa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
