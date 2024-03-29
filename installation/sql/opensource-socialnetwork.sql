--
-- Table structure for table `ossn_annotations`
--

CREATE TABLE IF NOT EXISTS `ossn_annotations` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `owner_guid` bigint NOT NULL,
  `subject_guid` bigint NOT NULL,
  `type` varchar(30) NOT NULL,
  `time_created` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ossn_components`
--

CREATE TABLE IF NOT EXISTS `ossn_components` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `com_id` varchar(50) NOT NULL,
  `active` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=65 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ossn_components`
--
INSERT INTO `ossn_components` (`id`, `com_id`, `active`) VALUES
(1, 'OssnProfile', 1),
(2, 'OssnWall', 1),
(3, 'OssnComments', 1),
(4, 'OssnLikes', 1),
(5, 'OssnPhotos', 1),
(6, 'OssnNotifications', 1),
(7, 'OssnSearch', 1),
(8, 'OssnMessages', 1),
(9, 'OssnAds', 1),
(10, 'OssnGroups', 1),
(11, 'OssnSitePages', 1),
(12, 'OssnBlock', 1),
(13, 'OssnChat', 1),
(14, 'OssnPoke', 1),
(15, 'OssnInvite', 1),
(16, 'OssnEmbed', 1),
(17, 'OssnSmilies', 1),
(18, 'Kernel', 1),
(19, 'BanUser', 1),
(20, 'Birthdays', 1),
(21, 'Categories', 1),
(22, 'Censorship', 1),
(24, 'MobileLogin', 0),
(26, 'PhoneNumbers', 1),
(27, 'Sentiment', 1),
(28, 'SiteOffline', 1),
(29, 'OpenTeknik', 1),
(30, 'Styler', 1),
(31, 'Videos', 1),
(32, 'SocialLogin', 1),
(33, 'EMembers', 1),
(34, 'SharePost', 1),
(35, 'AccessCode', 0),
(36, 'CustomFields', 1),
(37, 'Moderator', 1),
(38, 'OssnSounds', 1),
(39, 'Hangout', 1),
(40, 'UserVerified', 1),
(41, 'LinkPreview', 1),
(42, 'Report', 1),
(43, 'HashTag', 1),
(44, 'OssnAutoPagination', 1),
(45, 'BusinessPage', 1),
(46, 'Polls', 1),
(47, 'Announcement', 1),
(48, 'Feedback', 0),
(49, 'FirstLogin', 1),
(50, 'GDPR', 1),
(51, 'GroupInvite', 1),
(52, 'Hangout', 1),
(53, 'PasswordValidation', 1),
(54, 'MenuBuilder', 1),
(55, 'Events', 1),
(56, 'PrivateNetwork', 0),
(57, 'OssnMessageTyping', 1),
(58, 'OssnRealTimeComments', 1),
(59, 'OssnPostBackground', 1),
(60, 'Stories', 1),
(61, 'RememberLogin', 1),
(62, 'FamilyRelationships', 1),
(63, 'OssnGiphy', 1),
(64, 'OssnLocation', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ossn_entities`
--

CREATE TABLE IF NOT EXISTS `ossn_entities` (
  `guid` bigint NOT NULL AUTO_INCREMENT,
  `owner_guid` bigint NOT NULL,
  `type`  VARCHAR(20) NOT NULL,
  `subtype`  VARCHAR(50) NOT NULL,
  `time_created` int NOT NULL,
  `time_updated` int DEFAULT NULL,
  `permission` int NOT NULL,
  `active` int NOT NULL,
  PRIMARY KEY (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=19 COLLATE=utf8mb4_general_ci;

INSERT INTO `ossn_entities` (`guid`, `owner_guid`, `type`, `subtype`, `time_created`, `time_updated`, `permission`, `active`) VALUES
(1, 30, 'component', 'styler', 1454501038, 0, 2, 1),
(2, 1, 'object', 'field_name', 1513615709, 0, 2, 1),
(3, 1, 'object', 'field_type', 1513615709, 0, 2, 1),
(4, 1, 'object', 'placeholder', 1513615709, 0, 2, 1),
(5, 1, 'object', 'show_on_signup', 1513615709, 0, 2, 1),
(6, 1, 'object', 'is_required', 1513615709, 0, 2, 1),
(7, 1, 'object', 'show_on_about', 1513615709, 0, 2, 1),
(8, 1, 'object', 'show_label', 1513615709, 0, 2, 1),
(9, 2, 'object', 'field_name', 1513615709, 0, 2, 1),
(10, 2, 'object', 'field_type', 1513615709, 0, 2, 1),
(11, 2, 'object', 'placeholder', 1513615709, 0, 2, 1),
(12, 2, 'object', 'show_on_signup', 1513615709, 0, 2, 1),
(13, 2, 'object', 'is_required', 1513615709, 0, 2, 1),
(14, 2, 'object', 'show_on_about', 1513615709, 0, 2, 1),
(15, 2, 'object', 'show_label', 1513615709, 0, 2, 1),
(16, 2, 'object', 'field_options', 1513615709, 0, 2, 1),
(17, 36, 'component', 'init', 1513615709, 0, 2, 1),
(18, 31, 'component', 'upgrade', 1513615709, 0, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ossn_entities_metadata`
--

CREATE TABLE IF NOT EXISTS `ossn_entities_metadata` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `guid` bigint NOT NULL,
  `value` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=19 COLLATE=utf8mb4_general_ci;


INSERT INTO `ossn_entities_metadata` (`id`, `guid`, `value`) VALUES
(1, 1, 'blue'),
(2, 2, 'birthdate'),
(3, 3, 'text'),
(4, 4, 'Birthdate'),

(5, 5, 'yes'),
(6, 6, 'yes'),
(7, 7, 'yes'),
(8, 8, 'no'),
(9, 9, 'gender'),
(10, 10, 'radio'),
(11, 11, 'Gender'),
(12, 12, 'yes'),
(13, 13, 'yes'),
(14, 14, 'yes'),
(15, 15, 'no'),
(16, 16, '["male","female"]'),
(17, 17, '1'),
(18, 18, 'v5.2');
-- --------------------------------------------------------

--
-- Table structure for table `ossn_likes`
--

CREATE TABLE IF NOT EXISTS `ossn_likes` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `subject_id` bigint NOT NULL,
  `guid` bigint NOT NULL,
  `type` varchar(30) NOT NULL,
  `subtype` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,  
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ossn_messages`
--

CREATE TABLE IF NOT EXISTS `ossn_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `message_from` bigint NOT NULL,
  `message_to` bigint NOT NULL,
  `message` text NOT NULL,
  `viewed` varchar(1) DEFAULT NULL,
  `time` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ossn_notifications`
--

CREATE TABLE IF NOT EXISTS `ossn_notifications` (
  `guid` bigint NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(50) NOT NULL,
  `poster_guid` bigint NOT NULL,
  `owner_guid` bigint NOT NULL,
  `subject_guid` bigint NOT NULL,
  `viewed` varchar(1) DEFAULT NULL,
  `time_created` int NOT NULL,
  `item_guid` bigint NOT NULL,
  PRIMARY KEY (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ossn_object`
--

CREATE TABLE IF NOT EXISTS `ossn_object` (
  `guid` bigint NOT NULL AUTO_INCREMENT,
  `owner_guid` bigint NOT NULL,
  `type` varchar(20) NOT NULL,
  `time_created` int NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `subtype` varchar(30) NOT NULL,
  PRIMARY KEY (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 COLLATE=utf8mb4_general_ci;

INSERT INTO `ossn_object` (`guid`, `owner_guid`, `type`, `time_created`, `title`, `description`, `subtype`) VALUES
(1, 1, 'site', 1513615709, '', '', 'custom:fields'),
(2, 1, 'site', 1513615709, '', '', 'custom:fields');

-- --------------------------------------------------------

--
-- Table structure for table `ossn_relationships`
--

CREATE TABLE IF NOT EXISTS `ossn_relationships` (
  `relation_id` bigint NOT NULL AUTO_INCREMENT,
  `relation_from` bigint NOT NULL,
  `relation_to` bigint NOT NULL,
  `type` varchar(30)  NOT NULL,
  `time` int NOT NULL,
  PRIMARY KEY (`relation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ossn_site_settings`
--

CREATE TABLE IF NOT EXISTS `ossn_site_settings` (
  `setting_id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=13 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ossn_site_settings`
--

INSERT INTO `ossn_site_settings` (`setting_id`, `name`, `value`) VALUES
(1, 'theme', 'white'),
(2, 'site_name', '<<sitename>>'),
(3, 'language', 'en'),
(4, 'cache', '0'),
(5, 'owner_email', '<<owner_email>>'),
(6, 'notification_email', '<<notification_email>>'),
(7, 'upgrades', '["1561645773.php", "1605286634.php", "1632413382.php", "1633420776.php", "1655424000.php", "1655453491.php", "1659870406.php", "1669507200.php", "1669852800.php", "1680051600.php"]'),
(9, 'display_errors', 'off'),
(10, 'site_key', '<<secret>>'),
(11, 'last_cache', ''),
(12, 'site_version', '7.0');


-- --------------------------------------------------------

--
-- Table structure for table `ossn_users`
--

CREATE TABLE IF NOT EXISTS `ossn_users` (
  `guid` bigint NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(65) NOT NULL,
  `salt` varchar(8) NOT NULL,
  `first_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_login` int NOT NULL,
  `last_activity` int NOT NULL,
  `activation` varchar(32),
  `time_created` int NOT NULL,
  PRIMARY KEY (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 COLLATE=utf8mb4_general_ci;

--
-- Ossn v4.2 Database improvements
--

ALTER TABLE `ossn_annotations`
	ADD KEY `owner_guid` (`owner_guid`),
	ADD KEY `subject_guid` (`subject_guid`),
	ADD KEY `time_created` (`time_created`);
  
ALTER TABLE `ossn_annotations` 
	ADD KEY `type` (`type`);

ALTER TABLE `ossn_entities`
	ADD KEY `owner_guid` (`owner_guid`),
	ADD KEY `time_created` (`time_created`),
	ADD KEY `time_updated` (`time_updated`),
	ADD KEY `active` (`active`),
	ADD KEY `permission` (`permission`);
  
ALTER TABLE `ossn_entities` 
	ADD KEY `type` (`type`),
	ADD KEY `subtype` (`subtype`),
	ADD KEY `eky_ts` (`type`,`subtype`),
	ADD KEY `eky_tso` (`type`,`subtype`,`owner_guid`);

ALTER TABLE `ossn_entities_metadata`
	ADD KEY `guid` (`guid`);
  
ALTER TABLE `ossn_entities_metadata` ADD FULLTEXT KEY `value` (`value`);

ALTER TABLE `ossn_notifications`
	ADD KEY `poster_guid` (`poster_guid`),
	ADD KEY `owner_guid` (`owner_guid`),
	ADD KEY `subject_guid` (`subject_guid`), 
	ADD KEY `time_created` (`time_created`),
	ADD KEY `item_guid` (`item_guid`);
	
ALTER TABLE `ossn_notifications` 
	ADD KEY `type` (`type`);

ALTER TABLE `ossn_object`
	ADD KEY `owner_guid` (`owner_guid`),
	ADD KEY `time_created` (`time_created`);
  
ALTER TABLE `ossn_object` 
	ADD KEY `type` (`type`),
	ADD KEY `subtype` (`subtype`),
	ADD KEY `oky_ts` (`type`, `subtype`),
	ADD KEY `oky_tsg` (`type`,`subtype`,`guid`);


ALTER TABLE `ossn_relationships`
	ADD KEY `relation_to` (`relation_to`),
	ADD KEY `relation_from` (`relation_from`),
	ADD KEY `time` (`time`);
	
ALTER TABLE `ossn_relationships` 
	ADD KEY `type` (`type`);

ALTER TABLE `ossn_users`
	ADD KEY `last_login` (`last_login`),
	ADD KEY `last_activity` (`last_activity`),
	ADD KEY `time_created` (`time_created`);
  
ALTER TABLE `ossn_users`
	ADD FULLTEXT KEY `type` (`type`),
	ADD FULLTEXT KEY `email` (`email`),
	ADD FULLTEXT KEY `first_name` (`first_name`),
	ADD FULLTEXT KEY `last_name` (`last_name`);

ALTER TABLE `ossn_likes` 
	ADD KEY `subtype` (`subtype`);

ALTER TABLE `ossn_messages` 
	ADD KEY `message_to` (`message_to`),
	ADD KEY `message_from` (`message_from`);
	
	
ALTER TABLE ossn_users ADD INDEX index_username (username);

ALTER TABLE ossn_components ADD INDEX index_com_id (com_id);
ALTER TABLE ossn_components ADD INDEX index_active (active);

ALTER TABLE ossn_likes ADD INDEX index_subject_id_guid_type (subject_id,guid,type);
ALTER TABLE ossn_likes ADD INDEX index_subject_id_type (subject_id,type);