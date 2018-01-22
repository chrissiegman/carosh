<?php

// TODO Add a few unit tests!!!

// TODO handle end of string punctuation

// Default string to transform
$subject = "This is the default string.";

// Allows a different string to be passed in via command line
if (array_key_exists(1, $argv)) {
	$subject = $argv[1];
}

$subject = implode(" ", array_reverse(explode(" ", $subject)));
var_dump($subject);

?>