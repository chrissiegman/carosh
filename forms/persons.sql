CREATE TABLE IF NOT EXISTS persons (
    id int NOT NULL AUTO_INCREMENT,
    first_name varchar(30) NOT NULL,
    last_name varchar(30) NOT NULL,
    PRIMARY KEY (id)
);

SELECT * FROM User WHERE User_id IN
(SELECT DISTINCT(User_id) FROM `UserToRole`)