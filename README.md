# yourownbot-php
A basic PHP-powered [@yourownbot](https://twitter.com/#!/yourownbot) clone.

## How to use
It's quite easy:
 - Make a Twitter account for your bot.
 - Go to [apps.twitter.com](http://apps.twitter.com) using that account
 - Create a new app
 - Set the permissions to Read and Write
 - Get your keys, and put them in `.env`
 - Set up a cron job.  
   Example:  
   ```
   reed@plusreed:~/yourownbot-php$ crontab -e
   ...
   0,15,30,45 * * * * php /path/to/tweeter.php
   ```
 - You should now be good, considering you did everything right. You can force execution of the script by going to the root of this directory and typing `php tweeter.php`.

## License
This project is licensed under the MIT license.
