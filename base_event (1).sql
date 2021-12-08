-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 08 Décembre 2021 à 19:02
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `base_event`
--

-- --------------------------------------------------------

--
-- Structure de la table `decorateur`
--

CREATE TABLE IF NOT EXISTS `decorateur` (
  `nom` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `emplacement` varchar(40) NOT NULL,
  `categorie` varchar(40) NOT NULL,
  `note` varchar(10) NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `decorateur`
--

INSERT INTO `decorateur` (`nom`, `description`, `emplacement`, `categorie`, `note`) VALUES
('ChichKhanEvents', 'Dites « OUI ! » à l''assurance de vous laisser porter jusqu''à votre Jour J sans stress ni mauvaise surprise, en laissant notre équipe de professionnels penser aux milles et un détail qui feront de votre événement le plus beau jour de votre vie', 'cité enasser 2', 'décoration mariage', '4,7'),
('dix versions', 'Nothing is left to chance!\r\nRigueur, Anticipation et Créativité sont les Maîtres mots de notre Agence', 'centre urbain nord', 'décoration mariage', '5/5'),
('DONIA deco', 'Donia Déco spécialiste de la décoration , est à votre écoute pour transformer vos fêtes et leur donner une touche de magie.', 'cité enasser 2', 'décoration mariage', '5/5'),
('fekri mkaour', 'Organisation d''événements sur mesure\r\nLocation tentes et matériels de cérémonies\r\nDécorations de mariage', 'Route de manzel chaker', 'décoration mariage', '4,7'),
('Fleur de Lys', 'avec fleurdelys la vie est en rose ', 'dar fadhal', 'fleuriste', '5/5'),
('Hamdi Boubaker', 'Spécialisée dans l’organisation et la coordination d’événements haut de gamme, Sté DIRA DECO', 'ain zaghouan', 'décoration mariage', '4,9'),
('Kandil levenementiel', 'M. Amine REBAI a débuté avec une scénographie événementielle en 2001. Peu à peu, en 2013, il a pu créer en partenariat avec son frère M. Zied REBAI l’entreprise Kandil l''événementiel. Avec tout le matériel qu’il faut, des produits à louer, ils ont pu faire leur autosuffisance. Ils ont fait grandir le projet et ont essayé d’avoir des produits exclusifs.', 'sfax', 'décoration mariage', '4,8'),
('Paradise Déco', 'paradisa déco est là pour vous aidez à réaliser vos projets en décoration de tout genre !\r\nvisitez notre section décooration pour avoir un aperçu des types de décorations que nous vous offrons', 'marsa ville', 'décoration mariage', '4,2'),
('Pro Events Plus', 'Location de sono & lumières professionnels 27 369 150', 'ariana', 'décoration mariage', '5/5');

-- --------------------------------------------------------

--
-- Structure de la table `fleuriste`
--

CREATE TABLE IF NOT EXISTS `fleuriste` (
  `nom` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `emplacement` varchar(40) NOT NULL,
  `categorie` varchar(40) NOT NULL,
  `note` varchar(10) NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fleuriste`
--

INSERT INTO `fleuriste` (`nom`, `description`, `emplacement`, `categorie`, `note`) VALUES
('Fleur de Lys', 'avec fleur de lys la vie est en rose', 'dar fadhal', 'fleuriste', '5/5'),
('fleurentino', 'artiste Nadia boulaares parmis les meillleurs fleuristes en tunisies', 'manouba', 'fleuriste', '4,9'),
('Mille et une fleurs', 'fleuriste\r\nNotre emplacement Avenue El Imem BOUKHAR? Avenue Khezama, ouest ', 'sousse khezama', 'fleuriste', '4,2'),
('paradise deco', 'paradisa déco est là pour vous aidez à réaliser vos projets en décoration de tout genre !\r\nvisitez notre section décooration pour avoir un aperçu des types de décorations que nous vous offrons', 'marsa ville', 'fleuriste', '5/5');

-- --------------------------------------------------------

--
-- Structure de la table `groupemusic`
--

CREATE TABLE IF NOT EXISTS `groupemusic` (
  `nom` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `emplacement` varchar(40) NOT NULL,
  `categorie` varchar(40) NOT NULL,
  `note` varchar(10) NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `groupemusic`
--

INSERT INTO `groupemusic` (`nom`, `description`, `emplacement`, `categorie`, `note`) VALUES
('ahmed ghdira', 'weeding planner et troupe musicale', 'el mannar 2', 'groupe musicaux', '4/5'),
('Elolfa', 'Pour vos cérémonies de mariage, réceptions, galas ...la troupe féminine Elolfa vous promet une soirée inoubliable à contenu adorable avec la participations des meilleures vedettes de la chanson tunisienne', 'cité enasser 2', 'groupe musicaux', '4/5'),
('imed zouari', 'Organisation de Mariage , Soirées Privées, Réception et Galas avec les Grandes Stars', 'el manzeh 7', 'groupe musicaux', '4/5'),
('les emirs', 'Pour toutes vos joies\r\nFêtes de mariage\r\nSoirées privées\r\nFestivité quelconque\r\nla Troupe les émirs saura vous séduire', 'sousse', 'groupe musicaux', '4,7'),
('Mak''am', ' Son sens aigu de l’organisation événementielle (animations musicales, décorations pour fêtes et spectacles, …) dans le monde exigeant du show-biz, autant sur le plan local qu’international, acquis de succès en succès tout au long de son parcours professionnel reconnu par la qualité remarquable de son travails', 'el manzeh 6', 'groupe musicaux', '4/5'),
('Mohamed Ben Rhouma 1', 'Organisation des fêtes de mariage avec la Troupe Musicale Mohamed Ben Rhouma Aweda, Soulamia,Daklet Laaroussa,Zaffa égyptienne,Zaffa syrienne.92594451', 'bardo', 'groupe musicaux', '5/5'),
('Taratata Band', 'CONTACT MANAGER\r\n53 141414 / 20 990 004', 'cité enasser 2', 'groupe musicaux', '5/5'),
('Troupe Mazzika', 'Khaled Ben Aissa:\r\n98 286 186/ 20 286 186\r\nApp MB5 Résidence Rosamis Avenue Mustapha Hjaiej La Nouvelle Ariana', 'nouvelle ariana', 'groupe musicaux', '4,9'),
('Troupe Sofien Siala', 'Une fête, un mariage ou un spectacle Organisé le Maestro Sofien Siala est à coup sûr une soirée réussie avec de la satisfaction par totalité de vos invités .', 'sfax', 'groupe musicaux', '4,2');

-- --------------------------------------------------------

--
-- Structure de la table `photographe`
--

CREATE TABLE IF NOT EXISTS `photographe` (
  `nom` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `emplacement` varchar(40) NOT NULL,
  `categorie` varchar(40) NOT NULL,
  `note` varchar(10) NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `photographe`
--

INSERT INTO `photographe` (`nom`, `description`, `emplacement`, `categorie`, `note`) VALUES
('Brahim Abbes Photogr', 'partage la passion de la photographies', 'centre urbain nord', 'photographe', '4,9'),
('fotofan', 'Production audiovisuelle cinématographique', 'cité enasser 2', 'photographe', '5/5'),
('Mourad Chaari', 'Mourad Chaari Photography: Studio photo vidéo numérique\r\nRoute Afran km 5, en face Afran city 2', 'route de mahdia', 'photographe', '4'),
('Siala Morched', 'NTERNATIONAL PHOTOGRAPHER\r\nAgence photographique Le Photographe', 'carthage', 'photographe', '4,9'),
('Slim Yahia Photograp', 'le meilleur photographe professionel en montage video en tunisie ', 'menzeh 1', 'photographe', '4/5'),
('Studio Sadok Plus Ph', 'Bienvenue chez Sadok Plus Photography la couverture de votre mariage clé en main\r\nthe cover of your wedding turnkey\r\nTel : (+216)22 691 565 ', 'hamem lif', 'photographe', '4/5'),
('Vision & Visions', 'Wedding videographer/ Photographer\r\nTunisie - France - Geneve/worldwide', 'el mourouj 2', 'photographe', '4,2'),
('Zriby Photography', 'Les mariés oublient souvent qu''après le mariage les choses qui restent sont l''amour, les alliances', 'ariana', 'photographe', '4,9');

-- --------------------------------------------------------

--
-- Structure de la table `reservationsalles`
--

CREATE TABLE IF NOT EXISTS `reservationsalles` (
  `id_salles` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `nom_reservation` varchar(30) NOT NULL,
  PRIMARY KEY (`id_salles`,`date`) USING BTREE,
  KEY `id_salles` (`id_salles`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reservationsalles`
--

INSERT INTO `reservationsalles` (`id_salles`, `date`, `nom_reservation`) VALUES
(' Taj Al Mulk ', '2022-01-01', ' Arij chebbi '),
(' Taj Al Mulk ', '2021-12-30', ' mohamed mohamed '),
(' Taj Al Mulk ', '2021-12-21', ' Arij '),
(' Taj Al Mulk ', '2021-11-11', ' Arij '),
('Taj Al Mulk', '2021-12-30', ' mohamed mohamed '),
('Dar hamadi', '2021-12-01', 'arij cheebi'),
('Espace bouraoui', '2021-12-15', 'arij cheebi'),
('Espace féte Prestige', '2021-12-08', 'arij cheebi'),
('Taj Al Mulk', '2021-10-07', ' mohamed mohamed '),
('Taj Al Mulk', '2021-12-15', ' Arij chebbi '),
('Taj Al Mulk', '2021-12-31', ' Arij chebbi '),
('Taj Al Mulk', '2022-02-03', ' mohamed mohamed '),
('Taj Al Mulk', '2022-03-04', ' mohamed mohamed '),
('Taj Al Mulk', '0000-00-00', ' mohamed mohamed '),
('Taj Al Mulk', '2022-04-05', ' mohamed mohamed '),
('Taj Al Mulk', '2022-02-12', ' mohamed mohamed ');

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

CREATE TABLE IF NOT EXISTS `salles` (
  `nom` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `emplacement` varchar(40) NOT NULL,
  `categorie` varchar(40) NOT NULL,
  `note` varchar(10) NOT NULL,
  `capacite` int(11) NOT NULL,
  `url` varchar(50) NOT NULL,
  `disponible` varchar(1) NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `salles`
--

INSERT INTO `salles` (`nom`, `description`, `emplacement`, `categorie`, `note`, `capacite`, `url`, `disponible`) VALUES
('Dar hamadi', 'Nous vous adressons tous nos vœux de bonheur.. Une réception réussie passe avant tout par le choix du votre salle des fêtes .. tout doit être parfait ', 'bou jerdga', 'en plein air', '3,7', 300, 'images/dh.png', 'y'),
('Elysee', 'Bienvenue au palais des fetes et des congrès L’eLYSee où vous disposerez à votre aise d’espaces polyvalents, aménagés avec un goût esthétique raffiné et des touches artistiques qui marient authenticite et modernité dans une attractive et agréable symphonie', 'bardo', 'couverte', '4,9', 200, 'images/else_1.jpg', 'y'),
('Espace bouraoui', 'DAR BOURAOUI fait de vos fêtes des moments magique avec son cadre convivial et une équipe professionnel et créative à votre écoute', 'Carthage', 'en plein air', '4/5', 250, 'images/bou.jpg', 'y'),
('Espace féte Prestige', 'Salle des fêtes « Prestige » est l’espace de rêve pour réunir vos convives à fin de célébrer ensemble votre fête de mariage, outeya, seminaires ou congrés', 'mornag', 'en plein air', '3,7', 400, 'images/Prestige.jpg', 'y'),
('Espace nahawand', 'Nahawand Events est le meilleure partenaire à choisir pour réaliser une organisation parfaite de tous type d ''événement ', 'la Sokra', 'en plein air', '4/5', 500, 'images/nah.jpg', 'y'),
('Golf de carthage', 'Le Golf de Carthage réunit en son sein un parcours de Golf de 18 trous s’étendant sur 29 hectares, un Club House et un Chapiteau salle des fêtes.', 'la Sokra', 'couverte', '4,2', 240, 'images/golf_1.png', 'y'),
('kouri khaireddine', 'Les écuries du palais de khaireddine Pacha classées monument historique depuis 1992, transformées en un espace événementiel-culturel avec un équipement et un service de haute gamme, un lieu d''exception idéal pour tous vos événements', 'el  medina', 'couverte', '4,7', 250, 'images/kouri.jpg', 'y'),
('le carrousel', 'CEREMONIES, SPECTACLES, CONGRES, SEMINAIRES', 'manzeh 5', 'couverte', '4', 240, 'images/karo.jpg', 'y'),
('Manouba events', 'Manouba events votre espace pour les célébrations les plus importantes dans un contexte très particulier avec vue imprenable sur tout Tunis.', 'la manouba', 'en plein air', '4/5', 100, 'images/manouba.png', 'y'),
('Podium', 'PODIUM est une salle polyvalente, haut de gamme et raffinée.\r\nElle offre un patio évoquant les constructions andalouse,ainsi qu'' une grande salle couverte et climatisée qui donne sur un vaste jardin boise\r\nMagnifiquement éclairé la nuit.Son architecture très design sert d''écrin à une atmosphère chaleureuse et conviviale ', 'Gammarth', 'couverte', '4,9', 80, 'images/pod_1.jpg', 'y'),
('Taj Al Mulk', 'La célébration de votre union sacrée sera inoubliable au salle des Tej Al Mulk. Ce lieu remarquable sera votre allié pour que votre mariage soit une réussite. L''accueil chaleureux, la décoration et l''ambiance feutrée vont éblouir vos convives et promettent des moments de pures émotions.\r\nPour votre fête de mariage et de outya Tej Al Mulk vous garantie une bonne ambiance avec son équipe de personnels qualifiées', 'la Sokra', 'couverte', '5/5', 150, 'images/taj_1.jpg', 'y');

-- --------------------------------------------------------

--
-- Structure de la table `traiteur`
--

CREATE TABLE IF NOT EXISTS `traiteur` (
  `nom` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `emplacement` varchar(40) NOT NULL,
  `categorie` varchar(40) NOT NULL,
  `note` varchar(10) NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `traiteur`
--

INSERT INTO `traiteur` (`nom`, `description`, `emplacement`, `categorie`, `note`) VALUES
('Chef Haykel ben zaid', 'Chef Haykel ben zaida est la garentie d''un service de qualités', 'ain zaghouan', 'traiteur mariage', '4,2'),
('Hariz & Gargouri', 'Faites-vous offrir des recettes gourmandes et une cuisine raffinée', 'charguia 2', 'traiteur mariage', '5/5'),
('LES DELICES DE FOLLA', 'Madame vous êtes fatiguée par votre travail? débordée par vos enfants et préoccupations? vous avez des invités... LES DELICE DE FOLLA est à votre service. commandez vos menus chez nous, vous serez servie comme une invitée de marque ... passez vos commandes sans attendre.\r\npour plus d''information 27 22 00 10', 'megrine', 'traiteur mariage', '4,5'),
('les saveurs du palai', 'Un espace alliant authenticité et convivialité pour réussir votre événement (outia, contrat mariage, cocktail, réception, réunion ou diner', 'marsa safsaf', 'traiteur mariage', '4,7'),
('Maison Phedra', 'De par son savoir-faire artisanal et son inéluctable désir d''achever l''excellence, la Maison Phedra répond aux envies de tous les fins gourmets. Nous vous proposons une large gamme de gâteaux ainsi qu''un service traiteur pour tout type d''événement', 'jardin de l manzeh 1', 'traiteur mariage', '4,7'),
('Prét a manger', 'Avec Traiteur Prêt à manger, bénéficiez de solutions fonctionnelles avec des formules clés-en-main qui correspondent à l’identité de votre organisation', 'kheireddine Pacha', 'traiteur mariage', '3');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `type` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `motdepasse` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `numtel` int(8) NOT NULL,
  `confirme` int(11) NOT NULL,
  `encadrer` int(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `type`, `email`, `pseudo`, `motdepasse`, `adresse`, `numtel`, `confirme`, `encadrer`) VALUES
(2, 1, 'Arij@proForme.com', 'mohamed mohamed', '0000', '14 manar', 20333666, 1, 0),
(4, 0, 'Arij@gmail.com', 'Arij chebbi', '1111', 'Megrine', 42430604, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
