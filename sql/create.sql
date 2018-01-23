CREATE TABLE IF NOT EXISTS User (
    User_id int NOT NULL AUTO_INCREMENT,
    FirstName varchar(30) NOT NULL,
    LastName varchar(30) NOT NULL,
    PRIMARY KEY (User_id)
);

CREATE TABLE IF NOT EXISTS Roles (
    Role_id int NOT NULL AUTO_INCREMENT,
    RoleName varchar(30) NOT NULL,
    IsActive varchar(30) NOT NULL,
    PRIMARY KEY (Role_id)
);

CREATE TABLE IF NOT EXISTS UserToRole (
    User_id varchar(30) NOT NULL,
    Role_id varchar(30) NOT NULL,    
    PRIMARY KEY (User_id, Role_id),
    INDEX (Role_id, User_id)
);
