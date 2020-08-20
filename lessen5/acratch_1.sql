CREATE TABLE `gbphp`.`users2` ( 
`id` INT(10) NOT NULL AUTO_INCREMENT ,  
    `login` VARCHAR(50) NOT NULL ,  
    `password` VARCHAR(50) NOT NULL COMMENT 'для авторизации' ,  
    `name` VARCHAR(50) NOT NULL DEFAULT 'n/o' COMMENT 'имя пользователя' ,    PRIMARY KEY  (`id`)) 
    ENGINE = InnoDB 
    COMMENT = 'Таблица для пользователей';

    INSERT INTO `users` 
    (`login`, `password`, `name`) 
    VALUES 
    ( 'user4', '1234', 'userName4'),
    ( 'user5', '1235', 'userName5'),
    ( 'user6', '1236', 'userName6');

    ALTER TABLE `users`  
    ADD `is_admin` TINYINT(1) NOT NULL DEFAULT '0';

    UPDATE `users` 
    SET `login` = '123' 
    WHERE  `id` = 3;

    DELETE FROM `users` WHERE `id` = 5;
    DELETE FROM `users` WHERE `id` = 6;

    SELECT * FROM `users`