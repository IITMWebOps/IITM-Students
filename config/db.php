<?php

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', '');
define('DB_USERS_TABLE','');

$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("cannot connect to host");
mysql_select_db(DB_NAME) or die("cannot select DB");
