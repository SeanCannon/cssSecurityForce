cssSecurityForce
================

Just a solution to a silly question on StackOverflow

1. Create a table in your datbase called `css_security_force` with one column `token` to hold an MD5 string.
2. Fill in your db connection credentials in all three php files. 
3. Start your pseudo cron in command line with the following command, swapping out the site and path with your own

while true ; do wget -O /dev/null http://www.mysite.com/path/to/cron.updateToken.php; sleep 1; done
