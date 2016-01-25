

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `formtable`
--
CREATE DATABASE IF NOT EXISTS `formtable` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `formtable`;

-- --------------------------------------------------------

--
-- Table structure for table `formdata`
--

CREATE TABLE IF NOT EXISTS `formdata` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `address`varchar(100) NOT NULL,
  `email` varchar(35) NOT NULL,
  `subject` varchar(100) NOT NULL,
  'question' varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `formdata` (`id`, `fname`, `lname`, `contact`,'address',`email`, `subject`,'question') VALUES
(1, 'a', 'c', 0, 'abc@gmail.com','asdadssadsdasasdsasd', '0fafsdfsdfsdfsfrwr2324234','adadcQdcqweqecdscasdcd432432'),
(2, 'b', 'd', 1, 'ythasdacdsa@yahoo.com','werewrewrwrwerwrew', 'asdacc12313cdsdacdsad','asfdacdscdscaadcasdsca');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
