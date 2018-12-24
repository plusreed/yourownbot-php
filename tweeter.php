<?php
require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

if (!PHP_SAPI == 'cli') { die("Please run this via a cron job or from the CLI."); } // Only allow the CLI to run this script.

$dotenv = new Dotenv\Dotenv(__DIR__);

// These are required for the app to function, so we should enforce that they exist in `.env`.
$dotenv->required(['TW_CONSUMER_KEY', 'TW_CONSUMER_SECRET', 'TW_API_KEY', 'TW_API_SECRET']);

$first = array(
	"Add", "your", "words", "here"
);
$second = array(
	"Add", "your", "words", "here"
);

/**
 * Creates a random "your-own" tweet.
 */
function makeTweet() {
	$dontChance = rand(0, 1); // Chance that the tweet will be prepended with "Don't".
	$r1 = $first[array_rand($first, 1)];
	$r2 = $second[array_rand($second, 1)];

	return ($dontChance = 1 ? "Don't" : "") . "$r1 your own $r2!";
}

// Get API keys and such.
$consumerkey = $_ENV['TW_CONSUMER_KEY'];
$consumersecret = $_ENV['TW_CONSUMER_SECRET'];
$apikey = $_ENV['TW_API_KEY'];
$apisecret = $_ENV['TW_API_SECRET'];

// Create a new object
$twitter = new TwitterOAuth($consumerkey, $consumersecret, $apikey, $apikeysecret);

// The random tweet we're posting.
$status = makeTweet();

// Make sure generated tweet is under 280 characters
if(strlen($status) <= 280) {
	// Post the tweet
	$twitter->post('statuses/update', ['status' => $status]);
}
