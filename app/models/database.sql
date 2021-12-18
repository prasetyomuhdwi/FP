CREATE DATABASE `pwl_db` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

SET NAMES utf8mb4;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';


DROP TABLE IF EXISTS `bookmarks`;
DROP TABLE IF EXISTS `likes`;
DROP TABLE IF EXISTS `comments`;
DROP TABLE IF EXISTS `blogs`;
DROP TABLE IF EXISTS `tags`;
DROP TABLE IF EXISTS `users`;


CREATE TABLE `tags` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL UNIQUE,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL UNIQUE,
  `password` text NOT NULL,
  `bio` text DEFAULT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'user',
  `avatar_path` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `blogs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tags_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `poster_path` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `summary` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tags_id` (`tags_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`),
  CONSTRAINT `blogs_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `bookmarks` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `blog_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_id` (`blog_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `bookmarks_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  CONSTRAINT `bookmarks_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `blog_id` bigint(20) NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_id` (`blog_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `likes` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `blog_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `blog_id` (`blog_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`username`,`fullname`,`email`,`password`,`bio`,`role`,`created_at`) VALUES ('admin','admin fp pwl','admin@mail.com','adminFP123','saya adalah admin yang bertugas untuk mengawasi dan mengatur website','baas',CURRENT_TIMESTAMP);

INSERT INTO `tags` (`name`,`created_at`) VALUES ('Tanaman Hias',CURRENT_TIMESTAMP);
INSERT INTO `tags` (`name`,`created_at`) VALUES ('Tanaman Obat',CURRENT_TIMESTAMP);
INSERT INTO `tags` (`name`,`created_at`) VALUES ('Tanaman Pangan',CURRENT_TIMESTAMP);
INSERT INTO `tags` (`name`,`created_at`) VALUES ('Tanaman Hidroponik',CURRENT_TIMESTAMP);
INSERT INTO `tags` (`name`,`created_at`) VALUES ('Tanaman Paku',CURRENT_TIMESTAMP);
INSERT INTO `tags` (`name`,`created_at`) VALUES ('Tanaman Aglonema',CURRENT_TIMESTAMP);
INSERT INTO `tags` (`name`,`created_at`) VALUES ('Tanaman Air',CURRENT_TIMESTAMP);
INSERT INTO `tags` (`name`,`created_at`) VALUES ('Tanaman Sayur',CURRENT_TIMESTAMP);
INSERT INTO `tags` (`name`,`created_at`) VALUES ('Tanaman Buah',CURRENT_TIMESTAMP);
INSERT INTO `tags` (`name`,`created_at`) VALUES ('Tanaman Bunga',CURRENT_TIMESTAMP);
INSERT INTO `tags` (`name`,`created_at`) VALUES ('Tanaman Indoor',CURRENT_TIMESTAMP);
INSERT INTO `tags` (`name`,`created_at`) VALUES ('Tanaman Outdoor',CURRENT_TIMESTAMP);
INSERT INTO `tags` (`name`,`created_at`) VALUES ('Tanaman Horitikultura',CURRENT_TIMESTAMP);
INSERT INTO `tags` (`name`,`created_at`) VALUES ('Tanaman Rambat',CURRENT_TIMESTAMP);


-- 2021-12-16 15:31:49