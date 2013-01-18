<?php

    $link = mysql_connect('localhost', 'db_user_here', 'db_pass_here') or die("Can not connect." . mysql_error());
	mysql_select_db('db_here', $link) or die("Can not select db.");

	$result = mysql_query("SELECT token FROM css_security_force");
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	$row = mysql_fetch_row($result);

	$token = $row[0];

?>
<html>
<head>
<link rel="stylesheet" href="style.css.php?token=<?=$token?>" />
</head>
<body>
   If it's colorful, it worked.

   Here's the CSS file that was referenced: <a href="style.css.php?token=<?=$token?>" target="_blank">style.css.php?token=<?=$token?></a>.

   <br /><br />
   If you're quick enough, you can catch it. After a second, it'll be gone.
</body>
</html>
