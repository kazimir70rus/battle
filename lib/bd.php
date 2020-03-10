<?php

/*

CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`login` VARCHAR(25) NOT NULL,
	`password` VARCHAR(25) NOT NULL,
	`salt` VARCHAR(3) NOT NULL,
	`last_act` DATETIME NOT NULL,
	`reg_data` DATETIME NOT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;
