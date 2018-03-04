-- Users
DROP TABLE IF EXISTS acl_users;
CREATE TABLE acl_users (
	`id` INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(90) NOT NULL,
	`email` VARCHAR(90) NOT NULL,
	`hash` VARCHAR(60) NOT NULL,
    `status` TINYINT(1) UNSIGNED NOT NULL DEFAULT '1',
    `level` TINYINT(1) NOT NULL DEFAULT '0',
	PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Groups

-- Relations

-- Rules
