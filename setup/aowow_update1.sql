DROP TABLE IF EXISTS `aowow_news`;
CREATE TABLE `aowow_news` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `text_loc0` varchar(255) NOT NULL default '',
  `text_loc2` varchar(255) NOT NULL default '',
  `text_loc3` varchar(255) NOT NULL default '',
  `text_loc6` varchar(255) NOT NULL default '',
  `text_loc8` varchar(255) NOT NULL default '',
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED COMMENT='News';

INSERT IGNORE INTO `aowow_news` (`id`,`text_loc0`, `text_loc2`, `text_loc3`, `text_loc6`, `text_loc8`,`time`) VALUES
(1,'Welcome to <b><span class=\"q5\">AoWoW</span></b>!','Bienvenue à <b><span class=\"q5\">AoWoW</span></b>!','Willkommen bei <b><span class=\"q5\">AoWoW</span></b>!','Bienvenidos a <b><span class=\"q5\">StrongHead</span></b>!','Добро пожаловать на <b><span class=\"q5\">AoWoW</span></b>!','1012-11-05 07:00:00'),
(2,' ',' ',' ','Añadido espacio de notícias.',' ','2012-11-05'),
(3,' ',' ',' ','Más cambios en diseño',' ','2012-11-05');


DROP TABLE IF EXISTS `aowow_screenshots`;
CREATE TABLE `aowow_screenshots` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Screenshot ID',
  `type` int(10) unsigned NOT NULL COMMENT 'Type of Page',
  `typeid` int(10) unsigned NOT NULL COMMENT 'ID Of Page',
  `username` mediumtext NOT NULL COMMENT 'Username',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Screenshot timestamp',
  `body` text COMMENT 'Comment text',
  `moderated` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Not implemented',
  `width` mediumint(4) NOT NULL,
  `height` mediumint(4) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='AoWoW Scrrenshots Table';

