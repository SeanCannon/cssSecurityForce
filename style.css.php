<?php
  
    /**
     * None of this code is intended to be serious or used in prod, even though it works.
     */

    $link = mysql_connect('localhost', 'db_user_here', 'db_pass_here') or die("Can not connect." . mysql_error());
    mysql_select_db('db_here', $link) or die("Can not select db.");

	$result = mysql_query("SELECT token FROM css_security_force");
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	$row = mysql_fetch_row($result);

	$token = $row[0];

	if (isset($_GET['token']) && $_GET['token'] == $token) {
	    echo <<<CSS
		body {
		    background-color : yellow;
		    color : pink;
		}
CSS;
	} else {
	    echo 'Stop stealing my CSS!!!!!!';
	};
