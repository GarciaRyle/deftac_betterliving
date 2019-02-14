-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 10:41 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deftacbetterliving`
--

-- --------------------------------------------------------

--
-- Table structure for table `deftac_akismet_rating`
--

CREATE TABLE `deftac_akismet_rating` (
  `eid` int(11) NOT NULL,
  `spam` tinyint(1) NOT NULL DEFAULT '0',
  `spam_check_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deftac_b8_rating`
--

CREATE TABLE `deftac_b8_rating` (
  `eid` int(11) NOT NULL,
  `spam` tinyint(1) NOT NULL DEFAULT '0',
  `training_type` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deftac_b8_wordlist`
--

CREATE TABLE `deftac_b8_wordlist` (
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `count_ham` int(10) UNSIGNED DEFAULT NULL,
  `count_spam` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deftac_b8_wordlist`
--

INSERT INTO `deftac_b8_wordlist` (`token`, `count_ham`, `count_spam`) VALUES
('b8*dbversion', 3, NULL),
('b8*texts', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `deftac_banlists`
--

CREATE TABLE `deftac_banlists` (
  `name` varchar(255) NOT NULL DEFAULT '',
  `list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deftac_banlists`
--

INSERT INTO `deftac_banlists` (`name`, `list`) VALUES
('user_agents', ''),
('ips', ''),
('words', '');

-- --------------------------------------------------------

--
-- Table structure for table `deftac_bookmarks`
--

CREATE TABLE `deftac_bookmarks` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `posting_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subject` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deftac_bookmark_tags`
--

CREATE TABLE `deftac_bookmark_tags` (
  `bid` int(11) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deftac_categories`
--

CREATE TABLE `deftac_categories` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `category` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `accession` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deftac_entries`
--

CREATE TABLE `deftac_entries` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tid` int(11) NOT NULL DEFAULT '0',
  `uniqid` varchar(255) NOT NULL DEFAULT '',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_reply` timestamp NULL DEFAULT NULL,
  `edited` timestamp NULL DEFAULT NULL,
  `edited_by` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `category` int(11) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '',
  `hp` varchar(255) NOT NULL DEFAULT '',
  `location` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(128) NOT NULL DEFAULT '',
  `text` text NOT NULL,
  `show_signature` tinyint(4) DEFAULT '0',
  `email_notification` tinyint(4) DEFAULT '0',
  `marked` tinyint(4) DEFAULT '0',
  `locked` tinyint(4) DEFAULT '0',
  `sticky` tinyint(4) DEFAULT '0',
  `views` int(11) DEFAULT '0',
  `edit_key` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deftac_entries_cache`
--

CREATE TABLE `deftac_entries_cache` (
  `cache_id` int(11) NOT NULL,
  `cache_text` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deftac_entry_tags`
--

CREATE TABLE `deftac_entry_tags` (
  `bid` int(11) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deftac_logincontrol`
--

CREATE TABLE `deftac_logincontrol` (
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(255) NOT NULL DEFAULT '',
  `logins` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deftac_pages`
--

CREATE TABLE `deftac_pages` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `menu_linkname` varchar(255) NOT NULL DEFAULT '',
  `access` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deftac_read_entries`
--

CREATE TABLE `deftac_read_entries` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `posting_id` int(11) UNSIGNED NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deftac_settings`
--

CREATE TABLE `deftac_settings` (
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deftac_settings`
--

INSERT INTO `deftac_settings` (`name`, `value`) VALUES
('access_for_users_only', '0'),
('ajax_preview', '1'),
('akismet_entry_check', '0'),
('akismet_key', ''),
('akismet_mail_check', '0'),
('autolink', '1'),
('autologin', '1'),
('auto_delete_spam', '168'),
('auto_lock', '0'),
('auto_lock_old_threads', '0'),
('avatars', '0'),
('avatar_max_filesize', '20'),
('avatar_max_height', '80'),
('avatar_max_width', '80'),
('b8_auto_training', '1'),
('b8_entry_check', '1'),
('b8_spam_probability_threshold', '80'),
('bad_behavior', '0'),
('bbcode', '1'),
('bbcode_code', '0'),
('bbcode_color', '1'),
('bbcode_img', '1'),
('bbcode_latex', '0'),
('bbcode_latex_uri', 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS_CHTML.js'),
('bbcode_size', '1'),
('captcha_email', '0'),
('captcha_posting', '0'),
('captcha_register', '0'),
('cookie_validity_days', '30'),
('count_users_online', '10'),
('count_views', '1'),
('daily_actions_time', '3:30'),
('data_privacy_agreement', '0'),
('data_privacy_statement_url', ''),
('deep_reply', '15'),
('default_email_contact', '0'),
('default_view', '0'),
('delete_ips', '0'),
('dont_reg_edit_by_admin', '0'),
('dont_reg_edit_by_mod', '0'),
('edit_delay', '3'),
('edit_max_time_period', '60'),
('edit_min_time_period', '5'),
('email_maxlength', '70'),
('email_notification_unregistered', '0'),
('email_subject_maxlength', '100'),
('email_text_maxlength', '10000'),
('empty_postings_possible', '0'),
('entries_by_users_only', '0'),
('flood_prevention_minutes', '2'),
('fold_threads', '0'),
('forum_address', 'http://localhost/deftacbetterliving/'),
('forum_description', 'yet another little forum'),
('forum_disabled_message', ''),
('forum_email', 'matthewdmtoledo@gmail.com'),
('forum_enabled', '1'),
('forum_name', 'Deftac Betterliving'),
('forum_readonly', '0'),
('home_linkaddress', '../'),
('home_linkname', ''),
('hp_maxlength', '70'),
('language_file', 'english.lang'),
('last_reply_link', '0'),
('latest_postings', '0'),
('location_maxlength', '40'),
('location_word_maxlength', '30'),
('mail_parameter', ''),
('max_email_time', '10800'),
('max_posting_time', '10800'),
('max_register_time', '10800'),
('min_email_time', '5'),
('min_posting_time', '5'),
('min_pw_digits', '0'),
('min_pw_length', '8'),
('min_pw_lowercase_letters', '0'),
('min_pw_special_characters', '0'),
('min_pw_uppercase_letters', '0'),
('min_register_time', '5'),
('name_maxlength', '70'),
('name_word_maxlength', '30'),
('page_browse_range', '10'),
('page_browse_show_last', '0'),
('profile_maxlength', '5000'),
('quote_symbol', '>'),
('read_state_expiration_method', '0'),
('read_state_expiration_value', '500'),
('register_mode', '0'),
('remember_last_visit', '1'),
('remember_userdata', '1'),
('rss_feed', '1'),
('rss_feed_max_items', '20'),
('save_spam', '1'),
('search_results_per_page', '20'),
('session_prefix', 'mlf2_'),
('show_if_edited', '1'),
('signature_maxlength', '255'),
('smilies', '1'),
('spam_check_registered', '0'),
('stop_forum_spam', '0'),
('subject_maxlength', '60'),
('subject_word_maxlength', '30'),
('syntax_highlighter', '0'),
('tags', '1'),
('tag_cloud', '0'),
('tag_cloud_day_period', '30'),
('tag_cloud_scale_max', '6'),
('tag_cloud_scale_min', '0'),
('temp_block_ip_after_repeated_failed_logins', '10'),
('terms_of_use_agreement', '0'),
('terms_of_use_url', ''),
('text_maxlength', '5000'),
('text_word_maxlength', '90'),
('theme', 'default'),
('threads_per_page', '30'),
('time_difference', '0'),
('time_zone', ''),
('uploads_per_page', '20'),
('upload_images', '0'),
('upload_max_img_height', '600'),
('upload_max_img_size', '60'),
('upload_max_img_width', '600'),
('username_maxlength', '40'),
('users_per_page', '20'),
('user_area_public', '0'),
('user_edit', '1'),
('user_edit_if_no_replies', '0'),
('very_deep_reply', '30');

-- --------------------------------------------------------

--
-- Table structure for table `deftac_smilies`
--

CREATE TABLE `deftac_smilies` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `file` varchar(100) NOT NULL DEFAULT '',
  `code_1` varchar(50) NOT NULL DEFAULT '',
  `code_2` varchar(50) NOT NULL DEFAULT '',
  `code_3` varchar(50) NOT NULL DEFAULT '',
  `code_4` varchar(50) NOT NULL DEFAULT '',
  `code_5` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deftac_smilies`
--

INSERT INTO `deftac_smilies` (`id`, `order_id`, `file`, `code_1`, `code_2`, `code_3`, `code_4`, `code_5`, `title`) VALUES
(1, 1, 'smile.png', ':-)', '', '', '', '', ''),
(2, 2, 'wink.png', ';-)', '', '', '', '', ''),
(3, 3, 'tongue.png', ':-P', '', '', '', '', ''),
(4, 4, 'biggrin.png', ':-D', '', '', '', '', ''),
(5, 5, 'neutral.png', ':-|', '', '', '', '', ''),
(6, 6, 'frown.png', ':-(', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `deftac_subscriptions`
--

CREATE TABLE `deftac_subscriptions` (
  `user_id` int(12) UNSIGNED DEFAULT NULL,
  `eid` int(12) UNSIGNED NOT NULL,
  `unsubscribe_code` varchar(36) NOT NULL,
  `tstamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deftac_tags`
--

CREATE TABLE `deftac_tags` (
  `id` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deftac_temp_infos`
--

CREATE TABLE `deftac_temp_infos` (
  `name` varchar(50) NOT NULL,
  `value` varchar(255) NOT NULL,
  `time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deftac_temp_infos`
--

INSERT INTO `deftac_temp_infos` (`name`, `value`, `time`) VALUES
('access_permission_checks', '0', NULL),
('last_changes', '0', NULL),
('last_version_check', '2.4.19.1', '2019-02-14 09:32:44'),
('last_version_uri', 'https://github.com/ilosuna/mylittleforum/releases/tag/2.4.19.1', NULL),
('next_daily_actions', '1550201400', '2019-02-14 09:32:44'),
('version', '2.4.99.0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deftac_uploads`
--

CREATE TABLE `deftac_uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `uploader` int(10) UNSIGNED DEFAULT NULL,
  `filename` varchar(64) DEFAULT NULL,
  `tstamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deftac_userdata`
--

CREATE TABLE `deftac_userdata` (
  `user_id` int(11) NOT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT '0',
  `user_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_real_name` varchar(255) NOT NULL DEFAULT '',
  `gender` tinyint(4) NOT NULL DEFAULT '0',
  `birthday` date DEFAULT NULL,
  `user_pw` varchar(255) NOT NULL DEFAULT '',
  `user_email` varchar(255) NOT NULL DEFAULT '',
  `email_contact` tinyint(4) DEFAULT '0',
  `user_hp` varchar(255) NOT NULL DEFAULT '',
  `user_location` varchar(255) NOT NULL DEFAULT '',
  `signature` varchar(255) NOT NULL DEFAULT '',
  `profile` text NOT NULL,
  `logins` int(11) NOT NULL DEFAULT '0',
  `last_login` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_logout` timestamp NULL DEFAULT NULL,
  `user_ip` varchar(128) NOT NULL DEFAULT '',
  `registered` timestamp NULL DEFAULT NULL,
  `category_selection` varchar(255) DEFAULT NULL,
  `thread_order` tinyint(4) NOT NULL DEFAULT '0',
  `user_view` tinyint(4) NOT NULL DEFAULT '0',
  `sidebar` tinyint(4) NOT NULL DEFAULT '1',
  `fold_threads` tinyint(4) NOT NULL DEFAULT '0',
  `thread_display` tinyint(4) NOT NULL DEFAULT '0',
  `new_posting_notification` tinyint(4) DEFAULT '0',
  `new_user_notification` tinyint(4) DEFAULT '0',
  `user_lock` tinyint(4) DEFAULT '0',
  `auto_login_code` varchar(50) NOT NULL DEFAULT '',
  `pwf_code` varchar(50) NOT NULL,
  `activate_code` varchar(50) NOT NULL DEFAULT '',
  `language` varchar(255) NOT NULL DEFAULT '',
  `time_zone` varchar(255) NOT NULL DEFAULT '',
  `time_difference` smallint(4) DEFAULT '0',
  `theme` varchar(255) NOT NULL DEFAULT '',
  `tou_accepted` datetime DEFAULT NULL,
  `dps_accepted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deftac_userdata`
--

INSERT INTO `deftac_userdata` (`user_id`, `user_type`, `user_name`, `user_real_name`, `gender`, `birthday`, `user_pw`, `user_email`, `email_contact`, `user_hp`, `user_location`, `signature`, `profile`, `logins`, `last_login`, `last_logout`, `user_ip`, `registered`, `category_selection`, `thread_order`, `user_view`, `sidebar`, `fold_threads`, `thread_display`, `new_posting_notification`, `new_user_notification`, `user_lock`, `auto_login_code`, `pwf_code`, `activate_code`, `language`, `time_zone`, `time_difference`, `theme`, `tou_accepted`, `dps_accepted`) VALUES
(1, 2, 'Martin', '', 0, NULL, 'ee386f35f7e468e3548a1a0f8b86120e854911cca6912c2f22', 'matthewdmtoledo@gmail.com', 1, '', '', '', '', 0, NULL, '2019-02-14 09:34:11', '', '2019-02-14 09:32:42', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', NULL, NULL),
(2, 0, 'mtoledodo', '', 0, NULL, 'f70449de97411f618c9ffd53d889c3c8a055cc7b5b44df9f57', 'matthewtoledo16@gmail.com', 0, '', '', '', '', 0, NULL, '2019-02-14 09:37:48', '::1', '2019-02-14 09:37:48', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '2752f69b46807e29b18ea86ca18c6a8d769fbfeaf029633325', '', '', 0, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deftac_userdata_cache`
--

CREATE TABLE `deftac_userdata_cache` (
  `cache_id` int(11) NOT NULL,
  `cache_signature` text NOT NULL,
  `cache_profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deftac_useronline`
--

CREATE TABLE `deftac_useronline` (
  `ip` char(15) NOT NULL DEFAULT '',
  `time` int(14) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deftac_useronline`
--

INSERT INTO `deftac_useronline` (`ip`, `time`, `user_id`) VALUES
('::1', 1550137068, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deftac_akismet_rating`
--
ALTER TABLE `deftac_akismet_rating`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `akismet_spam` (`spam`),
  ADD KEY `spam_check_status` (`spam_check_status`);

--
-- Indexes for table `deftac_b8_rating`
--
ALTER TABLE `deftac_b8_rating`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `b8_spam` (`spam`),
  ADD KEY `training_type` (`training_type`);

--
-- Indexes for table `deftac_b8_wordlist`
--
ALTER TABLE `deftac_b8_wordlist`
  ADD PRIMARY KEY (`token`);

--
-- Indexes for table `deftac_bookmarks`
--
ALTER TABLE `deftac_bookmarks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE_uid_pid` (`user_id`,`posting_id`);

--
-- Indexes for table `deftac_bookmark_tags`
--
ALTER TABLE `deftac_bookmark_tags`
  ADD PRIMARY KEY (`bid`,`tid`);

--
-- Indexes for table `deftac_categories`
--
ALTER TABLE `deftac_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deftac_entries`
--
ALTER TABLE `deftac_entries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `tid` (`tid`),
  ADD KEY `category` (`category`),
  ADD KEY `pid` (`pid`),
  ADD KEY `sticky` (`sticky`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `time` (`time`),
  ADD KEY `last_reply` (`last_reply`);

--
-- Indexes for table `deftac_entries_cache`
--
ALTER TABLE `deftac_entries_cache`
  ADD PRIMARY KEY (`cache_id`);

--
-- Indexes for table `deftac_entry_tags`
--
ALTER TABLE `deftac_entry_tags`
  ADD PRIMARY KEY (`bid`,`tid`);

--
-- Indexes for table `deftac_pages`
--
ALTER TABLE `deftac_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deftac_read_entries`
--
ALTER TABLE `deftac_read_entries`
  ADD PRIMARY KEY (`user_id`,`posting_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `posting_id` (`posting_id`);

--
-- Indexes for table `deftac_settings`
--
ALTER TABLE `deftac_settings`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `deftac_smilies`
--
ALTER TABLE `deftac_smilies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deftac_subscriptions`
--
ALTER TABLE `deftac_subscriptions`
  ADD UNIQUE KEY `user_thread` (`user_id`,`eid`) USING HASH,
  ADD KEY `hash` (`unsubscribe_code`);

--
-- Indexes for table `deftac_tags`
--
ALTER TABLE `deftac_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tag` (`tag`);

--
-- Indexes for table `deftac_temp_infos`
--
ALTER TABLE `deftac_temp_infos`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `deftac_uploads`
--
ALTER TABLE `deftac_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deftac_userdata`
--
ALTER TABLE `deftac_userdata`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_type` (`user_type`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `deftac_userdata_cache`
--
ALTER TABLE `deftac_userdata_cache`
  ADD PRIMARY KEY (`cache_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deftac_bookmarks`
--
ALTER TABLE `deftac_bookmarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deftac_categories`
--
ALTER TABLE `deftac_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deftac_entries`
--
ALTER TABLE `deftac_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deftac_pages`
--
ALTER TABLE `deftac_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deftac_smilies`
--
ALTER TABLE `deftac_smilies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `deftac_tags`
--
ALTER TABLE `deftac_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deftac_uploads`
--
ALTER TABLE `deftac_uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deftac_userdata`
--
ALTER TABLE `deftac_userdata`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
