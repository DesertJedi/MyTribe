<?php
require_once __DIR__ . '/assets/php/db.php';

$db = new db();
$dbh = $db->connect("localhost","3306","root","mysqlpw","my_tribe");


