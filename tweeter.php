<?php
require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

if (!PHP_SAPI == 'cli') { die("Please run this via a cron job or from the CLI."); } // Only allow the CLI to run this script.

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load(); // Load environment variables into script.

// These are required for the app to function, so we should enforce that they exist in `.env`.
$dotenv->required(['TW_CONSUMER_API_KEY', 'TW_CONSUMER_API_SECRET', 'TW_ACCESS_TOKEN', 'TW_ACCESS_TOKEN_SECRET']);

$first = array(
	"Add", "your", "words", "here"
);
$second = array(
	"Add", "your", "words", "here"
);
$dontChance = rand(0, 10); // Chance that the tweet will be prepended with "Don't".
$r1 = $first[array_rand($first, 1)];
$r2 = $second[array_rand($second, 1)];

/**
 * Generates a random tweet.
 * 
 * @param string $firstWord The first word in the tweet.
 * @param string $secondWord The second word used for the end of the tweet.
 * @param int $chance The chance that "Don't" will be prepended to the beginning of the tweet.
 */
function genTweet($firstWord, $secondWord, $chance) {
	return ($chance < 5 ? "Don't" : "") . "$firstWord your own $secondWord!";
}

// Create a new Twitter object
$twitter = new TwitterOAuth($_ENV['TW_CONSUMER_API_KEY'], $_ENV['TW_CONSUMER_API_SECRET'], $_ENV['TW_ACCESS_TOKEN'], $_ENV['TW_ACCESS_TOKEN_SECRET']);

// The random tweet we're posting
$status = genTweet($r1, $r2, $dontChance);

// Make sure generated tweet is under 280 characters
if(strlen($status) <= 280) {
	// Post the tweet
	$twitter->post('statuses/update', ['status' => $status]);
} else {
	die("Tweet is over 280 characters, not posting. Skipping this update.");
}