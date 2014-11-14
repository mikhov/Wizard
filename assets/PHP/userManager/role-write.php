<?php
require_once(dirname(__FILE__)).'/../../classes/access_control/Query.php';
header( 'Content-type: application/json' );

$role = $_POST['newrole'];

$q = new Query();
$table = "user_group";
$columns = ["GroupName"];
$value = "'" . $role . "'";
$q->Insert($table,$columns, $value);

$columns = ["User_Group_Id"];
$where = array( "GroupName = " . $value );
$result = $q->Select($table,$columns,$where);

echo ( json_encode( $result[0] ));
?>