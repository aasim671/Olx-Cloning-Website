-- Database name : ecommerce

-- *************************
-- *************************

-- Creating Users Table.

CREATE TABLE `users`( `id` int(255) NOT NULL AUTO_INCREMENT, `username` varchar(100) NOT NULL, `address` varchar(150) NOT NULL, PRIMARY KEY (`id`) ) ENGINE=INNODB;


-- Inserting User Into Users Table. 

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES ('1', 'Hilal Ahmad', 'hilaldev123@gmail.com', 'Ajk_573@ceo');