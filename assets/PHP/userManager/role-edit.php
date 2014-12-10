<?php
require_once(dirname(__FILE__)).'/../../classes/access_control/Query.php';
header( 'Content-type: application/json' );

$id = $_POST['id'];
$role = $_POST['role'];

$q = new Query();
$table = "user_group";
$columns = ["GroupName"];
$value = array( "'" . $role . "'" );
$where = array( "User_Group_Id = " . $id );
$q->Update( $table, $columns, $value, $where );

echo $id;
?>