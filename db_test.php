<?php
require_once __DIR__ . '/assets/php/db.php';
//require_once __DIR__ . '/test_setup.php'; //test config values go here

$db = new db();
//TODO: Make tests for all CRUD operations
echo $db->select("localhost","3306","root","mysqlpw","my_tribe");
echo "test";

