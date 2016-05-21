-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2014 at 10:28 PM
-- Server version: 5.5.38
-- PHP Version: 5.4.4-14+deb7u12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mrisek_000002`
--

-- --------------------------------------------------------

--
-- Table structure for table `Clanak`
--

CREATE TABLE IF NOT EXISTS `Clanak` (
  `idClanak` int(11) NOT NULL AUTO_INCREMENT,
  `naslovClanak` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sadrzajClanak` text COLLATE utf8_unicode_ci NOT NULL,
  `datumClanak` date NOT NULL,
  `slikaClanak` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idClanak`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=667 ;

--
-- Dumping data for table `Clanak`
--

INSERT INTO `Clanak` (`idClanak`, `naslovClanak`, `sadrzajClanak`, `datumClanak`, `slikaClanak`) VALUES
(1, 'Koncert grupe Magazin', 'U konkurenciji tri grada koji su bili kandidati za glazbeni spektakl roÄ‘endanskog koncerta grupe Magazin odabran je grad Opatija. Prevagnula je odluka pjevaÄice Andree Å uÅ¡njare, buduÄ‡i da je velik broj njezinih prijatelja i oboÅ¾avatelja upravo iz tog podruÄja. "Pripremamo poseban program za staro i mlado te koristim priliku pozvati sve graÄ‘ane i njihove goste da doÄ‘u na pravu roÄ‘endansku feÅ¡tu i dobro se zabave prije poÄetka turistiÄke sezone", rekao nam je Ante MiletiÄ‡, bubnjar grupe. Organizator ovog velikog roÄ‘endanskog koncerta je Glazbena mladeÅ¾ Opatija koja se zahvaljuje Gradu Opatiji Å¡to je prepoznao znaÄaj ovog koncerta za svoje sugraÄ‘ane i prihvatio generalno pokroviteljstvo koncerta. RoÄ‘endanski koncert odrÅ¾at Ä‡e se na Uskrsni ponedjeljak, 21.travnja, s poÄetkom u 20.30 sati u Gradskoj sportskoj dvorani Opatija. Ulaznice za ovaj spektakl mogu se u pretprodaji nabaviti po vrlo popularnoj cijeni od 40 kn u Sport caffe-u i Fotomuzikalijama Joko, a na sam dan koncerta, od 9 sati ujutro, po cijeni od 50 kn na blagajni dvorane.', '2014-04-20', '<span class="left"><img src="style/magazin.jpg" /></span>'),
(3, 'Izgubili se poljski turisti!', 'Poljski turisti izgubili su se na JuÅ¾nom Velebitu, na podruÄju Nacionalnog parka Paklenice, a ekipe HGSS-a pokuÅ¡avaju ih locirati i dovesti na sigurno.\r\nHrvatska gorska sluÅ¾ba spaÅ¡avanja (HGSS) priopÄ‡ila je veÄeras kako je u tijeku potraga za dvoje izgubljenih Poljaka na Velebitu, koji su po dojavi za pomoÄ‡ neozlijeÄ‘eni, no ne mogu naÄ‡i put.\r\nPoljski turisti izgubili su se na JuÅ¾nom Velebitu, na podruÄju Nacionalnog parka Paklenice, a ekipe HGSS-a pokuÅ¡avaju ih locirati i dovesti na sigurno.\r\nU popodnevnim satima su se tri ekipe HGSS-a s Äamcima i potraÅ¾nim psima ukljuÄili i u potragu za nestalim slovenskim raftingaÅ¡om na Muri kod Novakovca.\r\nNa poplavljenom podruÄju, navodi ta humanitarna udruga, nekoliko HGSS ekipa odraÄ‘uju zadaÄ‡e za potrebe kriznog stoÅ¾era.', '2014-06-02', '<span class="left"><img src="style/biokovo.jpg" /></span>');

-- --------------------------------------------------------

--
-- Table structure for table `Galerija`
--

CREATE TABLE IF NOT EXISTS `Galerija` (
  `idGalerija` int(11) NOT NULL AUTO_INCREMENT,
  `nazivGalerija` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slikaGalerija` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idGalerija`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=123889 ;

--
-- Dumping data for table `Galerija`
--

INSERT INTO `Galerija` (`idGalerija`, `nazivGalerija`, `slikaGalerija`) VALUES
(5, 'Skulptura', '<span class="left"><img src="style/kip2.jpg" /></span>'),
(6, 'Skulptura', '<span class="left"><img src="style/kip.jpg" /></span>'),
(7, 'Skulptura', '<span class="left"><img src="style/kip3.jpg" /></span>'),
(8, 'Priroda', '<span class="left"><img src="style/obala.jpg" /></span>'),
(9, 'Priroda', '<span class="left"><img src="style/obala2.jpg" /></span>'),
(10, 'Priroda', '<span class="left"><img src="style/obala3.jpg" /></span>');

-- --------------------------------------------------------

--
-- Table structure for table `Klijent`
--

CREATE TABLE IF NOT EXISTS `Klijent` (
  `idKlijent` int(11) NOT NULL AUTO_INCREMENT,
  `imeKlijent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prezimeKlijent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `drzavaKlijent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailKlijent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sobaKlijent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prehranaKlijent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datumKlijent` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idKlijent`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=123176 ;

--
-- Dumping data for table `Klijent`
--

INSERT INTO `Klijent` (`idKlijent`, `imeKlijent`, `prezimeKlijent`, `drzavaKlijent`, `emailKlijent`, `sobaKlijent`, `prehranaKlijent`, `datumKlijent`) VALUES
(123175, 'NekoIme', 'NekoPrezime', 'Hrvatska', 'neko@net.hr', '1/2 Park', 'polupansion', '2014-05-07\r\n2014-05-14'),
(123174, 'Matija', 'Risek', 'Hrvatska', 'mrisek@net.hr', '1/2 More', 'doruÄak', '2014-08-05\r\n2014-08-12'),
(123173, 'Dejan', 'Kramar', 'Bosna i Hercegovina', 'd.kramar@net.hr', 'velika', 'malo', 'sutra');

-- --------------------------------------------------------

--
-- Table structure for table `Kontakt`
--

CREATE TABLE IF NOT EXISTS `Kontakt` (
  `idKontakt` int(11) NOT NULL AUTO_INCREMENT,
  `imeKontakt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prezimeKontakt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailKontakt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `porukaKontakt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idKontakt`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=782 ;

--
-- Dumping data for table `Kontakt`
--

INSERT INTO `Kontakt` (`idKontakt`, `imeKontakt`, `prezimeKontakt`, `emailKontakt`, `porukaKontakt`) VALUES
(1, 'Matija', 'Risek', 'mrisek@net.hr', 'Neka poruka. Lorem Ipsum. Neka poruka. Lorem Ipsum. Neka poruka. Lorem Ipsum.'),
(2, 'Pero', 'Buden', 'perobuden@net.hr', 'Neka poruka. Lorem Ipsum. Neka poruka. Lorem Ipsum. Neka poruka. Lorem Ipsum.'),
(777, 'Igor', 'Tudor', 'itudor@torcida.hr', 'Tovari posvuda!'),
(778, 'Matija', 'Risek', 'mrisek@net.hr', 'Evo bilo je i vrijeme.'),
(779, 'David', 'Gray', 'davidgray@msn.com', 'Yo men I want to stay here for a couple of days. Just have to take care of my alcoholism. See you again!'),
(780, 'Novo', 'Ime', 'mail@net.hr', 'Poruka'),
(781, 'Matija', 'Risek', 'mrisek@net.hr', 'Bok svima, Å¾elim se registriati.');

-- --------------------------------------------------------

--
-- Table structure for table `Link`
--

CREATE TABLE IF NOT EXISTS `Link` (
  `idLink` int(11) NOT NULL AUTO_INCREMENT,
  `nazivLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sadrzajLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idLink`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=655 ;

--
-- Dumping data for table `Link`
--

INSERT INTO `Link` (`idLink`, `nazivLink`, `sadrzajLink`) VALUES
(1, 'Index', 'index.hr'),
(2, 'Mev', 'www.mev.hr');

-- --------------------------------------------------------

--
-- Table structure for table `Navigacija`
--

CREATE TABLE IF NOT EXISTS `Navigacija` (
  `idNavigacija` int(11) NOT NULL AUTO_INCREMENT,
  `nazivNavigacija` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkNavigacija` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `opisNavigacija` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idNavigacija`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `Navigacija`
--

INSERT INTO `Navigacija` (`idNavigacija`, `nazivNavigacija`, `linkNavigacija`, `opisNavigacija`) VALUES
(1, 'PoÄetna', 'index.php', 'PoÄetna stranica, Älanci, novosti i linkovi'),
(2, 'Cjenik', 'cjenik.php', 'Cijene, kalkulator, novosti i linkovi'),
(3, 'Rezervacija', 'rezervacija.php', 'Forma za rezervaciju, dohvat cijene iz baze, novosti i linkovi'),
(4, 'Galerija', 'galerija.php', 'Prikaz 5 galerija, informacije o galerijama, novosti i linkovi'),
(5, 'Kontakt', 'kontakt.php', 'Adresa, forma za kontakt, novosti i linkovi'),
(6, 'Admin', 'admin.php', 'Upravljanje cijelom stranicom Hotela Opatija');

-- --------------------------------------------------------

--
-- Table structure for table `Novosti`
--

CREATE TABLE IF NOT EXISTS `Novosti` (
  `idNovosti` int(11) NOT NULL AUTO_INCREMENT,
  `naslovNovosti` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sadrzajNovosti` text COLLATE utf8_unicode_ci NOT NULL,
  `datumNovosti` date NOT NULL,
  `linkNovosti` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idNovosti`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=660 ;

--
-- Dumping data for table `Novosti`
--

INSERT INTO `Novosti` (`idNovosti`, `naslovNovosti`, `sadrzajNovosti`, `datumNovosti`, `linkNovosti`) VALUES
(1, 'SpaÅ¡eni poljski turisti na Biokovu!', 'Potraga za nesretnim turistima koji su obiljeÅ¾ili poÄetak turistiÄke sezone u Hrvatskoj je okonÄana. U potragu za izletnicima ukljuÄio se i HGSS kao i mnogi planinari, te su poljaci napokon locirani!', '2014-04-06', 'www.novilist.hr/Vijesti/Crna-kronika/Spasen-poljski-turist-na-Biokovu'),
(2, 'UspjeÅ¡na turistiÄka sezona!', 'DosadaÅ¡nja turistiÄka sezona u Istrii i Kvarneru je uspjeÅ¡na iako su neki pokazatelji na njezinom poÄetku upuÄ‡ivali da Ä‡e biti loÅ¡ija nego lani. Turisti s novih trÅ¾iÅ¡ta jednim su dijelom uspjeli pokriti veliki pad dolaska ruskih turista.', '2014-08-09', 'www.mint.hr/default.aspx?id=11722');

-- --------------------------------------------------------

--
-- Table structure for table `Soba`
--

CREATE TABLE IF NOT EXISTS `Soba` (
  `idSoba` int(11) NOT NULL AUTO_INCREMENT,
  `nazivSoba` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uslugaSoba` text COLLATE utf8_unicode_ci NOT NULL,
  `cijenaSoba` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idSoba`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12345345 ;

--
-- Dumping data for table `Soba`
--

INSERT INTO `Soba` (`idSoba`, `nazivSoba`, `uslugaSoba`, `cijenaSoba`) VALUES
(4, 'Standardna dvokrevetna s pogledom na park', 'NoÄ‡enje s doruÄkom', '547,00 kn'),
(2, 'Standardna jednokrevetna s pogledom na park', 'NoÄ‡enje s doruÄkom', '410,00 kn'),
(3, 'Superior jednokrevetna s pogledom na park', 'Polupansion, spa', '494,00 kn'),
(5, 'Superior dvokrevetna s pogledom na park', 'Polupansion, spa', '715,00 kn'),
(6, 'Standardna jednokrevetna s pogledom na more', 'NoÄ‡enje s doruÄkom', '715,00 kn'),
(7, 'Superior jednokrevetna s pogledom na more', 'Polupansion, spa', '623,00 kn'),
(8, 'Standardna dvokrevetna s pogledom na more', 'NoÄ‡enje s doruÄkom', '791,00 kn'),
(9, 'Superior dvokrevetna s pogledom na more', 'Polupansion, spa', '570,00 kn'),
(10, 'POTKROVLJE s pogledom na park', 'NoÄ‡enje s doruÄkom', '349,00 kn'),
(11, 'POTKROVLJE s pogledom na more', 'Polupansion', '433,00 kn');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `imeUser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lozinkaUser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=324235 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`idUser`, `imeUser`, `lozinkaUser`) VALUES
(123, 'korisnik', '1234ed');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
