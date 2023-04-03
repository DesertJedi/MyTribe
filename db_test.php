<?php
require_once __DIR__ . '/assets/php/db.php';

$db = new db();
$dbh = $db->connect("localhost","3306","root","mysqlpw","my_tribe");

//echo $db->get_chats_for_user($dbh,'111AAA'); // WORKS
//$db->delete_single_chat($dbh,3); // WORKS
//$db->delete_all_chats_from_user($dbh,'111AAA','222BBB'); // WORKS
//$db->send_message($dbh,'111AAA','222BBB','Hey, this was sent from PHP!'); // WORKS
//echo $db->load_chats_window_data($dbh,'111AAA');
//echo $db->encrypt_message(); //WORKS
//echo $db->send_encrypted_message($dbh,'111AAA','222BBB','TEst MessAGe 123'); // WORKS
//echo $db->get_decrypt_key($dbh,'32'); // WORKS
//echo $db->decrypt_message($dbh,37); // WORKS
//echo $db->get_list_of_active_chats($dbh,'111AAA'); //WORKS
//echo $db->get_single_conversation($dbh,'111AAA','222BBB'); // WORKS
