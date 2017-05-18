yourownbot-php
=================
**This project is no longer maintained. Compatibility with PHP 7+ is not guaranteed.** <br /> A basic PHP-powered [@yourownbot](https://twitter.com/#!/yourownbot) clone.

How to use
=================
It's quite easy:
 - Make a Twitter account for your bot.
 - Go to [apps.twitter.com](http://apps.twitter.com) using that account
 - Create a new app
 - Set the permissions to Read and Write
 - Get your keys, and put them in `SendYourOwnTweet.php`
 - Set up a cron job.  
   Example:  
   `0,15,30,45 * * * * php /path/to/SendYourOwnTweet.php`
 - Enjoy your own bot!

Changes
================
If you want to make some changes to this code, feel free.
Some things I wanted to do that you might wanna do too:
- Check the user agent to see if the cron job is accessing it
- Separate word arrays and keys to another file
