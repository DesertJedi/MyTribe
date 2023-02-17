<?php
require_once __DIR__ . '/assets/php/db.php';
//require_once __DIR__ . '/test_setup.php'; //test config values go here

$db = new db();
$dbh = $db->connect("localhost","3306","root","mysqlpw","my_tribe");

echo $db->get_chats_for_user($dbh,'111AAA');


