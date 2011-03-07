CREATE TABLE IF NOT EXISTS `twitter_infos` (
  `id` int(11) NOT NULL auto_increment,
  `login` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `twitter_templates` (
  `id` int(11) NOT NULL auto_increment,
  `notification_template_id` int(11) NOT NULL,
  `body_text` longtext NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `notification_template_id` (`notification_template_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

alter table users ADD COLUMN twitter_info_id int default null;