-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2022 at 05:24 PM
-- Server version: 5.7.38
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yeolomco_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `article_image` varchar(255) NOT NULL,
  `article_created_time` datetime NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `article_content`, `article_image`, `article_created_time`, `id_categorie`, `id_author`) VALUES
(49, 'Starting a career as a Software Engineer, before university.', '<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>Defintion</strong></div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">1. A Software Engineer at core, is someone that builds and maintains software in the most efficient way based on the constraints.</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">2. A career is the generic title of a collection of activities someone does to earn money.</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">3. A Software Engineer career is the generic title of someone, who builds and maintains software in the most efficient way based on constraints, and gets paid for it.</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Main Blog</strong></h2>\r\n\r\n<p>This post puts its focus on people about to go into university, or anyone at all intending to be a software engineer. I would break down the steps you could take to prepare you for a career in software engineering and start gaining experience even before starting university.</p>\r\n\r\n<h3><strong>Step 1: Learn the basics of Programming.</strong></h3>\r\n\r\n<p>There is more to the career of software engineering than just programming, but programming is a great start. You can learn&nbsp; this from anywhere, either from YouTube, Udemy, books, school, or bootcamps. For those oppotuned to be in a secondary school that have coding tutors, you get to be one step ahead, but the others who are not should not worry; because you can learn it for free from youtube videos.</p>\r\n\r\n<p>You should learn the basics of programming, then proceed to pick a programming language to start with. The options I suggest are JavaScript and Python. Once you have chosen your language, you move to step 2.</p>\r\n\r\n<h3><strong>Step 2: Create a social media account.</strong></h3>\r\n\r\n<p>&quot;<em>No matter how good you are, you won&#39;t get connected if people don&#39;t know you exist.</em>&quot;</p>\r\n\r\n<p>You should put yourself out there, to be recognized and considered for opportunities, this would also require you to create a Github, LinkedIn, Facebook, Instagram, and Twitter account; and also try as much as possible to use the same username on all.</p>\r\n\r\n<p>There is more to social media, for which I would create a separate blog on, but the few notes would be sufficient for now.</p>\r\n\r\n<h3><strong>Step 3: Learn and Build.</strong></h3>\r\n\r\n<p>&quot;<em>The best way to gain experience as a software engineer is to build or maintain software.</em>&quot;</p>\r\n\r\n<p>You should learn the basics of the programming language you choose, and build a project.</p>\r\n\r\n<p>If you already have an idea to build, then reduce its features to the core features the product needs and remove the &quot;<strong>cool to add</strong>&quot; features from it, so as to reduce the project scope to make it easier to build.</p>\r\n\r\n<p>If you do not have an idea, that is ok, simply build a clone of an already existing product. Example Instagram, Amazon, or anyother.</p>\r\n\r\n<p>No matter the product you are building, you should have a way to monetize it. This is to give you experience in working with payments gateways and practical ideas on how to monetize software. The latter is a very invaluable skill, Also if the software gains traction, then you have created an income stream before you graduate from university.</p>\r\n\r\n<h3><strong>Step 4: Document the process.</strong></h3>\r\n\r\n<p>&quot;<em>You won&#39;t know you are making progress unless you document it.</em>&quot;</p>\r\n\r\n<p>You need to jot down what you are doing for the project, If possible have a project book. Every project and task done should be recorded. The Example of recording style is;</p>\r\n\r\n<p>-Project Title</p>\r\n\r\n<ul>\r\n	<li>I designed the U.I</li>\r\n	<li>I decoded 50 NASA internal encrypted messages to get the encryption key.</li>\r\n</ul>\r\n\r\n<p>This is so as to have a pool of experience to draw from when filling your CV.</p>\r\n\r\n<h3><strong>Step 5: Build your CV.</strong></h3>\r\n\r\n<p>&quot;<em>Your CV is one of your sales person.</em>&quot;</p>\r\n\r\n<p>Your CV sells you to your potential employers. So keep it simple, easy to navigate, and straight to the point. There are more to CV for which I would write a separate post for.</p>\r\n\r\n<p>My CV is available for free on <a href=\"https://yeolom.com/marketplace/login\">Yeolom&#39;s MarketPlace</a>, Download it and go through it.</p>\r\n\r\n<p>Follow the format and you will be one step ahead of your counterparts.</p>\r\n\r\n<h3><strong>Step 6: Deploy your project and pivot.</strong></h3>\r\n\r\n<p>This is very important, this helps you standout even more.</p>\r\n\r\n<p>This tells your employer that you are not just capable of building, but also able to take user&#39;s feedback and maintain the software features in a direction beneficial to the user and the team.</p>\r\n\r\n<p>No matter which language you choose, you could distribute or deploy your software on your website.</p>\r\n\r\n<p>I would write a separate post on how to buy and host a domain, as a Nigerian.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>Notes</strong></div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">You can learn the language of your choice on youtube or get a book on it. If you decide to read a book, you could get my&nbsp;<strong>Learn Python</strong>&nbsp;Softcopy from&nbsp;<a href=\"https://yeolom.com/marketplace/login\">Yeolom&#39;s MarketPlace</a>&nbsp;at 1,500NGN | 3.65 USD | 2.70GBP.</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">While building your project you need a supportive community to hold you accountable. If you do not have one, then you could mail me at&nbsp;<strong>lawrenceorolobo@yeolom.com</strong>.I can make time to follow up with your project.</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">If the simple mail messaging does not suffice, you could email me of your interest in a voluntary internship. I would make time to discuss the possibility.</div>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>Summary</strong></h2>\r\n\r\n<p>There is a lot that goes into the software engineering career, but learning to program is a good start.</p>\r\n\r\n<p>The simple and practical steps you can take to start your software engineer career before you start university are:</p>\r\n\r\n<p><strong>Step 1:&nbsp;</strong>Learn basics of programming, then choose a language to start with.</p>\r\n\r\n<p><strong>Step 2:&nbsp;</strong>Create a social media account on Linkedin, Github, Facebook, Instagram, and Twitter.</p>\r\n\r\n<p><strong>Step 3:&nbsp;</strong>Learn your chosen language and build a project.</p>\r\n\r\n<p><strong>Step 4:&nbsp;</strong>Document the process and specific tasks you had taken to build each project in a book.</p>\r\n\r\n<p><strong>Step 5:&nbsp;</strong>Build your CV based on the documented process from Step 4.</p>\r\n\r\n<p><strong>Step 6:&nbsp;</strong>Deploy or Distribute your project, then Pivot.</p>\r\n\r\n<p>The above are practical steps to get you started.</p>\r\n\r\n<p>If you would need someone to hold&nbsp;you accountable for your progress, do mail me at&nbsp;<strong>lawrenceorolobo@yeolom.com .</strong></p>\r\n\r\n<p><strong>That is all for now,</strong></p>\r\n\r\n<p><strong>Stay safe and God Bless.</strong></p>\r\n', 'Programming Code HD Wallpaper FullHDWpp   Full HD Wallpapers (1).jpg', '2021-12-30 13:11:03', 19, 1),
(50, 'How a Nigerian team builds entertainment business Part 1.', '<h2><strong>DEFINITION</strong></h2>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">A Nigerian is someone from Nigeria.</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Entertainment is the activity designed to amuse or entertain others.</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Business is any activity done to make profit, and have customers willing to pay for the product or service.</div>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>MAIN BLOG</strong></h2>\r\n\r\n<p>As of writing, Yeolom&#39;s Lapma is a family of 4,&nbsp;expressing their fictional worlds through mediums like video games, and comics.</p>\r\n\r\n<p>The family is made of 4 Nigerians, in roles playing to their strength.</p>\r\n\r\n<p>1. OMOSOWON ABIOLA LATIFAT (<a href=\"https://www.instagram.com/_abiola1/\" target=\"_blank\">IG: @_abiola1</a>) - Story Writer and Project Lead.</p>\r\n\r\n<p>2. ODUEYINGBO MARY OLAOLUWAKINTAN (<a href=\"https://www.instagram.com/omomo_art/\">IG: @omomo_art</a>) - Artist.</p>\r\n\r\n<p>3. ANIGBOGU PRECIOUS CHIDIMMA - Story Writer.</p>\r\n\r\n<p>4. LAWRENCE OROLOBO OLISA (<a href=\"https://www.instagram.com/lawrenceorolobo/\">IG: @lawrenceorolobo</a>) - Software Engineer.</p>\r\n\r\n<p>The team as a whole have worked on below titles or products:</p>\r\n\r\n<p>1. Zen Stone [Video Game].</p>\r\n\r\n<p>2. <a href=\"https://gamejolt.com/games/detectivenari/612527\" target=\"_blank\">Detective Nari [Video Game]</a>.</p>\r\n\r\n<p>3. Allison [Video Game].</p>\r\n\r\n<p>4. Balls Matterz [Video Game].</p>\r\n\r\n<p>5. Detective Nari: Gold [Video Game].</p>\r\n\r\n<p>6. Detective Nari [Comic].</p>\r\n\r\n<p>The state of the projects are explained in detail.</p>\r\n\r\n<p><strong>1. Zen Stone:</strong> The Open World, was designed and implemented. The characters were designed and implemented. This was to be the team first game ever.</p>\r\n\r\n<p>A week or a month down the project It was paused. It was paused because the scope kept expanding everytime it was worked on. The project core had grown too big to be handled and did not longer meet the constraints, which was:</p>\r\n\r\n<p>&quot;To build a simple game fast, and release&quot;.</p>\r\n\r\n<p>Few months later, more accurately a year later. The project files has been lost but the franchise documented and planned to be released later on.</p>\r\n\r\n<p><strong>2. Detective Nari:</strong> Initially called Detective Riddles. From the previous name, you can tell it started out as a riddle game. You are playing as a detective.</p>\r\n\r\n<p>You enter a room, get updated by the police on what the case is, talk to suspects and report back to the police on whom you think the suspect is.</p>\r\n\r\n<p>This basic gameplay, then lead to building a story around it. A few moments later a fully developed franchise with characters was built.</p>\r\n\r\n<p>Funny thing, when Zen Stone game was paused, I talked to precious about developing a storyline on a detective game. I ended up playing around with RPG Maker&#39;s show choices, and decided to do a riddle game.</p>\r\n\r\n<p>When the demo was done, I was on campus; So I had opportunity to get players. After meeting around 20 plus fellow students, I got a handful that genuinely loved the game. I also met the youtuber <a href=\"https://www.youtube.com/channel/UCV9bU9Q_MMWOwAoEOVbz87A/featured\" target=\"_blank\">Danmangaming101</a> by coincidence.</p>\r\n\r\n<p>I am still in contact with them as Yeolom&#39;s Lapma Franchise Testers. Their names are;</p>\r\n\r\n<ul>\r\n	<li>Dapo.</li>\r\n	<li>Naomi.</li>\r\n	<li>Tomiwa.</li>\r\n	<li><a href=\"https://www.youtube.com/channel/UCV9bU9Q_MMWOwAoEOVbz87A/featured\" target=\"_blank\">Danmangaming101</a></li>\r\n</ul>\r\n\r\n<p>I am very grateful for their support. Now the game has been completed and released to <a href=\"https://lapma.itch.io/detectivenari\" target=\"_blank\">Itch</a> and <a href=\"https://gamejolt.com/games/detectivenari/612527\" target=\"_blank\">GameJolt</a>. The previous plan was to make it premium and priced at 5 USD.</p>\r\n\r\n<p>Long story short, the game ended up free. The free game has been able to get 3 USD, for which I do not account as revenue because the individual that donated was <a href=\"https://audiomack.com/Triptrip/\">Triple A</a>. He was supporting a friend hustle.</p>\r\n\r\n<p>Fast Forward, the game has 100 plus downloads and the premium version is on its way.</p>\r\n\r\n<p>3.&nbsp;<strong>Allison:</strong>&nbsp;Though this game did not make it to implementation, I and the Author (Abiola) were planning the game. It was about a youn girl tackling the challenges we all face starting our university journey. and as well as boys.</p>\r\n\r\n<p>I was indecisive on making it a visual novel or a top down rpg. Along the line of reading the book, I realized that, this is an outstanding franchise, and I genuinely know I would not be able to do justice if I made the game adaptation.</p>\r\n\r\n<p>The book already has 1800&nbsp;readers on <a href=\"https://www.wattpad.com/story/186858468-being-allison\" target=\"_blank\">Wattpad</a>, So I did not want to dent the franchise.</p>\r\n\r\n<p>The game was put on hold.</p>\r\n\r\n<p><strong>This is where part 1 ends, of the blog series end. I hope I was able to connect with you and show you a quick summary of behind the scenes.</strong></p>\r\n\r\n<p>If you loved this post, and would love to see part 2, do tell us in the comment and follow us on <a href=\"https://www.instagram.com/yeolom/\" target=\"_blank\">Instagram</a>.</p>\r\n\r\n<h2><strong>SUMMARY</strong></h2>\r\n\r\n<p>We are a family of 4 Nigerians building an entertainment business. We have worked on a few titles among which only one was released to&nbsp;<a href=\"https://lapma.itch.io/detectivenari\" target=\"_blank\">Itch</a> and <a href=\"https://gamejolt.com/games/detectivenari/612527\" target=\"_blank\">GameJolt</a>. The game is Detective Nari, and has gotten 3 USD and 100 plus downloads.</p>\r\n\r\n<p>The next post under this category would talk about the remaining 2 titles not talked about here.</p>\r\n\r\n<p>To be notified of when the post would be available, do follow us on&nbsp; <a href=\"https://www.instagram.com/yeolom/\" target=\"_blank\">Instagram</a>.</p>\r\n\r\n<p>Yeolom plans to have a YouTube channel, let&#39;s see how it goes.</p>\r\n\r\n<p>Until the next post.</p>\r\n\r\n<p><strong>Do Stay Safe and God Bless.</strong></p>\r\n', 'wp7664856-game-development-wallpapers (2).png', '2022-01-07 20:41:53', 20, 1),
(52, 'How a Nigerian Team builds entertainment business (Part 2)', '<p><strong>Main Blog</strong></p>\r\n\r\n<p>This post follows the previous blog on progress made by the team up untill Allison.</p>\r\n\r\n<p>In this post, I would talk on what happened next.</p>\r\n\r\n<p>1. Balls Matterz: While at school for summer, I had meet up a friend. He was interested in building a game studio.</p>\r\n\r\n<p>We decided to meet occasionally to create a few franchises for his studio. We came up with amazing stories, and even planned a franchise from the single player to MMORPG, which was the end of the franchise.</p>\r\n\r\n<p>Among the developed franchises was Balls Matterz. This was by far the easiest to implement.</p>\r\n\r\n<p>The game story and mechanics could be done within one month. While we developed the franchises, I saw their potential, and discussed sharing the franchise with him.</p>\r\n\r\n<p>He agreed and we ended up having our seperate characters in the franchise. We agreed to not make a large change without consulting each other.</p>\r\n\r\n<p>Fast forward, A month plus has gone since I finished school, and&nbsp;I was searching for the next title to release. I recalled Balls Matterz because of its simplicity.</p>\r\n\r\n<p>So, I contacted my friend whom at the time was occupied with school, and made no obvious attempt to implement any franchise.</p>\r\n\r\n<p>I had a whatsapp chat. We&nbsp;more or less exchanged 5 messages; where he confirmed our sharing of the franchise. After confirmation, I started building.</p>\r\n\r\n<p>Long story Short, I had written the story and begun implementation. A week or 2 into implementation, I had recalled launching a title previously, and thought, Why don&#39;t the team focus on building fanbase for that franchise?</p>\r\n\r\n<p>It would be easier to push sequels if we already capture an audience, and owned the franchise completely; We could spend more time developing characters and using&nbsp;<strong>The Detective&nbsp;</strong>franchise as an outlet or intro to other characters of our in-house franchise.</p>\r\n\r\n<p>This realization lead to dropping every project that isn&#39;t related to previously released <strong>D</strong><strong>etective</strong> franchise title. This also meant dropping Zen Stone december plan, Balls Matterz development, and a few others.</p>\r\n\r\n<p>This decision lead to the next title.</p>\r\n\r\n<p>2.&nbsp;<strong>Detective Nari: Gold,&nbsp;</strong>After setting things straight, I recalled losing the project files for Detective Nari.</p>\r\n\r\n<p>If you recall from last blog post, Detective Nari was released and turned into a free game. I had only implemented a way for players to donate to the team. The payment gateway I used was flutterwave. The above approach had brought in zero in revenue, which isn&#39;t enough to sustain the team financially.</p>\r\n\r\n<p>I previously brainstormed with the team how the game would make money. Research assignments were also given to Abiola and Precious on how to monetize the game.</p>\r\n\r\n<p>Long story short, The approach taken is to release a free version, and a premium version. This approach is great in capturing the audience that don&#39;t spend money on game and capturing audience that are willing to pay for a different experience. This approach is relatively expensive and time consuming, because we are making 2 versions of one title.</p>\r\n\r\n<p>Hence, a decision to use this approach for only&nbsp;<strong>Detective Nari&nbsp;</strong>unless necessary.</p>\r\n\r\n<p>The next post would be on the progress made on&nbsp;<strong>Detective Nari: Gold,</strong>&nbsp;which you could keep up with or play the free demo <a href=\"https://gamejolt.com/games/dngoldOne/685835\" target=\"_blank\">here</a>.&nbsp;</p>\r\n\r\n<p>If you want to check out the free version, click <a href=\"https://gamejolt.com/games/detectivenari/612527\">here</a>.</p>\r\n\r\n<p>3. Detective Nari [Comic]: This is the comic of the franchise. These exist to capture the audience that prefer comics or manga to games, and audience interested in the linear story of the franchise.</p>\r\n\r\n<p>The comic would cover the flow of events, the actions taken by the characters and the story for main timeline or earth 1.</p>\r\n\r\n<p>The first installment would cover the linear story of&nbsp;<strong>Detective Nari,&nbsp;</strong>that is the game&#39;s actual story. The readers would follow the life of Nari as he joins <strong>O.N.E Agency</strong>&nbsp;to make the country safer for his little brother.</p>\r\n\r\n<p>Mary,&nbsp;Abiola, and Yeolom Lead are involved in the comic. The team appears to be working hard to release a comic driven by character perspective of life and experience, let&#39;s see what the team can do.</p>\r\n\r\n<p><strong>Summary</strong></p>\r\n\r\n<p>The team had worked on 2 other game title as well as a comic since Allison.</p>\r\n\r\n<p>The 2 games are:</p>\r\n\r\n<p>1. Balls Matterz, which is a shared franchise. The development&nbsp;was later paused so the team can build in-house franchise to great height.</p>\r\n\r\n<p>2. Detective Nari: Gold, which is the premium version of Detective Nari. This would bring in revenue for the team as well as deliver a different experience for players and give a quick intro to sequel.</p>\r\n\r\n<p>The comic would be the linear story of Nari, whom joined the O.N.E Agency with the aim to make Greenland country safer for his baby&nbsp;brother.</p>\r\n\r\n<p>I&#39;m genuinely excited about progress and plans for this quarter. I am also excited about the direction Lapma has, let&#39;s see what&nbsp;we can achieve as we build a&nbsp;<strong>sustainable lucrative business.</strong></p>\r\n\r\n<p>That&#39;s all for now, until next post.</p>\r\n\r\n<p>Stay safe and God bless.</p>\r\n', 'wp7664876-game-development-wallpapers (4).jpg', '2022-01-30 08:02:47', 20, 1),
(53, 'Update.', '<p>A decision has been made.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In order to focus, and build.. I need to be real.</p>\r\n\r\n<p>The plan for Yeolom the company, as well as Lapma studio the company has been cancelled.</p>\r\n\r\n<p>Yeolom shall not exist after Dec 2022.</p>\r\n\r\n<p>Sorry to disappoint, life moves on.</p>\r\n', '', '2022-04-06 18:55:16', 18, 13),
(54, 'UPDATE ON YEOLOM, AND LAPMA.', '<p>â€‹Yeolom and Division such as Lapma, would be cancelled.</p>\r\n\r\n<p>All products, services,&nbsp;plans, brand,&nbsp;and other&nbsp;intellectual property except for Allison, would be given to Wakwe Manuel ltd, A Nigerian company.â€‹</p>\r\n\r\n<p>Wakwe Manuel ltd would decide on what to do with the newly received properties from Yeolom.</p>\r\n\r\n<p>For Social media account, Wakwe Manuel ltd decided to let them exist as a foot print of existence. Wakwe Manuel ltd would manage and post contents in only one account&nbsp;per platform. This account would be named&nbsp;wakwemanuel.</p>\r\n\r\n<p>For Yeolom website (&nbsp;<a href=\"https://yeolom.com/\" target=\"_blank\">yeolom.com</a> ), Wakwe Manuel ltd decided to let it expire; and let it be available for anyone whom would need it.</p>\r\n\r\n<p>Hence, Get ready for a the restart.</p>\r\n', '20220111_192735_0000.png', '2022-04-29 15:02:17', 18, 15);

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_fullname` varchar(100) NOT NULL,
  `author_desc` varchar(255) NOT NULL DEFAULT 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus in ullam eum corrupti reiciendis.',
  `author_email` varchar(100) NOT NULL,
  `author_twitter` varchar(100) NOT NULL DEFAULT 'loujaybee',
  `author_github` varchar(100) NOT NULL DEFAULT 'loujaybee',
  `author_link` varchar(100) NOT NULL DEFAULT 'loujaybee',
  `author_avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_fullname`, `author_desc`, `author_email`, `author_twitter`, `author_github`, `author_link`, `author_avatar`) VALUES
(1, 'Lawrence Orolobo', 'A General Software Engineer by Career, Yeolom Lead by Life Purpose.', 'lawrenceorolobo@yeolom.com', '', 'lawrenceorolobo', 'orolobo-lawrence-7308a11b8', 'avatar-6.png'),
(2, 'Samantha Ming ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus in ullam eum corrupti reiciendis.', 'samantha_ming@gmail.com', 'loujaybee', 'loujaybee', 'loujaybee', 'avatar-1.png'),
(8, ' Bartosz Pietrucha ', 'Fullstack engineer, https://angular-academy.com founder, speaker, trainer, software consultant. I can help you with Angular and reactive architecture. ', 'bartosz-pietrucha@gmail.com', 'pietrucha', '', '', 'cc5d5f49-30e6-41be-9cc4-82f44c2cf1d9.webp'),
(11, '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus in ullam eum corrupti reiciendis.', '', 'loujaybee', 'loujaybee', 'loujaybee', ''),
(12, '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus in ullam eum corrupti reiciendis.', '', 'loujaybee', 'loujaybee', 'loujaybee', ''),
(13, '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus in ullam eum corrupti reiciendis.', '', 'loujaybee', 'loujaybee', 'loujaybee', ''),
(14, '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus in ullam eum corrupti reiciendis.', '', 'loujaybee', 'loujaybee', 'loujaybee', ''),
(15, 'Yeolom\'s Head', 'The head, and founder of Yeolom.', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `category_color` varchar(10) NOT NULL DEFAULT '333333'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`, `category_color`) VALUES
(18, 'Business', '', '#0f88e1'),
(19, 'Software Enineering', '', '#100a3d'),
(20, 'Yeolom\'s Lapma', '', '#0f88e1');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_username` varchar(100) NOT NULL,
  `comment_avatar` varchar(255) NOT NULL DEFAULT 'def_face.jpg',
  `comment_content` text NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT '2020-02-14 10:28:00',
  `comment_likes` int(11) NOT NULL DEFAULT '0',
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_username`, `comment_avatar`, `comment_content`, `comment_date`, `comment_likes`, `id_article`) VALUES
(1, '1072913199', 'def_face.jpg', 'Nice blog, I didn\'t read it though, but very nice.', '2022-01-19 22:00:00', 0, 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `created_at`) VALUES
(1, 'lawrenceorolobo@yeolom.com', 'yeolom', 'Olom@l123', '2020-08-08 11:46:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `article_category` (`id_categorie`),
  ADD KEY `article_author` (`id_author`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_article` (`id_article`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_author` FOREIGN KEY (`id_author`) REFERENCES `author` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_category` FOREIGN KEY (`id_categorie`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_article` FOREIGN KEY (`id_article`) REFERENCES `article` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
