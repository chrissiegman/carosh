<?php

// TODO Add a few unit tests!!!
// Update to work properly in browser! $argv causes error here...

// Default string to transform
$subject = "This is the default string.";

if (php_sapi_name() == "cli") {
	// Allows a different string to be passed in via command line
    if (array_key_exists(1, $argv)) {
		$subject = $argv[1];
	}
} else {
	// TODO add support for a form w/ user input here...
}

echo(reverse_string($subject) . PHP_EOL);

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