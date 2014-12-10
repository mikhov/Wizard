<?php
$dbname = 'Wizard';
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = 'Jhf#5479';

$sql_connection = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $dbusername, $dbpassword);
//mysql_connect('localhost', 'root', 't2181988');
//mysql_select_db('ajaxdb');

?>