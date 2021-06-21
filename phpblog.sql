-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 23, 2019 at 09:44 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `pass` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'abc@gmail.com', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'PHp & Mysql'),
(2, 'HTML & CSS'),
(3, 'Javascript'),
(4, 'web development');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` text NOT NULL,
  `top` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category`, `title`, `content`, `author`, `text`, `date`, `image`, `top`) VALUES
(33, 10, 'WEB DEVELOPMENT SERVICES', ' Best Web Development Company in India specializes in designing effective virtual branding and developing W3C standard websites that are compatible with all devices. We provide best Web Development Services and have been servicing our clients since 2010. EZ Rankings bring the most satisfactory outcomes for your digital requirement and help your business to grow.\r\n\r\n\r\nAs a top web development company in India, we have dedicated team of professional designers and developers, creating powerful and engaging websites. We use ultra-clean and bold design style to provide standards-based markup code for your websites that boast exceptional Google result positions, help increase conversions. As Web Development India, we believe that a good online presence starts with a great website and it goes without saying that the majority of online experiences begin with your website. Your business website is not just a virtual representation of your company profile. Rather, it mirrors your business objectives and goals. Therefore, developing an attractive, informative, and great website happens to be a necessity and not a choice for you.\r\n\r\nSmaller businesses have smaller budgets, but that just means making smarter expenditures with an eye on your ROI as well as the bottom line. Leveraging your web presence with up-to-date design and web development services, White Hat SEO, and multi channel digital advertising is a daunting prospect, but a necessary practice if you want customers to find you. You might not be able to field your own in-house marketing department, but custom website Development Company in India can work to put the cash back into your cash flow.\r\n\r\nLearn what an experienced team of web developers can do to enhance your results from clicks to sales while keeping functionality and security as top priorities. Your site and apps will look terrific and function smoothly to give your customers the smoothest transactions that they crave with the security they demand. Let our results-oriented web development services India, shows you the best we have to offer.', 'by ezraking', '1', '2019-06-23 04:01:04', 'webservices.jpg', 2),
(27, 10, 'Web Development', 'Web development is the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network).[1] Web development can range from developing a simple single static page of plain text to complex web-based internet applications (web apps), electronic businesses, and social network services. A more comprehensive list of tasks to which web development commonly refers, may include web engineering, web design, web content development, client liaison, client-side/server-side scripting, web server and network security configuration, and e-commerce development.\r\n\r\nAmong web professionals, \"web development\" usually refers to the main non-design aspects of building web sites: writing markup and coding.[2] Web development may use content management systems (CMS) to make content changes easier and available with basic technical skills.\r\n\r\nFor larger organizations and businesses, web development teams can consist of hundreds of people (web developers) and follow standard methods like Agile methodologies while developing websites. Smaller organizations may only require a single permanent or contracting developer, or secondary assignment to related job positions such as a graphic designer or information systems technician. Web development may be a collaborative effort between departments rather than the domain of a designated department. There are three kinds of web developer specialization: front-end developer, back-end developer, and full-stack developer. Front-end developers responsible for behavior and visuals that run in the user browser, while back-end developers deal with the servers.', 'content by techopedia', 'webdevelopment', '2019-06-23 01:54:19', 'web dev.jpeg', 3),
(35, 10, 'Web Development VS Web Designing', 'WEB DEVELOPMENT : \r\n\r\nWeb development governs all the code that makes a website tick. It can be split into two categoriesâ€”front-end and back-end. The front-end or client-side of an application is the code responsible for determining how the website will actually display the designs mocked up by a designer. The back-end or server-side of an application is responsible for managing data within the database and serving that data to the front-end to be displayed. As you may have guessed, itâ€™s the front-end developerâ€™s job that tends to share the most overlap with the web designer. Some common skills and tools traditionally viewed as unique to the front-end developer are listed below:\r\n\r\n 1 - HTML/CSS/JavaScript\r\n 2 - CSS preprocessors (i.e., LESS or Sass)\r\n 3 - Frameworks (i.e., AngularJS, ReactJS, Ember)\r\n 4 -Libraries (i.e., jQuery)\r\n 5- Git and GitHub\r\n\r\n\r\n Front-end web developers donâ€™t usually create mock-ups, select typography, or pick color palettesâ€”these are usually provided by the designer. Itâ€™s the developerâ€™s job to bring those mock-ups to life. That said, understanding what the designer wants requires some knowledge of best practices in UI/UX design, so that the developer is able to choose the right technology to deliver the desired look and feel and experience in the final product.', 'content by upwork', 'webdevelopment', '2019-06-23 20:01:31', 'dvs d.png', 4),
(36, 1, 'About PHP', 'PHP: Hypertext Preprocessor (or simply PHP) is a general-purpose programming language originally designed for web development. It was originally created by Rasmus Lerdorf in 1994;[6] the PHP reference implementation is now produced by The PHP Group.[7] PHP originally stood for Personal Home Page,[6] but it now stands for the recursive initialism PHP: Hypertext Preprocessor.[8]\r\n\r\nPHP code may be executed with a command line interface (CLI), embedded into HTML code, or it can be used in combination with various web template systems, web content management systems, and web frameworks. PHP code is usually processed by a PHP interpreter implemented as a module in a web server or as a Common Gateway Interface (CGI) executable. The web server combines the results of the interpreted and executed PHP code, which may be any type of data, including images, with the generated web page. PHP can be used for many programming tasks outside of the web context, such as standalone graphical applications[9] and robotic drone control[10].\r\n\r\nThe standard PHP interpreter, powered by the Zend Engine, is free software released under the PHP License. PHP has been widely ported and can be deployed on most web servers on almost every operating system and platform, free of charge.[11]\r\n\r\nThe PHP language evolved without a written formal specification or standard until 2014, with the original implementation acting as the de facto standard which other implementations aimed to follow. Since 2014, work has gone on to create a formal PHP specification.', 'content by wiki', 'php', '2019-06-23 20:50:28', 'php.png', 4),
(37, 2, 'HTML', 'Hypertext Markup Language (HTML) is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript.\r\n\r\nWeb browsers receive HTML documents from a web server or from local storage and render the documents into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.\r\n\r\nHTML elements are the building blocks of HTML pages. With HTML constructs, images and other objects such as interactive forms may be embedded into the rendered page. HTML provides a means to create structured documents by denoting structural semantics for text such as headings, paragraphs, lists, links, quotes and other items. HTML elements are delineated by tags, written using angle brackets. Tags such as <img /> and <input /> directly introduce content into the page. Other tags such as <p> surround and provide information about document text and may include other tags as sub-elements. Browsers do not display the HTML tags, but use them to interpret the content of the page.\r\n\r\nHTML can embed programs written in a scripting language such as JavaScript, which affects the behavior and content of web pages. Inclusion of CSS defines the look and layout of content. The World Wide Web Consortium (W3C), former maintainer of the HTML and current maintainer of the CSS standards, has encouraged the use of CSS over explicit presentational HTML since 1997.', 'content by wiki', 'HTML', '2019-06-23 20:53:29', 'html.jpg', 1),
(38, 2, 'Top Places to learn CSS', 'Web design might not be the most accessible area to everyone, but CSS and HTML can be very useful, and these are two parts of coding which are really easy. I mean to change the color of your font you just need to type: â€œcolor:redâ€, does it get easier than that?\r\n\r\nWell actually, it gets harder but itâ€™s worth taking a look, since you can customize everything from your blog to your Google Docs documents with a tiny bit of CSS knowledge.  Letâ€™s take a look at where you learn css online free and get CSS tutorials for beginners.\r\n\r\nW3Schools\r\nlearn css online freeW3Schools is a great site. They have lots of tutorials from HTML to PHP and you can be sure that everything you read is up to standards since the site is maintained by the W3C, responsible for the web standards of today.\r\n\r\nThe CSS lessons are pretty detailed and will take you through most of what you need to know, but since this is more of a technical page you will see less examples than elsewhere and the examples they do have are a bit constrained.\r\n\r\nIf you already know some CSS though this is a great reference source.\r\n\r\nTizag\r\nI come across this website a lot when looking up things and I had a look at their CSS tutorials, which I found slightly better structured than W3Schoolâ€™s. The basic information is the same, but if you are an absolute beginner you might want to start here.\r\n\r\nTizag in my eyes is a bit less formal. It seems to me that their examples are closer to real life and the tone is friendlier. There are also helpful tutorials on many other languages like HTML and MySQL, so if you liked the CSS bit you can stay on for the same quality in other languages.\r\n\r\nCSS Zen Garden\r\nThis site is very different from the tutorial sites I mentioned before. On CSS Zen Garden you can put your knowledge to the test or learn from the code written by others. The whole idea is that there is one static and unchangeable HTML file and you have to create a separate look for it using only CSS.\r\n\r\nYou can upload your work and it will be showcased, and you can download othersâ€™ files to take a look at how they did this and that. This is really useful because I myself learned way more by example than by actually learning. The same goes for WordPress templates â€“ if you like one, download it and take a peek in style.css to see how things are done.\r\n\r\nCSS Play [No Longer Available]\r\nTop 5 Sites To Learn CSS Online cssplayCSS Play is a website in between Zen Garden and the tutorial sites because it shows off specific functionalities in CSS and allows you to view the source code.\r\n\r\nInstead of having a whole page or a whole site, you can take a look at examples of flyout menus, opacity examples, IE specific workarounds and so on.\r\n\r\nIf you need a specific functionality and want to get in the know, this website might be the best place to start. It has a fair share of ads which can be a bit distracting, but the info there is solid, and a lot of times the code, or at least the method is very thoroughly explained.\r\n\r\nGoogle\r\nThatâ€™s right, plain old Google Search can be a great companion to learning CSS online and finding CSS tutorials for beginners. Aside from obviously being able to research things you need, you can also look at how specific CSS properties work. Donâ€™t know what values â€œoverflowâ€ can have? Just type â€œcss overflowâ€ or â€œcss overflow propertyâ€ and the first result will tell you what you need to know.\r\n\r\nThe same goes for actually all programming languages, I use this for PHP and MySQL as well, and I donâ€™t think the first result has ever failed me yet.\r\n\r\nSo there you are, no more excuses, itâ€™s time to learn some CSS! You can add your own Google Docs templates, modify your WordPress templates, and do such a lot more, happy CSS-ing!', 'content by makeuse of', 'css', '2019-06-23 20:57:47', 'css.jpg', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
