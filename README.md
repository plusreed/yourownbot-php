yourownbot-php
=================
**This project is no longer maintained. I can't guarantee that this will work on future versions of PHP.** A basic PHP powered [@yourownbot](https://twitter.com/#!/yourownbot) clone.

How to use
=================
It's quite easy:
 - Make a twitter account.
 - Go to [apps.twitter.com](http://apps.twitter.com) using that account
 - Create a new app
 - Set the permissions to Read and Write
 - Get your keys, and put them in `SendYourOwnTweet.php`
 - Set up a cron job.  
   Example:  
   `0,15,30,45 * * * * php /path/to/SendYourOwnTweet.php`
 - Enjoy your own bot!
