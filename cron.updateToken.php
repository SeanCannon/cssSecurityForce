<?php

  /**
   * This needs to be triggered through the command line - an actual cron has a one minute minimum interval. 
   * I set this to one second interval via command line with this command: 
   * while true ; do wget -O /dev/null http://www.mysite.com/path/to/cron.updateToken.php; sleep 1; done
   */

    $link = mysql_connect('localhost', 'db_user_here', 'db_pass_here') or die("Can not connect." . mysql_error());
    mysql_select_db('db_here', $link) or die("Can not select db.");
    mysql_query("UPDATE css_security_force SET token = MD5( NOW() )");
