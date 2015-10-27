-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 27, 2015 at 05:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `va634778`
--

-- --------------------------------------------------------

--
-- Table structure for table `alastairsgroup_account`
--

CREATE TABLE IF NOT EXISTS `alastairsgroup_account` (
  `productID` int(10) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` text NOT NULL,
  `sku` int(16) NOT NULL,
  `stock` int(6) NOT NULL,
  `cost` decimal(10,0) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `productKeywords` text NOT NULL,
  `weight` decimal(5,0) NOT NULL,
  `measurements` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alastairsgroup_account`
--

INSERT INTO `alastairsgroup_account` (`productID`, `productName`, `description`, `category`, `sku`, `stock`, `cost`, `price`, `image`, `productKeywords`, `weight`, `measurements`) VALUES
(1, 'Reflecting World Art', 'This piece of art work will leave you reflecting on what a big world it is, indeed. A vintage global map on aged parchment is printed "within" the mirror (embedded on its inside back panel). The result: a subtle and sophisticated piece of artwork with added dimension.', 'art&walldecor', 12345678, 100, '50', '349', 'img/walldecor/wallart1.jpeg', 'art, artwork, art work, wall decor, walldecor', '15', ''),
(2, 'A letter Art', 'A simply riveting statement. Blending the natural elements of metal over wood, this symbolic piece of art ties it all together with studded rivet detailing for an industrial-cool touch.', 'art&walldecor', 12345679, 100, '50', '348', 'img/walldecor/wallart2.jpeg', 'art, artwork, art work, wall decor, walldecor', '15', ''),
(3, 'Bird Wall Art', 'Would you believe the artist?s chosen canvas is actually a rustic plank of wood? What a wonderful deviation, given how the earthy material is the backdrop for a stunning nature scene.', 'art&walldecor', 12345680, 100, '50', '329', 'img/walldecor/wallart3.jpeg', 'art, artwork, art work, wall decor, walldecor, birds', '15', ''),
(4, 'Neutral Chandelier', 'Airy and neutral, this chic chandelier can brighten the mood in just about any room in your home. Playful choice of wooden beads, in lieu of traditional crystals, offers a fresh, modern feel and relaxed elegance. When illuminated by candelabra lights, natural-tone beads exude a soft, warm glow.', 'lighting', 12345681, 100, '50', '249', 'img/lighting/lighting1.jpeg', 'lighting, lights, chandelier', '15', ''),
(5, 'Faux Chandelier', 'Faux pillar candles are seated in rustic tone iron rings. Elongated frame makes this distinct chandelier delightful over kitchen islands, bars and dining room tables. Chain suspension adds drama.', 'lighting', 12345682, 100, '50', '199', 'img/lighting/lighting2.jpeg', 'lighting, lights, chandelier', '15', ''),
(6, 'Cade Pendant Light', 'Celestial style. Classic armillary pendant light brings an out-of-this-world element into your space. Wonderfully open and airy, its metal cage encircles candelabra-style bulbs for a romantic glow.', 'lighting', 12345683, 100, '50', '249', 'img/lighting/lighting3.jpeg', 'lighting, lights, chandelier', '15', ''),
(7, 'Bradwin Large Rug', 'Need something to give an ordinary floor a rustic look? Check out the large Bradwin rug. With its simple handwoven pattern and natural texture, a perfect casual style will flow right under your feet.', 'rugs_curtains', 12345684, 100, '50', '499', 'img/rugs_curtains/rugs_curtains1.jpeg', 'rug, rugs, area rug', '15', ''),
(8, 'Gillian Large Rug', 'Look closely enough and you can see a multitude of earthy shades blending harmoniously in the Gillian accent rug, crafted with 100% natural jute. The interwoven Moroccan trellis pattern is beautifully on trend.', 'rugs_curtains', 12345685, 100, '50', '799', 'img/rugs_curtains/rugs_curtains2.jpeg', 'rug, rugs, area rug', '15', ''),
(9, 'Vintage Rug', 'Fringe benefits. Hand-knotted and made of 100% Indian wool, this exquisite area rug masters the art of subtlety. Muted tones make for such an easy blend in a multitude of spaces. Fringe detailing adds to the exotic flair.', 'rugs_curtains', 12345686, 100, '50', '439', 'img/rugs_curtains/rugs_curtains3.jpeg', 'rug, rugs, area rug', '15', ''),
(10, 'Shanilee Dining Room Chairs', 'A multi-media and multi-color take on the traditional Windsor chair. Shanilee dining room side chair is made of unique materials in contrasting frame and seat finishes. Mix and match to create an eclectic aesthetic.', 'kitchen', 12345687, 100, '50', '599', 'img/kitchen/kitchen1.jpeg', 'furniture, dining room, chairs, dining', '15', ''),
(11, 'Owingsville Dining Room Chair', 'The classic ladderback chair is more in style than ever?and doesn?t the Owingsville dining room side chair bring it back in brilliant fashion. It dons a subtle two-tone finish for a look that?s equally homey and sophisticated. Vintage inspiration at its best.', 'kitchen', 12345688, 100, '50', '399', 'img/kitchen/kitchen2.jpeg', 'furniture, dining room, chairs, dining', '15', ''),
(12, 'Ledelle Dining Room Chair', 'Stately without being stuffy, the Ledelle dining room upholstered side chair offers a fresh take on Old World tradition?for beautifully inspired results. Intricately carved details on the frame and back splat are a cut above, while acanthus accents on reeded legs incorporate beautiful flair. Plush seating is upholstered in a burgundy and gold fabric with subtly textured lattice print.', 'kitchen', 12345689, 100, '50', '350', 'img/kitchen/kitchen3.jpeg', 'furniture, dining room, chairs, dining', '15', ''),
(13, 'Home Accents Globe Sculpture', 'Bring a world of style to your space. Mixed finishes of natural metal, patina and metallic gold are elegantly eclectic.', 'gifts', 12345690, 100, '50', '99', 'img/gifts/gifts1.jpeg', 'gifts, home accents, decor, sculpture', '15', ''),
(14, 'Sail Boat Sculpture', 'Sail your way to rustic-chic. Show-stopping sailboat stands nearly at waist level. Galvanized metal and patina finish give industrial and vintage feels.', 'gifts', 12345691, 100, '50', '89', 'img/gifts/gifts2.jpeg', 'gifts, home accents, decor, sculpture', '15', ''),
(15, 'Horse Sculpture', 'Washed in an earthy, rustic finish for even more interest and character, this equestrian sculpture embodies strength and beauty?such a distinguished accent piece.', 'gifts', 12345692, 100, '50', '65', 'img/gifts/gifts3.jpeg', 'gifts, home accents, decor, sculpture', '15', ''),
(16, 'Blue Accent Wall Clock', 'From shabby chic beach house, to vintage fresh farmhouse, this is the kind of wall clock that?s right at home anywhere. The frame''s distressed finish is lovely and the Parisian reference?tr?s bien.', 'clocks', 12345693, 100, '50', '99', 'img/clocks/clocks1.jpeg', 'gifts, home accents, decor, clocks, clock', '15', ''),
(17, 'Wood Accent Wall Clock', 'A fun mix of knotty wood and rustic metal converge in the most interesting way. The clock?s cutouts between clock numbers and within the face make for a light and airy vintage-inspired look.', 'clocks', 12345694, 100, '50', '219', 'img/clocks/clocks2.jpeg', 'gifts, home accents, decor, clock, clocks', '15', ''),
(18, 'Industrial Wall Clock', 'Polished yet industrial chic, this wall clock cranks up the style in fresh fashion. The interior gears and mechanisms are bathed in lighter tones?such a cool complement to the vintage style frame.', 'clocks', 12345695, 100, '50', '179', 'img/clocks/clocks3.jpeg', 'gifts, home accents, decor, clock, clocks', '15', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alastairsgroup_account`
--
ALTER TABLE `alastairsgroup_account`
 ADD PRIMARY KEY (`productID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
