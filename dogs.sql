-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Dogs`;
CREATE TABLE `Dogs` (
  `DogID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Dog` varchar(50) DEFAULT NULL,
  `Description` text,
  `Weight` varchar(50) DEFAULT NULL,
  `LifeSpan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`DogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Dogs` (`DogID`, `Dog`, `Description`, `Weight`, `LifeSpan`) VALUES

(1,	'Akita',	'Alert, Docile, Friendly, Responsive, Courageous, Dignified',	'99 pounds', '11-15 years'),
(2,	'Australian Shepherd',	'Protective, Good-natured, Active, Intelligent, Affectionate',	'55 pounds', '13-15 years'),
(3,	'Beagle',	'Even Tempered, Gentle, Excitable, Amiable, Determined, Intelligent',	'22 pounds', '12-15 years'),
(4,	'Bermese Mountain Dog',	'Loyal, Faithful, Intelligent, Affectionate',	'100 pounds', '6-8 years'),
(5,	'Bichon Frise',	'Playful, Feisty, Gentle, Cheerful, Affectionate, Sensitive',	'10 pounds', '12-15 years'),
(6,	'Boxer',	'Playful, Devoted, Energetic, Friendly, Calm, Confident, Brave, Intelligent',	'62  pounds', '10-12 years'),
(7,	'Bulldog',	'Docile, Friendly, Willful, Gregarious',	'52 pounds', '10-12 years'),
(8,	'Corgi',	'Outgoing, Playful, Bold, Protective, Tenacious, Friendly',	'24 pounds', '12-15 years'),
(9,	'Dalmation',	'Outgoing, Playful, Energetic, Friendly, Active, Intelligent, Sensitive', '50 pounds', '10-13 years'),
(10,	'German Shepherd',	'Watchful, Curious, Obedient, Loyal, Confident, Courageous, Intelligent',	'68 pounds', '9-13 years'),
(11,	'Golden Retriever',	'Reliable, Friendly, Kind, Confident, Trustworthy, Intelligent',	'71 pounds', '10-12 years'),
(12,	'Great Dane',	'Devoted, Reserved, Gentle, Friendly, Confident, Loving',	'130 pounds', '6-8 years'),
(13,	'Greyhound',	'Even Tempered, Athletic, Gentle, Quiet, Intelligent, Affectionate',	'65 pounds', '10-12 years'),
(14,	'Labrador Retriever',	'Outgoing, Even Tempered, Gentle, Agile, Kind, Intelligent',	'75 pounds', '12-13 years'),
(15,	'Chihuahua',	'Lively, Devoted, Alert, Quick, Courageous',	'5 pounds', '10-18 years'),
(16,	'Pit Bull',	'Stubborn, Obedient, Loyal, Friendly, Courageous, Aggressive, Intelligent',	'50 pounds', '8-15 years'),
(17,	'Pointer',	'Even Tempered, Amiable, Loyal, Kind, Active, Affectionate',	'55 pounds', '12-14 years'),
(18,	'Standard Poodle',	'Intelligent, Sensitive, Active, Sociable, Alert',	'60 pounds', '12-15 years'),
(19,	'Shih-tzu',	'Lively, Outgoing, Playful, Alert, Gentle, Loyal',	'13 pounds', '10-16 years'),
(20,	'Weimaraner',	'Alert, Steady, Fast, Aloof, Energetic, Stubborn, Powerful, Intelligent',	'75 pounds', '10-12 years');

-- 2015-11-17 15:25:40
