<?php
if (!PHP_SAPI == 'cli') { die(); } // Only allow the CLI to run this script.

// tweeter.php
// https://github.com/plusreed/yourownbot-php

$word1 = array("Add", "your", "words", "here");
$word2 = array("Add", "your", "words", "here");
$rand_word1 = $word1[array_rand($word1, 1)];
$rand_word2 = $word2[array_rand($word2, 1)];

require_once('twitteroauth.php');

// TODO: Separate into .env
$consumerkey = "consumerkeyhere";
$consumersecret = "consumersecrethere";
$apikey = "apikeyhere";
$apisecret = "apisecrethere";

// Create a new object
$tweet = new TwitterOAuth($consumerkey, $consumersecret, $apikey, $apikeysecret);

// Randomize tweet
$tweetMessage = '$rand_word1 your own $rand_word2!';

// Make sure generated tweet is under 280 characters
if(strlen($tweetMessage) <= 280) {
	// Post the tweet
	$tweet->post('statuses/update', array('status' => $tweetMessage));
}
?>
