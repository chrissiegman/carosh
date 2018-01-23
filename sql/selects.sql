# Problem 1: Select all users with last name 'smith'
SELECT * FROM User WHERE LastName = 'smith';

#Problem 2: Select all users with one or more roles assigned
SELECT * FROM User WHERE User_id IN
(SELECT DISTINCT(User_id) FROM `UserToRole`);

#Problem 3: Select all roles with 5 or more users assigned
SELECT * FROM Roles WHERE Role_id in
(SELECT Role_id FROM UserToRole ur
group by Role_id
HAVING COUNT(*) >= 5);