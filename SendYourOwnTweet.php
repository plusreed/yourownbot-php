<?php
// SendYourOwnTweet.php
// A basic PHP-powered @yourownbot clone.
// By PlusReed, minor improvements by +Sean.
// Licensed under MIT License

$word1 = array("Add", "your", "words", "here");
$word2 = array("Add", "your", "words", "here");
$rand_word1 = $word1[array_rand($word1, 1)];
$rand_word2 = $word2[array_rand($word2, 1)];

require_once('twitteroauth.php');

// We need the keys of the application used for this!
$consumerkey = "consumerkeyhere";
$consumersecret = "consumersecrethere";
$apikey = "apikeyhere";
$apikeysecret = "apikeysecrethere";

// Create a new object
$tweet = new TwitterOAuth($consumerkey, $consumersecret, $apikey, $apikeysecret);

// Randomized tweet
$tweetMessage = $rand_word1.' your own '.$rand_word2.'!';

// Make sure if its under 140 characters
// usually this isn't usually happening if you keep it under 140 characters
// Keep the first 80 characters and the second 40 characters

if(strlen($tweetMessage) <= 140) {
	// Post the tweet
	$tweet->post('statuses/update', array('status' => $tweetMessage));

}

?>
