<?php

// TODO Add a few unit tests!!!

// Default string to transform
$subject = "This is the default string.";

// Allows a different string to be passed in via command line
if (array_key_exists(1, $argv)) {
	$subject = $argv[1];
}

$terminator = "";
$end = substr($subject, -1);
if (in_array($end, [".", "?"])) {
	$subject = str_split($subject);
	$terminator = array_pop($subject);
	$subject = implode("", $subject);
}

$subject = implode(" ", array_reverse($subject = explode(" ", $subject))) . $terminator;
var_dump($subject);

?>