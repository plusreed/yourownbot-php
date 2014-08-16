<?php

$word1 = array(); // 1st word to be tweeted. i.e: [Word1 your own Word2!]
$word2 = array(); // 2nd word to be tweeted. i.e: [Word1 your own Word2!]
$random_word1 = $word1[array_rand($word1, 1)];
$random_word2 = $word2[array_rand($word2, 1)];

// Include twitteroauth
require_once('twitteroauth.php');

// Set keys
$consumerKey = 'APIKeyHere';
$consumerSecret = 'APISecretHere';
$accessToken = 'AccessTokenHere';
$accessTokenSecret = 'AccessTokenSecretHere';

// Create object
$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

// Set status message
$tweetMessage =  $random_word1.' your own '.$random_word2.'!';

// Check for 140 characters
if(strlen($tweetMessage) <= 140)
{
    // Post the status message
    $tweet->post('statuses/update', array('status' => $tweetMessage));
}

?>
