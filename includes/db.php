<?php
$db['db_host'] = "localhost";
$db['db_user'] = "spoofer";
$db['db_pass'] = "Spoofer*()911";
$db['db_name'] = "cms";

foreach ($db as $key => $value) {
	define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($connection)
	echo "We are connected";
