<?php

// TODO Add a few unit tests!!!

// Default string to transform
$subject = "This is the default string.";

// Allows a different string to be passed in via command line
if (array_key_exists(1, $argv)) {
	$subject = $argv[1];
}

var_dump(reverse_string($subject));

function reverse_string($subject)
{
	$split = get_punctuation($subject);
	$subject = $split['subject'];
	$punctuation = $split['punctuation'];
	$result = implode(" ", array_reverse($subject = explode(" ", $subject))) . $punctuation;
	return $result;
}

function get_punctuation($subject)
{
	$punctuation = "";
	$end = substr($subject, -1);
	if (in_array($end, [".", "?", "!"])) {
		$subject = str_split($subject);
		$punctuation = array_pop($subject);
		$subject = implode("", $subject);
	}

	$result['subject'] = $subject;
	$result['punctuation'] = $punctuation;
	return $result;
}

?>