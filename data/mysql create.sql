-- Hart Cemetery Project
-- 
-- Create syntax for TABLE 'blocks'
CREATE TABLE `blocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` int(11) DEFAULT NULL,
  `cemetery_ID` int(11) DEFAULT NULL,
  `block` varchar(128) DEFAULT NULL,
  `block_desc` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'cemetery'
CREATE TABLE `cemetery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cemetery_name` varchar(128) DEFAULT NULL,
  `cemetery_description` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'deceased'
CREATE TABLE `deceased` (
  `id` varchar(30) NOT NULL DEFAULT '',
  `property_id` varchar(30) NOT NULL DEFAULT '',
  `firstname` varchar(128) DEFAULT NULL,
  `middlename` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `prefix` varchar(10) DEFAULT NULL,
  `suffix` varchar(10) DEFAULT NULL,
  `sex` enum('Male','Female') DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `death_date` date DEFAULT NULL,
  `burial_date` date DEFAULT NULL,
  `birthplace` varchar(128) DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `city` varchar(128) DEFAULT NULL,
  `state` varchar(128) DEFAULT NULL,
  `zip` varchar(128) DEFAULT NULL,
  `deathplace` varchar(128) DEFAULT NULL,
  `cause` varchar(128) DEFAULT NULL,
  `race` varchar(128) DEFAULT NULL,
  `fun_dir_id` int(11) DEFAULT NULL,
  `mort` int(11) DEFAULT NULL,
  `ssn` varchar(128) DEFAULT NULL,
  `notes` text,
  `obituary` text,
  `headstone_type` varchar(11) DEFAULT NULL,
  `headstone_material` varchar(11) DEFAULT NULL,
  `headstone_image` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'headstone'
CREATE TABLE `headstone` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(128) DEFAULT NULL,
  `material` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'lot_type'
CREATE TABLE `lot_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lot_type` varchar(128) DEFAULT NULL,
  `lot_description` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'people'
CREATE TABLE `people` (
  `peep_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `isDirector` tinyint(1) DEFAULT NULL,
  `isMort` tinyint(1) DEFAULT NULL,
  `isOwner` tinyint(1) DEFAULT NULL,
  `attn` varchar(128) DEFAULT NULL,
  `address1` varchar(128) DEFAULT NULL,
  `address2` varchar(128) DEFAULT NULL,
  `city` varchar(128) DEFAULT NULL,
  `state` varchar(128) DEFAULT NULL,
  `zip` varchar(128) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `phone1` varchar(128) DEFAULT NULL,
  `phone2` varchar(128) DEFAULT NULL,
  `phone3` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `dl_num` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`peep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'property'
CREATE TABLE `property` (
  `id` varchar(30) NOT NULL DEFAULT '',
  `owner_id` int(11) DEFAULT NULL,
  `cemetery_id` int(10) DEFAULT NULL,
  `section` int(10) DEFAULT NULL,
  `block` int(10) DEFAULT NULL,
  `lot` varchar(30) DEFAULT NULL,
  `lot_type` varchar(30) DEFAULT NULL,
  `deed_book` varchar(30) DEFAULT NULL,
  `deed_page` varchar(30) DEFAULT NULL,
  `deed_url` varchar(250) DEFAULT NULL,
  `lat` decimal(10,8) DEFAULT NULL,
  `lng` decimal(11,8) DEFAULT NULL,
  `map_url` varchar(250) DEFAULT NULL,
  `photo_url` varchar(250) DEFAULT NULL,
  `headimg_url` varchar(250) DEFAULT NULL,
  `notes` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'sections'
CREATE TABLE `sections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cemetery_id` int(10) DEFAULT NULL,
  `section_name` varchar(128) DEFAULT NULL,
  `section_description` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;