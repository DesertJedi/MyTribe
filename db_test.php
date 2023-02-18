<?php
require_once __DIR__ . '/assets/php/db.php';
//require_once __DIR__ . '/test_setup.php'; //test config values go here

$db = new db();
$dbh = $db->connect("localhost","3306","root","mysqlpw","my_tribe");

//echo $db->get_chats_for_user($dbh,'111AAA');
//$db->delete_single_chat($dbh,3);
//$db->delete_all_chats_from_user($dbh,'111AAA','222BBB');
$db->send_message($dbh,'111AAA','222BBB','Hey, this was sent from PHP!');