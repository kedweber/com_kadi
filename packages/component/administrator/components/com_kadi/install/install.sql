CREATE TABLE IF NOT EXISTS `#__kadi_card` (
  `kadi_card_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cck_fieldset_id` int(11) NOT NULL DEFAULT '31',
  `title` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `lang` varchar(255) NOT NULL,
  `table` varchar(255) NOT NULL,
  `row` bigint NOT NULL,
  PRIMARY KEY (`kadi_card_id`),
  FULLTEXT KEY `search` (`value`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;