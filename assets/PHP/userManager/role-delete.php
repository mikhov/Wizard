<?php
require_once(dirname(__FILE__)).'/../../classes/access_control/Query.php';

$id = $_POST['id'];

$q = new Query();
$table = "user_group";
$column = ["User_Group_Id"];
$where = array( "User_Group_Id = " . $id );
$result = $q->Delete( $table, $column, $id, 1 );
print_r($result);
?>