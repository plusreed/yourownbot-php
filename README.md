yourownbot-online
=================

PHP-based @yourownbot clone

Instructions below on how to use.

How to use
=================
Pretty much the instructions are straight-forward.
All you have to do is make a @yourownbot account, then create an application (using http://apps.twitter.com) and setting the permissions to Read and Write. Then, retrieve your keys, and put them in.

How to use the arrays (word1 and word2)
=================
The arrays are also simple.

Set words in strings, and seperate them with commas.

Cron jobs
=================
From what I am predicting, @yourownbot works on a cron job, but with TTYtter. This is the php-based clone of it. Since @yourownbot tweets every 15 minutes, you need to set a cronjob as this:

Minutes     Command
0,15,30,45  php /home/[namehere]/public_html/SendYourOwnTweet.php

Don't worry, you can unload the files anywhere on your server. Just change the path to wherever it is located.

This cron job will allow the file to be executed every 15 minutes. :)
