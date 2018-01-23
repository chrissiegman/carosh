<?php

echo "Thanks for your submission!<br><br>";

// Sanitize user input to prevent html injection
$first_name = htmlspecialchars($_POST['first_name']);
$last_name = htmlspecialchars($_POST['last_name']);
echo "You entered the following name: $first_name $last_name.<br><br>";

// Obviously we would want to put these credentials somewhere secure, like a .env or .ini file in a safe location.
$host = 'localhost';
$db   = 'persons';
$user = 'homestead';
$pass = 'secret';

$dsn = "mysql:host=$host;dbname=$db";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

// Here, we use prepared statements to prevent SQL injection
$stmt = $pdo->prepare('SELECT * FROM `persons` WHERE `last_name` = :last_name AND `first_name` = :first_name');
$paramsArray = ['last_name' => $last_name, 'first_name' => $first_name];
$stmt->execute($paramsArray);
$person = $stmt->fetch();

// Check for existence of first_name/last_name combination, if it doesn't exist, insert it.
if ($person) {
	echo "Looks like you're already in the database! Welcome back!<br><br>";
} else {
	echo "Adding you to the database...<br><br>";
	$stmt = $pdo->prepare('INSERT INTO `persons` (`first_name`, `last_name`) VALUES(:first_name, :last_name)');
	$stmt->execute($paramsArray);	
}