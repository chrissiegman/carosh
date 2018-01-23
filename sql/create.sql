CREATE TABLE IF NOT EXISTS User (
    User_id INT NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(30) NOT NULL,
    LastName VARCHAR(30) NOT NULL,
    PRIMARY KEY (User_id)
);

CREATE TABLE IF NOT EXISTS Roles (
    Role_id INT NOT NULL AUTO_INCREMENT,
    RoleName VARCHAR(30) NOT NULL,
    IsActive BOOLEAN NOT NULL,
    PRIMARY KEY (Role_id)
);

CREATE TABLE IF NOT EXISTS UserToRole (
    User_id INT NOT NULL,
    Role_id INT NOT NULL,
    PRIMARY KEY (User_id, Role_id),
    INDEX (Role_id, User_id)
);
